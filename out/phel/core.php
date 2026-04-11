<?php declare(strict_types=1);
namespace phel\core;
\Phel::addDefinition(
  "phel\\core",
  "*file*",
  "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel"
);
\Phel::addDefinition(
  "phel\\core",
  "*ns*",
  "phel\\core"
);
\Phel::addDefinition(
  "phel\\core",
  "*ns*",
  "\\phel\\core",
  \Phel::map(
    \Phel::keyword("doc"), "Returns the namespace in the current scope.",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 47,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 49,
      \Phel::keyword("column"), 17
    )
  )
);
\Phel::addDefinition(
  "phel\\core",
  "*file*",
  "",
  \Phel::map(
    \Phel::keyword("doc"), "Returns the path of the current source file.",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 51,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 53,
      \Phel::keyword("column"), 5
    )
  )
);
\Phel::addDefinition(
  "phel\\core",
  "list",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\list";

    public function __invoke(...$xs) {
      $xs = \Phel::vector($xs);
      return (\Phel::list(array(...(($xs) ?? []))));
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "Creates a new list. If no argument is provided, an empty list is created. Shortcut: '()",
    \Phel::keyword("example"), "(list 1 2 3) ; => '(1 2 3)",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 59,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 63,
      \Phel::keyword("column"), 47
    ),
    "min-arity", 0,
    "is-variadic", true,
    "arglists", "[& xs]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "vector",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\vector";

    public function __invoke(...$xs) {
      $xs = \Phel::vector($xs);
      return (\Phel::vector(array(...(($xs) ?? []))));
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "Creates a new vector. If no argument is provided, an empty vector is created. Shortcut: []",
    \Phel::keyword("example"), "(vector 1 2 3) ; => [1 2 3]",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 65,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 69,
      \Phel::keyword("column"), 49
    ),
    "min-arity", 0,
    "is-variadic", true,
    "arglists", "[& xs]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "hash-map",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\hash_map";

    public function __invoke(...$xs) {
      $xs = \Phel::vector($xs);
      return (\Phel::map(array(...(($xs) ?? []))));
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "Creates a new hash map. If no argument is provided, an empty hash map is created. The number of parameters must be even. Shortcut: {}",
    \Phel::keyword("example"), "(hash-map :a 1 :b 2) ; => {:a 1 :b 2}",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 71,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 75,
      \Phel::keyword("column"), 46
    ),
    "min-arity", 0,
    "is-variadic", true,
    "arglists", "[& xs]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "next",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\next";

    public function __invoke($xs) {
      if (($__truthy = ($xs === null)) !== null && $__truthy !== false) {
        return null;
      } else {
        if (($__truthy = ($xs instanceof \Phel\Lang\CdrInterface)) !== null && $__truthy !== false) {
          return (function() use($xs) {
            $target_3 = $xs;
            return $target_3->cdr();
          })();
        } else {
          if (($__truthy = is_string($xs)) !== null && $__truthy !== false) {
            $chars_1 = mb_str_split($xs);
            if (($__truthy = (count($chars_1) <= 1)) !== null && $__truthy !== false) {
              return null;
            } else {
              return (\Phel::getDefinition("phel\\core", "vector"))(...((array_slice($chars_1, 1)) ?? []));
            }

          } else {
            if (($__truthy = is_array($xs)) !== null && $__truthy !== false) {
              $sliced_2 = array_slice($xs, 1);
              if (($__truthy = empty($sliced_2)) !== null && $__truthy !== false) {
                return null;
              } else {
                return $sliced_2;
              }

            } else {
              throw (new \InvalidArgumentException(("cannot call 'next on " . gettype($xs))));
            }

          }

        }

      }

    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "Returns the sequence after the first element, or nil if empty.",
    \Phel::keyword("example"), "(next [1 2 3]) ; => [2 3]",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 77,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 96,
      \Phel::keyword("column"), 84
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[xs]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "first",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\first";

    public function __invoke($xs) {
      if (($__truthy = ($xs instanceof \Phel\Lang\FirstInterface)) !== null && $__truthy !== false) {
        return (function() use($xs) {
          $target_5 = $xs;
          return $target_5->first();
        })();
      } else {
        if (($__truthy = is_string($xs)) !== null && $__truthy !== false) {
          if (($__truthy = ("" === $xs)) !== null && $__truthy !== false) {
            return null;
          } else {
            return mb_substr($xs, 0, 1);
          }

        } else {
          return (($xs)[(0)] ?? null);
        }

      }

    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "Returns the first element of a sequence, or nil if empty.",
    \Phel::keyword("example"), "(first [1 2 3]) ; => 1",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 98,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 108,
      \Phel::keyword("column"), 27
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[xs]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "concat1",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\concat1";

    public function __invoke($xs, $ys) {
      if (($__truthy = (null === $ys)) !== null && $__truthy !== false) {
        return $xs;
      } else {
        if (($__truthy = ($xs instanceof \Phel\Lang\ConcatInterface)) !== null && $__truthy !== false) {
          return (function() use($xs,$ys) {
            $target_7 = $xs;
            return $target_7->concat($ys);
          })();
        } else {
          foreach (\Phel\Lang\Seq::toIterable($ys) as $y) {
            ($xs)[] = $y;
          }
          return $xs;
        }

      }

    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "Concatenates two sequential data structures.",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 110,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 121,
      \Phel::keyword("column"), 17
    ),
    "min-arity", 2,
    "is-variadic", false,
    "arglists", "[xs ys]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "concat",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\concat";

    public function __invoke($arr, ...$others) {
      $others = \Phel::vector($others);
      if (($__truthy = (null === $arr)) !== null && $__truthy !== false) {
        return \Phel::list([]);
      } else {
        $res_9 = $arr;
        $other_10 = $others;
        while (true) {
          if (($__truthy = (null === $other_10)) !== null && $__truthy !== false) {
            return $res_9;
          } else {
            $__phel_11_15 = $other_10;
            $__phel_12_16 = (\Phel::getDefinition("phel\\core", "first"))($__phel_11_15);
            $__phel_13_17 = (\Phel::getDefinition("phel\\core", "next"))($__phel_11_15);
            $y_18 = $__phel_12_16;
            $__phel_14_19 = $__phel_13_17;
            $ys_20 = $__phel_14_19;
            $__phel_21 = (\Phel::getDefinition("phel\\core", "concat1"))($res_9, $y_18);
            $__phel_22 = $ys_20;
            $res_9 = $__phel_21;
            $other_10 = $__phel_22;
            continue;

          }
          break;
        }
      }

    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "Concatenates multiple sequential data structures.",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 123,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 133,
      \Phel::keyword("column"), 44
    ),
    "min-arity", 1,
    "is-variadic", true,
    "arglists", "[arr & others]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "declare",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\declare";

    public function __invoke($name) {
      return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("def"))), (\Phel::getDefinition("phel\\core", "list"))($name), (\Phel::getDefinition("phel\\core", "list"))(null))) ?? []));
    }
  },
  \Phel::map(
    \Phel::keyword("macro"), true,
    \Phel::keyword("doc"), "Declare a global symbol before it is defined.",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 137,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 141,
      \Phel::keyword("column"), 22
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[name]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "nil?",
  null,
  \Phel::map(
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 143,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 143,
      \Phel::keyword("column"), 14
    )
  )
);
\Phel::addDefinition(
  "phel\\core",
  "*program*",
  (function() {
    $prog_25 = (($GLOBALS)[("__phel_program")] ?? null);
    if (($__truthy = ($prog_25 === null)) !== null && $__truthy !== false) {
      return "";
    } else {
      return $prog_25;
    }

  })(),
  \Phel::map(
    \Phel::keyword("doc"), "The script path or namespace being executed.",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 145,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 148,
      \Phel::keyword("column"), 37
    )
  )
);
\Phel::addDefinition(
  "phel\\core",
  "argv",
  (function() {
    $argv_raw_26 = (($GLOBALS)[("__phel_argv")] ?? null);
    if (($__truthy = ($argv_raw_26 === null)) !== null && $__truthy !== false) {
      return \Phel::vector([]);
    } else {
      return (\Phel::vector($argv_raw_26));
    }

  })(),
  \Phel::map(
    \Phel::keyword("doc"), "Vector of user arguments passed to the script (excludes program name).\n  Use *program* to get the script path or namespace.",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 150,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 156,
      \Phel::keyword("column"), 40
    )
  )
);
\Phel::addDefinition(
  "phel\\core",
  "=",
  null,
  \Phel::map(
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 162,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 162,
      \Phel::keyword("column"), 11
    )
  )
);
\Phel::addDefinition(
  "phel\\core",
  "symbol?",
  null,
  \Phel::map(
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 163,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 163,
      \Phel::keyword("column"), 17
    )
  )
);
\Phel::addDefinition(
  "phel\\core",
  "list?",
  null,
  \Phel::map(
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 164,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 164,
      \Phel::keyword("column"), 15
    )
  )
);
\Phel::addDefinition(
  "phel\\core",
  "second",
  null,
  \Phel::map(
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 165,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 165,
      \Phel::keyword("column"), 16
    )
  )
);
\Phel::addDefinition(
  "phel\\core",
  "conj",
  null,
  \Phel::map(
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 166,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 166,
      \Phel::keyword("column"), 14
    )
  )
);
\Phel::addDefinition(
  "phel\\core",
  "meta",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\meta";

    public function __invoke($obj) {
      $sym_27 = (($__truthy = (\Phel::getDefinition("phel\\core", "symbol?"))($obj)) !== null && $__truthy !== false ? $obj : (($__truthy = (\Phel::getDefinition("phel\\core", "list?"))($obj)) !== null && $__truthy !== false ? (($__truthy = (\Phel::getDefinition("phel\\core", "="))((\Phel::getDefinition("phel\\core", "first"))($obj), (\Phel\Lang\Symbol::create("quote")))) !== null && $__truthy !== false ? (($__truthy = (\Phel::getDefinition("phel\\core", "symbol?"))((\Phel::getDefinition("phel\\core", "second"))($obj))) !== null && $__truthy !== false ? (\Phel::getDefinition("phel\\core", "second"))($obj) : null) : null) : null));
      if (($__truthy = $sym_27) !== null && $__truthy !== false) {
        $ns_28 = (function() use($obj,$sym_27) {
          $target_29 = $sym_27;
          return $target_29->getNamespace();
        })();
        if (($__truthy = $ns_28) !== null && $__truthy !== false) {
          return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("php/::"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("\\Phel"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("getDefinitionMetaData"))), (\Phel::getDefinition("phel\\core", "list"))($ns_28), (\Phel::getDefinition("phel\\core", "list"))((function() use($obj,$sym_27,$ns_28) {
            $target_30 = $sym_27;
            return $target_30->getName();
          })()))) ?? []))))) ?? []));
        } else {
          return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("php/::"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("\\Phel"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("getDefinitionMetaData"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("php/str_replace"))), (\Phel::getDefinition("phel\\core", "list"))("-"), (\Phel::getDefinition("phel\\core", "list"))("_"), (\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/*ns*"))))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((function() use($obj,$sym_27,$ns_28) {
            $target_31 = $sym_27;
            return $target_31->getName();
          })()))) ?? []))))) ?? []));
        }

      } else {
        return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("let"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "vector"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("obj-meta"))), (\Phel::getDefinition("phel\\core", "list"))($obj))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("if"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("php/instanceof"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("obj-meta"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("\\Phel\\Lang\\MetaInterface"))))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("php/->"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("obj-meta"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("getMeta"))))) ?? []))))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))(null))) ?? []))))) ?? []));
      }

    }
  },
  \Phel::map(
    \Phel::keyword("macro"), true,
    \Phel::keyword("doc"), "Gets the metadata of the given object or definition.",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 168,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 189,
      \Phel::keyword("column"), 22
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[obj]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "set-meta!",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\set_meta!";

    public function __invoke($obj, $meta) {
      return (function() use($obj,$meta) {
        $target_35 = $obj;
        return $target_35->withMeta($meta);
      })();
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "Sets the metadata to a given object.",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 191,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 194,
      \Phel::keyword("column"), 34
    ),
    "min-arity", 2,
    "is-variadic", false,
    "arglists", "[obj meta]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "with-meta",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\with_meta";

    public function __invoke($source, $target) {
      if (($__truthy = ($source instanceof \Phel\Lang\MetaInterface)) !== null && $__truthy !== false) {
        if (($__truthy = ($target instanceof \Phel\Lang\MetaInterface)) !== null && $__truthy !== false) {
          return (function() use($source,$target) {
            $target_37 = $target;
            return $target_37->withMeta((function() use($source,$target) {
              $target_38 = $source;
              return $target_38->getMeta();
            })());
          })();
        } else {
          return $target;
        }

      } else {
        return $target;
      }

    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "Returns `target` with the metadata from `source` when both implement `MetaInterface`.",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 196,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 204,
      \Phel::keyword("column"), 15
    ),
    "min-arity", 2,
    "is-variadic", false,
    "arglists", "[source target]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "to-php-array",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\to_php_array";

    public function __invoke($coll) {
      if (($__truthy = is_array($coll)) !== null && $__truthy !== false) {
        return $coll;
      } else {
        return array(...(($coll) ?? []));
      }

    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "Creates a PHP Array from a sequential data structure.",
    \Phel::keyword("see-also"), \Phel::vector(["php-array-to-map", "phel->php"]),
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 210,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 216,
      \Phel::keyword("column"), 31
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[coll]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "defn-builder",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\defn_builder";

    public function __invoke($name, $meta, ...$fdecl) {
      $fdecl = \Phel::vector($fdecl);
      $meta_41 = (($__truthy = is_string((\Phel::getDefinition("phel\\core", "first"))($fdecl))) !== null && $__truthy !== false ? (function() use($name,$meta,$fdecl) {
        $target_56 = $meta;
        return $target_56->put(\Phel::keyword("doc"), (\Phel::getDefinition("phel\\core", "first"))($fdecl));
      })() : $meta);
      $fdecl_42 = (($__truthy = is_string((\Phel::getDefinition("phel\\core", "first"))($fdecl))) !== null && $__truthy !== false ? (\Phel::getDefinition("phel\\core", "next"))($fdecl) : $fdecl);
      $meta_43 = (($__truthy = ((\Phel::getDefinition("phel\\core", "first"))($fdecl_42) instanceof \Phel\Lang\Collections\Map\PersistentMapInterface)) !== null && $__truthy !== false ? (function() use($name,$meta_41,$fdecl_42) {
        $target_57 = $meta_41;
        return $target_57->merge((\Phel::getDefinition("phel\\core", "first"))($fdecl_42));
      })() : $meta_41);
      $fdecl_44 = (($__truthy = ((\Phel::getDefinition("phel\\core", "first"))($fdecl_42) instanceof \Phel\Lang\Collections\Map\PersistentMapInterface)) !== null && $__truthy !== false ? (\Phel::getDefinition("phel\\core", "next"))($fdecl_42) : $fdecl_42);
      $is_single_arity_45 = ((\Phel::getDefinition("phel\\core", "first"))($fdecl_44) instanceof \Phel\Lang\Collections\Vector\PersistentVectorInterface);
      $docstring_46 = (($meta_43)[(\Phel::keyword("doc"))] ?? null);
      $signatures_47 = (($__truthy = $is_single_arity_45) !== null && $__truthy !== false ? (function() use($name,$meta_43,$fdecl_44,$is_single_arity_45,$docstring_46) {
        $args_48 = (\Phel::getDefinition("phel\\core", "first"))($fdecl_44);
        $args_array_49 = (($__truthy = is_array($args_48)) !== null && $__truthy !== false ? $args_48 : array(...(($args_48) ?? [])));
        if (($__truthy = (count($args_array_49) > 0)) !== null && $__truthy !== false) {
          return ("(" . $name . " " . implode(" ", $args_array_49) . ")");
        } else {
          return ("(" . $name . ")");
        }

      })() : (function() use($name,$meta_43,$fdecl_44,$is_single_arity_45,$docstring_46) {
        $arities_50 = $fdecl_44;
        $sigs_51 = array();
        foreach (\Phel\Lang\Seq::toIterable($arities_50) as $arity) {
          if (($__truthy = ($arity instanceof \Phel\Lang\Collections\LinkedList\PersistentListInterface)) !== null && $__truthy !== false) {
            $args_52 = (\Phel::getDefinition("phel\\core", "first"))($arity);
            $args_array_53 = (($__truthy = is_array($args_52)) !== null && $__truthy !== false ? $args_52 : array(...(($args_52) ?? [])));
            ($sigs_51)[] = (($__truthy = (count($args_array_53) > 0)) !== null && $__truthy !== false ? ("(" . $name . " " . implode(" ", $args_array_53) . ")") : ("(" . $name . ")"));
          } else {

          }

        }
        return implode("\n", $sigs_51);
      })());
      $docstring_54 = ("```phel\n" . $signatures_47 . "\n```\n" . $docstring_46);
      $meta_55 = (function() use($name,$meta_43,$fdecl_44,$is_single_arity_45,$docstring_54,$signatures_47) {
        $target_58 = $meta_43;
        return $target_58->put(\Phel::keyword("doc"), $docstring_54);
      })();
      return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("def"))), (\Phel::getDefinition("phel\\core", "list"))($name), (\Phel::getDefinition("phel\\core", "list"))($meta_55), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("fn"))), $fdecl_44)) ?? []))))) ?? []));
    }
  },
  \Phel::map(
    \Phel::keyword("macro"), true,
    \Phel::keyword("private"), true,
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 218,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 260,
      \Phel::keyword("column"), 40
    ),
    "min-arity", 2,
    "is-variadic", true,
    "arglists", "[name meta & fdecl]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "defn",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\defn";

    public function __invoke($name, ...$fdecl) {
      $fdecl = \Phel::vector($fdecl);
      return (\Phel::getDefinition("phel\\core", "defn-builder"))($name, \Phel::map(), ...(($fdecl) ?? []));
    }
  },
  \Phel::map(
    \Phel::keyword("macro"), true,
    \Phel::keyword("doc"), "Define a new global function.",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 262,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 265,
      \Phel::keyword("column"), 57
    ),
    "min-arity", 1,
    "is-variadic", true,
    "arglists", "[name & fdecl]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "def-",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\def_";

    public function __invoke($name, $value) {
      return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("def"))), (\Phel::getDefinition("phel\\core", "list"))($name), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "hash-map"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))(\Phel::keyword("private")), (\Phel::getDefinition("phel\\core", "list"))(true))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))($value))) ?? []));
    }
  },
  \Phel::map(
    \Phel::keyword("macro"), true,
    \Phel::keyword("doc"), "Define a private value that will not be exported.",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 267,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 270,
      \Phel::keyword("column"), 56
    ),
    "min-arity", 2,
    "is-variadic", false,
    "arglists", "[name value]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "defmacro",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\defmacro";

    public function __invoke($name, ...$fdecl) {
      $fdecl = \Phel::vector($fdecl);
      return (\Phel::getDefinition("phel\\core", "defn-builder"))($name, \Phel::map(
        \Phel::keyword("macro"), true
      ), ...(($fdecl) ?? []));
    }
  },
  \Phel::map(
    \Phel::keyword("macro"), true,
    \Phel::keyword("doc"), "Define a macro.",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 272,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 275,
      \Phel::keyword("column"), 68
    ),
    "min-arity", 1,
    "is-variadic", true,
    "arglists", "[name & fdecl]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "defn-",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\defn_";

    public function __invoke($name, ...$fdecl) {
      $fdecl = \Phel::vector($fdecl);
      return (\Phel::getDefinition("phel\\core", "defn-builder"))($name, \Phel::map(
        \Phel::keyword("private"), true
      ), ...(($fdecl) ?? []));
    }
  },
  \Phel::map(
    \Phel::keyword("macro"), true,
    \Phel::keyword("doc"), "```phel\n(defn- name & fdecl)\n```\nDefine a private function that will not be exported.",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 277,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 280,
      \Phel::keyword("column"), 50
    ),
    "min-arity", 1,
    "is-variadic", true,
    "arglists", "[name & fdecl]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "defmacro-",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\defmacro_";

    public function __invoke($name, ...$fdecl) {
      $fdecl = \Phel::vector($fdecl);
      return (\Phel::getDefinition("phel\\core", "defn-builder"))($name, \Phel::map(
        \Phel::keyword("macro"), true,
        \Phel::keyword("private"), true
      ), ...(($fdecl) ?? []));
    }
  },
  \Phel::map(
    \Phel::keyword("macro"), true,
    \Phel::keyword("doc"), "```phel\n(defmacro- name & fdecl)\n```\nDefine a private macro that will not be exported.",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 282,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 285,
      \Phel::keyword("column"), 62
    ),
    "min-arity", 1,
    "is-variadic", true,
    "arglists", "[name & fdecl]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "defstruct",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\defstruct";

    public function __invoke($name, $keys, ...$implementations) {
      $implementations = \Phel::vector($implementations);
      $name_str_62 = (function() use($name,$keys,$implementations) {
        $target_66 = $name;
        return $target_66->getName();
      })();
      $munge_63 = (new \Phel\Compiler\Application\Munge());
      $class_name_str_64 = ((function() use($name,$keys,$implementations,$name_str_62,$munge_63) {
        $target_67 = $munge_63;
        return $target_67->encodeNs(\Phel::getDefinition("phel\\core", "*ns*"));
      })() . "\\" . (function() use($name,$keys,$implementations,$name_str_62,$munge_63) {
        $target_68 = $munge_63;
        return $target_68->encode($name_str_62);
      })());
      $is_name_65 = (\Phel\Lang\Symbol::create(($name_str_62 . "?")));
      return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("do"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("defstruct*"))), (\Phel::getDefinition("phel\\core", "list"))($name), (\Phel::getDefinition("phel\\core", "list"))($keys), $implementations)) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/defn"))), (\Phel::getDefinition("phel\\core", "list"))($name), (\Phel::getDefinition("phel\\core", "list"))(("Creates a new " . $name . " struct.")), (\Phel::getDefinition("phel\\core", "list"))($keys), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("php/new"))), (\Phel::getDefinition("phel\\core", "list"))($class_name_str_64), $keys)) ?? []))))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/defn"))), (\Phel::getDefinition("phel\\core", "list"))($is_name_65), (\Phel::getDefinition("phel\\core", "list"))(("Checks if `x` is an instance of the " . $name . " struct.")), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "vector"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("x"))))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("php/is_a"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("x"))), (\Phel::getDefinition("phel\\core", "list"))($class_name_str_64))) ?? []))))) ?? []))))) ?? []));
    }
  },
  \Phel::map(
    \Phel::keyword("macro"), true,
    \Phel::keyword("doc"), "```phel\n(defstruct name keys & implementations)\n```\nA Struct is a special kind of Map. It only supports a predefined number of keys and is associated to a global name. The Struct not only defines itself but also a predicate function.",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 287,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 297,
      \Phel::keyword("column"), 122
    ),
    "min-arity", 2,
    "is-variadic", true,
    "arglists", "[name keys & implementations]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "defexception",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\defexception";

    public function __invoke($name) {
      $name_str_72 = (function() use($name) {
        $target_76 = $name;
        return $target_76->getName();
      })();
      $munge_73 = (new \Phel\Compiler\Application\Munge());
      $class_name_str_74 = ((function() use($name,$name_str_72,$munge_73) {
        $target_77 = $munge_73;
        return $target_77->encodeNs(\Phel::getDefinition("phel\\core", "*ns*"));
      })() . "\\" . (function() use($name,$name_str_72,$munge_73) {
        $target_78 = $munge_73;
        return $target_78->encode($name_str_72);
      })());
      $is_name_75 = (\Phel\Lang\Symbol::create(($name_str_72 . "?")));
      return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("do"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("defexception*"))), (\Phel::getDefinition("phel\\core", "list"))($name))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/defn"))), (\Phel::getDefinition("phel\\core", "list"))($name), (\Phel::getDefinition("phel\\core", "list"))(("Creates a new " . $name . " exception.")), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "vector"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("&"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("args"))))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("php/->"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("php/new"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("\\ReflectionClass"))), (\Phel::getDefinition("phel\\core", "list"))($class_name_str_74))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("newInstanceArgs"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/to-php-array"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("args"))))) ?? []))))) ?? []))))) ?? []))))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/defn"))), (\Phel::getDefinition("phel\\core", "list"))($is_name_75), (\Phel::getDefinition("phel\\core", "list"))(("Checks if `x` is an instance of the " . $name . " exception.")), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "vector"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("x"))))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("php/is_a"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("x"))), (\Phel::getDefinition("phel\\core", "list"))($class_name_str_74))) ?? []))))) ?? []))))) ?? []));
    }
  },
  \Phel::map(
    \Phel::keyword("macro"), true,
    \Phel::keyword("doc"), "```phel\n(defexception name)\n```\nDefine a new exception.",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 299,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 311,
      \Phel::keyword("column"), 125
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[name]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "comment",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\comment";

    public function __invoke(...$__phel_82) {
      $__phel_82 = \Phel::vector($__phel_82);
      return null;
    }
  },
  \Phel::map(
    \Phel::keyword("macro"), true,
    \Phel::keyword("doc"), "```phel\n(comment &)\n```\nIgnores the body of the comment.",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 313,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 315,
      \Phel::keyword("column"), 6
    ),
    "min-arity", 0,
    "is-variadic", true,
    "arglists", "[& __phel_82]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "symbol",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\symbol";

    public function __invoke($name_or_ns, ...$__phel_83) {
      $__phel_83 = \Phel::vector($__phel_83);
      $__phel_84_87 = $__phel_83;
      $__phel_85_88 = (\Phel::getDefinition("phel\\core", "first"))($__phel_84_87);
      $__phel_86_89 = (\Phel::getDefinition("phel\\core", "next"))($__phel_84_87);
      $name_90 = $__phel_85_88;
      if (($__truthy = $name_90) !== null && $__truthy !== false) {
        return (\Phel\Lang\Symbol::createForNamespace($name_or_ns, $name_90));
      } else {
        return (\Phel\Lang\Symbol::create($name_or_ns));
      }

    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(symbol name-or-ns & [name])\n```\nReturns a new symbol for given string with optional namespace.\n\n  With one argument, creates a symbol without namespace.\n  With two arguments, creates a symbol in the given namespace.",
    \Phel::keyword("example"), "(symbol \"foo\") ; => foo",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 317,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 326,
      \Phel::keyword("column"), 41
    ),
    "min-arity", 1,
    "is-variadic", true,
    "arglists", "[name-or-ns & __phel_83]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "gensym",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\gensym";

    public function __invoke() {
      return (\Phel\Lang\Symbol::gen());
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(gensym)\n```\nGenerates a new unique symbol.",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 328,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 331,
      \Phel::keyword("column"), 24
    ),
    "min-arity", 0,
    "is-variadic", false,
    "arglists", "[]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "val-to-str",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\val_to_str";

    public function __invoke($x) {
      if (($__truthy = ($x === true)) !== null && $__truthy !== false) {
        return "true";
      } else {
        if (($__truthy = ($x === false)) !== null && $__truthy !== false) {
          return "false";
        } else {
          if (($__truthy = ($x === null)) !== null && $__truthy !== false) {
            return "";
          } else {
            return ("" . $x);
          }

        }

      }

    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(val-to-str x)\n```\nConverts a value to its string representation. Booleans become \"true\" or\n\"false\". Nil becomes an empty string. All other values use PHP string cast.",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 333,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 343,
      \Phel::keyword("column"), 24
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[x]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "str",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\str";

    public function __invoke(...$args) {
      $args = \Phel::vector($args);
      $cnt_91 = count($args);
      if (($__truthy = ($cnt_91 == 0)) !== null && $__truthy !== false) {
        return "";
      } else {
        $result_92 = "";
        $i_93 = 0;
        while (true) {
          if (($__truthy = ($i_93 < $cnt_91)) !== null && $__truthy !== false) {
            $__phel_94 = ($result_92 . (\Phel::getDefinition("phel\\core", "val-to-str"))((($args)[($i_93)] ?? null)));
            $__phel_95 = ($i_93 + 1);
            $result_92 = $__phel_94;
            $i_93 = $__phel_95;
            continue;

          } else {
            return $result_92;
          }
          break;
        }
      }

    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(str & args)\n```\nCreates a string by concatenating values together. If no arguments are\nprovided an empty string is returned. Nil is represented as an empty string.\nBooleans are represented as \"true\" or \"false\" (matching Clojure semantics).\nOtherwise, it tries to call `__toString`.",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 345,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 358,
      \Phel::keyword("column"), 21
    ),
    "min-arity", 0,
    "is-variadic", true,
    "arglists", "[& args]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "transient",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\transient";

    public function __invoke($coll) {
      return (function() use($coll) {
        $target_98 = $coll;
        return $target_98->asTransient();
      })();
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(transient coll)\n```\nConverts a persistent collection to a transient collection for efficient updates.\n\n  Transient collections provide faster performance for multiple sequential updates.\n  Use `persistent` to convert back.",
    \Phel::keyword("example"), "(def t (transient []))",
    \Phel::keyword("see-also"), \Phel::vector(["persistent"]),
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 360,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 368,
      \Phel::keyword("column"), 30
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[coll]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "persistent",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\persistent";

    public function __invoke($coll) {
      return (function() use($coll) {
        $target_100 = $coll;
        return $target_100->persistent();
      })();
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(persistent coll)\n```\nConverts a transient collection back to a persistent collection.",
    \Phel::keyword("example"), "(def t (transient {}))",
    \Phel::keyword("see-also"), \Phel::vector(["transient"]),
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 370,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 375,
      \Phel::keyword("column"), 29
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[coll]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "hash-set",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\hash_set";

    public function __invoke(...$xs) {
      $xs = \Phel::vector($xs);
      return (\Phel::set(array(...(($xs) ?? []))));
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(hash-set & xs)\n```\nCreates a new Set from the given arguments. Shortcut: #{}",
    \Phel::keyword("example"), "(hash-set 1 2 3) ; => #{1 2 3}",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 381,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 385,
      \Phel::keyword("column"), 43
    ),
    "min-arity", 0,
    "is-variadic", true,
    "arglists", "[& xs]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "keyword",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\keyword";

    public function __invoke($x) {
      return (\Phel\Lang\Keyword::create($x));
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(keyword x)\n```\nCreates a new Keyword from a given string.",
    \Phel::keyword("example"), "(keyword \"name\") ; => :name",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 387,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 391,
      \Phel::keyword("column"), 30
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[x]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "php-indexed-array",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\php_indexed_array";

    public function __invoke(...$xs) {
      $xs = \Phel::vector($xs);
      return array(...(($xs) ?? []));
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(php-indexed-array & xs)\n```\nCreates a PHP indexed array from the given values.",
    \Phel::keyword("example"), "(php-indexed-array 1 2 3) ; => (PHP array [1, 2, 3])",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 393,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 397,
      \Phel::keyword("column"), 23
    ),
    "min-arity", 0,
    "is-variadic", true,
    "arglists", "[& xs]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "php-associative-array",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\php_associative_array";

    public function __invoke(...$xs) {
      $xs = \Phel::vector($xs);
      $cnt_102 = count($xs);
      $res_103 = array();
      if (($__truthy = (1 === ($cnt_102 % 2))) !== null && $__truthy !== false) {
        throw (new \InvalidArgumentException("An even number of parameters must be provided for 'php-associative-array'"));
      } else {

      }

      $i_104 = 0;
      while (true) {
        if (($__truthy = ($i_104 < $cnt_102)) !== null && $__truthy !== false) {
          ($res_103)[((($xs)[($i_104)] ?? null))] = (($xs)[(($i_104 + 1))] ?? null);
          $__phel_105 = ($i_104 + 2);
          $i_104 = $__phel_105;
          continue;

        } else {
          return $res_103;
        }
        break;
      }
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(php-associative-array & xs)\n```\nCreates a PHP associative array from key-value pairs.\n\n  Arguments:\n    Key-value pairs (must be even number of arguments)",
    \Phel::keyword("example"), "(php-associative-array \"name\" \"Alice\" \"age\" 30) ; => (PHP array [\"name\" => \"Alice\", \"age\" => 30])",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 399,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 415,
      \Phel::keyword("column"), 15
    ),
    "min-arity", 0,
    "is-variadic", true,
    "arglists", "[& xs]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "equals1",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\equals1";

    public function __invoke($a, $b) {
      if (($__truthy = ($a instanceof \Phel\Lang\AbstractType)) !== null && $__truthy !== false) {
        return (function() use($a,$b) {
          $target_107 = $a;
          return $target_107->equals($b);
        })();
      } else {
        return ($a === $b);
      }

    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(equals1 a b)\n```\n",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 421,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 424,
      \Phel::keyword("column"), 19
    ),
    "min-arity", 2,
    "is-variadic", false,
    "arglists", "[a b]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "cons",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\cons";

    public function __invoke($x, $coll) {
      if (($__truthy = is_array($coll)) !== null && $__truthy !== false) {
        array_unshift($coll, $x);
        return $coll;
      } else {
        if (($__truthy = ($coll instanceof \Phel\Lang\ConsInterface)) !== null && $__truthy !== false) {
          return (function() use($x,$coll) {
            $target_109 = $coll;
            return $target_109->cons($x);
          })();
        } else {
          if (($__truthy = ($coll === null)) !== null && $__truthy !== false) {
            return \Phel::vector([$x]);
          } else {
            throw (new \InvalidArgumentException(("cannot do cons " . print_r($x, true))));
          }

        }

      }

    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(cons x coll)\n```\nPrepends an element to the beginning of a collection.",
    \Phel::keyword("example"), "(cons 0 [1 2 3]) ; => [0 1 2 3]",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 426,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 439,
      \Phel::keyword("column"), 76
    ),
    "min-arity", 2,
    "is-variadic", false,
    "arglists", "[x coll]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "ffirst",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\ffirst";

    public function __invoke($coll) {
      return (\Phel::getDefinition("phel\\core", "first"))((\Phel::getDefinition("phel\\core", "first"))($coll));
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(ffirst coll)\n```\nSame as `(first (first coll))`.",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 441,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 444,
      \Phel::keyword("column"), 23
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[coll]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "second",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\second";

    public function __invoke($coll) {
      return (\Phel::getDefinition("phel\\core", "first"))((\Phel::getDefinition("phel\\core", "next"))($coll));
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(second coll)\n```\nReturns the second element of a sequence, or nil if not present.",
    \Phel::keyword("example"), "(second [1 2 3]) ; => 2",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 446,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 450,
      \Phel::keyword("column"), 22
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[coll]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "rest",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\rest";

    public function __invoke($coll) {
      if (($__truthy = ($coll instanceof \Phel\Lang\RestInterface)) !== null && $__truthy !== false) {
        return (function() use($coll) {
          $target_111 = $coll;
          return $target_111->rest();
        })();
      } else {
        if (($__truthy = is_string($coll)) !== null && $__truthy !== false) {
          return (\Phel::getDefinition("phel\\core", "vector"))(...((array_slice(mb_str_split($coll), 1)) ?? []));
        } else {
          if (($__truthy = is_array($coll)) !== null && $__truthy !== false) {
            return array_slice($coll, 1);
          } else {
            throw (new \InvalidArgumentException("cannot do rest"));
          }

        }

      }

    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(rest coll)\n```\nReturns the sequence after the first element, or empty sequence if none.",
    \Phel::keyword("example"), "(rest [1 2 3]) ; => [2 3]",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 452,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 462,
      \Phel::keyword("column"), 71
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[coll]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "nfirst",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\nfirst";

    public function __invoke($coll) {
      return (\Phel::getDefinition("phel\\core", "next"))((\Phel::getDefinition("phel\\core", "first"))($coll));
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(nfirst coll)\n```\nSame as `(next (first coll))`.",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 464,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 467,
      \Phel::keyword("column"), 22
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[coll]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "nnext",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\nnext";

    public function __invoke($coll) {
      return (\Phel::getDefinition("phel\\core", "next"))((\Phel::getDefinition("phel\\core", "next"))($coll));
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(nnext coll)\n```\nSame as `(next (next coll))`.",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 469,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 472,
      \Phel::keyword("column"), 21
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[coll]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "count",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\count";

    public function __invoke($coll) {
      if (($__truthy = ($coll instanceof \Countable)) !== null && $__truthy !== false) {
        return (function() use($coll) {
          $target_113 = $coll;
          return $target_113->count();
        })();
      } else {
        if (($__truthy = is_array($coll)) !== null && $__truthy !== false) {
          return count($coll);
        } else {
          if (($__truthy = is_string($coll)) !== null && $__truthy !== false) {
            return mb_strlen($coll);
          } else {
            if (($__truthy = ($coll === null)) !== null && $__truthy !== false) {
              return 0;
            } else {
              throw (new \InvalidArgumentException((\Phel::getDefinition("phel\\core", "str"))("object is not countable: ", $coll)));
            }

          }

        }

      }

    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(count coll)\n```\nCounts the number of elements in a sequence. Can be used on everything that implements the PHP Countable interface.\n\n  Works with lists, vectors, hash-maps, sets, strings, and PHP arrays.\n  Returns 0 for nil.",
    \Phel::keyword("example"), "(count [1 2 3]) ; => 3",
    \Phel::keyword("see-also"), \Phel::vector(["empty?", "seq"]),
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 474,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 490,
      \Phel::keyword("column"), 96
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[coll]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "if-not",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\if_not";

    public function __invoke($test, $then, ...$__phel_115) {
      $__phel_115 = \Phel::vector($__phel_115);
      $__phel_116_119 = $__phel_115;
      $__phel_117_120 = (\Phel::getDefinition("phel\\core", "first"))($__phel_116_119);
      $__phel_118_121 = (\Phel::getDefinition("phel\\core", "next"))($__phel_116_119);
      $else_122 = $__phel_117_120;
      return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("if"))), (\Phel::getDefinition("phel\\core", "list"))($test), (\Phel::getDefinition("phel\\core", "list"))($else_122), (\Phel::getDefinition("phel\\core", "list"))($then))) ?? []));
    }
  },
  \Phel::map(
    \Phel::keyword("macro"), true,
    \Phel::keyword("doc"), "```phel\n(if-not test then & [else])\n```\nEvaluates then if test is false, else otherwise.",
    \Phel::keyword("example"), "(if-not (< 5 3) \"not less\" \"less\") ; => \"not less\"",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 496,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 500,
      \Phel::keyword("column"), 26
    ),
    "min-arity", 2,
    "is-variadic", true,
    "arglists", "[test then & __phel_115]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "when",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\when";

    public function __invoke($test, ...$body) {
      $body = \Phel::vector($body);
      return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("if"))), (\Phel::getDefinition("phel\\core", "list"))($test), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("do"))), $body)) ?? []))))) ?? []));
    }
  },
  \Phel::map(
    \Phel::keyword("macro"), true,
    \Phel::keyword("doc"), "```phel\n(when test & body)\n```\nEvaluates body if test is true, otherwise returns nil.",
    \Phel::keyword("example"), "(when (> 10 5) \"greater\") ; => \"greater\"",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 502,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 506,
      \Phel::keyword("column"), 26
    ),
    "min-arity", 1,
    "is-variadic", true,
    "arglists", "[test & body]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "when-not",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\when_not";

    public function __invoke($test, ...$body) {
      $body = \Phel::vector($body);
      return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("if"))), (\Phel::getDefinition("phel\\core", "list"))($test), (\Phel::getDefinition("phel\\core", "list"))(null), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("do"))), $body)) ?? []))))) ?? []));
    }
  },
  \Phel::map(
    \Phel::keyword("macro"), true,
    \Phel::keyword("doc"), "```phel\n(when-not test & body)\n```\nEvaluates body if test is false, otherwise returns nil.",
    \Phel::keyword("example"), "(when-not (empty? [1 2 3]) \"has items\") ; => \"has items\"",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 508,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 512,
      \Phel::keyword("column"), 30
    ),
    "min-arity", 1,
    "is-variadic", true,
    "arglists", "[test & body]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "cond",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\cond";

    public function __invoke(...$pairs) {
      $pairs = \Phel::vector($pairs);
      $cnt_123 = (\Phel::getDefinition("phel\\core", "count"))($pairs);
      if (($__truthy = ($cnt_123 === 0)) !== null && $__truthy !== false) {
        return null;
      } else {
        if (($__truthy = ($cnt_123 === 1)) !== null && $__truthy !== false) {
          return (\Phel::getDefinition("phel\\core", "first"))($pairs);
        } else {
          return (\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("if")), (\Phel::getDefinition("phel\\core", "first"))($pairs), (\Phel::getDefinition("phel\\core", "second"))($pairs), (\Phel::getDefinition("phel\\core", "cons"))((\Phel\Lang\Symbol::create("cond")), (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "next"))((\Phel::getDefinition("phel\\core", "next"))($pairs))) ?? []))));
        }

      }

    }
  },
  \Phel::map(
    \Phel::keyword("macro"), true,
    \Phel::keyword("doc"), "```phel\n(cond & pairs)\n```\nEvaluates test/expression pairs, returning the first matching expression.",
    \Phel::keyword("example"), "(cond (< x 0) \"negative\" (> x 0) \"positive\" \"zero\") ; => \"negative\", \"positive\", or \"zero\" depending on x",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 514,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 526,
      \Phel::keyword("column"), 64
    ),
    "min-arity", 0,
    "is-variadic", true,
    "arglists", "[& pairs]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "case",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\case";

    public function __invoke($e, ...$pairs) {
      $pairs = \Phel::vector($pairs);
      if (($__truthy = (\Phel::getDefinition("phel\\core", "next"))($pairs)) !== null && $__truthy !== false) {
        $v_124 = (\Phel::getDefinition("phel\\core", "gensym"))();
        return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("let"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "vector"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))($v_124), (\Phel::getDefinition("phel\\core", "list"))($e))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("if"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/equals1"))), (\Phel::getDefinition("phel\\core", "list"))($v_124), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("quote"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "first"))($pairs)))) ?? []))))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "first"))((\Phel::getDefinition("phel\\core", "next"))($pairs))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("case"))), (\Phel::getDefinition("phel\\core", "list"))($v_124), (\Phel::getDefinition("phel\\core", "next"))((\Phel::getDefinition("phel\\core", "next"))($pairs)))) ?? []))))) ?? []))))) ?? []));
      } else {
        return (\Phel::getDefinition("phel\\core", "first"))($pairs);
      }

    }
  },
  \Phel::map(
    \Phel::keyword("macro"), true,
    \Phel::keyword("doc"), "```phel\n(case e & pairs)\n```\nEvaluates expression and matches it against constant test values, returning the associated result.",
    \Phel::keyword("example"), "(case x 1 \"one\" 2 \"two\" \"other\") ; => \"one\" (when x is 1)",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 528,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 538,
      \Phel::keyword("column"), 19
    ),
    "min-arity", 1,
    "is-variadic", true,
    "arglists", "[e & pairs]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "or",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\or";

    public function __invoke(...$args) {
      $args = \Phel::vector($args);
      $__phel_125_126 = (\Phel::getDefinition("phel\\core", "count"))($args);
      if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_125_126, 0)) !== null && $__truthy !== false) {
        return null;
      } else {
        $__phel_127_128 = $__phel_125_126;
        if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_127_128, 1)) !== null && $__truthy !== false) {
          return (\Phel::getDefinition("phel\\core", "first"))($args);
        } else {
          $v_129 = (\Phel::getDefinition("phel\\core", "gensym"))();
          return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("let"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "vector"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))($v_129), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "first"))($args)))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("if"))), (\Phel::getDefinition("phel\\core", "list"))($v_129), (\Phel::getDefinition("phel\\core", "list"))($v_129), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("or"))), (\Phel::getDefinition("phel\\core", "next"))($args))) ?? []))))) ?? []))))) ?? []));
        }

      }

    }
  },
  \Phel::map(
    \Phel::keyword("macro"), true,
    \Phel::keyword("doc"), "```phel\n(or & args)\n```\nEvaluates expressions left to right, returning the first truthy value or the last value.",
    \Phel::keyword("example"), "(or false nil 42 100) ; => 42",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 544,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 553,
      \Phel::keyword("column"), 42
    ),
    "min-arity", 0,
    "is-variadic", true,
    "arglists", "[& args]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "and",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\and";

    public function __invoke(...$args) {
      $args = \Phel::vector($args);
      $__phel_130_131 = (\Phel::getDefinition("phel\\core", "count"))($args);
      if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_130_131, 0)) !== null && $__truthy !== false) {
        return true;
      } else {
        $__phel_132_133 = $__phel_130_131;
        if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_132_133, 1)) !== null && $__truthy !== false) {
          return (\Phel::getDefinition("phel\\core", "first"))($args);
        } else {
          $v_134 = (\Phel::getDefinition("phel\\core", "gensym"))();
          return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("let"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "vector"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))($v_134), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "first"))($args)))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("if"))), (\Phel::getDefinition("phel\\core", "list"))($v_134), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("and"))), (\Phel::getDefinition("phel\\core", "next"))($args))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))($v_134))) ?? []))))) ?? []));
        }

      }

    }
  },
  \Phel::map(
    \Phel::keyword("macro"), true,
    \Phel::keyword("doc"), "```phel\n(and & args)\n```\nEvaluates expressions left to right, returning the first falsy value or the last value.",
    \Phel::keyword("example"), "(and true 1 \"hello\") ; => \"hello\"",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 555,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 564,
      \Phel::keyword("column"), 43
    ),
    "min-arity", 0,
    "is-variadic", true,
    "arglists", "[& args]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "id2",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\id2";

    public function __invoke($a, $b) {
      if (($__truthy = ($a instanceof \Phel\Lang\IdenticalInterface)) !== null && $__truthy !== false) {
        return (function() use($a,$b) {
          $target_135 = $a;
          return $target_135->identical($b);
        })();
      } else {
        return ($a === $b);
      }

    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(id2 a b)\n```\n",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 566,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 569,
      \Phel::keyword("column"), 19
    ),
    "min-arity", 2,
    "is-variadic", false,
    "arglists", "[a b]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "id",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\id";

    public function __invoke($a, ...$more) {
      $more = \Phel::vector($more);
      while (true) {
        $__phel_137_138 = (\Phel::getDefinition("phel\\core", "count"))($more);
        if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_137_138, 0)) !== null && $__truthy !== false) {
          return true;
        } else {
          $__phel_139_140 = $__phel_137_138;
          if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_139_140, 1)) !== null && $__truthy !== false) {
            return (\Phel::getDefinition("phel\\core", "id2"))($a, (\Phel::getDefinition("phel\\core", "first"))($more));
          } else {
            if (($__truthy = (\Phel::getDefinition("phel\\core", "id2"))($a, (\Phel::getDefinition("phel\\core", "first"))($more))) !== null && $__truthy !== false) {
              $__phel_141 = (\Phel::getDefinition("phel\\core", "first"))($more);
              $__phel_142 = (\Phel::getDefinition("phel\\core", "next"))($more);
              $a = $__phel_141;
              $more = $__phel_142;
              continue;

            } else {
              return false;
            }

          }

        }
        break;
      }
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(id a & more)\n```\nChecks if all values are identical. Same as `a === b` in PHP.",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 571,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 579,
      \Phel::keyword("column"), 14
    ),
    "min-arity", 1,
    "is-variadic", true,
    "arglists", "[a & more]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "=",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\=";

    public function __invoke($a, ...$more) {
      $more = \Phel::vector($more);
      while (true) {
        $__phel_145_146 = (\Phel::getDefinition("phel\\core", "count"))($more);
        if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_145_146, 0)) !== null && $__truthy !== false) {
          return true;
        } else {
          $__phel_147_148 = $__phel_145_146;
          if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_147_148, 1)) !== null && $__truthy !== false) {
            return (\Phel::getDefinition("phel\\core", "equals1"))($a, (\Phel::getDefinition("phel\\core", "first"))($more));
          } else {
            if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($a, (\Phel::getDefinition("phel\\core", "first"))($more))) !== null && $__truthy !== false) {
              $__phel_149 = (\Phel::getDefinition("phel\\core", "first"))($more);
              $__phel_150 = (\Phel::getDefinition("phel\\core", "next"))($more);
              $a = $__phel_149;
              $more = $__phel_150;
              continue;

            } else {
              return false;
            }

          }

        }
        break;
      }
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(= a & more)\n```\nChecks if all values are equal (value equality, not identity).",
    \Phel::keyword("example"), "(= [1 2 3] [1 2 3]) ; => true",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 581,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 590,
      \Phel::keyword("column"), 14
    ),
    "min-arity", 1,
    "is-variadic", true,
    "arglists", "[a & more]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "not",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\not";

    public function __invoke($x) {
      if (($__truthy = $x) !== null && $__truthy !== false) {
        return false;
      } else {
        return true;
      }

    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(not x)\n```\nReturns true if value is falsy (nil or false), false otherwise.",
    \Phel::keyword("example"), "(not nil) ; => true",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 592,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 596,
      \Phel::keyword("column"), 20
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[x]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "not=",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\not=";

    public function __invoke($a, ...$more) {
      $more = \Phel::vector($more);
      $__phel_153_154 = (\Phel::getDefinition("phel\\core", "count"))($more);
      if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_153_154, 0)) !== null && $__truthy !== false) {
        return false;
      } else {
        $__phel_155_156 = $__phel_153_154;
        if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_155_156, 1)) !== null && $__truthy !== false) {
          return (\Phel::getDefinition("phel\\core", "not"))((\Phel::getDefinition("phel\\core", "="))($a, (\Phel::getDefinition("phel\\core", "first"))($more)));
        } else {
          return (\Phel::getDefinition("phel\\core", "not"))((\Phel::getDefinition("phel\\core", "="))($a, ...(($more) ?? [])));
        }

      }

    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(not= a & more)\n```\nChecks if all values are unequal. Same as `a != b` in PHP.",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 598,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 604,
      \Phel::keyword("column"), 28
    ),
    "min-arity", 1,
    "is-variadic", true,
    "arglists", "[a & more]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "<",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\<";

    public function __invoke($a, ...$more) {
      $more = \Phel::vector($more);
      while (true) {
        $__phel_157_158 = (\Phel::getDefinition("phel\\core", "count"))($more);
        if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_157_158, 0)) !== null && $__truthy !== false) {
          return true;
        } else {
          $__phel_159_160 = $__phel_157_158;
          if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_159_160, 1)) !== null && $__truthy !== false) {
            return ($a < (\Phel::getDefinition("phel\\core", "first"))($more));
          } else {
            if (($__truthy = ($a < (\Phel::getDefinition("phel\\core", "first"))($more))) !== null && $__truthy !== false) {
              $__phel_161 = (\Phel::getDefinition("phel\\core", "first"))($more);
              $__phel_162 = (\Phel::getDefinition("phel\\core", "next"))($more);
              $a = $__phel_161;
              $more = $__phel_162;
              continue;

            } else {
              return false;
            }

          }

        }
        break;
      }
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(< a & more)\n```\nChecks if each argument is strictly less than the following argument.",
    \Phel::keyword("inline"), new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "";

      public function __invoke($a, $b) {
        return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("php/<"))), (\Phel::getDefinition("phel\\core", "list"))($a), (\Phel::getDefinition("phel\\core", "list"))($b))) ?? []));
      }
    },
    \Phel::keyword("inline-arity"), new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "";

      public function __invoke($n) {
        return ($n === 2);
      }
    },
    \Phel::keyword("example"), "(< 1 2 3 4) ; => true",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 606,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 617,
      \Phel::keyword("column"), 14
    ),
    "min-arity", 1,
    "is-variadic", true,
    "arglists", "[a & more]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "<=",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\<=";

    public function __invoke($a, ...$more) {
      $more = \Phel::vector($more);
      while (true) {
        $__phel_165_166 = (\Phel::getDefinition("phel\\core", "count"))($more);
        if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_165_166, 0)) !== null && $__truthy !== false) {
          return true;
        } else {
          $__phel_167_168 = $__phel_165_166;
          if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_167_168, 1)) !== null && $__truthy !== false) {
            return ($a <= (\Phel::getDefinition("phel\\core", "first"))($more));
          } else {
            if (($__truthy = ($a <= (\Phel::getDefinition("phel\\core", "first"))($more))) !== null && $__truthy !== false) {
              $__phel_169 = (\Phel::getDefinition("phel\\core", "first"))($more);
              $__phel_170 = (\Phel::getDefinition("phel\\core", "next"))($more);
              $a = $__phel_169;
              $more = $__phel_170;
              continue;

            } else {
              return false;
            }

          }

        }
        break;
      }
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(<= a & more)\n```\nChecks if each argument is less than or equal to the following argument. Returns a boolean.",
    \Phel::keyword("inline"), new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "";

      public function __invoke($a, $b) {
        return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("php/<="))), (\Phel::getDefinition("phel\\core", "list"))($a), (\Phel::getDefinition("phel\\core", "list"))($b))) ?? []));
      }
    },
    \Phel::keyword("inline-arity"), new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "";

      public function __invoke($n) {
        return ($n === 2);
      }
    },
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 619,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 629,
      \Phel::keyword("column"), 14
    ),
    "min-arity", 1,
    "is-variadic", true,
    "arglists", "[a & more]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  ">",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\>";

    public function __invoke($a, ...$more) {
      $more = \Phel::vector($more);
      while (true) {
        $__phel_173_174 = (\Phel::getDefinition("phel\\core", "count"))($more);
        if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_173_174, 0)) !== null && $__truthy !== false) {
          return true;
        } else {
          $__phel_175_176 = $__phel_173_174;
          if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_175_176, 1)) !== null && $__truthy !== false) {
            return ($a > (\Phel::getDefinition("phel\\core", "first"))($more));
          } else {
            if (($__truthy = ($a > (\Phel::getDefinition("phel\\core", "first"))($more))) !== null && $__truthy !== false) {
              $__phel_177 = (\Phel::getDefinition("phel\\core", "first"))($more);
              $__phel_178 = (\Phel::getDefinition("phel\\core", "next"))($more);
              $a = $__phel_177;
              $more = $__phel_178;
              continue;

            } else {
              return false;
            }

          }

        }
        break;
      }
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(> a & more)\n```\nChecks if each argument is strictly greater than the following argument.",
    \Phel::keyword("inline"), new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "";

      public function __invoke($a, $b) {
        return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("php/>"))), (\Phel::getDefinition("phel\\core", "list"))($a), (\Phel::getDefinition("phel\\core", "list"))($b))) ?? []));
      }
    },
    \Phel::keyword("inline-arity"), new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "";

      public function __invoke($n) {
        return ($n === 2);
      }
    },
    \Phel::keyword("example"), "(> 4 3 2 1) ; => true",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 631,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 642,
      \Phel::keyword("column"), 14
    ),
    "min-arity", 1,
    "is-variadic", true,
    "arglists", "[a & more]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  ">=",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\>=";

    public function __invoke($a, ...$more) {
      $more = \Phel::vector($more);
      while (true) {
        $__phel_181_182 = (\Phel::getDefinition("phel\\core", "count"))($more);
        if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_181_182, 0)) !== null && $__truthy !== false) {
          return true;
        } else {
          $__phel_183_184 = $__phel_181_182;
          if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_183_184, 1)) !== null && $__truthy !== false) {
            return ($a >= (\Phel::getDefinition("phel\\core", "first"))($more));
          } else {
            if (($__truthy = ($a >= (\Phel::getDefinition("phel\\core", "first"))($more))) !== null && $__truthy !== false) {
              $__phel_185 = (\Phel::getDefinition("phel\\core", "first"))($more);
              $__phel_186 = (\Phel::getDefinition("phel\\core", "next"))($more);
              $a = $__phel_185;
              $more = $__phel_186;
              continue;

            } else {
              return false;
            }

          }

        }
        break;
      }
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(>= a & more)\n```\nChecks if each argument is greater than or equal to the following argument. Returns a boolean.",
    \Phel::keyword("inline"), new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "";

      public function __invoke($a, $b) {
        return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("php/>="))), (\Phel::getDefinition("phel\\core", "list"))($a), (\Phel::getDefinition("phel\\core", "list"))($b))) ?? []));
      }
    },
    \Phel::keyword("inline-arity"), new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "";

      public function __invoke($n) {
        return ($n === 2);
      }
    },
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 644,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 654,
      \Phel::keyword("column"), 14
    ),
    "min-arity", 1,
    "is-variadic", true,
    "arglists", "[a & more]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "<=>",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\<=>";

    public function __invoke($a, $b) {
      return ($a <=> $b);
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(<=> a b)\n```\nAlias for the spaceship PHP operator in ascending order. Returns an int.",
    \Phel::keyword("inline"), new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "";

      public function __invoke($a, $b) {
        return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("php/<=>"))), (\Phel::getDefinition("phel\\core", "list"))($a), (\Phel::getDefinition("phel\\core", "list"))($b))) ?? []));
      }
    },
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 656,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 660,
      \Phel::keyword("column"), 16
    ),
    "min-arity", 2,
    "is-variadic", false,
    "arglists", "[a b]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  ">=<",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\>=<";

    public function __invoke($a, $b) {
      return ($b <=> $a);
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(>=< a b)\n```\nAlias for the spaceship PHP operator in descending order. Returns an int.",
    \Phel::keyword("inline"), new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "";

      public function __invoke($a, $b) {
        return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("php/<=>"))), (\Phel::getDefinition("phel\\core", "list"))($b), (\Phel::getDefinition("phel\\core", "list"))($a))) ?? []));
      }
    },
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 662,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 666,
      \Phel::keyword("column"), 16
    ),
    "min-arity", 2,
    "is-variadic", false,
    "arglists", "[a b]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "all?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\all?";

    public function __invoke($pred, $coll) {
      while (true) {
        if (($__truthy = ((\Phel::getDefinition("phel\\core", "count"))($coll) === 0)) !== null && $__truthy !== false) {
          return true;
        } else {
          if (($__truthy = ($pred)((\Phel::getDefinition("phel\\core", "first"))($coll))) !== null && $__truthy !== false) {
            $__phel_189 = $pred;
            $__phel_190 = (\Phel::getDefinition("phel\\core", "next"))($coll);
            $pred = $__phel_189;
            $coll = $__phel_190;
            continue;

          } else {
            return false;
          }

        }
        break;
      }
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(all? pred coll)\n```\nReturns true if predicate is true for every element in collection, false otherwise.",
    \Phel::keyword("example"), "(all? even? [2 4 6 8]) ; => true",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 668,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 675,
      \Phel::keyword("column"), 11
    ),
    "min-arity", 2,
    "is-variadic", false,
    "arglists", "[pred coll]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "every?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\every?";

    public function __invoke($pred, $coll) {
      while (true) {
        if (($__truthy = ((\Phel::getDefinition("phel\\core", "count"))($coll) === 0)) !== null && $__truthy !== false) {
          return true;
        } else {
          if (($__truthy = ($pred)((\Phel::getDefinition("phel\\core", "first"))($coll))) !== null && $__truthy !== false) {
            $__phel_193 = $pred;
            $__phel_194 = (\Phel::getDefinition("phel\\core", "next"))($coll);
            $pred = $__phel_193;
            $coll = $__phel_194;
            continue;

          } else {
            return false;
          }

        }
        break;
      }
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(every? pred coll)\n```\nReturns true if predicate is true for every element in collection, false otherwise.\n  Alias for `all?`.",
    \Phel::keyword("example"), "(every? even? [2 4 6 8]) ; => true",
    \Phel::keyword("see-also"), \Phel::vector(["all?", "not-every?"]),
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 677,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 686,
      \Phel::keyword("column"), 11
    ),
    "min-arity", 2,
    "is-variadic", false,
    "arglists", "[pred coll]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "not-every?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\not_every?";

    public function __invoke($pred, $coll) {
      return (\Phel::getDefinition("phel\\core", "not"))((\Phel::getDefinition("phel\\core", "all?"))($pred, $coll));
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(not-every? pred coll)\n```\nReturns false if `(pred x)` is logical true for every `x` in collection `coll`\n   or if `coll` is empty. Otherwise returns true.",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 688,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 692,
      \Phel::keyword("column"), 25
    ),
    "min-arity", 2,
    "is-variadic", false,
    "arglists", "[pred coll]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "empty?",
  null,
  \Phel::map(
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 694,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 694,
      \Phel::keyword("column"), 16
    )
  )
);
\Phel::addDefinition(
  "phel\\core",
  "truthy?",
  null,
  \Phel::map(
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 695,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 695,
      \Phel::keyword("column"), 17
    )
  )
);
\Phel::addDefinition(
  "phel\\core",
  "name",
  null,
  \Phel::map(
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 696,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 696,
      \Phel::keyword("column"), 14
    )
  )
);
\Phel::addDefinition(
  "phel\\core",
  "some?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\some?";

    public function __invoke($pred, $coll) {
      while (true) {
        if (($__truthy = (\Phel::getDefinition("phel\\core", "empty?"))($coll)) !== null && $__truthy !== false) {
          return false;
        } else {
          if (($__truthy = (\Phel::getDefinition("phel\\core", "truthy?"))(($pred)((\Phel::getDefinition("phel\\core", "first"))($coll)))) !== null && $__truthy !== false) {
            return true;
          } else {
            $__phel_197 = $pred;
            $__phel_198 = (\Phel::getDefinition("phel\\core", "next"))($coll);
            $pred = $__phel_197;
            $coll = $__phel_198;
            continue;

          }

        }
        break;
      }
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(some? pred coll)\n```\nReturns true if predicate is true for at least one element in collection, false otherwise.",
    \Phel::keyword("example"), "(some? even? [1 3 5 6 7]) ; => true",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 698,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 706,
      \Phel::keyword("column"), 33
    ),
    "min-arity", 2,
    "is-variadic", false,
    "arglists", "[pred coll]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "not-any?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\not_any?";

    public function __invoke($pred, $coll) {
      return (\Phel::getDefinition("phel\\core", "not"))((\Phel::getDefinition("phel\\core", "some?"))($pred, $coll));
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(not-any? pred coll)\n```\nReturns true if `(pred x)` is logical false for every `x` in `coll`\n   or if `coll` is empty. Otherwise returns false.",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 708,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 712,
      \Phel::keyword("column"), 26
    ),
    "min-arity", 2,
    "is-variadic", false,
    "arglists", "[pred coll]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "some",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\some";

    public function __invoke($pred, $coll) {
      while (true) {
        if (($__truthy = (\Phel::getDefinition("phel\\core", "empty?"))($coll)) !== null && $__truthy !== false) {
          return null;
        } else {
          $res_201 = ($pred)((\Phel::getDefinition("phel\\core", "first"))($coll));
          if (($__truthy = (\Phel::getDefinition("phel\\core", "truthy?"))($res_201)) !== null && $__truthy !== false) {
            return $res_201;
          } else {
            $__phel_202 = $pred;
            $__phel_203 = (\Phel::getDefinition("phel\\core", "next"))($coll);
            $pred = $__phel_202;
            $coll = $__phel_203;
            continue;

          }

        }
        break;
      }
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(some pred coll)\n```\nReturns the first truthy value of applying predicate to elements, or nil if none found.",
    \Phel::keyword("example"), "(some |(when (> \$ 10) \$) [5 15 8]) ; => 15",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 714,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 723,
      \Phel::keyword("column"), 36
    ),
    "min-arity", 2,
    "is-variadic", false,
    "arglists", "[pred coll]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "true?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\true?";

    public function __invoke($x) {
      return (\Phel::getDefinition("phel\\core", "id"))($x, true);
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(true? x)\n```\nChecks if value is exactly true (not just truthy).",
    \Phel::keyword("example"), "(true? 1) ; => false",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 725,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 729,
      \Phel::keyword("column"), 14
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[x]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "truthy?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\truthy?";

    public function __invoke($x) {
      return (\Phel\Lang\Truthy::isTruthy($x));
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(truthy? x)\n```\nChecks if `x` is truthy. Same as `x == true` in PHP.",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 731,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 734,
      \Phel::keyword("column"), 31
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[x]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "false?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\false?";

    public function __invoke($x) {
      return (\Phel::getDefinition("phel\\core", "id"))($x, false);
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(false? x)\n```\nChecks if value is exactly false (not just falsy).",
    \Phel::keyword("example"), "(false? nil) ; => false",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 736,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 740,
      \Phel::keyword("column"), 15
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[x]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "nil?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\nil?";

    public function __invoke($x) {
      return (\Phel::getDefinition("phel\\core", "id"))($x, null);
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(nil? x)\n```\nReturns true if value is nil, false otherwise.",
    \Phel::keyword("example"), "(nil? (get {:a 1} :b)) ; => true",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 742,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 746,
      \Phel::keyword("column"), 13
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[x]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "str-contains?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\str_contains?";

    public function __invoke($str, $s) {
      return str_contains($str, $s);
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(str-contains? str s)\n```\nReturns true if str contains s.",
    \Phel::keyword("deprecated"), "Use phel\\str\\contains?",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 748,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 752,
      \Phel::keyword("column"), 27
    ),
    "min-arity", 2,
    "is-variadic", false,
    "arglists", "[str s]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "contains?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\contains?";

    public function __invoke($coll, $key) {
      if (($__truthy = ($coll instanceof \Phel\Lang\ContainsInterface)) !== null && $__truthy !== false) {
        return (function() use($coll,$key) {
          $target_210 = $coll;
          return $target_210->contains($key);
        })();
      } else {
        if (($__truthy = is_array($coll)) !== null && $__truthy !== false) {
          return array_key_exists($key, $coll);
        } else {
          if (($__truthy = is_string($coll)) !== null && $__truthy !== false) {
            $__phel_206_207 = is_int($key);
            if (($__truthy = $__phel_206_207) !== null && $__truthy !== false) {
              $__phel_208_209 = ($key >= 0);
              if (($__truthy = $__phel_208_209) !== null && $__truthy !== false) {
                return ($key < mb_strlen($coll));
              } else {
                return $__phel_208_209;
              }

            } else {
              return $__phel_206_207;
            }

          } else {
            throw (new \InvalidArgumentException(("cannot call 'contains?' on " . get_class($coll))));
          }

        }

      }

    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(contains? coll key)\n```\nReturns true if key is present in collection (checks keys/indices, not values).",
    \Phel::keyword("example"), "(contains? [10 20 30] 1) ; => true",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 754,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 762,
      \Phel::keyword("column"), 107
    ),
    "min-arity", 2,
    "is-variadic", false,
    "arglists", "[coll key]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "compare",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\compare";

    public function __invoke($x, $y) {
      return ($x <=> $y);
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(compare x y)\n```\nWrapper for PHP's spaceship operator (`php/<=>`).\n  Returns an integer less than, equal to, or greater than zero\n  when `x` is less than, equal to, or greater than `y`, respectively.",
    \Phel::keyword("inline"), new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "";

      public function __invoke($x, $y) {
        return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("php/<=>"))), (\Phel::getDefinition("phel\\core", "list"))($x), (\Phel::getDefinition("phel\\core", "list"))($y))) ?? []));
      }
    },
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 764,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 770,
      \Phel::keyword("column"), 16
    ),
    "min-arity", 2,
    "is-variadic", false,
    "arglists", "[x y]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "type",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\type";

    public function __invoke($x) {
      if (($__truthy = ($x instanceof \Phel\Lang\Collections\Vector\PersistentVectorInterface)) !== null && $__truthy !== false) {
        return \Phel::keyword("vector");
      } else {
        if (($__truthy = ($x instanceof \Phel\Lang\Collections\LinkedList\PersistentListInterface)) !== null && $__truthy !== false) {
          return \Phel::keyword("list");
        } else {
          if (($__truthy = ($x instanceof \Phel\Lang\Collections\Struct\AbstractPersistentStruct)) !== null && $__truthy !== false) {
            return \Phel::keyword("struct");
          } else {
            if (($__truthy = ($x instanceof \Phel\Lang\Collections\Map\PersistentMapInterface)) !== null && $__truthy !== false) {
              return \Phel::keyword("hash-map");
            } else {
              if (($__truthy = ($x instanceof \Phel\Lang\Collections\HashSet\PersistentHashSetInterface)) !== null && $__truthy !== false) {
                return \Phel::keyword("set");
              } else {
                if (($__truthy = ($x instanceof \Phel\Lang\Keyword)) !== null && $__truthy !== false) {
                  return \Phel::keyword("keyword");
                } else {
                  if (($__truthy = ($x instanceof \Phel\Lang\Symbol)) !== null && $__truthy !== false) {
                    return \Phel::keyword("symbol");
                  } else {
                    if (($__truthy = ($x instanceof \Phel\Lang\Variable)) !== null && $__truthy !== false) {
                      return \Phel::keyword("var");
                    } else {
                      if (($__truthy = is_int($x)) !== null && $__truthy !== false) {
                        return \Phel::keyword("int");
                      } else {
                        if (($__truthy = is_float($x)) !== null && $__truthy !== false) {
                          return \Phel::keyword("float");
                        } else {
                          if (($__truthy = is_string($x)) !== null && $__truthy !== false) {
                            return \Phel::keyword("string");
                          } else {
                            if (($__truthy = is_null($x)) !== null && $__truthy !== false) {
                              return \Phel::keyword("nil");
                            } else {
                              if (($__truthy = is_bool($x)) !== null && $__truthy !== false) {
                                return \Phel::keyword("boolean");
                              } else {
                                if (($__truthy = is_callable($x)) !== null && $__truthy !== false) {
                                  return \Phel::keyword("function");
                                } else {
                                  if (($__truthy = is_array($x)) !== null && $__truthy !== false) {
                                    return \Phel::keyword("array", "php");
                                  } else {
                                    if (($__truthy = is_resource($x)) !== null && $__truthy !== false) {
                                      return \Phel::keyword("resource", "php");
                                    } else {
                                      if (($__truthy = is_object($x)) !== null && $__truthy !== false) {
                                        return \Phel::keyword("object", "php");
                                      } else {
                                        return \Phel::keyword("unknown");
                                      }

                                    }

                                  }

                                }

                              }

                            }

                          }

                        }

                      }

                    }

                  }

                }

              }

            }

          }

        }

      }

    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(type x)\n```\nReturns the type of `x`. The following types can be returned:\n\n* `:vector`\n* `:list`\n* `:struct`\n* `:hash-map`\n* `:set`\n* `:keyword`\n* `:symbol`\n* `:var`\n* `:int`\n* `:float`\n* `:string`\n* `:nil`\n* `:boolean`\n* `:function`\n* `:php/array`\n* `:php/resource`\n* `:php/object`\n* `:unknown`",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 776,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 816,
      \Phel::keyword("column"), 14
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[x]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "float?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\float?";

    public function __invoke($x) {
      return (\Phel::getDefinition("phel\\core", "="))((\Phel::getDefinition("phel\\core", "type"))($x), \Phel::keyword("float"));
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(float? x)\n```\nReturns true if `x` is float point number, false otherwise.",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 818,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 821,
      \Phel::keyword("column"), 22
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[x]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "int?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\int?";

    public function __invoke($x) {
      return (\Phel::getDefinition("phel\\core", "="))((\Phel::getDefinition("phel\\core", "type"))($x), \Phel::keyword("int"));
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(int? x)\n```\nReturns true if `x` is an integer number, false otherwise.",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 823,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 826,
      \Phel::keyword("column"), 20
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[x]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "number?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\number?";

    public function __invoke($x) {
      $__phel_212_213 = (\Phel::getDefinition("phel\\core", "="))((\Phel::getDefinition("phel\\core", "type"))($x), \Phel::keyword("int"));
      if (($__truthy = $__phel_212_213) !== null && $__truthy !== false) {
        return $__phel_212_213;
      } else {
        return (\Phel::getDefinition("phel\\core", "="))((\Phel::getDefinition("phel\\core", "type"))($x), \Phel::keyword("float"));
      }

    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(number? x)\n```\nReturns true if `x` is a number, false otherwise.",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 828,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 831,
      \Phel::keyword("column"), 45
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[x]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "string?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\string?";

    public function __invoke($x) {
      return (\Phel::getDefinition("phel\\core", "="))((\Phel::getDefinition("phel\\core", "type"))($x), \Phel::keyword("string"));
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(string? x)\n```\nReturns true if `x` is a string, false otherwise.",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 833,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 836,
      \Phel::keyword("column"), 23
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[x]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "keyword?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\keyword?";

    public function __invoke($x) {
      return (\Phel::getDefinition("phel\\core", "="))((\Phel::getDefinition("phel\\core", "type"))($x), \Phel::keyword("keyword"));
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(keyword? x)\n```\nReturns true if `x` is a keyword, false otherwise.",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 838,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 841,
      \Phel::keyword("column"), 24
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[x]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "symbol?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\symbol?";

    public function __invoke($x) {
      return (\Phel::getDefinition("phel\\core", "="))((\Phel::getDefinition("phel\\core", "type"))($x), \Phel::keyword("symbol"));
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(symbol? x)\n```\nReturns true if `x` is a symbol, false otherwise.",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 843,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 846,
      \Phel::keyword("column"), 23
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[x]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "function?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\function?";

    public function __invoke($x) {
      return (\Phel::getDefinition("phel\\core", "="))((\Phel::getDefinition("phel\\core", "type"))($x), \Phel::keyword("function"));
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(function? x)\n```\nReturns true if `x` is a function, false otherwise.",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 848,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 851,
      \Phel::keyword("column"), 25
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[x]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "struct?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\struct?";

    public function __invoke($x) {
      return (\Phel::getDefinition("phel\\core", "="))((\Phel::getDefinition("phel\\core", "type"))($x), \Phel::keyword("struct"));
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(struct? x)\n```\nReturns true if `x` is a struct, false otherwise.",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 853,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 856,
      \Phel::keyword("column"), 23
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[x]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "hash-map?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\hash_map?";

    public function __invoke($x) {
      return (\Phel::getDefinition("phel\\core", "="))((\Phel::getDefinition("phel\\core", "type"))($x), \Phel::keyword("hash-map"));
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(hash-map? x)\n```\nReturns true if `x` is a hash map, false otherwise.",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 858,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 861,
      \Phel::keyword("column"), 25
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[x]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "vector?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\vector?";

    public function __invoke($x) {
      return (\Phel::getDefinition("phel\\core", "="))((\Phel::getDefinition("phel\\core", "type"))($x), \Phel::keyword("vector"));
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(vector? x)\n```\nReturns true if `x` is a vector, false otherwise.",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 863,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 866,
      \Phel::keyword("column"), 23
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[x]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "list?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\list?";

    public function __invoke($x) {
      return (\Phel::getDefinition("phel\\core", "="))((\Phel::getDefinition("phel\\core", "type"))($x), \Phel::keyword("list"));
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(list? x)\n```\nReturns true if `x` is a list, false otherwise.",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 868,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 871,
      \Phel::keyword("column"), 21
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[x]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "boolean?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\boolean?";

    public function __invoke($x) {
      return (\Phel::getDefinition("phel\\core", "="))((\Phel::getDefinition("phel\\core", "type"))($x), \Phel::keyword("boolean"));
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(boolean? x)\n```\nReturns true if `x` is a boolean, false otherwise.",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 873,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 876,
      \Phel::keyword("column"), 24
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[x]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "php-array?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\php_array?";

    public function __invoke($x) {
      return (\Phel::getDefinition("phel\\core", "="))((\Phel::getDefinition("phel\\core", "type"))($x), \Phel::keyword("array", "php"));
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(php-array? x)\n```\nReturns true if `x` is a PHP Array, false otherwise.",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 878,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 881,
      \Phel::keyword("column"), 26
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[x]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "php-resource?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\php_resource?";

    public function __invoke($x) {
      return (\Phel::getDefinition("phel\\core", "="))((\Phel::getDefinition("phel\\core", "type"))($x), \Phel::keyword("resource", "php"));
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(php-resource? x)\n```\nReturns true if `x` is a PHP resource, false otherwise.",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 883,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 886,
      \Phel::keyword("column"), 29
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[x]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "php-object?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\php_object?";

    public function __invoke($x) {
      return (\Phel::getDefinition("phel\\core", "="))((\Phel::getDefinition("phel\\core", "type"))($x), \Phel::keyword("object", "php"));
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(php-object? x)\n```\nReturns true if `x` is a PHP object, false otherwise.",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 888,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 891,
      \Phel::keyword("column"), 27
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[x]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "empty?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\empty?";

    public function __invoke($x) {
      if (($__truthy = is_numeric($x)) !== null && $__truthy !== false) {
        return (\Phel::getDefinition("phel\\core", "="))(0, $x);
      } else {
        if (($__truthy = is_string($x)) !== null && $__truthy !== false) {
          return (\Phel::getDefinition("phel\\core", "true?"))(empty($x));
        } else {
          return (\Phel::getDefinition("phel\\core", "="))(0, (\Phel::getDefinition("phel\\core", "count"))($x));
        }

      }

    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(empty? x)\n```\nReturns true if x would be 0, \"\" or empty collection, false otherwise.",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 893,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 900,
      \Phel::keyword("column"), 24
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[x]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "not-empty",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\not_empty";

    public function __invoke($coll) {
      if (($__truthy = (\Phel::getDefinition("phel\\core", "empty?"))($coll)) !== null && $__truthy !== false) {
        return null;
      } else {
        return $coll;
      }

    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(not-empty coll)\n```\nReturns `coll` if it contains elements, otherwise nil.",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 902,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 907,
      \Phel::keyword("column"), 10
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[coll]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "seq",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\seq";

    public function __invoke($coll) {
      if (($__truthy = is_string($coll)) !== null && $__truthy !== false) {
        $chars_214 = mb_str_split($coll);
        if (($__truthy = empty($chars_214)) !== null && $__truthy !== false) {
          return null;
        } else {
          return (\Phel::getDefinition("phel\\core", "vector"))(...(($chars_214) ?? []));
        }

      } else {
        if (($__truthy = ($coll === null)) !== null && $__truthy !== false) {
          return null;
        } else {
          if (($__truthy = ($coll instanceof \Phel\Lang\Collections\LazySeq\LazySeqInterface)) !== null && $__truthy !== false) {
            if (($__truthy = (null === (function() use($coll) {
              $target_217 = $coll;
              return $target_217->first();
            })())) !== null && $__truthy !== false) {
              return null;
            } else {
              return $coll;
            }

          } else {
            if (($__truthy = (function() use($coll) {
              $__phel_215_216 = ($coll instanceof \Countable);
              if (($__truthy = $__phel_215_216) !== null && $__truthy !== false) {
                return (\Phel::getDefinition("phel\\core", "="))(0, (\Phel::getDefinition("phel\\core", "count"))($coll));
              } else {
                return $__phel_215_216;
              }

            })()) !== null && $__truthy !== false) {
              return null;
            } else {
              if (($__truthy = true) !== null && $__truthy !== false) {
                return $coll;
              } else {
                return null;
              }

            }

          }

        }

      }

    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(seq coll)\n```\nReturns a seq on the collection. Strings are converted to a vector of characters.\n  Collections are unchanged. Returns nil if coll is empty or nil.\n\n  This function is useful for explicitly converting strings to sequences of characters,\n  enabling sequence operations like map, filter, and frequencies.",
    \Phel::keyword("example"), "(seq \"hello\") ; => [\"h\" \"e\" \"l\" \"l\" \"o\"]",
    \Phel::keyword("see-also"), \Phel::vector(["count"]),
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 909,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 935,
      \Phel::keyword("column"), 10
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[coll]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "indexed-php-array?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\indexed_php_array?";

    public function __invoke($x) {
      $__phel_219_220 = (\Phel::getDefinition("phel\\core", "="))((\Phel::getDefinition("phel\\core", "type"))($x), \Phel::keyword("array", "php"));
      if (($__truthy = $__phel_219_220) !== null && $__truthy !== false) {
        $__phel_221_222 = empty($x);
        if (($__truthy = $__phel_221_222) !== null && $__truthy !== false) {
          return $__phel_221_222;
        } else {
          return (array_keys($x) === range(0, (count($x) - 1)));
        }

      } else {
        return $__phel_219_220;
      }

    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(indexed-php-array? x)\n```\n",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 937,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 943,
      \Phel::keyword("column"), 73
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[x]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "indexed?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\indexed?";

    public function __invoke($x) {
      $t_223 = (\Phel::getDefinition("phel\\core", "type"))($x);
      $__phel_224_225 = (\Phel::getDefinition("phel\\core", "="))($t_223, \Phel::keyword("list"));
      if (($__truthy = $__phel_224_225) !== null && $__truthy !== false) {
        return $__phel_224_225;
      } else {
        $__phel_226_227 = (\Phel::getDefinition("phel\\core", "="))($t_223, \Phel::keyword("vector"));
        if (($__truthy = $__phel_226_227) !== null && $__truthy !== false) {
          return $__phel_226_227;
        } else {
          return (\Phel::getDefinition("phel\\core", "indexed-php-array?"))($x);
        }

      }

    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(indexed? x)\n```\nReturns true if `x` is an indexed sequence, false otherwise.\n\n  Indexed sequences include lists, vectors, and indexed PHP arrays.",
    \Phel::keyword("example"), "(indexed? [1 2 3]) ; => true",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 945,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 955,
      \Phel::keyword("column"), 30
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[x]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "associative?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\associative?";

    public function __invoke($x) {
      $t_228 = (\Phel::getDefinition("phel\\core", "type"))($x);
      $__phel_229_230 = (\Phel::getDefinition("phel\\core", "="))($t_228, \Phel::keyword("hash-map"));
      if (($__truthy = $__phel_229_230) !== null && $__truthy !== false) {
        return $__phel_229_230;
      } else {
        $__phel_231_232 = (\Phel::getDefinition("phel\\core", "="))($t_228, \Phel::keyword("struct"));
        if (($__truthy = $__phel_231_232) !== null && $__truthy !== false) {
          return $__phel_231_232;
        } else {
          $__phel_233_234 = (\Phel::getDefinition("phel\\core", "="))($t_228, \Phel::keyword("array", "php"));
          if (($__truthy = $__phel_233_234) !== null && $__truthy !== false) {
            return (\Phel::getDefinition("phel\\core", "not"))((\Phel::getDefinition("phel\\core", "indexed-php-array?"))($x));
          } else {
            return $__phel_233_234;
          }

        }

      }

    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(associative? x)\n```\nReturns true if `x` is an associative data structure, false otherwise.\n\n  Associative data structures include hash maps, structs, and associative PHP arrays.",
    \Phel::keyword("example"), "(associative? {:a 1}) ; => true",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 957,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 967,
      \Phel::keyword("column"), 59
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[x]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "set?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\set?";

    public function __invoke($x) {
      return (\Phel::getDefinition("phel\\core", "="))((\Phel::getDefinition("phel\\core", "type"))($x), \Phel::keyword("set"));
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(set? x)\n```\nReturns true if `x` is a set, false otherwise.",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 969,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 972,
      \Phel::keyword("column"), 20
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[x]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "peek",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\peek";

    public function __invoke($coll) {
      if (($__truthy = (\Phel::getDefinition("phel\\core", "nil?"))($coll)) !== null && $__truthy !== false) {
        return null;
      } else {
        if (($__truthy = ($coll instanceof \Phel\Lang\Collections\LazySeq\LazySeqInterface)) !== null && $__truthy !== false) {
          $s_235 = $coll;
          $last_val_236 = null;
          while (true) {
            if (($__truthy = (\Phel::getDefinition("phel\\core", "nil?"))((\Phel::getDefinition("phel\\core", "seq"))($s_235))) !== null && $__truthy !== false) {
              return $last_val_236;
            } else {
              $__phel_237 = (\Phel::getDefinition("phel\\core", "next"))($s_235);
              $__phel_238 = (\Phel::getDefinition("phel\\core", "first"))($s_235);
              $s_235 = $__phel_237;
              $last_val_236 = $__phel_238;
              continue;

            }
            break;
          }
        } else {
          if (($__truthy = \Phel::keyword("else")) !== null && $__truthy !== false) {
            return (($coll)[(((\Phel::getDefinition("phel\\core", "count"))($coll) - 1))] ?? null);
          } else {
            return null;
          }

        }

      }

    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(peek coll)\n```\nReturns the last element of a sequence, or nil if empty or nil.\n  Works on vectors, PHP arrays, lists, and lazy sequences.",
    \Phel::keyword("example"), "(peek [1 2 3]) ; => 3",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 978,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 994,
      \Phel::keyword("column"), 44
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[coll]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "push",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\push";

    public function __invoke($coll, $x) {
      return (\Phel::getDefinition("phel\\core", "conj"))($coll, $x);
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(push coll x)\n```\nInserts `x` at the end of the sequence `coll`.",
    \Phel::keyword("deprecated"), "0.25.0",
    \Phel::keyword("superseded-by"), "conj",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 997,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1002,
      \Phel::keyword("column"), 16
    ),
    "min-arity", 2,
    "is-variadic", false,
    "arglists", "[coll x]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "pop",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\pop";

    public function __invoke(&$coll) {
      if (($__truthy = (\Phel::getDefinition("phel\\core", "php-array?"))($coll)) !== null && $__truthy !== false) {
        return array_pop($coll);
      } else {
        if (($__truthy = ($coll instanceof \Phel\Lang\PopInterface)) !== null && $__truthy !== false) {
          return (function() use($coll) {
            $target_241 = $coll;
            return $target_241->pop();
          })();
        } else {
          throw (new \InvalidArgumentException("Cannot pop"));
        }

      }

    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(pop coll)\n```\nRemoves the last element of the array `coll`. If the array is empty returns nil.",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1004,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1010,
      \Phel::keyword("column"), 61
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[coll]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "get",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\get";

    public function __invoke($ds, $k, ...$__phel_243) {
      $__phel_243 = \Phel::vector($__phel_243);
      $__phel_244_247 = $__phel_243;
      $__phel_245_248 = (\Phel::getDefinition("phel\\core", "first"))($__phel_244_247);
      $__phel_246_249 = (\Phel::getDefinition("phel\\core", "next"))($__phel_244_247);
      $opt_250 = $__phel_245_248;
      if (($__truthy = (function() use($ds,$k,$__phel_243,$__phel_244_247,$__phel_245_248,$__phel_246_249,$opt_250) {
        $__phel_251_252 = (\Phel::getDefinition("phel\\core", "set?"))($ds);
        if (($__truthy = $__phel_251_252) !== null && $__truthy !== false) {
          return $__phel_251_252;
        } else {
          $__phel_253_254 = ($ds instanceof \Phel\Lang\Collections\HashSet\PersistentHashSetInterface);
          if (($__truthy = $__phel_253_254) !== null && $__truthy !== false) {
            return $__phel_253_254;
          } else {
            return ($ds instanceof \Phel\Lang\Collections\HashSet\TransientHashSetInterface);
          }

        }

      })()) !== null && $__truthy !== false) {
        if (($__truthy = (function() use($ds,$k,$__phel_243,$__phel_244_247,$__phel_245_248,$__phel_246_249,$opt_250) {
          $target_261 = $ds;
          return $target_261->contains($k);
        })()) !== null && $__truthy !== false) {
          return $k;
        } else {
          return $opt_250;
        }

      } else {
        if (($__truthy = ($ds instanceof \Phel\Lang\Collections\LazySeq\LazySeqInterface)) !== null && $__truthy !== false) {
          $i_255 = $k;
          $s_256 = $ds;
          while (true) {
            if (($__truthy = (function() use($ds,$k,$__phel_243,$__phel_244_247,$__phel_245_248,$__phel_246_249,$opt_250,$i_255,$s_256) {
              $__phel_257_258 = (\Phel::getDefinition("phel\\core", "nil?"))($s_256);
              if (($__truthy = $__phel_257_258) !== null && $__truthy !== false) {
                return $__phel_257_258;
              } else {
                return ($i_255 < 0);
              }

            })()) !== null && $__truthy !== false) {
              return $opt_250;
            } else {
              if (($__truthy = ($i_255 === 0)) !== null && $__truthy !== false) {
                $res_259 = (\Phel::getDefinition("phel\\core", "first"))($s_256);
                if (($__truthy = (\Phel::getDefinition("phel\\core", "nil?"))($res_259)) !== null && $__truthy !== false) {
                  return $opt_250;
                } else {
                  return $res_259;
                }

              } else {
                $__phel_262 = ($i_255 - 1);
                $__phel_263 = (\Phel::getDefinition("phel\\core", "next"))($s_256);
                $i_255 = $__phel_262;
                $s_256 = $__phel_263;
                continue;

              }

            }
            break;
          }
        } else {
          if (($__truthy = \Phel::keyword("else")) !== null && $__truthy !== false) {
            $res_260 = (($ds)[($k)] ?? null);
            if (($__truthy = (\Phel::getDefinition("phel\\core", "nil?"))($res_260)) !== null && $__truthy !== false) {
              return $opt_250;
            } else {
              return $res_260;
            }

          } else {
            return null;
          }

        }

      }

    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(get ds k & [opt])\n```\nGets the value at key in a collection. Returns default if not found.",
    \Phel::keyword("example"), "(get {:a 1} :a) ; => 1",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1012,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1040,
      \Phel::keyword("column"), 15
    ),
    "min-arity", 2,
    "is-variadic", true,
    "arglists", "[ds k & __phel_243]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "assoc-pair",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\assoc_pair";

    public function __invoke($ds, $key, $value) {
      if (($__truthy = (\Phel::getDefinition("phel\\core", "php-array?"))($ds)) !== null && $__truthy !== false) {
        throw (new \InvalidArgumentException("Cannot call assoc on pure PHP arrays. Use (php/aset ds key value)"));
      } else {
        if (($__truthy = (function() use($ds,$key,$value) {
          $__phel_267_268 = (\Phel::getDefinition("phel\\core", "struct?"))($ds);
          if (($__truthy = $__phel_267_268) !== null && $__truthy !== false) {
            return $__phel_267_268;
          } else {
            $__phel_269_270 = (\Phel::getDefinition("phel\\core", "hash-map?"))($ds);
            if (($__truthy = $__phel_269_270) !== null && $__truthy !== false) {
              return $__phel_269_270;
            } else {
              return ($ds instanceof \Phel\Lang\Collections\Map\TransientMapInterface);
            }

          }

        })()) !== null && $__truthy !== false) {
          return (function() use($ds,$key,$value) {
            $target_273 = $ds;
            return $target_273->put($key, $value);
          })();
        } else {
          if (($__truthy = (function() use($ds,$key,$value) {
            $__phel_271_272 = (\Phel::getDefinition("phel\\core", "vector?"))($ds);
            if (($__truthy = $__phel_271_272) !== null && $__truthy !== false) {
              return $__phel_271_272;
            } else {
              return ($ds instanceof \Phel\Lang\Collections\Vector\TransientVectorInterface);
            }

          })()) !== null && $__truthy !== false) {
            return (function() use($ds,$key,$value) {
              $target_274 = $ds;
              return $target_274->update($key, $value);
            })();
          } else {
            ($ds)[($key)] = $value;
            return $ds;
          }

        }

      }

    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(assoc-pair ds key value)\n```\nAssociates a single key-value pair with a collection.",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1042,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1057,
      \Phel::keyword("column"), 11
    ),
    "min-arity", 3,
    "is-variadic", false,
    "arglists", "[ds key value]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "assoc",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\assoc";

    public function __invoke($ds, $key, $value, ...$more) {
      $more = \Phel::vector($more);
      if (($__truthy = (0 !== ((\Phel::getDefinition("phel\\core", "count"))($more) & 1))) !== null && $__truthy !== false) {
        throw (new \InvalidArgumentException((\Phel::getDefinition("phel\\core", "str"))("assoc expects an even number of extra arguments (key-value pairs), got ", (\Phel::getDefinition("phel\\core", "count"))($more))));
      } else {

      }

      $acc_277 = (\Phel::getDefinition("phel\\core", "assoc-pair"))($ds, $key, $value);
      $remaining_278 = $more;
      while (true) {
        if (($__truthy = (\Phel::getDefinition("phel\\core", "empty?"))($remaining_278)) !== null && $__truthy !== false) {
          return $acc_277;
        } else {
          $__phel_279 = (\Phel::getDefinition("phel\\core", "assoc-pair"))($acc_277, (\Phel::getDefinition("phel\\core", "first"))($remaining_278), (\Phel::getDefinition("phel\\core", "second"))($remaining_278));
          $__phel_280 = (\Phel::getDefinition("phel\\core", "rest"))((\Phel::getDefinition("phel\\core", "rest"))($remaining_278));
          $acc_277 = $__phel_279;
          $remaining_278 = $__phel_280;
          continue;

        }
        break;
      }
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(assoc ds key value & more)\n```\nAssociates one or more key-value pairs with a collection.\n  Additional key-value pairs beyond the first are applied in order.\n  Throws if an odd number of extra arguments is provided.",
    \Phel::keyword("example"), "(assoc {:a 1} :b 2) ; => {:a 1 :b 2}\n(assoc {:a 1} :b 2 :c 3) ; => {:a 1 :b 2 :c 3}",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1059,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1074,
      \Phel::keyword("column"), 40
    ),
    "min-arity", 3,
    "is-variadic", true,
    "arglists", "[ds key value & more]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "put",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\put";

    public function __invoke($ds, $key, $value) {
      return (\Phel::getDefinition("phel\\core", "assoc"))($ds, $key, $value);
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(put ds key value)\n```\nPuts `value` mapped to `key` on the datastructure `ds`. Returns `ds`.",
    \Phel::keyword("deprecated"), "0.25.0",
    \Phel::keyword("superseded-by"), "assoc",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1076,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1081,
      \Phel::keyword("column"), 23
    ),
    "min-arity", 3,
    "is-variadic", false,
    "arglists", "[ds key value]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "dissoc",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\dissoc";

    public function __invoke($ds, $key) {
      if (($__truthy = (\Phel::getDefinition("phel\\core", "php-array?"))($ds)) !== null && $__truthy !== false) {
        throw (new \InvalidArgumentException("Cannot call dissoc on pure PHP arrays. Use (php/aunset ds key)"));
      } else {
        if (($__truthy = (function() use($ds,$key) {
          $__phel_283_284 = (\Phel::getDefinition("phel\\core", "hash-map?"))($ds);
          if (($__truthy = $__phel_283_284) !== null && $__truthy !== false) {
            return $__phel_283_284;
          } else {
            return ($ds instanceof \Phel\Lang\Collections\Map\TransientMapInterface);
          }

        })()) !== null && $__truthy !== false) {
          return (function() use($ds,$key) {
            $target_288 = $ds;
            return $target_288->remove($key);
          })();
        } else {
          if (($__truthy = (function() use($ds,$key) {
            $__phel_285_286 = (\Phel::getDefinition("phel\\core", "set?"))($ds);
            if (($__truthy = $__phel_285_286) !== null && $__truthy !== false) {
              return $__phel_285_286;
            } else {
              return ($ds instanceof \Phel\Lang\Collections\HashSet\TransientHashSetInterface);
            }

          })()) !== null && $__truthy !== false) {
            return (function() use($ds,$key) {
              $target_289 = $ds;
              return $target_289->remove($key);
            })();
          } else {
            $x_287 = $ds;
            unset(($x_287)[($key)]);
            return $x_287;
          }

        }

      }

    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(dissoc ds key)\n```\nDissociates `key` from the datastructure `ds`. Returns `ds` without `key`.",
    \Phel::keyword("example"), "(dissoc {:a 1 :b 2} :b) ; => {:a 1}",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1083,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1099,
      \Phel::keyword("column"), 10
    ),
    "min-arity", 2,
    "is-variadic", false,
    "arglists", "[ds key]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "unset",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\unset";

    public function __invoke($ds, $key) {
      return (\Phel::getDefinition("phel\\core", "dissoc"))($ds, $key);
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(unset ds key)\n```\nReturns `ds` without `key`.",
    \Phel::keyword("deprecated"), "0.25.0",
    \Phel::keyword("superseded-by"), "dissoc",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1101,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1106,
      \Phel::keyword("column"), 18
    ),
    "min-arity", 2,
    "is-variadic", false,
    "arglists", "[ds key]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "var",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\var";

    public function __invoke($value) {
      return (\Phel::variable($value));
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(var value)\n```\nCreates a new variable with the given value.\n\n  Variables provide a way to manage mutable state that can be updated with `set!` and `swap!`. Each variable contains a single value. To create a variable use the var function.",
    \Phel::keyword("example"), "(def counter (var 0))",
    \Phel::keyword("see-also"), \Phel::vector(["set!", "deref", "swap!"]),
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1112,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1119,
      \Phel::keyword("column"), 33
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[value]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "var?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\var?";

    public function __invoke($x) {
      return ($x instanceof \Phel\Lang\Variable);
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(var? x)\n```\nChecks if the given value is a variable.",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1121,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1124,
      \Phel::keyword("column"), 30
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[x]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "set!",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\set!";

    public function __invoke($variable, $value) {
      return (function() use($variable,$value) {
        $target_292 = $variable;
        return $target_292->set($value);
      })();
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(set! variable value)\n```\nSets a new value to the given variable.",
    \Phel::keyword("example"), "(def x (var 10))",
    \Phel::keyword("see-also"), \Phel::vector(["var", "deref", "swap!"]),
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1126,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1131,
      \Phel::keyword("column"), 32
    ),
    "min-arity", 2,
    "is-variadic", false,
    "arglists", "[variable value]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "deref",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\deref";

    public function __invoke($variable) {
      return (function() use($variable) {
        $target_294 = $variable;
        return $target_294->deref();
      })();
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(deref variable)\n```\nReturns the current value inside the variable.",
    \Phel::keyword("example"), "(def x (var 42))",
    \Phel::keyword("see-also"), \Phel::vector(["var", "set!", "swap!"]),
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1133,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1138,
      \Phel::keyword("column"), 28
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[variable]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "swap!",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\swap!";

    public function __invoke($variable, $f, ...$args) {
      $args = \Phel::vector($args);
      $current_296 = (\Phel::getDefinition("phel\\core", "deref"))($variable);
      $next_297 = ($f)($current_296, ...(($args) ?? []));
      (\Phel::getDefinition("phel\\core", "set!"))($variable, $next_297);
      return $next_297;
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(swap! variable f & args)\n```\nAtomically swaps the value of the variable to `(apply f current-value args)`.\n\n  Returns the new value after the swap.",
    \Phel::keyword("example"), "(def counter (var 0))",
    \Phel::keyword("see-also"), \Phel::vector(["var", "set!", "deref"]),
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1140,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1150,
      \Phel::keyword("column"), 10
    ),
    "min-arity", 2,
    "is-variadic", true,
    "arglists", "[variable f & args]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "add-watch",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\add_watch";

    public function __invoke($variable, $key, $f) {
      (function() use($variable,$key,$f) {
        $target_298 = $variable;
        return $target_298->addWatch((\Phel::getDefinition("phel\\core", "name"))($key), $f);
      })();
      return $variable;
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(add-watch variable key f)\n```\nAdds a watch function to a variable. The watch fn is called when the variable\n  changes with four arguments: key, ref, old-value, new-value.",
    \Phel::keyword("example"), "(add-watch my-var :logger (fn [key ref old new] (println old \"->\" new)))",
    \Phel::keyword("see-also"), \Phel::vector(["remove-watch", "var", "swap!"]),
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1152,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1159,
      \Phel::keyword("column"), 11
    ),
    "min-arity", 3,
    "is-variadic", false,
    "arglists", "[variable key f]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "remove-watch",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\remove_watch";

    public function __invoke($variable, $key) {
      (function() use($variable,$key) {
        $target_300 = $variable;
        return $target_300->removeWatch((\Phel::getDefinition("phel\\core", "name"))($key));
      })();
      return $variable;
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(remove-watch variable key)\n```\nRemoves a watch function from a variable by key.",
    \Phel::keyword("see-also"), \Phel::vector(["add-watch"]),
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1161,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1166,
      \Phel::keyword("column"), 11
    ),
    "min-arity", 2,
    "is-variadic", false,
    "arglists", "[variable key]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "set-validator!",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\set_validator!";

    public function __invoke($variable, $f) {
      (function() use($variable,$f) {
        $target_302 = $variable;
        return $target_302->setValidator($f);
      })();
      return $variable;
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(set-validator! variable f)\n```\nSets a validator function on a variable. The validator is called before any\n  state change with the proposed new value. If it returns a falsy value, an\n  exception is thrown and the state is not changed. Pass nil to remove.",
    \Phel::keyword("example"), "(set-validator! my-var pos?)",
    \Phel::keyword("see-also"), \Phel::vector(["get-validator", "var"]),
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1168,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1176,
      \Phel::keyword("column"), 11
    ),
    "min-arity", 2,
    "is-variadic", false,
    "arglists", "[variable f]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "get-validator",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\get_validator";

    public function __invoke($variable) {
      return (function() use($variable) {
        $target_304 = $variable;
        return $target_304->getValidator();
      })();
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(get-validator variable)\n```\nReturns the validator function of a variable, or nil.",
    \Phel::keyword("see-also"), \Phel::vector(["set-validator!"]),
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1178,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1182,
      \Phel::keyword("column"), 35
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[variable]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "lazy-seq-from-generator",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\lazy_seq_from_generator";

    public function __invoke($generator) {
      return (\Phel\Lang\Collections\LazySeq\ChunkedSeq::fromGenerator((new \Phel\Lang\Hasher()), (new \Phel\Lang\Equalizer()), $generator));
    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(lazy-seq-from-generator generator)\n```\nWraps a PHP Generator in a ChunkedSeq for efficient lazy evaluation.\n  ChunkedSeq realizes elements in batches for better performance.",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1188,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1195,
      \Phel::keyword("column"), 34
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[generator]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "range",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\range";

    public function __invoke($a, ...$rest) {
      $rest = \Phel::vector($rest);
      $__phel_306_307 = (\Phel::getDefinition("phel\\core", "count"))($rest);
      if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_306_307, 0)) !== null && $__truthy !== false) {
        return (\Phel::getDefinition("phel\\core", "lazy-seq-from-generator"))((\Phel\Lang\Seq::range(0, $a, 1)));
      } else {
        $__phel_308_309 = $__phel_306_307;
        if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_308_309, 1)) !== null && $__truthy !== false) {
          return (\Phel::getDefinition("phel\\core", "lazy-seq-from-generator"))((\Phel\Lang\Seq::range($a, (\Phel::getDefinition("phel\\core", "get"))($rest, 0), 1)));
        } else {
          $__phel_310_311 = $__phel_308_309;
          if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_310_311, 2)) !== null && $__truthy !== false) {
            return (\Phel::getDefinition("phel\\core", "lazy-seq-from-generator"))((\Phel\Lang\Seq::range($a, (\Phel::getDefinition("phel\\core", "get"))($rest, 0), (\Phel::getDefinition("phel\\core", "get"))($rest, 1))));
          } else {
            throw (new \InvalidArgumentException("Range function expects one, two or three arguments"));
          }

        }

      }

    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(range a & rest)\n```\nCreates a lazy sequence of numbers from start to end (exclusive).",
    \Phel::keyword("example"), "(range 5) ; => (0 1 2 3 4)",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1197,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1205,
      \Phel::keyword("column"), 101
    ),
    "min-arity", 1,
    "is-variadic", true,
    "arglists", "[a & rest]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "for-options",
  (\Phel::getDefinition("phel\\core", "hash-set"))(\Phel::keyword("reduce")),
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1207,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1207,
      \Phel::keyword("column"), 37
    )
  )
);
\Phel::addDefinition(
  "phel\\core",
  "for-builder-options",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\for_builder_options";

    public function __invoke($head, $i, $initial_options) {
      if (($__truthy = ((\Phel::getDefinition("phel\\core", "count"))($head) <= $i)) !== null && $__truthy !== false) {
        return $initial_options;
      } else {
        $binding_312 = (($head)[($i)] ?? null);
        $verb_313 = (($head)[(($i + 1))] ?? null);
        if (($__truthy = (\Phel::getDefinition("phel\\core", "keyword?"))($binding_312)) !== null && $__truthy !== false) {
          $__phel_314_315 = $binding_312;
          if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_314_315, \Phel::keyword("reduce"))) !== null && $__truthy !== false) {
            return (\Phel::getDefinition("phel\\core", "for-builder-options"))($head, ($i + 2), (\Phel::getDefinition("phel\\core", "assoc"))($initial_options, \Phel::keyword("reduce"), $verb_313));
          } else {
            return (\Phel::getDefinition("phel\\core", "for-builder-options"))($head, ($i + 2), $initial_options);
          }

        } else {
          return (\Phel::getDefinition("phel\\core", "for-builder-options"))($head, ($i + 3), $initial_options);
        }

      }

    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(for-builder-options head i initial-options)\n```\n",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1209,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1218,
      \Phel::keyword("column"), 66
    ),
    "min-arity", 3,
    "is-variadic", false,
    "arglists", "[head i initial-options]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "for-builder",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\for_builder";

    public function __invoke($body, $head, $i) {
      if (($__truthy = ((\Phel::getDefinition("phel\\core", "count"))($head) <= $i)) !== null && $__truthy !== false) {
        return $body;
      } else {
        $binding_316 = (($head)[($i)] ?? null);
        $verb_317 = (($head)[(($i + 1))] ?? null);
        if (($__truthy = (function() use($body,$head,$i,$binding_316,$verb_317) {
          $__phel_318_319 = (\Phel::getDefinition("phel\\core", "keyword?"))($binding_316);
          if (($__truthy = $__phel_318_319) !== null && $__truthy !== false) {
            return (\Phel::getDefinition("phel\\core", "contains?"))(\Phel::getDefinition("phel\\core", "for-options"), $binding_316);
          } else {
            return $__phel_318_319;
          }

        })()) !== null && $__truthy !== false) {
          return (\Phel::getDefinition("phel\\core", "for-builder"))($body, $head, ($i + 2));
        } else {
          if (($__truthy = (\Phel::getDefinition("phel\\core", "keyword?"))($binding_316)) !== null && $__truthy !== false) {
            $rest_320 = (\Phel::getDefinition("phel\\core", "for-builder"))($body, $head, ($i + 2));
            $__phel_321_322 = $binding_316;
            if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_321_322, \Phel::keyword("while"))) !== null && $__truthy !== false) {
              return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("if"))), (\Phel::getDefinition("phel\\core", "list"))($verb_317), (\Phel::getDefinition("phel\\core", "list"))($rest_320), (\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("php/break"))))) ?? []));
            } else {
              $__phel_323_324 = $__phel_321_322;
              if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_323_324, \Phel::keyword("let"))) !== null && $__truthy !== false) {
                return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("let"))), (\Phel::getDefinition("phel\\core", "list"))($verb_317), (\Phel::getDefinition("phel\\core", "list"))($rest_320))) ?? []));
              } else {
                $__phel_325_326 = $__phel_323_324;
                if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_325_326, \Phel::keyword("when"))) !== null && $__truthy !== false) {
                  return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/when"))), (\Phel::getDefinition("phel\\core", "list"))($verb_317), (\Phel::getDefinition("phel\\core", "list"))($rest_320))) ?? []));
                } else {
                  throw (new \InvalidArgumentException((\Phel::getDefinition("phel\\core", "str"))("This modifier is not supported in for loop: ", $verb_317)));
                }

              }

            }

          } else {
            $object_327 = (($head)[(($i + 2))] ?? null);
            $rest_328 = (\Phel::getDefinition("phel\\core", "for-builder"))($body, $head, ($i + 3));
            $value_sym_329 = (\Phel::getDefinition("phel\\core", "gensym"))();
            $__phel_330_331 = $verb_317;
            if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_330_331, \Phel::keyword("range"))) !== null && $__truthy !== false) {
              return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("foreach"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "vector"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))($binding_316), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("apply"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/range"))), (\Phel::getDefinition("phel\\core", "list"))($object_327))) ?? []))))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))($rest_328))) ?? []));
            } else {
              $__phel_332_333 = $__phel_330_331;
              if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_332_333, \Phel::keyword("in"))) !== null && $__truthy !== false) {
                return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("foreach"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "vector"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))($value_sym_329), (\Phel::getDefinition("phel\\core", "list"))($object_327))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("let"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "vector"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))($binding_316), (\Phel::getDefinition("phel\\core", "list"))($value_sym_329))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))($rest_328))) ?? []))))) ?? []));
              } else {
                $__phel_334_335 = $__phel_332_333;
                if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_334_335, \Phel::keyword("keys"))) !== null && $__truthy !== false) {
                  $key_sym_336 = (\Phel::getDefinition("phel\\core", "gensym"))();
                  return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("foreach"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "vector"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))($key_sym_336), (\Phel::getDefinition("phel\\core", "list"))($value_sym_329), (\Phel::getDefinition("phel\\core", "list"))($object_327))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("let"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "vector"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))($binding_316), (\Phel::getDefinition("phel\\core", "list"))($key_sym_336))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))($rest_328))) ?? []))))) ?? []));
                } else {
                  $__phel_337_338 = $__phel_334_335;
                  if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_337_338, \Phel::keyword("pairs"))) !== null && $__truthy !== false) {
                    $key_sym_339 = (\Phel::getDefinition("phel\\core", "gensym"))();
                    return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("foreach"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "vector"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))($key_sym_339), (\Phel::getDefinition("phel\\core", "list"))($value_sym_329), (\Phel::getDefinition("phel\\core", "list"))($object_327))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("let"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "vector"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))($binding_316), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "vector"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))($key_sym_339), (\Phel::getDefinition("phel\\core", "list"))($value_sym_329))) ?? []))))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))($rest_328))) ?? []))))) ?? []));
                  } else {
                    throw (new \InvalidArgumentException((\Phel::getDefinition("phel\\core", "str"))("This verb is not supported in for loop ", $verb_317)));
                  }

                }

              }

            }

          }

        }

      }

    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(for-builder body head i)\n```\n",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1220,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1254,
      \Phel::keyword("column"), 113
    ),
    "min-arity", 3,
    "is-variadic", false,
    "arglists", "[body head i]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "for",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\for";

    public function __invoke($head, ...$body) {
      $body = \Phel::vector($body);
      $res_sym_340 = (\Phel::getDefinition("phel\\core", "gensym"))("res__");
      $acc_sym_341 = (\Phel::getDefinition("phel\\core", "gensym"))("acc__");
      $options_342 = (\Phel::getDefinition("phel\\core", "for-builder-options"))($head, 0, \Phel::map());
      $swap_body_343 = (($__truthy = (\Phel::keyword("reduce"))($options_342)) !== null && $__truthy !== false ? (function() use($head,$body,$res_sym_340,$acc_sym_341,$options_342) {
        $__phel_344_350 = (\Phel::keyword("reduce"))($options_342);
        $__phel_345_351 = (\Phel::getDefinition("phel\\core", "first"))($__phel_344_350);
        $__phel_346_352 = (\Phel::getDefinition("phel\\core", "next"))($__phel_344_350);
        $sym_353 = $__phel_345_351;
        $__phel_347_354 = (\Phel::getDefinition("phel\\core", "first"))($__phel_346_352);
        $__phel_348_355 = (\Phel::getDefinition("phel\\core", "next"))($__phel_346_352);
        $__phel_349_356 = $__phel_347_354;
        return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/swap!"))), (\Phel::getDefinition("phel\\core", "list"))($res_sym_340), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("fn"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "vector"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))($sym_353))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("do"))), $body)) ?? []))))) ?? []))))) ?? []));
      })() : (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/swap!"))), (\Phel::getDefinition("phel\\core", "list"))($res_sym_340), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("fn"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "vector"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))($acc_sym_341))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/conj"))), (\Phel::getDefinition("phel\\core", "list"))($acc_sym_341), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("do"))), $body)) ?? []))))) ?? []))))) ?? []))))) ?? [])));
      $init_357 = (($__truthy = (\Phel::keyword("reduce"))($options_342)) !== null && $__truthy !== false ? (\Phel::getDefinition("phel\\core", "second"))((\Phel::keyword("reduce"))($options_342)) : \Phel::vector([]));
      $loop_body_358 = (\Phel::getDefinition("phel\\core", "for-builder"))($swap_body_343, $head, 0);
      return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("let"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "vector"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))($res_sym_340), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/var"))), (\Phel::getDefinition("phel\\core", "list"))($init_357))) ?? []))))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))($loop_body_358), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/deref"))), (\Phel::getDefinition("phel\\core", "list"))($res_sym_340))) ?? []))))) ?? []));
    }
  },
  \Phel::map(
    \Phel::keyword("macro"), true,
    \Phel::keyword("doc"), "```phel\n(for head & body)\n```\nList comprehension. The head of the loop is a vector that contains a\n  sequence of bindings modifiers and options. A binding is a sequence of three\n  values `binding :verb expr`. Where `binding` is a binding as\n  in let and `:verb` is one of the following keywords:\n\n  * `:range` loop over a range by using the range function.\n  * `:in` loops over all values of a collection (including strings).\n  * `:keys` loops over all keys/indexes of a collection.\n  * `:pairs` loops over all key-value pairs of a collection.\n\n  After each loop binding, additional modifiers can be applied. Modifiers\n  have the form `:modifier argument`. The following modifiers are supported:\n\n  * `:while` breaks the loop if the expression is falsy.\n  * `:let` defines additional bindings.\n  * `:when` only evaluates the loop body if the condition is true.\n\n  Finally, additional options can be set:\n\n  * `:reduce [accumulator initial-value]` Instead of returning a list,\n     it reduces the values into `accumulator`. Initially `accumulator`\n     is bound to `initial-value`.",
    \Phel::keyword("example"), "(for [x :in [1 2 3]] (* x 2)) ; => [2 4 6]",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1256,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1294,
      \Phel::keyword("column"), 26
    ),
    "min-arity", 1,
    "is-variadic", true,
    "arglists", "[head & body]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "dofor",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\dofor";

    public function __invoke($head, ...$body) {
      $body = \Phel::vector($body);
      return (\Phel::getDefinition("phel\\core", "for-builder"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("do"))), $body)) ?? [])), $head, 0);
    }
  },
  \Phel::map(
    \Phel::keyword("macro"), true,
    \Phel::keyword("doc"), "```phel\n(dofor head & body)\n```\nRepeatedly executes body for side effects with bindings and modifiers as\n  provided by for. Returns nil.",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1296,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1300,
      \Phel::keyword("column"), 36
    ),
    "min-arity", 1,
    "is-variadic", true,
    "arglists", "[head & body]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "doseq",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\doseq";

    public function __invoke($seq_exprs, ...$body) {
      $body = \Phel::vector($body);
      return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/dofor"))), (\Phel::getDefinition("phel\\core", "list"))($seq_exprs), $body)) ?? []));
    }
  },
  \Phel::map(
    \Phel::keyword("macro"), true,
    \Phel::keyword("doc"), "```phel\n(doseq seq-exprs & body)\n```\nAlias for `dofor`.",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1302,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1305,
      \Phel::keyword("column"), 29
    ),
    "min-arity", 1,
    "is-variadic", true,
    "arglists", "[seq-exprs & body]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "identity",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\identity";

    public function __invoke($x) {
      return $x;
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(identity x)\n```\nReturns its argument.",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1307,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1310,
      \Phel::keyword("column"), 4
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[x]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "xf-step",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\xf_step";

    public function __invoke($rf, $step_fn) {
      return new class($rf, $step_fn) extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\core\\xf_step";
        private $rf;
        private $step_fn;

        public function __construct($rf, $step_fn) {
          $this->rf = $rf;
          $this->step_fn = $step_fn;
        }

        public function __invoke(...$args) {
          $rf = $this->rf;
          $step_fn = $this->step_fn;
          $args = \Phel::vector($args);
          $__phel_359_360 = (\Phel::getDefinition("phel\\core", "count"))($args);
          if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_359_360, 0)) !== null && $__truthy !== false) {
            return ($rf)();
          } else {
            $__phel_361_362 = $__phel_359_360;
            if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_361_362, 1)) !== null && $__truthy !== false) {
              return ($rf)((\Phel::getDefinition("phel\\core", "first"))($args));
            } else {
              $__phel_363_364 = $__phel_361_362;
              if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_363_364, 2)) !== null && $__truthy !== false) {
                return ($step_fn)((\Phel::getDefinition("phel\\core", "first"))($args), (\Phel::getDefinition("phel\\core", "second"))($args));
              } else {
                return null;
              }

            }

          }

        }
      };
    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(xf-step rf step-fn)\n```\nCreates a transducer reducing function that delegates 0/1 arity to rf\n  and calls step-fn for the 2-arity step. Eliminates repeated boilerplate.",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1312,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1320,
      \Phel::keyword("column"), 47
    ),
    "min-arity", 2,
    "is-variadic", false,
    "arglists", "[rf step-fn]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "map",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\map";

    public function __invoke($f, ...$colls) {
      $colls = \Phel::vector($colls);
      $__phel_365_366 = (\Phel::getDefinition("phel\\core", "count"))($colls);
      if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_365_366, 0)) !== null && $__truthy !== false) {
        return new class($f, $colls, $__phel_365_366) extends \Phel\Lang\AbstractFn {
          public const BOUND_TO = "phel\\core\\map";
          private $f;
          private $colls;
          private $__phel_365_366;

          public function __construct($f, $colls, $__phel_365_366) {
            $this->f = $f;
            $this->colls = $colls;
            $this->__phel_365_366 = $__phel_365_366;
          }

          public function __invoke($rf) {
            $f = $this->f;
            $colls = $this->colls;
            $__phel_365_366 = $this->__phel_365_366;
            return (\Phel::getDefinition("phel\\core", "xf-step"))($rf, new class($f, $colls, $__phel_365_366, $rf) extends \Phel\Lang\AbstractFn {
              public const BOUND_TO = "phel\\core\\map";
              private $f;
              private $colls;
              private $__phel_365_366;
              private $rf;

              public function __construct($f, $colls, $__phel_365_366, $rf) {
                $this->f = $f;
                $this->colls = $colls;
                $this->__phel_365_366 = $__phel_365_366;
                $this->rf = $rf;
              }

              public function __invoke($result, $input) {
                $f = $this->f;
                $colls = $this->colls;
                $__phel_365_366 = $this->__phel_365_366;
                $rf = $this->rf;
                return ($rf)($result, ($f)($input));
              }
            });
          }
        };
      } else {
        $__phel_367_368 = $__phel_365_366;
        if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_367_368, 1)) !== null && $__truthy !== false) {
          $coll_369 = (\Phel::getDefinition("phel\\core", "first"))($colls);
          if (($__truthy = (\Phel::getDefinition("phel\\core", "empty?"))($coll_369)) !== null && $__truthy !== false) {
            return \Phel::vector([]);
          } else {
            return (\Phel::getDefinition("phel\\core", "with-meta"))($coll_369, (\Phel::getDefinition("phel\\core", "lazy-seq-from-generator"))((\Phel\Lang\Seq::map($f, $coll_369))));
          }

        } else {
          $result_370 = (\Phel::getDefinition("phel\\core", "lazy-seq-from-generator"))(call_user_func_array(array("\\Phel\\Lang\\Seq", "mapMulti"), array_merge(array($f), array(...(($colls) ?? [])))));
          if (($__truthy = (null === $result_370)) !== null && $__truthy !== false) {
            return \Phel::vector([]);
          } else {
            return (\Phel::getDefinition("phel\\core", "with-meta"))((\Phel::getDefinition("phel\\core", "first"))($colls), $result_370);
          }

        }

      }

    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(map f & colls)\n```\nReturns a lazy sequence of the result of applying `f` to all of the first items in each coll,\n   followed by applying `f` to all the second items in each coll until anyone of the colls is exhausted.\n\n  When given a single collection, applies the function to each element.\n  With multiple collections, applies the function to corresponding elements from each collection,\n  stopping when the shortest collection is exhausted.",
    \Phel::keyword("example"), "(map inc [1 2 3]) ; => (2 3 4)",
    \Phel::keyword("see-also"), \Phel::vector(["filter", "reduce", "map-indexed", "mapcat", "transduce"]),
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1326,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1349,
      \Phel::keyword("column"), 44
    ),
    "min-arity", 1,
    "is-variadic", true,
    "arglists", "[f & colls]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "reduced",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\reduced";

    public function __invoke($x) {
      return (new \Phel\Lang\Reduced($x));
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(reduced x)\n```\nWraps `x` in a Reduced, signaling early termination from reduce/transduce.",
    \Phel::keyword("see-also"), \Phel::vector(["reduced?", "unreduced"]),
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1355,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1359,
      \Phel::keyword("column"), 22
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[x]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "reduced?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\reduced?";

    public function __invoke($x) {
      return ($x instanceof \Phel\Lang\Reduced);
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(reduced? x)\n```\nReturns true if `x` is a Reduced value.",
    \Phel::keyword("see-also"), \Phel::vector(["reduced", "unreduced"]),
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1361,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1365,
      \Phel::keyword("column"), 29
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[x]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "unreduced",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\unreduced";

    public function __invoke($x) {
      if (($__truthy = (\Phel::getDefinition("phel\\core", "reduced?"))($x)) !== null && $__truthy !== false) {
        return (function() use($x) {
          $target_371 = $x;
          return $target_371->deref();
        })();
      } else {
        return $x;
      }

    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(unreduced x)\n```\nIf `x` is Reduced, returns the unwrapped value; otherwise returns `x`.",
    \Phel::keyword("see-also"), \Phel::vector(["reduced", "reduced?"]),
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1367,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1373,
      \Phel::keyword("column"), 7
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[x]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "ensure-reduced",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\ensure_reduced";

    public function __invoke($x) {
      if (($__truthy = (\Phel::getDefinition("phel\\core", "reduced?"))($x)) !== null && $__truthy !== false) {
        return $x;
      } else {
        return (\Phel::getDefinition("phel\\core", "reduced"))($x);
      }

    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(ensure-reduced x)\n```\nWraps `x` in Reduced if it is not already reduced.",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1375,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1378,
      \Phel::keyword("column"), 34
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[x]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "preserving-reduced",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\preserving_reduced";

    public function __invoke($rf) {
      return new class($rf) extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\core\\preserving_reduced";
        private $rf;

        public function __construct($rf) {
          $this->rf = $rf;
        }

        public function __invoke($a, $b) {
          $rf = $this->rf;
          $ret_373 = ($rf)($a, $b);
          if (($__truthy = (\Phel::getDefinition("phel\\core", "reduced?"))($ret_373)) !== null && $__truthy !== false) {
            return (\Phel::getDefinition("phel\\core", "reduced"))($ret_373);
          } else {
            return $ret_373;
          }

        }
      };
    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(preserving-reduced rf)\n```\nWraps a reducing function so Reduced propagates as double-wrapped.",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1380,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1385,
      \Phel::keyword("column"), 46
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[rf]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "reduce",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\reduce";

    public function __invoke($f, ...$args) {
      $args = \Phel::vector($args);
      $__phel_374_375 = (\Phel::getDefinition("phel\\core", "count"))($args);
      if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_374_375, 1)) !== null && $__truthy !== false) {
        $coll_376 = (\Phel::getDefinition("phel\\core", "first"))($args);
        if (($__truthy = (\Phel::getDefinition("phel\\core", "empty?"))($coll_376)) !== null && $__truthy !== false) {
          return ($f)();
        } else {
          return (\Phel::getDefinition("phel\\core", "reduce"))($f, (\Phel::getDefinition("phel\\core", "first"))($coll_376), (\Phel::getDefinition("phel\\core", "next"))($coll_376));
        }

      } else {
        $__phel_377_378 = $__phel_374_375;
        if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_377_378, 2)) !== null && $__truthy !== false) {
          $init_379 = (\Phel::getDefinition("phel\\core", "first"))($args);
          $coll_380 = (\Phel::getDefinition("phel\\core", "second"))($args);
          $acc_381 = (new \Phel\Lang\Volatile($init_379));
          $done_382 = (new \Phel\Lang\Volatile(false));
          foreach (\Phel\Lang\Seq::toIterable($coll_380) as $__phel_383) {
            $x_384 = $__phel_383;
            if (($__truthy = (\Phel::getDefinition("phel\\core", "not"))((function() use($f,$args,$__phel_374_375,$__phel_377_378,$init_379,$coll_380,$acc_381,$done_382,$__phel_383,$x_384) {
              $target_386 = $done_382;
              return $target_386->deref();
            })())) !== null && $__truthy !== false) {
              $result_385 = ($f)((function() use($f,$args,$__phel_374_375,$__phel_377_378,$init_379,$coll_380,$acc_381,$done_382,$__phel_383,$x_384) {
                $target_387 = $acc_381;
                return $target_387->deref();
              })(), $x_384);
              if (($__truthy = (\Phel::getDefinition("phel\\core", "reduced?"))($result_385)) !== null && $__truthy !== false) {
                (function() use($f,$args,$__phel_374_375,$__phel_377_378,$init_379,$coll_380,$acc_381,$done_382,$__phel_383,$x_384,$result_385) {
                  $target_388 = $acc_381;
                  return $target_388->reset((function() use($f,$args,$__phel_374_375,$__phel_377_378,$init_379,$coll_380,$acc_381,$done_382,$__phel_383,$x_384,$result_385) {
                    $target_389 = $result_385;
                    return $target_389->deref();
                  })());
                })();
                (function() use($f,$args,$__phel_374_375,$__phel_377_378,$init_379,$coll_380,$acc_381,$done_382,$__phel_383,$x_384,$result_385) {
                  $target_390 = $done_382;
                  return $target_390->reset(true);
                })();
              } else {
                (function() use($f,$args,$__phel_374_375,$__phel_377_378,$init_379,$coll_380,$acc_381,$done_382,$__phel_383,$x_384,$result_385) {
                  $target_391 = $acc_381;
                  return $target_391->reset($result_385);
                })();
              }

            } else {
              break;
            }

          }
          return (function() use($f,$args,$__phel_374_375,$__phel_377_378,$init_379,$coll_380,$acc_381,$done_382) {
            $target_392 = $acc_381;
            return $target_392->deref();
          })();
        } else {
          throw (new \InvalidArgumentException("expected 2 or 3 arguments in reduce"));
        }

      }

    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(reduce f & args)\n```\nReduces collection to a single value by repeatedly applying function to accumulator and elements.\n  Respects early termination via `(reduced val)`.",
    \Phel::keyword("example"), "(reduce + [1 2 3 4]) ; => 10",
    \Phel::keyword("see-also"), \Phel::vector(["transduce", "into", "reduced"]),
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1387,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1409,
      \Phel::keyword("column"), 86
    ),
    "min-arity", 1,
    "is-variadic", true,
    "arglists", "[f & args]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "completing",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\completing";

    public function __invoke($f, ...$args) {
      $args = \Phel::vector($args);
      $cf_400 = (($__truthy = (\Phel::getDefinition("phel\\core", "empty?"))($args)) !== null && $__truthy !== false ? \Phel::getDefinition("phel\\core", "identity") : (\Phel::getDefinition("phel\\core", "first"))($args));
      return new class($f, $args, $cf_400) extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\core\\completing";
        private $f;
        private $args;
        private $cf_400;

        public function __construct($f, $args, $cf_400) {
          $this->f = $f;
          $this->args = $args;
          $this->cf_400 = $cf_400;
        }

        public function __invoke(...$cargs) {
          $f = $this->f;
          $args = $this->args;
          $cf_400 = $this->cf_400;
          $cargs = \Phel::vector($cargs);
          $__phel_401_402 = (\Phel::getDefinition("phel\\core", "count"))($cargs);
          if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_401_402, 0)) !== null && $__truthy !== false) {
            return ($f)();
          } else {
            $__phel_403_404 = $__phel_401_402;
            if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_403_404, 1)) !== null && $__truthy !== false) {
              return ($cf_400)((\Phel::getDefinition("phel\\core", "first"))($cargs));
            } else {
              $__phel_405_406 = $__phel_403_404;
              if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_405_406, 2)) !== null && $__truthy !== false) {
                return ($f)((\Phel::getDefinition("phel\\core", "first"))($cargs), (\Phel::getDefinition("phel\\core", "second"))($cargs));
              } else {
                return null;
              }

            }

          }

        }
      };
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(completing f & args)\n```\nTakes a reducing function `f` of 2 args and returns a fn suitable for transduce\n  by adding a 1-arity (completion) that calls `cf` (default: identity).",
    \Phel::keyword("see-also"), \Phel::vector(["transduce"]),
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1411,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1421,
      \Phel::keyword("column"), 46
    ),
    "min-arity", 1,
    "is-variadic", true,
    "arglists", "[f & args]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "transduce",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\transduce";

    public function __invoke($xform, $f, ...$args) {
      $args = \Phel::vector($args);
      $__phel_407_408 = (\Phel::getDefinition("phel\\core", "count"))($args);
      if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_407_408, 1)) !== null && $__truthy !== false) {
        $coll_409 = (\Phel::getDefinition("phel\\core", "first"))($args);
        return (\Phel::getDefinition("phel\\core", "transduce"))($xform, $f, ($f)(), $coll_409);
      } else {
        $__phel_410_411 = $__phel_407_408;
        if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_410_411, 2)) !== null && $__truthy !== false) {
          $init_412 = (\Phel::getDefinition("phel\\core", "first"))($args);
          $coll_413 = (\Phel::getDefinition("phel\\core", "second"))($args);
          $f_414 = ($xform)((\Phel::getDefinition("phel\\core", "completing"))($f));
          $ret_415 = (\Phel::getDefinition("phel\\core", "reduce"))($f_414, $init_412, $coll_413);
          return ($f_414)($ret_415);
        } else {
          throw (new \InvalidArgumentException("transduce expects 3 or 4 arguments"));
        }

      }

    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(transduce xform f & args)\n```\nReduce with a transformation of `f` (xf). If init is not supplied,\n  `(f)` will be called to produce it. `f` should be a reducing function\n  that returns the initial value when called with no arguments.",
    \Phel::keyword("example"), "(transduce (map inc) + [1 2 3]) ; => 9",
    \Phel::keyword("see-also"), \Phel::vector(["reduce", "into", "sequence"]),
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1423,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1438,
      \Phel::keyword("column"), 85
    ),
    "min-arity", 2,
    "is-variadic", true,
    "arglists", "[xform f & args]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "volatile!",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\volatile!";

    public function __invoke($val) {
      return (new \Phel\Lang\Volatile($val));
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(volatile! val)\n```\nCreates a volatile mutable reference with initial value `val`.\n  Use for transducer state that needs fast mutation without watches.",
    \Phel::keyword("see-also"), \Phel::vector(["vreset!", "vswap!", "var"]),
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1440,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1445,
      \Phel::keyword("column"), 25
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[val]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "vreset!",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\vreset!";

    public function __invoke($vol, $val) {
      return (function() use($vol,$val) {
        $target_416 = $vol;
        return $target_416->reset($val);
      })();
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(vreset! vol val)\n```\nSets the value of volatile `vol` to `val`. Returns `val`.",
    \Phel::keyword("see-also"), \Phel::vector(["volatile!", "vswap!"]),
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1447,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1451,
      \Phel::keyword("column"), 27
    ),
    "min-arity", 2,
    "is-variadic", false,
    "arglists", "[vol val]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "vswap!",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\vswap!";

    public function __invoke($vol, $f, ...$args) {
      $args = \Phel::vector($args);
      return (\Phel::getDefinition("phel\\core", "vreset!"))($vol, ($f)((\Phel::getDefinition("phel\\core", "deref"))($vol), ...(($args) ?? [])));
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(vswap! vol f & args)\n```\nApplies `f` to the current value of volatile `vol` plus `args`,\n  and sets the new value. Returns the new value.",
    \Phel::keyword("see-also"), \Phel::vector(["volatile!", "vreset!"]),
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1453,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1458,
      \Phel::keyword("column"), 36
    ),
    "min-arity", 2,
    "is-variadic", true,
    "arglists", "[vol f & args]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "volatile?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\volatile?";

    public function __invoke($x) {
      return ($x instanceof \Phel\Lang\Volatile);
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(volatile? x)\n```\nReturns true if `x` is a Volatile.",
    \Phel::keyword("see-also"), \Phel::vector(["volatile!", "vreset!", "vswap!"]),
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1460,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1464,
      \Phel::keyword("column"), 30
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[x]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "comp",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\comp";

    public function __invoke(...$fs) {
      $fs = \Phel::vector($fs);
      $__phel_419_420 = (\Phel::getDefinition("phel\\core", "count"))($fs);
      if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_419_420, 0)) !== null && $__truthy !== false) {
        return \Phel::getDefinition("phel\\core", "identity");
      } else {
        $__phel_421_422 = $__phel_419_420;
        if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_421_422, 1)) !== null && $__truthy !== false) {
          return (\Phel::getDefinition("phel\\core", "first"))($fs);
        } else {
          $__phel_423_424 = $__phel_421_422;
          if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_423_424, 2)) !== null && $__truthy !== false) {
            return new class($fs, $__phel_419_420, $__phel_421_422, $__phel_423_424) extends \Phel\Lang\AbstractFn {
              public const BOUND_TO = "phel\\core\\comp";
              private $fs;
              private $__phel_419_420;
              private $__phel_421_422;
              private $__phel_423_424;

              public function __construct($fs, $__phel_419_420, $__phel_421_422, $__phel_423_424) {
                $this->fs = $fs;
                $this->__phel_419_420 = $__phel_419_420;
                $this->__phel_421_422 = $__phel_421_422;
                $this->__phel_423_424 = $__phel_423_424;
              }

              public function __invoke(...$__short_fn_rest_418) {
                $fs = $this->fs;
                $__phel_419_420 = $this->__phel_419_420;
                $__phel_421_422 = $this->__phel_421_422;
                $__phel_423_424 = $this->__phel_423_424;
                $__short_fn_rest_418 = \Phel::vector($__short_fn_rest_418);
                return ((\Phel::getDefinition("phel\\core", "first"))($fs))(((\Phel::getDefinition("phel\\core", "second"))($fs))(...(($__short_fn_rest_418) ?? [])));
              }
            };
          } else {
            return (\Phel::getDefinition("phel\\core", "reduce"))(\Phel::getDefinition("phel\\core", "comp"), $fs);
          }

        }

      }

    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(comp & fs)\n```\nTakes a list of functions and returns a function that is the composition of those functions.",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1466,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1473,
      \Phel::keyword("column"), 22
    ),
    "min-arity", 0,
    "is-variadic", true,
    "arglists", "[& fs]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "into",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\into";

    public function __invoke($to, ...$rest) {
      $rest = \Phel::vector($rest);
      $__phel_425_426 = (\Phel::getDefinition("phel\\core", "count"))($rest);
      if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_425_426, 0)) !== null && $__truthy !== false) {
        return $to;
      } else {
        $__phel_427_428 = $__phel_425_426;
        if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_427_428, 2)) !== null && $__truthy !== false) {
          $xf_429 = (\Phel::getDefinition("phel\\core", "first"))($rest);
          $from_430 = (\Phel::getDefinition("phel\\core", "second"))($rest);
          return (\Phel::getDefinition("phel\\core", "transduce"))($xf_429, \Phel::getDefinition("phel\\core", "conj"), $to, $from_430);
        } else {
          $__phel_431_432 = $__phel_427_428;
          if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_431_432, 1)) !== null && $__truthy !== false) {
            $from_433 = (\Phel::getDefinition("phel\\core", "first"))($rest);
            if (($__truthy = (null === $from_433)) !== null && $__truthy !== false) {
              return $to;
            } else {
              $entries_434 = (($__truthy = (\Phel::getDefinition("phel\\core", "associative?"))($from_433)) !== null && $__truthy !== false ? (function() use($to,$rest,$__phel_425_426,$__phel_427_428,$__phel_431_432,$from_433) {
                $__phel_435_439 = (\Phel::getDefinition("phel\\core", "var"))(\Phel::vector([]));
                foreach (\Phel\Lang\Seq::toIterable($from_433) as $__phel_438 => $__phel_437) {
                  $entry_440 = \Phel::vector([$__phel_438, $__phel_437]);
                  (\Phel::getDefinition("phel\\core", "swap!"))($__phel_435_439, new class($to, $rest, $__phel_425_426, $__phel_427_428, $__phel_431_432, $from_433, $__phel_435_439, $__phel_437, $__phel_438, $entry_440) extends \Phel\Lang\AbstractFn {
                    public const BOUND_TO = "phel\\core\\into.entries";
                    private $to;
                    private $rest;
                    private $__phel_425_426;
                    private $__phel_427_428;
                    private $__phel_431_432;
                    private $from_433;
                    private $__phel_435_439;
                    private $__phel_437;
                    private $__phel_438;
                    private $entry_440;

                    public function __construct($to, $rest, $__phel_425_426, $__phel_427_428, $__phel_431_432, $from_433, $__phel_435_439, $__phel_437, $__phel_438, $entry_440) {
                      $this->to = $to;
                      $this->rest = $rest;
                      $this->__phel_425_426 = $__phel_425_426;
                      $this->__phel_427_428 = $__phel_427_428;
                      $this->__phel_431_432 = $__phel_431_432;
                      $this->from_433 = $from_433;
                      $this->__phel_435_439 = $__phel_435_439;
                      $this->__phel_437 = $__phel_437;
                      $this->__phel_438 = $__phel_438;
                      $this->entry_440 = $entry_440;
                    }

                    public function __invoke($__phel_436) {
                      $to = $this->to;
                      $rest = $this->rest;
                      $__phel_425_426 = $this->__phel_425_426;
                      $__phel_427_428 = $this->__phel_427_428;
                      $__phel_431_432 = $this->__phel_431_432;
                      $from_433 = $this->from_433;
                      $__phel_435_439 = $this->__phel_435_439;
                      $__phel_437 = $this->__phel_437;
                      $__phel_438 = $this->__phel_438;
                      $entry_440 = $this->entry_440;
                      return (\Phel::getDefinition("phel\\core", "conj"))($__phel_436, $entry_440);
                    }
                  });
                }
                return (\Phel::getDefinition("phel\\core", "deref"))($__phel_435_439);
              })() : $from_433);
              $assoc_entry_441 = new class($to, $rest, $__phel_425_426, $__phel_427_428, $__phel_431_432, $from_433, $entries_434) extends \Phel\Lang\AbstractFn {
                public const BOUND_TO = "phel\\core\\into.assoc_entry";
                private $to;
                private $rest;
                private $__phel_425_426;
                private $__phel_427_428;
                private $__phel_431_432;
                private $from_433;
                private $entries_434;

                public function __construct($to, $rest, $__phel_425_426, $__phel_427_428, $__phel_431_432, $from_433, $entries_434) {
                  $this->to = $to;
                  $this->rest = $rest;
                  $this->__phel_425_426 = $__phel_425_426;
                  $this->__phel_427_428 = $__phel_427_428;
                  $this->__phel_431_432 = $__phel_431_432;
                  $this->from_433 = $from_433;
                  $this->entries_434 = $entries_434;
                }

                public function __invoke($acc, $entry) {
                  $to = $this->to;
                  $rest = $this->rest;
                  $__phel_425_426 = $this->__phel_425_426;
                  $__phel_427_428 = $this->__phel_427_428;
                  $__phel_431_432 = $this->__phel_431_432;
                  $from_433 = $this->from_433;
                  $entries_434 = $this->entries_434;
                  if (($__truthy = (\Phel::getDefinition("phel\\core", "indexed?"))($entry)) !== null && $__truthy !== false) {
                    if (($__truthy = ((\Phel::getDefinition("phel\\core", "count"))($entry) != 2)) !== null && $__truthy !== false) {
                      throw (new \InvalidArgumentException("into expects a collection of [key value] pairs"));
                    } else {
                      $k_442 = (\Phel::getDefinition("phel\\core", "first"))($entry);
                      $v_443 = (\Phel::getDefinition("phel\\core", "second"))($entry);
                      if (($__truthy = (\Phel::getDefinition("phel\\core", "php-array?"))($acc)) !== null && $__truthy !== false) {
                        ($acc)[($k_442)] = $v_443;
                        return $acc;
                      } else {
                        return (\Phel::getDefinition("phel\\core", "assoc"))($acc, $k_442, $v_443);
                      }

                    }

                  } else {
                    throw (new \InvalidArgumentException("into expects a collection of [key value] pairs"));
                  }

                }
              };
              $map_target_QMARK__444 = (function() use($to,$rest,$__phel_425_426,$__phel_427_428,$__phel_431_432,$from_433,$entries_434,$assoc_entry_441) {
                $__phel_445_446 = (\Phel::getDefinition("phel\\core", "associative?"))($to);
                if (($__truthy = $__phel_445_446) !== null && $__truthy !== false) {
                  return $__phel_445_446;
                } else {
                  return ($to instanceof \Phel\Lang\Collections\Map\TransientMapInterface);
                }

              })();
              if (($__truthy = $map_target_QMARK__444) !== null && $__truthy !== false) {
                $__phel_447_450 = (\Phel::getDefinition("phel\\core", "var"))($to);
                foreach (\Phel\Lang\Seq::toIterable($entries_434) as $__phel_449) {
                  $entry_451 = $__phel_449;
                  (\Phel::getDefinition("phel\\core", "swap!"))($__phel_447_450, new class($to, $rest, $__phel_425_426, $__phel_427_428, $__phel_431_432, $from_433, $entries_434, $assoc_entry_441, $map_target_QMARK__444, $__phel_447_450, $__phel_449, $entry_451) extends \Phel\Lang\AbstractFn {
                    public const BOUND_TO = "phel\\core\\into";
                    private $to;
                    private $rest;
                    private $__phel_425_426;
                    private $__phel_427_428;
                    private $__phel_431_432;
                    private $from_433;
                    private $entries_434;
                    private $assoc_entry_441;
                    private $map_target_QMARK__444;
                    private $__phel_447_450;
                    private $__phel_449;
                    private $entry_451;

                    public function __construct($to, $rest, $__phel_425_426, $__phel_427_428, $__phel_431_432, $from_433, $entries_434, $assoc_entry_441, $map_target_QMARK__444, $__phel_447_450, $__phel_449, $entry_451) {
                      $this->to = $to;
                      $this->rest = $rest;
                      $this->__phel_425_426 = $__phel_425_426;
                      $this->__phel_427_428 = $__phel_427_428;
                      $this->__phel_431_432 = $__phel_431_432;
                      $this->from_433 = $from_433;
                      $this->entries_434 = $entries_434;
                      $this->assoc_entry_441 = $assoc_entry_441;
                      $this->map_target_QMARK__444 = $map_target_QMARK__444;
                      $this->__phel_447_450 = $__phel_447_450;
                      $this->__phel_449 = $__phel_449;
                      $this->entry_451 = $entry_451;
                    }

                    public function __invoke($acc) {
                      $to = $this->to;
                      $rest = $this->rest;
                      $__phel_425_426 = $this->__phel_425_426;
                      $__phel_427_428 = $this->__phel_427_428;
                      $__phel_431_432 = $this->__phel_431_432;
                      $from_433 = $this->from_433;
                      $entries_434 = $this->entries_434;
                      $assoc_entry_441 = $this->assoc_entry_441;
                      $map_target_QMARK__444 = $this->map_target_QMARK__444;
                      $__phel_447_450 = $this->__phel_447_450;
                      $__phel_449 = $this->__phel_449;
                      $entry_451 = $this->entry_451;
                      return ($assoc_entry_441)($acc, $entry_451);
                    }
                  });
                }
                return (\Phel::getDefinition("phel\\core", "deref"))($__phel_447_450);
              } else {
                if (($__truthy = ($to instanceof \Phel\Lang\Collections\Vector\TransientVectorInterface)) !== null && $__truthy !== false) {
                  $__phel_452_455 = (\Phel::getDefinition("phel\\core", "var"))($to);
                  foreach (\Phel\Lang\Seq::toIterable($entries_434) as $__phel_454) {
                    $value_456 = $__phel_454;
                    (\Phel::getDefinition("phel\\core", "swap!"))($__phel_452_455, new class($to, $rest, $__phel_425_426, $__phel_427_428, $__phel_431_432, $from_433, $entries_434, $assoc_entry_441, $map_target_QMARK__444, $__phel_452_455, $__phel_454, $value_456) extends \Phel\Lang\AbstractFn {
                      public const BOUND_TO = "phel\\core\\into";
                      private $to;
                      private $rest;
                      private $__phel_425_426;
                      private $__phel_427_428;
                      private $__phel_431_432;
                      private $from_433;
                      private $entries_434;
                      private $assoc_entry_441;
                      private $map_target_QMARK__444;
                      private $__phel_452_455;
                      private $__phel_454;
                      private $value_456;

                      public function __construct($to, $rest, $__phel_425_426, $__phel_427_428, $__phel_431_432, $from_433, $entries_434, $assoc_entry_441, $map_target_QMARK__444, $__phel_452_455, $__phel_454, $value_456) {
                        $this->to = $to;
                        $this->rest = $rest;
                        $this->__phel_425_426 = $__phel_425_426;
                        $this->__phel_427_428 = $__phel_427_428;
                        $this->__phel_431_432 = $__phel_431_432;
                        $this->from_433 = $from_433;
                        $this->entries_434 = $entries_434;
                        $this->assoc_entry_441 = $assoc_entry_441;
                        $this->map_target_QMARK__444 = $map_target_QMARK__444;
                        $this->__phel_452_455 = $__phel_452_455;
                        $this->__phel_454 = $__phel_454;
                        $this->value_456 = $value_456;
                      }

                      public function __invoke($acc) {
                        $to = $this->to;
                        $rest = $this->rest;
                        $__phel_425_426 = $this->__phel_425_426;
                        $__phel_427_428 = $this->__phel_427_428;
                        $__phel_431_432 = $this->__phel_431_432;
                        $from_433 = $this->from_433;
                        $entries_434 = $this->entries_434;
                        $assoc_entry_441 = $this->assoc_entry_441;
                        $map_target_QMARK__444 = $this->map_target_QMARK__444;
                        $__phel_452_455 = $this->__phel_452_455;
                        $__phel_454 = $this->__phel_454;
                        $value_456 = $this->value_456;
                        return (\Phel::getDefinition("phel\\core", "conj"))($acc, $value_456);
                      }
                    });
                  }
                  return (\Phel::getDefinition("phel\\core", "deref"))($__phel_452_455);
                } else {
                  if (($__truthy = ($to instanceof \Phel\Lang\Collections\HashSet\TransientHashSetInterface)) !== null && $__truthy !== false) {
                    $__phel_457_460 = (\Phel::getDefinition("phel\\core", "var"))($to);
                    foreach (\Phel\Lang\Seq::toIterable($entries_434) as $__phel_459) {
                      $value_461 = $__phel_459;
                      (\Phel::getDefinition("phel\\core", "swap!"))($__phel_457_460, new class($to, $rest, $__phel_425_426, $__phel_427_428, $__phel_431_432, $from_433, $entries_434, $assoc_entry_441, $map_target_QMARK__444, $__phel_457_460, $__phel_459, $value_461) extends \Phel\Lang\AbstractFn {
                        public const BOUND_TO = "phel\\core\\into";
                        private $to;
                        private $rest;
                        private $__phel_425_426;
                        private $__phel_427_428;
                        private $__phel_431_432;
                        private $from_433;
                        private $entries_434;
                        private $assoc_entry_441;
                        private $map_target_QMARK__444;
                        private $__phel_457_460;
                        private $__phel_459;
                        private $value_461;

                        public function __construct($to, $rest, $__phel_425_426, $__phel_427_428, $__phel_431_432, $from_433, $entries_434, $assoc_entry_441, $map_target_QMARK__444, $__phel_457_460, $__phel_459, $value_461) {
                          $this->to = $to;
                          $this->rest = $rest;
                          $this->__phel_425_426 = $__phel_425_426;
                          $this->__phel_427_428 = $__phel_427_428;
                          $this->__phel_431_432 = $__phel_431_432;
                          $this->from_433 = $from_433;
                          $this->entries_434 = $entries_434;
                          $this->assoc_entry_441 = $assoc_entry_441;
                          $this->map_target_QMARK__444 = $map_target_QMARK__444;
                          $this->__phel_457_460 = $__phel_457_460;
                          $this->__phel_459 = $__phel_459;
                          $this->value_461 = $value_461;
                        }

                        public function __invoke($acc) {
                          $to = $this->to;
                          $rest = $this->rest;
                          $__phel_425_426 = $this->__phel_425_426;
                          $__phel_427_428 = $this->__phel_427_428;
                          $__phel_431_432 = $this->__phel_431_432;
                          $from_433 = $this->from_433;
                          $entries_434 = $this->entries_434;
                          $assoc_entry_441 = $this->assoc_entry_441;
                          $map_target_QMARK__444 = $this->map_target_QMARK__444;
                          $__phel_457_460 = $this->__phel_457_460;
                          $__phel_459 = $this->__phel_459;
                          $value_461 = $this->value_461;
                          return (\Phel::getDefinition("phel\\core", "conj"))($acc, $value_461);
                        }
                      });
                    }
                    return (\Phel::getDefinition("phel\\core", "deref"))($__phel_457_460);
                  } else {
                    if (($__truthy = ($to instanceof \Phel\Lang\PushInterface)) !== null && $__truthy !== false) {
                      $__phel_462_465 = (\Phel::getDefinition("phel\\core", "var"))($to);
                      foreach (\Phel\Lang\Seq::toIterable($entries_434) as $__phel_464) {
                        $value_466 = $__phel_464;
                        (\Phel::getDefinition("phel\\core", "swap!"))($__phel_462_465, new class($to, $rest, $__phel_425_426, $__phel_427_428, $__phel_431_432, $from_433, $entries_434, $assoc_entry_441, $map_target_QMARK__444, $__phel_462_465, $__phel_464, $value_466) extends \Phel\Lang\AbstractFn {
                          public const BOUND_TO = "phel\\core\\into";
                          private $to;
                          private $rest;
                          private $__phel_425_426;
                          private $__phel_427_428;
                          private $__phel_431_432;
                          private $from_433;
                          private $entries_434;
                          private $assoc_entry_441;
                          private $map_target_QMARK__444;
                          private $__phel_462_465;
                          private $__phel_464;
                          private $value_466;

                          public function __construct($to, $rest, $__phel_425_426, $__phel_427_428, $__phel_431_432, $from_433, $entries_434, $assoc_entry_441, $map_target_QMARK__444, $__phel_462_465, $__phel_464, $value_466) {
                            $this->to = $to;
                            $this->rest = $rest;
                            $this->__phel_425_426 = $__phel_425_426;
                            $this->__phel_427_428 = $__phel_427_428;
                            $this->__phel_431_432 = $__phel_431_432;
                            $this->from_433 = $from_433;
                            $this->entries_434 = $entries_434;
                            $this->assoc_entry_441 = $assoc_entry_441;
                            $this->map_target_QMARK__444 = $map_target_QMARK__444;
                            $this->__phel_462_465 = $__phel_462_465;
                            $this->__phel_464 = $__phel_464;
                            $this->value_466 = $value_466;
                          }

                          public function __invoke($acc) {
                            $to = $this->to;
                            $rest = $this->rest;
                            $__phel_425_426 = $this->__phel_425_426;
                            $__phel_427_428 = $this->__phel_427_428;
                            $__phel_431_432 = $this->__phel_431_432;
                            $from_433 = $this->from_433;
                            $entries_434 = $this->entries_434;
                            $assoc_entry_441 = $this->assoc_entry_441;
                            $map_target_QMARK__444 = $this->map_target_QMARK__444;
                            $__phel_462_465 = $this->__phel_462_465;
                            $__phel_464 = $this->__phel_464;
                            $value_466 = $this->value_466;
                            return (\Phel::getDefinition("phel\\core", "conj"))($acc, $value_466);
                          }
                        });
                      }
                      return (\Phel::getDefinition("phel\\core", "deref"))($__phel_462_465);
                    } else {
                      if (($__truthy = ($to instanceof \Phel\Lang\ConcatInterface)) !== null && $__truthy !== false) {
                        return (function() use($to,$rest,$__phel_425_426,$__phel_427_428,$__phel_431_432,$from_433,$entries_434,$assoc_entry_441,$map_target_QMARK__444) {
                          $target_467 = $to;
                          return $target_467->concat(array(...(($entries_434) ?? [])));
                        })();
                      } else {
                        if (($__truthy = is_array($to)) !== null && $__truthy !== false) {
                          return (\Phel::getDefinition("phel\\core", "concat"))($to, $entries_434);
                        } else {
                          throw (new \InvalidArgumentException(("Cannot convert into type " . (\Phel::getDefinition("phel\\core", "type"))($to))));
                        }

                      }

                    }

                  }

                }

              }

            }

          } else {
            throw (new \InvalidArgumentException("into expects 1, 2, or 3 arguments"));
          }

        }

      }

    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(into to & rest)\n```\nReturns `to` with all elements of `from` added.\n\n  When `from` is associative, it is treated as a sequence of key-value pairs.\n  Supports persistent and transient collections.",
    \Phel::keyword("example"), "(into [] '(1 2 3)) ; => [1 2 3]",
    \Phel::keyword("see-also"), \Phel::vector(["conj", "concat", "transduce"]),
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1475,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1538,
      \Phel::keyword("column"), 84
    ),
    "min-arity", 1,
    "is-variadic", true,
    "arglists", "[to & rest]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "conj-map-entry",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\conj_map_entry";

    public function __invoke($coll, $entry) {
      $assign_469 = new class($coll, $entry) extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\core\\conj_map_entry.assign";
        private $coll;
        private $entry;

        public function __construct($coll, $entry) {
          $this->coll = $coll;
          $this->entry = $entry;
        }

        public function __invoke($acc, $key, $value) {
          $coll = $this->coll;
          $entry = $this->entry;
          if (($__truthy = (\Phel::getDefinition("phel\\core", "php-array?"))($acc)) !== null && $__truthy !== false) {
            ($acc)[($key)] = $value;
            return $acc;
          } else {
            return (function() use($coll,$entry,$acc,$key,$value) {
              $target_487 = $acc;
              return $target_487->put($key, $value);
            })();
          }

        }
      };
      if (($__truthy = (\Phel::getDefinition("phel\\core", "indexed?"))($entry)) !== null && $__truthy !== false) {
        if (($__truthy = ((\Phel::getDefinition("phel\\core", "count"))($entry) != 2)) !== null && $__truthy !== false) {
          throw (new \InvalidArgumentException("conj on a map expects entries of length 2"));
        } else {
          return ($assign_469)($coll, (\Phel::getDefinition("phel\\core", "first"))($entry), (\Phel::getDefinition("phel\\core", "second"))($entry));
        }

      } else {
        if (($__truthy = (\Phel::getDefinition("phel\\core", "associative?"))($entry)) !== null && $__truthy !== false) {
          $__phel_470_474 = (\Phel::getDefinition("phel\\core", "var"))($coll);
          foreach (\Phel\Lang\Seq::toIterable($entry) as $__phel_473 => $__phel_472) {
            $__phel_475_480 = \Phel::vector([$__phel_473, $__phel_472]);
            $__phel_476_481 = (\Phel::getDefinition("phel\\core", "first"))($__phel_475_480);
            $__phel_477_482 = (\Phel::getDefinition("phel\\core", "next"))($__phel_475_480);
            $key_483 = $__phel_476_481;
            $__phel_478_484 = (\Phel::getDefinition("phel\\core", "first"))($__phel_477_482);
            $__phel_479_485 = (\Phel::getDefinition("phel\\core", "next"))($__phel_477_482);
            $value_486 = $__phel_478_484;
            (\Phel::getDefinition("phel\\core", "swap!"))($__phel_470_474, new class($coll, $entry, $assign_469, $__phel_470_474, $__phel_472, $__phel_473, $__phel_475_480, $__phel_476_481, $__phel_477_482, $key_483, $__phel_478_484, $__phel_479_485, $value_486) extends \Phel\Lang\AbstractFn {
              public const BOUND_TO = "phel\\core\\conj_map_entry";
              private $coll;
              private $entry;
              private $assign_469;
              private $__phel_470_474;
              private $__phel_472;
              private $__phel_473;
              private $__phel_475_480;
              private $__phel_476_481;
              private $__phel_477_482;
              private $key_483;
              private $__phel_478_484;
              private $__phel_479_485;
              private $value_486;

              public function __construct($coll, $entry, $assign_469, $__phel_470_474, $__phel_472, $__phel_473, $__phel_475_480, $__phel_476_481, $__phel_477_482, $key_483, $__phel_478_484, $__phel_479_485, $value_486) {
                $this->coll = $coll;
                $this->entry = $entry;
                $this->assign_469 = $assign_469;
                $this->__phel_470_474 = $__phel_470_474;
                $this->__phel_472 = $__phel_472;
                $this->__phel_473 = $__phel_473;
                $this->__phel_475_480 = $__phel_475_480;
                $this->__phel_476_481 = $__phel_476_481;
                $this->__phel_477_482 = $__phel_477_482;
                $this->key_483 = $key_483;
                $this->__phel_478_484 = $__phel_478_484;
                $this->__phel_479_485 = $__phel_479_485;
                $this->value_486 = $value_486;
              }

              public function __invoke($acc) {
                $coll = $this->coll;
                $entry = $this->entry;
                $assign_469 = $this->assign_469;
                $__phel_470_474 = $this->__phel_470_474;
                $__phel_472 = $this->__phel_472;
                $__phel_473 = $this->__phel_473;
                $__phel_475_480 = $this->__phel_475_480;
                $__phel_476_481 = $this->__phel_476_481;
                $__phel_477_482 = $this->__phel_477_482;
                $key_483 = $this->key_483;
                $__phel_478_484 = $this->__phel_478_484;
                $__phel_479_485 = $this->__phel_479_485;
                $value_486 = $this->value_486;
                return ($assign_469)($acc, $key_483, $value_486);
              }
            });
          }
          return (\Phel::getDefinition("phel\\core", "deref"))($__phel_470_474);
        } else {
          if (($__truthy = \Phel::keyword("else")) !== null && $__truthy !== false) {
            throw (new \InvalidArgumentException("conj on a map expects a [key value] pair or an associative collection"));
          } else {
            return null;
          }

        }

      }

    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(conj-map-entry coll entry)\n```\n",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1540,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1562,
      \Phel::keyword("column"), 98
    ),
    "min-arity", 2,
    "is-variadic", false,
    "arglists", "[coll entry]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "conj-single",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\conj_single";

    public function __invoke($coll, $value) {
      if (($__truthy = ($coll === null)) !== null && $__truthy !== false) {
        return (\Phel::getDefinition("phel\\core", "list"))($value);
      } else {
        if (($__truthy = (\Phel::getDefinition("phel\\core", "list?"))($coll)) !== null && $__truthy !== false) {
          return (\Phel::getDefinition("phel\\core", "cons"))($value, $coll);
        } else {
          if (($__truthy = (\Phel::getDefinition("phel\\core", "php-array?"))($coll)) !== null && $__truthy !== false) {
            ($coll)[] = $value;
            return $coll;
          } else {
            if (($__truthy = (function() use($coll,$value) {
              $__phel_489_490 = (\Phel::getDefinition("phel\\core", "vector?"))($coll);
              if (($__truthy = $__phel_489_490) !== null && $__truthy !== false) {
                return $__phel_489_490;
              } else {
                return ($coll instanceof \Phel\Lang\Collections\Vector\TransientVectorInterface);
              }

            })()) !== null && $__truthy !== false) {
              return (function() use($coll,$value) {
                $target_497 = $coll;
                return $target_497->append($value);
              })();
            } else {
              if (($__truthy = (function() use($coll,$value) {
                $__phel_491_492 = (\Phel::getDefinition("phel\\core", "set?"))($coll);
                if (($__truthy = $__phel_491_492) !== null && $__truthy !== false) {
                  return $__phel_491_492;
                } else {
                  return ($coll instanceof \Phel\Lang\Collections\HashSet\TransientHashSetInterface);
                }

              })()) !== null && $__truthy !== false) {
                return (function() use($coll,$value) {
                  $target_498 = $coll;
                  return $target_498->add($value);
                })();
              } else {
                if (($__truthy = (function() use($coll,$value) {
                  $__phel_493_494 = (\Phel::getDefinition("phel\\core", "hash-map?"))($coll);
                  if (($__truthy = $__phel_493_494) !== null && $__truthy !== false) {
                    return $__phel_493_494;
                  } else {
                    $__phel_495_496 = (\Phel::getDefinition("phel\\core", "struct?"))($coll);
                    if (($__truthy = $__phel_495_496) !== null && $__truthy !== false) {
                      return $__phel_495_496;
                    } else {
                      return ($coll instanceof \Phel\Lang\Collections\Map\TransientMapInterface);
                    }

                  }

                })()) !== null && $__truthy !== false) {
                  return (\Phel::getDefinition("phel\\core", "conj-map-entry"))($coll, $value);
                } else {
                  if (($__truthy = ($coll instanceof \Phel\Lang\PushInterface)) !== null && $__truthy !== false) {
                    return (function() use($coll,$value) {
                      $target_499 = $coll;
                      return $target_499->push($value);
                    })();
                  } else {
                    if (($__truthy = \Phel::keyword("else")) !== null && $__truthy !== false) {
                      throw (new \InvalidArgumentException((\Phel::getDefinition("phel\\core", "str"))("Cannot conj on type ", (\Phel::getDefinition("phel\\core", "type"))($coll))));
                    } else {
                      return null;
                    }

                  }

                }

              }

            }

          }

        }

      }

    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(conj-single coll value)\n```\n",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1564,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
      \Phel::keyword("line"), 1578,
      \Phel::keyword("column"), 64
    ),
    "min-arity", 2,
    "is-variadic", false,
    "arglists", "[coll value]"
  )
);
\Phel::addDefinition(
  "phel\\core",
  "conj",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\core\\conj";
    private $fn0;
    private $fn1;
    private $fn2;
    private $fn3;

    public function __construct() {
      $this->fn0 = new class() extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\core\\conj";

        public function __invoke() {
          return \Phel::vector([]);
        }
      };
      $this->fn1 = new class() extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\core\\conj";

        public function __invoke($coll) {
          return $coll;
        }
      };
      $this->fn2 = new class() extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\core\\conj";

        public function __invoke($coll, $value) {
          return (\Phel::getDefinition("phel\\core", "conj-single"))($coll, $value);
        }
      };
      $this->fn3 = new class() extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\core\\conj";

        public function __invoke($coll, $value, ...$more) {
          $more = \Phel::vector($more);
          return (\Phel::getDefinition("phel\\core", "reduce"))(\Phel::getDefinition("phel\\core", "conj-single"), (\Phel::getDefinition("phel\\core", "conj-single"))($coll, $value), $more);
        }
      };
    }

    public function __invoke(...$args) {
      $argc = \count($args);
      switch ($argc) {
        case 0:
          return ($this->fn0)();
        case 1:
          return ($this->fn1)($args[0]);
        case 2:
          return ($this->fn2)($args[0], $args[1]);
        }
        if ($argc >= 2) {
          return ($this->fn3)(...$args);
        }
        throw new \InvalidArgumentException("No matching function arity");
      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(conj)\n(conj coll)\n(conj coll value)\n(conj coll value & more)\n```\nReturns a new collection with values added. Appends to vectors/sets, prepends to lists.",
      \Phel::keyword("example"), "(conj [1 2] 3) ; => [1 2 3]",
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 1580,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 1588,
        \Phel::keyword("column"), 55
      ),
      "min-arity", 0,
      "is-variadic", true,
      "max-arity", null,
      "arglists", "([] [coll] [coll value] [coll value & more])"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "slice",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\slice";

      public function __invoke($coll, ...$__phel_503) {
        $__phel_503 = \Phel::vector($__phel_503);
        $__phel_504_511 = $__phel_503;
        $__phel_505_512 = (\Phel::getDefinition("phel\\core", "first"))($__phel_504_511);
        $__phel_506_513 = (\Phel::getDefinition("phel\\core", "next"))($__phel_504_511);
        $offset_514 = $__phel_505_512;
        $__phel_507_515 = $__phel_506_513;
        $__phel_508_516 = $__phel_507_515;
        $__phel_509_517 = (\Phel::getDefinition("phel\\core", "first"))($__phel_508_516);
        $__phel_510_518 = (\Phel::getDefinition("phel\\core", "next"))($__phel_508_516);
        $length_519 = $__phel_509_517;
        if (($__truthy = (\Phel::getDefinition("phel\\core", "php-array?"))($coll)) !== null && $__truthy !== false) {
          return array_slice($coll, $offset_514, $length_519);
        } else {
          if (($__truthy = ($coll instanceof \Phel\Lang\SliceInterface)) !== null && $__truthy !== false) {
            return (function() use($coll,$__phel_503,$__phel_504_511,$__phel_505_512,$__phel_506_513,$offset_514,$__phel_507_515,$__phel_508_516,$__phel_509_517,$__phel_510_518,$length_519) {
              $target_520 = $coll;
              return $target_520->slice($offset_514, $length_519);
            })();
          } else {
            throw (new \InvalidArgumentException("Cannot slice"));
          }

        }

      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(slice coll & [offset & [length]])\n```\nExtracts a slice of `coll` starting at `offset` with optional `length`.",
      \Phel::keyword("example"), "(slice [1 2 3 4 5] 1 3) ; => [2 3 4]",
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 1590,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 1597,
        \Phel::keyword("column"), 63
      ),
      "min-arity", 1,
      "is-variadic", true,
      "arglists", "[coll & __phel_503]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "set",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\set";

      public function __invoke($coll) {
        if (($__truthy = (null === $coll)) !== null && $__truthy !== false) {
          return \Phel::set([]);
        } else {
          $__phel_522_525 = (\Phel::getDefinition("phel\\core", "var"))(\Phel::set([]));
          foreach (\Phel\Lang\Seq::toIterable($coll) as $__phel_524) {
            $x_526 = $__phel_524;
            (\Phel::getDefinition("phel\\core", "swap!"))($__phel_522_525, new class($coll, $__phel_522_525, $__phel_524, $x_526) extends \Phel\Lang\AbstractFn {
              public const BOUND_TO = "phel\\core\\set";
              private $coll;
              private $__phel_522_525;
              private $__phel_524;
              private $x_526;

              public function __construct($coll, $__phel_522_525, $__phel_524, $x_526) {
                $this->coll = $coll;
                $this->__phel_522_525 = $__phel_522_525;
                $this->__phel_524 = $__phel_524;
                $this->x_526 = $x_526;
              }

              public function __invoke($acc) {
                $coll = $this->coll;
                $__phel_522_525 = $this->__phel_522_525;
                $__phel_524 = $this->__phel_524;
                $x_526 = $this->x_526;
                return (\Phel::getDefinition("phel\\core", "conj"))($acc, $x_526);
              }
            });
          }
          return (\Phel::getDefinition("phel\\core", "deref"))($__phel_522_525);
        }

      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(set coll)\n```\nCoerces a collection to a set. Returns a set containing the distinct elements of `coll`.\n  For creating sets from arguments, use `hash-set`.",
      \Phel::keyword("example"), "(set [1 2 3 2 1]) ; => #{1 2 3}",
      \Phel::keyword("see-also"), \Phel::vector(["hash-set", "vec", "into"]),
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 1599,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 1607,
        \Phel::keyword("column"), 55
      ),
      "min-arity", 1,
      "is-variadic", false,
      "arglists", "[coll]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "vec",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\vec";

      public function __invoke($coll) {
        if (($__truthy = (null === $coll)) !== null && $__truthy !== false) {
          return \Phel::vector([]);
        } else {
          $__phel_527_530 = (\Phel::getDefinition("phel\\core", "var"))(\Phel::vector([]));
          foreach (\Phel\Lang\Seq::toIterable($coll) as $__phel_529) {
            $x_531 = $__phel_529;
            (\Phel::getDefinition("phel\\core", "swap!"))($__phel_527_530, new class($coll, $__phel_527_530, $__phel_529, $x_531) extends \Phel\Lang\AbstractFn {
              public const BOUND_TO = "phel\\core\\vec";
              private $coll;
              private $__phel_527_530;
              private $__phel_529;
              private $x_531;

              public function __construct($coll, $__phel_527_530, $__phel_529, $x_531) {
                $this->coll = $coll;
                $this->__phel_527_530 = $__phel_527_530;
                $this->__phel_529 = $__phel_529;
                $this->x_531 = $x_531;
              }

              public function __invoke($acc) {
                $coll = $this->coll;
                $__phel_527_530 = $this->__phel_527_530;
                $__phel_529 = $this->__phel_529;
                $x_531 = $this->x_531;
                return (\Phel::getDefinition("phel\\core", "conj"))($acc, $x_531);
              }
            });
          }
          return (\Phel::getDefinition("phel\\core", "deref"))($__phel_527_530);
        }

      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(vec coll)\n```\nCoerces a collection to a vector. Returns a vector containing all elements of `coll`.",
      \Phel::keyword("example"), "(vec '(1 2 3)) ; => [1 2 3]",
      \Phel::keyword("see-also"), \Phel::vector(["vector", "set", "into"]),
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 1609,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 1616,
        \Phel::keyword("column"), 54
      ),
      "min-arity", 1,
      "is-variadic", false,
      "arglists", "[coll]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "get-in",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\get_in";

      public function __invoke($ds, $ks, ...$__phel_532) {
        $__phel_532 = \Phel::vector($__phel_532);
        $__phel_533_536 = $__phel_532;
        $__phel_534_537 = (\Phel::getDefinition("phel\\core", "first"))($__phel_533_536);
        $__phel_535_538 = (\Phel::getDefinition("phel\\core", "next"))($__phel_533_536);
        $opt_539 = $__phel_534_537;
        $res_540 = (\Phel::getDefinition("phel\\core", "reduce"))(\Phel::getDefinition("phel\\core", "get"), $ds, $ks);
        if (($__truthy = (\Phel::getDefinition("phel\\core", "nil?"))($res_540)) !== null && $__truthy !== false) {
          return $opt_539;
        } else {
          return $res_540;
        }

      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(get-in ds ks & [opt])\n```\nAccesses a value in a nested data structure via a sequence of keys.\n\n  Returns `opt` (default nil) if the path doesn't exist.",
      \Phel::keyword("example"), "(get-in {:a {:b {:c 42}}} [:a :b :c]) ; => 42",
      \Phel::keyword("see-also"), \Phel::vector(["assoc-in", "update-in"]),
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 1618,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 1626,
        \Phel::keyword("column"), 29
      ),
      "min-arity", 2,
      "is-variadic", true,
      "arglists", "[ds ks & __phel_532]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "assoc-in",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\assoc_in";

      public function __invoke($ds, $__phel_541, $v) {
        $__phel_542_546 = $__phel_541;
        $__phel_543_547 = (\Phel::getDefinition("phel\\core", "first"))($__phel_542_546);
        $__phel_544_548 = (\Phel::getDefinition("phel\\core", "next"))($__phel_542_546);
        $k_549 = $__phel_543_547;
        $__phel_545_550 = $__phel_544_548;
        $ks_551 = $__phel_545_550;
        if (($__truthy = (\Phel::getDefinition("phel\\core", "nil?"))($ks_551)) !== null && $__truthy !== false) {
          return (\Phel::getDefinition("phel\\core", "assoc"))($ds, $k_549, $v);
        } else {
          return (\Phel::getDefinition("phel\\core", "assoc"))($ds, $k_549, (\Phel::getDefinition("phel\\core", "assoc-in"))((\Phel::getDefinition("phel\\core", "get"))($ds, $k_549, \Phel::map()), $ks_551, $v));
        }

      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(assoc-in ds [k & ks] v)\n```\nAssociates a value in a nested data structure at the given path.\n\n  Creates intermediate maps if they don't exist.",
      \Phel::keyword("example"), "(assoc-in {:a {:b 1}} [:a :c] 2) ; => {:a {:b 1 :c 2}}",
      \Phel::keyword("see-also"), \Phel::vector(["get-in", "update-in", "dissoc-in"]),
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 1628,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 1637,
        \Phel::keyword("column"), 20
      ),
      "min-arity", 3,
      "is-variadic", false,
      "arglists", "[ds __phel_541 v]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "put-in",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\put_in";

      public function __invoke($ds, $ks, $v) {
        return (\Phel::getDefinition("phel\\core", "assoc-in"))($ds, $ks, $v);
      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(put-in ds ks v)\n```\nPuts a value into a nested data structure.",
      \Phel::keyword("deprecated"), "0.25.0",
      \Phel::keyword("superseded-by"), "assoc-in",
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 1639,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 1644,
        \Phel::keyword("column"), 21
      ),
      "min-arity", 3,
      "is-variadic", false,
      "arglists", "[ds ks v]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "update",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\update";

      public function __invoke($ds, $k, $f, ...$args) {
        $args = \Phel::vector($args);
        return (\Phel::getDefinition("phel\\core", "assoc"))($ds, $k, ($f)((\Phel::getDefinition("phel\\core", "get"))($ds, $k), ...(($args) ?? [])));
      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(update ds k f & args)\n```\nUpdates a value in a datastructure by applying `f` to the current value.",
      \Phel::keyword("example"), "(update {:count 5} :count inc) ; => {:count 6}",
      \Phel::keyword("see-also"), \Phel::vector(["update-in", "assoc"]),
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 1646,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 1651,
        \Phel::keyword("column"), 41
      ),
      "min-arity", 3,
      "is-variadic", true,
      "arglists", "[ds k f & args]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "update-in",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\update_in";

      public function __invoke($ds, $__phel_552, $f, ...$args) {
        $args = \Phel::vector($args);
        $__phel_553_557 = $__phel_552;
        $__phel_554_558 = (\Phel::getDefinition("phel\\core", "first"))($__phel_553_557);
        $__phel_555_559 = (\Phel::getDefinition("phel\\core", "next"))($__phel_553_557);
        $k_560 = $__phel_554_558;
        $__phel_556_561 = $__phel_555_559;
        $ks_562 = $__phel_556_561;
        if (($__truthy = $ks_562) !== null && $__truthy !== false) {
          return (\Phel::getDefinition("phel\\core", "assoc"))($ds, $k_560, (\Phel::getDefinition("phel\\core", "update-in"))((\Phel::getDefinition("phel\\core", "get"))($ds, $k_560, \Phel::map()), $ks_562, $f, ...(($args) ?? [])));
        } else {
          $current_563 = (\Phel::getDefinition("phel\\core", "get"))($ds, $k_560);
          return (\Phel::getDefinition("phel\\core", "assoc"))($ds, $k_560, ($f)($current_563, ...(($args) ?? [])));
        }

      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(update-in ds [k & ks] f & args)\n```\nUpdates a value in a nested data structure by applying `f` to the value at path.",
      \Phel::keyword("example"), "(update-in {:a {:b 5}} [:a :b] inc) ; => {:a {:b 6}}",
      \Phel::keyword("see-also"), \Phel::vector(["get-in", "assoc-in", "update"]),
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 1653,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 1661,
        \Phel::keyword("column"), 44
      ),
      "min-arity", 3,
      "is-variadic", true,
      "arglists", "[ds __phel_552 f & args]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "dissoc-in",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\dissoc_in";

      public function __invoke($ds, $__phel_564) {
        $__phel_565_569 = $__phel_564;
        $__phel_566_570 = (\Phel::getDefinition("phel\\core", "first"))($__phel_565_569);
        $__phel_567_571 = (\Phel::getDefinition("phel\\core", "next"))($__phel_565_569);
        $k_572 = $__phel_566_570;
        $__phel_568_573 = $__phel_567_571;
        $ks_574 = $__phel_568_573;
        if (($__truthy = $ks_574) !== null && $__truthy !== false) {
          $sub_575 = (\Phel::getDefinition("phel\\core", "get"))($ds, $k_572);
          if (($__truthy = (\Phel::getDefinition("phel\\core", "nil?"))($sub_575)) !== null && $__truthy !== false) {
            return $ds;
          } else {
            return (\Phel::getDefinition("phel\\core", "assoc"))($ds, $k_572, (\Phel::getDefinition("phel\\core", "dissoc-in"))($sub_575, $ks_574));
          }

        } else {
          return (\Phel::getDefinition("phel\\core", "dissoc"))($ds, $k_572);
        }

      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(dissoc-in ds [k & ks])\n```\nDissociates a value from a nested data structure at the given path.",
      \Phel::keyword("example"), "(dissoc-in {:a {:b 1 :c 2}} [:a :b]) ; => {:a {:c 2}}",
      \Phel::keyword("see-also"), \Phel::vector(["dissoc", "assoc-in", "get-in"]),
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 1663,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 1673,
        \Phel::keyword("column"), 19
      ),
      "min-arity", 2,
      "is-variadic", false,
      "arglists", "[ds __phel_564]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "unset-in",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\unset_in";

      public function __invoke($ds, $ks) {
        return (\Phel::getDefinition("phel\\core", "dissoc-in"))($ds, $ks);
      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(unset-in ds ks)\n```\nRemoves a value from a nested data structure.",
      \Phel::keyword("deprecated"), "0.25.0",
      \Phel::keyword("superseded-by"), "dissoc-in",
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 1675,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 1680,
        \Phel::keyword("column"), 20
      ),
      "min-arity", 2,
      "is-variadic", false,
      "arglists", "[ds ks]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "drop",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\drop";

      public function __invoke($n, ...$args) {
        $args = \Phel::vector($args);
        $__phel_576_577 = (\Phel::getDefinition("phel\\core", "count"))($args);
        if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_576_577, 0)) !== null && $__truthy !== false) {
          return new class($n, $args, $__phel_576_577) extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\core\\drop";
            private $n;
            private $args;
            private $__phel_576_577;

            public function __construct($n, $args, $__phel_576_577) {
              $this->n = $n;
              $this->args = $args;
              $this->__phel_576_577 = $__phel_576_577;
            }

            public function __invoke($rf) {
              $n = $this->n;
              $args = $this->args;
              $__phel_576_577 = $this->__phel_576_577;
              $nv_578 = (\Phel::getDefinition("phel\\core", "volatile!"))($n);
              return (\Phel::getDefinition("phel\\core", "xf-step"))($rf, new class($n, $args, $__phel_576_577, $rf, $nv_578) extends \Phel\Lang\AbstractFn {
                public const BOUND_TO = "phel\\core\\drop";
                private $n;
                private $args;
                private $__phel_576_577;
                private $rf;
                private $nv_578;

                public function __construct($n, $args, $__phel_576_577, $rf, $nv_578) {
                  $this->n = $n;
                  $this->args = $args;
                  $this->__phel_576_577 = $__phel_576_577;
                  $this->rf = $rf;
                  $this->nv_578 = $nv_578;
                }

                public function __invoke($result, $input) {
                  $n = $this->n;
                  $args = $this->args;
                  $__phel_576_577 = $this->__phel_576_577;
                  $rf = $this->rf;
                  $nv_578 = $this->nv_578;
                  $n_579 = (\Phel::getDefinition("phel\\core", "deref"))($nv_578);
                  if (($__truthy = ($n_579 > 0)) !== null && $__truthy !== false) {
                    (\Phel::getDefinition("phel\\core", "vreset!"))($nv_578, ($n_579 - 1));
                  } else {

                  }

                  if (($__truthy = ($n_579 > 0)) !== null && $__truthy !== false) {
                    return $result;
                  } else {
                    return ($rf)($result, $input);
                  }

                }
              });
            }
          };
        } else {
          $__phel_580_581 = $__phel_576_577;
          if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_580_581, 1)) !== null && $__truthy !== false) {
            $coll_582 = (\Phel::getDefinition("phel\\core", "first"))($args);
            if (($__truthy = (\Phel::getDefinition("phel\\core", "nil?"))($coll_582)) !== null && $__truthy !== false) {
              return \Phel::vector([]);
            } else {
              $n_583 = (($__truthy = ($n < 0)) !== null && $__truthy !== false ? 0 : $n);
              if (($__truthy = ($n_583 === 0)) !== null && $__truthy !== false) {
                return $coll_582;
              } else {
                $result_584 = (\Phel::getDefinition("phel\\core", "lazy-seq-from-generator"))((\Phel\Lang\Seq::drop($n_583, $coll_582)));
                return (\Phel::getDefinition("phel\\core", "with-meta"))($coll_582, (function() use($n_583,$args,$__phel_576_577,$__phel_580_581,$coll_582,$result_584) {
                  $__phel_585_586 = $result_584;
                  if (($__truthy = $__phel_585_586) !== null && $__truthy !== false) {
                    return $__phel_585_586;
                  } else {
                    return \Phel::vector([]);
                  }

                })());
              }

            }

          } else {
            throw (new \InvalidArgumentException("drop expects 1 or 2 arguments"));
          }

        }

      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(drop n & args)\n```\nDrops the first `n` elements of `coll`. Returns a lazy sequence.\n  When called with n only, returns a transducer.",
      \Phel::keyword("example"), "(drop 2 [1 2 3 4 5]) ; => (3 4 5)",
      \Phel::keyword("see-also"), \Phel::vector(["take", "drop-last", "transduce"]),
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 1682,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 1703,
        \Phel::keyword("column"), 80
      ),
      "min-arity", 1,
      "is-variadic", true,
      "arglists", "[n & args]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "drop-last",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\drop_last";

      public function __invoke($n, $coll) {
        $n_587 = (($__truthy = ($n < 0)) !== null && $__truthy !== false ? 0 : $n);
        $end_588 = ((\Phel::getDefinition("phel\\core", "count"))($coll) - $n_587);
        return (\Phel::getDefinition("phel\\core", "slice"))($coll, 0, max(0, $end_588));
      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(drop-last n coll)\n```\nDrops the last `n` elements of `coll`.",
      \Phel::keyword("example"), "(drop-last 2 [1 2 3 4 5]) ; => [1 2 3]",
      \Phel::keyword("see-also"), \Phel::vector(["drop", "butlast"]),
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 1705,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 1712,
        \Phel::keyword("column"), 36
      ),
      "min-arity", 2,
      "is-variadic", false,
      "arglists", "[n coll]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "last",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\last";

      public function __invoke($coll) {
        if (($__truthy = (function() use($coll) {
          $__phel_589_590 = ($coll === null);
          if (($__truthy = $__phel_589_590) !== null && $__truthy !== false) {
            return $__phel_589_590;
          } else {
            return (\Phel::getDefinition("phel\\core", "empty?"))($coll);
          }

        })()) !== null && $__truthy !== false) {
          return null;
        } else {
          return (\Phel::getDefinition("phel\\core", "peek"))($coll);
        }

      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(last coll)\n```\nReturns the last element of `coll` or nil if `coll` is empty or nil.",
      \Phel::keyword("example"), "(last [1 2 3]) ; => 3",
      \Phel::keyword("see-also"), \Phel::vector(["first", "peek", "butlast"]),
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 1714,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 1721,
        \Phel::keyword("column"), 17
      ),
      "min-arity", 1,
      "is-variadic", false,
      "arglists", "[coll]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "butlast",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\butlast";

      public function __invoke($coll) {
        return (\Phel::getDefinition("phel\\core", "drop-last"))(1, $coll);
      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(butlast coll)\n```\nReturns all but the last item in `coll`.",
      \Phel::keyword("example"), "(butlast [1 2 3 4]) ; => [1 2 3]",
      \Phel::keyword("see-also"), \Phel::vector(["last", "drop-last"]),
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 1723,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 1728,
        \Phel::keyword("column"), 21
      ),
      "min-arity", 1,
      "is-variadic", false,
      "arglists", "[coll]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "drop-while",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\drop_while";

      public function __invoke($pred, ...$args) {
        $args = \Phel::vector($args);
        $__phel_591_592 = (\Phel::getDefinition("phel\\core", "count"))($args);
        if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_591_592, 0)) !== null && $__truthy !== false) {
          return new class($pred, $args, $__phel_591_592) extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\core\\drop_while";
            private $pred;
            private $args;
            private $__phel_591_592;

            public function __construct($pred, $args, $__phel_591_592) {
              $this->pred = $pred;
              $this->args = $args;
              $this->__phel_591_592 = $__phel_591_592;
            }

            public function __invoke($rf) {
              $pred = $this->pred;
              $args = $this->args;
              $__phel_591_592 = $this->__phel_591_592;
              $dv_593 = (\Phel::getDefinition("phel\\core", "volatile!"))(true);
              return (\Phel::getDefinition("phel\\core", "xf-step"))($rf, new class($pred, $args, $__phel_591_592, $rf, $dv_593) extends \Phel\Lang\AbstractFn {
                public const BOUND_TO = "phel\\core\\drop_while";
                private $pred;
                private $args;
                private $__phel_591_592;
                private $rf;
                private $dv_593;

                public function __construct($pred, $args, $__phel_591_592, $rf, $dv_593) {
                  $this->pred = $pred;
                  $this->args = $args;
                  $this->__phel_591_592 = $__phel_591_592;
                  $this->rf = $rf;
                  $this->dv_593 = $dv_593;
                }

                public function __invoke($result, $input) {
                  $pred = $this->pred;
                  $args = $this->args;
                  $__phel_591_592 = $this->__phel_591_592;
                  $rf = $this->rf;
                  $dv_593 = $this->dv_593;
                  if (($__truthy = (function() use($pred,$args,$__phel_591_592,$rf,$dv_593,$result,$input) {
                    $__phel_594_595 = (\Phel::getDefinition("phel\\core", "deref"))($dv_593);
                    if (($__truthy = $__phel_594_595) !== null && $__truthy !== false) {
                      return ($pred)($input);
                    } else {
                      return $__phel_594_595;
                    }

                  })()) !== null && $__truthy !== false) {
                    return $result;
                  } else {
                    (\Phel::getDefinition("phel\\core", "vreset!"))($dv_593, false);
                    return ($rf)($result, $input);
                  }

                }
              });
            }
          };
        } else {
          $__phel_596_597 = $__phel_591_592;
          if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_596_597, 1)) !== null && $__truthy !== false) {
            $coll_598 = (\Phel::getDefinition("phel\\core", "first"))($args);
            if (($__truthy = (\Phel::getDefinition("phel\\core", "nil?"))($coll_598)) !== null && $__truthy !== false) {
              return \Phel::vector([]);
            } else {
              $result_599 = (\Phel::getDefinition("phel\\core", "lazy-seq-from-generator"))((\Phel\Lang\Seq::dropWhile($pred, $coll_598)));
              return (\Phel::getDefinition("phel\\core", "with-meta"))($coll_598, (function() use($pred,$args,$__phel_591_592,$__phel_596_597,$coll_598,$result_599) {
                $__phel_600_601 = $result_599;
                if (($__truthy = $__phel_600_601) !== null && $__truthy !== false) {
                  return $__phel_600_601;
                } else {
                  return \Phel::vector([]);
                }

              })());
            }

          } else {
            throw (new \InvalidArgumentException("drop-while expects 1 or 2 arguments"));
          }

        }

      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(drop-while pred & args)\n```\nDrops all elements at the front of `coll` where `(pred x)` is true. Returns a lazy sequence.\n  When called with pred only, returns a transducer.",
      \Phel::keyword("example"), "(drop-while |(< \$ 5) [1 2 3 4 5 6 3 2 1]) ; => (5 6 3 2 1)",
      \Phel::keyword("see-also"), \Phel::vector(["take-while", "drop", "transduce"]),
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 1730,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 1748,
        \Phel::keyword("column"), 86
      ),
      "min-arity", 1,
      "is-variadic", true,
      "arglists", "[pred & args]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "take",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\take";

      public function __invoke($n, ...$args) {
        $args = \Phel::vector($args);
        $__phel_602_603 = (\Phel::getDefinition("phel\\core", "count"))($args);
        if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_602_603, 0)) !== null && $__truthy !== false) {
          return new class($n, $args, $__phel_602_603) extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\core\\take";
            private $n;
            private $args;
            private $__phel_602_603;

            public function __construct($n, $args, $__phel_602_603) {
              $this->n = $n;
              $this->args = $args;
              $this->__phel_602_603 = $__phel_602_603;
            }

            public function __invoke($rf) {
              $n = $this->n;
              $args = $this->args;
              $__phel_602_603 = $this->__phel_602_603;
              $nv_604 = (\Phel::getDefinition("phel\\core", "volatile!"))($n);
              return (\Phel::getDefinition("phel\\core", "xf-step"))($rf, new class($n, $args, $__phel_602_603, $rf, $nv_604) extends \Phel\Lang\AbstractFn {
                public const BOUND_TO = "phel\\core\\take";
                private $n;
                private $args;
                private $__phel_602_603;
                private $rf;
                private $nv_604;

                public function __construct($n, $args, $__phel_602_603, $rf, $nv_604) {
                  $this->n = $n;
                  $this->args = $args;
                  $this->__phel_602_603 = $__phel_602_603;
                  $this->rf = $rf;
                  $this->nv_604 = $nv_604;
                }

                public function __invoke($result, $input) {
                  $n = $this->n;
                  $args = $this->args;
                  $__phel_602_603 = $this->__phel_602_603;
                  $rf = $this->rf;
                  $nv_604 = $this->nv_604;
                  $n_605 = (\Phel::getDefinition("phel\\core", "deref"))($nv_604);
                  $nn_606 = (\Phel::getDefinition("phel\\core", "vreset!"))($nv_604, ($n_605 - 1));
                  $result_607 = (($__truthy = ($n_605 > 0)) !== null && $__truthy !== false ? ($rf)($result, $input) : $result);
                  if (($__truthy = (\Phel::getDefinition("phel\\core", "not"))(($nn_606 > 0))) !== null && $__truthy !== false) {
                    return (\Phel::getDefinition("phel\\core", "ensure-reduced"))($result_607);
                  } else {
                    return $result_607;
                  }

                }
              });
            }
          };
        } else {
          $__phel_608_609 = $__phel_602_603;
          if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_608_609, 1)) !== null && $__truthy !== false) {
            $coll_610 = (\Phel::getDefinition("phel\\core", "first"))($args);
            $n_611 = (($__truthy = ($n < 0)) !== null && $__truthy !== false ? 0 : $n);
            if (($__truthy = ($n_611 === 0)) !== null && $__truthy !== false) {
              return \Phel::vector([]);
            } else {
              $result_612 = (\Phel::getDefinition("phel\\core", "lazy-seq-from-generator"))((\Phel\Lang\Seq::take($n_611, $coll_610)));
              if (($__truthy = (\Phel::getDefinition("phel\\core", "nil?"))($result_612)) !== null && $__truthy !== false) {
                return \Phel::vector([]);
              } else {
                return (\Phel::getDefinition("phel\\core", "with-meta"))($coll_610, $result_612);
              }

            }

          } else {
            throw (new \InvalidArgumentException("take expects 1 or 2 arguments"));
          }

        }

      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(take n & args)\n```\nTakes the first `n` elements of `coll`.\n  When called with n only, returns a transducer.",
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 1750,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 1770,
        \Phel::keyword("column"), 80
      ),
      "min-arity", 1,
      "is-variadic", true,
      "arglists", "[n & args]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "take-last",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\take_last";

      public function __invoke($n, $coll) {
        if (($__truthy = ($n <= 0)) !== null && $__truthy !== false) {
          return \Phel::vector([]);
        } else {
          return (\Phel::getDefinition("phel\\core", "slice"))($coll, (-1 * $n));
        }

      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(take-last n coll)\n```\nTakes the last `n` elements of `coll`.",
      \Phel::keyword("example"), "(take-last 3 [1 2 3 4 5]) ; => [3 4 5]",
      \Phel::keyword("see-also"), \Phel::vector(["take", "drop-last"]),
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 1772,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 1777,
        \Phel::keyword("column"), 49
      ),
      "min-arity", 2,
      "is-variadic", false,
      "arglists", "[n coll]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "take-while",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\take_while";

      public function __invoke($pred, ...$args) {
        $args = \Phel::vector($args);
        $__phel_613_614 = (\Phel::getDefinition("phel\\core", "count"))($args);
        if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_613_614, 0)) !== null && $__truthy !== false) {
          return new class($pred, $args, $__phel_613_614) extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\core\\take_while";
            private $pred;
            private $args;
            private $__phel_613_614;

            public function __construct($pred, $args, $__phel_613_614) {
              $this->pred = $pred;
              $this->args = $args;
              $this->__phel_613_614 = $__phel_613_614;
            }

            public function __invoke($rf) {
              $pred = $this->pred;
              $args = $this->args;
              $__phel_613_614 = $this->__phel_613_614;
              return (\Phel::getDefinition("phel\\core", "xf-step"))($rf, new class($pred, $args, $__phel_613_614, $rf) extends \Phel\Lang\AbstractFn {
                public const BOUND_TO = "phel\\core\\take_while";
                private $pred;
                private $args;
                private $__phel_613_614;
                private $rf;

                public function __construct($pred, $args, $__phel_613_614, $rf) {
                  $this->pred = $pred;
                  $this->args = $args;
                  $this->__phel_613_614 = $__phel_613_614;
                  $this->rf = $rf;
                }

                public function __invoke($result, $input) {
                  $pred = $this->pred;
                  $args = $this->args;
                  $__phel_613_614 = $this->__phel_613_614;
                  $rf = $this->rf;
                  if (($__truthy = ($pred)($input)) !== null && $__truthy !== false) {
                    return ($rf)($result, $input);
                  } else {
                    return (\Phel::getDefinition("phel\\core", "reduced"))($result);
                  }

                }
              });
            }
          };
        } else {
          $__phel_615_616 = $__phel_613_614;
          if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_615_616, 1)) !== null && $__truthy !== false) {
            $coll_617 = (\Phel::getDefinition("phel\\core", "first"))($args);
            if (($__truthy = (\Phel::getDefinition("phel\\core", "nil?"))($coll_617)) !== null && $__truthy !== false) {
              return \Phel::vector([]);
            } else {
              $result_618 = (\Phel::getDefinition("phel\\core", "lazy-seq-from-generator"))((\Phel\Lang\Seq::takeWhile($pred, $coll_617)));
              return (\Phel::getDefinition("phel\\core", "with-meta"))($coll_617, (function() use($pred,$args,$__phel_613_614,$__phel_615_616,$coll_617,$result_618) {
                $__phel_619_620 = $result_618;
                if (($__truthy = $__phel_619_620) !== null && $__truthy !== false) {
                  return $__phel_619_620;
                } else {
                  return \Phel::vector([]);
                }

              })());
            }

          } else {
            throw (new \InvalidArgumentException("take-while expects 1 or 2 arguments"));
          }

        }

      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(take-while pred & args)\n```\nTakes all elements at the front of `coll` where `(pred x)` is true. Returns a lazy sequence.\n  When called with pred only, returns a transducer.",
      \Phel::keyword("example"), "(take-while |(< \$ 5) [1 2 3 4 5 6 3 2 1]) ; => (1 2 3 4)",
      \Phel::keyword("see-also"), \Phel::vector(["drop-while", "take", "transduce"]),
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 1779,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 1794,
        \Phel::keyword("column"), 86
      ),
      "min-arity", 1,
      "is-variadic", true,
      "arglists", "[pred & args]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "take-nth",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\take_nth";

      public function __invoke($n, ...$args) {
        $args = \Phel::vector($args);
        if (($__truthy = ($n < 1)) !== null && $__truthy !== false) {
          throw (new \InvalidArgumentException("First argument of 'take-nth must be greater than 0"));
        } else {

        }

        $__phel_621_622 = (\Phel::getDefinition("phel\\core", "count"))($args);
        if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_621_622, 0)) !== null && $__truthy !== false) {
          return new class($n, $args, $__phel_621_622) extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\core\\take_nth";
            private $n;
            private $args;
            private $__phel_621_622;

            public function __construct($n, $args, $__phel_621_622) {
              $this->n = $n;
              $this->args = $args;
              $this->__phel_621_622 = $__phel_621_622;
            }

            public function __invoke($rf) {
              $n = $this->n;
              $args = $this->args;
              $__phel_621_622 = $this->__phel_621_622;
              $iv_623 = (\Phel::getDefinition("phel\\core", "volatile!"))(-1);
              return (\Phel::getDefinition("phel\\core", "xf-step"))($rf, new class($n, $args, $__phel_621_622, $rf, $iv_623) extends \Phel\Lang\AbstractFn {
                public const BOUND_TO = "phel\\core\\take_nth";
                private $n;
                private $args;
                private $__phel_621_622;
                private $rf;
                private $iv_623;

                public function __construct($n, $args, $__phel_621_622, $rf, $iv_623) {
                  $this->n = $n;
                  $this->args = $args;
                  $this->__phel_621_622 = $__phel_621_622;
                  $this->rf = $rf;
                  $this->iv_623 = $iv_623;
                }

                public function __invoke($result, $input) {
                  $n = $this->n;
                  $args = $this->args;
                  $__phel_621_622 = $this->__phel_621_622;
                  $rf = $this->rf;
                  $iv_623 = $this->iv_623;
                  $i_624 = (\Phel::getDefinition("phel\\core", "vreset!"))($iv_623, ((\Phel::getDefinition("phel\\core", "deref"))($iv_623) + 1));
                  if (($__truthy = (0 === ($i_624 % $n))) !== null && $__truthy !== false) {
                    return ($rf)($result, $input);
                  } else {
                    return $result;
                  }

                }
              });
            }
          };
        } else {
          $__phel_625_626 = $__phel_621_622;
          if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_625_626, 1)) !== null && $__truthy !== false) {
            $coll_627 = (\Phel::getDefinition("phel\\core", "first"))($args);
            if (($__truthy = (\Phel::getDefinition("phel\\core", "nil?"))($coll_627)) !== null && $__truthy !== false) {
              return \Phel::vector([]);
            } else {
              $result_628 = (\Phel::getDefinition("phel\\core", "lazy-seq-from-generator"))((\Phel\Lang\Seq::takeNth($n, $coll_627)));
              return (\Phel::getDefinition("phel\\core", "with-meta"))($coll_627, (function() use($n,$args,$__phel_621_622,$__phel_625_626,$coll_627,$result_628) {
                $__phel_629_630 = $result_628;
                if (($__truthy = $__phel_629_630) !== null && $__truthy !== false) {
                  return $__phel_629_630;
                } else {
                  return \Phel::vector([]);
                }

              })());
            }

          } else {
            throw (new \InvalidArgumentException("take-nth expects 1 or 2 arguments"));
          }

        }

      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(take-nth n & args)\n```\nReturns every nth item in `coll`. Returns a lazy sequence.\n  When called with n only, returns a transducer.",
      \Phel::keyword("example"), "(take-nth 2 [0 1 2 3 4 5 6 7 8]) ; => (0 2 4 6 8)",
      \Phel::keyword("see-also"), \Phel::vector(["take", "filter", "transduce"]),
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 1796,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 1816,
        \Phel::keyword("column"), 84
      ),
      "min-arity", 1,
      "is-variadic", true,
      "arglists", "[n & args]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "filter",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\filter";

      public function __invoke($pred, ...$args) {
        $args = \Phel::vector($args);
        $__phel_631_632 = (\Phel::getDefinition("phel\\core", "count"))($args);
        if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_631_632, 0)) !== null && $__truthy !== false) {
          return new class($pred, $args, $__phel_631_632) extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\core\\filter";
            private $pred;
            private $args;
            private $__phel_631_632;

            public function __construct($pred, $args, $__phel_631_632) {
              $this->pred = $pred;
              $this->args = $args;
              $this->__phel_631_632 = $__phel_631_632;
            }

            public function __invoke($rf) {
              $pred = $this->pred;
              $args = $this->args;
              $__phel_631_632 = $this->__phel_631_632;
              return (\Phel::getDefinition("phel\\core", "xf-step"))($rf, new class($pred, $args, $__phel_631_632, $rf) extends \Phel\Lang\AbstractFn {
                public const BOUND_TO = "phel\\core\\filter";
                private $pred;
                private $args;
                private $__phel_631_632;
                private $rf;

                public function __construct($pred, $args, $__phel_631_632, $rf) {
                  $this->pred = $pred;
                  $this->args = $args;
                  $this->__phel_631_632 = $__phel_631_632;
                  $this->rf = $rf;
                }

                public function __invoke($result, $input) {
                  $pred = $this->pred;
                  $args = $this->args;
                  $__phel_631_632 = $this->__phel_631_632;
                  $rf = $this->rf;
                  if (($__truthy = ($pred)($input)) !== null && $__truthy !== false) {
                    return ($rf)($result, $input);
                  } else {
                    return $result;
                  }

                }
              });
            }
          };
        } else {
          $__phel_633_634 = $__phel_631_632;
          if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_633_634, 1)) !== null && $__truthy !== false) {
            $coll_635 = (\Phel::getDefinition("phel\\core", "first"))($args);
            $result_636 = (\Phel::getDefinition("phel\\core", "lazy-seq-from-generator"))((\Phel\Lang\Seq::filter($pred, $coll_635)));
            if (($__truthy = (\Phel::getDefinition("phel\\core", "nil?"))($result_636)) !== null && $__truthy !== false) {
              return \Phel::vector([]);
            } else {
              return (\Phel::getDefinition("phel\\core", "with-meta"))($coll_635, $result_636);
            }

          } else {
            throw (new \InvalidArgumentException("filter expects 1 or 2 arguments"));
          }

        }

      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(filter pred & args)\n```\nReturns a lazy sequence of elements where predicate returns true.\n  When called with pred only, returns a transducer.",
      \Phel::keyword("example"), "(filter even? [1 2 3 4 5 6]) ; => (2 4 6)",
      \Phel::keyword("see-also"), \Phel::vector(["remove", "keep", "transduce"]),
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 1818,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 1832,
        \Phel::keyword("column"), 82
      ),
      "min-arity", 1,
      "is-variadic", true,
      "arglists", "[pred & args]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "remove",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\remove";

      public function __invoke($pred, ...$args) {
        $args = \Phel::vector($args);
        $__phel_639_640 = (\Phel::getDefinition("phel\\core", "count"))($args);
        if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_639_640, 0)) !== null && $__truthy !== false) {
          return (\Phel::getDefinition("phel\\core", "filter"))(new class($pred, $args, $__phel_639_640) extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\core\\remove";
            private $pred;
            private $args;
            private $__phel_639_640;

            public function __construct($pred, $args, $__phel_639_640) {
              $this->pred = $pred;
              $this->args = $args;
              $this->__phel_639_640 = $__phel_639_640;
            }

            public function __invoke($__short_fn_1_637) {
              $pred = $this->pred;
              $args = $this->args;
              $__phel_639_640 = $this->__phel_639_640;
              return (\Phel::getDefinition("phel\\core", "not"))(($pred)($__short_fn_1_637));
            }
          });
        } else {
          $__phel_641_642 = $__phel_639_640;
          if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_641_642, 1)) !== null && $__truthy !== false) {
            return (\Phel::getDefinition("phel\\core", "filter"))(new class($pred, $args, $__phel_639_640, $__phel_641_642) extends \Phel\Lang\AbstractFn {
              public const BOUND_TO = "phel\\core\\remove";
              private $pred;
              private $args;
              private $__phel_639_640;
              private $__phel_641_642;

              public function __construct($pred, $args, $__phel_639_640, $__phel_641_642) {
                $this->pred = $pred;
                $this->args = $args;
                $this->__phel_639_640 = $__phel_639_640;
                $this->__phel_641_642 = $__phel_641_642;
              }

              public function __invoke($__short_fn_1_638) {
                $pred = $this->pred;
                $args = $this->args;
                $__phel_639_640 = $this->__phel_639_640;
                $__phel_641_642 = $this->__phel_641_642;
                return (\Phel::getDefinition("phel\\core", "not"))(($pred)($__short_fn_1_638));
              }
            }, (\Phel::getDefinition("phel\\core", "first"))($args));
          } else {
            throw (new \InvalidArgumentException("remove expects 1 or 2 arguments"));
          }

        }

      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(remove pred & args)\n```\nReturns a lazy sequence of elements where predicate returns false.\n   Opposite of filter. When called with pred only, returns a transducer.",
      \Phel::keyword("example"), "(remove even? [1 2 3 4 5 6]) ; => (1 3 5)",
      \Phel::keyword("see-also"), \Phel::vector(["filter", "transduce"]),
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 1834,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 1843,
        \Phel::keyword("column"), 82
      ),
      "min-arity", 1,
      "is-variadic", true,
      "arglists", "[pred & args]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "keep",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\keep";

      public function __invoke($pred, ...$args) {
        $args = \Phel::vector($args);
        $__phel_643_644 = (\Phel::getDefinition("phel\\core", "count"))($args);
        if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_643_644, 0)) !== null && $__truthy !== false) {
          return new class($pred, $args, $__phel_643_644) extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\core\\keep";
            private $pred;
            private $args;
            private $__phel_643_644;

            public function __construct($pred, $args, $__phel_643_644) {
              $this->pred = $pred;
              $this->args = $args;
              $this->__phel_643_644 = $__phel_643_644;
            }

            public function __invoke($rf) {
              $pred = $this->pred;
              $args = $this->args;
              $__phel_643_644 = $this->__phel_643_644;
              return (\Phel::getDefinition("phel\\core", "xf-step"))($rf, new class($pred, $args, $__phel_643_644, $rf) extends \Phel\Lang\AbstractFn {
                public const BOUND_TO = "phel\\core\\keep";
                private $pred;
                private $args;
                private $__phel_643_644;
                private $rf;

                public function __construct($pred, $args, $__phel_643_644, $rf) {
                  $this->pred = $pred;
                  $this->args = $args;
                  $this->__phel_643_644 = $__phel_643_644;
                  $this->rf = $rf;
                }

                public function __invoke($result, $input) {
                  $pred = $this->pred;
                  $args = $this->args;
                  $__phel_643_644 = $this->__phel_643_644;
                  $rf = $this->rf;
                  $v_645 = ($pred)($input);
                  if (($__truthy = (\Phel::getDefinition("phel\\core", "nil?"))($v_645)) !== null && $__truthy !== false) {
                    return $result;
                  } else {
                    return ($rf)($result, $v_645);
                  }

                }
              });
            }
          };
        } else {
          $__phel_646_647 = $__phel_643_644;
          if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_646_647, 1)) !== null && $__truthy !== false) {
            $coll_648 = (\Phel::getDefinition("phel\\core", "first"))($args);
            if (($__truthy = (\Phel::getDefinition("phel\\core", "nil?"))($coll_648)) !== null && $__truthy !== false) {
              return \Phel::vector([]);
            } else {
              $result_649 = (\Phel::getDefinition("phel\\core", "lazy-seq-from-generator"))((\Phel\Lang\Seq::keep($pred, $coll_648)));
              return (\Phel::getDefinition("phel\\core", "with-meta"))($coll_648, (function() use($pred,$args,$__phel_643_644,$__phel_646_647,$coll_648,$result_649) {
                $__phel_650_651 = $result_649;
                if (($__truthy = $__phel_650_651) !== null && $__truthy !== false) {
                  return $__phel_650_651;
                } else {
                  return \Phel::vector([]);
                }

              })());
            }

          } else {
            throw (new \InvalidArgumentException("keep expects 1 or 2 arguments"));
          }

        }

      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(keep pred & args)\n```\nReturns a lazy sequence of non-nil results of applying function to elements.\n  When called with f only, returns a transducer.",
      \Phel::keyword("example"), "(keep |(when (even? \$) (* \$ \$)) [1 2 3 4 5]) ; => (4 16)",
      \Phel::keyword("see-also"), \Phel::vector(["keep-indexed", "filter", "transduce"]),
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 1845,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 1861,
        \Phel::keyword("column"), 80
      ),
      "min-arity", 1,
      "is-variadic", true,
      "arglists", "[pred & args]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "keep-indexed",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\keep_indexed";

      public function __invoke($pred, ...$args) {
        $args = \Phel::vector($args);
        $__phel_652_653 = (\Phel::getDefinition("phel\\core", "count"))($args);
        if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_652_653, 0)) !== null && $__truthy !== false) {
          return new class($pred, $args, $__phel_652_653) extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\core\\keep_indexed";
            private $pred;
            private $args;
            private $__phel_652_653;

            public function __construct($pred, $args, $__phel_652_653) {
              $this->pred = $pred;
              $this->args = $args;
              $this->__phel_652_653 = $__phel_652_653;
            }

            public function __invoke($rf) {
              $pred = $this->pred;
              $args = $this->args;
              $__phel_652_653 = $this->__phel_652_653;
              $iv_654 = (\Phel::getDefinition("phel\\core", "volatile!"))(-1);
              return (\Phel::getDefinition("phel\\core", "xf-step"))($rf, new class($pred, $args, $__phel_652_653, $rf, $iv_654) extends \Phel\Lang\AbstractFn {
                public const BOUND_TO = "phel\\core\\keep_indexed";
                private $pred;
                private $args;
                private $__phel_652_653;
                private $rf;
                private $iv_654;

                public function __construct($pred, $args, $__phel_652_653, $rf, $iv_654) {
                  $this->pred = $pred;
                  $this->args = $args;
                  $this->__phel_652_653 = $__phel_652_653;
                  $this->rf = $rf;
                  $this->iv_654 = $iv_654;
                }

                public function __invoke($result, $input) {
                  $pred = $this->pred;
                  $args = $this->args;
                  $__phel_652_653 = $this->__phel_652_653;
                  $rf = $this->rf;
                  $iv_654 = $this->iv_654;
                  $i_655 = (\Phel::getDefinition("phel\\core", "vreset!"))($iv_654, ((\Phel::getDefinition("phel\\core", "deref"))($iv_654) + 1));
                  $v_656 = ($pred)($i_655, $input);
                  if (($__truthy = (\Phel::getDefinition("phel\\core", "nil?"))($v_656)) !== null && $__truthy !== false) {
                    return $result;
                  } else {
                    return ($rf)($result, $v_656);
                  }

                }
              });
            }
          };
        } else {
          $__phel_657_658 = $__phel_652_653;
          if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_657_658, 1)) !== null && $__truthy !== false) {
            $coll_659 = (\Phel::getDefinition("phel\\core", "first"))($args);
            if (($__truthy = (\Phel::getDefinition("phel\\core", "nil?"))($coll_659)) !== null && $__truthy !== false) {
              return \Phel::vector([]);
            } else {
              $result_660 = (\Phel::getDefinition("phel\\core", "lazy-seq-from-generator"))((\Phel\Lang\Seq::keepIndexed($pred, $coll_659)));
              return (\Phel::getDefinition("phel\\core", "with-meta"))($coll_659, (function() use($pred,$args,$__phel_652_653,$__phel_657_658,$coll_659,$result_660) {
                $__phel_661_662 = $result_660;
                if (($__truthy = $__phel_661_662) !== null && $__truthy !== false) {
                  return $__phel_661_662;
                } else {
                  return \Phel::vector([]);
                }

              })());
            }

          } else {
            throw (new \InvalidArgumentException("keep-indexed expects 1 or 2 arguments"));
          }

        }

      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(keep-indexed pred & args)\n```\nReturns a lazy sequence of non-nil results of `(pred i x)`.\n  When called with f only, returns a transducer.",
      \Phel::keyword("example"), "(keep-indexed |(when (even? \$1) \$2) [\"a\" \"b\" \"c\" \"d\"]) ; => (\"a\" \"c\")",
      \Phel::keyword("see-also"), \Phel::vector(["keep", "map-indexed", "transduce"]),
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 1863,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 1881,
        \Phel::keyword("column"), 88
      ),
      "min-arity", 1,
      "is-variadic", true,
      "arglists", "[pred & args]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "find",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\find";

      public function __invoke($pred, $coll) {
        $s_663 = $coll;
        while (true) {
          if (($__truthy = (\Phel::getDefinition("phel\\core", "empty?"))($s_663)) !== null && $__truthy !== false) {
            return null;
          } else {
            if (($__truthy = ($pred)((\Phel::getDefinition("phel\\core", "first"))($s_663))) !== null && $__truthy !== false) {
              return (\Phel::getDefinition("phel\\core", "first"))($s_663);
            } else {
              $__phel_664 = (\Phel::getDefinition("phel\\core", "next"))($s_663);
              $s_663 = $__phel_664;
              continue;

            }

          }
          break;
        }
      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(find pred coll)\n```\nReturns the first item in `coll` where `(pred item)` evaluates to true.",
      \Phel::keyword("example"), "(find |(> \$ 5) [1 2 3 6 7 8]) ; => 6",
      \Phel::keyword("see-also"), \Phel::vector(["find-index", "filter", "some?"]),
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 1883,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 1893,
        \Phel::keyword("column"), 28
      ),
      "min-arity", 2,
      "is-variadic", false,
      "arglists", "[pred coll]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "find-index",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\find_index";

      public function __invoke($pred, $coll) {
        $s_666 = $coll;
        $i_667 = 0;
        while (true) {
          if (($__truthy = (\Phel::getDefinition("phel\\core", "empty?"))($s_666)) !== null && $__truthy !== false) {
            return null;
          } else {
            if (($__truthy = ($pred)((\Phel::getDefinition("phel\\core", "first"))($s_666))) !== null && $__truthy !== false) {
              return $i_667;
            } else {
              $__phel_668 = (\Phel::getDefinition("phel\\core", "next"))($s_666);
              $__phel_669 = ($i_667 + 1);
              $s_666 = $__phel_668;
              $i_667 = $__phel_669;
              continue;

            }

          }
          break;
        }
      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(find-index pred coll)\n```\nReturns the index of the first item in `coll` where `(pred item)` evaluates to true.",
      \Phel::keyword("example"), "(find-index |(> \$ 5) [1 2 3 6 7 8]) ; => 3",
      \Phel::keyword("see-also"), \Phel::vector(["find", "filter"]),
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 1895,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 1906,
        \Phel::keyword("column"), 40
      ),
      "min-arity", 2,
      "is-variadic", false,
      "arglists", "[pred coll]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "distinct",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\distinct";

      public function __invoke(...$args) {
        $args = \Phel::vector($args);
        $__phel_672_673 = (\Phel::getDefinition("phel\\core", "count"))($args);
        if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_672_673, 0)) !== null && $__truthy !== false) {
          return new class($args, $__phel_672_673) extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\core\\distinct";
            private $args;
            private $__phel_672_673;

            public function __construct($args, $__phel_672_673) {
              $this->args = $args;
              $this->__phel_672_673 = $__phel_672_673;
            }

            public function __invoke($rf) {
              $args = $this->args;
              $__phel_672_673 = $this->__phel_672_673;
              $seen_674 = (\Phel::getDefinition("phel\\core", "volatile!"))((\Phel::getDefinition("phel\\core", "hash-set"))());
              return (\Phel::getDefinition("phel\\core", "xf-step"))($rf, new class($args, $__phel_672_673, $rf, $seen_674) extends \Phel\Lang\AbstractFn {
                public const BOUND_TO = "phel\\core\\distinct";
                private $args;
                private $__phel_672_673;
                private $rf;
                private $seen_674;

                public function __construct($args, $__phel_672_673, $rf, $seen_674) {
                  $this->args = $args;
                  $this->__phel_672_673 = $__phel_672_673;
                  $this->rf = $rf;
                  $this->seen_674 = $seen_674;
                }

                public function __invoke($result, $input) {
                  $args = $this->args;
                  $__phel_672_673 = $this->__phel_672_673;
                  $rf = $this->rf;
                  $seen_674 = $this->seen_674;
                  if (($__truthy = (\Phel::getDefinition("phel\\core", "contains?"))((\Phel::getDefinition("phel\\core", "deref"))($seen_674), $input)) !== null && $__truthy !== false) {
                    return $result;
                  } else {
                    (\Phel::getDefinition("phel\\core", "vswap!"))($seen_674, \Phel::getDefinition("phel\\core", "conj"), $input);
                    return ($rf)($result, $input);
                  }

                }
              });
            }
          };
        } else {
          $__phel_675_676 = $__phel_672_673;
          if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_675_676, 1)) !== null && $__truthy !== false) {
            $coll_677 = (\Phel::getDefinition("phel\\core", "first"))($args);
            if (($__truthy = (\Phel::getDefinition("phel\\core", "nil?"))($coll_677)) !== null && $__truthy !== false) {
              return \Phel::vector([]);
            } else {
              $result_678 = (\Phel::getDefinition("phel\\core", "lazy-seq-from-generator"))((\Phel\Lang\Seq::distinct($coll_677)));
              return (\Phel::getDefinition("phel\\core", "with-meta"))($coll_677, (function() use($args,$__phel_672_673,$__phel_675_676,$coll_677,$result_678) {
                $__phel_679_680 = $result_678;
                if (($__truthy = $__phel_679_680) !== null && $__truthy !== false) {
                  return $__phel_679_680;
                } else {
                  return \Phel::vector([]);
                }

              })());
            }

          } else {
            throw (new \InvalidArgumentException("distinct expects 0 or 1 arguments"));
          }

        }

      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(distinct & args)\n```\nReturns a lazy sequence with duplicated values removed in `coll`.\n  When called with no args, returns a transducer.",
      \Phel::keyword("example"), "(distinct [1 2 1 3 2 4 3]) ; => (1 2 3 4)",
      \Phel::keyword("see-also"), \Phel::vector(["frequencies", "set", "dedupe", "transduce"]),
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 1908,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 1926,
        \Phel::keyword("column"), 84
      ),
      "min-arity", 0,
      "is-variadic", true,
      "arglists", "[& args]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "reverse",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\reverse";

      public function __invoke($coll) {
        $arr_681 = (($__truthy = (\Phel::getDefinition("phel\\core", "string?"))($coll)) !== null && $__truthy !== false ? mb_str_split($coll) : (\Phel::getDefinition("phel\\core", "to-php-array"))($coll));
        $result_682 = (\Phel::getDefinition("phel\\core", "vector"))(...((array_reverse($arr_681)) ?? []));
        return (\Phel::getDefinition("phel\\core", "with-meta"))($coll, $result_682);
      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(reverse coll)\n```\nReverses the order of the elements in the given sequence.",
      \Phel::keyword("example"), "(reverse [1 2 3 4]) ; => [4 3 2 1]",
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 1929,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 1937,
        \Phel::keyword("column"), 29
      ),
      "min-arity", 1,
      "is-variadic", false,
      "arglists", "[coll]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "interleave",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\interleave";

      public function __invoke(...$colls) {
        $colls = \Phel::vector($colls);
        if (($__truthy = (\Phel::getDefinition("phel\\core", "empty?"))($colls)) !== null && $__truthy !== false) {
          return \Phel::vector([]);
        } else {
          $first_coll_685 = (\Phel::getDefinition("phel\\core", "first"))($colls);
          $size_686 = (\Phel::getDefinition("phel\\core", "count"))($first_coll_685);
          $result_687 = (function() use($colls,$first_coll_685,$size_686) {
            $i_688 = 0;
            $res_689 = \Phel::vector([]);
            while (true) {
              if (($__truthy = ($size_686 <= $i_688)) !== null && $__truthy !== false) {
                return $res_689;
              } else {
                $__phel_690 = ($i_688 + 1);
                $__phel_691 = (\Phel::getDefinition("phel\\core", "reduce"))(new class($colls, $first_coll_685, $size_686, $i_688, $res_689) extends \Phel\Lang\AbstractFn {
                  public const BOUND_TO = "phel\\core\\interleave.result";
                  private $colls;
                  private $first_coll_685;
                  private $size_686;
                  private $i_688;
                  private $res_689;

                  public function __construct($colls, $first_coll_685, $size_686, $i_688, $res_689) {
                    $this->colls = $colls;
                    $this->first_coll_685 = $first_coll_685;
                    $this->size_686 = $size_686;
                    $this->i_688 = $i_688;
                    $this->res_689 = $res_689;
                  }

                  public function __invoke($__short_fn_1_683, $__short_fn_2_684) {
                    $colls = $this->colls;
                    $first_coll_685 = $this->first_coll_685;
                    $size_686 = $this->size_686;
                    $i_688 = $this->i_688;
                    $res_689 = $this->res_689;
                    return (\Phel::getDefinition("phel\\core", "conj"))($__short_fn_1_683, (\Phel::getDefinition("phel\\core", "get"))($__short_fn_2_684, $i_688));
                  }
                }, $res_689, $colls);
                $i_688 = $__phel_690;
                $res_689 = $__phel_691;
                continue;

              }
              break;
            }
          })();
          return (\Phel::getDefinition("phel\\core", "with-meta"))($first_coll_685, $result_687);
        }

      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(interleave & colls)\n```\nReturns a vector with the first items of each col, then the second items, etc.",
      \Phel::keyword("example"), "(interleave [1 2 3] [:a :b :c]) ; => [1 :a 2 :b 3 :c]",
      \Phel::keyword("see-also"), \Phel::vector(["interpose"]),
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 1939,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 1954,
        \Phel::keyword("column"), 38
      ),
      "min-arity", 0,
      "is-variadic", true,
      "arglists", "[& colls]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "interpose",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\interpose";

      public function __invoke($sep, $coll) {
        $result_694 = (\Phel::getDefinition("phel\\core", "persistent"))((function() use($sep,$coll) {
          $__phel_695_699 = (\Phel::getDefinition("phel\\core", "var"))((\Phel::getDefinition("phel\\core", "transient"))(\Phel::vector([])));
          foreach (\Phel\Lang\Seq::toIterable($coll) as $__phel_698 => $__phel_697) {
            $__phel_700_705 = \Phel::vector([$__phel_698, $__phel_697]);
            $__phel_701_706 = (\Phel::getDefinition("phel\\core", "first"))($__phel_700_705);
            $__phel_702_707 = (\Phel::getDefinition("phel\\core", "next"))($__phel_700_705);
            $k_708 = $__phel_701_706;
            $__phel_703_709 = (\Phel::getDefinition("phel\\core", "first"))($__phel_702_707);
            $__phel_704_710 = (\Phel::getDefinition("phel\\core", "next"))($__phel_702_707);
            $v_711 = $__phel_703_709;
            (\Phel::getDefinition("phel\\core", "swap!"))($__phel_695_699, new class($sep, $coll, $__phel_695_699, $__phel_697, $__phel_698, $__phel_700_705, $__phel_701_706, $__phel_702_707, $k_708, $__phel_703_709, $__phel_704_710, $v_711) extends \Phel\Lang\AbstractFn {
              public const BOUND_TO = "phel\\core\\interpose.result";
              private $sep;
              private $coll;
              private $__phel_695_699;
              private $__phel_697;
              private $__phel_698;
              private $__phel_700_705;
              private $__phel_701_706;
              private $__phel_702_707;
              private $k_708;
              private $__phel_703_709;
              private $__phel_704_710;
              private $v_711;

              public function __construct($sep, $coll, $__phel_695_699, $__phel_697, $__phel_698, $__phel_700_705, $__phel_701_706, $__phel_702_707, $k_708, $__phel_703_709, $__phel_704_710, $v_711) {
                $this->sep = $sep;
                $this->coll = $coll;
                $this->__phel_695_699 = $__phel_695_699;
                $this->__phel_697 = $__phel_697;
                $this->__phel_698 = $__phel_698;
                $this->__phel_700_705 = $__phel_700_705;
                $this->__phel_701_706 = $__phel_701_706;
                $this->__phel_702_707 = $__phel_702_707;
                $this->k_708 = $k_708;
                $this->__phel_703_709 = $__phel_703_709;
                $this->__phel_704_710 = $__phel_704_710;
                $this->v_711 = $v_711;
              }

              public function __invoke($res) {
                $sep = $this->sep;
                $coll = $this->coll;
                $__phel_695_699 = $this->__phel_695_699;
                $__phel_697 = $this->__phel_697;
                $__phel_698 = $this->__phel_698;
                $__phel_700_705 = $this->__phel_700_705;
                $__phel_701_706 = $this->__phel_701_706;
                $__phel_702_707 = $this->__phel_702_707;
                $k_708 = $this->k_708;
                $__phel_703_709 = $this->__phel_703_709;
                $__phel_704_710 = $this->__phel_704_710;
                $v_711 = $this->v_711;
                if (($__truthy = ($k_708 > 0)) !== null && $__truthy !== false) {
                  (\Phel::getDefinition("phel\\core", "conj"))($res, $sep, $v_711);
                } else {

                }

                return (\Phel::getDefinition("phel\\core", "conj"))($res, $v_711);
              }
            });
          }
          return (\Phel::getDefinition("phel\\core", "deref"))($__phel_695_699);
        })());
        return (\Phel::getDefinition("phel\\core", "with-meta"))($coll, $result_694);
      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(interpose sep coll)\n```\nReturns a vector of elements separated by `sep`.",
      \Phel::keyword("example"), "(interpose :x [1 2 3 4]) ; => [1 :x 2 :x 3 :x 4]",
      \Phel::keyword("see-also"), \Phel::vector(["interleave"]),
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 1956,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 1968,
        \Phel::keyword("column"), 29
      ),
      "min-arity", 2,
      "is-variadic", false,
      "arglists", "[sep coll]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "frequencies",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\frequencies";

      public function __invoke($coll) {
        $result_712 = (function() use($coll) {
          $__phel_713_716 = (\Phel::getDefinition("phel\\core", "var"))(\Phel::map());
          foreach (\Phel\Lang\Seq::toIterable($coll) as $__phel_715) {
            $x_717 = $__phel_715;
            (\Phel::getDefinition("phel\\core", "swap!"))($__phel_713_716, new class($coll, $__phel_713_716, $__phel_715, $x_717) extends \Phel\Lang\AbstractFn {
              public const BOUND_TO = "phel\\core\\frequencies.result";
              private $coll;
              private $__phel_713_716;
              private $__phel_715;
              private $x_717;

              public function __construct($coll, $__phel_713_716, $__phel_715, $x_717) {
                $this->coll = $coll;
                $this->__phel_713_716 = $__phel_713_716;
                $this->__phel_715 = $__phel_715;
                $this->x_717 = $x_717;
              }

              public function __invoke($res) {
                $coll = $this->coll;
                $__phel_713_716 = $this->__phel_713_716;
                $__phel_715 = $this->__phel_715;
                $x_717 = $this->x_717;
                $n_718 = (\Phel::getDefinition("phel\\core", "get"))($res, $x_717, 0);
                return (\Phel::getDefinition("phel\\core", "assoc"))($res, $x_717, (1 + $n_718));
              }
            });
          }
          return (\Phel::getDefinition("phel\\core", "deref"))($__phel_713_716);
        })();
        return (\Phel::getDefinition("phel\\core", "with-meta"))($coll, $result_712);
      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(frequencies coll)\n```\nReturns a map from distinct items in `coll` to the number of times they appear.\n\n  Works with vectors, lists, sets, and strings.",
      \Phel::keyword("example"), "(frequencies [:a :b :a :c :b :a]) ; => {:a 3 :b 2 :c 1}",
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 1970,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 1980,
        \Phel::keyword("column"), 29
      ),
      "min-arity", 1,
      "is-variadic", false,
      "arglists", "[coll]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "keys",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\keys";

      public function __invoke($coll) {
        $result_719 = (function() use($coll) {
          $__phel_720_724 = (\Phel::getDefinition("phel\\core", "var"))(\Phel::vector([]));
          foreach (\Phel\Lang\Seq::toIterable($coll) as $__phel_723 => $__phel_722) {
            $k_725 = $__phel_723;
            (\Phel::getDefinition("phel\\core", "swap!"))($__phel_720_724, new class($coll, $__phel_720_724, $__phel_722, $__phel_723, $k_725) extends \Phel\Lang\AbstractFn {
              public const BOUND_TO = "phel\\core\\keys.result";
              private $coll;
              private $__phel_720_724;
              private $__phel_722;
              private $__phel_723;
              private $k_725;

              public function __construct($coll, $__phel_720_724, $__phel_722, $__phel_723, $k_725) {
                $this->coll = $coll;
                $this->__phel_720_724 = $__phel_720_724;
                $this->__phel_722 = $__phel_722;
                $this->__phel_723 = $__phel_723;
                $this->k_725 = $k_725;
              }

              public function __invoke($__phel_721) {
                $coll = $this->coll;
                $__phel_720_724 = $this->__phel_720_724;
                $__phel_722 = $this->__phel_722;
                $__phel_723 = $this->__phel_723;
                $k_725 = $this->k_725;
                return (\Phel::getDefinition("phel\\core", "conj"))($__phel_721, $k_725);
              }
            });
          }
          return (\Phel::getDefinition("phel\\core", "deref"))($__phel_720_724);
        })();
        return (\Phel::getDefinition("phel\\core", "with-meta"))($coll, $result_719);
      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(keys coll)\n```\nReturns a sequence of all keys in a map.",
      \Phel::keyword("example"), "(keys {:a 1 :b 2}) ; => (:a :b)",
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 1982,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 1987,
        \Phel::keyword("column"), 29
      ),
      "min-arity", 1,
      "is-variadic", false,
      "arglists", "[coll]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "values",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\values";

      public function __invoke($coll) {
        $result_726 = (function() use($coll) {
          $__phel_727_730 = (\Phel::getDefinition("phel\\core", "var"))(\Phel::vector([]));
          foreach (\Phel\Lang\Seq::toIterable($coll) as $__phel_729) {
            $x_731 = $__phel_729;
            (\Phel::getDefinition("phel\\core", "swap!"))($__phel_727_730, new class($coll, $__phel_727_730, $__phel_729, $x_731) extends \Phel\Lang\AbstractFn {
              public const BOUND_TO = "phel\\core\\values.result";
              private $coll;
              private $__phel_727_730;
              private $__phel_729;
              private $x_731;

              public function __construct($coll, $__phel_727_730, $__phel_729, $x_731) {
                $this->coll = $coll;
                $this->__phel_727_730 = $__phel_727_730;
                $this->__phel_729 = $__phel_729;
                $this->x_731 = $x_731;
              }

              public function __invoke($__phel_728) {
                $coll = $this->coll;
                $__phel_727_730 = $this->__phel_727_730;
                $__phel_729 = $this->__phel_729;
                $x_731 = $this->x_731;
                return (\Phel::getDefinition("phel\\core", "conj"))($__phel_728, $x_731);
              }
            });
          }
          return (\Phel::getDefinition("phel\\core", "deref"))($__phel_727_730);
        })();
        return (\Phel::getDefinition("phel\\core", "with-meta"))($coll, $result_726);
      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(values coll)\n```\nReturns a sequence of all values in a map.",
      \Phel::keyword("example"), "(values {:a 1 :b 2}) ; => (1 2)",
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 1989,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 1994,
        \Phel::keyword("column"), 29
      ),
      "min-arity", 1,
      "is-variadic", false,
      "arglists", "[coll]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "pairs",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\pairs";

      public function __invoke($coll) {
        $result_732 = (function() use($coll) {
          $__phel_733_737 = (\Phel::getDefinition("phel\\core", "var"))(\Phel::vector([]));
          foreach (\Phel\Lang\Seq::toIterable($coll) as $__phel_736 => $__phel_735) {
            $p_738 = \Phel::vector([$__phel_736, $__phel_735]);
            (\Phel::getDefinition("phel\\core", "swap!"))($__phel_733_737, new class($coll, $__phel_733_737, $__phel_735, $__phel_736, $p_738) extends \Phel\Lang\AbstractFn {
              public const BOUND_TO = "phel\\core\\pairs.result";
              private $coll;
              private $__phel_733_737;
              private $__phel_735;
              private $__phel_736;
              private $p_738;

              public function __construct($coll, $__phel_733_737, $__phel_735, $__phel_736, $p_738) {
                $this->coll = $coll;
                $this->__phel_733_737 = $__phel_733_737;
                $this->__phel_735 = $__phel_735;
                $this->__phel_736 = $__phel_736;
                $this->p_738 = $p_738;
              }

              public function __invoke($__phel_734) {
                $coll = $this->coll;
                $__phel_733_737 = $this->__phel_733_737;
                $__phel_735 = $this->__phel_735;
                $__phel_736 = $this->__phel_736;
                $p_738 = $this->p_738;
                return (\Phel::getDefinition("phel\\core", "conj"))($__phel_734, $p_738);
              }
            });
          }
          return (\Phel::getDefinition("phel\\core", "deref"))($__phel_733_737);
        })();
        return (\Phel::getDefinition("phel\\core", "with-meta"))($coll, $result_732);
      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(pairs coll)\n```\nGets the pairs of an associative data structure.",
      \Phel::keyword("example"), "(pairs {:a 1 :b 2}) ; => ([:a 1] [:b 2])",
      \Phel::keyword("see-also"), \Phel::vector(["keys", "values", "kvs"]),
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 1996,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2002,
        \Phel::keyword("column"), 29
      ),
      "min-arity", 1,
      "is-variadic", false,
      "arglists", "[coll]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "kvs",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\kvs";

      public function __invoke($coll) {
        $result_739 = (\Phel::getDefinition("phel\\core", "persistent"))((function() use($coll) {
          $__phel_740_744 = (\Phel::getDefinition("phel\\core", "var"))((\Phel::getDefinition("phel\\core", "transient"))(\Phel::vector([])));
          foreach (\Phel\Lang\Seq::toIterable($coll) as $__phel_743 => $__phel_742) {
            $__phel_745_750 = \Phel::vector([$__phel_743, $__phel_742]);
            $__phel_746_751 = (\Phel::getDefinition("phel\\core", "first"))($__phel_745_750);
            $__phel_747_752 = (\Phel::getDefinition("phel\\core", "next"))($__phel_745_750);
            $k_753 = $__phel_746_751;
            $__phel_748_754 = (\Phel::getDefinition("phel\\core", "first"))($__phel_747_752);
            $__phel_749_755 = (\Phel::getDefinition("phel\\core", "next"))($__phel_747_752);
            $v_756 = $__phel_748_754;
            (\Phel::getDefinition("phel\\core", "swap!"))($__phel_740_744, new class($coll, $__phel_740_744, $__phel_742, $__phel_743, $__phel_745_750, $__phel_746_751, $__phel_747_752, $k_753, $__phel_748_754, $__phel_749_755, $v_756) extends \Phel\Lang\AbstractFn {
              public const BOUND_TO = "phel\\core\\kvs.result";
              private $coll;
              private $__phel_740_744;
              private $__phel_742;
              private $__phel_743;
              private $__phel_745_750;
              private $__phel_746_751;
              private $__phel_747_752;
              private $k_753;
              private $__phel_748_754;
              private $__phel_749_755;
              private $v_756;

              public function __construct($coll, $__phel_740_744, $__phel_742, $__phel_743, $__phel_745_750, $__phel_746_751, $__phel_747_752, $k_753, $__phel_748_754, $__phel_749_755, $v_756) {
                $this->coll = $coll;
                $this->__phel_740_744 = $__phel_740_744;
                $this->__phel_742 = $__phel_742;
                $this->__phel_743 = $__phel_743;
                $this->__phel_745_750 = $__phel_745_750;
                $this->__phel_746_751 = $__phel_746_751;
                $this->__phel_747_752 = $__phel_747_752;
                $this->k_753 = $k_753;
                $this->__phel_748_754 = $__phel_748_754;
                $this->__phel_749_755 = $__phel_749_755;
                $this->v_756 = $v_756;
              }

              public function __invoke($res) {
                $coll = $this->coll;
                $__phel_740_744 = $this->__phel_740_744;
                $__phel_742 = $this->__phel_742;
                $__phel_743 = $this->__phel_743;
                $__phel_745_750 = $this->__phel_745_750;
                $__phel_746_751 = $this->__phel_746_751;
                $__phel_747_752 = $this->__phel_747_752;
                $k_753 = $this->k_753;
                $__phel_748_754 = $this->__phel_748_754;
                $__phel_749_755 = $this->__phel_749_755;
                $v_756 = $this->v_756;
                (\Phel::getDefinition("phel\\core", "conj"))($res, $k_753);
                return (\Phel::getDefinition("phel\\core", "conj"))($res, $v_756);
              }
            });
          }
          return (\Phel::getDefinition("phel\\core", "deref"))($__phel_740_744);
        })());
        return (\Phel::getDefinition("phel\\core", "with-meta"))($coll, $result_739);
      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(kvs coll)\n```\nReturns a vector of key-value pairs like `[k1 v1 k2 v2 k3 v3 ...]`.",
      \Phel::keyword("example"), "(kvs {:a 1 :b 2}) ; => [:a 1 :b 2]",
      \Phel::keyword("see-also"), \Phel::vector(["pairs", "keys", "values"]),
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2004,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2015,
        \Phel::keyword("column"), 29
      ),
      "min-arity", 1,
      "is-variadic", false,
      "arglists", "[coll]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "php-array-to-map",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\php_array_to_map";

      public function __invoke($arr) {
        $res_757 = (\Phel::getDefinition("phel\\core", "transient"))(\Phel::map());
        foreach (\Phel\Lang\Seq::toIterable($arr) as $k => $v) {
          (\Phel::getDefinition("phel\\core", "assoc"))($res_757, $k, $v);
        }
        return (\Phel::getDefinition("phel\\core", "persistent"))($res_757);
      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(php-array-to-map arr)\n```\nConverts a PHP Array to a Phel map.",
      \Phel::keyword("example"), "(php-array-to-map (php-associative-array \"a\" 1 \"b\" 2)) ; => {\"a\" 1 \"b\" 2}",
      \Phel::keyword("see-also"), \Phel::vector(["to-php-array", "php->phel"]),
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2017,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2025,
        \Phel::keyword("column"), 22
      ),
      "min-arity", 1,
      "is-variadic", false,
      "arglists", "[arr]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "phel->php",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\phel_>php";

      public function __invoke($x) {
        if (($__truthy = (\Phel::getDefinition("phel\\core", "php-array?"))($x)) !== null && $__truthy !== false) {
          $arr_758 = array();
          foreach (\Phel\Lang\Seq::toIterable($x) as $k => $v) {
            ($arr_758)[($k)] = (\Phel::getDefinition("phel\\core", "phel->php"))($v);
          }
          return $arr_758;
        } else {
          if (($__truthy = (\Phel::getDefinition("phel\\core", "indexed?"))($x)) !== null && $__truthy !== false) {
            $arr_759 = array();
            foreach (\Phel\Lang\Seq::toIterable($x) as $v) {
              ($arr_759)[] = (\Phel::getDefinition("phel\\core", "phel->php"))($v);
            }
            return $arr_759;
          } else {
            if (($__truthy = (\Phel::getDefinition("phel\\core", "associative?"))($x)) !== null && $__truthy !== false) {
              $arr_760 = array();
              foreach (\Phel\Lang\Seq::toIterable($x) as $k => $v) {
                ($arr_760)[((\Phel::getDefinition("phel\\core", "name"))($k))] = (\Phel::getDefinition("phel\\core", "phel->php"))($v);
              }
              return $arr_760;
            } else {
              if (($__truthy = (\Phel::getDefinition("phel\\core", "set?"))($x)) !== null && $__truthy !== false) {
                $arr_761 = array();
                foreach (\Phel\Lang\Seq::toIterable($x) as $v) {
                  ($arr_761)[] = (\Phel::getDefinition("phel\\core", "phel->php"))($v);
                }
                return $arr_761;
              } else {
                if (($__truthy = true) !== null && $__truthy !== false) {
                  return $x;
                } else {
                  return null;
                }

              }

            }

          }

        }

      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(phel->php x)\n```\nRecursively converts a Phel data structure to a PHP array.",
      \Phel::keyword("example"), "(phel->php {:a [1 2 3] :b {:c 4}}) ; => (PHP array [\"a\" => [1, 2, 3], \"b\" => [\"c\" => 4]])",
      \Phel::keyword("see-also"), \Phel::vector(["php->phel"]),
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2028,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2058,
        \Phel::keyword("column"), 12
      ),
      "min-arity", 1,
      "is-variadic", false,
      "arglists", "[x]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "php->phel",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\php_>phel";

      public function __invoke($x) {
        if (($__truthy = (\Phel::getDefinition("phel\\core", "indexed-php-array?"))($x)) !== null && $__truthy !== false) {
          $res_762 = (\Phel::getDefinition("phel\\core", "transient"))(\Phel::vector([]));
          foreach (\Phel\Lang\Seq::toIterable($x) as $v) {
            (\Phel::getDefinition("phel\\core", "conj"))($res_762, (\Phel::getDefinition("phel\\core", "php->phel"))($v));
          }
          return (\Phel::getDefinition("phel\\core", "persistent"))($res_762);
        } else {
          if (($__truthy = (\Phel::getDefinition("phel\\core", "php-array?"))($x)) !== null && $__truthy !== false) {
            $res_763 = (\Phel::getDefinition("phel\\core", "transient"))(\Phel::map());
            foreach (\Phel\Lang\Seq::toIterable($x) as $k => $v) {
              (\Phel::getDefinition("phel\\core", "assoc"))($res_763, $k, (\Phel::getDefinition("phel\\core", "php->phel"))($v));
            }
            return (\Phel::getDefinition("phel\\core", "persistent"))($res_763);
          } else {
            if (($__truthy = true) !== null && $__truthy !== false) {
              return $x;
            } else {
              return null;
            }

          }

        }

      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(php->phel x)\n```\nRecursively converts a PHP array to Phel data structures.\n\n  Indexed PHP arrays become vectors, associative PHP arrays become maps.",
      \Phel::keyword("example"), "(php->phel (php-associative-array \"a\" 1 \"b\" 2)) ; => {\"a\" 1 \"b\" 2}",
      \Phel::keyword("see-also"), \Phel::vector(["phel->php"]),
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2060,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2080,
        \Phel::keyword("column"), 12
      ),
      "min-arity", 1,
      "is-variadic", false,
      "arglists", "[x]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "contains-value?",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\contains_value?";

      public function __invoke($coll, $val) {
        return (\Phel::getDefinition("phel\\core", "some?"))(new class($coll, $val) extends \Phel\Lang\AbstractFn {
          public const BOUND_TO = "phel\\core\\contains_value?";
          private $coll;
          private $val;

          public function __construct($coll, $val) {
            $this->coll = $coll;
            $this->val = $val;
          }

          public function __invoke($__short_fn_1_764) {
            $coll = $this->coll;
            $val = $this->val;
            return (\Phel::getDefinition("phel\\core", "="))($__short_fn_1_764, $val);
          }
        }, (\Phel::getDefinition("phel\\core", "values"))($coll));
      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(contains-value? coll val)\n```\nReturns true if the value is present in the given collection, otherwise returns false.",
      \Phel::keyword("example"), "(contains-value? {:a 1 :b 2} 2) ; => true",
      \Phel::keyword("see-also"), \Phel::vector(["contains?", "some?"]),
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2082,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2087,
        \Phel::keyword("column"), 35
      ),
      "min-arity", 2,
      "is-variadic", false,
      "arglists", "[coll val]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "sort",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\sort";

      public function __invoke($coll, ...$__phel_765) {
        $__phel_765 = \Phel::vector($__phel_765);
        $__phel_766_769 = $__phel_765;
        $__phel_767_770 = (\Phel::getDefinition("phel\\core", "first"))($__phel_766_769);
        $__phel_768_771 = (\Phel::getDefinition("phel\\core", "next"))($__phel_766_769);
        $comp_772 = $__phel_767_770;
        $php_array_773 = (\Phel::getDefinition("phel\\core", "to-php-array"))($coll);
        usort($php_array_773, (function() use($coll,$__phel_765,$__phel_766_769,$__phel_767_770,$__phel_768_771,$comp_772,$php_array_773) {
          $__phel_774_775 = $comp_772;
          if (($__truthy = $__phel_774_775) !== null && $__truthy !== false) {
            return $__phel_774_775;
          } else {
            return \Phel::getDefinition("phel\\core", "compare");
          }

        })());
        return (\Phel::getDefinition("phel\\core", "with-meta"))($coll, (\Phel::getDefinition("phel\\core", "vector"))(...(($php_array_773) ?? [])));
      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(sort coll & [comp])\n```\nReturns a sorted vector. If no comparator is supplied compare is used.",
      \Phel::keyword("example"), "(sort [3 1 4 1 5 9 2 6]) ; => [1 1 2 3 4 5 6 9]",
      \Phel::keyword("see-also"), \Phel::vector(["sort-by", "compare"]),
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2089,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2096,
        \Phel::keyword("column"), 47
      ),
      "min-arity", 1,
      "is-variadic", true,
      "arglists", "[coll & __phel_765]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "sort-by",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\sort_by";

      public function __invoke($keyfn, $coll, ...$__phel_778) {
        $__phel_778 = \Phel::vector($__phel_778);
        $__phel_779_782 = $__phel_778;
        $__phel_780_783 = (\Phel::getDefinition("phel\\core", "first"))($__phel_779_782);
        $__phel_781_784 = (\Phel::getDefinition("phel\\core", "next"))($__phel_779_782);
        $comp_785 = $__phel_780_783;
        $php_array_786 = (\Phel::getDefinition("phel\\core", "to-php-array"))($coll);
        $cmp_787 = (function() use($keyfn,$coll,$__phel_778,$__phel_779_782,$__phel_780_783,$__phel_781_784,$comp_785,$php_array_786) {
          $__phel_788_789 = $comp_785;
          if (($__truthy = $__phel_788_789) !== null && $__truthy !== false) {
            return $__phel_788_789;
          } else {
            return \Phel::getDefinition("phel\\core", "compare");
          }

        })();
        usort($php_array_786, new class($keyfn, $coll, $__phel_778, $__phel_779_782, $__phel_780_783, $__phel_781_784, $comp_785, $php_array_786, $cmp_787) extends \Phel\Lang\AbstractFn {
          public const BOUND_TO = "phel\\core\\sort_by";
          private $keyfn;
          private $coll;
          private $__phel_778;
          private $__phel_779_782;
          private $__phel_780_783;
          private $__phel_781_784;
          private $comp_785;
          private $php_array_786;
          private $cmp_787;

          public function __construct($keyfn, $coll, $__phel_778, $__phel_779_782, $__phel_780_783, $__phel_781_784, $comp_785, $php_array_786, $cmp_787) {
            $this->keyfn = $keyfn;
            $this->coll = $coll;
            $this->__phel_778 = $__phel_778;
            $this->__phel_779_782 = $__phel_779_782;
            $this->__phel_780_783 = $__phel_780_783;
            $this->__phel_781_784 = $__phel_781_784;
            $this->comp_785 = $comp_785;
            $this->php_array_786 = $php_array_786;
            $this->cmp_787 = $cmp_787;
          }

          public function __invoke($__short_fn_1_776, $__short_fn_2_777) {
            $keyfn = $this->keyfn;
            $coll = $this->coll;
            $__phel_778 = $this->__phel_778;
            $__phel_779_782 = $this->__phel_779_782;
            $__phel_780_783 = $this->__phel_780_783;
            $__phel_781_784 = $this->__phel_781_784;
            $comp_785 = $this->comp_785;
            $php_array_786 = $this->php_array_786;
            $cmp_787 = $this->cmp_787;
            return ($cmp_787)(($keyfn)($__short_fn_1_776), ($keyfn)($__short_fn_2_777));
          }
        });
        return (\Phel::getDefinition("phel\\core", "with-meta"))($coll, (\Phel::getDefinition("phel\\core", "vector"))(...(($php_array_786) ?? [])));
      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(sort-by keyfn coll & [comp])\n```\nReturns a sorted vector where the sort order is determined by comparing `(keyfn item)`.\n\n  If no comparator is supplied compare is used.",
      \Phel::keyword("example"), "(sort-by count [\"aaa\" \"c\" \"bb\"]) ; => [\"c\" \"bb\" \"aaa\"]",
      \Phel::keyword("see-also"), \Phel::vector(["sort", "compare"]),
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2098,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2108,
        \Phel::keyword("column"), 47
      ),
      "min-arity", 2,
      "is-variadic", true,
      "arglists", "[keyfn coll & __phel_778]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "shuffle",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\shuffle";

      public function __invoke($coll) {
        $php_array_790 = (\Phel::getDefinition("phel\\core", "to-php-array"))($coll);
        shuffle($php_array_790);
        return (\Phel::getDefinition("phel\\core", "with-meta"))($coll, (\Phel::getDefinition("phel\\core", "vector"))(...(($php_array_790) ?? [])));
      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(shuffle coll)\n```\nReturns a random permutation of coll.",
      \Phel::keyword("example"), "(shuffle [1 2 3 4 5]) ; => [3 1 5 2 4] (random order)",
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2110,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2116,
        \Phel::keyword("column"), 47
      ),
      "min-arity", 1,
      "is-variadic", false,
      "arglists", "[coll]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "repeat",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\repeat";

      public function __invoke($a, ...$rest) {
        $rest = \Phel::vector($rest);
        $__phel_791_792 = (\Phel::getDefinition("phel\\core", "count"))($rest);
        if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_791_792, 0)) !== null && $__truthy !== false) {
          return (\Phel::getDefinition("phel\\core", "lazy-seq-from-generator"))((\Phel\Lang\Seq::repeat($a)));
        } else {
          $__phel_793_794 = $__phel_791_792;
          if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_793_794, 1)) !== null && $__truthy !== false) {
            $__phel_795_798 = (\Phel::getDefinition("phel\\core", "var"))(\Phel::vector([]));
            foreach (\Phel\Lang\Seq::toIterable((\Phel::getDefinition("phel\\core", "range"))(...((\Phel::vector([$a])) ?? []))) as $i) {
              (\Phel::getDefinition("phel\\core", "swap!"))($__phel_795_798, new class($a, $rest, $__phel_791_792, $__phel_793_794, $__phel_795_798, $i) extends \Phel\Lang\AbstractFn {
                public const BOUND_TO = "phel\\core\\repeat";
                private $a;
                private $rest;
                private $__phel_791_792;
                private $__phel_793_794;
                private $__phel_795_798;
                private $i;

                public function __construct($a, $rest, $__phel_791_792, $__phel_793_794, $__phel_795_798, $i) {
                  $this->a = $a;
                  $this->rest = $rest;
                  $this->__phel_791_792 = $__phel_791_792;
                  $this->__phel_793_794 = $__phel_793_794;
                  $this->__phel_795_798 = $__phel_795_798;
                  $this->i = $i;
                }

                public function __invoke($__phel_796) {
                  $a = $this->a;
                  $rest = $this->rest;
                  $__phel_791_792 = $this->__phel_791_792;
                  $__phel_793_794 = $this->__phel_793_794;
                  $__phel_795_798 = $this->__phel_795_798;
                  $i = $this->i;
                  return (\Phel::getDefinition("phel\\core", "conj"))($__phel_796, (\Phel::getDefinition("phel\\core", "get"))($rest, 0));
                }
              });
            }
            return (\Phel::getDefinition("phel\\core", "deref"))($__phel_795_798);
          } else {
            throw (new \InvalidArgumentException("repeat expects one or two arguments"));
          }

        }

      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(repeat a & rest)\n```\nReturns a vector of length n where every element is x.\n\n  With one argument returns an infinite lazy sequence of x.",
      \Phel::keyword("example"), "(repeat 3 :a) ; => [:a :a :a]",
      \Phel::keyword("see-also"), \Phel::vector(["repeatedly", "cycle"]),
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2118,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2128,
        \Phel::keyword("column"), 86
      ),
      "min-arity", 1,
      "is-variadic", true,
      "arglists", "[a & rest]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "repeatedly",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\repeatedly";

      public function __invoke($a, ...$rest) {
        $rest = \Phel::vector($rest);
        $__phel_799_800 = (\Phel::getDefinition("phel\\core", "count"))($rest);
        if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_799_800, 0)) !== null && $__truthy !== false) {
          return (\Phel::getDefinition("phel\\core", "lazy-seq-from-generator"))((\Phel\Lang\Seq::repeatedly($a)));
        } else {
          $__phel_801_802 = $__phel_799_800;
          if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_801_802, 1)) !== null && $__truthy !== false) {
            $n_803 = $a;
            $f_804 = (\Phel::getDefinition("phel\\core", "get"))($rest, 0);
            $__phel_805_808 = (\Phel::getDefinition("phel\\core", "var"))(\Phel::vector([]));
            foreach (\Phel\Lang\Seq::toIterable((\Phel::getDefinition("phel\\core", "range"))(...((\Phel::vector([$n_803])) ?? []))) as $i) {
              (\Phel::getDefinition("phel\\core", "swap!"))($__phel_805_808, new class($a, $rest, $__phel_799_800, $__phel_801_802, $n_803, $f_804, $__phel_805_808, $i) extends \Phel\Lang\AbstractFn {
                public const BOUND_TO = "phel\\core\\repeatedly";
                private $a;
                private $rest;
                private $__phel_799_800;
                private $__phel_801_802;
                private $n_803;
                private $f_804;
                private $__phel_805_808;
                private $i;

                public function __construct($a, $rest, $__phel_799_800, $__phel_801_802, $n_803, $f_804, $__phel_805_808, $i) {
                  $this->a = $a;
                  $this->rest = $rest;
                  $this->__phel_799_800 = $__phel_799_800;
                  $this->__phel_801_802 = $__phel_801_802;
                  $this->n_803 = $n_803;
                  $this->f_804 = $f_804;
                  $this->__phel_805_808 = $__phel_805_808;
                  $this->i = $i;
                }

                public function __invoke($__phel_806) {
                  $a = $this->a;
                  $rest = $this->rest;
                  $__phel_799_800 = $this->__phel_799_800;
                  $__phel_801_802 = $this->__phel_801_802;
                  $n_803 = $this->n_803;
                  $f_804 = $this->f_804;
                  $__phel_805_808 = $this->__phel_805_808;
                  $i = $this->i;
                  return (\Phel::getDefinition("phel\\core", "conj"))($__phel_806, ($f_804)());
                }
              });
            }
            return (\Phel::getDefinition("phel\\core", "deref"))($__phel_805_808);
          } else {
            throw (new \InvalidArgumentException("repeatedly expects one or two arguments"));
          }

        }

      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(repeatedly a & rest)\n```\nReturns a vector of length n with values produced by repeatedly calling f.\n\n  With one argument returns an infinite lazy sequence of calls to f.",
      \Phel::keyword("example"), "(repeatedly 3 rand) ; => [0.234 0.892 0.456] (random values)",
      \Phel::keyword("see-also"), \Phel::vector(["repeat", "iterate"]),
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2130,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2142,
        \Phel::keyword("column"), 90
      ),
      "min-arity", 1,
      "is-variadic", true,
      "arglists", "[a & rest]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "lazy-seq",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\lazy_seq";

      public function __invoke(...$body) {
        $body = \Phel::vector($body);
        return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("php/new"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("\\Phel\\Lang\\Collections\\LazySeq\\LazySeq"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("php/new"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("\\Phel\\Lang\\Hasher"))))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("php/new"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("\\Phel\\Lang\\Equalizer"))))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("fn"))), (\Phel::getDefinition("phel\\core", "list"))(\Phel::vector([])), $body)) ?? []))))) ?? []));
      }
    },
    \Phel::map(
      \Phel::keyword("macro"), true,
      \Phel::keyword("doc"), "```phel\n(lazy-seq & body)\n```\nCreates a lazy sequence that evaluates the body only when accessed.",
      \Phel::keyword("example"), "(lazy-seq (cons 1 (lazy-seq nil))) ; => (1)",
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2144,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2151,
        \Phel::keyword("column"), 28
      ),
      "min-arity", 0,
      "is-variadic", true,
      "arglists", "[& body]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "lazy-cat",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\lazy_cat";

      public function __invoke(...$colls) {
        $colls = \Phel::vector($colls);
        return (\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("concat")), ...(($colls) ?? []));
      }
    },
    \Phel::map(
      \Phel::keyword("macro"), true,
      \Phel::keyword("doc"), "```phel\n(lazy-cat & colls)\n```\nConcatenates collections into a lazy sequence (expands to concat).",
      \Phel::keyword("example"), "(lazy-cat [1 2] [3 4]) ; => (1 2 3 4)",
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2153,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2157,
        \Phel::keyword("column"), 29
      ),
      "min-arity", 0,
      "is-variadic", true,
      "arglists", "[& colls]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "iterate",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\iterate";

      public function __invoke($f, $x) {
        return (\Phel::getDefinition("phel\\core", "lazy-seq-from-generator"))((\Phel\Lang\Seq::iterate($f, $x)));
      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(iterate f x)\n```\nReturns an infinite lazy sequence of x, (f x), (f (f x)), and so on.",
      \Phel::keyword("example"), "(take 5 (iterate inc 0)) ; => (0 1 2 3 4)",
      \Phel::keyword("see-also"), \Phel::vector(["repeatedly", "cycle"]),
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2159,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2164,
        \Phel::keyword("column"), 55
      ),
      "min-arity", 2,
      "is-variadic", false,
      "arglists", "[f x]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "cycle",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\cycle";

      public function __invoke($coll) {
        if (($__truthy = (\Phel::getDefinition("phel\\core", "empty?"))($coll)) !== null && $__truthy !== false) {
          return \Phel::vector([]);
        } else {
          return (\Phel::getDefinition("phel\\core", "lazy-seq-from-generator"))((\Phel\Lang\Seq::cycle($coll)));
        }

      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(cycle coll)\n```\nReturns an infinite lazy sequence that cycles through the elements of collection.",
      \Phel::keyword("example"), "(take 7 (cycle [1 2 3])) ; => (1 2 3 1 2 3 1)",
      \Phel::keyword("see-also"), \Phel::vector(["iterate", "repeat"]),
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2166,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2173,
        \Phel::keyword("column"), 57
      ),
      "min-arity", 1,
      "is-variadic", false,
      "arglists", "[coll]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "concat",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\concat";

      public function __invoke(...$colls) {
        $colls = \Phel::vector($colls);
        if (($__truthy = (null === $colls)) !== null && $__truthy !== false) {
          return \Phel::list([]);
        } else {
          $result_809 = (\Phel::getDefinition("phel\\core", "lazy-seq-from-generator"))(call_user_func_array(array("\\Phel\\Lang\\Seq", "concat"), array(...(($colls) ?? []))));
          if (($__truthy = (null === $result_809)) !== null && $__truthy !== false) {
            return \Phel::list([]);
          } else {
            return $result_809;
          }

        }

      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(concat & colls)\n```\nConcatenates multiple collections into a lazy sequence.",
      \Phel::keyword("example"), "(concat [1 2] [3 4]) ; => (1 2 3 4)",
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2175,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2187,
        \Phel::keyword("column"), 18
      ),
      "min-arity", 0,
      "is-variadic", true,
      "arglists", "[& colls]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "cat",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\cat";

      public function __invoke($rf) {
        $rrf_810 = (\Phel::getDefinition("phel\\core", "preserving-reduced"))($rf);
        return (\Phel::getDefinition("phel\\core", "xf-step"))($rf, new class($rf, $rrf_810) extends \Phel\Lang\AbstractFn {
          public const BOUND_TO = "phel\\core\\cat";
          private $rf;
          private $rrf_810;

          public function __construct($rf, $rrf_810) {
            $this->rf = $rf;
            $this->rrf_810 = $rrf_810;
          }

          public function __invoke($result, $input) {
            $rf = $this->rf;
            $rrf_810 = $this->rrf_810;
            return (\Phel::getDefinition("phel\\core", "reduce"))($rrf_810, $result, $input);
          }
        });
      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(cat rf)\n```\nA transducer that concatenates the contents of each input into the reduction.",
      \Phel::keyword("see-also"), \Phel::vector(["mapcat", "transduce"]),
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2189,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2194,
        \Phel::keyword("column"), 64
      ),
      "min-arity", 1,
      "is-variadic", false,
      "arglists", "[rf]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "mapcat",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\mapcat";

      public function __invoke($f, ...$args) {
        $args = \Phel::vector($args);
        $__phel_811_812 = (\Phel::getDefinition("phel\\core", "count"))($args);
        if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_811_812, 0)) !== null && $__truthy !== false) {
          return (\Phel::getDefinition("phel\\core", "comp"))((\Phel::getDefinition("phel\\core", "map"))($f), \Phel::getDefinition("phel\\core", "cat"));
        } else {
          $__phel_813_814 = $__phel_811_812;
          if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_813_814, 1)) !== null && $__truthy !== false) {
            $coll_815 = (\Phel::getDefinition("phel\\core", "first"))($args);
            if (($__truthy = (null === $coll_815)) !== null && $__truthy !== false) {
              return \Phel::list([]);
            } else {
              $result_816 = (\Phel::getDefinition("phel\\core", "lazy-seq-from-generator"))((\Phel\Lang\Seq::mapcat($f, $coll_815)));
              if (($__truthy = (null === $result_816)) !== null && $__truthy !== false) {
                return \Phel::list([]);
              } else {
                return (\Phel::getDefinition("phel\\core", "with-meta"))($coll_815, $result_816);
              }

            }

          } else {
            throw (new \InvalidArgumentException("mapcat expects 1 or 2 arguments"));
          }

        }

      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(mapcat f & args)\n```\nMaps a function over a collection and concatenates the results. Returns a lazy sequence.\n  When called with f only, returns a transducer.",
      \Phel::keyword("example"), "(mapcat reverse [[1 2] [3 4]]) ; => (2 1 4 3)",
      \Phel::keyword("see-also"), \Phel::vector(["map", "cat", "transduce"]),
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2196,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2212,
        \Phel::keyword("column"), 82
      ),
      "min-arity", 1,
      "is-variadic", true,
      "arglists", "[f & args]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "interpose",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\interpose";

      public function __invoke($sep, ...$args) {
        $args = \Phel::vector($args);
        $__phel_817_818 = (\Phel::getDefinition("phel\\core", "count"))($args);
        if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_817_818, 0)) !== null && $__truthy !== false) {
          return new class($sep, $args, $__phel_817_818) extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\core\\interpose";
            private $sep;
            private $args;
            private $__phel_817_818;

            public function __construct($sep, $args, $__phel_817_818) {
              $this->sep = $sep;
              $this->args = $args;
              $this->__phel_817_818 = $__phel_817_818;
            }

            public function __invoke($rf) {
              $sep = $this->sep;
              $args = $this->args;
              $__phel_817_818 = $this->__phel_817_818;
              $started_819 = (\Phel::getDefinition("phel\\core", "volatile!"))(false);
              return new class($sep, $args, $__phel_817_818, $rf, $started_819) extends \Phel\Lang\AbstractFn {
                public const BOUND_TO = "phel\\core\\interpose";
                private $sep;
                private $args;
                private $__phel_817_818;
                private $rf;
                private $started_819;

                public function __construct($sep, $args, $__phel_817_818, $rf, $started_819) {
                  $this->sep = $sep;
                  $this->args = $args;
                  $this->__phel_817_818 = $__phel_817_818;
                  $this->rf = $rf;
                  $this->started_819 = $started_819;
                }

                public function __invoke(...$iargs) {
                  $sep = $this->sep;
                  $args = $this->args;
                  $__phel_817_818 = $this->__phel_817_818;
                  $rf = $this->rf;
                  $started_819 = $this->started_819;
                  $iargs = \Phel::vector($iargs);
                  $__phel_820_821 = (\Phel::getDefinition("phel\\core", "count"))($iargs);
                  if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_820_821, 0)) !== null && $__truthy !== false) {
                    return ($rf)();
                  } else {
                    $__phel_822_823 = $__phel_820_821;
                    if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_822_823, 1)) !== null && $__truthy !== false) {
                      return ($rf)((\Phel::getDefinition("phel\\core", "first"))($iargs));
                    } else {
                      $__phel_824_825 = $__phel_822_823;
                      if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_824_825, 2)) !== null && $__truthy !== false) {
                        $result_826 = (\Phel::getDefinition("phel\\core", "first"))($iargs);
                        $input_827 = (\Phel::getDefinition("phel\\core", "second"))($iargs);
                        if (($__truthy = (\Phel::getDefinition("phel\\core", "deref"))($started_819)) !== null && $__truthy !== false) {
                          $sepr_828 = ($rf)($result_826, $sep);
                          if (($__truthy = (\Phel::getDefinition("phel\\core", "reduced?"))($sepr_828)) !== null && $__truthy !== false) {
                            return (\Phel::getDefinition("phel\\core", "ensure-reduced"))((\Phel::getDefinition("phel\\core", "deref"))($sepr_828));
                          } else {
                            return ($rf)($sepr_828, $input_827);
                          }

                        } else {
                          (\Phel::getDefinition("phel\\core", "vreset!"))($started_819, true);
                          return ($rf)($result_826, $input_827);
                        }

                      } else {
                        return null;
                      }

                    }

                  }

                }
              };
            }
          };
        } else {
          $__phel_829_830 = $__phel_817_818;
          if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_829_830, 1)) !== null && $__truthy !== false) {
            $coll_831 = (\Phel::getDefinition("phel\\core", "first"))($args);
            if (($__truthy = (null === $coll_831)) !== null && $__truthy !== false) {
              return \Phel::list([]);
            } else {
              $result_832 = (\Phel::getDefinition("phel\\core", "lazy-seq-from-generator"))((\Phel\Lang\Seq::interpose($sep, $coll_831)));
              if (($__truthy = (null === $result_832)) !== null && $__truthy !== false) {
                return \Phel::list([]);
              } else {
                return (\Phel::getDefinition("phel\\core", "with-meta"))($coll_831, $result_832);
              }

            }

          } else {
            throw (new \InvalidArgumentException("interpose expects 1 or 2 arguments"));
          }

        }

      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(interpose sep & args)\n```\nReturns elements separated by a separator. Returns a lazy sequence.\n  When called with sep only, returns a transducer.",
      \Phel::keyword("example"), "(interpose 0 [1 2 3]) ; => (1 0 2 0 3)",
      \Phel::keyword("see-also"), \Phel::vector(["transduce"]),
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2214,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2242,
        \Phel::keyword("column"), 85
      ),
      "min-arity", 1,
      "is-variadic", true,
      "arglists", "[sep & args]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "map-indexed",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\map_indexed";

      public function __invoke($f, $coll) {
        if (($__truthy = (null === $coll)) !== null && $__truthy !== false) {
          return \Phel::list([]);
        } else {
          $result_833 = (\Phel::getDefinition("phel\\core", "lazy-seq-from-generator"))((\Phel\Lang\Seq::mapIndexed($f, $coll)));
          if (($__truthy = (null === $result_833)) !== null && $__truthy !== false) {
            return \Phel::list([]);
          } else {
            return (\Phel::getDefinition("phel\\core", "with-meta"))($coll, $result_833);
          }

        }

      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(map-indexed f coll)\n```\nMaps a function over a collection with index. Returns a lazy sequence.\n\n  Applies `f` to each element in `xs`. `f` is a two-argument function where\n  the first argument is the index (0-based) and the second is the element itself.\n  Works with infinite sequences.",
      \Phel::keyword("example"), "(map-indexed vector [:a :b :c]) ; => ([0 :a] [1 :b] [2 :c])",
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2244,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2258,
        \Phel::keyword("column"), 35
      ),
      "min-arity", 2,
      "is-variadic", false,
      "arglists", "[f coll]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "interleave",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\interleave";

      public function __invoke(...$colls) {
        $colls = \Phel::vector($colls);
        if (($__truthy = (null === $colls)) !== null && $__truthy !== false) {
          return \Phel::list([]);
        } else {
          $result_834 = (\Phel::getDefinition("phel\\core", "lazy-seq-from-generator"))(call_user_func_array(array("\\Phel\\Lang\\Seq", "interleave"), array(...(($colls) ?? []))));
          if (($__truthy = (null === $result_834)) !== null && $__truthy !== false) {
            return \Phel::list([]);
          } else {
            return (\Phel::getDefinition("phel\\core", "with-meta"))((\Phel::getDefinition("phel\\core", "first"))($colls), $result_834);
          }

        }

      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(interleave & colls)\n```\nInterleaves multiple collections. Returns a lazy sequence.\n\n  Returns elements by taking one from each collection in turn.\n  Pads with nil when collections have different lengths.\n  Works with infinite sequences.",
      \Phel::keyword("example"), "(interleave [1 2 3] [:a :b :c]) ; => (1 :a 2 :b 3 :c)",
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2261,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2277,
        \Phel::keyword("column"), 44
      ),
      "min-arity", 0,
      "is-variadic", true,
      "arglists", "[& colls]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "doall",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\doall";

      public function __invoke($coll) {
        if (($__truthy = ($coll instanceof \Phel\Lang\Collections\LazySeq\LazySeqInterface)) !== null && $__truthy !== false) {
          $arr_835 = (function() use($coll) {
            $target_836 = $coll;
            return $target_836->toArray();
          })();
          if (($__truthy = empty($arr_835)) !== null && $__truthy !== false) {
            return null;
          } else {
            return (\Phel::getDefinition("phel\\core", "vector"))(...(($arr_835) ?? []));
          }

        } else {
          return $coll;
        }

      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(doall coll)\n```\nForces realization of a lazy sequence and returns it as a vector.",
      \Phel::keyword("example"), "(doall (map println [1 2 3])) ; => [nil nil nil]",
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2279,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2288,
        \Phel::keyword("column"), 10
      ),
      "min-arity", 1,
      "is-variadic", false,
      "arglists", "[coll]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "dorun",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\dorun";

      public function __invoke($coll) {
        if (($__truthy = ($coll instanceof \Phel\Lang\Collections\LazySeq\LazySeqInterface)) !== null && $__truthy !== false) {
          foreach (\Phel\Lang\Seq::toIterable($coll) as $__phel_838) {
            $x_839 = $__phel_838;
            $x_839;
          }
          return null;
        } else {
          return null;
        }

      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(dorun coll)\n```\nForces realization of a lazy sequence for side effects, returns nil.",
      \Phel::keyword("example"), "(dorun (map println [1 2 3])) ; => nil",
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2290,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2298,
        \Phel::keyword("column"), 9
      ),
      "min-arity", 1,
      "is-variadic", false,
      "arglists", "[coll]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "realized?",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\realized?";

      public function __invoke($coll) {
        if (($__truthy = ($coll instanceof \Phel\Lang\Collections\LazySeq\LazySeqInterface)) !== null && $__truthy !== false) {
          return (function() use($coll) {
            $target_840 = $coll;
            return $target_840->isRealized();
          })();
        } else {
          if (($__truthy = ($coll instanceof \Phel\Lang\Delay)) !== null && $__truthy !== false) {
            return (function() use($coll) {
              $target_841 = $coll;
              return $target_841->isRealized();
            })();
          } else {
            return true;
          }

        }

      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(realized? coll)\n```\nReturns true if a lazy sequence or delay has been realized, false otherwise.",
      \Phel::keyword("example"), "(realized? (take 5 (iterate inc 1))) ; => false",
      \Phel::keyword("see-also"), \Phel::vector(["delay", "force", "lazy-seq"]),
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2300,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2308,
        \Phel::keyword("column"), 10
      ),
      "min-arity", 1,
      "is-variadic", false,
      "arglists", "[coll]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "group-by",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\group_by";

      public function __invoke($f, $coll) {
        return (\Phel::getDefinition("phel\\core", "persistent"))((function() use($f,$coll) {
          $__phel_844_847 = (\Phel::getDefinition("phel\\core", "var"))((\Phel::getDefinition("phel\\core", "transient"))(\Phel::map()));
          foreach (\Phel\Lang\Seq::toIterable($coll) as $__phel_846) {
            $x_848 = $__phel_846;
            $k_849 = ($f)($x_848);
            (\Phel::getDefinition("phel\\core", "swap!"))($__phel_844_847, new class($f, $coll, $__phel_844_847, $__phel_846, $x_848, $k_849) extends \Phel\Lang\AbstractFn {
              public const BOUND_TO = "phel\\core\\group_by";
              private $f;
              private $coll;
              private $__phel_844_847;
              private $__phel_846;
              private $x_848;
              private $k_849;

              public function __construct($f, $coll, $__phel_844_847, $__phel_846, $x_848, $k_849) {
                $this->f = $f;
                $this->coll = $coll;
                $this->__phel_844_847 = $__phel_844_847;
                $this->__phel_846 = $__phel_846;
                $this->x_848 = $x_848;
                $this->k_849 = $k_849;
              }

              public function __invoke($res) {
                $f = $this->f;
                $coll = $this->coll;
                $__phel_844_847 = $this->__phel_844_847;
                $__phel_846 = $this->__phel_846;
                $x_848 = $this->x_848;
                $k_849 = $this->k_849;
                if (($__truthy = (\Phel::getDefinition("phel\\core", "get"))($res, $k_849)) !== null && $__truthy !== false) {

                } else {
                  (\Phel::getDefinition("phel\\core", "assoc"))($res, $k_849, \Phel::vector([]));
                }

                return (\Phel::getDefinition("phel\\core", "update-in"))($res, \Phel::vector([$k_849]), \Phel::getDefinition("phel\\core", "push"), $x_848);
              }
            });
          }
          return (\Phel::getDefinition("phel\\core", "deref"))($__phel_844_847);
        })());
      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(group-by f coll)\n```\nReturns a map of the elements of coll keyed by the result of `f` on each element.",
      \Phel::keyword("example"), "(group-by count [\"a\" \"bb\" \"c\" \"ddd\" \"ee\"]) ; => {1 [\"a\" \"c\"] 2 [\"bb\" \"ee\"] 3 [\"ddd\"]}",
      \Phel::keyword("see-also"), \Phel::vector(["partition-by", "frequencies"]),
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2310,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2321,
        \Phel::keyword("column"), 34
      ),
      "min-arity", 2,
      "is-variadic", false,
      "arglists", "[f coll]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "zipcoll",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\zipcoll";

      public function __invoke($a, $b) {
        return (\Phel::getDefinition("phel\\core", "hash-map"))(...(((\Phel::getDefinition("phel\\core", "interleave"))($a, $b)) ?? []));
      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(zipcoll a b)\n```\nCreates a map from two sequential data structures. Returns a new map.",
      \Phel::keyword("example"), "(zipcoll [:a :b :c] [1 2 3]) ; => {:a 1 :b 2 :c 3}",
      \Phel::keyword("see-also"), \Phel::vector(["zipmap", "interleave"]),
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2323,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2328,
        \Phel::keyword("column"), 36
      ),
      "min-arity", 2,
      "is-variadic", false,
      "arglists", "[a b]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "zipmap",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\zipmap";

      public function __invoke($keys, $vals) {
        $ks_850 = (\Phel::getDefinition("phel\\core", "seq"))($keys);
        $vs_851 = (\Phel::getDefinition("phel\\core", "seq"))($vals);
        $res_852 = \Phel::map();
        while (true) {
          if (($__truthy = (function() use($keys,$vals,$ks_850,$vs_851,$res_852) {
            $__phel_853_854 = (\Phel::getDefinition("phel\\core", "nil?"))($ks_850);
            if (($__truthy = $__phel_853_854) !== null && $__truthy !== false) {
              return $__phel_853_854;
            } else {
              return (\Phel::getDefinition("phel\\core", "nil?"))($vs_851);
            }

          })()) !== null && $__truthy !== false) {
            return $res_852;
          } else {
            $__phel_855 = (\Phel::getDefinition("phel\\core", "next"))($ks_850);
            $__phel_856 = (\Phel::getDefinition("phel\\core", "next"))($vs_851);
            $__phel_857 = (\Phel::getDefinition("phel\\core", "assoc"))($res_852, (\Phel::getDefinition("phel\\core", "first"))($ks_850), (\Phel::getDefinition("phel\\core", "first"))($vs_851));
            $ks_850 = $__phel_855;
            $vs_851 = $__phel_856;
            $res_852 = $__phel_857;
            continue;

          }
          break;
        }
      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(zipmap keys vals)\n```\nReturns a new map with the keys mapped to the corresponding values.\n\n  Stops when the shorter of `keys` or `vals` is exhausted.\n  Works safely with infinite lazy sequences.",
      \Phel::keyword("example"), "(zipmap [:a :b :c] [1 2 3]) ; => {:a 1 :b 2 :c 3}",
      \Phel::keyword("see-also"), \Phel::vector(["zipcoll"]),
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2330,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2343,
        \Phel::keyword("column"), 70
      ),
      "min-arity", 2,
      "is-variadic", false,
      "arglists", "[keys vals]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "merge",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\merge";

      public function __invoke(...$maps) {
        $maps = \Phel::vector($maps);
        $__phel_861_866 = (\Phel::getDefinition("phel\\core", "var"))(\Phel::map());
        foreach (\Phel\Lang\Seq::toIterable($maps) as $__phel_865) {
          $map_867 = $__phel_865;
          foreach (\Phel\Lang\Seq::toIterable($map_867) as $__phel_864 => $__phel_863) {
            $__phel_868_873 = \Phel::vector([$__phel_864, $__phel_863]);
            $__phel_869_874 = (\Phel::getDefinition("phel\\core", "first"))($__phel_868_873);
            $__phel_870_875 = (\Phel::getDefinition("phel\\core", "next"))($__phel_868_873);
            $k_876 = $__phel_869_874;
            $__phel_871_877 = (\Phel::getDefinition("phel\\core", "first"))($__phel_870_875);
            $__phel_872_878 = (\Phel::getDefinition("phel\\core", "next"))($__phel_870_875);
            $v_879 = $__phel_871_877;
            (\Phel::getDefinition("phel\\core", "swap!"))($__phel_861_866, new class($maps, $__phel_861_866, $__phel_865, $map_867, $__phel_863, $__phel_864, $__phel_868_873, $__phel_869_874, $__phel_870_875, $k_876, $__phel_871_877, $__phel_872_878, $v_879) extends \Phel\Lang\AbstractFn {
              public const BOUND_TO = "phel\\core\\merge";
              private $maps;
              private $__phel_861_866;
              private $__phel_865;
              private $map_867;
              private $__phel_863;
              private $__phel_864;
              private $__phel_868_873;
              private $__phel_869_874;
              private $__phel_870_875;
              private $k_876;
              private $__phel_871_877;
              private $__phel_872_878;
              private $v_879;

              public function __construct($maps, $__phel_861_866, $__phel_865, $map_867, $__phel_863, $__phel_864, $__phel_868_873, $__phel_869_874, $__phel_870_875, $k_876, $__phel_871_877, $__phel_872_878, $v_879) {
                $this->maps = $maps;
                $this->__phel_861_866 = $__phel_861_866;
                $this->__phel_865 = $__phel_865;
                $this->map_867 = $map_867;
                $this->__phel_863 = $__phel_863;
                $this->__phel_864 = $__phel_864;
                $this->__phel_868_873 = $__phel_868_873;
                $this->__phel_869_874 = $__phel_869_874;
                $this->__phel_870_875 = $__phel_870_875;
                $this->k_876 = $k_876;
                $this->__phel_871_877 = $__phel_871_877;
                $this->__phel_872_878 = $__phel_872_878;
                $this->v_879 = $v_879;
              }

              public function __invoke($res) {
                $maps = $this->maps;
                $__phel_861_866 = $this->__phel_861_866;
                $__phel_865 = $this->__phel_865;
                $map_867 = $this->map_867;
                $__phel_863 = $this->__phel_863;
                $__phel_864 = $this->__phel_864;
                $__phel_868_873 = $this->__phel_868_873;
                $__phel_869_874 = $this->__phel_869_874;
                $__phel_870_875 = $this->__phel_870_875;
                $k_876 = $this->k_876;
                $__phel_871_877 = $this->__phel_871_877;
                $__phel_872_878 = $this->__phel_872_878;
                $v_879 = $this->v_879;
                return (\Phel::getDefinition("phel\\core", "assoc"))($res, $k_876, $v_879);
              }
            });
          }
        }
        return (\Phel::getDefinition("phel\\core", "deref"))($__phel_861_866);
      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(merge & maps)\n```\nMerges multiple maps into one new map.\n\n  If a key appears in more than one collection, later values replace previous ones.",
      \Phel::keyword("example"), "(merge {:a 1 :b 2} {:b 3 :c 4}) ; => {:a 1 :b 3 :c 4}",
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2345,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2354,
        \Phel::keyword("column"), 21
      ),
      "min-arity", 0,
      "is-variadic", true,
      "arglists", "[& maps]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "select-keys",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\select_keys";

      public function __invoke($m, $ks) {
        $result_880 = (function() use($m,$ks) {
          $__phel_881_885 = (\Phel::getDefinition("phel\\core", "var"))(\Phel::map());
          foreach (\Phel\Lang\Seq::toIterable($m) as $__phel_884 => $__phel_883) {
            $__phel_886_891 = \Phel::vector([$__phel_884, $__phel_883]);
            $__phel_887_892 = (\Phel::getDefinition("phel\\core", "first"))($__phel_886_891);
            $__phel_888_893 = (\Phel::getDefinition("phel\\core", "next"))($__phel_886_891);
            $k_894 = $__phel_887_892;
            $__phel_889_895 = (\Phel::getDefinition("phel\\core", "first"))($__phel_888_893);
            $__phel_890_896 = (\Phel::getDefinition("phel\\core", "next"))($__phel_888_893);
            $v_897 = $__phel_889_895;
            if (($__truthy = (\Phel::getDefinition("phel\\core", "contains-value?"))($ks, $k_894)) !== null && $__truthy !== false) {
              (\Phel::getDefinition("phel\\core", "swap!"))($__phel_881_885, new class($m, $ks, $__phel_881_885, $__phel_883, $__phel_884, $__phel_886_891, $__phel_887_892, $__phel_888_893, $k_894, $__phel_889_895, $__phel_890_896, $v_897) extends \Phel\Lang\AbstractFn {
                public const BOUND_TO = "phel\\core\\select_keys.result";
                private $m;
                private $ks;
                private $__phel_881_885;
                private $__phel_883;
                private $__phel_884;
                private $__phel_886_891;
                private $__phel_887_892;
                private $__phel_888_893;
                private $k_894;
                private $__phel_889_895;
                private $__phel_890_896;
                private $v_897;

                public function __construct($m, $ks, $__phel_881_885, $__phel_883, $__phel_884, $__phel_886_891, $__phel_887_892, $__phel_888_893, $k_894, $__phel_889_895, $__phel_890_896, $v_897) {
                  $this->m = $m;
                  $this->ks = $ks;
                  $this->__phel_881_885 = $__phel_881_885;
                  $this->__phel_883 = $__phel_883;
                  $this->__phel_884 = $__phel_884;
                  $this->__phel_886_891 = $__phel_886_891;
                  $this->__phel_887_892 = $__phel_887_892;
                  $this->__phel_888_893 = $__phel_888_893;
                  $this->k_894 = $k_894;
                  $this->__phel_889_895 = $__phel_889_895;
                  $this->__phel_890_896 = $__phel_890_896;
                  $this->v_897 = $v_897;
                }

                public function __invoke($acc) {
                  $m = $this->m;
                  $ks = $this->ks;
                  $__phel_881_885 = $this->__phel_881_885;
                  $__phel_883 = $this->__phel_883;
                  $__phel_884 = $this->__phel_884;
                  $__phel_886_891 = $this->__phel_886_891;
                  $__phel_887_892 = $this->__phel_887_892;
                  $__phel_888_893 = $this->__phel_888_893;
                  $k_894 = $this->k_894;
                  $__phel_889_895 = $this->__phel_889_895;
                  $__phel_890_896 = $this->__phel_890_896;
                  $v_897 = $this->v_897;
                  return (\Phel::getDefinition("phel\\core", "assoc"))($acc, $k_894, $v_897);
                }
              });
            } else {

            }

          }
          return (\Phel::getDefinition("phel\\core", "deref"))($__phel_881_885);
        })();
        return (\Phel::getDefinition("phel\\core", "with-meta"))($m, $result_880);
      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(select-keys m ks)\n```\nReturns a new map including key value pairs from `m` selected with keys `ks`.",
      \Phel::keyword("example"), "(select-keys {:a 1 :b 2 :c 3} [:a :c]) ; => {:a 1 :c 3}",
      \Phel::keyword("see-also"), \Phel::vector(["dissoc"]),
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2356,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2365,
        \Phel::keyword("column"), 26
      ),
      "min-arity", 2,
      "is-variadic", false,
      "arglists", "[m ks]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "invert",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\invert";

      public function __invoke($map) {
        $__phel_898_902 = (\Phel::getDefinition("phel\\core", "var"))(\Phel::map());
        foreach (\Phel\Lang\Seq::toIterable($map) as $__phel_901 => $__phel_900) {
          $__phel_903_908 = \Phel::vector([$__phel_901, $__phel_900]);
          $__phel_904_909 = (\Phel::getDefinition("phel\\core", "first"))($__phel_903_908);
          $__phel_905_910 = (\Phel::getDefinition("phel\\core", "next"))($__phel_903_908);
          $k_911 = $__phel_904_909;
          $__phel_906_912 = (\Phel::getDefinition("phel\\core", "first"))($__phel_905_910);
          $__phel_907_913 = (\Phel::getDefinition("phel\\core", "next"))($__phel_905_910);
          $v_914 = $__phel_906_912;
          (\Phel::getDefinition("phel\\core", "swap!"))($__phel_898_902, new class($map, $__phel_898_902, $__phel_900, $__phel_901, $__phel_903_908, $__phel_904_909, $__phel_905_910, $k_911, $__phel_906_912, $__phel_907_913, $v_914) extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\core\\invert";
            private $map;
            private $__phel_898_902;
            private $__phel_900;
            private $__phel_901;
            private $__phel_903_908;
            private $__phel_904_909;
            private $__phel_905_910;
            private $k_911;
            private $__phel_906_912;
            private $__phel_907_913;
            private $v_914;

            public function __construct($map, $__phel_898_902, $__phel_900, $__phel_901, $__phel_903_908, $__phel_904_909, $__phel_905_910, $k_911, $__phel_906_912, $__phel_907_913, $v_914) {
              $this->map = $map;
              $this->__phel_898_902 = $__phel_898_902;
              $this->__phel_900 = $__phel_900;
              $this->__phel_901 = $__phel_901;
              $this->__phel_903_908 = $__phel_903_908;
              $this->__phel_904_909 = $__phel_904_909;
              $this->__phel_905_910 = $__phel_905_910;
              $this->k_911 = $k_911;
              $this->__phel_906_912 = $__phel_906_912;
              $this->__phel_907_913 = $__phel_907_913;
              $this->v_914 = $v_914;
            }

            public function __invoke($res) {
              $map = $this->map;
              $__phel_898_902 = $this->__phel_898_902;
              $__phel_900 = $this->__phel_900;
              $__phel_901 = $this->__phel_901;
              $__phel_903_908 = $this->__phel_903_908;
              $__phel_904_909 = $this->__phel_904_909;
              $__phel_905_910 = $this->__phel_905_910;
              $k_911 = $this->k_911;
              $__phel_906_912 = $this->__phel_906_912;
              $__phel_907_913 = $this->__phel_907_913;
              $v_914 = $this->v_914;
              return (\Phel::getDefinition("phel\\core", "assoc"))($res, $v_914, $k_911);
            }
          });
        }
        return (\Phel::getDefinition("phel\\core", "deref"))($__phel_898_902);
      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(invert map)\n```\nReturns a new map where the keys and values are swapped.\n\n  If map has duplicated values, some keys will be ignored.",
      \Phel::keyword("example"), "(invert {:a 1 :b 2 :c 3}) ; => {1 :a 2 :b 3 :c}",
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2367,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2375,
        \Phel::keyword("column"), 21
      ),
      "min-arity", 1,
      "is-variadic", false,
      "arglists", "[map]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "split-at",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\split_at";

      public function __invoke($n, $coll) {
        return \Phel::vector([(\Phel::getDefinition("phel\\core", "take"))($n, $coll), (\Phel::getDefinition("phel\\core", "drop"))($n, $coll)]);
      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(split-at n coll)\n```\nReturns a vector of `[(take n coll) (drop n coll)]`.",
      \Phel::keyword("example"), "(split-at 2 [1 2 3 4 5]) ; => [[1 2] [3 4 5]]",
      \Phel::keyword("see-also"), \Phel::vector(["split-with", "take", "drop"]),
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2377,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2382,
        \Phel::keyword("column"), 32
      ),
      "min-arity", 2,
      "is-variadic", false,
      "arglists", "[n coll]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "split-with",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\split_with";

      public function __invoke($f, $coll) {
        return \Phel::vector([(\Phel::getDefinition("phel\\core", "take-while"))($f, $coll), (\Phel::getDefinition("phel\\core", "drop-while"))($f, $coll)]);
      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(split-with f coll)\n```\nReturns a vector of `[(take-while pred coll) (drop-while pred coll)]`.",
      \Phel::keyword("example"), "(split-with |(< \$ 4) [1 2 3 4 5 6]) ; => [[1 2 3] [4 5 6]]",
      \Phel::keyword("see-also"), \Phel::vector(["split-at", "take-while", "drop-while"]),
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2384,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2389,
        \Phel::keyword("column"), 44
      ),
      "min-arity", 2,
      "is-variadic", false,
      "arglists", "[f coll]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "partition-by",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\partition_by";

      public function __invoke($f, $coll) {
        if (($__truthy = (\Phel::getDefinition("phel\\core", "nil?"))($coll)) !== null && $__truthy !== false) {
          return \Phel::vector([]);
        } else {
          if (($__truthy = (function() use($f,$coll) {
            $__phel_915_916 = (\Phel::getDefinition("phel\\core", "indexed?"))($coll);
            if (($__truthy = $__phel_915_916) !== null && $__truthy !== false) {
              return (\Phel::getDefinition("phel\\core", "="))(0, (\Phel::getDefinition("phel\\core", "count"))($coll));
            } else {
              return $__phel_915_916;
            }

          })()) !== null && $__truthy !== false) {
            return \Phel::vector([]);
          } else {
            if (($__truthy = true) !== null && $__truthy !== false) {
              return (\Phel::getDefinition("phel\\core", "lazy-seq-from-generator"))((\Phel\Lang\Seq::partitionBy($f, $coll)));
            } else {
              return null;
            }

          }

        }

      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(partition-by f coll)\n```\nReturns a lazy sequence of partitions. Applies `f` to each value in `coll`, splitting them each time the return value changes.",
      \Phel::keyword("example"), "(partition-by |(< \$ 3) [1 2 3 4 5 1 2]) ; => [[1 2] [3 4 5] [1 2]]",
      \Phel::keyword("see-also"), \Phel::vector(["group-by", "partition"]),
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2391,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2399,
        \Phel::keyword("column"), 70
      ),
      "min-arity", 2,
      "is-variadic", false,
      "arglists", "[f coll]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "dedupe",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\dedupe";

      public function __invoke(...$args) {
        $args = \Phel::vector($args);
        $__phel_917_918 = (\Phel::getDefinition("phel\\core", "count"))($args);
        if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_917_918, 0)) !== null && $__truthy !== false) {
          return new class($args, $__phel_917_918) extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\core\\dedupe";
            private $args;
            private $__phel_917_918;

            public function __construct($args, $__phel_917_918) {
              $this->args = $args;
              $this->__phel_917_918 = $__phel_917_918;
            }

            public function __invoke($rf) {
              $args = $this->args;
              $__phel_917_918 = $this->__phel_917_918;
              $pv_919 = (\Phel::getDefinition("phel\\core", "volatile!"))(\Phel::keyword("none", "phel"));
              return (\Phel::getDefinition("phel\\core", "xf-step"))($rf, new class($args, $__phel_917_918, $rf, $pv_919) extends \Phel\Lang\AbstractFn {
                public const BOUND_TO = "phel\\core\\dedupe";
                private $args;
                private $__phel_917_918;
                private $rf;
                private $pv_919;

                public function __construct($args, $__phel_917_918, $rf, $pv_919) {
                  $this->args = $args;
                  $this->__phel_917_918 = $__phel_917_918;
                  $this->rf = $rf;
                  $this->pv_919 = $pv_919;
                }

                public function __invoke($result, $input) {
                  $args = $this->args;
                  $__phel_917_918 = $this->__phel_917_918;
                  $rf = $this->rf;
                  $pv_919 = $this->pv_919;
                  $prior_920 = (\Phel::getDefinition("phel\\core", "deref"))($pv_919);
                  (\Phel::getDefinition("phel\\core", "vreset!"))($pv_919, $input);
                  if (($__truthy = (\Phel::getDefinition("phel\\core", "="))($prior_920, $input)) !== null && $__truthy !== false) {
                    return $result;
                  } else {
                    return ($rf)($result, $input);
                  }

                }
              });
            }
          };
        } else {
          $__phel_921_922 = $__phel_917_918;
          if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_921_922, 1)) !== null && $__truthy !== false) {
            $coll_923 = (\Phel::getDefinition("phel\\core", "first"))($args);
            if (($__truthy = (\Phel::getDefinition("phel\\core", "nil?"))($coll_923)) !== null && $__truthy !== false) {
              return \Phel::vector([]);
            } else {
              if (($__truthy = (function() use($args,$__phel_917_918,$__phel_921_922,$coll_923) {
                $__phel_924_925 = (\Phel::getDefinition("phel\\core", "indexed?"))($coll_923);
                if (($__truthy = $__phel_924_925) !== null && $__truthy !== false) {
                  return (\Phel::getDefinition("phel\\core", "="))(0, (\Phel::getDefinition("phel\\core", "count"))($coll_923));
                } else {
                  return $__phel_924_925;
                }

              })()) !== null && $__truthy !== false) {
                return \Phel::vector([]);
              } else {
                if (($__truthy = true) !== null && $__truthy !== false) {
                  return (\Phel::getDefinition("phel\\core", "lazy-seq-from-generator"))((\Phel\Lang\Seq::dedupe($coll_923)));
                } else {
                  return null;
                }

              }

            }

          } else {
            throw (new \InvalidArgumentException("dedupe expects 0 or 1 arguments"));
          }

        }

      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(dedupe & args)\n```\nReturns a lazy sequence with consecutive duplicate values removed in `coll`.\n  When called with no args, returns a transducer.",
      \Phel::keyword("example"), "(dedupe [1 1 2 2 2 3 1 1]) ; => (1 2 3 1)",
      \Phel::keyword("see-also"), \Phel::vector(["distinct", "transduce"]),
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2401,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2419,
        \Phel::keyword("column"), 82
      ),
      "min-arity", 0,
      "is-variadic", true,
      "arglists", "[& args]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "sequence",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\sequence";

      public function __invoke($xform, $coll) {
        return (\Phel::getDefinition("phel\\core", "into"))(\Phel::vector([]), $xform, $coll);
      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(sequence xform coll)\n```\nApplies transducer `xform` to `coll`, returning a vector of results.",
      \Phel::keyword("example"), "(sequence (comp (filter even?) (map inc)) [1 2 3 4 5]) ; => [3 5]",
      \Phel::keyword("see-also"), \Phel::vector(["transduce", "into"]),
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2421,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2426,
        \Phel::keyword("column"), 23
      ),
      "min-arity", 2,
      "is-variadic", false,
      "arglists", "[xform coll]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "compact",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\compact";

      public function __invoke($coll, ...$values) {
        $values = \Phel::vector($values);
        if (($__truthy = (\Phel::getDefinition("phel\\core", "nil?"))($coll)) !== null && $__truthy !== false) {
          return \Phel::vector([]);
        } else {
          if (($__truthy = (function() use($coll,$values) {
            $__phel_926_927 = (\Phel::getDefinition("phel\\core", "indexed?"))($coll);
            if (($__truthy = $__phel_926_927) !== null && $__truthy !== false) {
              return (\Phel::getDefinition("phel\\core", "="))(0, (\Phel::getDefinition("phel\\core", "count"))($coll));
            } else {
              return $__phel_926_927;
            }

          })()) !== null && $__truthy !== false) {
            return \Phel::vector([]);
          } else {
            if (($__truthy = true) !== null && $__truthy !== false) {
              return (\Phel::getDefinition("phel\\core", "lazy-seq-from-generator"))(call_user_func_array(array("\\Phel\\Lang\\Seq", "compact"), array_merge(array($coll), array(...(($values) ?? [])))));
            } else {
              return null;
            }

          }

        }

      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(compact coll & values)\n```\nReturns a lazy sequence with specified values removed from `coll`.\n  If no values are specified, removes nil values by default.",
      \Phel::keyword("example"), "(compact [1 nil 2 nil 3]) ; => (1 2 3)",
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2428,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2439,
        \Phel::keyword("column"), 74
      ),
      "min-arity", 1,
      "is-variadic", true,
      "arglists", "[coll & values]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "partition",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\partition";

      public function __invoke($n, $coll) {
        $result_928 = (\Phel::getDefinition("phel\\core", "lazy-seq-from-generator"))(call_user_func_array(array("\\Phel\\Lang\\Seq", "partition"), array($n, $coll)));
        if (($__truthy = (null === $result_928)) !== null && $__truthy !== false) {
          return \Phel::list([]);
        } else {
          return (\Phel::getDefinition("phel\\core", "with-meta"))($coll, $result_928);
        }

      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(partition n coll)\n```\nPartitions collection into chunks of size n, dropping incomplete final partition.",
      \Phel::keyword("example"), "(partition 3 [1 2 3 4 5 6 7]) ; => ([1 2 3] [4 5 6])",
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2441,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2451,
        \Phel::keyword("column"), 32
      ),
      "min-arity", 2,
      "is-variadic", false,
      "arglists", "[n coll]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "partition-all",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\partition_all";

      public function __invoke($n, $coll) {
        $result_929 = (\Phel::getDefinition("phel\\core", "lazy-seq-from-generator"))(call_user_func_array(array("\\Phel\\Lang\\Seq", "partitionAll"), array($n, $coll)));
        if (($__truthy = (null === $result_929)) !== null && $__truthy !== false) {
          return \Phel::list([]);
        } else {
          return (\Phel::getDefinition("phel\\core", "with-meta"))($coll, $result_929);
        }

      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(partition-all n coll)\n```\nPartitions collection into chunks of size n, including incomplete final partition.",
      \Phel::keyword("example"), "(partition-all 3 [1 2 3 4 5 6 7]) ; => ([1 2 3] [4 5 6] [7])",
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2453,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2463,
        \Phel::keyword("column"), 32
      ),
      "min-arity", 2,
      "is-variadic", false,
      "arglists", "[n coll]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "union",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\union";

      public function __invoke(...$sets) {
        $sets = \Phel::vector($sets);
        $target_930 = (\Phel::getDefinition("phel\\core", "transient"))((\Phel::getDefinition("phel\\core", "hash-set"))());
        foreach (\Phel\Lang\Seq::toIterable($sets) as $s) {
          foreach (\Phel\Lang\Seq::toIterable($s) as $v) {
            (function() use($sets,$target_930,$s,$v) {
              $target_931 = $target_930;
              return $target_931->add($v);
            })();
          }
        }
        return (\Phel::getDefinition("phel\\core", "persistent"))($target_930);
      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(union & sets)\n```\nUnion multiple sets into a new one.",
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2469,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2476,
        \Phel::keyword("column"), 25
      ),
      "min-arity", 0,
      "is-variadic", true,
      "arglists", "[& sets]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "intersection-pair",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\intersection_pair";

      public function __invoke($s1, $s2) {
        while (true) {
          if (($__truthy = ((\Phel::getDefinition("phel\\core", "count"))($s2) < (\Phel::getDefinition("phel\\core", "count"))($s1))) !== null && $__truthy !== false) {
            $__phel_934 = $s2;
            $__phel_935 = $s1;
            $s1 = $__phel_934;
            $s2 = $__phel_935;
            continue;

          } else {
            $result_933 = (\Phel::getDefinition("phel\\core", "transient"))($s1);
            foreach (\Phel\Lang\Seq::toIterable($s1) as $item) {
              if (($__truthy = (function() use($s1,$s2,$result_933,$item) {
                $target_936 = $s2;
                return $target_936->contains($item);
              })()) !== null && $__truthy !== false) {

              } else {
                (function() use($s1,$s2,$result_933,$item) {
                  $target_937 = $result_933;
                  return $target_937->remove($item);
                })();
              }

            }
            return (\Phel::getDefinition("phel\\core", "persistent"))($result_933);
          }
          break;
        }
      }
    },
    \Phel::map(
      \Phel::keyword("private"), true,
      \Phel::keyword("doc"), "```phel\n(intersection-pair s1 s2)\n```\n",
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2478,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2486,
        \Phel::keyword("column"), 28
      ),
      "min-arity", 2,
      "is-variadic", false,
      "arglists", "[s1 s2]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "intersection",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\intersection";

      public function __invoke($set, ...$sets) {
        $sets = \Phel::vector($sets);
        return (\Phel::getDefinition("phel\\core", "reduce"))(\Phel::getDefinition("phel\\core", "intersection-pair"), $set, $sets);
      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(intersection set & sets)\n```\nIntersect multiple sets into a new one.",
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2488,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2491,
        \Phel::keyword("column"), 38
      ),
      "min-arity", 1,
      "is-variadic", true,
      "arglists", "[set & sets]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "difference-pair",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\difference_pair";

      public function __invoke($s1, $s2) {
        if (($__truthy = ((\Phel::getDefinition("phel\\core", "count"))($s1) < (\Phel::getDefinition("phel\\core", "count"))($s2))) !== null && $__truthy !== false) {
          $result_942 = (\Phel::getDefinition("phel\\core", "transient"))($s1);
          foreach (\Phel\Lang\Seq::toIterable($s1) as $item) {
            if (($__truthy = (function() use($s1,$s2,$result_942,$item) {
              $target_944 = $s2;
              return $target_944->contains($item);
            })()) !== null && $__truthy !== false) {
              (function() use($s1,$s2,$result_942,$item) {
                $target_945 = $result_942;
                return $target_945->remove($item);
              })();
            } else {

            }

          }
          return (\Phel::getDefinition("phel\\core", "persistent"))($result_942);
        } else {
          $result_943 = (\Phel::getDefinition("phel\\core", "transient"))($s1);
          foreach (\Phel\Lang\Seq::toIterable($s2) as $item) {
            (function() use($s1,$s2,$result_943,$item) {
              $target_946 = $result_943;
              return $target_946->remove($item);
            })();
          }
          return (\Phel::getDefinition("phel\\core", "persistent"))($result_943);
        }

      }
    },
    \Phel::map(
      \Phel::keyword("private"), true,
      \Phel::keyword("doc"), "```phel\n(difference-pair s1 s2)\n```\n",
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2493,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2505,
        \Phel::keyword("column"), 28
      ),
      "min-arity", 2,
      "is-variadic", false,
      "arglists", "[s1 s2]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "difference",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\difference";

      public function __invoke($set, ...$sets) {
        $sets = \Phel::vector($sets);
        return (\Phel::getDefinition("phel\\core", "reduce"))(\Phel::getDefinition("phel\\core", "difference-pair"), $set, $sets);
      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(difference set & sets)\n```\nDifference between multiple sets into a new one.",
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2507,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2510,
        \Phel::keyword("column"), 36
      ),
      "min-arity", 1,
      "is-variadic", true,
      "arglists", "[set & sets]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "symmetric-difference",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\symmetric_difference";

      public function __invoke($set, ...$sets) {
        $sets = \Phel::vector($sets);
        return (\Phel::getDefinition("phel\\core", "reduce"))(new class($set, $sets) extends \Phel\Lang\AbstractFn {
          public const BOUND_TO = "phel\\core\\symmetric_difference";
          private $set;
          private $sets;

          public function __construct($set, $sets) {
            $this->set = $set;
            $this->sets = $sets;
          }

          public function __invoke($__short_fn_1_950, $__short_fn_2_951) {
            $set = $this->set;
            $sets = $this->sets;
            return (\Phel::getDefinition("phel\\core", "union"))((\Phel::getDefinition("phel\\core", "difference"))($__short_fn_1_950, $__short_fn_2_951), (\Phel::getDefinition("phel\\core", "difference"))($__short_fn_2_951, $__short_fn_1_950));
          }
        }, $set, $sets);
      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(symmetric-difference set & sets)\n```\nSymmetric difference between multiple sets into a new one.",
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2512,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2515,
        \Phel::keyword("column"), 67
      ),
      "min-arity", 1,
      "is-variadic", true,
      "arglists", "[set & sets]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "subset?",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\subset?";

      public function __invoke($s1, $s2) {
        if (($__truthy = ((\Phel::getDefinition("phel\\core", "count"))($s1) > (\Phel::getDefinition("phel\\core", "count"))($s2))) !== null && $__truthy !== false) {
          return false;
        } else {
          $result_952 = (\Phel::getDefinition("phel\\core", "var"))(true);
          foreach (\Phel\Lang\Seq::toIterable($s1) as $item) {
            if (($__truthy = (function() use($s1,$s2,$result_952,$item) {
              $target_953 = $s2;
              return $target_953->contains($item);
            })()) !== null && $__truthy !== false) {

            } else {
              (\Phel::getDefinition("phel\\core", "set!"))($result_952, false);
            }

          }
          return (\Phel::getDefinition("phel\\core", "deref"))($result_952);
        }

      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(subset? s1 s2)\n```\nReturns true if `s1` is a subset of `s2`, i.e. every element in `s1` is also in `s2`.",
      \Phel::keyword("example"), "(subset? (hash-set 1 2) (hash-set 1 2 3)) ; => true",
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2517,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2527,
        \Phel::keyword("column"), 23
      ),
      "min-arity", 2,
      "is-variadic", false,
      "arglists", "[s1 s2]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "superset?",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\superset?";

      public function __invoke($s1, $s2) {
        return (\Phel::getDefinition("phel\\core", "subset?"))($s2, $s1);
      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(superset? s1 s2)\n```\nReturns true if `s1` is a superset of `s2`, i.e. every element in `s2` is also in `s1`.",
      \Phel::keyword("example"), "(superset? (hash-set 1 2 3) (hash-set 1 2)) ; => true",
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2529,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2533,
        \Phel::keyword("column"), 18
      ),
      "min-arity", 2,
      "is-variadic", false,
      "arglists", "[s1 s2]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "constantly",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\constantly";

      public function __invoke($x) {
        return new class($x) extends \Phel\Lang\AbstractFn {
          public const BOUND_TO = "phel\\core\\constantly";
          private $x;

          public function __construct($x) {
            $this->x = $x;
          }

          public function __invoke(...$__phel_955) {
            $x = $this->x;
            $__phel_955 = \Phel::vector($__phel_955);
            return $x;
          }
        };
      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(constantly x)\n```\nReturns a function that always returns `x` and ignores any passed arguments.",
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2539,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2542,
        \Phel::keyword("column"), 15
      ),
      "min-arity", 1,
      "is-variadic", false,
      "arglists", "[x]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "complement",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\complement";

      public function __invoke($f) {
        return new class($f) extends \Phel\Lang\AbstractFn {
          public const BOUND_TO = "phel\\core\\complement";
          private $f;

          public function __construct($f) {
            $this->f = $f;
          }

          public function __invoke(...$__short_fn_rest_956) {
            $f = $this->f;
            $__short_fn_rest_956 = \Phel::vector($__short_fn_rest_956);
            return (\Phel::getDefinition("phel\\core", "not"))(($f)(...(($__short_fn_rest_956) ?? [])));
          }
        };
      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(complement f)\n```\nReturns a function that takes the same arguments as `f` and returns the opposite truth value.",
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2544,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2547,
        \Phel::keyword("column"), 22
      ),
      "min-arity", 1,
      "is-variadic", false,
      "arglists", "[f]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "juxt",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\juxt";

      public function __invoke(...$fs) {
        $fs = \Phel::vector($fs);
        return new class($fs) extends \Phel\Lang\AbstractFn {
          public const BOUND_TO = "phel\\core\\juxt";
          private $fs;

          public function __construct($fs) {
            $this->fs = $fs;
          }

          public function __invoke(...$args) {
            $fs = $this->fs;
            $args = \Phel::vector($args);
            return (\Phel::getDefinition("phel\\core", "reduce"))(new class($fs, $args) extends \Phel\Lang\AbstractFn {
              public const BOUND_TO = "phel\\core\\juxt";
              private $fs;
              private $args;

              public function __construct($fs, $args) {
                $this->fs = $fs;
                $this->args = $args;
              }

              public function __invoke($__short_fn_1_957, $__short_fn_2_958) {
                $fs = $this->fs;
                $args = $this->args;
                return (\Phel::getDefinition("phel\\core", "conj"))($__short_fn_1_957, ($__short_fn_2_958)(...(($args) ?? [])));
              }
            }, \Phel::vector([]), $fs);
          }
        };
      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(juxt & fs)\n```\nTakes a list of functions and returns a new function that is the juxtaposition of those functions.",
      \Phel::keyword("example"), "((juxt inc dec |(* \$ 2)) 10) => [11 9 20]",
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2549,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2557,
        \Phel::keyword("column"), 10
      ),
      "min-arity", 0,
      "is-variadic", true,
      "arglists", "[& fs]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "partial",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\partial";

      public function __invoke($f, ...$args) {
        $args = \Phel::vector($args);
        return new class($f, $args) extends \Phel\Lang\AbstractFn {
          public const BOUND_TO = "phel\\core\\partial";
          private $f;
          private $args;

          public function __construct($f, $args) {
            $this->f = $f;
            $this->args = $args;
          }

          public function __invoke(...$__short_fn_rest_959) {
            $f = $this->f;
            $args = $this->args;
            $__short_fn_rest_959 = \Phel::vector($__short_fn_rest_959);
            return ($f)(...(((\Phel::getDefinition("phel\\core", "concat"))(\Phel::vector([]), $args, $__short_fn_rest_959)) ?? []));
          }
        };
      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(partial f & args)\n```\nTakes a function `f` and fewer than normal arguments of `f` and returns a function\n  that a variable number of additional arguments. When call `f` will be called\n  with `args` and the additional arguments.",
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2559,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2564,
        \Phel::keyword("column"), 33
      ),
      "min-arity", 1,
      "is-variadic", true,
      "arglists", "[f & args]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "memoize",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\memoize";

      public function __invoke($f) {
        $memoize_cache_960 = (\Phel::getDefinition("phel\\core", "var"))(\Phel::map());
        return new class($f, $memoize_cache_960) extends \Phel\Lang\AbstractFn {
          public const BOUND_TO = "phel\\core\\memoize";
          private $f;
          private $memoize_cache_960;

          public function __construct($f, $memoize_cache_960) {
            $this->f = $f;
            $this->memoize_cache_960 = $memoize_cache_960;
          }

          public function __invoke(...$args) {
            $f = $this->f;
            $memoize_cache_960 = $this->memoize_cache_960;
            $args = \Phel::vector($args);
            $c_961 = (\Phel::getDefinition("phel\\core", "deref"))($memoize_cache_960);
            if (($__truthy = (\Phel::getDefinition("phel\\core", "contains?"))($c_961, $args)) !== null && $__truthy !== false) {
              return (\Phel::getDefinition("phel\\core", "get"))($c_961, $args);
            } else {
              $res_962 = ($f)(...(($args) ?? []));
              (\Phel::getDefinition("phel\\core", "set!"))($memoize_cache_960, (\Phel::getDefinition("phel\\core", "assoc"))($c_961, $args, $res_962));
              return $res_962;
            }

          }
        };
      }
    },
    \Phel::map(
      \Phel::keyword("doc"), "```phel\n(memoize f)\n```\nReturns a memoized version of the function `f`. The memoized function\n  caches the return value for each set of arguments.",
      \Phel::keyword("example"), (\Phel::getDefinition("phel\\core", "str"))("(defn fact [n]", PHP_EOL, "  (if (zero? n)", PHP_EOL, "    1", PHP_EOL, "    (* n (fact (dec n)))))", PHP_EOL, "(def fact-memo (memoize fact))"),
      \Phel::keyword("see-also"), \Phel::vector(["memoize-lru"]),
      \Phel::keyword("start-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2566,
        \Phel::keyword("column"), 0
      ),
      \Phel::keyword("end-location"), \Phel::map(
        \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
        \Phel::keyword("line"), 2584,
        \Phel::keyword("column"), 21
      ),
      "min-arity", 1,
      "is-variadic", false,
      "arglists", "[f]"
    )
  );
  \Phel::addDefinition(
    "phel\\core",
    "memoize-lru",
    new class() extends \Phel\Lang\AbstractFn {
      public const BOUND_TO = "phel\\core\\memoize_lru";
      private $fn0;
      private $fn1;

      public function __construct() {
        $this->fn0 = new class() extends \Phel\Lang\AbstractFn {
          public const BOUND_TO = "phel\\core\\memoize_lru";

          public function __invoke($f) {
            return (\Phel::getDefinition("phel\\core", "memoize-lru"))($f, 128);
          }
        };
        $this->fn1 = new class() extends \Phel\Lang\AbstractFn {
          public const BOUND_TO = "phel\\core\\memoize_lru";

          public function __invoke($f, $max_size) {
            $cache_964 = (\Phel::getDefinition("phel\\core", "var"))(\Phel::map());
            $tick_965 = (\Phel::getDefinition("phel\\core", "var"))(0);
            return new class($f, $max_size, $cache_964, $tick_965) extends \Phel\Lang\AbstractFn {
              public const BOUND_TO = "phel\\core\\memoize_lru";
              private $f;
              private $max_size;
              private $cache_964;
              private $tick_965;

              public function __construct($f, $max_size, $cache_964, $tick_965) {
                $this->f = $f;
                $this->max_size = $max_size;
                $this->cache_964 = $cache_964;
                $this->tick_965 = $tick_965;
              }

              public function __invoke(...$args) {
                $f = $this->f;
                $max_size = $this->max_size;
                $cache_964 = $this->cache_964;
                $tick_965 = $this->tick_965;
                $args = \Phel::vector($args);
                $c_966 = (\Phel::getDefinition("phel\\core", "deref"))($cache_964);
                $t_967 = (\Phel::getDefinition("phel\\core", "swap!"))($tick_965, new class($f, $max_size, $cache_964, $tick_965, $args, $c_966) extends \Phel\Lang\AbstractFn {
                  public const BOUND_TO = "phel\\core\\memoize_lru.t";
                  private $f;
                  private $max_size;
                  private $cache_964;
                  private $tick_965;
                  private $args;
                  private $c_966;

                  public function __construct($f, $max_size, $cache_964, $tick_965, $args, $c_966) {
                    $this->f = $f;
                    $this->max_size = $max_size;
                    $this->cache_964 = $cache_964;
                    $this->tick_965 = $tick_965;
                    $this->args = $args;
                    $this->c_966 = $c_966;
                  }

                  public function __invoke($__short_fn_1_963) {
                    $f = $this->f;
                    $max_size = $this->max_size;
                    $cache_964 = $this->cache_964;
                    $tick_965 = $this->tick_965;
                    $args = $this->args;
                    $c_966 = $this->c_966;
                    return (1 + $__short_fn_1_963);
                  }
                });
                if (($__truthy = (\Phel::getDefinition("phel\\core", "contains?"))($c_966, $args)) !== null && $__truthy !== false) {
                  $entry_968 = (\Phel::getDefinition("phel\\core", "get"))($c_966, $args);
                  (\Phel::getDefinition("phel\\core", "set!"))($cache_964, (\Phel::getDefinition("phel\\core", "assoc"))($c_966, $args, \Phel::map(
                    \Phel::keyword("value"), (\Phel::getDefinition("phel\\core", "get"))($entry_968, \Phel::keyword("value")),
                    \Phel::keyword("accessed"), $t_967
                  )));
                  return (\Phel::getDefinition("phel\\core", "get"))($entry_968, \Phel::keyword("value"));
                } else {
                  $res_969 = ($f)(...(($args) ?? []));
                  $new_entry_970 = \Phel::map(
                    \Phel::keyword("value"), $res_969,
                    \Phel::keyword("accessed"), $t_967
                  );
                  $new_cache_971 = (\Phel::getDefinition("phel\\core", "assoc"))($c_966, $args, $new_entry_970);
                  if (($__truthy = ((\Phel::getDefinition("phel\\core", "count"))($new_cache_971) > $max_size)) !== null && $__truthy !== false) {
                    $lru_key_972 = (\Phel::getDefinition("phel\\core", "reduce"))(new class($f, $max_size, $cache_964, $tick_965, $args, $c_966, $t_967, $res_969, $new_entry_970, $new_cache_971) extends \Phel\Lang\AbstractFn {
                      public const BOUND_TO = "phel\\core\\memoize_lru.lru_key";
                      private $f;
                      private $max_size;
                      private $cache_964;
                      private $tick_965;
                      private $args;
                      private $c_966;
                      private $t_967;
                      private $res_969;
                      private $new_entry_970;
                      private $new_cache_971;

                      public function __construct($f, $max_size, $cache_964, $tick_965, $args, $c_966, $t_967, $res_969, $new_entry_970, $new_cache_971) {
                        $this->f = $f;
                        $this->max_size = $max_size;
                        $this->cache_964 = $cache_964;
                        $this->tick_965 = $tick_965;
                        $this->args = $args;
                        $this->c_966 = $c_966;
                        $this->t_967 = $t_967;
                        $this->res_969 = $res_969;
                        $this->new_entry_970 = $new_entry_970;
                        $this->new_cache_971 = $new_cache_971;
                      }

                      public function __invoke($oldest_key, $current_key) {
                        $f = $this->f;
                        $max_size = $this->max_size;
                        $cache_964 = $this->cache_964;
                        $tick_965 = $this->tick_965;
                        $args = $this->args;
                        $c_966 = $this->c_966;
                        $t_967 = $this->t_967;
                        $res_969 = $this->res_969;
                        $new_entry_970 = $this->new_entry_970;
                        $new_cache_971 = $this->new_cache_971;
                        if (($__truthy = ((\Phel::getDefinition("phel\\core", "get"))((\Phel::getDefinition("phel\\core", "get"))($new_cache_971, $current_key), \Phel::keyword("accessed")) < (\Phel::getDefinition("phel\\core", "get"))((\Phel::getDefinition("phel\\core", "get"))($new_cache_971, $oldest_key), \Phel::keyword("accessed")))) !== null && $__truthy !== false) {
                          return $current_key;
                        } else {
                          return $oldest_key;
                        }

                      }
                    }, (\Phel::getDefinition("phel\\core", "first"))((\Phel::getDefinition("phel\\core", "keys"))($new_cache_971)), (\Phel::getDefinition("phel\\core", "keys"))($new_cache_971));
                    (\Phel::getDefinition("phel\\core", "set!"))($cache_964, (\Phel::getDefinition("phel\\core", "dissoc"))($new_cache_971, $lru_key_972));
                  } else {
                    (\Phel::getDefinition("phel\\core", "set!"))($cache_964, $new_cache_971);
                  }

                  return $res_969;
                }

              }
            };
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
        \Phel::keyword("doc"), "```phel\n(memoize-lru f)\n(memoize-lru f max-size)\n```\nReturns a memoized version of the function `f` with an LRU (Least Recently Used)\n  cache limited to `max-size` entries. When the cache exceeds `max-size`, the\n  least recently used entry is evicted. This prevents unbounded memory growth\n  in long-running processes.\n\n  Without arguments, uses a default cache size of 128 entries.",
        \Phel::keyword("example"), (\Phel::getDefinition("phel\\core", "str"))("(defn fact [n]", PHP_EOL, "  (if (zero? n)", PHP_EOL, "    1", PHP_EOL, "    (* n (fact (dec n)))))", PHP_EOL, "(def fact-memo (memoize-lru fact 100))"),
        \Phel::keyword("see-also"), \Phel::vector(["memoize"]),
        \Phel::keyword("start-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2586,
          \Phel::keyword("column"), 0
        ),
        \Phel::keyword("end-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2625,
          \Phel::keyword("column"), 23
        ),
        "min-arity", 1,
        "is-variadic", false,
        "max-arity", 2,
        "arglists", "([f] [f max-size])"
      )
    );
    \Phel::addDefinition(
      "phel\\core",
      "tree-seq",
      new class() extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\core\\tree_seq";

        public function __invoke($branch_QMARK_, $children, $root) {
          $ret_973 = (\Phel::getDefinition("phel\\core", "transient"))(\Phel::vector([]));
          $stack_974 = array($root);
          while (true) {
            if (($__truthy = ((\Phel::getDefinition("phel\\core", "count"))($stack_974) > 0)) !== null && $__truthy !== false) {
              $node_975 = (\Phel::getDefinition("phel\\core", "pop"))($stack_974);
              (\Phel::getDefinition("phel\\core", "conj"))($ret_973, $node_975);
              if (($__truthy = ($branch_QMARK_)($node_975)) !== null && $__truthy !== false) {
                $reversed_children_976 = (\Phel::getDefinition("phel\\core", "reverse"))(($children)($node_975));
                foreach (\Phel\Lang\Seq::toIterable($reversed_children_976) as $child) {
                  ($stack_974)[] = $child;
                }
                $__phel_977 = $stack_974;
                $stack_974 = $__phel_977;
                continue;

              } else {
                $__phel_978 = $stack_974;
                $stack_974 = $__phel_978;
                continue;

              }

            } else {
              return (\Phel::getDefinition("phel\\core", "with-meta"))($root, (\Phel::getDefinition("phel\\core", "persistent"))($ret_973));
            }
            break;
          }
        }
      },
      \Phel::map(
        \Phel::keyword("doc"), "```phel\n(tree-seq branch? children root)\n```\nReturns a vector of the nodes in the tree, via a depth-first walk.\n  branch? is a function with one argument that returns true if the given node\n  has children.\n  children must be a function with one argument that returns the children of the node.\n  root the root node of the tree.",
        \Phel::keyword("start-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2631,
          \Phel::keyword("column"), 0
        ),
        \Phel::keyword("end-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2649,
          \Phel::keyword("column"), 45
        ),
        "min-arity", 3,
        "is-variadic", false,
        "arglists", "[branch? children root]"
      )
    );
    \Phel::addDefinition(
      "phel\\core",
      "flatten",
      new class() extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\core\\flatten";

        public function __invoke($coll) {
          return (\Phel::getDefinition("phel\\core", "filter"))((\Phel::getDefinition("phel\\core", "complement"))(\Phel::getDefinition("phel\\core", "indexed?")), (\Phel::getDefinition("phel\\core", "rest"))((\Phel::getDefinition("phel\\core", "tree-seq"))(\Phel::getDefinition("phel\\core", "indexed?"), \Phel::getDefinition("phel\\core", "identity"), $coll)));
        }
      },
      \Phel::map(
        \Phel::keyword("doc"), "```phel\n(flatten coll)\n```\nFlattens nested sequential structure into a lazy sequence of all leaf values.",
        \Phel::keyword("example"), "(flatten [[1 2] [3 [4 5]] 6]) ; => (1 2 3 4 5 6)",
        \Phel::keyword("start-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2651,
          \Phel::keyword("column"), 0
        ),
        \Phel::keyword("end-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2657,
          \Phel::keyword("column"), 45
        ),
        "min-arity", 1,
        "is-variadic", false,
        "arglists", "[coll]"
      )
    );
    \Phel::addDefinition(
      "phel\\core",
      "merge-with-2",
      new class() extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\core\\merge_with_2";

        public function __invoke($f, $left, $right) {
          $__phel_981_985 = (\Phel::getDefinition("phel\\core", "var"))($left);
          foreach (\Phel\Lang\Seq::toIterable($right) as $__phel_984 => $__phel_983) {
            $__phel_986_991 = \Phel::vector([$__phel_984, $__phel_983]);
            $__phel_987_992 = (\Phel::getDefinition("phel\\core", "first"))($__phel_986_991);
            $__phel_988_993 = (\Phel::getDefinition("phel\\core", "next"))($__phel_986_991);
            $k_994 = $__phel_987_992;
            $__phel_989_995 = (\Phel::getDefinition("phel\\core", "first"))($__phel_988_993);
            $__phel_990_996 = (\Phel::getDefinition("phel\\core", "next"))($__phel_988_993);
            $v_997 = $__phel_989_995;
            (\Phel::getDefinition("phel\\core", "swap!"))($__phel_981_985, new class($f, $left, $right, $__phel_981_985, $__phel_983, $__phel_984, $__phel_986_991, $__phel_987_992, $__phel_988_993, $k_994, $__phel_989_995, $__phel_990_996, $v_997) extends \Phel\Lang\AbstractFn {
              public const BOUND_TO = "phel\\core\\merge_with_2";
              private $f;
              private $left;
              private $right;
              private $__phel_981_985;
              private $__phel_983;
              private $__phel_984;
              private $__phel_986_991;
              private $__phel_987_992;
              private $__phel_988_993;
              private $k_994;
              private $__phel_989_995;
              private $__phel_990_996;
              private $v_997;

              public function __construct($f, $left, $right, $__phel_981_985, $__phel_983, $__phel_984, $__phel_986_991, $__phel_987_992, $__phel_988_993, $k_994, $__phel_989_995, $__phel_990_996, $v_997) {
                $this->f = $f;
                $this->left = $left;
                $this->right = $right;
                $this->__phel_981_985 = $__phel_981_985;
                $this->__phel_983 = $__phel_983;
                $this->__phel_984 = $__phel_984;
                $this->__phel_986_991 = $__phel_986_991;
                $this->__phel_987_992 = $__phel_987_992;
                $this->__phel_988_993 = $__phel_988_993;
                $this->k_994 = $k_994;
                $this->__phel_989_995 = $__phel_989_995;
                $this->__phel_990_996 = $__phel_990_996;
                $this->v_997 = $v_997;
              }

              public function __invoke($acc) {
                $f = $this->f;
                $left = $this->left;
                $right = $this->right;
                $__phel_981_985 = $this->__phel_981_985;
                $__phel_983 = $this->__phel_983;
                $__phel_984 = $this->__phel_984;
                $__phel_986_991 = $this->__phel_986_991;
                $__phel_987_992 = $this->__phel_987_992;
                $__phel_988_993 = $this->__phel_988_993;
                $k_994 = $this->k_994;
                $__phel_989_995 = $this->__phel_989_995;
                $__phel_990_996 = $this->__phel_990_996;
                $v_997 = $this->v_997;
                if (($__truthy = (\Phel::getDefinition("phel\\core", "contains?"))($acc, $k_994)) !== null && $__truthy !== false) {
                  return (\Phel::getDefinition("phel\\core", "assoc"))($acc, $k_994, ($f)((\Phel::getDefinition("phel\\core", "get"))($acc, $k_994), $v_997));
                } else {
                  return (\Phel::getDefinition("phel\\core", "assoc"))($acc, $k_994, $v_997);
                }

              }
            });
          }
          return (\Phel::getDefinition("phel\\core", "deref"))($__phel_981_985);
        }
      },
      \Phel::map(
        \Phel::keyword("private"), true,
        \Phel::keyword("doc"), "```phel\n(merge-with-2 f left right)\n```\n",
        \Phel::keyword("start-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2659,
          \Phel::keyword("column"), 0
        ),
        \Phel::keyword("end-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2664,
          \Phel::keyword("column"), 24
        ),
        "min-arity", 3,
        "is-variadic", false,
        "arglists", "[f left right]"
      )
    );
    \Phel::addDefinition(
      "phel\\core",
      "merge-with",
      new class() extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\core\\merge_with";

        public function __invoke($f, ...$hash_maps) {
          $hash_maps = \Phel::vector($hash_maps);
          $__phel_998_999 = (\Phel::getDefinition("phel\\core", "count"))($hash_maps);
          if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_998_999, 0)) !== null && $__truthy !== false) {
            return \Phel::map();
          } else {
            $__phel_1000_1001 = $__phel_998_999;
            if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_1000_1001, 1)) !== null && $__truthy !== false) {
              return (\Phel::getDefinition("phel\\core", "first"))($hash_maps);
            } else {
              $__phel_1002_1003 = $__phel_1000_1001;
              if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_1002_1003, 2)) !== null && $__truthy !== false) {
                return (\Phel::getDefinition("phel\\core", "merge-with-2"))($f, (\Phel::getDefinition("phel\\core", "first"))($hash_maps), (\Phel::getDefinition("phel\\core", "second"))($hash_maps));
              } else {
                return (\Phel::getDefinition("phel\\core", "reduce"))((\Phel::getDefinition("phel\\core", "partial"))(\Phel::getDefinition("phel\\core", "merge-with"), $f), (\Phel::getDefinition("phel\\core", "first"))($hash_maps), (\Phel::getDefinition("phel\\core", "rest"))($hash_maps));
              }

            }

          }

        }
      },
      \Phel::map(
        \Phel::keyword("doc"), "```phel\n(merge-with f & hash-maps)\n```\nMerges multiple maps into one new map. If a key appears in more than one\n   collection, the result of `(f current-val next-val)` is used.",
        \Phel::keyword("start-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2666,
          \Phel::keyword("column"), 0
        ),
        \Phel::keyword("end-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2674,
          \Phel::keyword("column"), 72
        ),
        "min-arity", 1,
        "is-variadic", true,
        "arglists", "[f & hash-maps]"
      )
    );
    \Phel::addDefinition(
      "phel\\core",
      "deep-merge",
      null,
      \Phel::map(
        \Phel::keyword("start-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2676,
          \Phel::keyword("column"), 0
        ),
        \Phel::keyword("end-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2676,
          \Phel::keyword("column"), 20
        )
      )
    );
    \Phel::addDefinition(
      "phel\\core",
      "deep-merge-2",
      new class() extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\core\\deep_merge_2";

        public function __invoke($left, $right) {
          if (($__truthy = (\Phel::getDefinition("phel\\core", "nil?"))($left)) !== null && $__truthy !== false) {
            return $right;
          } else {
            if (($__truthy = (\Phel::getDefinition("phel\\core", "nil?"))($right)) !== null && $__truthy !== false) {
              return $left;
            } else {
              if (($__truthy = (function() use($left,$right) {
                $__phel_1004_1005 = (\Phel::getDefinition("phel\\core", "hash-map?"))($left);
                if (($__truthy = $__phel_1004_1005) !== null && $__truthy !== false) {
                  return (\Phel::getDefinition("phel\\core", "hash-map?"))($right);
                } else {
                  return $__phel_1004_1005;
                }

              })()) !== null && $__truthy !== false) {
                return (\Phel::getDefinition("phel\\core", "merge-with"))(\Phel::getDefinition("phel\\core", "deep-merge"), $left, $right);
              } else {
                if (($__truthy = (function() use($left,$right) {
                  $__phel_1006_1007 = (\Phel::getDefinition("phel\\core", "set?"))($left);
                  if (($__truthy = $__phel_1006_1007) !== null && $__truthy !== false) {
                    return (\Phel::getDefinition("phel\\core", "set?"))($right);
                  } else {
                    return $__phel_1006_1007;
                  }

                })()) !== null && $__truthy !== false) {
                  return (\Phel::getDefinition("phel\\core", "union"))($left, $right);
                } else {
                  if (($__truthy = (function() use($left,$right) {
                    $__phel_1008_1009 = (\Phel::getDefinition("phel\\core", "vector?"))($left);
                    if (($__truthy = $__phel_1008_1009) !== null && $__truthy !== false) {
                      return (\Phel::getDefinition("phel\\core", "vector?"))($right);
                    } else {
                      return $__phel_1008_1009;
                    }

                  })()) !== null && $__truthy !== false) {
                    return (\Phel::getDefinition("phel\\core", "vector"))(...(((\Phel::getDefinition("phel\\core", "concat"))($left, $right)) ?? []));
                  } else {
                    return $right;
                  }

                }

              }

            }

          }

        }
      },
      \Phel::map(
        \Phel::keyword("private"), true,
        \Phel::keyword("doc"), "```phel\n(deep-merge-2 left right)\n```\n",
        \Phel::keyword("start-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2678,
          \Phel::keyword("column"), 0
        ),
        \Phel::keyword("end-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2685,
          \Phel::keyword("column"), 11
        ),
        "min-arity", 2,
        "is-variadic", false,
        "arglists", "[left right]"
      )
    );
    \Phel::addDefinition(
      "phel\\core",
      "deep-merge",
      new class() extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\core\\deep_merge";

        public function __invoke(...$args) {
          $args = \Phel::vector($args);
          $__phel_1010_1011 = (\Phel::getDefinition("phel\\core", "count"))($args);
          if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_1010_1011, 0)) !== null && $__truthy !== false) {
            return \Phel::map();
          } else {
            $__phel_1012_1013 = $__phel_1010_1011;
            if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_1012_1013, 1)) !== null && $__truthy !== false) {
              return (\Phel::getDefinition("phel\\core", "first"))($args);
            } else {
              $__phel_1014_1015 = $__phel_1012_1013;
              if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_1014_1015, 2)) !== null && $__truthy !== false) {
                return (\Phel::getDefinition("phel\\core", "deep-merge-2"))((\Phel::getDefinition("phel\\core", "first"))($args), (\Phel::getDefinition("phel\\core", "second"))($args));
              } else {
                return (\Phel::getDefinition("phel\\core", "reduce"))(\Phel::getDefinition("phel\\core", "deep-merge"), (\Phel::getDefinition("phel\\core", "first"))($args), (\Phel::getDefinition("phel\\core", "rest"))($args));
              }

            }

          }

        }
      },
      \Phel::map(
        \Phel::keyword("doc"), "```phel\n(deep-merge & args)\n```\nRecursively merges data structures.",
        \Phel::keyword("start-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2687,
          \Phel::keyword("column"), 0
        ),
        \Phel::keyword("end-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2694,
          \Phel::keyword("column"), 50
        ),
        "min-arity", 0,
        "is-variadic", true,
        "arglists", "[& args]"
      )
    );
    \Phel::addDefinition(
      "phel\\core",
      "assert-non-nil",
      new class() extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\core\\assert_non_nil";

        public function __invoke(...$xs) {
          $xs = \Phel::vector($xs);
          return (function() use($xs) {
            foreach (\Phel\Lang\Seq::toIterable($xs) as $x) {
              if (($__truthy = (null === $x)) !== null && $__truthy !== false) {
                throw (new \InvalidArgumentException("Arithmetic functions do not accept nil values"));
              } else {

              }

            }
            return null;
          })();
        }
      },
      \Phel::map(
        \Phel::keyword("private"), true,
        \Phel::keyword("doc"), "```phel\n(assert-non-nil & xs)\n```\n",
        \Phel::keyword("start-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2700,
          \Phel::keyword("column"), 0
        ),
        \Phel::keyword("end-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2704,
          \Phel::keyword("column"), 100
        ),
        "min-arity", 0,
        "is-variadic", true,
        "arglists", "[& xs]"
      )
    );
    \Phel::addDefinition(
      "phel\\core",
      "bit-and",
      new class() extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\core\\bit_and";

        public function __invoke($x, $y, ...$args) {
          $args = \Phel::vector($args);
          (\Phel::getDefinition("phel\\core", "assert-non-nil"))(...(((\Phel::getDefinition("phel\\core", "concat"))(\Phel::vector([$x, $y]), $args)) ?? []));
          $all_1018 = (\Phel::getDefinition("phel\\core", "concat"))(\Phel::vector([$x, $y]), $args);
          return (\Phel::getDefinition("phel\\core", "reduce"))(new class($x, $y, $args, $all_1018) extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\core\\bit_and";
            private $x;
            private $y;
            private $args;
            private $all_1018;

            public function __construct($x, $y, $args, $all_1018) {
              $this->x = $x;
              $this->y = $y;
              $this->args = $args;
              $this->all_1018 = $all_1018;
            }

            public function __invoke($__short_fn_1_1016, $__short_fn_2_1017) {
              $x = $this->x;
              $y = $this->y;
              $args = $this->args;
              $all_1018 = $this->all_1018;
              return ($__short_fn_1_1016 & $__short_fn_2_1017);
            }
          }, $all_1018);
        }
      },
      \Phel::map(
        \Phel::keyword("doc"), "```phel\n(bit-and x y & args)\n```\nBitwise and.",
        \Phel::keyword("inline"), new class() extends \Phel\Lang\AbstractFn {
          public const BOUND_TO = "";

          public function __invoke($x, $y, ...$args) {
            $args = \Phel::vector($args);
            return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("do"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/assert-non-nil"))), (\Phel::getDefinition("phel\\core", "list"))($x), (\Phel::getDefinition("phel\\core", "list"))($y), $args)) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("php/&"))), (\Phel::getDefinition("phel\\core", "list"))($x), (\Phel::getDefinition("phel\\core", "list"))($y), $args)) ?? []))))) ?? []));
          }
        },
        \Phel::keyword("start-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2710,
          \Phel::keyword("column"), 0
        ),
        \Phel::keyword("end-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2716,
          \Phel::keyword("column"), 33
        ),
        "min-arity", 2,
        "is-variadic", true,
        "arglists", "[x y & args]"
      )
    );
    \Phel::addDefinition(
      "phel\\core",
      "bit-or",
      new class() extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\core\\bit_or";

        public function __invoke($x, $y, ...$args) {
          $args = \Phel::vector($args);
          (\Phel::getDefinition("phel\\core", "assert-non-nil"))(...(((\Phel::getDefinition("phel\\core", "concat"))(\Phel::vector([$x, $y]), $args)) ?? []));
          $all_1021 = (\Phel::getDefinition("phel\\core", "concat"))(\Phel::vector([$x, $y]), $args);
          return (\Phel::getDefinition("phel\\core", "reduce"))(new class($x, $y, $args, $all_1021) extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\core\\bit_or";
            private $x;
            private $y;
            private $args;
            private $all_1021;

            public function __construct($x, $y, $args, $all_1021) {
              $this->x = $x;
              $this->y = $y;
              $this->args = $args;
              $this->all_1021 = $all_1021;
            }

            public function __invoke($__short_fn_1_1019, $__short_fn_2_1020) {
              $x = $this->x;
              $y = $this->y;
              $args = $this->args;
              $all_1021 = $this->all_1021;
              return ($__short_fn_1_1019 | $__short_fn_2_1020);
            }
          }, $all_1021);
        }
      },
      \Phel::map(
        \Phel::keyword("doc"), "```phel\n(bit-or x y & args)\n```\nBitwise or.",
        \Phel::keyword("inline"), new class() extends \Phel\Lang\AbstractFn {
          public const BOUND_TO = "";

          public function __invoke($x, $y, ...$args) {
            $args = \Phel::vector($args);
            return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("do"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/assert-non-nil"))), (\Phel::getDefinition("phel\\core", "list"))($x), (\Phel::getDefinition("phel\\core", "list"))($y), $args)) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("php/|"))), (\Phel::getDefinition("phel\\core", "list"))($x), (\Phel::getDefinition("phel\\core", "list"))($y), $args)) ?? []))))) ?? []));
          }
        },
        \Phel::keyword("start-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2718,
          \Phel::keyword("column"), 0
        ),
        \Phel::keyword("end-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2724,
          \Phel::keyword("column"), 33
        ),
        "min-arity", 2,
        "is-variadic", true,
        "arglists", "[x y & args]"
      )
    );
    \Phel::addDefinition(
      "phel\\core",
      "bit-xor",
      new class() extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\core\\bit_xor";

        public function __invoke($x, $y, ...$args) {
          $args = \Phel::vector($args);
          (\Phel::getDefinition("phel\\core", "assert-non-nil"))(...(((\Phel::getDefinition("phel\\core", "concat"))(\Phel::vector([$x, $y]), $args)) ?? []));
          $all_1024 = (\Phel::getDefinition("phel\\core", "concat"))(\Phel::vector([$x, $y]), $args);
          return (\Phel::getDefinition("phel\\core", "reduce"))(new class($x, $y, $args, $all_1024) extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\core\\bit_xor";
            private $x;
            private $y;
            private $args;
            private $all_1024;

            public function __construct($x, $y, $args, $all_1024) {
              $this->x = $x;
              $this->y = $y;
              $this->args = $args;
              $this->all_1024 = $all_1024;
            }

            public function __invoke($__short_fn_1_1022, $__short_fn_2_1023) {
              $x = $this->x;
              $y = $this->y;
              $args = $this->args;
              $all_1024 = $this->all_1024;
              return ($__short_fn_1_1022 ^ $__short_fn_2_1023);
            }
          }, $all_1024);
        }
      },
      \Phel::map(
        \Phel::keyword("doc"), "```phel\n(bit-xor x y & args)\n```\nBitwise xor.",
        \Phel::keyword("inline"), new class() extends \Phel\Lang\AbstractFn {
          public const BOUND_TO = "";

          public function __invoke($x, $y, ...$args) {
            $args = \Phel::vector($args);
            return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("do"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/assert-non-nil"))), (\Phel::getDefinition("phel\\core", "list"))($x), (\Phel::getDefinition("phel\\core", "list"))($y), $args)) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("php/^"))), (\Phel::getDefinition("phel\\core", "list"))($x), (\Phel::getDefinition("phel\\core", "list"))($y), $args)) ?? []))))) ?? []));
          }
        },
        \Phel::keyword("start-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2726,
          \Phel::keyword("column"), 0
        ),
        \Phel::keyword("end-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2732,
          \Phel::keyword("column"), 33
        ),
        "min-arity", 2,
        "is-variadic", true,
        "arglists", "[x y & args]"
      )
    );
    \Phel::addDefinition(
      "phel\\core",
      "bit-not",
      new class() extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\core\\bit_not";

        public function __invoke($x) {
          (\Phel::getDefinition("phel\\core", "assert-non-nil"))($x);
          return ~($x);
        }
      },
      \Phel::map(
        \Phel::keyword("doc"), "```phel\n(bit-not x)\n```\nBitwise complement.",
        \Phel::keyword("inline"), new class() extends \Phel\Lang\AbstractFn {
          public const BOUND_TO = "";

          public function __invoke($x) {
            return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("do"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/assert-non-nil"))), (\Phel::getDefinition("phel\\core", "list"))($x))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("php/~"))), (\Phel::getDefinition("phel\\core", "list"))($x))) ?? []))))) ?? []));
          }
        },
        \Phel::keyword("start-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2734,
          \Phel::keyword("column"), 0
        ),
        \Phel::keyword("end-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2739,
          \Phel::keyword("column"), 12
        ),
        "min-arity", 1,
        "is-variadic", false,
        "arglists", "[x]"
      )
    );
    \Phel::addDefinition(
      "phel\\core",
      "bit-shift-left",
      new class() extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\core\\bit_shift_left";

        public function __invoke($x, $n) {
          (\Phel::getDefinition("phel\\core", "assert-non-nil"))($x, $n);
          return ($x << $n);
        }
      },
      \Phel::map(
        \Phel::keyword("doc"), "```phel\n(bit-shift-left x n)\n```\nBitwise shift left.",
        \Phel::keyword("inline"), new class() extends \Phel\Lang\AbstractFn {
          public const BOUND_TO = "";

          public function __invoke($x, $n) {
            return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("do"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/assert-non-nil"))), (\Phel::getDefinition("phel\\core", "list"))($x), (\Phel::getDefinition("phel\\core", "list"))($n))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("php/<<"))), (\Phel::getDefinition("phel\\core", "list"))($x), (\Phel::getDefinition("phel\\core", "list"))($n))) ?? []))))) ?? []));
          }
        },
        \Phel::keyword("start-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2741,
          \Phel::keyword("column"), 0
        ),
        \Phel::keyword("end-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2746,
          \Phel::keyword("column"), 15
        ),
        "min-arity", 2,
        "is-variadic", false,
        "arglists", "[x n]"
      )
    );
    \Phel::addDefinition(
      "phel\\core",
      "bit-shift-right",
      new class() extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\core\\bit_shift_right";

        public function __invoke($x, $n) {
          (\Phel::getDefinition("phel\\core", "assert-non-nil"))($x, $n);
          return ($x >> $n);
        }
      },
      \Phel::map(
        \Phel::keyword("doc"), "```phel\n(bit-shift-right x n)\n```\nBitwise shift right.",
        \Phel::keyword("inline"), new class() extends \Phel\Lang\AbstractFn {
          public const BOUND_TO = "";

          public function __invoke($x, $n) {
            return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("do"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/assert-non-nil"))), (\Phel::getDefinition("phel\\core", "list"))($x), (\Phel::getDefinition("phel\\core", "list"))($n))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("php/>>"))), (\Phel::getDefinition("phel\\core", "list"))($x), (\Phel::getDefinition("phel\\core", "list"))($n))) ?? []))))) ?? []));
          }
        },
        \Phel::keyword("start-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2748,
          \Phel::keyword("column"), 0
        ),
        \Phel::keyword("end-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2753,
          \Phel::keyword("column"), 15
        ),
        "min-arity", 2,
        "is-variadic", false,
        "arglists", "[x n]"
      )
    );
    \Phel::addDefinition(
      "phel\\core",
      "bit-set",
      new class() extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\core\\bit_set";

        public function __invoke($x, $n) {
          (\Phel::getDefinition("phel\\core", "assert-non-nil"))($x, (function() use($x,$n) {
            (\Phel::getDefinition("phel\\core", "assert-non-nil"))(1, $n);
            return (1 << $n);
          })());
          return ($x | (function() use($x,$n) {
            (\Phel::getDefinition("phel\\core", "assert-non-nil"))(1, $n);
            return (1 << $n);
          })());
        }
      },
      \Phel::map(
        \Phel::keyword("doc"), "```phel\n(bit-set x n)\n```\nSet bit an index `n`.",
        \Phel::keyword("start-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2755,
          \Phel::keyword("column"), 0
        ),
        \Phel::keyword("end-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2758,
          \Phel::keyword("column"), 34
        ),
        "min-arity", 2,
        "is-variadic", false,
        "arglists", "[x n]"
      )
    );
    \Phel::addDefinition(
      "phel\\core",
      "bit-clear",
      new class() extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\core\\bit_clear";

        public function __invoke($x, $n) {
          (\Phel::getDefinition("phel\\core", "assert-non-nil"))($x, (function() use($x,$n) {
            (\Phel::getDefinition("phel\\core", "assert-non-nil"))((function() use($x,$n) {
              (\Phel::getDefinition("phel\\core", "assert-non-nil"))(1, $n);
              return (1 << $n);
            })());
            return ~((function() use($x,$n) {
              (\Phel::getDefinition("phel\\core", "assert-non-nil"))(1, $n);
              return (1 << $n);
            })());
          })());
          return ($x & (function() use($x,$n) {
            (\Phel::getDefinition("phel\\core", "assert-non-nil"))((function() use($x,$n) {
              (\Phel::getDefinition("phel\\core", "assert-non-nil"))(1, $n);
              return (1 << $n);
            })());
            return ~((function() use($x,$n) {
              (\Phel::getDefinition("phel\\core", "assert-non-nil"))(1, $n);
              return (1 << $n);
            })());
          })());
        }
      },
      \Phel::map(
        \Phel::keyword("doc"), "```phel\n(bit-clear x n)\n```\nClear bit an index `n`.",
        \Phel::keyword("start-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2760,
          \Phel::keyword("column"), 0
        ),
        \Phel::keyword("end-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2763,
          \Phel::keyword("column"), 45
        ),
        "min-arity", 2,
        "is-variadic", false,
        "arglists", "[x n]"
      )
    );
    \Phel::addDefinition(
      "phel\\core",
      "bit-flip",
      new class() extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\core\\bit_flip";

        public function __invoke($x, $n) {
          (\Phel::getDefinition("phel\\core", "assert-non-nil"))($x, (function() use($x,$n) {
            (\Phel::getDefinition("phel\\core", "assert-non-nil"))(1, $n);
            return (1 << $n);
          })());
          return ($x ^ (function() use($x,$n) {
            (\Phel::getDefinition("phel\\core", "assert-non-nil"))(1, $n);
            return (1 << $n);
          })());
        }
      },
      \Phel::map(
        \Phel::keyword("doc"), "```phel\n(bit-flip x n)\n```\nFlip bit at index `n`.",
        \Phel::keyword("start-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2765,
          \Phel::keyword("column"), 0
        ),
        \Phel::keyword("end-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2768,
          \Phel::keyword("column"), 35
        ),
        "min-arity", 2,
        "is-variadic", false,
        "arglists", "[x n]"
      )
    );
    \Phel::addDefinition(
      "phel\\core",
      "bit-test",
      new class() extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\core\\bit_test";

        public function __invoke($x, $n) {
          return (0 != (function() use($x,$n) {
            (\Phel::getDefinition("phel\\core", "assert-non-nil"))($x, (function() use($x,$n) {
              (\Phel::getDefinition("phel\\core", "assert-non-nil"))(1, $n);
              return (1 << $n);
            })());
            return ($x & (function() use($x,$n) {
              (\Phel::getDefinition("phel\\core", "assert-non-nil"))(1, $n);
              return (1 << $n);
            })());
          })());
        }
      },
      \Phel::map(
        \Phel::keyword("doc"), "```phel\n(bit-test x n)\n```\nTest bit at index `n`.",
        \Phel::keyword("start-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2770,
          \Phel::keyword("column"), 0
        ),
        \Phel::keyword("end-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2773,
          \Phel::keyword("column"), 46
        ),
        "min-arity", 2,
        "is-variadic", false,
        "arglists", "[x n]"
      )
    );
    \Phel::addDefinition(
      "phel\\core",
      "NAN",
      NAN,
      \Phel::map(
        \Phel::keyword("doc"), "Constant for Not a Number (NAN) values.",
        \Phel::keyword("start-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2779,
          \Phel::keyword("column"), 0
        ),
        \Phel::keyword("end-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2781,
          \Phel::keyword("column"), 10
        )
      )
    );
    \Phel::addDefinition(
      "phel\\core",
      "+",
      new class() extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\core\\+";

        public function __invoke(...$xs) {
          $xs = \Phel::vector($xs);
          (\Phel::getDefinition("phel\\core", "assert-non-nil"))(...(($xs) ?? []));
          if (($__truthy = (\Phel::getDefinition("phel\\core", "empty?"))($xs)) !== null && $__truthy !== false) {
            return 0;
          } else {
            return array_reduce([...(($xs) ?? [])], function($a, $b) { return ($a + $b); });
          }

        }
      },
      \Phel::map(
        \Phel::keyword("doc"), "```phel\n(+ & xs)\n```\nReturns the sum of all elements in `xs`. All elements `xs` must be numbers.\n  If `xs` is empty, return 0.",
        \Phel::keyword("inline"), new class() extends \Phel\Lang\AbstractFn {
          public const BOUND_TO = "";

          public function __invoke(...$xs) {
            $xs = \Phel::vector($xs);
            return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("do"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/assert-non-nil"))), $xs)) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("php/+"))), $xs)) ?? []))))) ?? []));
          }
        },
        \Phel::keyword("inline-arity"), new class() extends \Phel\Lang\AbstractFn {
          public const BOUND_TO = "";

          public function __invoke($n) {
            return ($n > 0);
          }
        },
        \Phel::keyword("start-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2783,
          \Phel::keyword("column"), 0
        ),
        \Phel::keyword("end-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2792,
          \Phel::keyword("column"), 22
        ),
        "min-arity", 0,
        "is-variadic", true,
        "arglists", "[& xs]"
      )
    );
    \Phel::addDefinition(
      "phel\\core",
      "-",
      new class() extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\core\\_";

        public function __invoke(...$xs) {
          $xs = \Phel::vector($xs);
          (\Phel::getDefinition("phel\\core", "assert-non-nil"))(...(($xs) ?? []));
          $__phel_1027_1028 = (\Phel::getDefinition("phel\\core", "count"))($xs);
          if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_1027_1028, 0)) !== null && $__truthy !== false) {
            return 0;
          } else {
            $__phel_1029_1030 = $__phel_1027_1028;
            if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_1029_1030, 1)) !== null && $__truthy !== false) {
              return (-1 * (\Phel::getDefinition("phel\\core", "first"))($xs));
            } else {
              $__phel_1031_1032 = $__phel_1029_1030;
              if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_1031_1032, 2)) !== null && $__truthy !== false) {
                return ((\Phel::getDefinition("phel\\core", "first"))($xs) - (\Phel::getDefinition("phel\\core", "second"))($xs));
              } else {
                return (\Phel::getDefinition("phel\\core", "reduce"))(new class($xs, $__phel_1027_1028, $__phel_1029_1030, $__phel_1031_1032) extends \Phel\Lang\AbstractFn {
                  public const BOUND_TO = "phel\\core\\_";
                  private $xs;
                  private $__phel_1027_1028;
                  private $__phel_1029_1030;
                  private $__phel_1031_1032;

                  public function __construct($xs, $__phel_1027_1028, $__phel_1029_1030, $__phel_1031_1032) {
                    $this->xs = $xs;
                    $this->__phel_1027_1028 = $__phel_1027_1028;
                    $this->__phel_1029_1030 = $__phel_1029_1030;
                    $this->__phel_1031_1032 = $__phel_1031_1032;
                  }

                  public function __invoke($__short_fn_1_1025, $__short_fn_2_1026) {
                    $xs = $this->xs;
                    $__phel_1027_1028 = $this->__phel_1027_1028;
                    $__phel_1029_1030 = $this->__phel_1029_1030;
                    $__phel_1031_1032 = $this->__phel_1031_1032;
                    return ($__short_fn_1_1025 - $__short_fn_2_1026);
                  }
                }, $xs);
              }

            }

          }

        }
      },
      \Phel::map(
        \Phel::keyword("doc"), "```phel\n(- & xs)\n```\nReturns the difference of all elements in `xs`. If `xs` is empty, return 0. If `xs`\n  has one element, return the negative value of that element.",
        \Phel::keyword("inline"), new class() extends \Phel\Lang\AbstractFn {
          public const BOUND_TO = "";

          public function __invoke(...$xs) {
            $xs = \Phel::vector($xs);
            return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("do"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/assert-non-nil"))), $xs)) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("php/-"))), $xs)) ?? []))))) ?? []));
          }
        },
        \Phel::keyword("inline-arity"), new class() extends \Phel\Lang\AbstractFn {
          public const BOUND_TO = "";

          public function __invoke($n) {
            return ($n > 1);
          }
        },
        \Phel::keyword("start-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2794,
          \Phel::keyword("column"), 0
        ),
        \Phel::keyword("end-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2805,
          \Phel::keyword("column"), 32
        ),
        "min-arity", 0,
        "is-variadic", true,
        "arglists", "[& xs]"
      )
    );
    \Phel::addDefinition(
      "phel\\core",
      "*",
      new class() extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\core\\*";

        public function __invoke(...$xs) {
          $xs = \Phel::vector($xs);
          (\Phel::getDefinition("phel\\core", "assert-non-nil"))(...(($xs) ?? []));
          $__phel_1035_1036 = (\Phel::getDefinition("phel\\core", "count"))($xs);
          if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_1035_1036, 0)) !== null && $__truthy !== false) {
            return 1;
          } else {
            $__phel_1037_1038 = $__phel_1035_1036;
            if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_1037_1038, 1)) !== null && $__truthy !== false) {
              return (\Phel::getDefinition("phel\\core", "first"))($xs);
            } else {
              $__phel_1039_1040 = $__phel_1037_1038;
              if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_1039_1040, 2)) !== null && $__truthy !== false) {
                return ((\Phel::getDefinition("phel\\core", "first"))($xs) * (\Phel::getDefinition("phel\\core", "second"))($xs));
              } else {
                return (\Phel::getDefinition("phel\\core", "reduce"))(new class($xs, $__phel_1035_1036, $__phel_1037_1038, $__phel_1039_1040) extends \Phel\Lang\AbstractFn {
                  public const BOUND_TO = "phel\\core\\*";
                  private $xs;
                  private $__phel_1035_1036;
                  private $__phel_1037_1038;
                  private $__phel_1039_1040;

                  public function __construct($xs, $__phel_1035_1036, $__phel_1037_1038, $__phel_1039_1040) {
                    $this->xs = $xs;
                    $this->__phel_1035_1036 = $__phel_1035_1036;
                    $this->__phel_1037_1038 = $__phel_1037_1038;
                    $this->__phel_1039_1040 = $__phel_1039_1040;
                  }

                  public function __invoke($__short_fn_1_1033, $__short_fn_2_1034) {
                    $xs = $this->xs;
                    $__phel_1035_1036 = $this->__phel_1035_1036;
                    $__phel_1037_1038 = $this->__phel_1037_1038;
                    $__phel_1039_1040 = $this->__phel_1039_1040;
                    return ($__short_fn_1_1033 * $__short_fn_2_1034);
                  }
                }, $xs);
              }

            }

          }

        }
      },
      \Phel::map(
        \Phel::keyword("doc"), "```phel\n(* & xs)\n```\nReturns the product of all elements in `xs`. All elements in `xs` must be\nnumbers. If `xs` is empty, return 1.",
        \Phel::keyword("inline"), new class() extends \Phel\Lang\AbstractFn {
          public const BOUND_TO = "";

          public function __invoke(...$xs) {
            $xs = \Phel::vector($xs);
            return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("do"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/assert-non-nil"))), $xs)) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("php/*"))), $xs)) ?? []))))) ?? []));
          }
        },
        \Phel::keyword("inline-arity"), new class() extends \Phel\Lang\AbstractFn {
          public const BOUND_TO = "";

          public function __invoke($n) {
            return ($n > 0);
          }
        },
        \Phel::keyword("start-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2807,
          \Phel::keyword("column"), 0
        ),
        \Phel::keyword("end-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2818,
          \Phel::keyword("column"), 32
        ),
        "min-arity", 0,
        "is-variadic", true,
        "arglists", "[& xs]"
      )
    );
    \Phel::addDefinition(
      "phel\\core",
      "/",
      new class() extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\core\\/";

        public function __invoke(...$xs) {
          $xs = \Phel::vector($xs);
          (\Phel::getDefinition("phel\\core", "assert-non-nil"))(...(($xs) ?? []));
          $__phel_1043_1044 = (\Phel::getDefinition("phel\\core", "count"))($xs);
          if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_1043_1044, 0)) !== null && $__truthy !== false) {
            return 1;
          } else {
            $__phel_1045_1046 = $__phel_1043_1044;
            if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_1045_1046, 1)) !== null && $__truthy !== false) {
              return (1 / (\Phel::getDefinition("phel\\core", "first"))($xs));
            } else {
              $__phel_1047_1048 = $__phel_1045_1046;
              if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_1047_1048, 2)) !== null && $__truthy !== false) {
                return ((\Phel::getDefinition("phel\\core", "first"))($xs) / (\Phel::getDefinition("phel\\core", "second"))($xs));
              } else {
                return (\Phel::getDefinition("phel\\core", "reduce"))(new class($xs, $__phel_1043_1044, $__phel_1045_1046, $__phel_1047_1048) extends \Phel\Lang\AbstractFn {
                  public const BOUND_TO = "phel\\core\\/";
                  private $xs;
                  private $__phel_1043_1044;
                  private $__phel_1045_1046;
                  private $__phel_1047_1048;

                  public function __construct($xs, $__phel_1043_1044, $__phel_1045_1046, $__phel_1047_1048) {
                    $this->xs = $xs;
                    $this->__phel_1043_1044 = $__phel_1043_1044;
                    $this->__phel_1045_1046 = $__phel_1045_1046;
                    $this->__phel_1047_1048 = $__phel_1047_1048;
                  }

                  public function __invoke($__short_fn_1_1041, $__short_fn_2_1042) {
                    $xs = $this->xs;
                    $__phel_1043_1044 = $this->__phel_1043_1044;
                    $__phel_1045_1046 = $this->__phel_1045_1046;
                    $__phel_1047_1048 = $this->__phel_1047_1048;
                    return ($__short_fn_1_1041 / $__short_fn_2_1042);
                  }
                }, $xs);
              }

            }

          }

        }
      },
      \Phel::map(
        \Phel::keyword("doc"), "```phel\n(/ & xs)\n```\nReturns the nominator divided by all the denominators. If `xs` is empty,\nreturns 1. If `xs` has one value, returns the reciprocal of x.",
        \Phel::keyword("inline"), new class() extends \Phel\Lang\AbstractFn {
          public const BOUND_TO = "";

          public function __invoke(...$xs) {
            $xs = \Phel::vector($xs);
            return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("do"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/assert-non-nil"))), $xs)) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("php//"))), $xs)) ?? []))))) ?? []));
          }
        },
        \Phel::keyword("inline-arity"), new class() extends \Phel\Lang\AbstractFn {
          public const BOUND_TO = "";

          public function __invoke($n) {
            return ($n > 1);
          }
        },
        \Phel::keyword("start-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2820,
          \Phel::keyword("column"), 0
        ),
        \Phel::keyword("end-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2831,
          \Phel::keyword("column"), 32
        ),
        "min-arity", 0,
        "is-variadic", true,
        "arglists", "[& xs]"
      )
    );
    \Phel::addDefinition(
      "phel\\core",
      "%",
      new class() extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\core\\%";

        public function __invoke($dividend, $divisor) {
          (\Phel::getDefinition("phel\\core", "assert-non-nil"))($dividend, $divisor);
          return ($dividend % $divisor);
        }
      },
      \Phel::map(
        \Phel::keyword("doc"), "```phel\n(% dividend divisor)\n```\nReturn the remainder of `dividend` / `divisor`.",
        \Phel::keyword("inline"), new class() extends \Phel\Lang\AbstractFn {
          public const BOUND_TO = "";

          public function __invoke($dividend, $divisor) {
            return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("do"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/assert-non-nil"))), (\Phel::getDefinition("phel\\core", "list"))($dividend), (\Phel::getDefinition("phel\\core", "list"))($divisor))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("php/%"))), (\Phel::getDefinition("phel\\core", "list"))($dividend), (\Phel::getDefinition("phel\\core", "list"))($divisor))) ?? []))))) ?? []));
          }
        },
        \Phel::keyword("start-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2833,
          \Phel::keyword("column"), 0
        ),
        \Phel::keyword("end-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2838,
          \Phel::keyword("column"), 27
        ),
        "min-arity", 2,
        "is-variadic", false,
        "arglists", "[dividend divisor]"
      )
    );
    \Phel::addDefinition(
      "phel\\core",
      "**",
      new class() extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\core\\**";

        public function __invoke($a, $x) {
          (\Phel::getDefinition("phel\\core", "assert-non-nil"))($a, $x);
          return ($a ** $x);
        }
      },
      \Phel::map(
        \Phel::keyword("doc"), "```phel\n(** a x)\n```\nReturn `a` to the power of `x`.",
        \Phel::keyword("inline"), new class() extends \Phel\Lang\AbstractFn {
          public const BOUND_TO = "";

          public function __invoke($a, $x) {
            return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("do"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/assert-non-nil"))), (\Phel::getDefinition("phel\\core", "list"))($a), (\Phel::getDefinition("phel\\core", "list"))($x))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("php/**"))), (\Phel::getDefinition("phel\\core", "list"))($a), (\Phel::getDefinition("phel\\core", "list"))($x))) ?? []))))) ?? []));
          }
        },
        \Phel::keyword("start-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2840,
          \Phel::keyword("column"), 0
        ),
        \Phel::keyword("end-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2845,
          \Phel::keyword("column"), 15
        ),
        "min-arity", 2,
        "is-variadic", false,
        "arglists", "[a x]"
      )
    );
    \Phel::addDefinition(
      "phel\\core",
      "inc",
      new class() extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\core\\inc";

        public function __invoke($x) {
          (\Phel::getDefinition("phel\\core", "assert-non-nil"))($x);
          (\Phel::getDefinition("phel\\core", "assert-non-nil"))($x, 1);
          return ($x + 1);
        }
      },
      \Phel::map(
        \Phel::keyword("doc"), "```phel\n(inc x)\n```\nIncrements `x` by one.",
        \Phel::keyword("inline"), new class() extends \Phel\Lang\AbstractFn {
          public const BOUND_TO = "";

          public function __invoke($x) {
            return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("do"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/assert-non-nil"))), (\Phel::getDefinition("phel\\core", "list"))($x))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("php/+"))), (\Phel::getDefinition("phel\\core", "list"))($x), (\Phel::getDefinition("phel\\core", "list"))(1))) ?? []))))) ?? []));
          }
        },
        \Phel::keyword("start-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2847,
          \Phel::keyword("column"), 0
        ),
        \Phel::keyword("end-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2852,
          \Phel::keyword("column"), 10
        ),
        "min-arity", 1,
        "is-variadic", false,
        "arglists", "[x]"
      )
    );
    \Phel::addDefinition(
      "phel\\core",
      "dec",
      new class() extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\core\\dec";

        public function __invoke($x) {
          (\Phel::getDefinition("phel\\core", "assert-non-nil"))($x);
          (\Phel::getDefinition("phel\\core", "assert-non-nil"))($x, 1);
          return ($x - 1);
        }
      },
      \Phel::map(
        \Phel::keyword("doc"), "```phel\n(dec x)\n```\nDecrements `x` by one.",
        \Phel::keyword("inline"), new class() extends \Phel\Lang\AbstractFn {
          public const BOUND_TO = "";

          public function __invoke($x) {
            return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("do"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/assert-non-nil"))), (\Phel::getDefinition("phel\\core", "list"))($x))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("php/-"))), (\Phel::getDefinition("phel\\core", "list"))($x), (\Phel::getDefinition("phel\\core", "list"))(1))) ?? []))))) ?? []));
          }
        },
        \Phel::keyword("start-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2854,
          \Phel::keyword("column"), 0
        ),
        \Phel::keyword("end-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2859,
          \Phel::keyword("column"), 10
        ),
        "min-arity", 1,
        "is-variadic", false,
        "arglists", "[x]"
      )
    );
    \Phel::addDefinition(
      "phel\\core",
      "even?",
      new class() extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\core\\even?";

        public function __invoke($x) {
          return (\Phel::getDefinition("phel\\core", "="))(0, (function() use($x) {
            (\Phel::getDefinition("phel\\core", "assert-non-nil"))($x, 2);
            return ($x % 2);
          })());
        }
      },
      \Phel::map(
        \Phel::keyword("doc"), "```phel\n(even? x)\n```\nChecks if `x` is even.",
        \Phel::keyword("start-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2861,
          \Phel::keyword("column"), 0
        ),
        \Phel::keyword("end-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2864,
          \Phel::keyword("column"), 16
        ),
        "min-arity", 1,
        "is-variadic", false,
        "arglists", "[x]"
      )
    );
    \Phel::addDefinition(
      "phel\\core",
      "odd?",
      new class() extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\core\\odd?";

        public function __invoke($x) {
          return (\Phel::getDefinition("phel\\core", "="))(1, (function() use($x) {
            (\Phel::getDefinition("phel\\core", "assert-non-nil"))($x, 2);
            return ($x % 2);
          })());
        }
      },
      \Phel::map(
        \Phel::keyword("doc"), "```phel\n(odd? x)\n```\nChecks if `x` is odd.",
        \Phel::keyword("start-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2866,
          \Phel::keyword("column"), 0
        ),
        \Phel::keyword("end-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2869,
          \Phel::keyword("column"), 16
        ),
        "min-arity", 1,
        "is-variadic", false,
        "arglists", "[x]"
      )
    );
    \Phel::addDefinition(
      "phel\\core",
      "zero?",
      new class() extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\core\\zero?";

        public function __invoke($x) {
          $__phel_1049_1050 = (\Phel::getDefinition("phel\\core", "="))($x, 0);
          if (($__truthy = $__phel_1049_1050) !== null && $__truthy !== false) {
            return $__phel_1049_1050;
          } else {
            return (\Phel::getDefinition("phel\\core", "="))($x, 0.0);
          }

        }
      },
      \Phel::map(
        \Phel::keyword("doc"), "```phel\n(zero? x)\n```\nChecks if `x` is zero.",
        \Phel::keyword("start-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2871,
          \Phel::keyword("column"), 0
        ),
        \Phel::keyword("end-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2874,
          \Phel::keyword("column"), 25
        ),
        "min-arity", 1,
        "is-variadic", false,
        "arglists", "[x]"
      )
    );
    \Phel::addDefinition(
      "phel\\core",
      "one?",
      new class() extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\core\\one?";

        public function __invoke($x) {
          $__phel_1051_1052 = (\Phel::getDefinition("phel\\core", "="))($x, 1);
          if (($__truthy = $__phel_1051_1052) !== null && $__truthy !== false) {
            return $__phel_1051_1052;
          } else {
            return (\Phel::getDefinition("phel\\core", "="))($x, 1.0);
          }

        }
      },
      \Phel::map(
        \Phel::keyword("doc"), "```phel\n(one? x)\n```\nChecks if `x` is one.",
        \Phel::keyword("start-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2876,
          \Phel::keyword("column"), 0
        ),
        \Phel::keyword("end-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2879,
          \Phel::keyword("column"), 25
        ),
        "min-arity", 1,
        "is-variadic", false,
        "arglists", "[x]"
      )
    );
    \Phel::addDefinition(
      "phel\\core",
      "pos?",
      new class() extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\core\\pos?";

        public function __invoke($x) {
          return ($x > 0);
        }
      },
      \Phel::map(
        \Phel::keyword("doc"), "```phel\n(pos? x)\n```\nChecks if `x` is greater than zero.",
        \Phel::keyword("start-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2881,
          \Phel::keyword("column"), 0
        ),
        \Phel::keyword("end-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2884,
          \Phel::keyword("column"), 10
        ),
        "min-arity", 1,
        "is-variadic", false,
        "arglists", "[x]"
      )
    );
    \Phel::addDefinition(
      "phel\\core",
      "neg?",
      new class() extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\core\\neg?";

        public function __invoke($x) {
          return ($x < 0);
        }
      },
      \Phel::map(
        \Phel::keyword("doc"), "```phel\n(neg? x)\n```\nChecks if `x` is smaller than zero.",
        \Phel::keyword("start-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2886,
          \Phel::keyword("column"), 0
        ),
        \Phel::keyword("end-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2889,
          \Phel::keyword("column"), 10
        ),
        "min-arity", 1,
        "is-variadic", false,
        "arglists", "[x]"
      )
    );
    \Phel::addDefinition(
      "phel\\core",
      "nan?",
      new class() extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\core\\nan?";

        public function __invoke($x) {
          return is_nan($x);
        }
      },
      \Phel::map(
        \Phel::keyword("doc"), "```phel\n(nan? x)\n```\nChecks if `x` is not a number.",
        \Phel::keyword("start-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2891,
          \Phel::keyword("column"), 0
        ),
        \Phel::keyword("end-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2894,
          \Phel::keyword("column"), 17
        ),
        "min-arity", 1,
        "is-variadic", false,
        "arglists", "[x]"
      )
    );
    \Phel::addDefinition(
      "phel\\core",
      "inf?",
      new class() extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\core\\inf?";

        public function __invoke($x) {
          return is_infinite($x);
        }
      },
      \Phel::map(
        \Phel::keyword("doc"), "```phel\n(inf? x)\n```\nChecks if `x` is infinite.",
        \Phel::keyword("example"), "(inf? php/INF) ; => true",
        \Phel::keyword("see-also"), \Phel::vector(["nan?"]),
        \Phel::keyword("start-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2896,
          \Phel::keyword("column"), 0
        ),
        \Phel::keyword("end-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2901,
          \Phel::keyword("column"), 22
        ),
        "min-arity", 1,
        "is-variadic", false,
        "arglists", "[x]"
      )
    );
    \Phel::addDefinition(
      "phel\\core",
      "abs",
      new class() extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\core\\abs";

        public function __invoke($x) {
          return abs($x);
        }
      },
      \Phel::map(
        \Phel::keyword("doc"), "```phel\n(abs x)\n```\nReturns the absolute value of `x`.",
        \Phel::keyword("example"), "(abs -5) ; => 5",
        \Phel::keyword("start-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2903,
          \Phel::keyword("column"), 0
        ),
        \Phel::keyword("end-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2907,
          \Phel::keyword("column"), 14
        ),
        "min-arity", 1,
        "is-variadic", false,
        "arglists", "[x]"
      )
    );
    \Phel::addDefinition(
      "phel\\core",
      "rand",
      new class() extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\core\\rand";

        public function __invoke() {
          (\Phel::getDefinition("phel\\core", "assert-non-nil"))(random_int(0, PHP_INT_MAX), PHP_INT_MAX);
          return (random_int(0, PHP_INT_MAX) / PHP_INT_MAX);
        }
      },
      \Phel::map(
        \Phel::keyword("doc"), "```phel\n(rand)\n```\nReturns a random number between 0 and 1.",
        \Phel::keyword("start-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2909,
          \Phel::keyword("column"), 0
        ),
        \Phel::keyword("end-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2912,
          \Phel::keyword("column"), 57
        ),
        "min-arity", 0,
        "is-variadic", false,
        "arglists", "[]"
      )
    );
    \Phel::addDefinition(
      "phel\\core",
      "rand-int",
      new class() extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\core\\rand_int";

        public function __invoke($n) {
          return random_int(0, $n);
        }
      },
      \Phel::map(
        \Phel::keyword("doc"), "```phel\n(rand-int n)\n```\nReturns a random number between 0 and `n`.",
        \Phel::keyword("start-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2914,
          \Phel::keyword("column"), 0
        ),
        \Phel::keyword("end-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2917,
          \Phel::keyword("column"), 23
        ),
        "min-arity", 1,
        "is-variadic", false,
        "arglists", "[n]"
      )
    );
    \Phel::addDefinition(
      "phel\\core",
      "rand-nth",
      new class() extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\core\\rand_nth";

        public function __invoke($xs) {
          return (\Phel::getDefinition("phel\\core", "get"))($xs, (\Phel::getDefinition("phel\\core", "rand-int"))((function() use($xs) {
            (\Phel::getDefinition("phel\\core", "assert-non-nil"))((\Phel::getDefinition("phel\\core", "count"))($xs));
            return ((\Phel::getDefinition("phel\\core", "count"))($xs) - 1);
          })()));
        }
      },
      \Phel::map(
        \Phel::keyword("doc"), "```phel\n(rand-nth xs)\n```\nReturns a random item from xs.",
        \Phel::keyword("start-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2919,
          \Phel::keyword("column"), 0
        ),
        \Phel::keyword("end-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2922,
          \Phel::keyword("column"), 39
        ),
        "min-arity", 1,
        "is-variadic", false,
        "arglists", "[xs]"
      )
    );
    \Phel::addDefinition(
      "phel\\core",
      "extreme",
      new class() extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\core\\extreme";

        public function __invoke($order, $args) {
          return (\Phel::getDefinition("phel\\core", "reduce"))(new class($order, $args) extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\core\\extreme";
            private $order;
            private $args;

            public function __construct($order, $args) {
              $this->order = $order;
              $this->args = $args;
            }

            public function __invoke($__short_fn_1_1053, $__short_fn_2_1054) {
              $order = $this->order;
              $args = $this->args;
              if (($__truthy = ($order)($__short_fn_1_1053, $__short_fn_2_1054)) !== null && $__truthy !== false) {
                return $__short_fn_1_1053;
              } else {
                return $__short_fn_2_1054;
              }

            }
          }, $args);
        }
      },
      \Phel::map(
        \Phel::keyword("doc"), "```phel\n(extreme order args)\n```\nReturns the most extreme value in `args` based on the binary `order` function.",
        \Phel::keyword("start-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2924,
          \Phel::keyword("column"), 0
        ),
        \Phel::keyword("end-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2927,
          \Phel::keyword("column"), 42
        ),
        "min-arity", 2,
        "is-variadic", false,
        "arglists", "[order args]"
      )
    );
    \Phel::addDefinition(
      "phel\\core",
      "min",
      new class() extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\core\\min";

        public function __invoke(...$numbers) {
          $numbers = \Phel::vector($numbers);
          return (\Phel::getDefinition("phel\\core", "extreme"))(\Phel::getDefinition("phel\\core", "<"), $numbers);
        }
      },
      \Phel::map(
        \Phel::keyword("doc"), "```phel\n(min & numbers)\n```\nReturns the numeric minimum of all numbers.",
        \Phel::keyword("start-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2929,
          \Phel::keyword("column"), 0
        ),
        \Phel::keyword("end-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2932,
          \Phel::keyword("column"), 22
        ),
        "min-arity", 0,
        "is-variadic", true,
        "arglists", "[& numbers]"
      )
    );
    \Phel::addDefinition(
      "phel\\core",
      "max",
      new class() extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\core\\max";

        public function __invoke(...$numbers) {
          $numbers = \Phel::vector($numbers);
          return (\Phel::getDefinition("phel\\core", "extreme"))(\Phel::getDefinition("phel\\core", ">"), $numbers);
        }
      },
      \Phel::map(
        \Phel::keyword("doc"), "```phel\n(max & numbers)\n```\nReturns the numeric maximum of all numbers.",
        \Phel::keyword("start-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2934,
          \Phel::keyword("column"), 0
        ),
        \Phel::keyword("end-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2937,
          \Phel::keyword("column"), 22
        ),
        "min-arity", 0,
        "is-variadic", true,
        "arglists", "[& numbers]"
      )
    );
    \Phel::addDefinition(
      "phel\\core",
      "coerce-in",
      new class() extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\core\\coerce_in";

        public function __invoke($v, $min, $max) {
          if (($__truthy = ($max < $min)) !== null && $__truthy !== false) {
            throw (new \InvalidArgumentException("Max values is bigger than min value"));
          } else {

          }

          return max(min($v, $max), $min);
        }
      },
      \Phel::map(
        \Phel::keyword("doc"), "```phel\n(coerce-in v min max)\n```\nReturns `v` if it is in the range, or `min` if `v` is less than `min`, or `max` if `v` is greater than `max`.",
        \Phel::keyword("start-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2939,
          \Phel::keyword("column"), 0
        ),
        \Phel::keyword("end-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2944,
          \Phel::keyword("column"), 32
        ),
        "min-arity", 3,
        "is-variadic", false,
        "arglists", "[v min max]"
      )
    );
    \Phel::addDefinition(
      "phel\\core",
      "sum",
      new class() extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\core\\sum";

        public function __invoke($xs) {
          return (\Phel::getDefinition("phel\\core", "+"))(...(($xs) ?? []));
        }
      },
      \Phel::map(
        \Phel::keyword("doc"), "```phel\n(sum xs)\n```\nReturns the sum of all elements is `xs`.",
        \Phel::keyword("start-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2946,
          \Phel::keyword("column"), 0
        ),
        \Phel::keyword("end-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2949,
          \Phel::keyword("column"), 15
        ),
        "min-arity", 1,
        "is-variadic", false,
        "arglists", "[xs]"
      )
    );
    \Phel::addDefinition(
      "phel\\core",
      "mean",
      new class() extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\core\\mean";

        public function __invoke($xs) {
          (\Phel::getDefinition("phel\\core", "assert-non-nil"))((\Phel::getDefinition("phel\\core", "sum"))($xs), (\Phel::getDefinition("phel\\core", "count"))($xs));
          return ((\Phel::getDefinition("phel\\core", "sum"))($xs) / (\Phel::getDefinition("phel\\core", "count"))($xs));
        }
      },
      \Phel::map(
        \Phel::keyword("doc"), "```phel\n(mean xs)\n```\nReturns the mean of `xs`.",
        \Phel::keyword("start-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2951,
          \Phel::keyword("column"), 0
        ),
        \Phel::keyword("end-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2954,
          \Phel::keyword("column"), 26
        ),
        "min-arity", 1,
        "is-variadic", false,
        "arglists", "[xs]"
      )
    );
    \Phel::addDefinition(
      "phel\\core",
      "median",
      new class() extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\core\\median";

        public function __invoke($xs) {
          $arr_1055 = (\Phel::getDefinition("phel\\core", "to-php-array"))($xs);
          $cnt_1056 = (\Phel::getDefinition("phel\\core", "count"))($arr_1055);
          if (($__truthy = (\Phel::getDefinition("phel\\core", "zero?"))($cnt_1056)) !== null && $__truthy !== false) {
            throw (new \InvalidArgumentException("Cannot compute median of empty sequence"));
          } else {

          }

          sort($arr_1055);
          $mid_1057 = intdiv($cnt_1056, 2);
          if (($__truthy = (\Phel::getDefinition("phel\\core", "odd?"))($cnt_1056)) !== null && $__truthy !== false) {
            return (($arr_1055)[($mid_1057)] ?? null);
          } else {
            (\Phel::getDefinition("phel\\core", "assert-non-nil"))((function() use($xs,$arr_1055,$cnt_1056,$mid_1057) {
              (\Phel::getDefinition("phel\\core", "assert-non-nil"))((($arr_1055)[((function() use($xs,$arr_1055,$cnt_1056,$mid_1057) {
                (\Phel::getDefinition("phel\\core", "assert-non-nil"))($mid_1057);
                return ($mid_1057 - 1);
              })())] ?? null), (($arr_1055)[($mid_1057)] ?? null));
              return ((($arr_1055)[((function() use($xs,$arr_1055,$cnt_1056,$mid_1057) {
                (\Phel::getDefinition("phel\\core", "assert-non-nil"))($mid_1057);
                return ($mid_1057 - 1);
              })())] ?? null) + (($arr_1055)[($mid_1057)] ?? null));
            })(), 2);
            return ((function() use($xs,$arr_1055,$cnt_1056,$mid_1057) {
              (\Phel::getDefinition("phel\\core", "assert-non-nil"))((($arr_1055)[((function() use($xs,$arr_1055,$cnt_1056,$mid_1057) {
                (\Phel::getDefinition("phel\\core", "assert-non-nil"))($mid_1057);
                return ($mid_1057 - 1);
              })())] ?? null), (($arr_1055)[($mid_1057)] ?? null));
              return ((($arr_1055)[((function() use($xs,$arr_1055,$cnt_1056,$mid_1057) {
                (\Phel::getDefinition("phel\\core", "assert-non-nil"))($mid_1057);
                return ($mid_1057 - 1);
              })())] ?? null) + (($arr_1055)[($mid_1057)] ?? null));
            })() / 2);
          }

        }
      },
      \Phel::map(
        \Phel::keyword("doc"), "```phel\n(median xs)\n```\nReturns the median of `xs`.",
        \Phel::keyword("start-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2956,
          \Phel::keyword("column"), 0
        ),
        \Phel::keyword("end-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2967,
          \Phel::keyword("column"), 65
        ),
        "min-arity", 1,
        "is-variadic", false,
        "arglists", "[xs]"
      )
    );
    \Phel::addDefinition(
      "phel\\core",
      "with-output-buffer",
      new class() extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\core\\with_output_buffer";

        public function __invoke(...$body) {
          $body = \Phel::vector($body);
          $res_1058 = (\Phel::getDefinition("phel\\core", "gensym"))();
          return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("do"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("php/ob_start"))))) ?? []))), $body, (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("let"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "vector"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))($res_1058), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("php/ob_get_contents"))))) ?? []))))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("php/ob_end_clean"))))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))($res_1058))) ?? []))))) ?? []));
        }
      },
      \Phel::map(
        \Phel::keyword("macro"), true,
        \Phel::keyword("doc"), "```phel\n(with-output-buffer & body)\n```\nEverything that is printed inside the body will be stored in a buffer.\n   The result of the buffer is returned.",
        \Phel::keyword("start-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2973,
          \Phel::keyword("column"), 0
        ),
        \Phel::keyword("end-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2983,
          \Phel::keyword("column"), 17
        ),
        "min-arity", 0,
        "is-variadic", true,
        "arglists", "[& body]"
      )
    );
    \Phel::addDefinition(
      "phel\\core",
      "print-str",
      new class() extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\core\\print_str";

        public function __invoke(...$xs) {
          $xs = \Phel::vector($xs);
          $len_1060 = (\Phel::getDefinition("phel\\core", "count"))($xs);
          $printer_1061 = (\Phel\Printer\Printer::nonReadable());
          $pp_1062 = new class($xs, $len_1060, $printer_1061) extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\core\\print_str.pp";
            private $xs;
            private $len_1060;
            private $printer_1061;

            public function __construct($xs, $len_1060, $printer_1061) {
              $this->xs = $xs;
              $this->len_1060 = $len_1060;
              $this->printer_1061 = $printer_1061;
            }

            public function __invoke($__short_fn_1_1059) {
              $xs = $this->xs;
              $len_1060 = $this->len_1060;
              $printer_1061 = $this->printer_1061;
              return (function() use($xs,$len_1060,$printer_1061,$__short_fn_1_1059) {
                $target_1069 = $printer_1061;
                return $target_1069->print($__short_fn_1_1059);
              })();
            }
          };
          $__phel_1063_1064 = (\Phel::getDefinition("phel\\core", "count"))($xs);
          if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_1063_1064, 0)) !== null && $__truthy !== false) {
            return "";
          } else {
            $__phel_1065_1066 = $__phel_1063_1064;
            if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_1065_1066, 1)) !== null && $__truthy !== false) {
              return ($pp_1062)((\Phel::getDefinition("phel\\core", "first"))($xs));
            } else {
              $res_1067 = ($pp_1062)((\Phel::getDefinition("phel\\core", "first"))($xs));
              $seq_1068 = (\Phel::getDefinition("phel\\core", "next"))($xs);
              while (true) {
                if (($__truthy = $seq_1068) !== null && $__truthy !== false) {
                  $__phel_1070 = (\Phel::getDefinition("phel\\core", "str"))($res_1067, " ", ($pp_1062)((\Phel::getDefinition("phel\\core", "first"))($seq_1068)));
                  $__phel_1071 = (\Phel::getDefinition("phel\\core", "next"))($seq_1068);
                  $res_1067 = $__phel_1070;
                  $seq_1068 = $__phel_1071;
                  continue;

                } else {
                  return $res_1067;
                }
                break;
              }
            }

          }

        }
      },
      \Phel::map(
        \Phel::keyword("doc"), "```phel\n(print-str & xs)\n```\nSame as print. But instead of writing it to an output stream, the resulting string is returned.",
        \Phel::keyword("start-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2985,
          \Phel::keyword("column"), 0
        ),
        \Phel::keyword("end-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 2998,
          \Phel::keyword("column"), 18
        ),
        "min-arity", 0,
        "is-variadic", true,
        "arglists", "[& xs]"
      )
    );
    \Phel::addDefinition(
      "phel\\core",
      "print",
      new class() extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\core\\print";

        public function __invoke(...$xs) {
          $xs = \Phel::vector($xs);
          print((\Phel::getDefinition("phel\\core", "print-str"))(...(($xs) ?? [])));
          return null;
        }
      },
      \Phel::map(
        \Phel::keyword("doc"), "```phel\n(print & xs)\n```\nPrints the given values to the default output stream. Returns nil.",
        \Phel::keyword("start-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 3000,
          \Phel::keyword("column"), 0
        ),
        \Phel::keyword("end-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 3004,
          \Phel::keyword("column"), 6
        ),
        "min-arity", 0,
        "is-variadic", true,
        "arglists", "[& xs]"
      )
    );
    \Phel::addDefinition(
      "phel\\core",
      "println",
      new class() extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\core\\println";

        public function __invoke(...$xs) {
          $xs = \Phel::vector($xs);
          (\Phel::getDefinition("phel\\core", "print"))(...(($xs) ?? []));
          print("\n");
          return null;
        }
      },
      \Phel::map(
        \Phel::keyword("doc"), "```phel\n(println & xs)\n```\nSame as print followed by a newline.",
        \Phel::keyword("start-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 3006,
          \Phel::keyword("column"), 0
        ),
        \Phel::keyword("end-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 3011,
          \Phel::keyword("column"), 6
        ),
        "min-arity", 0,
        "is-variadic", true,
        "arglists", "[& xs]"
      )
    );
    \Phel::addDefinition(
      "phel\\core",
      "format",
      new class() extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\core\\format";

        public function __invoke($fmt, ...$xs) {
          $xs = \Phel::vector($xs);
          return sprintf($fmt, ...(($xs) ?? []));
        }
      },
      \Phel::map(
        \Phel::keyword("doc"), "```phel\n(format fmt & xs)\n```\nReturns a formatted string. See PHP's [sprintf](https://www.php.net/manual/en/function.sprintf.php) for more information.",
        \Phel::keyword("start-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 3013,
          \Phel::keyword("column"), 0
        ),
        \Phel::keyword("end-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 3016,
          \Phel::keyword("column"), 29
        ),
        "min-arity", 1,
        "is-variadic", true,
        "arglists", "[fmt & xs]"
      )
    );
    \Phel::addDefinition(
      "phel\\core",
      "printf",
      new class() extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\core\\printf";

        public function __invoke($fmt, ...$xs) {
          $xs = \Phel::vector($xs);
          printf($fmt, ...(($xs) ?? []));
          return null;
        }
      },
      \Phel::map(
        \Phel::keyword("doc"), "```phel\n(printf fmt & xs)\n```\nOutput a formatted string. See PHP's [printf](https://www.php.net/manual/en/function.printf.php) for more information.",
        \Phel::keyword("start-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 3018,
          \Phel::keyword("column"), 0
        ),
        \Phel::keyword("end-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 3022,
          \Phel::keyword("column"), 6
        ),
        "min-arity", 1,
        "is-variadic", true,
        "arglists", "[fmt & xs]"
      )
    );
    \Phel::addDefinition(
      "phel\\core",
      "file-get-contents-silenced",
      new class() extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\core\\file_get_contents_silenced";

        public function __invoke($path, $use_include_path, $context, $offset, $length) {
          $old_error_level_1075 = error_reporting(0);
          $content_1076 = file_get_contents($path, $use_include_path, $context, $offset, $length);
          error_reporting($old_error_level_1075);
          return $content_1076;
        }
      },
      \Phel::map(
        \Phel::keyword("private"), true,
        \Phel::keyword("doc"), "```phel\n(file-get-contents-silenced path use-include-path context offset length)\n```\nWrapper around file_get_contents that suppresses PHP warnings.\n  We handle errors by checking the return value.",
        \Phel::keyword("start-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 3028,
          \Phel::keyword("column"), 0
        ),
        \Phel::keyword("end-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 3035,
          \Phel::keyword("column"), 13
        ),
        "min-arity", 5,
        "is-variadic", false,
        "arglists", "[path use-include-path context offset length]"
      )
    );
    \Phel::addDefinition(
      "phel\\core",
      "slurp",
      new class() extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\core\\slurp";

        public function __invoke($path, ...$__phel_1077) {
          $__phel_1077 = \Phel::vector($__phel_1077);
          $__phel_1078_1081 = $__phel_1077;
          $__phel_1079_1082 = (\Phel::getDefinition("phel\\core", "first"))($__phel_1078_1081);
          $__phel_1080_1083 = (\Phel::getDefinition("phel\\core", "next"))($__phel_1078_1081);
          $opts_1084 = $__phel_1079_1082;
          $is_url_QMARK__1085 = preg_match("/^(https?|ftp):\\/\\//i", $path);
          if (($__truthy = $is_url_QMARK__1085) !== null && $__truthy !== false) {

          } else {
            if (($__truthy = is_dir($path)) !== null && $__truthy !== false) {
              throw (new \InvalidArgumentException((\Phel::getDefinition("phel\\core", "str"))("Cannot read directory: ", $path)));
            } else {

            }

            if (($__truthy = is_file($path)) !== null && $__truthy !== false) {

            } else {
              throw (new \InvalidArgumentException((\Phel::getDefinition("phel\\core", "str"))("File not found: ", $path)));
            }

          }

          $opts_1086 = (function() use($path,$__phel_1077,$__phel_1078_1081,$__phel_1079_1082,$__phel_1080_1083,$opts_1084,$is_url_QMARK__1085) {
            $__phel_1087_1088 = $opts_1084;
            if (($__truthy = $__phel_1087_1088) !== null && $__truthy !== false) {
              return $__phel_1087_1088;
            } else {
              return \Phel::map();
            }

          })();
          $use_include_path_1089 = (function() use($path,$__phel_1077,$__phel_1078_1081,$__phel_1079_1082,$__phel_1080_1083,$opts_1086,$is_url_QMARK__1085) {
            $__phel_1090_1091 = (\Phel::keyword("use-include-path"))($opts_1086);
            if (($__truthy = $__phel_1090_1091) !== null && $__truthy !== false) {
              return $__phel_1090_1091;
            } else {
              return false;
            }

          })();
          $context_1092 = (function() use($path,$__phel_1077,$__phel_1078_1081,$__phel_1079_1082,$__phel_1080_1083,$opts_1086,$is_url_QMARK__1085,$use_include_path_1089) {
            $__phel_1093_1094 = (\Phel::keyword("context"))($opts_1086);
            if (($__truthy = $__phel_1093_1094) !== null && $__truthy !== false) {
              return $__phel_1093_1094;
            } else {
              return null;
            }

          })();
          $offset_1095 = (function() use($path,$__phel_1077,$__phel_1078_1081,$__phel_1079_1082,$__phel_1080_1083,$opts_1086,$is_url_QMARK__1085,$use_include_path_1089,$context_1092) {
            $__phel_1096_1097 = (\Phel::keyword("offset"))($opts_1086);
            if (($__truthy = $__phel_1096_1097) !== null && $__truthy !== false) {
              return $__phel_1096_1097;
            } else {
              return 0;
            }

          })();
          $length_1098 = (function() use($path,$__phel_1077,$__phel_1078_1081,$__phel_1079_1082,$__phel_1080_1083,$opts_1086,$is_url_QMARK__1085,$use_include_path_1089,$context_1092,$offset_1095) {
            $__phel_1099_1100 = (\Phel::keyword("length"))($opts_1086);
            if (($__truthy = $__phel_1099_1100) !== null && $__truthy !== false) {
              return $__phel_1099_1100;
            } else {
              return null;
            }

          })();
          $content_1101 = (\Phel::getDefinition("phel\\core", "file-get-contents-silenced"))($path, $use_include_path_1089, $context_1092, $offset_1095, $length_1098);
          if (($__truthy = (\Phel::getDefinition("phel\\core", "="))($content_1101, false)) !== null && $__truthy !== false) {
            throw (new \InvalidArgumentException((\Phel::getDefinition("phel\\core", "str"))("Failed to read from: ", $path)));
          } else {

          }

          return $content_1101;
        }
      },
      \Phel::map(
        \Phel::keyword("doc"), "```phel\n(slurp path & [opts])\n```\nReads entire file or URL into a string.",
        \Phel::keyword("example"), "(slurp \"file.txt\") ; => \"file contents\"",
        \Phel::keyword("start-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 3037,
          \Phel::keyword("column"), 0
        ),
        \Phel::keyword("end-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 3063,
          \Phel::keyword("column"), 16
        ),
        "min-arity", 1,
        "is-variadic", true,
        "arglists", "[path & __phel_1077]"
      )
    );
    \Phel::addDefinition(
      "phel\\core",
      "spit",
      new class() extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\core\\spit";

        public function __invoke($filename, $data, ...$__phel_1102) {
          $__phel_1102 = \Phel::vector($__phel_1102);
          $__phel_1103_1106 = $__phel_1102;
          $__phel_1104_1107 = (\Phel::getDefinition("phel\\core", "first"))($__phel_1103_1106);
          $__phel_1105_1108 = (\Phel::getDefinition("phel\\core", "next"))($__phel_1103_1106);
          $opts_1109 = $__phel_1104_1107;
          if (($__truthy = is_dir($filename)) !== null && $__truthy !== false) {
            throw (new \InvalidArgumentException("Argument filename should be a valid path to a file, directory given."));
          } else {

          }

          $opts_1110 = (function() use($filename,$data,$__phel_1102,$__phel_1103_1106,$__phel_1104_1107,$__phel_1105_1108,$opts_1109) {
            $__phel_1111_1112 = $opts_1109;
            if (($__truthy = $__phel_1111_1112) !== null && $__truthy !== false) {
              return $__phel_1111_1112;
            } else {
              return \Phel::map();
            }

          })();
          $flags_1113 = (function() use($filename,$data,$__phel_1102,$__phel_1103_1106,$__phel_1104_1107,$__phel_1105_1108,$opts_1110) {
            $__phel_1114_1115 = (\Phel::keyword("flags"))($opts_1110);
            if (($__truthy = $__phel_1114_1115) !== null && $__truthy !== false) {
              return $__phel_1114_1115;
            } else {
              return 0;
            }

          })();
          $context_1116 = (function() use($filename,$data,$__phel_1102,$__phel_1103_1106,$__phel_1104_1107,$__phel_1105_1108,$opts_1110,$flags_1113) {
            $__phel_1117_1118 = (\Phel::keyword("context"))($opts_1110);
            if (($__truthy = $__phel_1117_1118) !== null && $__truthy !== false) {
              return $__phel_1117_1118;
            } else {
              return null;
            }

          })();
          $result_1119 = file_put_contents($filename, $data, $flags_1113, $context_1116);
          if (($__truthy = (\Phel::getDefinition("phel\\core", "int?"))($result_1119)) !== null && $__truthy !== false) {
            return $result_1119;
          } else {
            return null;
          }

        }
      },
      \Phel::map(
        \Phel::keyword("doc"), "```phel\n(spit filename data & [opts])\n```\nWrites data to file, returning number of bytest that were written or `nil`\n  on failure. Accepts `opts` map for overriding default PHP file_put_contents\n  arguments, as example to append to file use `{:flags php/FILE_APPEND}`.\n\n  See PHP's [file_put_contents](https://www.php.net/manual/en/function.file-put-contents.php) for more information.",
        \Phel::keyword("start-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 3065,
          \Phel::keyword("column"), 0
        ),
        \Phel::keyword("end-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 3079,
          \Phel::keyword("column"), 33
        ),
        "min-arity", 2,
        "is-variadic", true,
        "arglists", "[filename data & __phel_1102]"
      )
    );
    \Phel::addDefinition(
      "phel\\core",
      "line-seq",
      new class() extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\core\\line_seq";

        public function __invoke($filename) {
          $result_1120 = (\Phel::getDefinition("phel\\core", "lazy-seq-from-generator"))(call_user_func_array(array("\\Phel\\Lang\\Seq", "fileLines"), array($filename)));
          if (($__truthy = (null === $result_1120)) !== null && $__truthy !== false) {
            return \Phel::list([]);
          } else {
            return $result_1120;
          }

        }
      },
      \Phel::map(
        \Phel::keyword("doc"), "```phel\n(line-seq filename)\n```\nReturns a lazy sequence of lines from a file.",
        \Phel::keyword("example"), "(take 10 (line-seq \"large-file.txt\")) ; => [\"line1\" \"line2\" ...]",
        \Phel::keyword("start-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 3081,
          \Phel::keyword("column"), 0
        ),
        \Phel::keyword("end-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 3091,
          \Phel::keyword("column"), 15
        ),
        "min-arity", 1,
        "is-variadic", false,
        "arglists", "[filename]"
      )
    );
    \Phel::addDefinition(
      "phel\\core",
      "file-seq",
      new class() extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\core\\file_seq";

        public function __invoke($path) {
          $result_1121 = (\Phel::getDefinition("phel\\core", "lazy-seq-from-generator"))(call_user_func_array(array("\\Phel\\Lang\\Seq", "fileSeq"), array($path)));
          if (($__truthy = (null === $result_1121)) !== null && $__truthy !== false) {
            return \Phel::list([]);
          } else {
            return $result_1121;
          }

        }
      },
      \Phel::map(
        \Phel::keyword("doc"), "```phel\n(file-seq path)\n```\nReturns a lazy sequence of all files and directories in a directory tree.",
        \Phel::keyword("example"), "(filter |(php/str_ends_with \$ \".phel\") (file-seq \"src/\")) ; => [\"src/file1.phel\" \"src/file2.phel\" ...]",
        \Phel::keyword("start-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 3093,
          \Phel::keyword("column"), 0
        ),
        \Phel::keyword("end-location"), \Phel::map(
          \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
          \Phel::keyword("line"), 3103,
          \Phel::keyword("column"), 15
        ),
        "min-arity", 1,
        "is-variadic", false,
        "arglists", "[path]"
      )
    );
    \Phel::addDefinition(
      "phel\\core",
      "read-file-lazy",
      new class() extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\core\\read_file_lazy";
        private $fn0;
        private $fn1;

        public function __construct() {
          $this->fn0 = new class() extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\core\\read_file_lazy";

            public function __invoke($filename) {
              return (\Phel::getDefinition("phel\\core", "read-file-lazy"))($filename, 8192);
            }
          };
          $this->fn1 = new class() extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\core\\read_file_lazy";

            public function __invoke($filename, $chunk_size) {
              $result_1122 = (\Phel::getDefinition("phel\\core", "lazy-seq-from-generator"))(call_user_func_array(array("\\Phel\\Lang\\Seq", "readFileChunks"), array($filename, $chunk_size)));
              if (($__truthy = (null === $result_1122)) !== null && $__truthy !== false) {
                return \Phel::list([]);
              } else {
                return $result_1122;
              }

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
          \Phel::keyword("doc"), "```phel\n(read-file-lazy filename)\n(read-file-lazy filename chunk-size)\n```\nReturns a lazy sequence of byte chunks from a file.",
          \Phel::keyword("example"), "(take 5 (read-file-lazy \"large-file.bin\" 1024)) ; => [\"chunk1\" \"chunk2\" ...]",
          \Phel::keyword("start-location"), \Phel::map(
            \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
            \Phel::keyword("line"), 3105,
            \Phel::keyword("column"), 0
          ),
          \Phel::keyword("end-location"), \Phel::map(
            \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
            \Phel::keyword("line"), 3117,
            \Phel::keyword("column"), 17
          ),
          "min-arity", 1,
          "is-variadic", false,
          "max-arity", 2,
          "arglists", "([filename] [filename chunk-size])"
        )
      );
      \Phel::addDefinition(
        "phel\\core",
        "csv-seq",
        new class() extends \Phel\Lang\AbstractFn {
          public const BOUND_TO = "phel\\core\\csv_seq";
          private $fn0;
          private $fn1;

          public function __construct() {
            $this->fn0 = new class() extends \Phel\Lang\AbstractFn {
              public const BOUND_TO = "phel\\core\\csv_seq";

              public function __invoke($filename) {
                return (\Phel::getDefinition("phel\\core", "csv-seq"))($filename, \Phel::map());
              }
            };
            $this->fn1 = new class() extends \Phel\Lang\AbstractFn {
              public const BOUND_TO = "phel\\core\\csv_seq";

              public function __invoke($filename, $options) {
                $separator_1123 = (\Phel::getDefinition("phel\\core", "get"))($options, \Phel::keyword("separator"), ",");
                $enclosure_1124 = (\Phel::getDefinition("phel\\core", "get"))($options, \Phel::keyword("enclosure"), "\"");
                $escape_1125 = (\Phel::getDefinition("phel\\core", "get"))($options, \Phel::keyword("escape"), "\\");
                $result_1126 = (\Phel::getDefinition("phel\\core", "lazy-seq-from-generator"))(call_user_func_array(array("\\Phel\\Lang\\Seq", "csvLines"), array($filename, $separator_1123, $enclosure_1124, $escape_1125)));
                if (($__truthy = (null === $result_1126)) !== null && $__truthy !== false) {
                  return \Phel::list([]);
                } else {
                  return $result_1126;
                }

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
            \Phel::keyword("doc"), "```phel\n(csv-seq filename)\n(csv-seq filename options)\n```\nReturns a lazy sequence of rows from a CSV file.",
            \Phel::keyword("example"), "(take 10 (csv-seq \"data.csv\")) ; => [[\"col1\" \"col2\"] [\"val1\" \"val2\"] ...]",
            \Phel::keyword("start-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3119,
              \Phel::keyword("column"), 0
            ),
            \Phel::keyword("end-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3134,
              \Phel::keyword("column"), 17
            ),
            "min-arity", 1,
            "is-variadic", false,
            "max-arity", 2,
            "arglists", "([filename] [filename options])"
          )
        );
        \Phel::addDefinition(
          "phel\\core",
          "->",
          new class() extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\core\\_>";

            public function __invoke($x, ...$forms) {
              $forms = \Phel::vector($forms);
              $x_1127 = $x;
              $forms_1128 = (($__truthy = (\Phel::getDefinition("phel\\core", "empty?"))($forms)) !== null && $__truthy !== false ? null : $forms);
              while (true) {
                if (($__truthy = $forms_1128) !== null && $__truthy !== false) {
                  $form_1129 = (\Phel::getDefinition("phel\\core", "first"))($forms_1128);
                  $threaded_1130 = (($__truthy = (\Phel::getDefinition("phel\\core", "list?"))($form_1129)) !== null && $__truthy !== false ? (\Phel::getDefinition("phel\\core", "with-meta"))($form_1129, (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "first"))($form_1129)), (\Phel::getDefinition("phel\\core", "list"))($x_1127), (\Phel::getDefinition("phel\\core", "next"))($form_1129))) ?? []))) : (\Phel::getDefinition("phel\\core", "with-meta"))($form_1129, (\Phel::getDefinition("phel\\core", "list"))($form_1129, $x_1127)));
                  $__phel_1131 = $threaded_1130;
                  $__phel_1132 = (\Phel::getDefinition("phel\\core", "next"))($forms_1128);
                  $x_1127 = $__phel_1131;
                  $forms_1128 = $__phel_1132;
                  continue;

                } else {
                  return $x_1127;
                }
                break;
              }
            }
          },
          \Phel::map(
            \Phel::keyword("macro"), true,
            \Phel::keyword("doc"), "```phel\n(-> x & forms)\n```\nThreads the expr through the forms. Inserts `x` as the second item\n  in the first form, making a list of it if it is not a list already.\n  If there are more forms, insert the first form as the second item in\n  the second form, etc.",
            \Phel::keyword("start-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3140,
              \Phel::keyword("column"), 0
            ),
            \Phel::keyword("end-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3154,
              \Phel::keyword("column"), 10
            ),
            "min-arity", 1,
            "is-variadic", true,
            "arglists", "[x & forms]"
          )
        );
        \Phel::addDefinition(
          "phel\\core",
          "->>",
          new class() extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\core\\_>>";

            public function __invoke($x, ...$forms) {
              $forms = \Phel::vector($forms);
              $x_1135 = $x;
              $forms_1136 = (($__truthy = (\Phel::getDefinition("phel\\core", "empty?"))($forms)) !== null && $__truthy !== false ? null : $forms);
              while (true) {
                if (($__truthy = $forms_1136) !== null && $__truthy !== false) {
                  $form_1137 = (\Phel::getDefinition("phel\\core", "first"))($forms_1136);
                  $threaded_1138 = (($__truthy = (\Phel::getDefinition("phel\\core", "list?"))($form_1137)) !== null && $__truthy !== false ? (\Phel::getDefinition("phel\\core", "with-meta"))($form_1137, (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "first"))($form_1137)), (\Phel::getDefinition("phel\\core", "next"))($form_1137), (\Phel::getDefinition("phel\\core", "list"))($x_1135))) ?? []))) : (\Phel::getDefinition("phel\\core", "with-meta"))($form_1137, (\Phel::getDefinition("phel\\core", "list"))($form_1137, $x_1135)));
                  $__phel_1139 = $threaded_1138;
                  $__phel_1140 = (\Phel::getDefinition("phel\\core", "next"))($forms_1136);
                  $x_1135 = $__phel_1139;
                  $forms_1136 = $__phel_1140;
                  continue;

                } else {
                  return $x_1135;
                }
                break;
              }
            }
          },
          \Phel::map(
            \Phel::keyword("macro"), true,
            \Phel::keyword("doc"), "```phel\n(->> x & forms)\n```\nThreads the expr through the forms. Inserts `x` as the\n  last item in the first form, making a list of it if it is not a\n  list already. If there are more forms, insert the first form as the\n  last item in the second form, etc.",
            \Phel::keyword("start-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3156,
              \Phel::keyword("column"), 0
            ),
            \Phel::keyword("end-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3170,
              \Phel::keyword("column"), 10
            ),
            "min-arity", 1,
            "is-variadic", true,
            "arglists", "[x & forms]"
          )
        );
        \Phel::addDefinition(
          "phel\\core",
          "some->",
          new class() extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\core\\some_>";

            public function __invoke($x, ...$forms) {
              $forms = \Phel::vector($forms);
              $x_1143 = $x;
              $forms_1144 = (($__truthy = (\Phel::getDefinition("phel\\core", "empty?"))($forms)) !== null && $__truthy !== false ? null : $forms);
              while (true) {
                if (($__truthy = $forms_1144) !== null && $__truthy !== false) {
                  $form_1145 = (\Phel::getDefinition("phel\\core", "first"))($forms_1144);
                  $g_1146 = (\Phel::getDefinition("phel\\core", "gensym"))();
                  $call_1147 = (($__truthy = (\Phel::getDefinition("phel\\core", "list?"))($form_1145)) !== null && $__truthy !== false ? (function() use($x_1143,$forms_1144,$form_1145,$g_1146) {
                    $rest_1148 = (\Phel::getDefinition("phel\\core", "next"))($form_1145);
                    $args_1149 = (($__truthy = $rest_1148) !== null && $__truthy !== false ? (\Phel::getDefinition("phel\\core", "cons"))($g_1146, $rest_1148) : \Phel::vector([$g_1146]));
                    return (\Phel::getDefinition("phel\\core", "with-meta"))($form_1145, (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "cons"))((\Phel::getDefinition("phel\\core", "first"))($form_1145), $args_1149)) ?? [])));
                  })() : (\Phel::getDefinition("phel\\core", "with-meta"))($form_1145, (\Phel::getDefinition("phel\\core", "list"))($form_1145, $g_1146)));
                  $threaded_1150 = (\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("let")), \Phel::vector([$g_1146, $x_1143]), (\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("if")), (\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("php/===")), null, $g_1146), null, $call_1147));
                  $__phel_1151 = $threaded_1150;
                  $__phel_1152 = (\Phel::getDefinition("phel\\core", "next"))($forms_1144);
                  $x_1143 = $__phel_1151;
                  $forms_1144 = $__phel_1152;
                  continue;

                } else {
                  return $x_1143;
                }
                break;
              }
            }
          },
          \Phel::map(
            \Phel::keyword("macro"), true,
            \Phel::keyword("doc"), "```phel\n(some-> x & forms)\n```\nThreads `x` through the forms like `->` but stops when a form returns `nil`.",
            \Phel::keyword("start-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3172,
              \Phel::keyword("column"), 0
            ),
            \Phel::keyword("end-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3194,
              \Phel::keyword("column"), 10
            ),
            "min-arity", 1,
            "is-variadic", true,
            "arglists", "[x & forms]"
          )
        );
        \Phel::addDefinition(
          "phel\\core",
          "some->>",
          new class() extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\core\\some_>>";

            public function __invoke($x, ...$forms) {
              $forms = \Phel::vector($forms);
              $x_1155 = $x;
              $forms_1156 = (($__truthy = (\Phel::getDefinition("phel\\core", "empty?"))($forms)) !== null && $__truthy !== false ? null : $forms);
              while (true) {
                if (($__truthy = $forms_1156) !== null && $__truthy !== false) {
                  $form_1157 = (\Phel::getDefinition("phel\\core", "first"))($forms_1156);
                  $g_1158 = (\Phel::getDefinition("phel\\core", "gensym"))();
                  $call_1159 = (($__truthy = (\Phel::getDefinition("phel\\core", "list?"))($form_1157)) !== null && $__truthy !== false ? (function() use($x_1155,$forms_1156,$form_1157,$g_1158) {
                    $rest_1160 = (\Phel::getDefinition("phel\\core", "next"))($form_1157);
                    $args_1161 = (($__truthy = $rest_1160) !== null && $__truthy !== false ? (\Phel::getDefinition("phel\\core", "concat"))($rest_1160, \Phel::vector([$g_1158])) : \Phel::vector([$g_1158]));
                    return (\Phel::getDefinition("phel\\core", "with-meta"))($form_1157, (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "cons"))((\Phel::getDefinition("phel\\core", "first"))($form_1157), $args_1161)) ?? [])));
                  })() : (\Phel::getDefinition("phel\\core", "with-meta"))($form_1157, (\Phel::getDefinition("phel\\core", "list"))($form_1157, $g_1158)));
                  $threaded_1162 = (\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("let")), \Phel::vector([$g_1158, $x_1155]), (\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("if")), (\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("php/===")), null, $g_1158), null, $call_1159));
                  $__phel_1163 = $threaded_1162;
                  $__phel_1164 = (\Phel::getDefinition("phel\\core", "next"))($forms_1156);
                  $x_1155 = $__phel_1163;
                  $forms_1156 = $__phel_1164;
                  continue;

                } else {
                  return $x_1155;
                }
                break;
              }
            }
          },
          \Phel::map(
            \Phel::keyword("macro"), true,
            \Phel::keyword("doc"), "```phel\n(some->> x & forms)\n```\nThreads `x` through the forms like `->>` but stops when a form returns `nil`.",
            \Phel::keyword("start-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3196,
              \Phel::keyword("column"), 0
            ),
            \Phel::keyword("end-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3218,
              \Phel::keyword("column"), 10
            ),
            "min-arity", 1,
            "is-variadic", true,
            "arglists", "[x & forms]"
          )
        );
        \Phel::addDefinition(
          "phel\\core",
          "as->",
          new class() extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\core\\as_>";

            public function __invoke($expr, $name, ...$forms) {
              $forms = \Phel::vector($forms);
              $x_1167 = (\Phel::getDefinition("phel\\core", "gensym"))();
              return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("let"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "vector"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))($name), (\Phel::getDefinition("phel\\core", "list"))($expr), (\Phel::getDefinition("phel\\core", "interleave"))((\Phel::getDefinition("phel\\core", "repeat"))((\Phel::getDefinition("phel\\core", "count"))($forms), $name), $forms))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))($name))) ?? []));
            }
          },
          \Phel::map(
            \Phel::keyword("macro"), true,
            \Phel::keyword("doc"), "```phel\n(as-> expr name & forms)\n```\nBinds `name` to `expr`, evaluates the first form in the lexical context\n  of that binding, then binds name to that result, repeating for each\n  successive form, returning the result of the last form.",
            \Phel::keyword("start-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3220,
              \Phel::keyword("column"), 0
            ),
            \Phel::keyword("end-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3228,
              \Phel::keyword("column"), 15
            ),
            "min-arity", 2,
            "is-variadic", true,
            "arglists", "[expr name & forms]"
          )
        );
        \Phel::addDefinition(
          "phel\\core",
          "doto",
          new class() extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\core\\doto";

            public function __invoke($x, ...$forms) {
              $forms = \Phel::vector($forms);
              $gx_1168 = (\Phel::getDefinition("phel\\core", "gensym"))();
              return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("let"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "vector"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))($gx_1168), (\Phel::getDefinition("phel\\core", "list"))($x))) ?? []))), (\Phel::getDefinition("phel\\core", "map"))(new class($x, $forms, $gx_1168) extends \Phel\Lang\AbstractFn {
                public const BOUND_TO = "phel\\core\\doto";
                private $x;
                private $forms;
                private $gx_1168;

                public function __construct($x, $forms, $gx_1168) {
                  $this->x = $x;
                  $this->forms = $forms;
                  $this->gx_1168 = $gx_1168;
                }

                public function __invoke($f) {
                  $x = $this->x;
                  $forms = $this->forms;
                  $gx_1168 = $this->gx_1168;
                  if (($__truthy = (\Phel::getDefinition("phel\\core", "list?"))($f)) !== null && $__truthy !== false) {
                    return (\Phel::getDefinition("phel\\core", "with-meta"))($f, (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "first"))($f)), (\Phel::getDefinition("phel\\core", "list"))($gx_1168), (\Phel::getDefinition("phel\\core", "next"))($f))) ?? [])));
                  } else {
                    return (\Phel::getDefinition("phel\\core", "with-meta"))($f, (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))($f), (\Phel::getDefinition("phel\\core", "list"))($gx_1168))) ?? [])));
                  }

                }
              }, $forms), (\Phel::getDefinition("phel\\core", "list"))($gx_1168))) ?? []));
            }
          },
          \Phel::map(
            \Phel::keyword("macro"), true,
            \Phel::keyword("doc"), "```phel\n(doto x & forms)\n```\nEvaluates x then calls all of the methods and functions with the\n  value of x supplied at the front of the given arguments. The forms\n  are evaluated in order. Returns x.",
            \Phel::keyword("start-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3230,
              \Phel::keyword("column"), 0
            ),
            \Phel::keyword("end-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3242,
              \Phel::keyword("column"), 13
            ),
            "min-arity", 1,
            "is-variadic", true,
            "arglists", "[x & forms]"
          )
        );
        \Phel::addDefinition(
          "phel\\core",
          "cond->",
          new class() extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\core\\cond_>";

            public function __invoke($expr, ...$clauses) {
              $clauses = \Phel::vector($clauses);
              $g_1169 = (\Phel::getDefinition("phel\\core", "gensym"))();
              $steps_1170 = (\Phel::getDefinition("phel\\core", "map"))(new class($expr, $clauses, $g_1169) extends \Phel\Lang\AbstractFn {
                public const BOUND_TO = "phel\\core\\cond_>.steps";
                private $expr;
                private $clauses;
                private $g_1169;

                public function __construct($expr, $clauses, $g_1169) {
                  $this->expr = $expr;
                  $this->clauses = $clauses;
                  $this->g_1169 = $g_1169;
                }

                public function __invoke($pair) {
                  $expr = $this->expr;
                  $clauses = $this->clauses;
                  $g_1169 = $this->g_1169;
                  $test_1171 = (\Phel::getDefinition("phel\\core", "first"))($pair);
                  $step_1172 = (\Phel::getDefinition("phel\\core", "second"))($pair);
                  return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("if"))), (\Phel::getDefinition("phel\\core", "list"))($test_1171), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/->"))), (\Phel::getDefinition("phel\\core", "list"))($g_1169), (\Phel::getDefinition("phel\\core", "list"))($step_1172))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))($g_1169))) ?? []));
                }
              }, (\Phel::getDefinition("phel\\core", "partition"))(2, $clauses));
              return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("let"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "vector"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))($g_1169), (\Phel::getDefinition("phel\\core", "list"))($expr), (\Phel::getDefinition("phel\\core", "interleave"))((\Phel::getDefinition("phel\\core", "repeat"))((\Phel::getDefinition("phel\\core", "count"))($steps_1170), $g_1169), $steps_1170))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))($g_1169))) ?? []));
            }
          },
          \Phel::map(
            \Phel::keyword("macro"), true,
            \Phel::keyword("doc"), "```phel\n(cond-> expr & clauses)\n```\nTakes an expression and a set of test/form pairs. Threads `expr` (via `->`)\n  through each form for which the corresponding test expression is true.\n  Note that, unlike `cond` branching, `cond->` threading does not short-circuit\n  after the first true test expression.",
            \Phel::keyword("example"), "(cond-> 1 true inc false (* 42) true (* 3)) ; => 6",
            \Phel::keyword("start-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3244,
              \Phel::keyword("column"), 0
            ),
            \Phel::keyword("end-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3259,
              \Phel::keyword("column"), 12
            ),
            "min-arity", 1,
            "is-variadic", true,
            "arglists", "[expr & clauses]"
          )
        );
        \Phel::addDefinition(
          "phel\\core",
          "cond->>",
          new class() extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\core\\cond_>>";

            public function __invoke($expr, ...$clauses) {
              $clauses = \Phel::vector($clauses);
              $g_1173 = (\Phel::getDefinition("phel\\core", "gensym"))();
              $steps_1174 = (\Phel::getDefinition("phel\\core", "map"))(new class($expr, $clauses, $g_1173) extends \Phel\Lang\AbstractFn {
                public const BOUND_TO = "phel\\core\\cond_>>.steps";
                private $expr;
                private $clauses;
                private $g_1173;

                public function __construct($expr, $clauses, $g_1173) {
                  $this->expr = $expr;
                  $this->clauses = $clauses;
                  $this->g_1173 = $g_1173;
                }

                public function __invoke($pair) {
                  $expr = $this->expr;
                  $clauses = $this->clauses;
                  $g_1173 = $this->g_1173;
                  $test_1175 = (\Phel::getDefinition("phel\\core", "first"))($pair);
                  $step_1176 = (\Phel::getDefinition("phel\\core", "second"))($pair);
                  return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("if"))), (\Phel::getDefinition("phel\\core", "list"))($test_1175), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/->>"))), (\Phel::getDefinition("phel\\core", "list"))($g_1173), (\Phel::getDefinition("phel\\core", "list"))($step_1176))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))($g_1173))) ?? []));
                }
              }, (\Phel::getDefinition("phel\\core", "partition"))(2, $clauses));
              return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("let"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "vector"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))($g_1173), (\Phel::getDefinition("phel\\core", "list"))($expr), (\Phel::getDefinition("phel\\core", "interleave"))((\Phel::getDefinition("phel\\core", "repeat"))((\Phel::getDefinition("phel\\core", "count"))($steps_1174), $g_1173), $steps_1174))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))($g_1173))) ?? []));
            }
          },
          \Phel::map(
            \Phel::keyword("macro"), true,
            \Phel::keyword("doc"), "```phel\n(cond->> expr & clauses)\n```\nTakes an expression and a set of test/form pairs. Threads `expr` (via `->>`)\n  through each form for which the corresponding test expression is true.\n  Note that, unlike `cond` branching, `cond->>` threading does not short-circuit\n  after the first true test expression.",
            \Phel::keyword("example"), "(cond->> [1 2 3] true (map inc) false (filter odd?)) ; => [2 3 4]",
            \Phel::keyword("start-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3261,
              \Phel::keyword("column"), 0
            ),
            \Phel::keyword("end-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3276,
              \Phel::keyword("column"), 12
            ),
            "min-arity", 1,
            "is-variadic", true,
            "arglists", "[expr & clauses]"
          )
        );
        \Phel::addDefinition(
          "phel\\core",
          "re-pattern",
          new class() extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\core\\re_pattern";

            public function __invoke($s) {
              $len_1177 = strlen($s);
              if (($__truthy = (function() use($s,$len_1177) {
                $__phel_1178_1179 = ($len_1177 >= 2);
                if (($__truthy = $__phel_1178_1179) !== null && $__truthy !== false) {
                  $__phel_1180_1181 = (\Phel::getDefinition("phel\\core", "="))(substr($s, 0, 1), substr($s, -1));
                  if (($__truthy = $__phel_1180_1181) !== null && $__truthy !== false) {
                    return (\Phel::getDefinition("phel\\core", "not"))(ctype_alnum(substr($s, 0, 1)));
                  } else {
                    return $__phel_1180_1181;
                  }

                } else {
                  return $__phel_1178_1179;
                }

              })()) !== null && $__truthy !== false) {
                return $s;
              } else {
                return (\Phel::getDefinition("phel\\core", "str"))("/", $s, "/");
              }

            }
          },
          \Phel::map(
            \Phel::keyword("doc"), "```phel\n(re-pattern s)\n```\nReturns a PCRE pattern string from `s`. If `s` is already delimited,\n  returns it as-is. Otherwise wraps in `/` delimiters.",
            \Phel::keyword("example"), "(re-pattern \"\\\\d+\") ; => \"/\\\\d+/\"",
            \Phel::keyword("see-also"), \Phel::vector(["re-find", "re-matches", "re-seq"]),
            \Phel::keyword("start-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3282,
              \Phel::keyword("column"), 0
            ),
            \Phel::keyword("end-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3293,
              \Phel::keyword("column"), 24
            ),
            "min-arity", 1,
            "is-variadic", false,
            "arglists", "[s]"
          )
        );
        \Phel::addDefinition(
          "phel\\core",
          "re-seq",
          new class() extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\core\\re_seq";

            public function __invoke($re, $s) {
              $matches_1182 = array();
              $match_result_1183 = preg_match_all($re, $s, $matches_1182);
              $matches_1184 = (\Phel::getDefinition("phel\\core", "php->phel"))($matches_1182);
              if (($__truthy = (\Phel::getDefinition("phel\\core", "="))((\Phel::getDefinition("phel\\core", "count"))($matches_1184), 1)) !== null && $__truthy !== false) {
                return (\Phel::getDefinition("phel\\core", "first"))($matches_1184);
              } else {
                return (\Phel::getDefinition("phel\\core", "doall"))((\Phel::getDefinition("phel\\core", "map"))(\Phel::getDefinition("phel\\core", "vector"), ...(($matches_1184) ?? [])));
              }

            }
          },
          \Phel::map(
            \Phel::keyword("doc"), "```phel\n(re-seq re s)\n```\nReturns a sequence of successive matches of pattern in string.",
            \Phel::keyword("example"), "(re-seq #\"\\d+\" \"a1b2c3\") ; => [\"1\" \"2\" \"3\"]",
            \Phel::keyword("see-also"), \Phel::vector(["re-find", "re-matches"]),
            \Phel::keyword("start-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3295,
              \Phel::keyword("column"), 0
            ),
            \Phel::keyword("end-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3305,
              \Phel::keyword("column"), 43
            ),
            "min-arity", 2,
            "is-variadic", false,
            "arglists", "[re s]"
          )
        );
        \Phel::addDefinition(
          "phel\\core",
          "re-find",
          new class() extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\core\\re_find";

            public function __invoke($re, $s) {
              $matches_1185 = array();
              $result_1186 = preg_match($re, $s, $matches_1185);
              if (($__truthy = (\Phel::getDefinition("phel\\core", "="))(1, $result_1186)) !== null && $__truthy !== false) {
                $matches_1187 = (\Phel::getDefinition("phel\\core", "php->phel"))($matches_1185);
                if (($__truthy = (\Phel::getDefinition("phel\\core", "="))(1, (\Phel::getDefinition("phel\\core", "count"))($matches_1187))) !== null && $__truthy !== false) {
                  return (\Phel::getDefinition("phel\\core", "first"))($matches_1187);
                } else {
                  return (\Phel::getDefinition("phel\\core", "into"))(\Phel::vector([]), $matches_1187);
                }

              } else {
                return null;
              }

            }
          },
          \Phel::map(
            \Phel::keyword("doc"), "```phel\n(re-find re s)\n```\nReturns the first match of pattern in string, or nil if no match.\n  If the pattern has groups, returns a vector of [full-match group1 group2 ...].",
            \Phel::keyword("example"), "(re-find #\"\\d+\" \"abc123def\") ; => \"123\"",
            \Phel::keyword("see-also"), \Phel::vector(["re-seq", "re-matches"]),
            \Phel::keyword("start-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3307,
              \Phel::keyword("column"), 0
            ),
            \Phel::keyword("end-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3319,
              \Phel::keyword("column"), 32
            ),
            "min-arity", 2,
            "is-variadic", false,
            "arglists", "[re s]"
          )
        );
        \Phel::addDefinition(
          "phel\\core",
          "re-matches",
          new class() extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\core\\re_matches";

            public function __invoke($re, $s) {
              $result_1188 = (\Phel::getDefinition("phel\\core", "re-find"))($re, $s);
              if (($__truthy = (\Phel::getDefinition("phel\\core", "not"))((\Phel::getDefinition("phel\\core", "nil?"))($result_1188))) !== null && $__truthy !== false) {
                $full_match_1189 = (($__truthy = (\Phel::getDefinition("phel\\core", "string?"))($result_1188)) !== null && $__truthy !== false ? $result_1188 : (\Phel::getDefinition("phel\\core", "first"))($result_1188));
                if (($__truthy = (\Phel::getDefinition("phel\\core", "="))($full_match_1189, $s)) !== null && $__truthy !== false) {
                  return $result_1188;
                } else {
                  return null;
                }

              } else {
                return null;
              }

            }
          },
          \Phel::map(
            \Phel::keyword("doc"), "```phel\n(re-matches re s)\n```\nReturns the match, if any, of string to pattern. If the pattern has groups,\n  returns a vector of [full-match group1 group2 ...]. Returns nil if no match.\n  Unlike re-find, the entire string must match.",
            \Phel::keyword("example"), "(re-matches #\"(\\d+)-(\\d+)\" \"12-34\") ; => [\"12-34\" \"12\" \"34\"]",
            \Phel::keyword("see-also"), \Phel::vector(["re-find", "re-seq"]),
            \Phel::keyword("start-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3321,
              \Phel::keyword("column"), 0
            ),
            \Phel::keyword("end-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3332,
              \Phel::keyword("column"), 21
            ),
            "min-arity", 2,
            "is-variadic", false,
            "arglists", "[re s]"
          )
        );
        \Phel::addDefinition(
          "phel\\core",
          "binding",
          new class() extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\core\\binding";

            public function __invoke($bindings, ...$body) {
              $body = \Phel::vector($body);
              $names_1190 = (\Phel::getDefinition("phel\\core", "take-nth"))(2, $bindings);
              $vals_1191 = (\Phel::getDefinition("phel\\core", "take-nth"))(2, (\Phel::getDefinition("phel\\core", "drop"))(1, $bindings));
              $orig_val_syms_1192 = (\Phel::getDefinition("phel\\core", "map"))(\Phel::getDefinition("phel\\core", "gensym"), $names_1190);
              $temp_val_syms_1193 = (\Phel::getDefinition("phel\\core", "map"))(\Phel::getDefinition("phel\\core", "gensym"), $names_1190);
              $binds_1194 = (\Phel::getDefinition("phel\\core", "map"))(\Phel::getDefinition("phel\\core", "vector"), $names_1190, $temp_val_syms_1193);
              $resets_1195 = (\Phel::getDefinition("phel\\core", "reverse"))((\Phel::getDefinition("phel\\core", "map"))(\Phel::getDefinition("phel\\core", "vector"), $names_1190, $orig_val_syms_1192));
              $bind_value_1196 = new class($bindings, $body, $names_1190, $vals_1191, $orig_val_syms_1192, $temp_val_syms_1193, $binds_1194, $resets_1195) extends \Phel\Lang\AbstractFn {
                public const BOUND_TO = "phel\\core\\binding.bind_value";
                private $bindings;
                private $body;
                private $names_1190;
                private $vals_1191;
                private $orig_val_syms_1192;
                private $temp_val_syms_1193;
                private $binds_1194;
                private $resets_1195;

                public function __construct($bindings, $body, $names_1190, $vals_1191, $orig_val_syms_1192, $temp_val_syms_1193, $binds_1194, $resets_1195) {
                  $this->bindings = $bindings;
                  $this->body = $body;
                  $this->names_1190 = $names_1190;
                  $this->vals_1191 = $vals_1191;
                  $this->orig_val_syms_1192 = $orig_val_syms_1192;
                  $this->temp_val_syms_1193 = $temp_val_syms_1193;
                  $this->binds_1194 = $binds_1194;
                  $this->resets_1195 = $resets_1195;
                }

                public function __invoke($__phel_1197) {
                  $bindings = $this->bindings;
                  $body = $this->body;
                  $names_1190 = $this->names_1190;
                  $vals_1191 = $this->vals_1191;
                  $orig_val_syms_1192 = $this->orig_val_syms_1192;
                  $temp_val_syms_1193 = $this->temp_val_syms_1193;
                  $binds_1194 = $this->binds_1194;
                  $resets_1195 = $this->resets_1195;
                  $__phel_1198_1203 = $__phel_1197;
                  $__phel_1199_1204 = (\Phel::getDefinition("phel\\core", "first"))($__phel_1198_1203);
                  $__phel_1200_1205 = (\Phel::getDefinition("phel\\core", "next"))($__phel_1198_1203);
                  $k_1206 = $__phel_1199_1204;
                  $__phel_1201_1207 = (\Phel::getDefinition("phel\\core", "first"))($__phel_1200_1205);
                  $__phel_1202_1208 = (\Phel::getDefinition("phel\\core", "next"))($__phel_1200_1205);
                  $v_1209 = $__phel_1201_1207;
                  return (\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("set-var")), $k_1206, $v_1209);
                }
              };
              return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("let"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "vector"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "interleave"))($orig_val_syms_1192, $names_1190), (\Phel::getDefinition("phel\\core", "interleave"))($temp_val_syms_1193, $vals_1191))) ?? []))), (\Phel::getDefinition("phel\\core", "map"))($bind_value_1196, $binds_1194), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("try"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("do"))), $body)) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("finally"))), (\Phel::getDefinition("phel\\core", "map"))($bind_value_1196, $resets_1195))) ?? []))))) ?? []))))) ?? []));
            }
          },
          \Phel::map(
            \Phel::keyword("macro"), true,
            \Phel::keyword("doc"), "```phel\n(binding bindings & body)\n```\nTemporary redefines definitions while executing the body.\n  The value will be reset after the body was executed.",
            \Phel::keyword("start-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3339,
              \Phel::keyword("column"), 0
            ),
            \Phel::keyword("end-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3356,
              \Phel::keyword("column"), 41
            ),
            "min-arity", 1,
            "is-variadic", true,
            "arglists", "[bindings & body]"
          )
        );
        \Phel::addDefinition(
          "phel\\core",
          "definterface",
          new class() extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\core\\definterface";

            public function __invoke($name, ...$fns) {
              $fns = \Phel::vector($fns);
              $name_str_1210 = (function() use($name,$fns) {
                $target_1238 = $name;
                return $target_1238->getName();
              })();
              $munge_1211 = (new \Phel\Compiler\Application\Munge());
              $class_name_str_1212 = ((function() use($name,$fns,$name_str_1210,$munge_1211) {
                $target_1239 = $munge_1211;
                return $target_1239->encodeNs(\Phel::getDefinition("phel\\core", "*ns*"));
              })() . "\\" . (function() use($name,$fns,$name_str_1210,$munge_1211) {
                $target_1240 = $munge_1211;
                return $target_1240->encode($name_str_1210);
              })());
              $defs_1213 = (function() use($name,$fns,$name_str_1210,$munge_1211,$class_name_str_1212) {
                $__phel_1214_1217 = (\Phel::getDefinition("phel\\core", "var"))(\Phel::vector([]));
                foreach (\Phel\Lang\Seq::toIterable($fns) as $__phel_1216) {
                  $__phel_1218_1225 = $__phel_1216;
                  $__phel_1219_1226 = (\Phel::getDefinition("phel\\core", "first"))($__phel_1218_1225);
                  $__phel_1220_1227 = (\Phel::getDefinition("phel\\core", "next"))($__phel_1218_1225);
                  $fn_name_1228 = $__phel_1219_1226;
                  $__phel_1221_1229 = (\Phel::getDefinition("phel\\core", "first"))($__phel_1220_1227);
                  $__phel_1222_1230 = (\Phel::getDefinition("phel\\core", "next"))($__phel_1220_1227);
                  $args_1231 = $__phel_1221_1229;
                  $__phel_1223_1232 = (\Phel::getDefinition("phel\\core", "first"))($__phel_1222_1230);
                  $__phel_1224_1233 = (\Phel::getDefinition("phel\\core", "next"))($__phel_1222_1230);
                  $doc_1234 = $__phel_1223_1232;
                  $fn_name_str_1235 = (function() use($name,$fns,$name_str_1210,$munge_1211,$class_name_str_1212,$__phel_1214_1217,$__phel_1216,$__phel_1218_1225,$__phel_1219_1226,$__phel_1220_1227,$fn_name_1228,$__phel_1221_1229,$__phel_1222_1230,$args_1231,$__phel_1223_1232,$__phel_1224_1233,$doc_1234) {
                    $target_1241 = $fn_name_1228;
                    return $target_1241->getName();
                  })();
                  $munged_fn_name_1236 = (function() use($name,$fns,$name_str_1210,$munge_1211,$class_name_str_1212,$__phel_1214_1217,$__phel_1216,$__phel_1218_1225,$__phel_1219_1226,$__phel_1220_1227,$fn_name_1228,$__phel_1221_1229,$__phel_1222_1230,$args_1231,$__phel_1223_1232,$__phel_1224_1233,$doc_1234,$fn_name_str_1235) {
                    $target_1242 = $munge_1211;
                    return $target_1242->encode($fn_name_str_1235);
                  })();
                  $munged_fn_symbol_1237 = (\Phel\Lang\Symbol::create($munged_fn_name_1236));
                  (\Phel::getDefinition("phel\\core", "swap!"))($__phel_1214_1217, new class($name, $fns, $name_str_1210, $munge_1211, $class_name_str_1212, $__phel_1214_1217, $__phel_1216, $__phel_1218_1225, $__phel_1219_1226, $__phel_1220_1227, $fn_name_1228, $__phel_1221_1229, $__phel_1222_1230, $args_1231, $__phel_1223_1232, $__phel_1224_1233, $doc_1234, $fn_name_str_1235, $munged_fn_name_1236, $munged_fn_symbol_1237) extends \Phel\Lang\AbstractFn {
                    public const BOUND_TO = "phel\\core\\definterface.defs";
                    private $name;
                    private $fns;
                    private $name_str_1210;
                    private $munge_1211;
                    private $class_name_str_1212;
                    private $__phel_1214_1217;
                    private $__phel_1216;
                    private $__phel_1218_1225;
                    private $__phel_1219_1226;
                    private $__phel_1220_1227;
                    private $fn_name_1228;
                    private $__phel_1221_1229;
                    private $__phel_1222_1230;
                    private $args_1231;
                    private $__phel_1223_1232;
                    private $__phel_1224_1233;
                    private $doc_1234;
                    private $fn_name_str_1235;
                    private $munged_fn_name_1236;
                    private $munged_fn_symbol_1237;

                    public function __construct($name, $fns, $name_str_1210, $munge_1211, $class_name_str_1212, $__phel_1214_1217, $__phel_1216, $__phel_1218_1225, $__phel_1219_1226, $__phel_1220_1227, $fn_name_1228, $__phel_1221_1229, $__phel_1222_1230, $args_1231, $__phel_1223_1232, $__phel_1224_1233, $doc_1234, $fn_name_str_1235, $munged_fn_name_1236, $munged_fn_symbol_1237) {
                      $this->name = $name;
                      $this->fns = $fns;
                      $this->name_str_1210 = $name_str_1210;
                      $this->munge_1211 = $munge_1211;
                      $this->class_name_str_1212 = $class_name_str_1212;
                      $this->__phel_1214_1217 = $__phel_1214_1217;
                      $this->__phel_1216 = $__phel_1216;
                      $this->__phel_1218_1225 = $__phel_1218_1225;
                      $this->__phel_1219_1226 = $__phel_1219_1226;
                      $this->__phel_1220_1227 = $__phel_1220_1227;
                      $this->fn_name_1228 = $fn_name_1228;
                      $this->__phel_1221_1229 = $__phel_1221_1229;
                      $this->__phel_1222_1230 = $__phel_1222_1230;
                      $this->args_1231 = $args_1231;
                      $this->__phel_1223_1232 = $__phel_1223_1232;
                      $this->__phel_1224_1233 = $__phel_1224_1233;
                      $this->doc_1234 = $doc_1234;
                      $this->fn_name_str_1235 = $fn_name_str_1235;
                      $this->munged_fn_name_1236 = $munged_fn_name_1236;
                      $this->munged_fn_symbol_1237 = $munged_fn_symbol_1237;
                    }

                    public function __invoke($__phel_1215) {
                      $name = $this->name;
                      $fns = $this->fns;
                      $name_str_1210 = $this->name_str_1210;
                      $munge_1211 = $this->munge_1211;
                      $class_name_str_1212 = $this->class_name_str_1212;
                      $__phel_1214_1217 = $this->__phel_1214_1217;
                      $__phel_1216 = $this->__phel_1216;
                      $__phel_1218_1225 = $this->__phel_1218_1225;
                      $__phel_1219_1226 = $this->__phel_1219_1226;
                      $__phel_1220_1227 = $this->__phel_1220_1227;
                      $fn_name_1228 = $this->fn_name_1228;
                      $__phel_1221_1229 = $this->__phel_1221_1229;
                      $__phel_1222_1230 = $this->__phel_1222_1230;
                      $args_1231 = $this->args_1231;
                      $__phel_1223_1232 = $this->__phel_1223_1232;
                      $__phel_1224_1233 = $this->__phel_1224_1233;
                      $doc_1234 = $this->doc_1234;
                      $fn_name_str_1235 = $this->fn_name_str_1235;
                      $munged_fn_name_1236 = $this->munged_fn_name_1236;
                      $munged_fn_symbol_1237 = $this->munged_fn_symbol_1237;
                      return (\Phel::getDefinition("phel\\core", "conj"))($__phel_1215, (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/defn"))), (\Phel::getDefinition("phel\\core", "list"))($fn_name_1228), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "hash-map"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))(\Phel::keyword("doc")), (\Phel::getDefinition("phel\\core", "list"))($doc_1234))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))($args_1231), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("if"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("php/is_a"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "first"))($args_1231)), (\Phel::getDefinition("phel\\core", "list"))($class_name_str_1212))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("php/->"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "first"))($args_1231)), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))($munged_fn_symbol_1237), (\Phel::getDefinition("phel\\core", "rest"))($args_1231))) ?? []))))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("throw"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("php/new"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("\\InvalidArgumentException"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "str"))("Value doesn't implement interface ", $name)))) ?? []))))) ?? []))))) ?? []))))) ?? [])));
                    }
                  });
                }
                return (\Phel::getDefinition("phel\\core", "deref"))($__phel_1214_1217);
              })();
              return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("do"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("definterface*"))), (\Phel::getDefinition("phel\\core", "list"))($name), $fns)) ?? []))), $defs_1213)) ?? []));
            }
          },
          \Phel::map(
            \Phel::keyword("macro"), true,
            \Phel::keyword("doc"), "```phel\n(definterface name & fns)\n```\nAn interface in Phel defines an abstract set of functions. It is directly mapped to a PHP interface. An interface can be defined by using the definterface macro.",
            \Phel::keyword("example"), "(definterface name & fns)",
            \Phel::keyword("start-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3362,
              \Phel::keyword("column"), 0
            ),
            \Phel::keyword("end-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3379,
              \Phel::keyword("column"), 16
            ),
            "min-arity", 1,
            "is-variadic", true,
            "arglists", "[name & fns]"
          )
        );
        \Phel::addDefinition(
          "phel\\core",
          "*hierarchy*",
          (\Phel::getDefinition("phel\\core", "var"))(\Phel::map(
            \Phel::keyword("parents"), \Phel::map()
          )),
          \Phel::map(
            \Phel::keyword("doc"), "Global hierarchy for keyword/symbol taxonomies.",
            \Phel::keyword("start-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3385,
              \Phel::keyword("column"), 0
            ),
            \Phel::keyword("end-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3387,
              \Phel::keyword("column"), 22
            )
          )
        );
        \Phel::addDefinition(
          "phel\\core",
          "make-hierarchy",
          new class() extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\core\\make_hierarchy";

            public function __invoke() {
              return \Phel::map(
                \Phel::keyword("parents"), \Phel::map()
              );
            }
          },
          \Phel::map(
            \Phel::keyword("doc"), "```phel\n(make-hierarchy)\n```\nReturns a new hierarchy map with no parent relationships.",
            \Phel::keyword("see-also"), \Phel::vector(["derive", "isa?", "parents", "ancestors", "descendants"]),
            \Phel::keyword("start-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3389,
              \Phel::keyword("column"), 0
            ),
            \Phel::keyword("end-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3394,
              \Phel::keyword("column"), 16
            ),
            "min-arity", 0,
            "is-variadic", false,
            "arglists", "[]"
          )
        );
        \Phel::addDefinition(
          "phel\\core",
          "compute-ancestors",
          new class() extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\core\\compute_ancestors";

            public function __invoke($parents_map, $tag) {
              $direct_1248 = (\Phel::getDefinition("phel\\core", "get"))($parents_map, $tag);
              if (($__truthy = (\Phel::getDefinition("phel\\core", "nil?"))($direct_1248)) !== null && $__truthy !== false) {
                return (\Phel::getDefinition("phel\\core", "hash-set"))();
              } else {
                return (\Phel::getDefinition("phel\\core", "reduce"))(new class($parents_map, $tag, $direct_1248) extends \Phel\Lang\AbstractFn {
                  public const BOUND_TO = "phel\\core\\compute_ancestors";
                  private $parents_map;
                  private $tag;
                  private $direct_1248;

                  public function __construct($parents_map, $tag, $direct_1248) {
                    $this->parents_map = $parents_map;
                    $this->tag = $tag;
                    $this->direct_1248 = $direct_1248;
                  }

                  public function __invoke($acc, $p) {
                    $parents_map = $this->parents_map;
                    $tag = $this->tag;
                    $direct_1248 = $this->direct_1248;
                    return (\Phel::getDefinition("phel\\core", "union"))($acc, (\Phel::getDefinition("phel\\core", "hash-set"))($p), (\Phel::getDefinition("phel\\core", "compute-ancestors"))($parents_map, $p));
                  }
                }, (\Phel::getDefinition("phel\\core", "hash-set"))(), $direct_1248);
              }

            }
          },
          \Phel::map(
            \Phel::keyword("private"), true,
            \Phel::keyword("doc"), "```phel\n(compute-ancestors parents-map tag)\n```\nComputes all transitive ancestors of tag from a parents map.",
            \Phel::keyword("start-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3396,
              \Phel::keyword("column"), 0
            ),
            \Phel::keyword("end-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3406,
              \Phel::keyword("column"), 17
            ),
            "min-arity", 2,
            "is-variadic", false,
            "arglists", "[parents-map tag]"
          )
        );
        \Phel::addDefinition(
          "phel\\core",
          "isa-in?",
          new class() extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\core\\isa_in?";

            public function __invoke($parents_map, $child, $parent) {
              $direct_1249 = (\Phel::getDefinition("phel\\core", "get"))($parents_map, $child);
              if (($__truthy = (\Phel::getDefinition("phel\\core", "nil?"))($direct_1249)) !== null && $__truthy !== false) {
                return false;
              } else {
                if (($__truthy = (\Phel::getDefinition("phel\\core", "contains?"))($direct_1249, $parent)) !== null && $__truthy !== false) {
                  return true;
                } else {
                  return (\Phel::getDefinition("phel\\core", "reduce"))(new class($parents_map, $child, $parent, $direct_1249) extends \Phel\Lang\AbstractFn {
                    public const BOUND_TO = "phel\\core\\isa_in?";
                    private $parents_map;
                    private $child;
                    private $parent;
                    private $direct_1249;

                    public function __construct($parents_map, $child, $parent, $direct_1249) {
                      $this->parents_map = $parents_map;
                      $this->child = $child;
                      $this->parent = $parent;
                      $this->direct_1249 = $direct_1249;
                    }

                    public function __invoke($found, $p) {
                      $parents_map = $this->parents_map;
                      $child = $this->child;
                      $parent = $this->parent;
                      $direct_1249 = $this->direct_1249;
                      if (($__truthy = $found) !== null && $__truthy !== false) {
                        return $found;
                      } else {
                        return (\Phel::getDefinition("phel\\core", "isa-in?"))($parents_map, $p, $parent);
                      }

                    }
                  }, false, $direct_1249);
                }

              }

            }
          },
          \Phel::map(
            \Phel::keyword("private"), true,
            \Phel::keyword("doc"), "```phel\n(isa-in? parents-map child parent)\n```\nChecks if child is (transitively) a descendant of parent in parents-map.\n  Walks up the parent chain without building the full ancestor set.",
            \Phel::keyword("start-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3408,
              \Phel::keyword("column"), 0
            ),
            \Phel::keyword("end-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3421,
              \Phel::keyword("column"), 20
            ),
            "min-arity", 3,
            "is-variadic", false,
            "arglists", "[parents-map child parent]"
          )
        );
        \Phel::addDefinition(
          "phel\\core",
          "isa?",
          new class() extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\core\\isa?";

            public function __invoke($child, $parent) {
              $__phel_1250_1251 = (\Phel::getDefinition("phel\\core", "="))($child, $parent);
              if (($__truthy = $__phel_1250_1251) !== null && $__truthy !== false) {
                return $__phel_1250_1251;
              } else {
                return (\Phel::getDefinition("phel\\core", "isa-in?"))((\Phel::getDefinition("phel\\core", "get"))((\Phel::getDefinition("phel\\core", "deref"))(\Phel::getDefinition("phel\\core", "*hierarchy*")), \Phel::keyword("parents")), $child, $parent);
              }

            }
          },
          \Phel::map(
            \Phel::keyword("doc"), "```phel\n(isa? child parent)\n```\nReturns true if child equals parent, or child is a descendant of parent\n  in the global hierarchy.",
            \Phel::keyword("example"), "(do (derive :square :shape) (isa? :square :shape)) ; => true",
            \Phel::keyword("see-also"), \Phel::vector(["derive", "parents", "ancestors", "descendants"]),
            \Phel::keyword("start-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3423,
              \Phel::keyword("column"), 0
            ),
            \Phel::keyword("end-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3430,
              \Phel::keyword("column"), 58
            ),
            "min-arity", 2,
            "is-variadic", false,
            "arglists", "[child parent]"
          )
        );
        \Phel::addDefinition(
          "phel\\core",
          "derive",
          new class() extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\core\\derive";

            public function __invoke($child, $parent) {
              if (($__truthy = (\Phel::getDefinition("phel\\core", "isa?"))($parent, $child)) !== null && $__truthy !== false) {
                throw (new \InvalidArgumentException((\Phel::getDefinition("phel\\core", "str"))("Cyclic derivation: ", $parent, " already isa ", $child)));
              } else {

              }

              (\Phel::getDefinition("phel\\core", "swap!"))(\Phel::getDefinition("phel\\core", "*hierarchy*"), new class($child, $parent) extends \Phel\Lang\AbstractFn {
                public const BOUND_TO = "phel\\core\\derive";
                private $child;
                private $parent;

                public function __construct($child, $parent) {
                  $this->child = $child;
                  $this->parent = $parent;
                }

                public function __invoke($h) {
                  $child = $this->child;
                  $parent = $this->parent;
                  $parents_map_1252 = (\Phel::getDefinition("phel\\core", "get"))($h, \Phel::keyword("parents"));
                  $old_parents_1253 = (\Phel::getDefinition("phel\\core", "get"))($parents_map_1252, $child, (\Phel::getDefinition("phel\\core", "hash-set"))());
                  $new_parents_1254 = (\Phel::getDefinition("phel\\core", "union"))($old_parents_1253, (\Phel::getDefinition("phel\\core", "hash-set"))($parent));
                  return \Phel::map(
                    \Phel::keyword("parents"), (\Phel::getDefinition("phel\\core", "assoc"))($parents_map_1252, $child, $new_parents_1254)
                  );
                }
              });
              return null;
            }
          },
          \Phel::map(
            \Phel::keyword("doc"), "```phel\n(derive child parent)\n```\nEstablishes a parent/child relationship between child and parent keywords\n  in the global hierarchy. Throws on cyclic derivation.",
            \Phel::keyword("example"), "(derive :square :shape)",
            \Phel::keyword("see-also"), \Phel::vector(["underive", "isa?", "parents", "ancestors", "descendants"]),
            \Phel::keyword("start-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3432,
              \Phel::keyword("column"), 0
            ),
            \Phel::keyword("end-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3447,
              \Phel::keyword("column"), 6
            ),
            "min-arity", 2,
            "is-variadic", false,
            "arglists", "[child parent]"
          )
        );
        \Phel::addDefinition(
          "phel\\core",
          "underive",
          new class() extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\core\\underive";

            public function __invoke($child, $parent) {
              (\Phel::getDefinition("phel\\core", "swap!"))(\Phel::getDefinition("phel\\core", "*hierarchy*"), new class($child, $parent) extends \Phel\Lang\AbstractFn {
                public const BOUND_TO = "phel\\core\\underive";
                private $child;
                private $parent;

                public function __construct($child, $parent) {
                  $this->child = $child;
                  $this->parent = $parent;
                }

                public function __invoke($h) {
                  $child = $this->child;
                  $parent = $this->parent;
                  $parents_map_1255 = (\Phel::getDefinition("phel\\core", "get"))($h, \Phel::keyword("parents"));
                  $old_parents_1256 = (\Phel::getDefinition("phel\\core", "get"))($parents_map_1255, $child, (\Phel::getDefinition("phel\\core", "hash-set"))());
                  $new_parents_1257 = (\Phel::getDefinition("phel\\core", "difference"))($old_parents_1256, (\Phel::getDefinition("phel\\core", "hash-set"))($parent));
                  $new_map_1258 = (($__truthy = (\Phel::getDefinition("phel\\core", "empty?"))($new_parents_1257)) !== null && $__truthy !== false ? (\Phel::getDefinition("phel\\core", "dissoc"))($parents_map_1255, $child) : (\Phel::getDefinition("phel\\core", "assoc"))($parents_map_1255, $child, $new_parents_1257));
                  return \Phel::map(
                    \Phel::keyword("parents"), $new_map_1258
                  );
                }
              });
              return null;
            }
          },
          \Phel::map(
            \Phel::keyword("doc"), "```phel\n(underive child parent)\n```\nRemoves a parent/child relationship from the global hierarchy.",
            \Phel::keyword("example"), "(underive :square :shape)",
            \Phel::keyword("see-also"), \Phel::vector(["derive", "isa?", "parents", "ancestors", "descendants"]),
            \Phel::keyword("start-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3449,
              \Phel::keyword("column"), 0
            ),
            \Phel::keyword("end-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3463,
              \Phel::keyword("column"), 6
            ),
            "min-arity", 2,
            "is-variadic", false,
            "arglists", "[child parent]"
          )
        );
        \Phel::addDefinition(
          "phel\\core",
          "parents",
          new class() extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\core\\parents";

            public function __invoke($tag) {
              $p_1259 = (\Phel::getDefinition("phel\\core", "get"))((\Phel::getDefinition("phel\\core", "get"))((\Phel::getDefinition("phel\\core", "deref"))(\Phel::getDefinition("phel\\core", "*hierarchy*")), \Phel::keyword("parents")), $tag);
              if (($__truthy = (function() use($tag,$p_1259) {
                $__phel_1260_1261 = $p_1259;
                if (($__truthy = $__phel_1260_1261) !== null && $__truthy !== false) {
                  return (\Phel::getDefinition("phel\\core", "not"))((\Phel::getDefinition("phel\\core", "empty?"))($p_1259));
                } else {
                  return $__phel_1260_1261;
                }

              })()) !== null && $__truthy !== false) {
                return $p_1259;
              } else {
                return null;
              }

            }
          },
          \Phel::map(
            \Phel::keyword("doc"), "```phel\n(parents tag)\n```\nReturns the set of immediate parents of tag in the global hierarchy, or nil.",
            \Phel::keyword("see-also"), \Phel::vector(["ancestors", "descendants", "derive", "isa?"]),
            \Phel::keyword("start-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3465,
              \Phel::keyword("column"), 0
            ),
            \Phel::keyword("end-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3470,
              \Phel::keyword("column"), 39
            ),
            "min-arity", 1,
            "is-variadic", false,
            "arglists", "[tag]"
          )
        );
        \Phel::addDefinition(
          "phel\\core",
          "ancestors",
          new class() extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\core\\ancestors";

            public function __invoke($tag) {
              $a_1262 = (\Phel::getDefinition("phel\\core", "compute-ancestors"))((\Phel::getDefinition("phel\\core", "get"))((\Phel::getDefinition("phel\\core", "deref"))(\Phel::getDefinition("phel\\core", "*hierarchy*")), \Phel::keyword("parents")), $tag);
              if (($__truthy = (\Phel::getDefinition("phel\\core", "not"))((\Phel::getDefinition("phel\\core", "empty?"))($a_1262))) !== null && $__truthy !== false) {
                return $a_1262;
              } else {
                return null;
              }

            }
          },
          \Phel::map(
            \Phel::keyword("doc"), "```phel\n(ancestors tag)\n```\nReturns the set of all transitive ancestors of tag, or nil.",
            \Phel::keyword("see-also"), \Phel::vector(["parents", "descendants", "derive", "isa?"]),
            \Phel::keyword("start-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3472,
              \Phel::keyword("column"), 0
            ),
            \Phel::keyword("end-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3477,
              \Phel::keyword("column"), 31
            ),
            "min-arity", 1,
            "is-variadic", false,
            "arglists", "[tag]"
          )
        );
        \Phel::addDefinition(
          "phel\\core",
          "descendants",
          new class() extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\core\\descendants";

            public function __invoke($tag) {
              $parents_map_1263 = (\Phel::getDefinition("phel\\core", "get"))((\Phel::getDefinition("phel\\core", "deref"))(\Phel::getDefinition("phel\\core", "*hierarchy*")), \Phel::keyword("parents"));
              $all_children_1264 = (\Phel::getDefinition("phel\\core", "keys"))($parents_map_1263);
              $result_1265 = (\Phel::getDefinition("phel\\core", "reduce"))(new class($tag, $parents_map_1263, $all_children_1264) extends \Phel\Lang\AbstractFn {
                public const BOUND_TO = "phel\\core\\descendants.result";
                private $tag;
                private $parents_map_1263;
                private $all_children_1264;

                public function __construct($tag, $parents_map_1263, $all_children_1264) {
                  $this->tag = $tag;
                  $this->parents_map_1263 = $parents_map_1263;
                  $this->all_children_1264 = $all_children_1264;
                }

                public function __invoke($acc, $child) {
                  $tag = $this->tag;
                  $parents_map_1263 = $this->parents_map_1263;
                  $all_children_1264 = $this->all_children_1264;
                  if (($__truthy = (\Phel::getDefinition("phel\\core", "contains?"))((\Phel::getDefinition("phel\\core", "compute-ancestors"))($parents_map_1263, $child), $tag)) !== null && $__truthy !== false) {
                    return (\Phel::getDefinition("phel\\core", "union"))($acc, (\Phel::getDefinition("phel\\core", "hash-set"))($child));
                  } else {
                    return $acc;
                  }

                }
              }, (\Phel::getDefinition("phel\\core", "hash-set"))(), $all_children_1264);
              if (($__truthy = (\Phel::getDefinition("phel\\core", "not"))((\Phel::getDefinition("phel\\core", "empty?"))($result_1265))) !== null && $__truthy !== false) {
                return $result_1265;
              } else {
                return null;
              }

            }
          },
          \Phel::map(
            \Phel::keyword("doc"), "```phel\n(descendants tag)\n```\nReturns the set of all descendants of tag, or nil.",
            \Phel::keyword("see-also"), \Phel::vector(["parents", "ancestors", "derive", "isa?"]),
            \Phel::keyword("start-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3479,
              \Phel::keyword("column"), 0
            ),
            \Phel::keyword("end-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3492,
              \Phel::keyword("column"), 41
            ),
            "min-arity", 1,
            "is-variadic", false,
            "arglists", "[tag]"
          )
        );
        \Phel::addDefinition(
          "phel\\core",
          "find-hierarchy-method",
          new class() extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\core\\find_hierarchy_method";

            public function __invoke($methods, $dispatch_val) {
              $parents_map_1266 = (\Phel::getDefinition("phel\\core", "get"))((\Phel::getDefinition("phel\\core", "deref"))(\Phel::getDefinition("phel\\core", "*hierarchy*")), \Phel::keyword("parents"));
              $method_keys_1267 = (\Phel::getDefinition("phel\\core", "keys"))($methods);
              $candidates_1268 = (\Phel::getDefinition("phel\\core", "reduce"))(new class($methods, $dispatch_val, $parents_map_1266, $method_keys_1267) extends \Phel\Lang\AbstractFn {
                public const BOUND_TO = "phel\\core\\find_hierarchy_method.candidates";
                private $methods;
                private $dispatch_val;
                private $parents_map_1266;
                private $method_keys_1267;

                public function __construct($methods, $dispatch_val, $parents_map_1266, $method_keys_1267) {
                  $this->methods = $methods;
                  $this->dispatch_val = $dispatch_val;
                  $this->parents_map_1266 = $parents_map_1266;
                  $this->method_keys_1267 = $method_keys_1267;
                }

                public function __invoke($acc, $k) {
                  $methods = $this->methods;
                  $dispatch_val = $this->dispatch_val;
                  $parents_map_1266 = $this->parents_map_1266;
                  $method_keys_1267 = $this->method_keys_1267;
                  if (($__truthy = (function() use($methods,$dispatch_val,$parents_map_1266,$method_keys_1267,$acc,$k) {
                    $__phel_1269_1270 = (\Phel::getDefinition("phel\\core", "not="))($k, \Phel::keyword("default"));
                    if (($__truthy = $__phel_1269_1270) !== null && $__truthy !== false) {
                      $__phel_1271_1272 = (\Phel::getDefinition("phel\\core", "not="))($k, $dispatch_val);
                      if (($__truthy = $__phel_1271_1272) !== null && $__truthy !== false) {
                        return (\Phel::getDefinition("phel\\core", "isa-in?"))($parents_map_1266, $dispatch_val, $k);
                      } else {
                        return $__phel_1271_1272;
                      }

                    } else {
                      return $__phel_1269_1270;
                    }

                  })()) !== null && $__truthy !== false) {
                    return (\Phel::getDefinition("phel\\core", "conj"))($acc, $k);
                  } else {
                    return $acc;
                  }

                }
              }, \Phel::vector([]), $method_keys_1267);
              if (($__truthy = (\Phel::getDefinition("phel\\core", "not"))((\Phel::getDefinition("phel\\core", "empty?"))($candidates_1268))) !== null && $__truthy !== false) {
                if (($__truthy = (\Phel::getDefinition("phel\\core", "="))(1, (\Phel::getDefinition("phel\\core", "count"))($candidates_1268))) !== null && $__truthy !== false) {
                  return (\Phel::getDefinition("phel\\core", "get"))($methods, (\Phel::getDefinition("phel\\core", "first"))($candidates_1268));
                } else {
                  $best_1273 = (\Phel::getDefinition("phel\\core", "reduce"))(new class($methods, $dispatch_val, $parents_map_1266, $method_keys_1267, $candidates_1268) extends \Phel\Lang\AbstractFn {
                    public const BOUND_TO = "phel\\core\\find_hierarchy_method.best";
                    private $methods;
                    private $dispatch_val;
                    private $parents_map_1266;
                    private $method_keys_1267;
                    private $candidates_1268;

                    public function __construct($methods, $dispatch_val, $parents_map_1266, $method_keys_1267, $candidates_1268) {
                      $this->methods = $methods;
                      $this->dispatch_val = $dispatch_val;
                      $this->parents_map_1266 = $parents_map_1266;
                      $this->method_keys_1267 = $method_keys_1267;
                      $this->candidates_1268 = $candidates_1268;
                    }

                    public function __invoke($best, $k) {
                      $methods = $this->methods;
                      $dispatch_val = $this->dispatch_val;
                      $parents_map_1266 = $this->parents_map_1266;
                      $method_keys_1267 = $this->method_keys_1267;
                      $candidates_1268 = $this->candidates_1268;
                      if (($__truthy = (\Phel::getDefinition("phel\\core", "isa-in?"))($parents_map_1266, $k, $best)) !== null && $__truthy !== false) {
                        return $k;
                      } else {
                        return $best;
                      }

                    }
                  }, (\Phel::getDefinition("phel\\core", "first"))($candidates_1268), (\Phel::getDefinition("phel\\core", "rest"))($candidates_1268));
                  return (\Phel::getDefinition("phel\\core", "get"))($methods, $best_1273);
                }

              } else {
                return null;
              }

            }
          },
          \Phel::map(
            \Phel::keyword("doc"), "```phel\n(find-hierarchy-method methods dispatch-val)\n```\nFinds the best matching method for dispatch-val using the global hierarchy.\n  Returns the method function or nil. Used internally by defmulti.",
            \Phel::keyword("start-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3494,
              \Phel::keyword("column"), 0
            ),
            \Phel::keyword("end-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3519,
              \Phel::keyword("column"), 33
            ),
            "min-arity", 2,
            "is-variadic", false,
            "arglists", "[methods dispatch-val]"
          )
        );
        \Phel::addDefinition(
          "phel\\core",
          "protocol-type-key",
          new class() extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\core\\protocol_type_key";

            public function __invoke($x) {
              if (($__truthy = is_null($x)) !== null && $__truthy !== false) {
                return \Phel::keyword("nil");
              } else {
                if (($__truthy = is_string($x)) !== null && $__truthy !== false) {
                  return \Phel::keyword("string");
                } else {
                  if (($__truthy = is_int($x)) !== null && $__truthy !== false) {
                    return \Phel::keyword("int");
                  } else {
                    if (($__truthy = is_float($x)) !== null && $__truthy !== false) {
                      return \Phel::keyword("float");
                    } else {
                      if (($__truthy = is_bool($x)) !== null && $__truthy !== false) {
                        return \Phel::keyword("boolean");
                      } else {
                        if (($__truthy = is_array($x)) !== null && $__truthy !== false) {
                          return \Phel::keyword("array", "php");
                        } else {
                          if (($__truthy = is_object($x)) !== null && $__truthy !== false) {
                            $t_1274 = (\Phel::getDefinition("phel\\core", "type"))($x);
                            if (($__truthy = (function() use($x,$t_1274) {
                              $__phel_1275_1276 = (\Phel::getDefinition("phel\\core", "="))($t_1274, \Phel::keyword("struct"));
                              if (($__truthy = $__phel_1275_1276) !== null && $__truthy !== false) {
                                return $__phel_1275_1276;
                              } else {
                                return (\Phel::getDefinition("phel\\core", "="))($t_1274, \Phel::keyword("object", "php"));
                              }

                            })()) !== null && $__truthy !== false) {
                              return get_class($x);
                            } else {
                              return $t_1274;
                            }

                          } else {
                            return \Phel::keyword("unknown");
                          }

                        }

                      }

                    }

                  }

                }

              }

            }
          },
          \Phel::map(
            \Phel::keyword("doc"), "```phel\n(protocol-type-key x)\n```\nReturns the dispatch key for protocol dispatch. Returns a type keyword\n  for primitive types, or the PHP class name string for objects/structs.\n\n  Optimized to avoid the full `type` cond chain: checks scalars first\n  (most common in tight loops), then objects.",
            \Phel::keyword("see-also"), \Phel::vector(["defprotocol", "extend-type", "satisfies?"]),
            \Phel::keyword("start-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3525,
              \Phel::keyword("column"), 0
            ),
            \Phel::keyword("end-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3544,
              \Phel::keyword("column"), 14
            ),
            "min-arity", 1,
            "is-variadic", false,
            "arglists", "[x]"
          )
        );
        \Phel::addDefinition(
          "phel\\core",
          "defprotocol",
          new class() extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\core\\defprotocol";

            public function __invoke($protocol_name, ...$method_specs) {
              $method_specs = \Phel::vector($method_specs);
              $pname_str_1277 = (function() use($protocol_name,$method_specs) {
                $target_1372 = $protocol_name;
                return $target_1372->getName();
              })();
              $methods_1278 = (function() use($protocol_name,$method_specs,$pname_str_1277) {
                $__phel_1279_1282 = (\Phel::getDefinition("phel\\core", "var"))(\Phel::vector([]));
                foreach (\Phel\Lang\Seq::toIterable($method_specs) as $__phel_1281) {
                  $spec_1283 = $__phel_1281;
                  $mname_1284 = (\Phel::getDefinition("phel\\core", "first"))($spec_1283);
                  $mname_str_1285 = (function() use($protocol_name,$method_specs,$pname_str_1277,$__phel_1279_1282,$__phel_1281,$spec_1283,$mname_1284) {
                    $target_1373 = $mname_1284;
                    return $target_1373->getName();
                  })();
                  $margs_1286 = (\Phel::getDefinition("phel\\core", "second"))($spec_1283);
                  $dsym_1287 = (\Phel\Lang\Symbol::create(($pname_str_1277 . "--" . $mname_str_1285 . "--dispatch")));
                  (\Phel::getDefinition("phel\\core", "swap!"))($__phel_1279_1282, new class($protocol_name, $method_specs, $pname_str_1277, $__phel_1279_1282, $__phel_1281, $spec_1283, $mname_1284, $mname_str_1285, $margs_1286, $dsym_1287) extends \Phel\Lang\AbstractFn {
                    public const BOUND_TO = "phel\\core\\defprotocol.methods";
                    private $protocol_name;
                    private $method_specs;
                    private $pname_str_1277;
                    private $__phel_1279_1282;
                    private $__phel_1281;
                    private $spec_1283;
                    private $mname_1284;
                    private $mname_str_1285;
                    private $margs_1286;
                    private $dsym_1287;

                    public function __construct($protocol_name, $method_specs, $pname_str_1277, $__phel_1279_1282, $__phel_1281, $spec_1283, $mname_1284, $mname_str_1285, $margs_1286, $dsym_1287) {
                      $this->protocol_name = $protocol_name;
                      $this->method_specs = $method_specs;
                      $this->pname_str_1277 = $pname_str_1277;
                      $this->__phel_1279_1282 = $__phel_1279_1282;
                      $this->__phel_1281 = $__phel_1281;
                      $this->spec_1283 = $spec_1283;
                      $this->mname_1284 = $mname_1284;
                      $this->mname_str_1285 = $mname_str_1285;
                      $this->margs_1286 = $margs_1286;
                      $this->dsym_1287 = $dsym_1287;
                    }

                    public function __invoke($__phel_1280) {
                      $protocol_name = $this->protocol_name;
                      $method_specs = $this->method_specs;
                      $pname_str_1277 = $this->pname_str_1277;
                      $__phel_1279_1282 = $this->__phel_1279_1282;
                      $__phel_1281 = $this->__phel_1281;
                      $spec_1283 = $this->spec_1283;
                      $mname_1284 = $this->mname_1284;
                      $mname_str_1285 = $this->mname_str_1285;
                      $margs_1286 = $this->margs_1286;
                      $dsym_1287 = $this->dsym_1287;
                      return (\Phel::getDefinition("phel\\core", "conj"))($__phel_1280, \Phel::vector([$mname_1284, $mname_str_1285, $margs_1286, $dsym_1287]));
                    }
                  });
                }
                return (\Phel::getDefinition("phel\\core", "deref"))($__phel_1279_1282);
              })();
              return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("do"))), (function() use($protocol_name,$method_specs,$pname_str_1277,$methods_1278) {
                $__phel_1288_1291 = (\Phel::getDefinition("phel\\core", "var"))(\Phel::vector([]));
                foreach (\Phel\Lang\Seq::toIterable($methods_1278) as $__phel_1290) {
                  $__phel_1292_1304 = $__phel_1290;
                  $__phel_1293_1305 = (\Phel::getDefinition("phel\\core", "first"))($__phel_1292_1304);
                  $__phel_1294_1306 = (\Phel::getDefinition("phel\\core", "next"))($__phel_1292_1304);
                  $__phel_1295_1307 = $__phel_1293_1305;
                  $__phel_1296_1308 = (\Phel::getDefinition("phel\\core", "first"))($__phel_1294_1306);
                  $__phel_1297_1309 = (\Phel::getDefinition("phel\\core", "next"))($__phel_1294_1306);
                  $__phel_1298_1310 = $__phel_1296_1308;
                  $__phel_1299_1311 = (\Phel::getDefinition("phel\\core", "first"))($__phel_1297_1309);
                  $__phel_1300_1312 = (\Phel::getDefinition("phel\\core", "next"))($__phel_1297_1309);
                  $__phel_1301_1313 = $__phel_1299_1311;
                  $__phel_1302_1314 = (\Phel::getDefinition("phel\\core", "first"))($__phel_1300_1312);
                  $__phel_1303_1315 = (\Phel::getDefinition("phel\\core", "next"))($__phel_1300_1312);
                  $dsym_1316 = $__phel_1302_1314;
                  (\Phel::getDefinition("phel\\core", "swap!"))($__phel_1288_1291, new class($protocol_name, $method_specs, $pname_str_1277, $methods_1278, $__phel_1288_1291, $__phel_1290, $__phel_1292_1304, $__phel_1293_1305, $__phel_1294_1306, $__phel_1295_1307, $__phel_1296_1308, $__phel_1297_1309, $__phel_1298_1310, $__phel_1299_1311, $__phel_1300_1312, $__phel_1301_1313, $__phel_1302_1314, $__phel_1303_1315, $dsym_1316) extends \Phel\Lang\AbstractFn {
                    public const BOUND_TO = "phel\\core\\defprotocol";
                    private $protocol_name;
                    private $method_specs;
                    private $pname_str_1277;
                    private $methods_1278;
                    private $__phel_1288_1291;
                    private $__phel_1290;
                    private $__phel_1292_1304;
                    private $__phel_1293_1305;
                    private $__phel_1294_1306;
                    private $__phel_1295_1307;
                    private $__phel_1296_1308;
                    private $__phel_1297_1309;
                    private $__phel_1298_1310;
                    private $__phel_1299_1311;
                    private $__phel_1300_1312;
                    private $__phel_1301_1313;
                    private $__phel_1302_1314;
                    private $__phel_1303_1315;
                    private $dsym_1316;

                    public function __construct($protocol_name, $method_specs, $pname_str_1277, $methods_1278, $__phel_1288_1291, $__phel_1290, $__phel_1292_1304, $__phel_1293_1305, $__phel_1294_1306, $__phel_1295_1307, $__phel_1296_1308, $__phel_1297_1309, $__phel_1298_1310, $__phel_1299_1311, $__phel_1300_1312, $__phel_1301_1313, $__phel_1302_1314, $__phel_1303_1315, $dsym_1316) {
                      $this->protocol_name = $protocol_name;
                      $this->method_specs = $method_specs;
                      $this->pname_str_1277 = $pname_str_1277;
                      $this->methods_1278 = $methods_1278;
                      $this->__phel_1288_1291 = $__phel_1288_1291;
                      $this->__phel_1290 = $__phel_1290;
                      $this->__phel_1292_1304 = $__phel_1292_1304;
                      $this->__phel_1293_1305 = $__phel_1293_1305;
                      $this->__phel_1294_1306 = $__phel_1294_1306;
                      $this->__phel_1295_1307 = $__phel_1295_1307;
                      $this->__phel_1296_1308 = $__phel_1296_1308;
                      $this->__phel_1297_1309 = $__phel_1297_1309;
                      $this->__phel_1298_1310 = $__phel_1298_1310;
                      $this->__phel_1299_1311 = $__phel_1299_1311;
                      $this->__phel_1300_1312 = $__phel_1300_1312;
                      $this->__phel_1301_1313 = $__phel_1301_1313;
                      $this->__phel_1302_1314 = $__phel_1302_1314;
                      $this->__phel_1303_1315 = $__phel_1303_1315;
                      $this->dsym_1316 = $dsym_1316;
                    }

                    public function __invoke($__phel_1289) {
                      $protocol_name = $this->protocol_name;
                      $method_specs = $this->method_specs;
                      $pname_str_1277 = $this->pname_str_1277;
                      $methods_1278 = $this->methods_1278;
                      $__phel_1288_1291 = $this->__phel_1288_1291;
                      $__phel_1290 = $this->__phel_1290;
                      $__phel_1292_1304 = $this->__phel_1292_1304;
                      $__phel_1293_1305 = $this->__phel_1293_1305;
                      $__phel_1294_1306 = $this->__phel_1294_1306;
                      $__phel_1295_1307 = $this->__phel_1295_1307;
                      $__phel_1296_1308 = $this->__phel_1296_1308;
                      $__phel_1297_1309 = $this->__phel_1297_1309;
                      $__phel_1298_1310 = $this->__phel_1298_1310;
                      $__phel_1299_1311 = $this->__phel_1299_1311;
                      $__phel_1300_1312 = $this->__phel_1300_1312;
                      $__phel_1301_1313 = $this->__phel_1301_1313;
                      $__phel_1302_1314 = $this->__phel_1302_1314;
                      $__phel_1303_1315 = $this->__phel_1303_1315;
                      $dsym_1316 = $this->dsym_1316;
                      return (\Phel::getDefinition("phel\\core", "conj"))($__phel_1289, (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("def"))), (\Phel::getDefinition("phel\\core", "list"))($dsym_1316), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "hash-map"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))(\Phel::keyword("private")), (\Phel::getDefinition("phel\\core", "list"))(true))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/var"))), (\Phel::getDefinition("phel\\core", "list"))(\Phel::map()))) ?? []))))) ?? [])));
                    }
                  });
                }
                return (\Phel::getDefinition("phel\\core", "deref"))($__phel_1288_1291);
              })(), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("def"))), (\Phel::getDefinition("phel\\core", "list"))($protocol_name), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "hash-map"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))(\Phel::keyword("name")), (\Phel::getDefinition("phel\\core", "list"))($pname_str_1277), (\Phel::getDefinition("phel\\core", "list"))(\Phel::keyword("dispatch")), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "vector"))(...(((\Phel::getDefinition("phel\\core", "concat"))((function() use($protocol_name,$method_specs,$pname_str_1277,$methods_1278) {
                $__phel_1317_1320 = (\Phel::getDefinition("phel\\core", "var"))(\Phel::vector([]));
                foreach (\Phel\Lang\Seq::toIterable($methods_1278) as $__phel_1319) {
                  $__phel_1321_1333 = $__phel_1319;
                  $__phel_1322_1334 = (\Phel::getDefinition("phel\\core", "first"))($__phel_1321_1333);
                  $__phel_1323_1335 = (\Phel::getDefinition("phel\\core", "next"))($__phel_1321_1333);
                  $__phel_1324_1336 = $__phel_1322_1334;
                  $__phel_1325_1337 = (\Phel::getDefinition("phel\\core", "first"))($__phel_1323_1335);
                  $__phel_1326_1338 = (\Phel::getDefinition("phel\\core", "next"))($__phel_1323_1335);
                  $__phel_1327_1339 = $__phel_1325_1337;
                  $__phel_1328_1340 = (\Phel::getDefinition("phel\\core", "first"))($__phel_1326_1338);
                  $__phel_1329_1341 = (\Phel::getDefinition("phel\\core", "next"))($__phel_1326_1338);
                  $__phel_1330_1342 = $__phel_1328_1340;
                  $__phel_1331_1343 = (\Phel::getDefinition("phel\\core", "first"))($__phel_1329_1341);
                  $__phel_1332_1344 = (\Phel::getDefinition("phel\\core", "next"))($__phel_1329_1341);
                  $dsym_1345 = $__phel_1331_1343;
                  (\Phel::getDefinition("phel\\core", "swap!"))($__phel_1317_1320, new class($protocol_name, $method_specs, $pname_str_1277, $methods_1278, $__phel_1317_1320, $__phel_1319, $__phel_1321_1333, $__phel_1322_1334, $__phel_1323_1335, $__phel_1324_1336, $__phel_1325_1337, $__phel_1326_1338, $__phel_1327_1339, $__phel_1328_1340, $__phel_1329_1341, $__phel_1330_1342, $__phel_1331_1343, $__phel_1332_1344, $dsym_1345) extends \Phel\Lang\AbstractFn {
                    public const BOUND_TO = "phel\\core\\defprotocol";
                    private $protocol_name;
                    private $method_specs;
                    private $pname_str_1277;
                    private $methods_1278;
                    private $__phel_1317_1320;
                    private $__phel_1319;
                    private $__phel_1321_1333;
                    private $__phel_1322_1334;
                    private $__phel_1323_1335;
                    private $__phel_1324_1336;
                    private $__phel_1325_1337;
                    private $__phel_1326_1338;
                    private $__phel_1327_1339;
                    private $__phel_1328_1340;
                    private $__phel_1329_1341;
                    private $__phel_1330_1342;
                    private $__phel_1331_1343;
                    private $__phel_1332_1344;
                    private $dsym_1345;

                    public function __construct($protocol_name, $method_specs, $pname_str_1277, $methods_1278, $__phel_1317_1320, $__phel_1319, $__phel_1321_1333, $__phel_1322_1334, $__phel_1323_1335, $__phel_1324_1336, $__phel_1325_1337, $__phel_1326_1338, $__phel_1327_1339, $__phel_1328_1340, $__phel_1329_1341, $__phel_1330_1342, $__phel_1331_1343, $__phel_1332_1344, $dsym_1345) {
                      $this->protocol_name = $protocol_name;
                      $this->method_specs = $method_specs;
                      $this->pname_str_1277 = $pname_str_1277;
                      $this->methods_1278 = $methods_1278;
                      $this->__phel_1317_1320 = $__phel_1317_1320;
                      $this->__phel_1319 = $__phel_1319;
                      $this->__phel_1321_1333 = $__phel_1321_1333;
                      $this->__phel_1322_1334 = $__phel_1322_1334;
                      $this->__phel_1323_1335 = $__phel_1323_1335;
                      $this->__phel_1324_1336 = $__phel_1324_1336;
                      $this->__phel_1325_1337 = $__phel_1325_1337;
                      $this->__phel_1326_1338 = $__phel_1326_1338;
                      $this->__phel_1327_1339 = $__phel_1327_1339;
                      $this->__phel_1328_1340 = $__phel_1328_1340;
                      $this->__phel_1329_1341 = $__phel_1329_1341;
                      $this->__phel_1330_1342 = $__phel_1330_1342;
                      $this->__phel_1331_1343 = $__phel_1331_1343;
                      $this->__phel_1332_1344 = $__phel_1332_1344;
                      $this->dsym_1345 = $dsym_1345;
                    }

                    public function __invoke($__phel_1318) {
                      $protocol_name = $this->protocol_name;
                      $method_specs = $this->method_specs;
                      $pname_str_1277 = $this->pname_str_1277;
                      $methods_1278 = $this->methods_1278;
                      $__phel_1317_1320 = $this->__phel_1317_1320;
                      $__phel_1319 = $this->__phel_1319;
                      $__phel_1321_1333 = $this->__phel_1321_1333;
                      $__phel_1322_1334 = $this->__phel_1322_1334;
                      $__phel_1323_1335 = $this->__phel_1323_1335;
                      $__phel_1324_1336 = $this->__phel_1324_1336;
                      $__phel_1325_1337 = $this->__phel_1325_1337;
                      $__phel_1326_1338 = $this->__phel_1326_1338;
                      $__phel_1327_1339 = $this->__phel_1327_1339;
                      $__phel_1328_1340 = $this->__phel_1328_1340;
                      $__phel_1329_1341 = $this->__phel_1329_1341;
                      $__phel_1330_1342 = $this->__phel_1330_1342;
                      $__phel_1331_1343 = $this->__phel_1331_1343;
                      $__phel_1332_1344 = $this->__phel_1332_1344;
                      $dsym_1345 = $this->dsym_1345;
                      return (\Phel::getDefinition("phel\\core", "conj"))($__phel_1318, $dsym_1345);
                    }
                  });
                }
                return (\Phel::getDefinition("phel\\core", "deref"))($__phel_1317_1320);
              })())) ?? []))))) ?? []))))) ?? []))), (function() use($protocol_name,$method_specs,$pname_str_1277,$methods_1278) {
                $__phel_1346_1349 = (\Phel::getDefinition("phel\\core", "var"))(\Phel::vector([]));
                foreach (\Phel\Lang\Seq::toIterable($methods_1278) as $__phel_1348) {
                  $__phel_1350_1359 = $__phel_1348;
                  $__phel_1351_1360 = (\Phel::getDefinition("phel\\core", "first"))($__phel_1350_1359);
                  $__phel_1352_1361 = (\Phel::getDefinition("phel\\core", "next"))($__phel_1350_1359);
                  $mname_1362 = $__phel_1351_1360;
                  $__phel_1353_1363 = (\Phel::getDefinition("phel\\core", "first"))($__phel_1352_1361);
                  $__phel_1354_1364 = (\Phel::getDefinition("phel\\core", "next"))($__phel_1352_1361);
                  $mname_str_1365 = $__phel_1353_1363;
                  $__phel_1355_1366 = (\Phel::getDefinition("phel\\core", "first"))($__phel_1354_1364);
                  $__phel_1356_1367 = (\Phel::getDefinition("phel\\core", "next"))($__phel_1354_1364);
                  $margs_1368 = $__phel_1355_1366;
                  $__phel_1357_1369 = (\Phel::getDefinition("phel\\core", "first"))($__phel_1356_1367);
                  $__phel_1358_1370 = (\Phel::getDefinition("phel\\core", "next"))($__phel_1356_1367);
                  $dsym_1371 = $__phel_1357_1369;
                  (\Phel::getDefinition("phel\\core", "swap!"))($__phel_1346_1349, new class($protocol_name, $method_specs, $pname_str_1277, $methods_1278, $__phel_1346_1349, $__phel_1348, $__phel_1350_1359, $__phel_1351_1360, $__phel_1352_1361, $mname_1362, $__phel_1353_1363, $__phel_1354_1364, $mname_str_1365, $__phel_1355_1366, $__phel_1356_1367, $margs_1368, $__phel_1357_1369, $__phel_1358_1370, $dsym_1371) extends \Phel\Lang\AbstractFn {
                    public const BOUND_TO = "phel\\core\\defprotocol";
                    private $protocol_name;
                    private $method_specs;
                    private $pname_str_1277;
                    private $methods_1278;
                    private $__phel_1346_1349;
                    private $__phel_1348;
                    private $__phel_1350_1359;
                    private $__phel_1351_1360;
                    private $__phel_1352_1361;
                    private $mname_1362;
                    private $__phel_1353_1363;
                    private $__phel_1354_1364;
                    private $mname_str_1365;
                    private $__phel_1355_1366;
                    private $__phel_1356_1367;
                    private $margs_1368;
                    private $__phel_1357_1369;
                    private $__phel_1358_1370;
                    private $dsym_1371;

                    public function __construct($protocol_name, $method_specs, $pname_str_1277, $methods_1278, $__phel_1346_1349, $__phel_1348, $__phel_1350_1359, $__phel_1351_1360, $__phel_1352_1361, $mname_1362, $__phel_1353_1363, $__phel_1354_1364, $mname_str_1365, $__phel_1355_1366, $__phel_1356_1367, $margs_1368, $__phel_1357_1369, $__phel_1358_1370, $dsym_1371) {
                      $this->protocol_name = $protocol_name;
                      $this->method_specs = $method_specs;
                      $this->pname_str_1277 = $pname_str_1277;
                      $this->methods_1278 = $methods_1278;
                      $this->__phel_1346_1349 = $__phel_1346_1349;
                      $this->__phel_1348 = $__phel_1348;
                      $this->__phel_1350_1359 = $__phel_1350_1359;
                      $this->__phel_1351_1360 = $__phel_1351_1360;
                      $this->__phel_1352_1361 = $__phel_1352_1361;
                      $this->mname_1362 = $mname_1362;
                      $this->__phel_1353_1363 = $__phel_1353_1363;
                      $this->__phel_1354_1364 = $__phel_1354_1364;
                      $this->mname_str_1365 = $mname_str_1365;
                      $this->__phel_1355_1366 = $__phel_1355_1366;
                      $this->__phel_1356_1367 = $__phel_1356_1367;
                      $this->margs_1368 = $margs_1368;
                      $this->__phel_1357_1369 = $__phel_1357_1369;
                      $this->__phel_1358_1370 = $__phel_1358_1370;
                      $this->dsym_1371 = $dsym_1371;
                    }

                    public function __invoke($__phel_1347) {
                      $protocol_name = $this->protocol_name;
                      $method_specs = $this->method_specs;
                      $pname_str_1277 = $this->pname_str_1277;
                      $methods_1278 = $this->methods_1278;
                      $__phel_1346_1349 = $this->__phel_1346_1349;
                      $__phel_1348 = $this->__phel_1348;
                      $__phel_1350_1359 = $this->__phel_1350_1359;
                      $__phel_1351_1360 = $this->__phel_1351_1360;
                      $__phel_1352_1361 = $this->__phel_1352_1361;
                      $mname_1362 = $this->mname_1362;
                      $__phel_1353_1363 = $this->__phel_1353_1363;
                      $__phel_1354_1364 = $this->__phel_1354_1364;
                      $mname_str_1365 = $this->mname_str_1365;
                      $__phel_1355_1366 = $this->__phel_1355_1366;
                      $__phel_1356_1367 = $this->__phel_1356_1367;
                      $margs_1368 = $this->margs_1368;
                      $__phel_1357_1369 = $this->__phel_1357_1369;
                      $__phel_1358_1370 = $this->__phel_1358_1370;
                      $dsym_1371 = $this->dsym_1371;
                      return (\Phel::getDefinition("phel\\core", "conj"))($__phel_1347, (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/defn"))), (\Phel::getDefinition("phel\\core", "list"))($mname_1362), (\Phel::getDefinition("phel\\core", "list"))($margs_1368), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("let"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "vector"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("dk"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/protocol-type-key"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "first"))($margs_1368)))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("dispatch-table"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/deref"))), (\Phel::getDefinition("phel\\core", "list"))($dsym_1371))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("impl"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/get"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("dispatch-table"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("dk"))))) ?? []))))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("if"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("impl"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("impl"))), $margs_1368)) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("let"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "vector"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("default-impl"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/get"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("dispatch-table"))), (\Phel::getDefinition("phel\\core", "list"))(\Phel::keyword("default")))) ?? []))))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("if"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("default-impl"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("default-impl"))), $margs_1368)) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("throw"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("php/new"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("\\InvalidArgumentException"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/str"))), (\Phel::getDefinition("phel\\core", "list"))("No implementation of '"), (\Phel::getDefinition("phel\\core", "list"))($mname_str_1365), (\Phel::getDefinition("phel\\core", "list"))("' for type: "), (\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("dk"))))) ?? []))))) ?? []))))) ?? []))))) ?? []))))) ?? []))))) ?? []))))) ?? []))))) ?? [])));
                    }
                  });
                }
                return (\Phel::getDefinition("phel\\core", "deref"))($__phel_1346_1349);
              })())) ?? []));
            }
          },
          \Phel::map(
            \Phel::keyword("macro"), true,
            \Phel::keyword("doc"), "```phel\n(defprotocol protocol-name & method-specs)\n```\nDefines a protocol with the given method signatures. Each method signature\n  is a list of (method-name [args]).\n\n  Creates a dispatching function for each method that dispatches on the type\n  of the first argument. Use `extend-type` to add implementations.\n\n  A `:default` type can be registered via `extend-type` as a fallback when\n  no specific type implementation is found.",
            \Phel::keyword("example"), "(defprotocol Stringable (to-string [this]))",
            \Phel::keyword("see-also"), \Phel::vector(["extend-type", "satisfies?", "extends?", "protocol-type-key"]),
            \Phel::keyword("start-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3546,
              \Phel::keyword("column"), 0
            ),
            \Phel::keyword("end-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3584,
              \Phel::keyword("column"), 72
            ),
            "min-arity", 1,
            "is-variadic", true,
            "arglists", "[protocol-name & method-specs]"
          )
        );
        \Phel::addDefinition(
          "phel\\core",
          "extend-type",
          new class() extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\core\\extend_type";

            public function __invoke($type_spec, ...$specs) {
              $specs = \Phel::vector($specs);
              if (($__truthy = (function() use($type_spec,$specs) {
                $__phel_1376_1377 = (\Phel::getDefinition("phel\\core", "keyword?"))($type_spec);
                if (($__truthy = $__phel_1376_1377) !== null && $__truthy !== false) {
                  $__phel_1378_1379 = (\Phel::getDefinition("phel\\core", "="))($type_spec, \Phel::keyword("struct"));
                  if (($__truthy = $__phel_1378_1379) !== null && $__truthy !== false) {
                    return $__phel_1378_1379;
                  } else {
                    return (\Phel::getDefinition("phel\\core", "="))($type_spec, \Phel::keyword("object", "php"));
                  }

                } else {
                  return $__phel_1376_1377;
                }

              })()) !== null && $__truthy !== false) {
                throw (new \InvalidArgumentException((\Phel::getDefinition("phel\\core", "str"))("Cannot use ", $type_spec, " as extend-type target. ", "Protocol dispatch resolves structs/objects to their PHP class name. ", "Use a struct symbol or PHP class name string instead.")));
              } else {

              }

              $type_key_1380 = (($__truthy = (\Phel::getDefinition("phel\\core", "nil?"))($type_spec)) !== null && $__truthy !== false ? \Phel::keyword("nil") : (($__truthy = (\Phel::getDefinition("phel\\core", "keyword?"))($type_spec)) !== null && $__truthy !== false ? $type_spec : (($__truthy = is_string($type_spec)) !== null && $__truthy !== false ? $type_spec : (($__truthy = ($type_spec instanceof \Phel\Lang\Symbol)) !== null && $__truthy !== false ? (function() use($type_spec,$specs) {
                $munge_1381 = (new \Phel\Compiler\Application\Munge());
                $name_str_1382 = (function() use($type_spec,$specs,$munge_1381) {
                  $target_1398 = $type_spec;
                  return $target_1398->getName();
                })();
                return ((function() use($type_spec,$specs,$munge_1381,$name_str_1382) {
                  $target_1399 = $munge_1381;
                  return $target_1399->encodeNs(\Phel::getDefinition("phel\\core", "*ns*"));
                })() . "\\" . (function() use($type_spec,$specs,$munge_1381,$name_str_1382) {
                  $target_1400 = $munge_1381;
                  return $target_1400->encode($name_str_1382);
                })());
              })() : null))));
              $groups_1383 = (function() use($type_spec,$specs,$type_key_1380) {
                $remaining_1384 = $specs;
                $current_proto_1385 = null;
                $current_methods_1386 = \Phel::vector([]);
                $result_1387 = \Phel::vector([]);
                while (true) {
                  if (($__truthy = (\Phel::getDefinition("phel\\core", "nil?"))($remaining_1384)) !== null && $__truthy !== false) {
                    if (($__truthy = $current_proto_1385) !== null && $__truthy !== false) {
                      return (\Phel::getDefinition("phel\\core", "conj"))($result_1387, \Phel::vector([$current_proto_1385, $current_methods_1386]));
                    } else {
                      return $result_1387;
                    }

                  } else {
                    $item_1388 = (\Phel::getDefinition("phel\\core", "first"))($remaining_1384);
                    $rst_1389 = (\Phel::getDefinition("phel\\core", "next"))($remaining_1384);
                    if (($__truthy = ($item_1388 instanceof \Phel\Lang\Symbol)) !== null && $__truthy !== false) {
                      $__phel_1401 = $rst_1389;
                      $__phel_1402 = $item_1388;
                      $__phel_1403 = \Phel::vector([]);
                      $__phel_1404 = (($__truthy = $current_proto_1385) !== null && $__truthy !== false ? (\Phel::getDefinition("phel\\core", "conj"))($result_1387, \Phel::vector([$current_proto_1385, $current_methods_1386])) : $result_1387);
                      $remaining_1384 = $__phel_1401;
                      $current_proto_1385 = $__phel_1402;
                      $current_methods_1386 = $__phel_1403;
                      $result_1387 = $__phel_1404;
                      continue;

                    } else {
                      $__phel_1405 = $rst_1389;
                      $__phel_1406 = $current_proto_1385;
                      $__phel_1407 = (\Phel::getDefinition("phel\\core", "conj"))($current_methods_1386, $item_1388);
                      $__phel_1408 = $result_1387;
                      $remaining_1384 = $__phel_1405;
                      $current_proto_1385 = $__phel_1406;
                      $current_methods_1386 = $__phel_1407;
                      $result_1387 = $__phel_1408;
                      continue;

                    }

                  }
                  break;
                }
              })();
              $swaps_1390 = (\Phel::getDefinition("phel\\core", "reduce"))(new class($type_spec, $specs, $type_key_1380, $groups_1383) extends \Phel\Lang\AbstractFn {
                public const BOUND_TO = "phel\\core\\extend_type.swaps";
                private $type_spec;
                private $specs;
                private $type_key_1380;
                private $groups_1383;

                public function __construct($type_spec, $specs, $type_key_1380, $groups_1383) {
                  $this->type_spec = $type_spec;
                  $this->specs = $specs;
                  $this->type_key_1380 = $type_key_1380;
                  $this->groups_1383 = $groups_1383;
                }

                public function __invoke($acc, $group) {
                  $type_spec = $this->type_spec;
                  $specs = $this->specs;
                  $type_key_1380 = $this->type_key_1380;
                  $groups_1383 = $this->groups_1383;
                  $proto_name_1391 = (\Phel::getDefinition("phel\\core", "first"))($group);
                  $methods_1392 = (\Phel::getDefinition("phel\\core", "second"))($group);
                  $proto_str_1393 = (function() use($type_spec,$specs,$type_key_1380,$groups_1383,$acc,$group,$proto_name_1391,$methods_1392) {
                    $target_1409 = $proto_name_1391;
                    return $target_1409->getName();
                  })();
                  return (\Phel::getDefinition("phel\\core", "reduce"))(new class($type_spec, $specs, $type_key_1380, $groups_1383, $acc, $group, $proto_name_1391, $methods_1392, $proto_str_1393) extends \Phel\Lang\AbstractFn {
                    public const BOUND_TO = "phel\\core\\extend_type.swaps";
                    private $type_spec;
                    private $specs;
                    private $type_key_1380;
                    private $groups_1383;
                    private $acc;
                    private $group;
                    private $proto_name_1391;
                    private $methods_1392;
                    private $proto_str_1393;

                    public function __construct($type_spec, $specs, $type_key_1380, $groups_1383, $acc, $group, $proto_name_1391, $methods_1392, $proto_str_1393) {
                      $this->type_spec = $type_spec;
                      $this->specs = $specs;
                      $this->type_key_1380 = $type_key_1380;
                      $this->groups_1383 = $groups_1383;
                      $this->acc = $acc;
                      $this->group = $group;
                      $this->proto_name_1391 = $proto_name_1391;
                      $this->methods_1392 = $methods_1392;
                      $this->proto_str_1393 = $proto_str_1393;
                    }

                    public function __invoke($inner, $method) {
                      $type_spec = $this->type_spec;
                      $specs = $this->specs;
                      $type_key_1380 = $this->type_key_1380;
                      $groups_1383 = $this->groups_1383;
                      $acc = $this->acc;
                      $group = $this->group;
                      $proto_name_1391 = $this->proto_name_1391;
                      $methods_1392 = $this->methods_1392;
                      $proto_str_1393 = $this->proto_str_1393;
                      $mname_str_1394 = (function() use($type_spec,$specs,$type_key_1380,$groups_1383,$acc,$group,$proto_name_1391,$methods_1392,$proto_str_1393,$inner,$method) {
                        $target_1410 = (\Phel::getDefinition("phel\\core", "first"))($method);
                        return $target_1410->getName();
                      })();
                      $margs_1395 = (\Phel::getDefinition("phel\\core", "second"))($method);
                      $body_1396 = (\Phel::getDefinition("phel\\core", "next"))((\Phel::getDefinition("phel\\core", "next"))($method));
                      $dsym_1397 = (\Phel\Lang\Symbol::create(($proto_str_1393 . "--" . $mname_str_1394 . "--dispatch")));
                      return (\Phel::getDefinition("phel\\core", "conj"))($inner, (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/swap!"))), (\Phel::getDefinition("phel\\core", "list"))($dsym_1397), (\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/assoc"))), (\Phel::getDefinition("phel\\core", "list"))($type_key_1380), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("fn"))), (\Phel::getDefinition("phel\\core", "list"))($margs_1395), $body_1396)) ?? []))))) ?? [])));
                    }
                  }, $acc, $methods_1392);
                }
              }, \Phel::vector([]), $groups_1383);
              return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("do"))), $swaps_1390)) ?? []));
            }
          },
          \Phel::map(
            \Phel::keyword("macro"), true,
            \Phel::keyword("doc"), "```phel\n(extend-type type-spec & specs)\n```\nExtends a type with protocol method implementations.\n\n  type-spec can be:\n  - `nil` for the nil type\n  - a type keyword matching what `type` returns: `:string`, `:int`, `:float`,\n    `:boolean`, `:keyword`, `:symbol`, `:vector`, `:list`, `:hash-map`, `:set`,\n    `:var`, `:function`, `:php/array`\n  - a symbol for struct names (resolved in current namespace)\n  - a string for explicit PHP class names (cross-namespace structs)\n\n  Note: `:struct` and `:php/object` cannot be used as type-specs because\n  protocol dispatch resolves these to their specific PHP class names.\n  Use a struct symbol or PHP class name string instead.",
            \Phel::keyword("example"), "(extend-type :string Stringable (to-string [s] s))",
            \Phel::keyword("see-also"), \Phel::vector(["defprotocol", "satisfies?", "extends?", "protocol-type-key"]),
            \Phel::keyword("start-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3586,
              \Phel::keyword("column"), 0
            ),
            \Phel::keyword("end-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3652,
              \Phel::keyword("column"), 19
            ),
            "min-arity", 1,
            "is-variadic", true,
            "arglists", "[type-spec & specs]"
          )
        );
        \Phel::addDefinition(
          "phel\\core",
          "satisfies?",
          new class() extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\core\\satisfies?";

            public function __invoke($protocol, $x) {
              $key_1424 = (\Phel::getDefinition("phel\\core", "protocol-type-key"))($x);
              $dvars_1425 = (\Phel::getDefinition("phel\\core", "get"))($protocol, \Phel::keyword("dispatch"));
              if (($__truthy = (function() use($protocol,$x,$key_1424,$dvars_1425) {
                $__phel_1426_1427 = (\Phel::getDefinition("phel\\core", "nil?"))($dvars_1425);
                if (($__truthy = $__phel_1426_1427) !== null && $__truthy !== false) {
                  return $__phel_1426_1427;
                } else {
                  return (\Phel::getDefinition("phel\\core", "empty?"))($dvars_1425);
                }

              })()) !== null && $__truthy !== false) {
                return false;
              } else {
                return (\Phel::getDefinition("phel\\core", "every?"))(new class($protocol, $x, $key_1424, $dvars_1425) extends \Phel\Lang\AbstractFn {
                  public const BOUND_TO = "phel\\core\\satisfies?";
                  private $protocol;
                  private $x;
                  private $key_1424;
                  private $dvars_1425;

                  public function __construct($protocol, $x, $key_1424, $dvars_1425) {
                    $this->protocol = $protocol;
                    $this->x = $x;
                    $this->key_1424 = $key_1424;
                    $this->dvars_1425 = $dvars_1425;
                  }

                  public function __invoke($dv) {
                    $protocol = $this->protocol;
                    $x = $this->x;
                    $key_1424 = $this->key_1424;
                    $dvars_1425 = $this->dvars_1425;
                    return (\Phel::getDefinition("phel\\core", "not"))((\Phel::getDefinition("phel\\core", "nil?"))((\Phel::getDefinition("phel\\core", "get"))((\Phel::getDefinition("phel\\core", "deref"))($dv), $key_1424)));
                  }
                }, $dvars_1425);
              }

            }
          },
          \Phel::map(
            \Phel::keyword("doc"), "```phel\n(satisfies? protocol x)\n```\nReturns true if x's type implements all methods of the given protocol.",
            \Phel::keyword("example"), "(satisfies? Stringable \"hello\")",
            \Phel::keyword("see-also"), \Phel::vector(["extends?", "defprotocol", "extend-type"]),
            \Phel::keyword("start-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3654,
              \Phel::keyword("column"), 0
            ),
            \Phel::keyword("end-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3663,
              \Phel::keyword("column"), 67
            ),
            "min-arity", 2,
            "is-variadic", false,
            "arglists", "[protocol x]"
          )
        );
        \Phel::addDefinition(
          "phel\\core",
          "extends?",
          new class() extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\core\\extends?";

            public function __invoke($protocol, $type_key) {
              $dvars_1428 = (\Phel::getDefinition("phel\\core", "get"))($protocol, \Phel::keyword("dispatch"));
              if (($__truthy = (function() use($protocol,$type_key,$dvars_1428) {
                $__phel_1429_1430 = (\Phel::getDefinition("phel\\core", "nil?"))($dvars_1428);
                if (($__truthy = $__phel_1429_1430) !== null && $__truthy !== false) {
                  return $__phel_1429_1430;
                } else {
                  return (\Phel::getDefinition("phel\\core", "empty?"))($dvars_1428);
                }

              })()) !== null && $__truthy !== false) {
                return false;
              } else {
                return (\Phel::getDefinition("phel\\core", "every?"))(new class($protocol, $type_key, $dvars_1428) extends \Phel\Lang\AbstractFn {
                  public const BOUND_TO = "phel\\core\\extends?";
                  private $protocol;
                  private $type_key;
                  private $dvars_1428;

                  public function __construct($protocol, $type_key, $dvars_1428) {
                    $this->protocol = $protocol;
                    $this->type_key = $type_key;
                    $this->dvars_1428 = $dvars_1428;
                  }

                  public function __invoke($dv) {
                    $protocol = $this->protocol;
                    $type_key = $this->type_key;
                    $dvars_1428 = $this->dvars_1428;
                    return (\Phel::getDefinition("phel\\core", "not"))((\Phel::getDefinition("phel\\core", "nil?"))((\Phel::getDefinition("phel\\core", "get"))((\Phel::getDefinition("phel\\core", "deref"))($dv), $type_key)));
                  }
                }, $dvars_1428);
              }

            }
          },
          \Phel::map(
            \Phel::keyword("doc"), "```phel\n(extends? protocol type-key)\n```\nReturns true if the given type-key has implementations for all methods\n  of the protocol. type-key should match what protocol-type-key returns.",
            \Phel::keyword("example"), "(extends? Stringable :string)",
            \Phel::keyword("see-also"), \Phel::vector(["satisfies?", "defprotocol", "extend-type"]),
            \Phel::keyword("start-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3665,
              \Phel::keyword("column"), 0
            ),
            \Phel::keyword("end-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3674,
              \Phel::keyword("column"), 72
            ),
            "min-arity", 2,
            "is-variadic", false,
            "arglists", "[protocol type-key]"
          )
        );
        \Phel::addDefinition(
          "phel\\core",
          "extend-protocol",
          new class() extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\core\\extend_protocol";

            public function __invoke($protocol_name, ...$specs) {
              $specs = \Phel::vector($specs);
              $groups_1431 = (function() use($protocol_name,$specs) {
                $remaining_1432 = $specs;
                $current_type_1433 = null;
                $current_methods_1434 = \Phel::vector([]);
                $result_1435 = \Phel::vector([]);
                while (true) {
                  if (($__truthy = (\Phel::getDefinition("phel\\core", "nil?"))($remaining_1432)) !== null && $__truthy !== false) {
                    if (($__truthy = $current_type_1433) !== null && $__truthy !== false) {
                      return (\Phel::getDefinition("phel\\core", "conj"))($result_1435, \Phel::vector([$current_type_1433, $current_methods_1434]));
                    } else {
                      return $result_1435;
                    }

                  } else {
                    $item_1436 = (\Phel::getDefinition("phel\\core", "first"))($remaining_1432);
                    $rst_1437 = (\Phel::getDefinition("phel\\core", "next"))($remaining_1432);
                    if (($__truthy = (\Phel::getDefinition("phel\\core", "list?"))($item_1436)) !== null && $__truthy !== false) {
                      $__phel_1455 = $rst_1437;
                      $__phel_1456 = $current_type_1433;
                      $__phel_1457 = (\Phel::getDefinition("phel\\core", "conj"))($current_methods_1434, $item_1436);
                      $__phel_1458 = $result_1435;
                      $remaining_1432 = $__phel_1455;
                      $current_type_1433 = $__phel_1456;
                      $current_methods_1434 = $__phel_1457;
                      $result_1435 = $__phel_1458;
                      continue;

                    } else {
                      $__phel_1459 = $rst_1437;
                      $__phel_1460 = $item_1436;
                      $__phel_1461 = \Phel::vector([]);
                      $__phel_1462 = (($__truthy = $current_type_1433) !== null && $__truthy !== false ? (\Phel::getDefinition("phel\\core", "conj"))($result_1435, \Phel::vector([$current_type_1433, $current_methods_1434])) : $result_1435);
                      $remaining_1432 = $__phel_1459;
                      $current_type_1433 = $__phel_1460;
                      $current_methods_1434 = $__phel_1461;
                      $result_1435 = $__phel_1462;
                      continue;

                    }

                  }
                  break;
                }
              })();
              $extend_calls_1438 = (function() use($protocol_name,$specs,$groups_1431) {
                $__phel_1439_1442 = (\Phel::getDefinition("phel\\core", "var"))(\Phel::vector([]));
                foreach (\Phel\Lang\Seq::toIterable($groups_1431) as $__phel_1441) {
                  $__phel_1443_1448 = $__phel_1441;
                  $__phel_1444_1449 = (\Phel::getDefinition("phel\\core", "first"))($__phel_1443_1448);
                  $__phel_1445_1450 = (\Phel::getDefinition("phel\\core", "next"))($__phel_1443_1448);
                  $type_spec_1451 = $__phel_1444_1449;
                  $__phel_1446_1452 = (\Phel::getDefinition("phel\\core", "first"))($__phel_1445_1450);
                  $__phel_1447_1453 = (\Phel::getDefinition("phel\\core", "next"))($__phel_1445_1450);
                  $methods_1454 = $__phel_1446_1452;
                  (\Phel::getDefinition("phel\\core", "swap!"))($__phel_1439_1442, new class($protocol_name, $specs, $groups_1431, $__phel_1439_1442, $__phel_1441, $__phel_1443_1448, $__phel_1444_1449, $__phel_1445_1450, $type_spec_1451, $__phel_1446_1452, $__phel_1447_1453, $methods_1454) extends \Phel\Lang\AbstractFn {
                    public const BOUND_TO = "phel\\core\\extend_protocol.extend_calls";
                    private $protocol_name;
                    private $specs;
                    private $groups_1431;
                    private $__phel_1439_1442;
                    private $__phel_1441;
                    private $__phel_1443_1448;
                    private $__phel_1444_1449;
                    private $__phel_1445_1450;
                    private $type_spec_1451;
                    private $__phel_1446_1452;
                    private $__phel_1447_1453;
                    private $methods_1454;

                    public function __construct($protocol_name, $specs, $groups_1431, $__phel_1439_1442, $__phel_1441, $__phel_1443_1448, $__phel_1444_1449, $__phel_1445_1450, $type_spec_1451, $__phel_1446_1452, $__phel_1447_1453, $methods_1454) {
                      $this->protocol_name = $protocol_name;
                      $this->specs = $specs;
                      $this->groups_1431 = $groups_1431;
                      $this->__phel_1439_1442 = $__phel_1439_1442;
                      $this->__phel_1441 = $__phel_1441;
                      $this->__phel_1443_1448 = $__phel_1443_1448;
                      $this->__phel_1444_1449 = $__phel_1444_1449;
                      $this->__phel_1445_1450 = $__phel_1445_1450;
                      $this->type_spec_1451 = $type_spec_1451;
                      $this->__phel_1446_1452 = $__phel_1446_1452;
                      $this->__phel_1447_1453 = $__phel_1447_1453;
                      $this->methods_1454 = $methods_1454;
                    }

                    public function __invoke($__phel_1440) {
                      $protocol_name = $this->protocol_name;
                      $specs = $this->specs;
                      $groups_1431 = $this->groups_1431;
                      $__phel_1439_1442 = $this->__phel_1439_1442;
                      $__phel_1441 = $this->__phel_1441;
                      $__phel_1443_1448 = $this->__phel_1443_1448;
                      $__phel_1444_1449 = $this->__phel_1444_1449;
                      $__phel_1445_1450 = $this->__phel_1445_1450;
                      $type_spec_1451 = $this->type_spec_1451;
                      $__phel_1446_1452 = $this->__phel_1446_1452;
                      $__phel_1447_1453 = $this->__phel_1447_1453;
                      $methods_1454 = $this->methods_1454;
                      return (\Phel::getDefinition("phel\\core", "conj"))($__phel_1440, (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/extend-type"))), (\Phel::getDefinition("phel\\core", "list"))($type_spec_1451), (\Phel::getDefinition("phel\\core", "list"))($protocol_name), $methods_1454)) ?? [])));
                    }
                  });
                }
                return (\Phel::getDefinition("phel\\core", "deref"))($__phel_1439_1442);
              })();
              return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("do"))), $extend_calls_1438)) ?? []));
            }
          },
          \Phel::map(
            \Phel::keyword("macro"), true,
            \Phel::keyword("doc"), "```phel\n(extend-protocol protocol-name & specs)\n```\nConvenience macro that extends a single protocol to multiple types.\n  Alternates type-specs and method implementations.\n\n  Equivalent to multiple `extend-type` calls.",
            \Phel::keyword("example"), "(extend-protocol Describable\n  :string (describe [s] s)\n  :int (describe [n] (str n)))",
            \Phel::keyword("see-also"), \Phel::vector(["extend-type", "defprotocol"]),
            \Phel::keyword("start-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3676,
              \Phel::keyword("column"), 0
            ),
            \Phel::keyword("end-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3704,
              \Phel::keyword("column"), 26
            ),
            "min-arity", 1,
            "is-variadic", true,
            "arglists", "[protocol-name & specs]"
          )
        );
        \Phel::addDefinition(
          "phel\\core",
          "defmulti",
          new class() extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\core\\defmulti";

            public function __invoke($name, $dispatch_fn) {
              $methods_name_1471 = (\Phel\Lang\Symbol::create(((function() use($name,$dispatch_fn) {
                $target_1473 = $name;
                return $target_1473->getName();
              })() . "-methods")));
              $dispatch_name_1472 = (\Phel\Lang\Symbol::create(((function() use($name,$dispatch_fn,$methods_name_1471) {
                $target_1474 = $name;
                return $target_1474->getName();
              })() . "-dispatch")));
              return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("do"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("def"))), (\Phel::getDefinition("phel\\core", "list"))($methods_name_1471), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "hash-map"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))(\Phel::keyword("private")), (\Phel::getDefinition("phel\\core", "list"))(true))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/var"))), (\Phel::getDefinition("phel\\core", "list"))(\Phel::map()))) ?? []))))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("def"))), (\Phel::getDefinition("phel\\core", "list"))($dispatch_name_1472), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "hash-map"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))(\Phel::keyword("private")), (\Phel::getDefinition("phel\\core", "list"))(true))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))($dispatch_fn))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/defn"))), (\Phel::getDefinition("phel\\core", "list"))($name), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "vector"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("&"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("args"))))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("let"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "vector"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("dispatch-val"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("apply"))), (\Phel::getDefinition("phel\\core", "list"))($dispatch_name_1472), (\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("args"))))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("methods"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/deref"))), (\Phel::getDefinition("phel\\core", "list"))($methods_name_1471))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("method"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/get"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("methods"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("dispatch-val"))))) ?? []))))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("if"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("method"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("apply"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("method"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("args"))))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("let"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "vector"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("hierarchy-method"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/find-hierarchy-method"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("methods"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("dispatch-val"))))) ?? []))))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("if"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("hierarchy-method"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("apply"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("hierarchy-method"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("args"))))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("let"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "vector"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("default-method"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/get"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("methods"))), (\Phel::getDefinition("phel\\core", "list"))(\Phel::keyword("default")))) ?? []))))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("if"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("default-method"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("apply"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("default-method"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("args"))))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("throw"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("php/new"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("\\InvalidArgumentException"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/str"))), (\Phel::getDefinition("phel\\core", "list"))("No method for dispatch value: "), (\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("dispatch-val"))))) ?? []))))) ?? []))))) ?? []))))) ?? []))))) ?? []))))) ?? []))))) ?? []))))) ?? []))))) ?? []))))) ?? []))))) ?? []));
            }
          },
          \Phel::map(
            \Phel::keyword("macro"), true,
            \Phel::keyword("doc"), "```phel\n(defmulti name dispatch-fn)\n```\nDefines a multimethod. `dispatch-fn` is called on the arguments to\n  produce a dispatch value, which is then used to select the appropriate\n  method registered via `defmethod`.\n\n  If no method matches the dispatch value, the `:default` method is used\n  (if defined), otherwise an error is thrown.",
            \Phel::keyword("example"), "(defmulti area :shape)",
            \Phel::keyword("start-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3710,
              \Phel::keyword("column"), 0
            ),
            \Phel::keyword("end-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3737,
              \Phel::keyword("column"), 100
            ),
            "min-arity", 2,
            "is-variadic", false,
            "arglists", "[name dispatch-fn]"
          )
        );
        \Phel::addDefinition(
          "phel\\core",
          "defmethod",
          new class() extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\core\\defmethod";

            public function __invoke($multi_name, $dispatch_val, ...$fn_tail) {
              $fn_tail = \Phel::vector($fn_tail);
              $methods_name_1477 = (\Phel\Lang\Symbol::create(((function() use($multi_name,$dispatch_val,$fn_tail) {
                $target_1478 = $multi_name;
                return $target_1478->getName();
              })() . "-methods")));
              return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/swap!"))), (\Phel::getDefinition("phel\\core", "list"))($methods_name_1477), (\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/assoc"))), (\Phel::getDefinition("phel\\core", "list"))($dispatch_val), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("fn"))), $fn_tail)) ?? []))))) ?? []));
            }
          },
          \Phel::map(
            \Phel::keyword("macro"), true,
            \Phel::keyword("doc"), "```phel\n(defmethod multi-name dispatch-val & fn-tail)\n```\nRegisters a method implementation for a multimethod.\n\n  `multi-name` is the name of the multimethod defined by `defmulti`.\n  `dispatch-val` is the value that triggers this method.\n  `args` and `body` define the function implementation.",
            \Phel::keyword("example"), "(defmethod area :circle [{:radius r}] (* 3.14159 r r))",
            \Phel::keyword("start-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3739,
              \Phel::keyword("column"), 0
            ),
            \Phel::keyword("end-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3748,
              \Phel::keyword("column"), 63
            ),
            "min-arity", 2,
            "is-variadic", true,
            "arglists", "[multi-name dispatch-val & fn-tail]"
          )
        );
        \Phel::addDefinition(
          "phel\\core",
          "if-let",
          new class() extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\core\\if_let";

            public function __invoke($bindings, $then, ...$__phel_1481) {
              $__phel_1481 = \Phel::vector($__phel_1481);
              $__phel_1482_1485 = $__phel_1481;
              $__phel_1483_1486 = (\Phel::getDefinition("phel\\core", "first"))($__phel_1482_1485);
              $__phel_1484_1487 = (\Phel::getDefinition("phel\\core", "next"))($__phel_1482_1485);
              $else_1488 = $__phel_1483_1486;
              $err_1489 = new class($bindings, $then, $__phel_1481, $__phel_1482_1485, $__phel_1483_1486, $__phel_1484_1487, $else_1488) extends \Phel\Lang\AbstractFn {
                public const BOUND_TO = "phel\\core\\if_let.err";
                private $bindings;
                private $then;
                private $__phel_1481;
                private $__phel_1482_1485;
                private $__phel_1483_1486;
                private $__phel_1484_1487;
                private $else_1488;

                public function __construct($bindings, $then, $__phel_1481, $__phel_1482_1485, $__phel_1483_1486, $__phel_1484_1487, $else_1488) {
                  $this->bindings = $bindings;
                  $this->then = $then;
                  $this->__phel_1481 = $__phel_1481;
                  $this->__phel_1482_1485 = $__phel_1482_1485;
                  $this->__phel_1483_1486 = $__phel_1483_1486;
                  $this->__phel_1484_1487 = $__phel_1484_1487;
                  $this->else_1488 = $else_1488;
                }

                public function __invoke($__short_fn_1_1480) {
                  $bindings = $this->bindings;
                  $then = $this->then;
                  $__phel_1481 = $this->__phel_1481;
                  $__phel_1482_1485 = $this->__phel_1482_1485;
                  $__phel_1483_1486 = $this->__phel_1483_1486;
                  $__phel_1484_1487 = $this->__phel_1484_1487;
                  $else_1488 = $this->else_1488;
                  throw (new \InvalidArgumentException($__short_fn_1_1480));
                }
              };
              if (($__truthy = (\Phel::getDefinition("phel\\core", "vector?"))($bindings)) !== null && $__truthy !== false) {

              } else {
                ($err_1489)((\Phel::getDefinition("phel\\core", "str"))("if-let requires a vector for it's bindings, ", (\Phel::getDefinition("phel\\core", "type"))($bindings), " given"));
              }

              if (($__truthy = (\Phel::getDefinition("phel\\core", "="))(2, (\Phel::getDefinition("phel\\core", "count"))($bindings))) !== null && $__truthy !== false) {

              } else {
                ($err_1489)((\Phel::getDefinition("phel\\core", "str"))("if-let requires bindings to have 2 elements, ", (\Phel::getDefinition("phel\\core", "count"))($bindings), " given"));
              }

              $form_1490 = ($bindings)(0);
              $tst_1491 = ($bindings)(1);
              $temp_sym_1492 = (\Phel::getDefinition("phel\\core", "gensym"))();
              return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("let"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "vector"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("temp-sym"))), (\Phel::getDefinition("phel\\core", "list"))($tst_1491))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("if"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("temp-sym"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("let"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "vector"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))($form_1490), (\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("temp-sym"))))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))($then))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))($else_1488))) ?? []))))) ?? []));
            }
          },
          \Phel::map(
            \Phel::keyword("macro"), true,
            \Phel::keyword("doc"), "```phel\n(if-let bindings then & [else])\n```\nIf test is true, evaluates then with binding-form bound to the value of test,\n  if not, yields else",
            \Phel::keyword("start-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3750,
              \Phel::keyword("column"), 0
            ),
            \Phel::keyword("end-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3769,
              \Phel::keyword("column"), 18
            ),
            "min-arity", 2,
            "is-variadic", true,
            "arglists", "[bindings then & __phel_1481]"
          )
        );
        \Phel::addDefinition(
          "phel\\core",
          "when-let",
          new class() extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\core\\when_let";

            public function __invoke($bindings, ...$body) {
              $body = \Phel::vector($body);
              $err_1494 = new class($bindings, $body) extends \Phel\Lang\AbstractFn {
                public const BOUND_TO = "phel\\core\\when_let.err";
                private $bindings;
                private $body;

                public function __construct($bindings, $body) {
                  $this->bindings = $bindings;
                  $this->body = $body;
                }

                public function __invoke($__short_fn_1_1493) {
                  $bindings = $this->bindings;
                  $body = $this->body;
                  throw (new \InvalidArgumentException($__short_fn_1_1493));
                }
              };
              if (($__truthy = (\Phel::getDefinition("phel\\core", "vector?"))($bindings)) !== null && $__truthy !== false) {

              } else {
                ($err_1494)((\Phel::getDefinition("phel\\core", "str"))("when-let requires a vector for it's bindings, ", (\Phel::getDefinition("phel\\core", "type"))($bindings), " given"));
              }

              if (($__truthy = (\Phel::getDefinition("phel\\core", "="))(2, (\Phel::getDefinition("phel\\core", "count"))($bindings))) !== null && $__truthy !== false) {

              } else {
                ($err_1494)((\Phel::getDefinition("phel\\core", "str"))("when-let requires bindings to have 2 elements, ", (\Phel::getDefinition("phel\\core", "count"))($bindings), " given"));
              }

              $form_1495 = ($bindings)(0);
              $tst_1496 = ($bindings)(1);
              $temp_sym_1497 = (\Phel::getDefinition("phel\\core", "gensym"))();
              return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("let"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "vector"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("temp-sym"))), (\Phel::getDefinition("phel\\core", "list"))($tst_1496))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/when"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("temp-sym"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("let"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "vector"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))($form_1495), (\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("temp-sym"))))) ?? []))), $body)) ?? []))))) ?? []))))) ?? []));
            }
          },
          \Phel::map(
            \Phel::keyword("macro"), true,
            \Phel::keyword("doc"), "```phel\n(when-let bindings & body)\n```\nWhen test is true, evaluates body with binding-form bound to the value of test",
            \Phel::keyword("start-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3771,
              \Phel::keyword("column"), 0
            ),
            \Phel::keyword("end-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3788,
              \Phel::keyword("column"), 22
            ),
            "min-arity", 1,
            "is-variadic", true,
            "arglists", "[bindings & body]"
          )
        );
        \Phel::addDefinition(
          "phel\\core",
          "time",
          new class() extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\core\\time";

            public function __invoke($expr) {
              return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("let"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "vector"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("start__1498"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("php/microtime"))), (\Phel::getDefinition("phel\\core", "list"))(true))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("ret__1499"))), (\Phel::getDefinition("phel\\core", "list"))($expr))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/println"))), (\Phel::getDefinition("phel\\core", "list"))("Elapsed time:"), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/*"))), (\Phel::getDefinition("phel\\core", "list"))(1000), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/-"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("php/microtime"))), (\Phel::getDefinition("phel\\core", "list"))(true))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("start__1498"))))) ?? []))))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))("msecs"))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("ret__1499"))))) ?? []));
            }
          },
          \Phel::map(
            \Phel::keyword("macro"), true,
            \Phel::keyword("doc"), "```phel\n(time expr)\n```\nEvaluates expr and prints the time it took. Returns the value of expr.",
            \Phel::keyword("start-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3790,
              \Phel::keyword("column"), 0
            ),
            \Phel::keyword("end-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3796,
              \Phel::keyword("column"), 11
            ),
            "min-arity", 1,
            "is-variadic", false,
            "arglists", "[expr]"
          )
        );
        \Phel::addDefinition(
          "phel\\core",
          "name",
          new class() extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\core\\name";

            public function __invoke($x) {
              if (($__truthy = (\Phel::getDefinition("phel\\core", "string?"))($x)) !== null && $__truthy !== false) {
                return $x;
              } else {
                return (function() use($x) {
                  $target_1500 = $x;
                  return $target_1500->getName();
                })();
              }

            }
          },
          \Phel::map(
            \Phel::keyword("doc"), "```phel\n(name x)\n```\nReturns the name string of a string, keyword or symbol.",
            \Phel::keyword("start-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3798,
              \Phel::keyword("column"), 0
            ),
            \Phel::keyword("end-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3801,
              \Phel::keyword("column"), 42
            ),
            "min-arity", 1,
            "is-variadic", false,
            "arglists", "[x]"
          )
        );
        \Phel::addDefinition(
          "phel\\core",
          "namespace",
          new class() extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\core\\namespace";

            public function __invoke($x) {
              return (function() use($x) {
                $target_1502 = $x;
                return $target_1502->getNamespace();
              })();
            }
          },
          \Phel::map(
            \Phel::keyword("doc"), "```phel\n(namespace x)\n```\nReturn the namespace string of a symbol or keyword. Nil if not present.",
            \Phel::keyword("start-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3803,
              \Phel::keyword("column"), 0
            ),
            \Phel::keyword("end-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3806,
              \Phel::keyword("column"), 28
            ),
            "min-arity", 1,
            "is-variadic", false,
            "arglists", "[x]"
          )
        );
        \Phel::addDefinition(
          "phel\\core",
          "full-name",
          new class() extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\core\\full_name";

            public function __invoke($x) {
              if (($__truthy = (\Phel::getDefinition("phel\\core", "string?"))($x)) !== null && $__truthy !== false) {
                return $x;
              } else {
                return (function() use($x) {
                  $target_1504 = $x;
                  return $target_1504->getFullName();
                })();
              }

            }
          },
          \Phel::map(
            \Phel::keyword("doc"), "```phel\n(full-name x)\n```\nReturn the namespace and name string of a string, keyword or symbol.",
            \Phel::keyword("start-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3808,
              \Phel::keyword("column"), 0
            ),
            \Phel::keyword("end-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3811,
              \Phel::keyword("column"), 46
            ),
            "min-arity", 1,
            "is-variadic", false,
            "arglists", "[x]"
          )
        );
        \Phel::addDefinition(
          "phel\\core",
          "read-string",
          new class() extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\core\\read_string";

            public function __invoke($s) {
              $cf_1506 = (new \Phel\Compiler\CompilerFacade());
              $token_stream_1507 = (function() use($s,$cf_1506) {
                $target_1509 = $cf_1506;
                return $target_1509->lexString($s);
              })();
              $node_1508 = (function() use($s,$cf_1506,$token_stream_1507) {
                $target_1510 = $cf_1506;
                return $target_1510->parseNext($token_stream_1507);
              })();
              if (($__truthy = $node_1508) !== null && $__truthy !== false) {
                return (function() use($s,$cf_1506,$token_stream_1507,$node_1508) {
                  $target_1511 = (function() use($s,$cf_1506,$token_stream_1507,$node_1508) {
                    $target_1512 = $cf_1506;
                    return $target_1512->read($node_1508);
                  })();
                  return $target_1511->getAst();
                })();
              } else {
                return null;
              }

            }
          },
          \Phel::map(
            \Phel::keyword("doc"), "```phel\n(read-string s)\n```\nReads the first phel expression from the string s.",
            \Phel::keyword("start-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3813,
              \Phel::keyword("column"), 0
            ),
            \Phel::keyword("end-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3820,
              \Phel::keyword("column"), 50
            ),
            "min-arity", 1,
            "is-variadic", false,
            "arglists", "[s]"
          )
        );
        \Phel::addDefinition(
          "phel\\core",
          "eval",
          new class() extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\core\\eval";

            public function __invoke($form) {
              $cf_1517 = (new \Phel\Compiler\CompilerFacade());
              return (function() use($form,$cf_1517) {
                $target_1518 = $cf_1517;
                return $target_1518->evalForm($form);
              })();
            }
          },
          \Phel::map(
            \Phel::keyword("doc"), "```phel\n(eval form)\n```\nEvaluates a form and return the evaluated results.",
            \Phel::keyword("start-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3822,
              \Phel::keyword("column"), 0
            ),
            \Phel::keyword("end-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3826,
              \Phel::keyword("column"), 33
            ),
            "min-arity", 1,
            "is-variadic", false,
            "arglists", "[form]"
          )
        );
        \Phel::addDefinition(
          "phel\\core",
          "compile",
          new class() extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\core\\compile";

            public function __invoke($form) {
              $cf_1520 = (new \Phel\Compiler\CompilerFacade());
              return (function() use($form,$cf_1520) {
                $target_1521 = (function() use($form,$cf_1520) {
                  $target_1522 = $cf_1520;
                  return $target_1522->compileForm($form);
                })();
                return $target_1521->getPhpCode();
              })();
            }
          },
          \Phel::map(
            \Phel::keyword("doc"), "```phel\n(compile form)\n```\nReturns the compiled PHP code string for the given form.",
            \Phel::keyword("start-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3828,
              \Phel::keyword("column"), 0
            ),
            \Phel::keyword("end-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3832,
              \Phel::keyword("column"), 58
            ),
            "min-arity", 1,
            "is-variadic", false,
            "arglists", "[form]"
          )
        );
        \Phel::addDefinition(
          "phel\\core",
          "get-global-env",
          new class() extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\core\\get_global_env";

            public function __invoke() {
              return (\Phel\Compiler\Infrastructure\GlobalEnvironmentSingleton::getInstance());
            }
          },
          \Phel::map(
            \Phel::keyword("private"), true,
            \Phel::keyword("doc"), "```phel\n(get-global-env)\n```\n",
            \Phel::keyword("start-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3834,
              \Phel::keyword("column"), 0
            ),
            \Phel::keyword("end-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3835,
              \Phel::keyword("column"), 52
            ),
            "min-arity", 0,
            "is-variadic", false,
            "arglists", "[]"
          )
        );
        \Phel::addDefinition(
          "phel\\core",
          "get-global-var-node",
          new class() extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\core\\get_global_var_node";

            public function __invoke($sym) {
              return (function() use($sym) {
                $target_1525 = (\Phel::getDefinition("phel\\core", "get-global-env"))();
                return $target_1525->resolve($sym, (\Phel\Compiler\Domain\Analyzer\Environment\NodeEnvironment::empty()));
              })();
            }
          },
          \Phel::map(
            \Phel::keyword("private"), true,
            \Phel::keyword("doc"), "```phel\n(get-global-var-node sym)\n```\n",
            \Phel::keyword("start-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3837,
              \Phel::keyword("column"), 0
            ),
            \Phel::keyword("end-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3838,
              \Phel::keyword("column"), 75
            ),
            "min-arity", 1,
            "is-variadic", false,
            "arglists", "[sym]"
          )
        );
        \Phel::addDefinition(
          "phel\\core",
          "inline-call?",
          new class() extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\core\\inline_call?";

            public function __invoke($meta, $arity) {
              $__phel_1527_1528 = (\Phel::keyword("inline"))($meta);
              if (($__truthy = $__phel_1527_1528) !== null && $__truthy !== false) {
                $af_1529 = (\Phel::keyword("inline-arity"))($meta);
                if (($__truthy = $af_1529) !== null && $__truthy !== false) {
                  return ($af_1529)($arity);
                } else {
                  return true;
                }

              } else {
                return $__phel_1527_1528;
              }

            }
          },
          \Phel::map(
            \Phel::keyword("private"), true,
            \Phel::keyword("doc"), "```phel\n(inline-call? meta arity)\n```\n",
            \Phel::keyword("start-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3840,
              \Phel::keyword("column"), 0
            ),
            \Phel::keyword("end-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3845,
              \Phel::keyword("column"), 19
            ),
            "min-arity", 2,
            "is-variadic", false,
            "arglists", "[meta arity]"
          )
        );
        \Phel::addDefinition(
          "phel\\core",
          "delay",
          new class() extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\core\\delay";

            public function __invoke(...$body) {
              $body = \Phel::vector($body);
              return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("php/new"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("\\Phel\\Lang\\Delay"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("fn"))), (\Phel::getDefinition("phel\\core", "list"))(\Phel::vector([])), $body)) ?? []))))) ?? []));
            }
          },
          \Phel::map(
            \Phel::keyword("macro"), true,
            \Phel::keyword("doc"), "```phel\n(delay & body)\n```\nTakes a body of expressions and yields a Delay object that will invoke the\n  body only the first time it is forced (via force or deref/@), caching the result.",
            \Phel::keyword("example"), "(def d (delay (println \"computing\") 42))",
            \Phel::keyword("see-also"), \Phel::vector(["force", "delay?", "realized?"]),
            \Phel::keyword("start-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3849,
              \Phel::keyword("column"), 0
            ),
            \Phel::keyword("end-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3855,
              \Phel::keyword("column"), 45
            ),
            "min-arity", 0,
            "is-variadic", true,
            "arglists", "[& body]"
          )
        );
        \Phel::addDefinition(
          "phel\\core",
          "force",
          new class() extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\core\\force";

            public function __invoke($x) {
              if (($__truthy = ($x instanceof \Phel\Lang\Delay)) !== null && $__truthy !== false) {
                return (function() use($x) {
                  $target_1530 = $x;
                  return $target_1530->deref();
                })();
              } else {
                return $x;
              }

            }
          },
          \Phel::map(
            \Phel::keyword("doc"), "```phel\n(force x)\n```\nIf x is a Delay, forces it and returns its cached value. Otherwise returns x.",
            \Phel::keyword("example"), "(force (delay 42)) ; => 42",
            \Phel::keyword("see-also"), \Phel::vector(["delay", "deref"]),
            \Phel::keyword("start-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3857,
              \Phel::keyword("column"), 0
            ),
            \Phel::keyword("end-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3864,
              \Phel::keyword("column"), 7
            ),
            "min-arity", 1,
            "is-variadic", false,
            "arglists", "[x]"
          )
        );
        \Phel::addDefinition(
          "phel\\core",
          "delay?",
          new class() extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\core\\delay?";

            public function __invoke($x) {
              return ($x instanceof \Phel\Lang\Delay);
            }
          },
          \Phel::map(
            \Phel::keyword("doc"), "```phel\n(delay? x)\n```\nReturns true if x is a Delay.",
            \Phel::keyword("see-also"), \Phel::vector(["delay", "force"]),
            \Phel::keyword("start-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3866,
              \Phel::keyword("column"), 0
            ),
            \Phel::keyword("end-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3870,
              \Phel::keyword("column"), 27
            ),
            "min-arity", 1,
            "is-variadic", false,
            "arglists", "[x]"
          )
        );
        \Phel::addDefinition(
          "phel\\core",
          "iteration",
          new class() extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\core\\iteration";

            public function __invoke($step, $opts) {
              return (new \Phel\Lang\Collections\LazySeq\LazySeq((new \Phel\Lang\Hasher()), (new \Phel\Lang\Equalizer()), new class($step, $opts) extends \Phel\Lang\AbstractFn {
                public const BOUND_TO = "phel\\core\\iteration";
                private $step;
                private $opts;

                public function __construct($step, $opts) {
                  $this->step = $step;
                  $this->opts = $opts;
                }

                public function __invoke() {
                  $step = $this->step;
                  $opts = $this->opts;
                  $kf_1532 = (\Phel::getDefinition("phel\\core", "get"))($opts, \Phel::keyword("kf"), \Phel::getDefinition("phel\\core", "identity"));
                  $vf_1533 = (\Phel::getDefinition("phel\\core", "get"))($opts, \Phel::keyword("vf"), \Phel::getDefinition("phel\\core", "identity"));
                  $initk_1534 = (\Phel::getDefinition("phel\\core", "get"))($opts, \Phel::keyword("initk"));
                  $result_1535 = ($step)($initk_1534);
                  if (($__truthy = (\Phel::getDefinition("phel\\core", "not"))((\Phel::getDefinition("phel\\core", "nil?"))($result_1535))) !== null && $__truthy !== false) {
                    return (\Phel::getDefinition("phel\\core", "cons"))(($vf_1533)($result_1535), (\Phel::getDefinition("phel\\core", "iteration"))($step, (\Phel::getDefinition("phel\\core", "assoc"))($opts, \Phel::keyword("initk"), ($kf_1532)($result_1535))));
                  } else {
                    return null;
                  }

                }
              }));
            }
          },
          \Phel::map(
            \Phel::keyword("doc"), "```phel\n(iteration step opts)\n```\nCreates a lazy sequence from successive calls to `step`.\n  `step` is called with a key (starting with `:initk`) and returns a result.\n  `:kf` extracts the next key, `:vf` extracts the value from the result.\n  Terminates when the result is nil.\n\n  Options map keys:\n    :kf     — key function (default: identity)\n    :vf     — value function (default: identity)\n    :initk  — initial key (default: nil)",
            \Phel::keyword("example"), "(iteration fetch-page {:kf :next-token :vf :items :initk nil})",
            \Phel::keyword("see-also"), \Phel::vector(["iterate", "repeatedly", "lazy-seq"]),
            \Phel::keyword("start-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3874,
              \Phel::keyword("column"), 0
            ),
            \Phel::keyword("end-location"), \Phel::map(
              \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
              \Phel::keyword("line"), 3894,
              \Phel::keyword("column"), 66
            ),
            "min-arity", 2,
            "is-variadic", false,
            "arglists", "[step opts]"
          )
        );
        \Phel::addDefinition(
          "phel\\core",
          "ex-info",
          new class() extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\core\\ex_info";
            private $fn0;
            private $fn1;

            public function __construct() {
              $this->fn0 = new class() extends \Phel\Lang\AbstractFn {
                public const BOUND_TO = "phel\\core\\ex_info";

                public function __invoke($msg, $data) {
                  return (new \Phel\Lang\ExInfoException($msg, $data));
                }
              };
              $this->fn1 = new class() extends \Phel\Lang\AbstractFn {
                public const BOUND_TO = "phel\\core\\ex_info";

                public function __invoke($msg, $data, $cause) {
                  return (new \Phel\Lang\ExInfoException($msg, $data, $cause));
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
              \Phel::keyword("doc"), "```phel\n(ex-info msg data)\n(ex-info msg data cause)\n```\nCreates an exception with a message and a data map. Optionally takes a cause.",
              \Phel::keyword("example"), "(throw (ex-info \"Invalid input\" {:field :email}))",
              \Phel::keyword("see-also"), \Phel::vector(["ex-data", "ex-message", "ex-cause"]),
              \Phel::keyword("start-location"), \Phel::map(
                \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
                \Phel::keyword("line"), 3898,
                \Phel::keyword("column"), 0
              ),
              \Phel::keyword("end-location"), \Phel::map(
                \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
                \Phel::keyword("line"), 3905,
                \Phel::keyword("column"), 56
              ),
              "min-arity", 2,
              "is-variadic", false,
              "max-arity", 3,
              "arglists", "([msg data] [msg data cause])"
            )
          );
          \Phel::addDefinition(
            "phel\\core",
            "ex-data",
            new class() extends \Phel\Lang\AbstractFn {
              public const BOUND_TO = "phel\\core\\ex_data";

              public function __invoke($ex) {
                if (($__truthy = ($ex instanceof \Phel\Lang\ExInfoException)) !== null && $__truthy !== false) {
                  return (function() use($ex) {
                    $target_1536 = $ex;
                    return $target_1536->getData();
                  })();
                } else {
                  return null;
                }

              }
            },
            \Phel::map(
              \Phel::keyword("doc"), "```phel\n(ex-data ex)\n```\nReturns the data map from an ex-info exception, or nil if not an ExInfoException.",
              \Phel::keyword("see-also"), \Phel::vector(["ex-info", "ex-message", "ex-cause"]),
              \Phel::keyword("start-location"), \Phel::map(
                \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
                \Phel::keyword("line"), 3907,
                \Phel::keyword("column"), 0
              ),
              \Phel::keyword("end-location"), \Phel::map(
                \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
                \Phel::keyword("line"), 3912,
                \Phel::keyword("column"), 27
              ),
              "min-arity", 1,
              "is-variadic", false,
              "arglists", "[ex]"
            )
          );
          \Phel::addDefinition(
            "phel\\core",
            "ex-message",
            new class() extends \Phel\Lang\AbstractFn {
              public const BOUND_TO = "phel\\core\\ex_message";

              public function __invoke($ex) {
                return (function() use($ex) {
                  $target_1538 = $ex;
                  return $target_1538->getMessage();
                })();
              }
            },
            \Phel::map(
              \Phel::keyword("doc"), "```phel\n(ex-message ex)\n```\nReturns the message of an exception.",
              \Phel::keyword("see-also"), \Phel::vector(["ex-info", "ex-data", "ex-cause"]),
              \Phel::keyword("start-location"), \Phel::map(
                \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
                \Phel::keyword("line"), 3914,
                \Phel::keyword("column"), 0
              ),
              \Phel::keyword("end-location"), \Phel::map(
                \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
                \Phel::keyword("line"), 3918,
                \Phel::keyword("column"), 27
              ),
              "min-arity", 1,
              "is-variadic", false,
              "arglists", "[ex]"
            )
          );
          \Phel::addDefinition(
            "phel\\core",
            "ex-cause",
            new class() extends \Phel\Lang\AbstractFn {
              public const BOUND_TO = "phel\\core\\ex_cause";

              public function __invoke($ex) {
                return (function() use($ex) {
                  $target_1540 = $ex;
                  return $target_1540->getPrevious();
                })();
              }
            },
            \Phel::map(
              \Phel::keyword("doc"), "```phel\n(ex-cause ex)\n```\nReturns the cause of an exception, or nil.",
              \Phel::keyword("see-also"), \Phel::vector(["ex-info", "ex-data", "ex-message"]),
              \Phel::keyword("start-location"), \Phel::map(
                \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
                \Phel::keyword("line"), 3920,
                \Phel::keyword("column"), 0
              ),
              \Phel::keyword("end-location"), \Phel::map(
                \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
                \Phel::keyword("line"), 3924,
                \Phel::keyword("column"), 28
              ),
              "min-arity", 1,
              "is-variadic", false,
              "arglists", "[ex]"
            )
          );
          \Phel::addDefinition(
            "phel\\core",
            "macroexpand-1",
            new class() extends \Phel\Lang\AbstractFn {
              public const BOUND_TO = "phel\\core\\macroexpand_1";

              public function __invoke($form) {
                if (($__truthy = (function() use($form) {
                  $__phel_1542_1543 = (\Phel::getDefinition("phel\\core", "list?"))($form);
                  if (($__truthy = $__phel_1542_1543) !== null && $__truthy !== false) {
                    return (\Phel::getDefinition("phel\\core", "not"))((\Phel::getDefinition("phel\\core", "empty?"))($form));
                  } else {
                    return $__phel_1542_1543;
                  }

                })()) !== null && $__truthy !== false) {
                  $op_1544 = (\Phel::getDefinition("phel\\core", "first"))($form);
                  if (($__truthy = (\Phel::getDefinition("phel\\core", "symbol?"))($op_1544)) !== null && $__truthy !== false) {
                    $node_1545 = (\Phel::getDefinition("phel\\core", "get-global-var-node"))($op_1544);
                    if (($__truthy = ($node_1545 instanceof \Phel\Compiler\Domain\Analyzer\Ast\GlobalVarNode)) !== null && $__truthy !== false) {
                      $meta_1546 = (function() use($form,$op_1544,$node_1545) {
                        $target_1551 = $node_1545;
                        return $target_1551->getMeta();
                      })();
                      $ns_1547 = (function() use($form,$op_1544,$node_1545,$meta_1546) {
                        $target_1552 = $node_1545;
                        return $target_1552->getNamespace();
                      })();
                      $name_1548 = (function() use($form,$op_1544,$node_1545,$meta_1546,$ns_1547) {
                        $target_1553 = (function() use($form,$op_1544,$node_1545,$meta_1546,$ns_1547) {
                          $target_1554 = $node_1545;
                          return $target_1554->getName();
                        })();
                        return $target_1553->getName();
                      })();
                      $args_1549 = (\Phel::getDefinition("phel\\core", "rest"))($form);
                      if (($__truthy = (\Phel::getDefinition("phel\\core", "inline-call?"))($meta_1546, (\Phel::getDefinition("phel\\core", "count"))($args_1549))) !== null && $__truthy !== false) {
                        return ((\Phel::keyword("inline"))($meta_1546))(...(($args_1549) ?? []));
                      } else {
                        if (($__truthy = (\Phel::keyword("macro"))($meta_1546)) !== null && $__truthy !== false) {
                          $macro_fn_1550 = (\Phel::getDefinition($ns_1547, $name_1548));
                          return ($macro_fn_1550)(...(($args_1549) ?? []));
                        } else {
                          if (($__truthy = \Phel::keyword("else")) !== null && $__truthy !== false) {
                            return $form;
                          } else {
                            return null;
                          }

                        }

                      }

                    } else {
                      return $form;
                    }

                  } else {
                    return $form;
                  }

                } else {
                  return $form;
                }

              }
            },
            \Phel::map(
              \Phel::keyword("doc"), "```phel\n(macroexpand-1 form)\n```\nExpands the given form once if it is a macro call.",
              \Phel::keyword("start-location"), \Phel::map(
                \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
                \Phel::keyword("line"), 3926,
                \Phel::keyword("column"), 0
              ),
              \Phel::keyword("end-location"), \Phel::map(
                \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
                \Phel::keyword("line"), 3948,
                \Phel::keyword("column"), 10
              ),
              "min-arity", 1,
              "is-variadic", false,
              "arglists", "[form]"
            )
          );
          \Phel::addDefinition(
            "phel\\core",
            "macroexpand",
            new class() extends \Phel\Lang\AbstractFn {
              public const BOUND_TO = "phel\\core\\macroexpand";

              public function __invoke($form) {
                $f_1559 = $form;
                while (true) {
                  $e_1560 = (\Phel::getDefinition("phel\\core", "macroexpand-1"))($f_1559);
                  if (($__truthy = (\Phel::getDefinition("phel\\core", "="))($e_1560, $f_1559)) !== null && $__truthy !== false) {
                    return $e_1560;
                  } else {
                    $__phel_1561 = $e_1560;
                    $f_1559 = $__phel_1561;
                    continue;

                  }
                  break;
                }
              }
            },
            \Phel::map(
              \Phel::keyword("doc"), "```phel\n(macroexpand form)\n```\nRecursively expands the given form until it is no longer a macro call.",
              \Phel::keyword("start-location"), \Phel::map(
                \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
                \Phel::keyword("line"), 3950,
                \Phel::keyword("column"), 0
              ),
              \Phel::keyword("end-location"), \Phel::map(
                \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
                \Phel::keyword("line"), 3957,
                \Phel::keyword("column"), 21
              ),
              "min-arity", 1,
              "is-variadic", false,
              "arglists", "[form]"
            )
          );
          \Phel::addDefinition(
            "phel\\core",
            "update-keys",
            new class() extends \Phel\Lang\AbstractFn {
              public const BOUND_TO = "phel\\core\\update_keys";

              public function __invoke($m, $f) {
                $__phel_1563_1567 = (\Phel::getDefinition("phel\\core", "var"))(\Phel::map());
                foreach (\Phel\Lang\Seq::toIterable($m) as $__phel_1566 => $__phel_1565) {
                  $__phel_1568_1573 = \Phel::vector([$__phel_1566, $__phel_1565]);
                  $__phel_1569_1574 = (\Phel::getDefinition("phel\\core", "first"))($__phel_1568_1573);
                  $__phel_1570_1575 = (\Phel::getDefinition("phel\\core", "next"))($__phel_1568_1573);
                  $k_1576 = $__phel_1569_1574;
                  $__phel_1571_1577 = (\Phel::getDefinition("phel\\core", "first"))($__phel_1570_1575);
                  $__phel_1572_1578 = (\Phel::getDefinition("phel\\core", "next"))($__phel_1570_1575);
                  $v_1579 = $__phel_1571_1577;
                  (\Phel::getDefinition("phel\\core", "swap!"))($__phel_1563_1567, new class($m, $f, $__phel_1563_1567, $__phel_1565, $__phel_1566, $__phel_1568_1573, $__phel_1569_1574, $__phel_1570_1575, $k_1576, $__phel_1571_1577, $__phel_1572_1578, $v_1579) extends \Phel\Lang\AbstractFn {
                    public const BOUND_TO = "phel\\core\\update_keys";
                    private $m;
                    private $f;
                    private $__phel_1563_1567;
                    private $__phel_1565;
                    private $__phel_1566;
                    private $__phel_1568_1573;
                    private $__phel_1569_1574;
                    private $__phel_1570_1575;
                    private $k_1576;
                    private $__phel_1571_1577;
                    private $__phel_1572_1578;
                    private $v_1579;

                    public function __construct($m, $f, $__phel_1563_1567, $__phel_1565, $__phel_1566, $__phel_1568_1573, $__phel_1569_1574, $__phel_1570_1575, $k_1576, $__phel_1571_1577, $__phel_1572_1578, $v_1579) {
                      $this->m = $m;
                      $this->f = $f;
                      $this->__phel_1563_1567 = $__phel_1563_1567;
                      $this->__phel_1565 = $__phel_1565;
                      $this->__phel_1566 = $__phel_1566;
                      $this->__phel_1568_1573 = $__phel_1568_1573;
                      $this->__phel_1569_1574 = $__phel_1569_1574;
                      $this->__phel_1570_1575 = $__phel_1570_1575;
                      $this->k_1576 = $k_1576;
                      $this->__phel_1571_1577 = $__phel_1571_1577;
                      $this->__phel_1572_1578 = $__phel_1572_1578;
                      $this->v_1579 = $v_1579;
                    }

                    public function __invoke($acc) {
                      $m = $this->m;
                      $f = $this->f;
                      $__phel_1563_1567 = $this->__phel_1563_1567;
                      $__phel_1565 = $this->__phel_1565;
                      $__phel_1566 = $this->__phel_1566;
                      $__phel_1568_1573 = $this->__phel_1568_1573;
                      $__phel_1569_1574 = $this->__phel_1569_1574;
                      $__phel_1570_1575 = $this->__phel_1570_1575;
                      $k_1576 = $this->k_1576;
                      $__phel_1571_1577 = $this->__phel_1571_1577;
                      $__phel_1572_1578 = $this->__phel_1572_1578;
                      $v_1579 = $this->v_1579;
                      return (\Phel::getDefinition("phel\\core", "assoc"))($acc, ($f)($k_1576), $v_1579);
                    }
                  });
                }
                return (\Phel::getDefinition("phel\\core", "deref"))($__phel_1563_1567);
              }
            },
            \Phel::map(
              \Phel::keyword("doc"), "```phel\n(update-keys m f)\n```\nReturns a map with `f` applied to each key.",
              \Phel::keyword("example"), "(update-keys {:a 1 :b 2} name) ; => {\"a\" 1 \"b\" 2}",
              \Phel::keyword("see-also"), \Phel::vector(["update-vals", "keys", "update"]),
              \Phel::keyword("start-location"), \Phel::map(
                \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
                \Phel::keyword("line"), 3961,
                \Phel::keyword("column"), 0
              ),
              \Phel::keyword("end-location"), \Phel::map(
                \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
                \Phel::keyword("line"), 3968,
                \Phel::keyword("column"), 25
              ),
              "min-arity", 2,
              "is-variadic", false,
              "arglists", "[m f]"
            )
          );
          \Phel::addDefinition(
            "phel\\core",
            "update-vals",
            new class() extends \Phel\Lang\AbstractFn {
              public const BOUND_TO = "phel\\core\\update_vals";

              public function __invoke($m, $f) {
                $__phel_1580_1584 = (\Phel::getDefinition("phel\\core", "var"))(\Phel::map());
                foreach (\Phel\Lang\Seq::toIterable($m) as $__phel_1583 => $__phel_1582) {
                  $__phel_1585_1590 = \Phel::vector([$__phel_1583, $__phel_1582]);
                  $__phel_1586_1591 = (\Phel::getDefinition("phel\\core", "first"))($__phel_1585_1590);
                  $__phel_1587_1592 = (\Phel::getDefinition("phel\\core", "next"))($__phel_1585_1590);
                  $k_1593 = $__phel_1586_1591;
                  $__phel_1588_1594 = (\Phel::getDefinition("phel\\core", "first"))($__phel_1587_1592);
                  $__phel_1589_1595 = (\Phel::getDefinition("phel\\core", "next"))($__phel_1587_1592);
                  $v_1596 = $__phel_1588_1594;
                  (\Phel::getDefinition("phel\\core", "swap!"))($__phel_1580_1584, new class($m, $f, $__phel_1580_1584, $__phel_1582, $__phel_1583, $__phel_1585_1590, $__phel_1586_1591, $__phel_1587_1592, $k_1593, $__phel_1588_1594, $__phel_1589_1595, $v_1596) extends \Phel\Lang\AbstractFn {
                    public const BOUND_TO = "phel\\core\\update_vals";
                    private $m;
                    private $f;
                    private $__phel_1580_1584;
                    private $__phel_1582;
                    private $__phel_1583;
                    private $__phel_1585_1590;
                    private $__phel_1586_1591;
                    private $__phel_1587_1592;
                    private $k_1593;
                    private $__phel_1588_1594;
                    private $__phel_1589_1595;
                    private $v_1596;

                    public function __construct($m, $f, $__phel_1580_1584, $__phel_1582, $__phel_1583, $__phel_1585_1590, $__phel_1586_1591, $__phel_1587_1592, $k_1593, $__phel_1588_1594, $__phel_1589_1595, $v_1596) {
                      $this->m = $m;
                      $this->f = $f;
                      $this->__phel_1580_1584 = $__phel_1580_1584;
                      $this->__phel_1582 = $__phel_1582;
                      $this->__phel_1583 = $__phel_1583;
                      $this->__phel_1585_1590 = $__phel_1585_1590;
                      $this->__phel_1586_1591 = $__phel_1586_1591;
                      $this->__phel_1587_1592 = $__phel_1587_1592;
                      $this->k_1593 = $k_1593;
                      $this->__phel_1588_1594 = $__phel_1588_1594;
                      $this->__phel_1589_1595 = $__phel_1589_1595;
                      $this->v_1596 = $v_1596;
                    }

                    public function __invoke($acc) {
                      $m = $this->m;
                      $f = $this->f;
                      $__phel_1580_1584 = $this->__phel_1580_1584;
                      $__phel_1582 = $this->__phel_1582;
                      $__phel_1583 = $this->__phel_1583;
                      $__phel_1585_1590 = $this->__phel_1585_1590;
                      $__phel_1586_1591 = $this->__phel_1586_1591;
                      $__phel_1587_1592 = $this->__phel_1587_1592;
                      $k_1593 = $this->k_1593;
                      $__phel_1588_1594 = $this->__phel_1588_1594;
                      $__phel_1589_1595 = $this->__phel_1589_1595;
                      $v_1596 = $this->v_1596;
                      return (\Phel::getDefinition("phel\\core", "assoc"))($acc, $k_1593, ($f)($v_1596));
                    }
                  });
                }
                return (\Phel::getDefinition("phel\\core", "deref"))($__phel_1580_1584);
              }
            },
            \Phel::map(
              \Phel::keyword("doc"), "```phel\n(update-vals m f)\n```\nReturns a map with `f` applied to each value.",
              \Phel::keyword("example"), "(update-vals {:a 1 :b 2} inc) ; => {:a 2 :b 3}",
              \Phel::keyword("see-also"), \Phel::vector(["update-keys", "values", "update"]),
              \Phel::keyword("start-location"), \Phel::map(
                \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
                \Phel::keyword("line"), 3970,
                \Phel::keyword("column"), 0
              ),
              \Phel::keyword("end-location"), \Phel::map(
                \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
                \Phel::keyword("line"), 3977,
                \Phel::keyword("column"), 25
              ),
              "min-arity", 2,
              "is-variadic", false,
              "arglists", "[m f]"
            )
          );
          \Phel::addDefinition(
            "phel\\core",
            "parse-long",
            new class() extends \Phel\Lang\AbstractFn {
              public const BOUND_TO = "phel\\core\\parse_long";

              public function __invoke($s) {
                if (($__truthy = (\Phel::getDefinition("phel\\core", "string?"))($s)) !== null && $__truthy !== false) {
                  $trimmed_1597 = trim($s);
                  if (($__truthy = (\Phel::getDefinition("phel\\core", "="))(1, preg_match("/^[+-]?[0-9]+\$/", $trimmed_1597))) !== null && $__truthy !== false) {
                    return intval($trimmed_1597);
                  } else {
                    return null;
                  }

                } else {
                  return null;
                }

              }
            },
            \Phel::map(
              \Phel::keyword("doc"), "```phel\n(parse-long s)\n```\nParses a string as an integer. Returns nil if parsing fails.",
              \Phel::keyword("example"), "(parse-long \"123\") ; => 123",
              \Phel::keyword("see-also"), \Phel::vector(["parse-double"]),
              \Phel::keyword("start-location"), \Phel::map(
                \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
                \Phel::keyword("line"), 3981,
                \Phel::keyword("column"), 0
              ),
              \Phel::keyword("end-location"), \Phel::map(
                \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
                \Phel::keyword("line"), 3989,
                \Phel::keyword("column"), 32
              ),
              "min-arity", 1,
              "is-variadic", false,
              "arglists", "[s]"
            )
          );
          \Phel::addDefinition(
            "phel\\core",
            "parse-double",
            new class() extends \Phel\Lang\AbstractFn {
              public const BOUND_TO = "phel\\core\\parse_double";

              public function __invoke($s) {
                if (($__truthy = (\Phel::getDefinition("phel\\core", "string?"))($s)) !== null && $__truthy !== false) {
                  $trimmed_1598 = trim($s);
                  if (($__truthy = is_numeric($trimmed_1598)) !== null && $__truthy !== false) {
                    return floatval($trimmed_1598);
                  } else {
                    return null;
                  }

                } else {
                  return null;
                }

              }
            },
            \Phel::map(
              \Phel::keyword("doc"), "```phel\n(parse-double s)\n```\nParses a string as a float. Returns nil if parsing fails.",
              \Phel::keyword("example"), "(parse-double \"3.14\") ; => 3.14",
              \Phel::keyword("see-also"), \Phel::vector(["parse-long"]),
              \Phel::keyword("start-location"), \Phel::map(
                \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
                \Phel::keyword("line"), 3991,
                \Phel::keyword("column"), 0
              ),
              \Phel::keyword("end-location"), \Phel::map(
                \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
                \Phel::keyword("line"), 3999,
                \Phel::keyword("column"), 34
              ),
              "min-arity", 1,
              "is-variadic", false,
              "arglists", "[s]"
            )
          );
          \Phel::addDefinition(
            "phel\\core",
            "parse-boolean",
            new class() extends \Phel\Lang\AbstractFn {
              public const BOUND_TO = "phel\\core\\parse_boolean";

              public function __invoke($s) {
                if (($__truthy = (\Phel::getDefinition("phel\\core", "string?"))($s)) !== null && $__truthy !== false) {
                  $lower_1599 = strtolower(trim($s));
                  if (($__truthy = (\Phel::getDefinition("phel\\core", "="))($lower_1599, "true")) !== null && $__truthy !== false) {
                    return true;
                  } else {
                    if (($__truthy = (\Phel::getDefinition("phel\\core", "="))($lower_1599, "false")) !== null && $__truthy !== false) {
                      return false;
                    } else {
                      return null;
                    }

                  }

                } else {
                  return null;
                }

              }
            },
            \Phel::map(
              \Phel::keyword("doc"), "```phel\n(parse-boolean s)\n```\nParses a string as a boolean. Returns true for \"true\", false for \"false\", nil otherwise.",
              \Phel::keyword("example"), "(parse-boolean \"true\") ; => true",
              \Phel::keyword("start-location"), \Phel::map(
                \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
                \Phel::keyword("line"), 4001,
                \Phel::keyword("column"), 0
              ),
              \Phel::keyword("end-location"), \Phel::map(
                \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
                \Phel::keyword("line"), 4009,
                \Phel::keyword("column"), 35
              ),
              "min-arity", 1,
              "is-variadic", false,
              "arglists", "[s]"
            )
          );
          \Phel::addDefinition(
            "phel\\core",
            "random-uuid",
            new class() extends \Phel\Lang\AbstractFn {
              public const BOUND_TO = "phel\\core\\random_uuid";

              public function __invoke() {
                $bytes_1600 = random_bytes(16);
                ($bytes_1600)[(6)] = chr((function() use($bytes_1600) {
                  (\Phel::getDefinition("phel\\core", "assert-non-nil"))((function() use($bytes_1600) {
                    (\Phel::getDefinition("phel\\core", "assert-non-nil"))(ord((($bytes_1600)[(6)] ?? null)), 15);
                    return (ord((($bytes_1600)[(6)] ?? null)) & 15);
                  })(), 64);
                  return ((function() use($bytes_1600) {
                    (\Phel::getDefinition("phel\\core", "assert-non-nil"))(ord((($bytes_1600)[(6)] ?? null)), 15);
                    return (ord((($bytes_1600)[(6)] ?? null)) & 15);
                  })() | 64);
                })());
                ($bytes_1600)[(8)] = chr((function() use($bytes_1600) {
                  (\Phel::getDefinition("phel\\core", "assert-non-nil"))((function() use($bytes_1600) {
                    (\Phel::getDefinition("phel\\core", "assert-non-nil"))(ord((($bytes_1600)[(8)] ?? null)), 63);
                    return (ord((($bytes_1600)[(8)] ?? null)) & 63);
                  })(), 128);
                  return ((function() use($bytes_1600) {
                    (\Phel::getDefinition("phel\\core", "assert-non-nil"))(ord((($bytes_1600)[(8)] ?? null)), 63);
                    return (ord((($bytes_1600)[(8)] ?? null)) & 63);
                  })() | 128);
                })());
                $hex_1601 = bin2hex($bytes_1600);
                return (substr($hex_1601, 0, 8) . "-" . substr($hex_1601, 8, 4) . "-" . substr($hex_1601, 12, 4) . "-" . substr($hex_1601, 16, 4) . "-" . substr($hex_1601, 20, 12));
              }
            },
            \Phel::map(
              \Phel::keyword("doc"), "```phel\n(random-uuid)\n```\nReturns a random UUID v4 string.",
              \Phel::keyword("example"), "(random-uuid) ; => \"550e8400-e29b-41d4-a716-446655440000\"",
              \Phel::keyword("start-location"), \Phel::map(
                \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
                \Phel::keyword("line"), 4011,
                \Phel::keyword("column"), 0
              ),
              \Phel::keyword("end-location"), \Phel::map(
                \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/core.phel",
                \Phel::keyword("line"), 4026,
                \Phel::keyword("column"), 33
              ),
              "min-arity", 0,
              "is-variadic", false,
              "arglists", "[]"
            )
          );
