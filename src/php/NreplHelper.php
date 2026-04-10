<?php

declare(strict_types=1);

namespace PhelNrepl;

/**
 * Helper functions for nREPL that need to handle backslashes correctly
 */
class NreplHelper
{
    /** @var string|null Tracks the effective namespace set by (ns ...) forms */
    private static ?string $effectiveNs = null;

    /**
     * Get the effective namespace (set by a previous ns form).
     */
    public static function getEffectiveNs(): ?string
    {
        return self::$effectiveNs;
    }

    /**
     * Set the effective namespace.
     */
    public static function setEffectiveNs(?string $ns): void
    {
        self::$effectiveNs = $ns;
    }

    /**
     * Extract the namespace name from a (ns ...) form.
     * Returns null if code doesn't contain a ns form.
     */
    public static function extractNsName(string $code): ?string
    {
        if (preg_match('/\(ns\s+(\S+)/', $code, $matches)) {
            return $matches[1];
        }
        return null;
    }

    /**
     * Extract require aliases from (ns ... (:require ns :as alias)) forms.
     * Returns associative array [alias => fullNamespace].
     */
    public static function extractNsRequires(string $code): array
    {
        $aliases = [];
        if (preg_match_all('/\(:require\s+(\S+)\s+:as\s+([a-zA-Z0-9_-]+)\)/', $code, $matches, PREG_SET_ORDER)) {
            foreach ($matches as $match) {
                $aliases[$match[2]] = $match[1];
            }
        }
        return $aliases;
    }

    /**
     * Transform REPL-specific function calls to fully qualified calls
     * 
     * (require phel\json :as json) -> (phel\repl/require phel\json :as json)
     * (use \DateTime) -> (phel\repl/use \DateTime)
     * (doc map) -> (phel\repl/doc map)
     * (source filter) -> (phel\repl/source filter)
     * etc.
     */
    public static function transformReplCode(string $code): string
    {
        // Use single quotes to avoid escape interpretation
        $search = [
            '(require ',
            '(use ',
            '(doc ',
            '(source ',
            '(dir ',
            '(apropos ',
            '(find-fn ',
            '(symbol-info ',
            '(search-doc ',
        ];
        $replace = [
            '(phel\\repl/require ',
            '(phel\\repl/use ',
            '(phel\\repl/doc ',
            '(phel\\repl/source ',
            '(phel\\repl/dir ',
            '(phel\\repl/apropos ',
            '(phel\\repl/find-fn ',
            '(phel\\repl/symbol-info ',
            '(phel\\repl/search-doc ',
        ];
        
        return str_replace($search, $replace, $code);
    }
    
    /**
     * Register a namespace alias directly in the GlobalEnvironment.
     * This ensures the alias is available for subsequent evaluations.
     *
     * @param string $namespace The namespace to register the alias in (e.g., "user")
     * @param string $alias The alias name (e.g., "json")
     * @param string $fullNamespace The full namespace (e.g., "phel\\json")
     */
    public static function registerAlias(string $namespace, string $alias, string $fullNamespace): void
    {
        $env = \Phel\Compiler\Infrastructure\GlobalEnvironmentSingleton::getInstance();
        $aliasSymbol = \Phel\Lang\Symbol::create($alias);
        $fullSymbol = \Phel\Lang\Symbol::create($fullNamespace);
        $env->addRequireAlias($namespace, $aliasSymbol, $fullSymbol);
    }

    /**
     * Split concatenated bencode messages from a single TCP data event.
     * Returns an array of individual bencode message strings.
     */
    public static function splitBencodeMessages(string $data): array
    {
        $messages = [];
        $pos = 0;
        $len = strlen($data);

        while ($pos < $len) {
            $start = $pos;
            $depth = 0;

            do {
                if ($pos >= $len) break;
                $ch = $data[$pos];

                if ($ch === 'd' || $ch === 'l') {
                    $depth++;
                    $pos++;
                } elseif ($ch === 'e') {
                    $depth--;
                    $pos++;
                } elseif ($ch === 'i') {
                    // integer: i<number>e
                    $pos++;
                    while ($pos < $len && $data[$pos] !== 'e') $pos++;
                    $pos++; // skip 'e'
                } elseif (ctype_digit($ch)) {
                    // string: N:...
                    $colonPos = strpos($data, ':', $pos);
                    if ($colonPos === false) { $pos++; continue; }
                    $strLen = (int)substr($data, $pos, $colonPos - $pos);
                    $pos = $colonPos + 1 + $strLen;
                } else {
                    $pos++;
                }
            } while ($depth > 0 && $pos < $len);

            if ($pos > $start) {
                $messages[] = substr($data, $start, $pos - $start);
            }
        }

        return $messages;
    }
}
