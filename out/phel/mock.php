<?php declare(strict_types=1);
namespace phel\mock;
require_once __DIR__ . '/../phel/core.php';
\Phel::addDefinition(
  "phel\\core",
  "*file*",
  "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/mock.phel"
);
\Phel::addDefinition(
  "phel\\core",
  "*ns*",
  "phel\\mock"
);
\Phel::addDefinition(
  "phel\\mock",
  "mock-registry",
  (\Phel::getDefinition("phel\\core", "var"))(\Phel::map()),
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/mock.phel",
      \Phel::keyword("line"), 8,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/mock.phel",
      \Phel::keyword("line"), 8,
      \Phel::keyword("column"), 29
    )
  )
);
\Phel::addDefinition(
  "phel\\mock",
  "register-mock!",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\mock\\register_mock!";
    private $fn0;
    private $fn1;

    public function __construct() {
      $this->fn0 = new class() extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\mock\\register_mock!";

        public function __invoke($mock_fn, $call_history) {
          return (\Phel::getDefinition("phel\\mock", "register-mock!"))($mock_fn, $call_history, null);
        }
      };
      $this->fn1 = new class() extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\mock\\register_mock!";

        public function __invoke($mock_fn, $call_history, $reset_fn) {
          (\Phel::getDefinition("phel\\core", "swap!"))(\Phel::getDefinition("phel\\mock", "mock-registry"), \Phel::getDefinition("phel\\core", "assoc"), $mock_fn, \Phel::map(
            \Phel::keyword("call-history"), $call_history,
            \Phel::keyword("reset-fn"), $reset_fn
          ));
          return $mock_fn;
        }
      };
    }

    public function __invoke(...$args) {
      $argc = \count($args);
      switch ($argc) {
        case 2:
          return ($this->fn0)($args[0], $args[1]);
        case 3:
          return ($this->fn1)($args[0], $args[1], $args[2]);
        }
        throw new \InvalidArgumentException("No matching function arity");
      }
    },
    \Phel::map(
      \Phel::keyword("private"), true,
      \Phel::keyword("doc"), "```phel\n(register-mock! mock-fn call-history)\n(register-mock! mock-fn call-history reset-fn)\n```\nRegisters a mock function with its call history and optional reset function",
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/mock.phel",
        \Phel::keyword("line"), 10,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/mock.phel",
        \Phel::keyword("line"), 17,
        \Phel::keyword("column"), 12
      ),
      "min-arity", 2,
      "is-variadic", false,
      "max-arity", 3,
      "arglists", "([mock-fn call-history] [mock-fn call-history reset-fn])"
    )
  );
  \Phel::addDefinition(
    "phel\\mock",
    "get-mock-calls",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\mock\\get_mock_calls";

      public function __invoke($mock_fn) {

        $mock_data_2418 = (\Phel::getDefinition("phel\\core", "get"))((\Phel::getDefinition("phel\\core", "deref"))(\Phel::getDefinition("phel\\mock", "mock-registry")), $mock_fn);
        if (($__truthy = $mock_data_2418) !== null && $__truthy !== false) {
          return (\Phel::getDefinition("phel\\core", "get"))($mock_data_2418, \Phel::keyword("call-history"));
        } else {
          return null;
        }

      }
    },
    \Phel::map(
      \Phel::keyword("private"), true,
      \Phel::keyword("doc"), "```phel\n(get-mock-calls mock-fn)\n```\n",
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/mock.phel",
        \Phel::keyword("line"), 19,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/mock.phel",
        \Phel::keyword("line"), 23,
        \Phel::keyword("column"), 38
      ),
      "min-arity", 1,
      "is-variadic", false,
      "arglists", "[mock-fn]"
    )
  );
  \Phel::addDefinition(
    "phel\\mock",
    "mock",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\mock\\mock";

      public function __invoke($return_value) {
        $call_history_2419 = (\Phel::getDefinition("phel\\core", "var"))(\Phel::vector([]));
        return (\Phel::getDefinition("phel\\mock", "register-mock!"))(new class($return_value, $call_history_2419) extends \Phel\Lang\AbstractFn {
          public const BOUND_TO = "phel\\mock\\mock";
          private $return_value;
          private $call_history_2419;

          public function __construct($return_value, $call_history_2419) {
            $this->return_value = $return_value;
            $this->call_history_2419 = $call_history_2419;
          }

          public function __invoke(...$args) {
            $return_value = $this->return_value;
            $call_history_2419 = $this->call_history_2419;
            $args = \Phel::vector($args);
            (\Phel::getDefinition("phel\\core", "swap!"))($call_history_2419, \Phel::getDefinition("phel\\core", "push"), $args);
            return $return_value;
          }
        }, $call_history_2419);
      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(mock return-value)\n```\nCreates a mock function that returns a fixed value and tracks all calls.",
      \Phel::keyword("example"), "(def my-mock (mock :return-value))",
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/mock.phel",
        \Phel::keyword("line"), 29,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/mock.phel",
        \Phel::keyword("line"), 38,
        \Phel::keyword("column"), 20
      ),
      "min-arity", 1,
      "is-variadic", false,
      "arglists", "[return-value]"
    )
  );
  \Phel::addDefinition(
    "phel\\mock",
    "mock-fn",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\mock\\mock_fn";

      public function __invoke($f) {
        $call_history_2420 = (\Phel::getDefinition("phel\\core", "var"))(\Phel::vector([]));
        return (\Phel::getDefinition("phel\\mock", "register-mock!"))(new class($f, $call_history_2420) extends \Phel\Lang\AbstractFn {
          public const BOUND_TO = "phel\\mock\\mock_fn";
          private $f;
          private $call_history_2420;

          public function __construct($f, $call_history_2420) {
            $this->f = $f;
            $this->call_history_2420 = $call_history_2420;
          }

          public function __invoke(...$args) {
            $f = $this->f;
            $call_history_2420 = $this->call_history_2420;
            $args = \Phel::vector($args);
            (\Phel::getDefinition("phel\\core", "swap!"))($call_history_2420, \Phel::getDefinition("phel\\core", "push"), $args);
            return ($f)(...(($args) ?? []));
          }
        }, $call_history_2420);
      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(mock-fn f)\n```\nCreates a mock function with custom behavior that tracks all calls.",
      \Phel::keyword("example"), "(def my-mock (mock-fn (fn [x] (* x 2))))",
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/mock.phel",
        \Phel::keyword("line"), 40,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/mock.phel",
        \Phel::keyword("line"), 49,
        \Phel::keyword("column"), 20
      ),
      "min-arity", 1,
      "is-variadic", false,
      "arglists", "[f]"
    )
  );
  \Phel::addDefinition(
    "phel\\mock",
    "spy",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\mock\\spy";

      public function __invoke($f) {
        return (\Phel::getDefinition("phel\\mock", "mock-fn"))($f);
      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(spy f)\n```\nWraps an existing function to track calls while preserving original behavior.",
      \Phel::keyword("example"), "(def original-fn (fn [x] (* x 2)))",
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/mock.phel",
        \Phel::keyword("line"), 51,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/mock.phel",
        \Phel::keyword("line"), 55,
        \Phel::keyword("column"), 14
      ),
      "min-arity", 1,
      "is-variadic", false,
      "arglists", "[f]"
    )
  );
  \Phel::addDefinition(
    "phel\\mock",
    "mock-returning",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\mock\\mock_returning";

      public function __invoke($values) {
        $call_history_2421 = (\Phel::getDefinition("phel\\core", "var"))(\Phel::vector([]));
        $index_2422 = (\Phel::getDefinition("phel\\core", "var"))(0);
        $max_index_2423 = (function() use($values,$call_history_2421,$index_2422) {
          (\Phel::getDefinition("phel\\core", "assert-non-nil"))((\Phel::getDefinition("phel\\core", "count"))($values));
          return ((\Phel::getDefinition("phel\\core", "count"))($values) - 1);
        })();
        $reset_fn_2424 = new class($values, $call_history_2421, $index_2422, $max_index_2423) extends \Phel\Lang\AbstractFn {
          public const BOUND_TO = "phel\\mock\\mock_returning.reset_fn";
          private $values;
          private $call_history_2421;
          private $index_2422;
          private $max_index_2423;

          public function __construct($values, $call_history_2421, $index_2422, $max_index_2423) {
            $this->values = $values;
            $this->call_history_2421 = $call_history_2421;
            $this->index_2422 = $index_2422;
            $this->max_index_2423 = $max_index_2423;
          }

          public function __invoke() {
            $values = $this->values;
            $call_history_2421 = $this->call_history_2421;
            $index_2422 = $this->index_2422;
            $max_index_2423 = $this->max_index_2423;
            return (\Phel::getDefinition("phel\\core", "set!"))($index_2422, 0);
          }
        };
        return (\Phel::getDefinition("phel\\mock", "register-mock!"))(new class($values, $call_history_2421, $index_2422, $max_index_2423, $reset_fn_2424) extends \Phel\Lang\AbstractFn {
          public const BOUND_TO = "phel\\mock\\mock_returning";
          private $values;
          private $call_history_2421;
          private $index_2422;
          private $max_index_2423;
          private $reset_fn_2424;

          public function __construct($values, $call_history_2421, $index_2422, $max_index_2423, $reset_fn_2424) {
            $this->values = $values;
            $this->call_history_2421 = $call_history_2421;
            $this->index_2422 = $index_2422;
            $this->max_index_2423 = $max_index_2423;
            $this->reset_fn_2424 = $reset_fn_2424;
          }

          public function __invoke(...$args) {
            $values = $this->values;
            $call_history_2421 = $this->call_history_2421;
            $index_2422 = $this->index_2422;
            $max_index_2423 = $this->max_index_2423;
            $reset_fn_2424 = $this->reset_fn_2424;
            $args = \Phel::vector($args);
            (\Phel::getDefinition("phel\\core", "swap!"))($call_history_2421, \Phel::getDefinition("phel\\core", "push"), $args);
            $current_index_2425 = (\Phel::getDefinition("phel\\core", "deref"))($index_2422);
            $result_2426 = (\Phel::getDefinition("phel\\core", "get"))($values, (\Phel::getDefinition("phel\\core", "min"))($current_index_2425, $max_index_2423));
            if (($__truthy = ($current_index_2425 < $max_index_2423)) !== null && $__truthy !== false) {
              (\Phel::getDefinition("phel\\core", "swap!"))($index_2422, \Phel::getDefinition("phel\\core", "inc"));
            } else {

            }

            return $result_2426;
          }
        }, $call_history_2421, $reset_fn_2424);
      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(mock-returning values)\n```\nCreates a mock that returns different values for consecutive calls.\n  After exhausting values, returns the last value.",
      \Phel::keyword("example"), "(def my-mock (mock-returning [1 2 3]))",
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/mock.phel",
        \Phel::keyword("line"), 57,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/mock.phel",
        \Phel::keyword("line"), 75,
        \Phel::keyword("column"), 16
      ),
      "min-arity", 1,
      "is-variadic", false,
      "arglists", "[values]"
    )
  );
  \Phel::addDefinition(
    "phel\\mock",
    "mock-throwing",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\mock\\mock_throwing";

      public function __invoke($exception) {
        $call_history_2427 = (\Phel::getDefinition("phel\\core", "var"))(\Phel::vector([]));
        return (\Phel::getDefinition("phel\\mock", "register-mock!"))(new class($exception, $call_history_2427) extends \Phel\Lang\AbstractFn {
          public const BOUND_TO = "phel\\mock\\mock_throwing";
          private $exception;
          private $call_history_2427;

          public function __construct($exception, $call_history_2427) {
            $this->exception = $exception;
            $this->call_history_2427 = $call_history_2427;
          }

          public function __invoke(...$args) {
            $exception = $this->exception;
            $call_history_2427 = $this->call_history_2427;
            $args = \Phel::vector($args);
            (\Phel::getDefinition("phel\\core", "swap!"))($call_history_2427, \Phel::getDefinition("phel\\core", "push"), $args);
            throw $exception;
          }
        }, $call_history_2427);
      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(mock-throwing exception)\n```\nCreates a mock that throws an exception when called.",
      \Phel::keyword("example"), "(def my-mock (mock-throwing (php/new \\RuntimeException \"API unavailable\")))",
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/mock.phel",
        \Phel::keyword("line"), 77,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/mock.phel",
        \Phel::keyword("line"), 86,
        \Phel::keyword("column"), 20
      ),
      "min-arity", 1,
      "is-variadic", false,
      "arglists", "[exception]"
    )
  );
  \Phel::addDefinition(
    "phel\\mock",
    "mock?",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\mock\\mock?";

      public function __invoke($f) {
        return (\Phel::getDefinition("phel\\core", "contains?"))((\Phel::getDefinition("phel\\core", "deref"))(\Phel::getDefinition("phel\\mock", "mock-registry")), $f);
      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(mock? f)\n```\nReturns true if the function is a mock.",
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/mock.phel",
        \Phel::keyword("line"), 92,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/mock.phel",
        \Phel::keyword("line"), 95,
        \Phel::keyword("column"), 38
      ),
      "min-arity", 1,
      "is-variadic", false,
      "arglists", "[f]"
    )
  );
  \Phel::addDefinition(
    "phel\\mock",
    "calls",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\mock\\calls";

      public function __invoke($mock_fn) {
        $call_history_2428 = (\Phel::getDefinition("phel\\mock", "get-mock-calls"))($mock_fn);
        if (($__truthy = $call_history_2428) !== null && $__truthy !== false) {
          return (\Phel::getDefinition("phel\\core", "deref"))($call_history_2428);
        } else {
          return \Phel::vector([]);
        }

      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(calls mock-fn)\n```\nReturns a list of all argument lists the mock was called with.",
      \Phel::keyword("example"), "(def my-mock (mock :result))",
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/mock.phel",
        \Phel::keyword("line"), 97,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/mock.phel",
        \Phel::keyword("line"), 104,
        \Phel::keyword("column"), 11
      ),
      "min-arity", 1,
      "is-variadic", false,
      "arglists", "[mock-fn]"
    )
  );
  \Phel::addDefinition(
    "phel\\mock",
    "call-count",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\mock\\call_count";

      public function __invoke($mock_fn) {
        return (\Phel::getDefinition("phel\\core", "count"))((\Phel::getDefinition("phel\\mock", "calls"))($mock_fn));
      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(call-count mock-fn)\n```\nReturns the number of times the mock was called.",
      \Phel::keyword("example"), "(def my-mock (mock :result))",
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/mock.phel",
        \Phel::keyword("line"), 106,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/mock.phel",
        \Phel::keyword("line"), 110,
        \Phel::keyword("column"), 26
      ),
      "min-arity", 1,
      "is-variadic", false,
      "arglists", "[mock-fn]"
    )
  );
  \Phel::addDefinition(
    "phel\\mock",
    "called?",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\mock\\called?";

      public function __invoke($mock_fn) {
        return ((\Phel::getDefinition("phel\\mock", "call-count"))($mock_fn) > 0);
      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(called? mock-fn)\n```\nReturns true if the mock was called at least once.",
      \Phel::keyword("example"), "(def my-mock (mock :result))",
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/mock.phel",
        \Phel::keyword("line"), 112,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/mock.phel",
        \Phel::keyword("line"), 116,
        \Phel::keyword("column"), 29
      ),
      "min-arity", 1,
      "is-variadic", false,
      "arglists", "[mock-fn]"
    )
  );
  \Phel::addDefinition(
    "phel\\mock",
    "called-with?",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\mock\\called_with?";

      public function __invoke($mock_fn, ...$expected_args) {
        $expected_args = \Phel::vector($expected_args);
        $all_calls_2429 = (\Phel::getDefinition("phel\\mock", "calls"))($mock_fn);
        return (\Phel::getDefinition("phel\\core", "some?"))(new class($mock_fn, $expected_args, $all_calls_2429) extends \Phel\Lang\AbstractFn {
          public const BOUND_TO = "phel\\mock\\called_with?";
          private $mock_fn;
          private $expected_args;
          private $all_calls_2429;

          public function __construct($mock_fn, $expected_args, $all_calls_2429) {
            $this->mock_fn = $mock_fn;
            $this->expected_args = $expected_args;
            $this->all_calls_2429 = $all_calls_2429;
          }

          public function __invoke($call) {
            $mock_fn = $this->mock_fn;
            $expected_args = $this->expected_args;
            $all_calls_2429 = $this->all_calls_2429;
            return (\Phel::getDefinition("phel\\core", "="))($call, $expected_args);
          }
        }, $all_calls_2429);
      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(called-with? mock-fn & expected-args)\n```\nReturns true if the mock was called with the exact arguments.",
      \Phel::keyword("example"), "(def my-mock (mock :result))",
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/mock.phel",
        \Phel::keyword("line"), 118,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/mock.phel",
        \Phel::keyword("line"), 123,
        \Phel::keyword("column"), 58
      ),
      "min-arity", 1,
      "is-variadic", true,
      "arglists", "[mock-fn & expected-args]"
    )
  );
  \Phel::addDefinition(
    "phel\\mock",
    "called-once?",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\mock\\called_once?";

      public function __invoke($mock_fn) {
        return (\Phel::getDefinition("phel\\core", "="))(1, (\Phel::getDefinition("phel\\mock", "call-count"))($mock_fn));
      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(called-once? mock-fn)\n```\nReturns true if the mock was called exactly once.",
      \Phel::keyword("example"), "(def my-mock (mock :result))",
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/mock.phel",
        \Phel::keyword("line"), 125,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/mock.phel",
        \Phel::keyword("line"), 129,
        \Phel::keyword("column"), 29
      ),
      "min-arity", 1,
      "is-variadic", false,
      "arglists", "[mock-fn]"
    )
  );
  \Phel::addDefinition(
    "phel\\mock",
    "called-times?",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\mock\\called_times?";

      public function __invoke($mock_fn, $n) {
        return (\Phel::getDefinition("phel\\core", "="))($n, (\Phel::getDefinition("phel\\mock", "call-count"))($mock_fn));
      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(called-times? mock-fn n)\n```\nReturns true if the mock was called exactly n times.",
      \Phel::keyword("example"), "(def my-mock (mock :result))",
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/mock.phel",
        \Phel::keyword("line"), 131,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/mock.phel",
        \Phel::keyword("line"), 135,
        \Phel::keyword("column"), 29
      ),
      "min-arity", 2,
      "is-variadic", false,
      "arglists", "[mock-fn n]"
    )
  );
  \Phel::addDefinition(
    "phel\\mock",
    "never-called?",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\mock\\never_called?";

      public function __invoke($mock_fn) {
        return (\Phel::getDefinition("phel\\core", "="))(0, (\Phel::getDefinition("phel\\mock", "call-count"))($mock_fn));
      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(never-called? mock-fn)\n```\nReturns true if the mock was never called.",
      \Phel::keyword("example"), "(def my-mock (mock :result))",
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/mock.phel",
        \Phel::keyword("line"), 137,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/mock.phel",
        \Phel::keyword("line"), 141,
        \Phel::keyword("column"), 29
      ),
      "min-arity", 1,
      "is-variadic", false,
      "arglists", "[mock-fn]"
    )
  );
  \Phel::addDefinition(
    "phel\\mock",
    "last-call",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\mock\\last_call";

      public function __invoke($mock_fn) {
        return (\Phel::getDefinition("phel\\core", "last"))((\Phel::getDefinition("phel\\mock", "calls"))($mock_fn));
      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(last-call mock-fn)\n```\nReturns the arguments from the most recent call.",
      \Phel::keyword("example"), "(def my-mock (mock :result))",
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/mock.phel",
        \Phel::keyword("line"), 143,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/mock.phel",
        \Phel::keyword("line"), 147,
        \Phel::keyword("column"), 25
      ),
      "min-arity", 1,
      "is-variadic", false,
      "arglists", "[mock-fn]"
    )
  );
  \Phel::addDefinition(
    "phel\\mock",
    "first-call",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\mock\\first_call";

      public function __invoke($mock_fn) {
        return (\Phel::getDefinition("phel\\core", "first"))((\Phel::getDefinition("phel\\mock", "calls"))($mock_fn));
      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(first-call mock-fn)\n```\nReturns the arguments from the first call.",
      \Phel::keyword("example"), "(def my-mock (mock :result))",
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/mock.phel",
        \Phel::keyword("line"), 149,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/mock.phel",
        \Phel::keyword("line"), 153,
        \Phel::keyword("column"), 26
      ),
      "min-arity", 1,
      "is-variadic", false,
      "arglists", "[mock-fn]"
    )
  );
  \Phel::addDefinition(
    "phel\\mock",
    "reset-mock!",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\mock\\reset_mock!";

      public function __invoke($mock_fn) {
        $mock_data_2430 = (\Phel::getDefinition("phel\\core", "get"))((\Phel::getDefinition("phel\\core", "deref"))(\Phel::getDefinition("phel\\mock", "mock-registry")), $mock_fn);
        if (($__truthy = $mock_data_2430) !== null && $__truthy !== false) {
          $call_history_2431 = (\Phel::getDefinition("phel\\core", "get"))($mock_data_2430, \Phel::keyword("call-history"));
          $reset_fn_2432 = (\Phel::getDefinition("phel\\core", "get"))($mock_data_2430, \Phel::keyword("reset-fn"));
          (\Phel::getDefinition("phel\\core", "set!"))($call_history_2431, \Phel::vector([]));
          if (($__truthy = $reset_fn_2432) !== null && $__truthy !== false) {
            return ($reset_fn_2432)();
          } else {
            return null;
          }

        } else {
          return null;
        }

      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(reset-mock! mock-fn)\n```\nResets the call history of a mock without removing it from the registry.\n  The mock can continue to be used and track new calls.",
      \Phel::keyword("example"), "(def my-mock (mock :result))",
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/mock.phel",
        \Phel::keyword("line"), 155,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/mock.phel",
        \Phel::keyword("line"), 166,
        \Phel::keyword("column"), 25
      ),
      "min-arity", 1,
      "is-variadic", false,
      "arglists", "[mock-fn]"
    )
  );
  \Phel::addDefinition(
    "phel\\mock",
    "clear-all-mocks!",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\mock\\clear_all_mocks!";

      public function __invoke() {
        return (\Phel::getDefinition("phel\\core", "set!"))(\Phel::getDefinition("phel\\mock", "mock-registry"), \Phel::map());
      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(clear-all-mocks!)\n```\nClears the entire mock registry.\n  Useful for cleanup between test suites in long-running processes.",
      \Phel::keyword("example"), "(clear-all-mocks!) ; All mocks removed from registry",
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/mock.phel",
        \Phel::keyword("line"), 168,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/mock.phel",
        \Phel::keyword("line"), 173,
        \Phel::keyword("column"), 26
      ),
      "min-arity", 0,
      "is-variadic", false,
      "arglists", "[]"
    )
  );
  \Phel::addDefinition(
    "phel\\mock",
    "with-mocks",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\mock\\with_mocks";

      public function __invoke($bindings, ...$body) {
        $body = \Phel::vector($body);
        $symbols_2433 = (\Phel::getDefinition("phel\\core", "take-nth"))(2, $bindings);
        $values_2434 = (\Phel::getDefinition("phel\\core", "take-nth"))(2, (\Phel::getDefinition("phel\\core", "drop"))(1, $bindings));
        $mock_syms_2435 = (\Phel::getDefinition("phel\\core", "map"))(new class($bindings, $body, $symbols_2433, $values_2434) extends \Phel\Lang\AbstractFn {
          public const BOUND_TO = "phel\\mock\\with_mocks.mock_syms";
          private $bindings;
          private $body;
          private $symbols_2433;
          private $values_2434;

          public function __construct($bindings, $body, $symbols_2433, $values_2434) {
            $this->bindings = $bindings;
            $this->body = $body;
            $this->symbols_2433 = $symbols_2433;
            $this->values_2434 = $values_2434;
          }

          public function __invoke($__phel_2436) {
            $bindings = $this->bindings;
            $body = $this->body;
            $symbols_2433 = $this->symbols_2433;
            $values_2434 = $this->values_2434;
            return (\Phel::getDefinition("phel\\core", "gensym"))("mock");
          }
        }, $values_2434);
        return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("let"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "vector"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "interleave"))($mock_syms_2435, $values_2434))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/binding"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "vector"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "interleave"))($symbols_2433, $mock_syms_2435))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("try"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("do"))), $body)) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("finally"))), (\Phel::getDefinition("phel\\core", "map"))(new class($bindings, $body, $symbols_2433, $values_2434, $mock_syms_2435) extends \Phel\Lang\AbstractFn {
          public const BOUND_TO = "phel\\mock\\with_mocks";
          private $bindings;
          private $body;
          private $symbols_2433;
          private $values_2434;
          private $mock_syms_2435;

          public function __construct($bindings, $body, $symbols_2433, $values_2434, $mock_syms_2435) {
            $this->bindings = $bindings;
            $this->body = $body;
            $this->symbols_2433 = $symbols_2433;
            $this->values_2434 = $values_2434;
            $this->mock_syms_2435 = $mock_syms_2435;
          }

          public function __invoke($m) {
            $bindings = $this->bindings;
            $body = $this->body;
            $symbols_2433 = $this->symbols_2433;
            $values_2434 = $this->values_2434;
            $mock_syms_2435 = $this->mock_syms_2435;
            return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\mock/reset-mock!"))), (\Phel::getDefinition("phel\\core", "list"))($m))) ?? []));
          }
        }, $mock_syms_2435))) ?? []))))) ?? []))))) ?? []))))) ?? []));
      }
    },
    \Phel::map(
      \Phel::keyword("macro"), true,
      \Phel::keyword("doc"), "```phel\n(with-mocks bindings & body)\n```\nTemporarily replaces functions with mocks using binding.\n  Automatically resets mocks after the body executes.\n\n  Works with inline mock creation:\n    ```phel\n    (with-mocks [http-get (mock {:status 200})]\n      (http-get)\n      ;; Mock is automatically reset after this block)\n    ```\n\n  Also works with pre-defined mocks:\n    ```phel\n    (let [my-mock (mock :result)]\n      (with-mocks [some-fn my-mock]\n        (some-fn)))\n    ```\n\n  If you need to wrap the mock in a function (e.g., to adapt arguments),\n  you'll need to manually reset:\n    ```phel\n    (with-mocks [some-fn (fn [& args] (my-mock (transform args)))]\n      (some-fn)\n      (reset-mock! my-mock))\n    ```",
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/mock.phel",
        \Phel::keyword("line"), 179,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/mock.phel",
        \Phel::keyword("line"), 213,
        \Phel::keyword("column"), 70
      ),
      "min-arity", 1,
      "is-variadic", true,
      "arglists", "[bindings & body]"
    )
  );
  \Phel::addDefinition(
    "phel\\mock",
    "with-mock-wrapper",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\mock\\with_mock_wrapper";

      public function __invoke($bindings, ...$body) {
        $body = \Phel::vector($body);
        $grouped_2437 = (\Phel::getDefinition("phel\\core", "partition"))(3, $bindings);
        $symbols_2438 = (\Phel::getDefinition("phel\\core", "map"))(\Phel::getDefinition("phel\\core", "first"), $grouped_2437);
        $mocks_2439 = (\Phel::getDefinition("phel\\core", "map"))(\Phel::getDefinition("phel\\core", "second"), $grouped_2437);
        $wrappers_2440 = (\Phel::getDefinition("phel\\core", "map"))(new class($bindings, $body, $grouped_2437, $symbols_2438, $mocks_2439) extends \Phel\Lang\AbstractFn {
          public const BOUND_TO = "phel\\mock\\with_mock_wrapper.wrappers";
          private $bindings;
          private $body;
          private $grouped_2437;
          private $symbols_2438;
          private $mocks_2439;

          public function __construct($bindings, $body, $grouped_2437, $symbols_2438, $mocks_2439) {
            $this->bindings = $bindings;
            $this->body = $body;
            $this->grouped_2437 = $grouped_2437;
            $this->symbols_2438 = $symbols_2438;
            $this->mocks_2439 = $mocks_2439;
          }

          public function __invoke($g) {
            $bindings = $this->bindings;
            $body = $this->body;
            $grouped_2437 = $this->grouped_2437;
            $symbols_2438 = $this->symbols_2438;
            $mocks_2439 = $this->mocks_2439;
            return (\Phel::getDefinition("phel\\core", "get"))($g, 2);
          }
        }, $grouped_2437);
        $mock_syms_2441 = (\Phel::getDefinition("phel\\core", "map"))(new class($bindings, $body, $grouped_2437, $symbols_2438, $mocks_2439, $wrappers_2440) extends \Phel\Lang\AbstractFn {
          public const BOUND_TO = "phel\\mock\\with_mock_wrapper.mock_syms";
          private $bindings;
          private $body;
          private $grouped_2437;
          private $symbols_2438;
          private $mocks_2439;
          private $wrappers_2440;

          public function __construct($bindings, $body, $grouped_2437, $symbols_2438, $mocks_2439, $wrappers_2440) {
            $this->bindings = $bindings;
            $this->body = $body;
            $this->grouped_2437 = $grouped_2437;
            $this->symbols_2438 = $symbols_2438;
            $this->mocks_2439 = $mocks_2439;
            $this->wrappers_2440 = $wrappers_2440;
          }

          public function __invoke($__phel_2442) {
            $bindings = $this->bindings;
            $body = $this->body;
            $grouped_2437 = $this->grouped_2437;
            $symbols_2438 = $this->symbols_2438;
            $mocks_2439 = $this->mocks_2439;
            $wrappers_2440 = $this->wrappers_2440;
            return (\Phel::getDefinition("phel\\core", "gensym"))("mock");
          }
        }, $mocks_2439);
        $wrapper_syms_2443 = (\Phel::getDefinition("phel\\core", "map"))(new class($bindings, $body, $grouped_2437, $symbols_2438, $mocks_2439, $wrappers_2440, $mock_syms_2441) extends \Phel\Lang\AbstractFn {
          public const BOUND_TO = "phel\\mock\\with_mock_wrapper.wrapper_syms";
          private $bindings;
          private $body;
          private $grouped_2437;
          private $symbols_2438;
          private $mocks_2439;
          private $wrappers_2440;
          private $mock_syms_2441;

          public function __construct($bindings, $body, $grouped_2437, $symbols_2438, $mocks_2439, $wrappers_2440, $mock_syms_2441) {
            $this->bindings = $bindings;
            $this->body = $body;
            $this->grouped_2437 = $grouped_2437;
            $this->symbols_2438 = $symbols_2438;
            $this->mocks_2439 = $mocks_2439;
            $this->wrappers_2440 = $wrappers_2440;
            $this->mock_syms_2441 = $mock_syms_2441;
          }

          public function __invoke($__phel_2444) {
            $bindings = $this->bindings;
            $body = $this->body;
            $grouped_2437 = $this->grouped_2437;
            $symbols_2438 = $this->symbols_2438;
            $mocks_2439 = $this->mocks_2439;
            $wrappers_2440 = $this->wrappers_2440;
            $mock_syms_2441 = $this->mock_syms_2441;
            return (\Phel::getDefinition("phel\\core", "gensym"))("wrapper");
          }
        }, $wrappers_2440);
        $reset_forms_2445 = (\Phel::getDefinition("phel\\core", "map"))(new class($bindings, $body, $grouped_2437, $symbols_2438, $mocks_2439, $wrappers_2440, $mock_syms_2441, $wrapper_syms_2443) extends \Phel\Lang\AbstractFn {
          public const BOUND_TO = "phel\\mock\\with_mock_wrapper.reset_forms";
          private $bindings;
          private $body;
          private $grouped_2437;
          private $symbols_2438;
          private $mocks_2439;
          private $wrappers_2440;
          private $mock_syms_2441;
          private $wrapper_syms_2443;

          public function __construct($bindings, $body, $grouped_2437, $symbols_2438, $mocks_2439, $wrappers_2440, $mock_syms_2441, $wrapper_syms_2443) {
            $this->bindings = $bindings;
            $this->body = $body;
            $this->grouped_2437 = $grouped_2437;
            $this->symbols_2438 = $symbols_2438;
            $this->mocks_2439 = $mocks_2439;
            $this->wrappers_2440 = $wrappers_2440;
            $this->mock_syms_2441 = $mock_syms_2441;
            $this->wrapper_syms_2443 = $wrapper_syms_2443;
          }

          public function __invoke($m) {
            $bindings = $this->bindings;
            $body = $this->body;
            $grouped_2437 = $this->grouped_2437;
            $symbols_2438 = $this->symbols_2438;
            $mocks_2439 = $this->mocks_2439;
            $wrappers_2440 = $this->wrappers_2440;
            $mock_syms_2441 = $this->mock_syms_2441;
            $wrapper_syms_2443 = $this->wrapper_syms_2443;
            return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\mock/reset-mock!"))), (\Phel::getDefinition("phel\\core", "list"))($m))) ?? []));
          }
        }, $mock_syms_2441);
        return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("let"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "vector"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "interleave"))($mock_syms_2441, $mocks_2439), (\Phel::getDefinition("phel\\core", "interleave"))($wrapper_syms_2443, $wrappers_2440))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/binding"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "vector"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "interleave"))($symbols_2438, $wrapper_syms_2443))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("try"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("do"))), $body)) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("finally"))), $reset_forms_2445)) ?? []))))) ?? []))))) ?? []))))) ?? []));
      }
    },
    \Phel::map(
      \Phel::keyword("macro"), true,
      \Phel::keyword("doc"), "```phel\n(with-mock-wrapper bindings & body)\n```\nLike with-mocks but for wrapped mocks (interop scenarios).\n  Automatically resets the underlying mock even when wrapped in an adapter function.\n\n  Usage:\n    ```phel\n    (with-mock-wrapper [fn-symbol underlying-mock wrapper-fn]\n      body...)\n    ```\n\n  Multiple wrappers:\n    ```phel\n    (with-mock-wrapper [service-a mock-a (fn [x] (mock-a (inc x)))\n                        service-b mock-b (fn [y] (mock-b (dec y)))]\n      ...)\n    ```",
      \Phel::keyword("example"), "(with-mock-wrapper [http mock-http identity] (http \"test\"))",
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/mock.phel",
        \Phel::keyword("line"), 215,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/mock.phel",
        \Phel::keyword("line"), 246,
        \Phel::keyword("column"), 39
      ),
      "min-arity", 1,
      "is-variadic", true,
      "arglists", "[bindings & body]"
    )
  );
