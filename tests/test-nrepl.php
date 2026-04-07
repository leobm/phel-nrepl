<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use Rhilip\Bencode\Bencode;

/**
 * Simple nREPL client for testing the Phel nREPL server
 */
class NreplTestClient
{
    private $socket;
    private int $messageId = 0;
    private string $session = 'test-session';

    public function __construct(string $host = '127.0.0.1', int $port = 7888)
    {
        $this->socket = @fsockopen($host, $port, $errno, $errstr, 5);
        if (!$this->socket) {
            throw new RuntimeException("Could not connect to nREPL server: $errstr ($errno)");
        }
        stream_set_timeout($this->socket, 5);
    }

    public function __destruct()
    {
        if ($this->socket) {
            fclose($this->socket);
        }
    }

    private function send(array $message): array
    {
        $message['id'] = (string)++$this->messageId;
        $message['session'] = $this->session;
        
        $encoded = Bencode::encode($message);
        fwrite($this->socket, $encoded);
        
        $response = fread($this->socket, 65536);
        if ($response === false || $response === '') {
            throw new RuntimeException("No response from server");
        }
        
        return Bencode::decode($response);
    }

    public function clone(): array
    {
        return $this->send(['op' => 'clone']);
    }

    public function describe(): array
    {
        return $this->send(['op' => 'describe']);
    }

    public function eval(string $code, string $ns = 'user'): array
    {
        return $this->send([
            'op' => 'eval',
            'code' => $code,
            'ns' => $ns,
        ]);
    }

    public function close(): array
    {
        return $this->send(['op' => 'close']);
    }
}

/**
 * Test runner
 */
class NreplTests
{
    private NreplTestClient $client;
    private int $passed = 0;
    private int $failed = 0;

    public function __construct()
    {
        echo "Connecting to nREPL server...\n";
        $this->client = new NreplTestClient();
        echo "Connected!\n\n";
    }

    private function test(string $name, callable $testFn): void
    {
        echo "Testing: $name... ";
        try {
            $testFn();
            echo "✓ PASSED\n";
            $this->passed++;
        } catch (Throwable $e) {
            echo "✗ FAILED: " . $e->getMessage() . "\n";
            $this->failed++;
        }
    }

    private function assertEquals($expected, $actual, string $message = ''): void
    {
        if ($expected !== $actual) {
            throw new RuntimeException(
                $message ?: "Expected " . json_encode($expected) . " but got " . json_encode($actual)
            );
        }
    }

    private function assertContains($needle, $haystack, string $message = ''): void
    {
        if (!in_array($needle, $haystack, true)) {
            throw new RuntimeException(
                $message ?: "Expected array to contain " . json_encode($needle)
            );
        }
    }

    private function assertArrayHasKey($key, $array, string $message = ''): void
    {
        if (!array_key_exists($key, $array)) {
            throw new RuntimeException(
                $message ?: "Expected array to have key '$key'"
            );
        }
    }

    public function run(): void
    {
        // Clone operation
        $this->test('clone operation', function () {
            $response = $this->client->clone();
            $this->assertArrayHasKey('new-session', $response);
            $this->assertContains('done', $response['status']);
        });

        // Describe operation
        $this->test('describe operation', function () {
            $response = $this->client->describe();
            $this->assertArrayHasKey('ops', $response);
            $this->assertContains('done', $response['status']);
        });

        // Simple arithmetic
        $this->test('eval (+ 1 2)', function () {
            $response = $this->client->eval('(+ 1 2)');
            $this->assertEquals('3', $response['value']);
            $this->assertContains('done', $response['status']);
        });

        $this->test('eval (* 10 10)', function () {
            $response = $this->client->eval('(* 10 10)');
            $this->assertEquals('100', $response['value']);
        });

        $this->test('eval (+ 2 21)', function () {
            $response = $this->client->eval('(+ 2 21)');
            $this->assertEquals('23', $response['value']);
        });

        // String operations
        $this->test('eval (php/strlen "test")', function () {
            $response = $this->client->eval('(php/strlen "test")');
            $this->assertEquals('4', $response['value']);
        });

        // DateTime
        $this->test('eval (php/new \\DateTime)', function () {
            $response = $this->client->eval('(php/new \\DateTime)');
            $this->assertArrayHasKey('value', $response);
            if (!preg_match('/^\d{4}-\d{2}-\d{2}/', $response['value'])) {
                throw new RuntimeException("Expected date format, got: " . $response['value']);
            }
        });

        // Clojure-specific code should be ignored
        $this->test('clojure-specific code ignored', function () {
            $response = $this->client->eval('(clojure.core/apply + [1 2 3])');
            $this->assertEquals('nil', $response['value']);
            $this->assertContains('done', $response['status']);
        });

        // Require transformation
        $this->test('eval (require phel\\json :as json)', function () {
            $response = $this->client->eval('(require phel\\json :as json)');
            if (isset($response['ex'])) {
                throw new RuntimeException("Got error: " . $response['ex']);
            }
            $this->assertContains('done', $response['status']);
        });

        // JSON decode using alias (after require)
        $this->test('eval (json/decode "{\"a\": 1}")', function () {
            $response = $this->client->eval('(json/decode "{\"a\": 1}")');
            if (isset($response['ex'])) {
                throw new RuntimeException("Got error: " . $response['ex']);
            }
            $this->assertContains('done', $response['status']);
        });

        // doc macro - should return documentation text, not nil
        $this->test('eval (doc filter)', function () {
            $response = $this->client->eval('(doc filter)');
            if (isset($response['ex'])) {
                throw new RuntimeException("Got error: " . $response['ex']);
            }
            if ($response['value'] === 'nil') {
                throw new RuntimeException("Expected doc output but got nil");
            }
            if (strpos($response['value'], 'filter') === false) {
                throw new RuntimeException("Expected 'filter' in doc output, got: " . $response['value']);
            }
            $this->assertContains('done', $response['status']);
        });

        // source macro
        $this->test('eval (source filter)', function () {
            $response = $this->client->eval('(source filter)');
            if (isset($response['ex'])) {
                throw new RuntimeException("Got error: " . $response['ex']);
            }
            $this->assertContains('done', $response['status']);
        });

        // ns form with :require - defines a namespace with an alias
        $this->test('eval (ns test (:require phel\\json :as j))', function () {
            $response = $this->client->eval('(ns test (:require phel\\json :as j))');
            if (isset($response['ex'])) {
                throw new RuntimeException("Got error: " . $response['ex']);
            }
            $this->assertContains('done', $response['status']);
        });

        // Use alias defined in previous ns form
        $this->test('eval (j/decode ...) after ns', function () {
            $response = $this->client->eval('(j/decode "{\"a\": 1}")');
            if (isset($response['ex'])) {
                throw new RuntimeException("Got error: " . $response['ex']);
            }
            $this->assertArrayHasKey('value', $response);
            $this->assertContains('done', $response['status']);
        });

        // Close operation
        $this->test('close operation', function () {
            $response = $this->client->close();
            $this->assertContains('done', $response['status']);
        });

        // Summary
        echo "\n" . str_repeat('=', 50) . "\n";
        echo "Results: {$this->passed} passed, {$this->failed} failed\n";
        
        if ($this->failed > 0) {
            exit(1);
        }
    }
}

// Run tests
echo "=== Phel nREPL Server Tests ===\n\n";
echo "Make sure the nREPL server is running on port 7888!\n";
echo "Run: php nrepl.php\n\n";

try {
    $tests = new NreplTests();
    $tests->run();
} catch (Throwable $e) {
    echo "Error: " . $e->getMessage() . "\n";
    exit(1);
}
