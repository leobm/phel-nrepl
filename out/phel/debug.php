<?php declare(strict_types=1);
namespace phel\debug;
require_once __DIR__ . '/../phel/core.php';
require_once __DIR__ . '/../phel/core.php';
require_once __DIR__ . '/../phel/str.php';
\Phel::addDefinition(
  "phel\\core",
  "*file*",
  "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/debug.phel"
);
\Phel::addDefinition(
  "phel\\core",
  "*ns*",
  "phel\\debug"
);
\Phel::addDefinition(
  "phel\\debug",
  "*trace-level*",
  (\Phel::getDefinition("phel\\core", "var"))(0),
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/debug.phel",
      \Phel::keyword("line"), 5,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/debug.phel",
      \Phel::keyword("line"), 5,
      \Phel::keyword("column"), 28
    )
  )
);
\Phel::addDefinition(
  "phel\\debug",
  "*trace-id*",
  (\Phel::getDefinition("phel\\core", "var"))(0),
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/debug.phel",
      \Phel::keyword("line"), 6,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/debug.phel",
      \Phel::keyword("line"), 6,
      \Phel::keyword("column"), 25
    )
  )
);
\Phel::addDefinition(
  "phel\\debug",
  "*max-trace-digits*",
  (\Phel::getDefinition("phel\\core", "var"))(2),
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/debug.phel",
      \Phel::keyword("line"), 7,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/debug.phel",
      \Phel::keyword("line"), 7,
      \Phel::keyword("column"), 33
    )
  )
);
\Phel::addDefinition(
  "phel\\debug",
  "set-trace-id-padding!",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\debug\\set_trace_id_padding!";

    public function __invoke($estimated_id_padding) {
      return (\Phel::getDefinition("phel\\core", "swap!"))(\Phel::getDefinition("phel\\debug", "*max-trace-digits*"), new class($estimated_id_padding) extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\debug\\set_trace_id_padding!";
        private $estimated_id_padding;

        public function __construct($estimated_id_padding) {
          $this->estimated_id_padding = $estimated_id_padding;
        }

        public function __invoke($__phel_2747) {
          $estimated_id_padding = $this->estimated_id_padding;
          return $estimated_id_padding;
        }
      });
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(set-trace-id-padding! estimated-id-padding)\n```\nSets the number of digits for trace ID padding.",
    \Phel::keyword("example"), "(set-trace-id-padding! 3)",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/debug.phel",
      \Phel::keyword("line"), 9,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/debug.phel",
      \Phel::keyword("line"), 13,
      \Phel::keyword("column"), 59
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[estimated-id-padding]"
  )
);
\Phel::addDefinition(
  "phel\\debug",
  "next-id",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\debug\\next_id";

    public function __invoke() {
      return (\Phel::getDefinition("phel\\core", "swap!"))(\Phel::getDefinition("phel\\debug", "*trace-id*"), \Phel::getDefinition("phel\\core", "inc"));
    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(next-id)\n```\n",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/debug.phel",
      \Phel::keyword("line"), 15,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/debug.phel",
      \Phel::keyword("line"), 16,
      \Phel::keyword("column"), 25
    ),
    "min-arity", 0,
    "is-variadic", false,
    "arglists", "[]"
  )
);
\Phel::addDefinition(
  "phel\\debug",
  "dotrace",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\debug\\dotrace";

    public function __invoke($name, $f) {
      return new class($name, $f) extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\debug\\dotrace";
        private $name;
        private $f;

        public function __construct($name, $f) {
          $this->name = $name;
          $this->f = $f;
        }

        public function __invoke(...$args) {
          $name = $this->name;
          $f = $this->f;
          $args = \Phel::vector($args);
          $id_2748 = (\Phel::getDefinition("phel\\debug", "next-id"))();
          $id_str_2749 = (\Phel::getDefinition("phel\\str", "pad-left"))((\Phel::getDefinition("phel\\core", "str"))($id_2748), (\Phel::getDefinition("phel\\core", "deref"))(\Phel::getDefinition("phel\\debug", "*max-trace-digits*")), "0");
          $indent_2750 = (\Phel::getDefinition("phel\\str", "repeat"))("|    ", (\Phel::getDefinition("phel\\core", "deref"))(\Phel::getDefinition("phel\\debug", "*trace-level*")));
          $arg_str_2751 = (($__truthy = (\Phel::getDefinition("phel\\core", "empty?"))($args)) !== null && $__truthy !== false ? "" : (\Phel::getDefinition("phel\\core", "str"))(" ", (\Phel::getDefinition("phel\\str", "join"))(" ", (\Phel::getDefinition("phel\\core", "map"))(\Phel::getDefinition("phel\\core", "print-str"), $args))));
          $call_str_2752 = (\Phel::getDefinition("phel\\core", "str"))("(", $name, $arg_str_2751, ")");
          (\Phel::getDefinition("phel\\core", "println"))((\Phel::getDefinition("phel\\core", "str"))("TRACE t", $id_str_2749, ": ", $indent_2750, $call_str_2752));
          (\Phel::getDefinition("phel\\core", "swap!"))(\Phel::getDefinition("phel\\debug", "*trace-level*"), \Phel::getDefinition("phel\\core", "inc"));
          $res_2753 = ($f)(...(($args) ?? []));
          (\Phel::getDefinition("phel\\core", "swap!"))(\Phel::getDefinition("phel\\debug", "*trace-level*"), \Phel::getDefinition("phel\\core", "dec"));
          (\Phel::getDefinition("phel\\core", "println"))((\Phel::getDefinition("phel\\core", "str"))("TRACE t", $id_str_2749, ": ", $indent_2750, "=> ", $res_2753));
          return $res_2753;
        }
      };
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(dotrace name f)\n```\nWraps a function to print each call and result with indentation.",
    \Phel::keyword("example"), "(def add (dotrace \"add\" +))",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/debug.phel",
      \Phel::keyword("line"), 18,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/debug.phel",
      \Phel::keyword("line"), 35,
      \Phel::keyword("column"), 15
    ),
    "min-arity", 2,
    "is-variadic", false,
    "arglists", "[name f]"
  )
);
\Phel::addDefinition(
  "phel\\debug",
  "reset-trace-state!",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\debug\\reset_trace_state!";

    public function __invoke() {
      (\Phel::getDefinition("phel\\core", "set!"))(\Phel::getDefinition("phel\\debug", "*trace-level*"), 0);
      (\Phel::getDefinition("phel\\core", "set!"))(\Phel::getDefinition("phel\\debug", "*trace-id*"), 0);
      return (\Phel::getDefinition("phel\\core", "set!"))(\Phel::getDefinition("phel\\debug", "*max-trace-digits*"), 2);
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(reset-trace-state!)\n```\nResets trace counters to initial values.",
    \Phel::keyword("example"), "(reset-trace-state!)",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/debug.phel",
      \Phel::keyword("line"), 37,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/debug.phel",
      \Phel::keyword("line"), 44,
      \Phel::keyword("column"), 33
    ),
    "min-arity", 0,
    "is-variadic", false,
    "arglists", "[]"
  )
);
\Phel::addDefinition(
  "phel\\debug",
  "dbg",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\debug\\dbg";

    public function __invoke($expr) {
      $res_2754 = (\Phel::getDefinition("phel\\core", "gensym"))();
      return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("let"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "vector"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))($res_2754), (\Phel::getDefinition("phel\\core", "list"))($expr))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/println"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/str"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/print-str"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("quote"))), (\Phel::getDefinition("phel\\core", "list"))($expr))) ?? []))))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))(" => "), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/print-str"))), (\Phel::getDefinition("phel\\core", "list"))($res_2754))) ?? []))))) ?? []))))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))($res_2754))) ?? []));
    }
  },
  \Phel::map(
    \Phel::keyword("macro"), true,
    \Phel::keyword("doc"), "```phel\n(dbg expr)\n```\nEvaluates an expression and prints it with its result.",
    \Phel::keyword("example"), "(dbg (+ 1 2))",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/debug.phel",
      \Phel::keyword("line"), 46,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/debug.phel",
      \Phel::keyword("line"), 53,
      \Phel::keyword("column"), 14
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[expr]"
  )
);
\Phel::addDefinition(
  "phel\\debug",
  "spy",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\debug\\spy";
    private $fn0;
    private $fn1;

    public function __construct() {
      $this->fn0 = new class() extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\debug\\spy";

        public function __invoke($expr) {
          $res_2755 = (\Phel::getDefinition("phel\\core", "gensym"))();
          return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("let"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "vector"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))($res_2755), (\Phel::getDefinition("phel\\core", "list"))($expr))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/println"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/str"))), (\Phel::getDefinition("phel\\core", "list"))("SPY "), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/print-str"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("quote"))), (\Phel::getDefinition("phel\\core", "list"))($expr))) ?? []))))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))(" => "), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/print-str"))), (\Phel::getDefinition("phel\\core", "list"))($res_2755))) ?? []))))) ?? []))))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))($res_2755))) ?? []));
        }
      };
      $this->fn1 = new class() extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\debug\\spy";

        public function __invoke($label, $expr) {
          $res_2756 = (\Phel::getDefinition("phel\\core", "gensym"))();
          $label_val_2757 = (\Phel::getDefinition("phel\\core", "gensym"))();
          return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("let"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "vector"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))($label_val_2757), (\Phel::getDefinition("phel\\core", "list"))($label), (\Phel::getDefinition("phel\\core", "list"))($res_2756), (\Phel::getDefinition("phel\\core", "list"))($expr))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/println"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/str"))), (\Phel::getDefinition("phel\\core", "list"))("SPY "), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/print-str"))), (\Phel::getDefinition("phel\\core", "list"))($label_val_2757))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))(" => "), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/print-str"))), (\Phel::getDefinition("phel\\core", "list"))($res_2756))) ?? []))))) ?? []))))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))($res_2756))) ?? []));
        }
      };
    }

    public function __invoke(...$args) {
      $argc = \count($args);
      switch ($argc) {
        case 1:
          return ($this->fn0)($args[0]);
        case 2:
          return ($this->fn1)($args[0], $args[1]);
        }
        throw new \InvalidArgumentException("No matching function arity");
      }
    },
    \Phel::map(
      \Phel::keyword("macro"), true,
      \Phel::keyword("doc"), "```phel\n(spy expr)\n(spy label expr)\n```\nEvaluates an expression and prints it with an optional label.",
      \Phel::keyword("example"), "(spy (+ 1 2))",
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/debug.phel",
        \Phel::keyword("line"), 55,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/debug.phel",
        \Phel::keyword("line"), 69,
        \Phel::keyword("column"), 16
      ),
      "min-arity", 1,
      "is-variadic", false,
      "max-arity", 2,
      "arglists", "([expr] [label expr])"
    )
  );
  \Phel::addDefinition(
    "phel\\debug",
    "tap",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\debug\\tap";
      private $fn0;
      private $fn1;

      public function __construct() {
        $this->fn0 = new class() extends \Phel\Lang\AbstractFn {
          public const BOUND_TO = "phel\\debug\\tap";

          public function __invoke($value) {
            (\Phel::getDefinition("phel\\core", "println"))((\Phel::getDefinition("phel\\core", "str"))("TAP => ", (\Phel::getDefinition("phel\\core", "print-str"))($value)));
            return $value;
          }
        };
        $this->fn1 = new class() extends \Phel\Lang\AbstractFn {
          public const BOUND_TO = "phel\\debug\\tap";

          public function __invoke($value, $handler) {
            ($handler)($value);
            return $value;
          }
        };
      }

      public function __invoke(...$args) {
        $argc = \count($args);
        switch ($argc) {
          case 1:
            return ($this->fn0)($args[0]);
          case 2:
            return ($this->fn1)($args[0], $args[1]);
          }
          throw new \InvalidArgumentException("No matching function arity");
        }
      },
      \Phel::map(
        \Phel::keyword("doc"), "```phel\n(tap value)\n(tap value handler)\n```\nPrints a value and returns it unchanged. Useful in pipelines.",
        \Phel::keyword("example"), "(-> 5 (tap) (* 2))",
        \Phel::keyword("start-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/debug.phel",
          \Phel::keyword("line"), 71,
          \Phel::keyword("column"), 0
        ),
        \Phel::keyword("end-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/debug.phel",
          \Phel::keyword("line"), 79,
          \Phel::keyword("column"), 10
        ),
        "min-arity", 1,
        "is-variadic", false,
        "max-arity", 2,
        "arglists", "([value] [value handler])"
      )
    );
    \Phel::addDefinition(
      "phel\\debug",
      "*tap-handlers*",
      (\Phel::getDefinition("phel\\core", "var"))(\Phel::vector([])),
      \Phel::map(
        \Phel::keyword("private"), true,
        \Phel::keyword("start-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/debug.phel",
          \Phel::keyword("line"), 85,
          \Phel::keyword("column"), 0
        ),
        \Phel::keyword("end-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/debug.phel",
          \Phel::keyword("line"), 85,
          \Phel::keyword("column"), 30
        )
      )
    );
    \Phel::addDefinition(
      "phel\\debug",
      "add-tap",
      new class() extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\debug\\add_tap";

        public function __invoke($f) {
          (\Phel::getDefinition("phel\\core", "swap!"))(\Phel::getDefinition("phel\\debug", "*tap-handlers*"), new class($f) extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\debug\\add_tap";
            private $f;

            public function __construct($f) {
              $this->f = $f;
            }

            public function __invoke($__short_fn_1_2758) {
              $f = $this->f;
              return (\Phel::getDefinition("phel\\core", "conj"))($__short_fn_1_2758, $f);
            }
          });
          return null;
        }
      },
      \Phel::map(
        \Phel::keyword("doc"), "```phel\n(add-tap f)\n```\nRegister a global tap handler function.",
        \Phel::keyword("see-also"), \Phel::vector(["remove-tap", "tap>"]),
        \Phel::keyword("example"), "(add-tap println)",
        \Phel::keyword("start-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/debug.phel",
          \Phel::keyword("line"), 87,
          \Phel::keyword("column"), 0
        ),
        \Phel::keyword("end-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/debug.phel",
          \Phel::keyword("line"), 95,
          \Phel::keyword("column"), 6
        ),
        "min-arity", 1,
        "is-variadic", false,
        "arglists", "[f]"
      )
    );
    \Phel::addDefinition(
      "phel\\debug",
      "remove-tap",
      new class() extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\debug\\remove_tap";

        public function __invoke($f) {
          (\Phel::getDefinition("phel\\core", "swap!"))(\Phel::getDefinition("phel\\debug", "*tap-handlers*"), new class($f) extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\debug\\remove_tap";
            private $f;

            public function __construct($f) {
              $this->f = $f;
            }

            public function __invoke($__short_fn_1_2759) {
              $f = $this->f;
              return (\Phel::getDefinition("phel\\core", "vec"))((\Phel::getDefinition("phel\\core", "filter"))(new class($f, $__short_fn_1_2759) extends \Phel\Lang\AbstractFn {
                public const BOUND_TO = "phel\\debug\\remove_tap";
                private $f;
                private $__short_fn_1_2759;

                public function __construct($f, $__short_fn_1_2759) {
                  $this->f = $f;
                  $this->__short_fn_1_2759 = $__short_fn_1_2759;
                }

                public function __invoke($h) {
                  $f = $this->f;
                  $__short_fn_1_2759 = $this->__short_fn_1_2759;
                  return (\Phel::getDefinition("phel\\core", "not"))((\Phel::getDefinition("phel\\core", "="))($h, $f));
                }
              }, $__short_fn_1_2759));
            }
          });
          return null;
        }
      },
      \Phel::map(
        \Phel::keyword("doc"), "```phel\n(remove-tap f)\n```\nUnregister a global tap handler function.",
        \Phel::keyword("see-also"), \Phel::vector(["add-tap", "tap>"]),
        \Phel::keyword("example"), "(remove-tap println)",
        \Phel::keyword("start-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/debug.phel",
          \Phel::keyword("line"), 97,
          \Phel::keyword("column"), 0
        ),
        \Phel::keyword("end-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/debug.phel",
          \Phel::keyword("line"), 104,
          \Phel::keyword("column"), 6
        ),
        "min-arity", 1,
        "is-variadic", false,
        "arglists", "[f]"
      )
    );
    \Phel::addDefinition(
      "phel\\debug",
      "tap>",
      new class() extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\debug\\tap>";

        public function __invoke($value) {
          $handlers_2760 = (\Phel::getDefinition("phel\\core", "deref"))(\Phel::getDefinition("phel\\debug", "*tap-handlers*"));
          if (($__truthy = (\Phel::getDefinition("phel\\core", "empty?"))($handlers_2760)) !== null && $__truthy !== false) {
            return false;
          } else {
            foreach (\Phel\Lang\Seq::toIterable($handlers_2760) as $handler) {
              ($handler)($value);
            }
            return true;
          }

        }
      },
      \Phel::map(
        \Phel::keyword("doc"), "```phel\n(tap> value)\n```\nSend a value to all registered tap handlers.",
        \Phel::keyword("see-also"), \Phel::vector(["add-tap", "remove-tap"]),
        \Phel::keyword("example"), "(tap> {:debug \"some value\"})",
        \Phel::keyword("start-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/debug.phel",
          \Phel::keyword("line"), 106,
          \Phel::keyword("column"), 0
        ),
        \Phel::keyword("end-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/debug.phel",
          \Phel::keyword("line"), 119,
          \Phel::keyword("column"), 16
        ),
        "min-arity", 1,
        "is-variadic", false,
        "arglists", "[value]"
      )
    );
    \Phel::addDefinition(
      "phel\\debug",
      "reset-taps!",
      new class() extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\debug\\reset_taps!";

        public function __invoke() {
          (\Phel::getDefinition("phel\\core", "set!"))(\Phel::getDefinition("phel\\debug", "*tap-handlers*"), \Phel::vector([]));
          return null;
        }
      },
      \Phel::map(
        \Phel::keyword("doc"), "```phel\n(reset-taps!)\n```\nClear all tap handlers.",
        \Phel::keyword("see-also"), \Phel::vector(["add-tap", "remove-tap"]),
        \Phel::keyword("example"), "(reset-taps!)",
        \Phel::keyword("start-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/debug.phel",
          \Phel::keyword("line"), 121,
          \Phel::keyword("column"), 0
        ),
        \Phel::keyword("end-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/debug.phel",
          \Phel::keyword("line"), 128,
          \Phel::keyword("column"), 6
        ),
        "min-arity", 0,
        "is-variadic", false,
        "arglists", "[]"
      )
    );
