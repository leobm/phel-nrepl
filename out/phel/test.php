<?php declare(strict_types=1);
namespace phel\test;
require_once __DIR__ . '/../phel/core.php';
require_once __DIR__ . '/../phel/str.php';
\Phel::addDefinition(
  "phel\\core",
  "*file*",
  "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/test.phel"
);
\Phel::addDefinition(
  "phel\\core",
  "*ns*",
  "phel\\test"
);
\Phel::addDefinition(
  "phel\\test",
  "testdox?",
  (\Phel::getDefinition("phel\\core", "var"))(false),
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/test.phel",
      \Phel::keyword("line"), 12,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/test.phel",
      \Phel::keyword("line"), 12,
      \Phel::keyword("column"), 27
    )
  )
);
\Phel::addDefinition(
  "phel\\test",
  "fail-fast?",
  (\Phel::getDefinition("phel\\core", "var"))(false),
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/test.phel",
      \Phel::keyword("line"), 14,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/test.phel",
      \Phel::keyword("line"), 14,
      \Phel::keyword("column"), 29
    )
  )
);
\Phel::addDefinition(
  "phel\\test",
  "*current-test-name*",
  null,
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/test.phel",
      \Phel::keyword("line"), 16,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/test.phel",
      \Phel::keyword("line"), 16,
      \Phel::keyword("column"), 30
    )
  )
);
\Phel::addDefinition(
  "phel\\test",
  "stats",
  (\Phel::getDefinition("phel\\core", "var"))(\Phel::map(
    \Phel::keyword("failed"), \Phel::vector([]),
    \Phel::keyword("counts"), \Phel::map(
      \Phel::keyword("failed"), 0,
      \Phel::keyword("error"), 0,
      \Phel::keyword("pass"), 0,
      \Phel::keyword("total"), 0
    )
  )),
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/test.phel",
      \Phel::keyword("line"), 18,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/test.phel",
      \Phel::keyword("line"), 22,
      \Phel::keyword("column"), 39
    )
  )
);
\Phel::addDefinition(
  "phel\\test",
  "print-report-testdox-state",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\test\\print_report_testdox_state";

    public function __invoke($data, $state) {
      $s_1731 = (function() use($data,$state) {
        $__phel_1732_1733 = $state;
        if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_1732_1733, \Phel::keyword("failed"))) !== null && $__truthy !== false) {
          return "✘";
        } else {
          $__phel_1734_1735 = $__phel_1732_1733;
          if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_1734_1735, \Phel::keyword("pass"))) !== null && $__truthy !== false) {
            return "✔";
          } else {
            $__phel_1736_1737 = $__phel_1734_1735;
            if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_1736_1737, \Phel::keyword("error"))) !== null && $__truthy !== false) {
              return "E";
            } else {
              return null;
            }

          }

        }

      })();
      $message_1738 = (\Phel::getDefinition("phel\\core", "str"))(\Phel::getDefinition("phel\\test", "*current-test-name*"), ": ", (function() use($data,$state,$s_1731) {
        $__phel_1739_1740 = (\Phel::keyword("message"))($data);
        if (($__truthy = $__phel_1739_1740) !== null && $__truthy !== false) {
          return $__phel_1739_1740;
        } else {
          return "no test message found";
        }

      })());
      return (\Phel::getDefinition("phel\\core", "println"))($s_1731, $message_1738);
    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(print-report-testdox-state data state)\n```\n",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/test.phel",
      \Phel::keyword("line"), 24,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/test.phel",
      \Phel::keyword("line"), 27,
      \Phel::keyword("column"), 25
    ),
    "min-arity", 2,
    "is-variadic", false,
    "arglists", "[data state]"
  )
);
\Phel::addDefinition(
  "phel\\test",
  "print-report-state",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\test\\print_report_state";

    public function __invoke($state) {
      return (\Phel::getDefinition("phel\\core", "print"))((function() use($state) {
        $__phel_1741_1742 = $state;
        if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_1741_1742, \Phel::keyword("failed"))) !== null && $__truthy !== false) {
          return "F";
        } else {
          $__phel_1743_1744 = $__phel_1741_1742;
          if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_1743_1744, \Phel::keyword("pass"))) !== null && $__truthy !== false) {
            return ".";
          } else {
            $__phel_1745_1746 = $__phel_1743_1744;
            if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_1745_1746, \Phel::keyword("error"))) !== null && $__truthy !== false) {
              return "E";
            } else {
              return null;
            }

          }

        }

      })());
    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(print-report-state state)\n```\n",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/test.phel",
      \Phel::keyword("line"), 29,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/test.phel",
      \Phel::keyword("line"), 30,
      \Phel::keyword("column"), 56
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[state]"
  )
);
\Phel::addDefinition(
  "phel\\test",
  "should-report-println?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\test\\should_report_println?";

    public function __invoke($total_columns) {
      return (\Phel::getDefinition("phel\\core", "="))((function() use($total_columns) {
        (\Phel::getDefinition("phel\\core", "assert-non-nil"))((\Phel::getDefinition("phel\\core", "get-in"))((\Phel::getDefinition("phel\\core", "deref"))(\Phel::getDefinition("phel\\test", "stats")), \Phel::vector([\Phel::keyword("counts"), \Phel::keyword("total")])), $total_columns);
        return ((\Phel::getDefinition("phel\\core", "get-in"))((\Phel::getDefinition("phel\\core", "deref"))(\Phel::getDefinition("phel\\test", "stats")), \Phel::vector([\Phel::keyword("counts"), \Phel::keyword("total")])) % $total_columns);
      })(), 0);
    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(should-report-println? total-columns)\n```\n",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/test.phel",
      \Phel::keyword("line"), 32,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/test.phel",
      \Phel::keyword("line"), 33,
      \Phel::keyword("column"), 66
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[total-columns]"
  )
);
\Phel::addDefinition(
  "phel\\test",
  "should-stop?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\test\\should_stop?";

    public function __invoke() {
      $__phel_1747_1748 = (\Phel::getDefinition("phel\\core", "deref"))(\Phel::getDefinition("phel\\test", "fail-fast?"));
      if (($__truthy = $__phel_1747_1748) !== null && $__truthy !== false) {
        $__phel_1749_1752 = (\Phel::getDefinition("phel\\core", "get"))((\Phel::getDefinition("phel\\core", "deref"))(\Phel::getDefinition("phel\\test", "stats")), \Phel::keyword("counts"));
        $__phel_1750_1753 = (($__phel_1749_1752)[(\Phel::keyword("failed"))] ?? null);
        $f_1754 = $__phel_1750_1753;
        $__phel_1751_1755 = (($__phel_1749_1752)[(\Phel::keyword("error"))] ?? null);
        $e_1756 = $__phel_1751_1755;
        return (\Phel::getDefinition("phel\\core", "pos?"))((function() use($__phel_1747_1748,$__phel_1749_1752,$__phel_1750_1753,$f_1754,$__phel_1751_1755,$e_1756) {
          (\Phel::getDefinition("phel\\core", "assert-non-nil"))($f_1754, $e_1756);
          return ($f_1754 + $e_1756);
        })());
      } else {
        return $__phel_1747_1748;
      }

    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(should-stop?)\n```\n",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/test.phel",
      \Phel::keyword("line"), 35,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/test.phel",
      \Phel::keyword("line"), 38,
      \Phel::keyword("column"), 26
    ),
    "min-arity", 0,
    "is-variadic", false,
    "arglists", "[]"
  )
);
\Phel::addDefinition(
  "phel\\test",
  "report",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\test\\report";

    public function __invoke($data) {
      $__phel_1757_1760 = $data;
      $__phel_1758_1761 = (($__phel_1757_1760)[(\Phel::keyword("state"))] ?? null);
      $state_1762 = $__phel_1758_1761;
      $__phel_1759_1763 = (($__phel_1757_1760)[(\Phel::keyword("type"))] ?? null);
      $type_1764 = $__phel_1759_1763;
      $ok_1765 = (\Phel::getDefinition("phel\\core", "="))($state_1762, \Phel::keyword("pass"));
      $total_columns_1766 = 80;
      if (($__truthy = (\Phel::getDefinition("phel\\core", "deref"))(\Phel::getDefinition("phel\\test", "testdox?"))) !== null && $__truthy !== false) {
        (\Phel::getDefinition("phel\\test", "print-report-testdox-state"))($data, $state_1762);
      } else {
        (\Phel::getDefinition("phel\\test", "print-report-state"))($state_1762);
      }

      (\Phel::getDefinition("phel\\core", "swap!"))(\Phel::getDefinition("phel\\test", "stats"), \Phel::getDefinition("phel\\core", "update-in"), \Phel::vector([\Phel::keyword("counts"), \Phel::keyword("total")]), \Phel::getDefinition("phel\\core", "inc"));
      (\Phel::getDefinition("phel\\core", "swap!"))(\Phel::getDefinition("phel\\test", "stats"), \Phel::getDefinition("phel\\core", "update-in"), \Phel::vector([\Phel::keyword("counts"), $state_1762]), \Phel::getDefinition("phel\\core", "inc"));
      if (($__truthy = (\Phel::getDefinition("phel\\test", "should-report-println?"))($total_columns_1766)) !== null && $__truthy !== false) {
        (\Phel::getDefinition("phel\\core", "println"))();
      } else {

      }

      if (($__truthy = $ok_1765) !== null && $__truthy !== false) {
        return null;
      } else {
        return (\Phel::getDefinition("phel\\core", "swap!"))(\Phel::getDefinition("phel\\test", "stats"), \Phel::getDefinition("phel\\core", "update-in"), \Phel::vector([\Phel::keyword("failed")]), \Phel::getDefinition("phel\\core", "push"), $data);
      }

    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(report data)\n```\nRecords test results and prints status indicators.",
    \Phel::keyword("example"), "(report {:state :pass})",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/test.phel",
      \Phel::keyword("line"), 40,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/test.phel",
      \Phel::keyword("line"), 54,
      \Phel::keyword("column"), 52
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[data]"
  )
);
\Phel::addDefinition(
  "phel\\test",
  "location",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\test\\location";

    public function __invoke($form) {
      $loc_1767 = (function() use($form) {
        $target_1768 = $form;
        return $target_1768->getStartLocation();
      })();
      if (($__truthy = $loc_1767) !== null && $__truthy !== false) {
        return \Phel::map(
          \Phel::keyword("file"), (function() use($form,$loc_1767) {
            $target_1769 = $loc_1767;
            return $target_1769->getFile();
          })(),
          \Phel::keyword("line"), (function() use($form,$loc_1767) {
            $target_1770 = $loc_1767;
            return $target_1770->getLine();
          })(),
          \Phel::keyword("column"), (function() use($form,$loc_1767) {
            $target_1771 = $loc_1767;
            return $target_1771->getColumn();
          })()
        );
      } else {
        return null;
      }

    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(location form)\n```\n",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/test.phel",
      \Phel::keyword("line"), 61,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/test.phel",
      \Phel::keyword("line"), 66,
      \Phel::keyword("column"), 43
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[form]"
  )
);
\Phel::addDefinition(
  "phel\\test",
  "assert-predicate",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\test\\assert_predicate";

    public function __invoke($form, $message, $negated) {
      $pred_1776 = (\Phel::getDefinition("phel\\core", "first"))($form);
      $value_1777 = (\Phel::getDefinition("phel\\core", "second"))($form);
      $value_evaluated_1778 = (\Phel::getDefinition("phel\\core", "gensym"))();
      $type_1779 = (($__truthy = $negated) !== null && $__truthy !== false ? \Phel::keyword("predicate-not") : \Phel::keyword("predicate"));
      $loc_1780 = (\Phel::getDefinition("phel\\test", "location"))($form);
      $result_1781 = (\Phel::getDefinition("phel\\core", "gensym"))();
      $report_data_1782 = (\Phel::getDefinition("phel\\core", "gensym"))();
      return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("let"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "vector"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))($value_evaluated_1778), (\Phel::getDefinition("phel\\core", "list"))($value_1777), (\Phel::getDefinition("phel\\core", "list"))($result_1781), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))($pred_1776), (\Phel::getDefinition("phel\\core", "list"))($value_evaluated_1778))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))($result_1781), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("if"))), (\Phel::getDefinition("phel\\core", "list"))($negated), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/not"))), (\Phel::getDefinition("phel\\core", "list"))($result_1781))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))($result_1781))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))($report_data_1782), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "hash-map"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))(\Phel::keyword("type")), (\Phel::getDefinition("phel\\core", "list"))($type_1779), (\Phel::getDefinition("phel\\core", "list"))(\Phel::keyword("message")), (\Phel::getDefinition("phel\\core", "list"))($message), (\Phel::getDefinition("phel\\core", "list"))(\Phel::keyword("location")), (\Phel::getDefinition("phel\\core", "list"))($loc_1780), (\Phel::getDefinition("phel\\core", "list"))(\Phel::keyword("pred")), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("quote"))), (\Phel::getDefinition("phel\\core", "list"))($pred_1776))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))(\Phel::keyword("value")), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("quote"))), (\Phel::getDefinition("phel\\core", "list"))($value_1777))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))(\Phel::keyword("form")), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("quote"))), (\Phel::getDefinition("phel\\core", "list"))($form))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))(\Phel::keyword("result")), (\Phel::getDefinition("phel\\core", "list"))($value_evaluated_1778))) ?? []))))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("if"))), (\Phel::getDefinition("phel\\core", "list"))($result_1781), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\test/report"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/merge"))), (\Phel::getDefinition("phel\\core", "list"))($report_data_1782), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "hash-map"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))(\Phel::keyword("state")), (\Phel::getDefinition("phel\\core", "list"))(\Phel::keyword("pass")))) ?? []))))) ?? []))))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\test/report"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/merge"))), (\Phel::getDefinition("phel\\core", "list"))($report_data_1782), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "hash-map"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))(\Phel::keyword("state")), (\Phel::getDefinition("phel\\core", "list"))(\Phel::keyword("failed")))) ?? []))))) ?? []))))) ?? []))))) ?? []))))) ?? []));
    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(assert-predicate form message negated)\n```\n",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/test.phel",
      \Phel::keyword("line"), 68,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/test.phel",
      \Phel::keyword("line"), 88,
      \Phel::keyword("column"), 59
    ),
    "min-arity", 3,
    "is-variadic", false,
    "arglists", "[form message negated]"
  )
);
\Phel::addDefinition(
  "phel\\test",
  "assert-binary",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\test\\assert_binary";

    public function __invoke($form, $message, $negated) {
      $pred_1783 = (\Phel::getDefinition("phel\\core", "first"))($form);
      $expected_1784 = (\Phel::getDefinition("phel\\core", "second"))($form);
      $actual_1785 = (\Phel::getDefinition("phel\\core", "second"))((\Phel::getDefinition("phel\\core", "next"))($form));
      $type_1786 = (($__truthy = $negated) !== null && $__truthy !== false ? \Phel::keyword("binary") : \Phel::keyword("binary-not"));
      $loc_1787 = (\Phel::getDefinition("phel\\test", "location"))($form);
      $expected_evaluated_1788 = (\Phel::getDefinition("phel\\core", "gensym"))();
      $actual_evaluated_1789 = (\Phel::getDefinition("phel\\core", "gensym"))();
      $result_1790 = (\Phel::getDefinition("phel\\core", "gensym"))();
      $report_data_1791 = (\Phel::getDefinition("phel\\core", "gensym"))();
      return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("let"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "vector"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))($expected_evaluated_1788), (\Phel::getDefinition("phel\\core", "list"))($expected_1784), (\Phel::getDefinition("phel\\core", "list"))($actual_evaluated_1789), (\Phel::getDefinition("phel\\core", "list"))($actual_1785), (\Phel::getDefinition("phel\\core", "list"))($result_1790), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))($pred_1783), (\Phel::getDefinition("phel\\core", "list"))($expected_evaluated_1788), (\Phel::getDefinition("phel\\core", "list"))($actual_evaluated_1789))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))($result_1790), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("if"))), (\Phel::getDefinition("phel\\core", "list"))($negated), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/not"))), (\Phel::getDefinition("phel\\core", "list"))($result_1790))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))($result_1790))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))($report_data_1791), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "hash-map"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))(\Phel::keyword("type")), (\Phel::getDefinition("phel\\core", "list"))($type_1786), (\Phel::getDefinition("phel\\core", "list"))(\Phel::keyword("message")), (\Phel::getDefinition("phel\\core", "list"))($message), (\Phel::getDefinition("phel\\core", "list"))(\Phel::keyword("location")), (\Phel::getDefinition("phel\\core", "list"))($loc_1787), (\Phel::getDefinition("phel\\core", "list"))(\Phel::keyword("pred")), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("quote"))), (\Phel::getDefinition("phel\\core", "list"))($pred_1783))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))(\Phel::keyword("expected")), (\Phel::getDefinition("phel\\core", "list"))($expected_evaluated_1788), (\Phel::getDefinition("phel\\core", "list"))(\Phel::keyword("actual")), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("quote"))), (\Phel::getDefinition("phel\\core", "list"))($actual_1785))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))(\Phel::keyword("form")), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("quote"))), (\Phel::getDefinition("phel\\core", "list"))($form))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))(\Phel::keyword("result")), (\Phel::getDefinition("phel\\core", "list"))($actual_evaluated_1789))) ?? []))))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("if"))), (\Phel::getDefinition("phel\\core", "list"))($result_1790), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\test/report"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/merge"))), (\Phel::getDefinition("phel\\core", "list"))($report_data_1791), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "hash-map"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))(\Phel::keyword("type")), (\Phel::getDefinition("phel\\core", "list"))(\Phel::keyword("binary")), (\Phel::getDefinition("phel\\core", "list"))(\Phel::keyword("state")), (\Phel::getDefinition("phel\\core", "list"))(\Phel::keyword("pass")))) ?? []))))) ?? []))))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\test/report"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/merge"))), (\Phel::getDefinition("phel\\core", "list"))($report_data_1791), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "hash-map"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))(\Phel::keyword("type")), (\Phel::getDefinition("phel\\core", "list"))(\Phel::keyword("binary")), (\Phel::getDefinition("phel\\core", "list"))(\Phel::keyword("state")), (\Phel::getDefinition("phel\\core", "list"))(\Phel::keyword("failed")))) ?? []))))) ?? []))))) ?? []))))) ?? []))))) ?? []));
    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(assert-binary form message negated)\n```\n",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/test.phel",
      \Phel::keyword("line"), 90,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/test.phel",
      \Phel::keyword("line"), 114,
      \Phel::keyword("column"), 73
    ),
    "min-arity", 3,
    "is-variadic", false,
    "arglists", "[form message negated]"
  )
);
\Phel::addDefinition(
  "phel\\test",
  "assert-output",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\test\\assert_output";

    public function __invoke($form, $message) {
      $expected_1792 = (\Phel::getDefinition("phel\\core", "second"))($form);
      $body_1793 = (\Phel::getDefinition("phel\\core", "second"))((\Phel::getDefinition("phel\\core", "next"))($form));
      return (\Phel::getDefinition("phel\\test", "assert-binary"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/="))), (\Phel::getDefinition("phel\\core", "list"))($expected_1792), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/with-output-buffer"))), (\Phel::getDefinition("phel\\core", "list"))($body_1793))) ?? []))))) ?? [])), $message, false);
    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(assert-output form message)\n```\n",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/test.phel",
      \Phel::keyword("line"), 116,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/test.phel",
      \Phel::keyword("line"), 119,
      \Phel::keyword("column"), 77
    ),
    "min-arity", 2,
    "is-variadic", false,
    "arglists", "[form message]"
  )
);
\Phel::addDefinition(
  "phel\\test",
  "assert-thrown",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\test\\assert_thrown";

    public function __invoke($form, $message) {
      $exception_symbol_1794 = (\Phel::getDefinition("phel\\core", "second"))($form);
      $body_1795 = (\Phel::getDefinition("phel\\core", "nnext"))($form);
      $loc_1796 = (\Phel::getDefinition("phel\\test", "location"))($form);
      $report_data_1797 = (\Phel::getDefinition("phel\\core", "gensym"))();
      $e_1798 = (\Phel::getDefinition("phel\\core", "gensym"))();
      return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("let"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "vector"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))($report_data_1797), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "hash-map"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))(\Phel::keyword("type")), (\Phel::getDefinition("phel\\core", "list"))(\Phel::keyword("thrown")), (\Phel::getDefinition("phel\\core", "list"))(\Phel::keyword("location")), (\Phel::getDefinition("phel\\core", "list"))($loc_1796), (\Phel::getDefinition("phel\\core", "list"))(\Phel::keyword("form")), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("quote"))), (\Phel::getDefinition("phel\\core", "list"))($form))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))(\Phel::keyword("exception-symbol")), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "str"))($exception_symbol_1794)), (\Phel::getDefinition("phel\\core", "list"))(\Phel::keyword("message")), (\Phel::getDefinition("phel\\core", "list"))($message))) ?? []))))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("try"))), $body_1795, (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\test/report"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/merge"))), (\Phel::getDefinition("phel\\core", "list"))($report_data_1797), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "hash-map"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))(\Phel::keyword("state")), (\Phel::getDefinition("phel\\core", "list"))(\Phel::keyword("failed")))) ?? []))))) ?? []))))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("catch"))), (\Phel::getDefinition("phel\\core", "list"))($exception_symbol_1794), (\Phel::getDefinition("phel\\core", "list"))($e_1798), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\test/report"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/merge"))), (\Phel::getDefinition("phel\\core", "list"))($report_data_1797), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "hash-map"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))(\Phel::keyword("state")), (\Phel::getDefinition("phel\\core", "list"))(\Phel::keyword("pass")))) ?? []))))) ?? []))))) ?? []))))) ?? []))))) ?? []))))) ?? []));
    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(assert-thrown form message)\n```\n",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/test.phel",
      \Phel::keyword("line"), 121,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/test.phel",
      \Phel::keyword("line"), 136,
      \Phel::keyword("column"), 60
    ),
    "min-arity", 2,
    "is-variadic", false,
    "arglists", "[form message]"
  )
);
\Phel::addDefinition(
  "phel\\test",
  "assert-thrown-with-msg",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\test\\assert_thrown_with_msg";

    public function __invoke($form, $message) {
      $exception_symbol_1799 = (\Phel::getDefinition("phel\\core", "second"))($form);
      $expected_message_1800 = (\Phel::getDefinition("phel\\core", "second"))((\Phel::getDefinition("phel\\core", "next"))($form));
      $body_1801 = (\Phel::getDefinition("phel\\core", "next"))((\Phel::getDefinition("phel\\core", "nnext"))($form));
      $loc_1802 = (\Phel::getDefinition("phel\\test", "location"))($form);
      $actual_message_1803 = (\Phel::getDefinition("phel\\core", "gensym"))();
      $report_data_1804 = (\Phel::getDefinition("phel\\core", "gensym"))();
      $e_1805 = (\Phel::getDefinition("phel\\core", "gensym"))();
      return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("let"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "vector"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))($report_data_1804), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "hash-map"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))(\Phel::keyword("type")), (\Phel::getDefinition("phel\\core", "list"))(\Phel::keyword("thrown-with-msg")), (\Phel::getDefinition("phel\\core", "list"))(\Phel::keyword("form")), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("quote"))), (\Phel::getDefinition("phel\\core", "list"))($form))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))(\Phel::keyword("location")), (\Phel::getDefinition("phel\\core", "list"))($loc_1802), (\Phel::getDefinition("phel\\core", "list"))(\Phel::keyword("exception-symbol")), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "str"))($exception_symbol_1799)), (\Phel::getDefinition("phel\\core", "list"))(\Phel::keyword("expected-message")), (\Phel::getDefinition("phel\\core", "list"))($expected_message_1800), (\Phel::getDefinition("phel\\core", "list"))(\Phel::keyword("message")), (\Phel::getDefinition("phel\\core", "list"))($message))) ?? []))))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("try"))), $body_1801, (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\test/report"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/merge"))), (\Phel::getDefinition("phel\\core", "list"))($report_data_1804), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "hash-map"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))(\Phel::keyword("state")), (\Phel::getDefinition("phel\\core", "list"))(\Phel::keyword("failed")), (\Phel::getDefinition("phel\\core", "list"))(\Phel::keyword("actual-message")), (\Phel::getDefinition("phel\\core", "list"))(null))) ?? []))))) ?? []))))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("catch"))), (\Phel::getDefinition("phel\\core", "list"))($exception_symbol_1799), (\Phel::getDefinition("phel\\core", "list"))($e_1805), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("let"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "vector"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))($actual_message_1803), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("php/->"))), (\Phel::getDefinition("phel\\core", "list"))($e_1805), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("getMessage"))))) ?? []))))) ?? []))))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("if"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/="))), (\Phel::getDefinition("phel\\core", "list"))($expected_message_1800), (\Phel::getDefinition("phel\\core", "list"))($actual_message_1803))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\test/report"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/merge"))), (\Phel::getDefinition("phel\\core", "list"))($report_data_1804), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "hash-map"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))(\Phel::keyword("state")), (\Phel::getDefinition("phel\\core", "list"))(\Phel::keyword("pass")), (\Phel::getDefinition("phel\\core", "list"))(\Phel::keyword("actual-message")), (\Phel::getDefinition("phel\\core", "list"))($actual_message_1803))) ?? []))))) ?? []))))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\test/report"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/merge"))), (\Phel::getDefinition("phel\\core", "list"))($report_data_1804), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "hash-map"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))(\Phel::keyword("state")), (\Phel::getDefinition("phel\\core", "list"))(\Phel::keyword("failed")), (\Phel::getDefinition("phel\\core", "list"))(\Phel::keyword("actual-message")), (\Phel::getDefinition("phel\\core", "list"))($actual_message_1803))) ?? []))))) ?? []))))) ?? []))))) ?? []))))) ?? []))))) ?? []))))) ?? []))))) ?? []));
    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(assert-thrown-with-msg form message)\n```\n",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/test.phel",
      \Phel::keyword("line"), 138,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/test.phel",
      \Phel::keyword("line"), 159,
      \Phel::keyword("column"), 100
    ),
    "min-arity", 2,
    "is-variadic", false,
    "arglists", "[form message]"
  )
);
\Phel::addDefinition(
  "phel\\test",
  "assert-any",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\test\\assert_any";

    public function __invoke($form, $message) {
      $loc_1806 = (\Phel::getDefinition("phel\\test", "location"))($form);
      $result_1807 = (\Phel::getDefinition("phel\\core", "gensym"))();
      $report_data_1808 = (\Phel::getDefinition("phel\\core", "gensym"))();
      return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("let"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "vector"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))($result_1807), (\Phel::getDefinition("phel\\core", "list"))($form), (\Phel::getDefinition("phel\\core", "list"))($report_data_1808), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "hash-map"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))(\Phel::keyword("type")), (\Phel::getDefinition("phel\\core", "list"))(\Phel::keyword("any")), (\Phel::getDefinition("phel\\core", "list"))(\Phel::keyword("message")), (\Phel::getDefinition("phel\\core", "list"))($message), (\Phel::getDefinition("phel\\core", "list"))(\Phel::keyword("location")), (\Phel::getDefinition("phel\\core", "list"))($loc_1806), (\Phel::getDefinition("phel\\core", "list"))(\Phel::keyword("form")), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("quote"))), (\Phel::getDefinition("phel\\core", "list"))($form))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))(\Phel::keyword("result")), (\Phel::getDefinition("phel\\core", "list"))($result_1807))) ?? []))))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("if"))), (\Phel::getDefinition("phel\\core", "list"))($result_1807), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\test/report"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/merge"))), (\Phel::getDefinition("phel\\core", "list"))($report_data_1808), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "hash-map"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))(\Phel::keyword("state")), (\Phel::getDefinition("phel\\core", "list"))(\Phel::keyword("pass")))) ?? []))))) ?? []))))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\test/report"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/merge"))), (\Phel::getDefinition("phel\\core", "list"))($report_data_1808), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "hash-map"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))(\Phel::keyword("state")), (\Phel::getDefinition("phel\\core", "list"))(\Phel::keyword("failed")))) ?? []))))) ?? []))))) ?? []))))) ?? []))))) ?? []));
    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(assert-any form message)\n```\n",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/test.phel",
      \Phel::keyword("line"), 161,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/test.phel",
      \Phel::keyword("line"), 173,
      \Phel::keyword("column"), 59
    ),
    "min-arity", 2,
    "is-variadic", false,
    "arglists", "[form message]"
  )
);
\Phel::addDefinition(
  "phel\\test",
  "assert-expr",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\test\\assert_expr";

    public function __invoke($form, $message) {
      if (($__truthy = (function() use($form,$message) {
        $__phel_1809_1810 = (\Phel::getDefinition("phel\\core", "list?"))($form);
        if (($__truthy = $__phel_1809_1810) !== null && $__truthy !== false) {
          $__phel_1811_1812 = (\Phel::getDefinition("phel\\core", "="))((\Phel::getDefinition("phel\\core", "first"))($form), (\Phel\Lang\Symbol::create("not")));
          if (($__truthy = $__phel_1811_1812) !== null && $__truthy !== false) {
            $__phel_1813_1814 = (\Phel::getDefinition("phel\\core", "list?"))((\Phel::getDefinition("phel\\core", "second"))($form));
            if (($__truthy = $__phel_1813_1814) !== null && $__truthy !== false) {
              return (\Phel::getDefinition("phel\\core", "="))(3, (\Phel::getDefinition("phel\\core", "count"))((\Phel::getDefinition("phel\\core", "second"))($form)));
            } else {
              return $__phel_1813_1814;
            }

          } else {
            return $__phel_1811_1812;
          }

        } else {
          return $__phel_1809_1810;
        }

      })()) !== null && $__truthy !== false) {
        return (\Phel::getDefinition("phel\\test", "assert-binary"))((\Phel::getDefinition("phel\\core", "second"))($form), $message, true);
      } else {
        if (($__truthy = (function() use($form,$message) {
          $__phel_1815_1816 = (\Phel::getDefinition("phel\\core", "list?"))($form);
          if (($__truthy = $__phel_1815_1816) !== null && $__truthy !== false) {
            $__phel_1817_1818 = (\Phel::getDefinition("phel\\core", "="))((\Phel::getDefinition("phel\\core", "first"))($form), (\Phel\Lang\Symbol::create("not")));
            if (($__truthy = $__phel_1817_1818) !== null && $__truthy !== false) {
              $__phel_1819_1820 = (\Phel::getDefinition("phel\\core", "list?"))((\Phel::getDefinition("phel\\core", "second"))($form));
              if (($__truthy = $__phel_1819_1820) !== null && $__truthy !== false) {
                return (\Phel::getDefinition("phel\\core", "="))(2, (\Phel::getDefinition("phel\\core", "count"))((\Phel::getDefinition("phel\\core", "second"))($form)));
              } else {
                return $__phel_1819_1820;
              }

            } else {
              return $__phel_1817_1818;
            }

          } else {
            return $__phel_1815_1816;
          }

        })()) !== null && $__truthy !== false) {
          return (\Phel::getDefinition("phel\\test", "assert-predicate"))((\Phel::getDefinition("phel\\core", "second"))($form), $message, true);
        } else {
          if (($__truthy = (function() use($form,$message) {
            $__phel_1821_1822 = (\Phel::getDefinition("phel\\core", "list?"))($form);
            if (($__truthy = $__phel_1821_1822) !== null && $__truthy !== false) {
              return (\Phel::getDefinition("phel\\core", "="))((\Phel::getDefinition("phel\\core", "first"))($form), (\Phel\Lang\Symbol::create("thrown?")));
            } else {
              return $__phel_1821_1822;
            }

          })()) !== null && $__truthy !== false) {
            return (\Phel::getDefinition("phel\\test", "assert-thrown"))($form, $message);
          } else {
            if (($__truthy = (function() use($form,$message) {
              $__phel_1823_1824 = (\Phel::getDefinition("phel\\core", "list?"))($form);
              if (($__truthy = $__phel_1823_1824) !== null && $__truthy !== false) {
                return (\Phel::getDefinition("phel\\core", "="))((\Phel::getDefinition("phel\\core", "first"))($form), (\Phel\Lang\Symbol::create("thrown-with-msg?")));
              } else {
                return $__phel_1823_1824;
              }

            })()) !== null && $__truthy !== false) {
              return (\Phel::getDefinition("phel\\test", "assert-thrown-with-msg"))($form, $message);
            } else {
              if (($__truthy = (function() use($form,$message) {
                $__phel_1825_1826 = (\Phel::getDefinition("phel\\core", "list?"))($form);
                if (($__truthy = $__phel_1825_1826) !== null && $__truthy !== false) {
                  return (\Phel::getDefinition("phel\\core", "="))((\Phel::getDefinition("phel\\core", "first"))($form), (\Phel\Lang\Symbol::create("output?")));
                } else {
                  return $__phel_1825_1826;
                }

              })()) !== null && $__truthy !== false) {
                return (\Phel::getDefinition("phel\\test", "assert-output"))($form, $message);
              } else {
                if (($__truthy = (function() use($form,$message) {
                  $__phel_1827_1828 = (\Phel::getDefinition("phel\\core", "list?"))($form);
                  if (($__truthy = $__phel_1827_1828) !== null && $__truthy !== false) {
                    return (\Phel::getDefinition("phel\\core", "="))(3, (\Phel::getDefinition("phel\\core", "count"))($form));
                  } else {
                    return $__phel_1827_1828;
                  }

                })()) !== null && $__truthy !== false) {
                  return (\Phel::getDefinition("phel\\test", "assert-binary"))($form, $message, false);
                } else {
                  if (($__truthy = (function() use($form,$message) {
                    $__phel_1829_1830 = (\Phel::getDefinition("phel\\core", "list?"))($form);
                    if (($__truthy = $__phel_1829_1830) !== null && $__truthy !== false) {
                      return (\Phel::getDefinition("phel\\core", "="))(2, (\Phel::getDefinition("phel\\core", "count"))($form));
                    } else {
                      return $__phel_1829_1830;
                    }

                  })()) !== null && $__truthy !== false) {
                    return (\Phel::getDefinition("phel\\test", "assert-predicate"))($form, $message, false);
                  } else {
                    return (\Phel::getDefinition("phel\\test", "assert-any"))($form, $message);
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
    \Phel::keyword("doc"), "```phel\n(assert-expr form message)\n```\n",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/test.phel",
      \Phel::keyword("line"), 175,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/test.phel",
      \Phel::keyword("line"), 191,
      \Phel::keyword("column"), 31
    ),
    "min-arity", 2,
    "is-variadic", false,
    "arglists", "[form message]"
  )
);
\Phel::addDefinition(
  "phel\\test",
  "is",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\test\\is";

    public function __invoke($form, ...$__phel_1831) {
      $__phel_1831 = \Phel::vector($__phel_1831);
      $__phel_1832_1835 = $__phel_1831;
      $__phel_1833_1836 = (\Phel::getDefinition("phel\\core", "first"))($__phel_1832_1835);
      $__phel_1834_1837 = (\Phel::getDefinition("phel\\core", "next"))($__phel_1832_1835);
      $message_1838 = $__phel_1833_1836;
      $loc_1839 = (\Phel::getDefinition("phel\\test", "location"))($form);
      $e_1840 = (\Phel::getDefinition("phel\\core", "gensym"))();
      return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("try"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\test", "assert-expr"))($form, $message_1838)), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("catch"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("\\Throwable"))), (\Phel::getDefinition("phel\\core", "list"))($e_1840), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\test/report"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "hash-map"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))(\Phel::keyword("state")), (\Phel::getDefinition("phel\\core", "list"))(\Phel::keyword("error")), (\Phel::getDefinition("phel\\core", "list"))(\Phel::keyword("location")), (\Phel::getDefinition("phel\\core", "list"))($loc_1839), (\Phel::getDefinition("phel\\core", "list"))(\Phel::keyword("message")), (\Phel::getDefinition("phel\\core", "list"))($message_1838), (\Phel::getDefinition("phel\\core", "list"))(\Phel::keyword("form")), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("quote"))), (\Phel::getDefinition("phel\\core", "list"))($form))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))(\Phel::keyword("exception")), (\Phel::getDefinition("phel\\core", "list"))($e_1840))) ?? []))))) ?? []))))) ?? []))))) ?? []));
    }
  },
  \Phel::map(
    \Phel::keyword("macro"), true,
    \Phel::keyword("doc"), "```phel\n(is form & [message])\n```\nAsserts that an expression is true.",
    \Phel::keyword("example"), "(is (= 4 (+ 2 2)))",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/test.phel",
      \Phel::keyword("line"), 193,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/test.phel",
      \Phel::keyword("line"), 204,
      \Phel::keyword("column"), 40
    ),
    "min-arity", 1,
    "is-variadic", true,
    "arglists", "[form & __phel_1831]"
  )
);
\Phel::addDefinition(
  "phel\\test",
  "deftest",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\test\\deftest";

    public function __invoke($test_name, ...$body) {
      $body = \Phel::vector($body);
      return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/defn"))), (\Phel::getDefinition("phel\\core", "list"))($test_name), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "hash-map"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))(\Phel::keyword("test")), (\Phel::getDefinition("phel\\core", "list"))(true), (\Phel::getDefinition("phel\\core", "list"))(\Phel::keyword("test-name")), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "name"))($test_name)))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))(\Phel::vector([])), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/binding"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "vector"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\test/*current-test-name*"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "name"))($test_name)))) ?? []))), $body)) ?? []))))) ?? []));
    }
  },
  \Phel::map(
    \Phel::keyword("macro"), true,
    \Phel::keyword("doc"), "```phel\n(deftest test-name & body)\n```\nDefines a test function.",
    \Phel::keyword("example"), "(deftest test-add)",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/test.phel",
      \Phel::keyword("line"), 210,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/test.phel",
      \Phel::keyword("line"), 216,
      \Phel::keyword("column"), 23
    ),
    "min-arity", 1,
    "is-variadic", true,
    "arglists", "[test-name & body]"
  )
);
\Phel::addDefinition(
  "phel\\test",
  "print-headline",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\test\\print_headline";

    public function __invoke($prefix, $__phel_1841) {
      $__phel_1842_1845 = $__phel_1841;
      $__phel_1843_1846 = (($__phel_1842_1845)[(\Phel::keyword("message"))] ?? null);
      $message_1847 = $__phel_1843_1846;
      $__phel_1844_1848 = (($__phel_1842_1845)[(\Phel::keyword("location"))] ?? null);
      $location_1849 = $__phel_1844_1848;
      (\Phel::getDefinition("phel\\core", "print"))($prefix);
      if (($__truthy = $message_1847) !== null && $__truthy !== false) {
        (\Phel::getDefinition("phel\\core", "print"))((\Phel::getDefinition("phel\\core", "str"))(" in '", $message_1847, "'"));
      } else {

      }

      if (($__truthy = $location_1849) !== null && $__truthy !== false) {
        (\Phel::getDefinition("phel\\core", "print"))((\Phel::getDefinition("phel\\core", "str"))(" (", realpath((\Phel::getDefinition("phel\\core", "get"))($location_1849, \Phel::keyword("file"))), ":", (\Phel::getDefinition("phel\\core", "get"))($location_1849, \Phel::keyword("line")), ")"));
      } else {

      }

      return (\Phel::getDefinition("phel\\core", "println"))();
    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(print-headline prefix {:message message, :location location})\n```\n",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/test.phel",
      \Phel::keyword("line"), 222,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/test.phel",
      \Phel::keyword("line"), 228,
      \Phel::keyword("column"), 12
    ),
    "min-arity", 2,
    "is-variadic", false,
    "arglists", "[prefix __phel_1841]"
  )
);
\Phel::addDefinition(
  "phel\\test",
  "print-failure-headline",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\test\\print_failure_headline";

    public function __invoke($data) {
      return (\Phel::getDefinition("phel\\test", "print-headline"))("Failure", $data);
    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(print-failure-headline data)\n```\n",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/test.phel",
      \Phel::keyword("line"), 230,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/test.phel",
      \Phel::keyword("line"), 231,
      \Phel::keyword("column"), 34
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[data]"
  )
);
\Phel::addDefinition(
  "phel\\test",
  "print-error-headline",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\test\\print_error_headline";

    public function __invoke($data) {
      return (\Phel::getDefinition("phel\\test", "print-headline"))("Error", $data);
    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(print-error-headline data)\n```\n",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/test.phel",
      \Phel::keyword("line"), 233,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/test.phel",
      \Phel::keyword("line"), 234,
      \Phel::keyword("column"), 32
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[data]"
  )
);
\Phel::addDefinition(
  "phel\\test",
  "print-error",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\test\\print_error";

    public function __invoke($data) {
      (\Phel::getDefinition("phel\\test", "print-error-headline"))($data);
      $__phel_1850_1853 = $data;
      $__phel_1851_1854 = (($__phel_1850_1853)[(\Phel::keyword("exception"))] ?? null);
      $exception_1855 = $__phel_1851_1854;
      $__phel_1852_1856 = (($__phel_1850_1853)[(\Phel::keyword("form"))] ?? null);
      $form_1857 = $__phel_1852_1856;
      $command_facade_1858 = (new \Phel\Command\CommandFacade());
      $printer_1859 = (function() use($data,$__phel_1850_1853,$__phel_1851_1854,$exception_1855,$__phel_1852_1856,$form_1857,$command_facade_1858) {
        $target_1860 = $command_facade_1858;
        return $target_1860->getExceptionPrinter();
      })();
      (\Phel::getDefinition("phel\\core", "println"))("              Test:", $form_1857);
      (\Phel::getDefinition("phel\\core", "println"))("   threw exception:", get_class($exception_1855));
      (\Phel::getDefinition("phel\\core", "println"))();
      return (function() use($data,$__phel_1850_1853,$__phel_1851_1854,$exception_1855,$__phel_1852_1856,$form_1857,$command_facade_1858,$printer_1859) {
        $target_1861 = $printer_1859;
        return $target_1861->printStackTrace($exception_1855);
      })();
    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(print-error data)\n```\n",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/test.phel",
      \Phel::keyword("line"), 236,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/test.phel",
      \Phel::keyword("line"), 244,
      \Phel::keyword("column"), 50
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[data]"
  )
);
\Phel::addDefinition(
  "phel\\test",
  "print-predicate-failure",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\test\\print_predicate_failure";

    public function __invoke($__phel_1864) {
      $__phel_1865_1869 = $__phel_1864;
      $__phel_1866_1870 = (($__phel_1865_1869)[(\Phel::keyword("pred"))] ?? null);
      $pred_1871 = $__phel_1866_1870;
      $__phel_1867_1872 = (($__phel_1865_1869)[(\Phel::keyword("value"))] ?? null);
      $value_1873 = $__phel_1867_1872;
      $__phel_1868_1874 = (($__phel_1865_1869)[(\Phel::keyword("result"))] ?? null);
      $result_1875 = $__phel_1868_1874;
      (\Phel::getDefinition("phel\\core", "println"))("                 Test:", $value_1873);
      (\Phel::getDefinition("phel\\core", "println"))("         evaluated to:", $result_1875);
      return (\Phel::getDefinition("phel\\core", "println"))("  but doesn't satisfy:", $pred_1871);
    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(print-predicate-failure {:pred pred, :value value, :result result})\n```\n",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/test.phel",
      \Phel::keyword("line"), 246,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/test.phel",
      \Phel::keyword("line"), 249,
      \Phel::keyword("column"), 42
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[__phel_1864]"
  )
);
\Phel::addDefinition(
  "phel\\test",
  "print-predicate-not-failure",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\test\\print_predicate_not_failure";

    public function __invoke($__phel_1876) {
      $__phel_1877_1881 = $__phel_1876;
      $__phel_1878_1882 = (($__phel_1877_1881)[(\Phel::keyword("pred"))] ?? null);
      $pred_1883 = $__phel_1878_1882;
      $__phel_1879_1884 = (($__phel_1877_1881)[(\Phel::keyword("value"))] ?? null);
      $value_1885 = $__phel_1879_1884;
      $__phel_1880_1886 = (($__phel_1877_1881)[(\Phel::keyword("result"))] ?? null);
      $result_1887 = $__phel_1880_1886;
      (\Phel::getDefinition("phel\\core", "println"))("              Test:", $value_1885);
      (\Phel::getDefinition("phel\\core", "println"))("      evaluated to:", $result_1887);
      return (\Phel::getDefinition("phel\\core", "println"))("  but does satisfy:", $pred_1883, " (it shouldn't)");
    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(print-predicate-not-failure {:pred pred, :value value, :result result})\n```\n",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/test.phel",
      \Phel::keyword("line"), 251,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/test.phel",
      \Phel::keyword("line"), 254,
      \Phel::keyword("column"), 57
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[__phel_1876]"
  )
);
\Phel::addDefinition(
  "phel\\test",
  "print-binary-failure",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\test\\print_binary_failure";

    public function __invoke($__phel_1888) {
      $__phel_1889_1894 = $__phel_1888;
      $__phel_1890_1895 = (($__phel_1889_1894)[(\Phel::keyword("pred"))] ?? null);
      $pred_1896 = $__phel_1890_1895;
      $__phel_1891_1897 = (($__phel_1889_1894)[(\Phel::keyword("expected"))] ?? null);
      $expected_1898 = $__phel_1891_1897;
      $__phel_1892_1899 = (($__phel_1889_1894)[(\Phel::keyword("actual"))] ?? null);
      $actual_1900 = $__phel_1892_1899;
      $__phel_1893_1901 = (($__phel_1889_1894)[(\Phel::keyword("result"))] ?? null);
      $result_1902 = $__phel_1893_1901;
      (\Phel::getDefinition("phel\\core", "println"))("          Test:", $actual_1900);
      (\Phel::getDefinition("phel\\core", "println"))("  evaluated to:", $result_1902);
      return (\Phel::getDefinition("phel\\core", "println"))("    but is not:", $pred_1896, "to", $expected_1898);
    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(print-binary-failure {:pred pred, :expected expected, :actual actual, :result result})\n```\n",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/test.phel",
      \Phel::keyword("line"), 256,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/test.phel",
      \Phel::keyword("line"), 259,
      \Phel::keyword("column"), 49
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[__phel_1888]"
  )
);
\Phel::addDefinition(
  "phel\\test",
  "print-binary-not-failure",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\test\\print_binary_not_failure";

    public function __invoke($__phel_1903) {
      $__phel_1904_1909 = $__phel_1903;
      $__phel_1905_1910 = (($__phel_1904_1909)[(\Phel::keyword("pred"))] ?? null);
      $pred_1911 = $__phel_1905_1910;
      $__phel_1906_1912 = (($__phel_1904_1909)[(\Phel::keyword("expected"))] ?? null);
      $expected_1913 = $__phel_1906_1912;
      $__phel_1907_1914 = (($__phel_1904_1909)[(\Phel::keyword("actual"))] ?? null);
      $actual_1915 = $__phel_1907_1914;
      $__phel_1908_1916 = (($__phel_1904_1909)[(\Phel::keyword("result"))] ?? null);
      $result_1917 = $__phel_1908_1916;
      (\Phel::getDefinition("phel\\core", "println"))("          Test:", $actual_1915);
      (\Phel::getDefinition("phel\\core", "println"))("  evaluated to:", $result_1917);
      return (\Phel::getDefinition("phel\\core", "println"))("        but is:", $pred_1911, "to", $expected_1913, "(it shouldn't be)");
    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(print-binary-not-failure {:pred pred, :expected expected, :actual actual, :result result})\n```\n",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/test.phel",
      \Phel::keyword("line"), 261,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/test.phel",
      \Phel::keyword("line"), 264,
      \Phel::keyword("column"), 69
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[__phel_1903]"
  )
);
\Phel::addDefinition(
  "phel\\test",
  "print-thrown-failure",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\test\\print_thrown_failure";

    public function __invoke($__phel_1918) {
      $__phel_1919_1922 = $__phel_1918;
      $__phel_1920_1923 = (($__phel_1919_1922)[(\Phel::keyword("form"))] ?? null);
      $form_1924 = $__phel_1920_1923;
      $__phel_1921_1925 = (($__phel_1919_1922)[(\Phel::keyword("exception-symbol"))] ?? null);
      $exception_symbol_1926 = $__phel_1921_1925;
      (\Phel::getDefinition("phel\\core", "println"))("    expected:", $form_1924);
      return (\Phel::getDefinition("phel\\core", "println"))("  to throw a:", $exception_symbol_1926, "(it didn't)");
    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(print-thrown-failure {:form form, :exception-symbol exception-symbol})\n```\n",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/test.phel",
      \Phel::keyword("line"), 266,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/test.phel",
      \Phel::keyword("line"), 268,
      \Phel::keyword("column"), 59
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[__phel_1918]"
  )
);
\Phel::addDefinition(
  "phel\\test",
  "print-thrown-with-msg-failure",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\test\\print_thrown_with_msg_failure";

    public function __invoke($__phel_1927) {
      $__phel_1928_1933 = $__phel_1927;
      $__phel_1929_1934 = (($__phel_1928_1933)[(\Phel::keyword("form"))] ?? null);
      $form_1935 = $__phel_1929_1934;
      $__phel_1930_1936 = (($__phel_1928_1933)[(\Phel::keyword("exception-symbol"))] ?? null);
      $exception_symbol_1937 = $__phel_1930_1936;
      $__phel_1931_1938 = (($__phel_1928_1933)[(\Phel::keyword("expected-message"))] ?? null);
      $expected_message_1939 = $__phel_1931_1938;
      $__phel_1932_1940 = (($__phel_1928_1933)[(\Phel::keyword("actual-message"))] ?? null);
      $actual_message_1941 = $__phel_1932_1940;
      if (($__truthy = (\Phel::getDefinition("phel\\core", "nil?"))($actual_message_1941)) !== null && $__truthy !== false) {
        (\Phel::getDefinition("phel\\core", "println"))("    expected:", $form_1935);
        (\Phel::getDefinition("phel\\core", "println"))("  to throw a:", $exception_symbol_1937, "(it didn't)");
        (\Phel::getDefinition("phel\\core", "println"))("      expected:", $form_1935);
        (\Phel::getDefinition("phel\\core", "println"))("    to throw a:", $exception_symbol_1937);
        (\Phel::getDefinition("phel\\core", "println"))("  with message:", $expected_message_1939);
        return (\Phel::getDefinition("phel\\core", "println"))("       but got:", $actual_message_1941);
      } else {
        return null;
      }

    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(print-thrown-with-msg-failure {:form form, :exception-symbol exception-symbol, :expected-message expected-message, :actual-message actual-message})\n```\n",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/test.phel",
      \Phel::keyword("line"), 270,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/test.phel",
      \Phel::keyword("line"), 279,
      \Phel::keyword("column"), 54
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[__phel_1927]"
  )
);
\Phel::addDefinition(
  "phel\\test",
  "print-any-failure",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\test\\print_any_failure";

    public function __invoke($__phel_1942) {
      $__phel_1943_1946 = $__phel_1942;
      $__phel_1944_1947 = (($__phel_1943_1946)[(\Phel::keyword("form"))] ?? null);
      $form_1948 = $__phel_1944_1947;
      $__phel_1945_1949 = (($__phel_1943_1946)[(\Phel::keyword("result"))] ?? null);
      $result_1950 = $__phel_1945_1949;
      (\Phel::getDefinition("phel\\core", "println"))("          Test:", $form_1948);
      return (\Phel::getDefinition("phel\\core", "println"))("  evaluated to:", $result_1950, "(which is not truthy)");
    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(print-any-failure {:form form, :result result})\n```\n",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/test.phel",
      \Phel::keyword("line"), 281,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/test.phel",
      \Phel::keyword("line"), 283,
      \Phel::keyword("column"), 61
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[__phel_1942]"
  )
);
\Phel::addDefinition(
  "phel\\test",
  "print-failure",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\test\\print_failure";

    public function __invoke($data) {
      (\Phel::getDefinition("phel\\test", "print-failure-headline"))($data);
      $__phel_1951_1952 = (\Phel::getDefinition("phel\\core", "get"))($data, \Phel::keyword("type"));
      if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_1951_1952, \Phel::keyword("predicate"))) !== null && $__truthy !== false) {
        return (\Phel::getDefinition("phel\\test", "print-predicate-failure"))($data);
      } else {
        $__phel_1953_1954 = $__phel_1951_1952;
        if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_1953_1954, \Phel::keyword("predicate-not"))) !== null && $__truthy !== false) {
          return (\Phel::getDefinition("phel\\test", "print-predicate-not-failure"))($data);
        } else {
          $__phel_1955_1956 = $__phel_1953_1954;
          if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_1955_1956, \Phel::keyword("binary"))) !== null && $__truthy !== false) {
            return (\Phel::getDefinition("phel\\test", "print-binary-failure"))($data);
          } else {
            $__phel_1957_1958 = $__phel_1955_1956;
            if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_1957_1958, \Phel::keyword("binary-not"))) !== null && $__truthy !== false) {
              return (\Phel::getDefinition("phel\\test", "print-binary-not-failure"))($data);
            } else {
              $__phel_1959_1960 = $__phel_1957_1958;
              if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_1959_1960, \Phel::keyword("thrown"))) !== null && $__truthy !== false) {
                return (\Phel::getDefinition("phel\\test", "print-thrown-failure"))($data);
              } else {
                $__phel_1961_1962 = $__phel_1959_1960;
                if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_1961_1962, \Phel::keyword("thrown-with-msg"))) !== null && $__truthy !== false) {
                  return (\Phel::getDefinition("phel\\test", "print-thrown-with-msg-failure"))($data);
                } else {
                  $__phel_1963_1964 = $__phel_1961_1962;
                  if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_1963_1964, \Phel::keyword("any"))) !== null && $__truthy !== false) {
                    return (\Phel::getDefinition("phel\\test", "print-any-failure"))($data);
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
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(print-failure data)\n```\n",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/test.phel",
      \Phel::keyword("line"), 285,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/test.phel",
      \Phel::keyword("line"), 294,
      \Phel::keyword("column"), 35
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[data]"
  )
);
\Phel::addDefinition(
  "phel\\test",
  "print-failure-or-error",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\test\\print_failure_or_error";

    public function __invoke($data) {
      $__phel_1965_1966 = (\Phel::getDefinition("phel\\core", "get"))($data, \Phel::keyword("state"));
      if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_1965_1966, \Phel::keyword("error"))) !== null && $__truthy !== false) {
        return (\Phel::getDefinition("phel\\test", "print-error"))($data);
      } else {
        $__phel_1967_1968 = $__phel_1965_1966;
        if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_1967_1968, \Phel::keyword("failed"))) !== null && $__truthy !== false) {
          return (\Phel::getDefinition("phel\\test", "print-failure"))($data);
        } else {
          return null;
        }

      }

    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(print-failure-or-error data)\n```\n",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/test.phel",
      \Phel::keyword("line"), 296,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/test.phel",
      \Phel::keyword("line"), 299,
      \Phel::keyword("column"), 34
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[data]"
  )
);
\Phel::addDefinition(
  "phel\\test",
  "print-summary",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\test\\print_summary";

    public function __invoke() {
      (\Phel::getDefinition("phel\\core", "println"))();
      $failures_1969 = (\Phel::getDefinition("phel\\core", "get"))((\Phel::getDefinition("phel\\core", "deref"))(\Phel::getDefinition("phel\\test", "stats")), \Phel::keyword("failed"));
      if (($__truthy = (\Phel::getDefinition("phel\\core", "not"))((\Phel::getDefinition("phel\\core", "empty?"))($failures_1969))) !== null && $__truthy !== false) {
        (\Phel::getDefinition("phel\\core", "println"))();
        $__phel_1970_1973 = (\Phel::getDefinition("phel\\core", "var"))(\Phel::vector([]));
        foreach (\Phel\Lang\Seq::toIterable($failures_1969) as $__phel_1972) {
          $data_1974 = $__phel_1972;
          (\Phel::getDefinition("phel\\core", "swap!"))($__phel_1970_1973, new class($failures_1969, $__phel_1970_1973, $__phel_1972, $data_1974) extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\test\\print_summary";
            private $failures_1969;
            private $__phel_1970_1973;
            private $__phel_1972;
            private $data_1974;

            public function __construct($failures_1969, $__phel_1970_1973, $__phel_1972, $data_1974) {
              $this->failures_1969 = $failures_1969;
              $this->__phel_1970_1973 = $__phel_1970_1973;
              $this->__phel_1972 = $__phel_1972;
              $this->data_1974 = $data_1974;
            }

            public function __invoke($__phel_1971) {
              $failures_1969 = $this->failures_1969;
              $__phel_1970_1973 = $this->__phel_1970_1973;
              $__phel_1972 = $this->__phel_1972;
              $data_1974 = $this->data_1974;
              return (\Phel::getDefinition("phel\\core", "conj"))($__phel_1971, (function() use($failures_1969,$__phel_1970_1973,$__phel_1972,$data_1974,$__phel_1971) {
                (\Phel::getDefinition("phel\\core", "println"))("~~~~~~~~~~");
                return (\Phel::getDefinition("phel\\test", "print-failure-or-error"))($data_1974);
              })());
            }
          });
        }
        (\Phel::getDefinition("phel\\core", "deref"))($__phel_1970_1973);
        (\Phel::getDefinition("phel\\core", "println"))();
      } else {

      }

      (\Phel::getDefinition("phel\\core", "println"))();
      $__phel_1975_1979 = (\Phel::getDefinition("phel\\core", "get"))((\Phel::getDefinition("phel\\core", "deref"))(\Phel::getDefinition("phel\\test", "stats")), \Phel::keyword("counts"));
      $__phel_1976_1980 = (($__phel_1975_1979)[(\Phel::keyword("failed"))] ?? null);
      $failed_1981 = $__phel_1976_1980;
      $__phel_1977_1982 = (($__phel_1975_1979)[(\Phel::keyword("error"))] ?? null);
      $error_1983 = $__phel_1977_1982;
      $__phel_1978_1984 = (($__phel_1975_1979)[(\Phel::keyword("pass"))] ?? null);
      $pass_1985 = $__phel_1978_1984;
      $total_1986 = (function() use($__phel_1975_1979,$__phel_1976_1980,$failed_1981,$__phel_1977_1982,$error_1983,$__phel_1978_1984,$pass_1985) {
        (\Phel::getDefinition("phel\\core", "assert-non-nil"))($failed_1981, $error_1983, $pass_1985);
        return ($failed_1981 + $error_1983 + $pass_1985);
      })();
      (\Phel::getDefinition("phel\\core", "println"))("Passed:", $pass_1985);
      (\Phel::getDefinition("phel\\core", "println"))("Failed:", $failed_1981);
      (\Phel::getDefinition("phel\\core", "println"))("Error:", $error_1983);
      return (\Phel::getDefinition("phel\\core", "println"))("Total:", $total_1986);
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(print-summary)\n```\nPrints test results summary.",
    \Phel::keyword("example"), "(print-summary)",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/test.phel",
      \Phel::keyword("line"), 301,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/test.phel",
      \Phel::keyword("line"), 319,
      \Phel::keyword("column"), 30
    ),
    "min-arity", 0,
    "is-variadic", false,
    "arglists", "[]"
  )
);
\Phel::addDefinition(
  "phel\\test",
  "find-test-fns",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\test\\find_test_fns";

    public function __invoke($ns, $__phel_1987) {
      $__phel_1988_1990 = $__phel_1987;
      $__phel_1989_1991 = (($__phel_1988_1990)[(\Phel::keyword("filter"))] ?? null);
      $filter_1992 = $__phel_1989_1991;
      $munge_1993 = (new \Phel\Compiler\Application\Munge());
      $munge_ns_1994 = (function() use($ns,$__phel_1987,$__phel_1988_1990,$__phel_1989_1991,$filter_1992,$munge_1993) {
        $target_2006 = $munge_1993;
        return $target_2006->encodeNs($ns);
      })();
      $__phel_1995_1999 = (\Phel::getDefinition("phel\\core", "var"))(\Phel::vector([]));
      foreach (\Phel\Lang\Seq::toIterable((\Phel::getDefinitionInNamespace($munge_ns_1994))) as $__phel_1998 => $__phel_1997) {
        $fn_name_2000 = $__phel_1998;
        $meta_2001 = (\Phel::getDefinitionMetaData($munge_ns_1994, $fn_name_2000));
        if (($__truthy = (function() use($ns,$__phel_1987,$__phel_1988_1990,$__phel_1989_1991,$filter_1992,$munge_1993,$munge_ns_1994,$__phel_1995_1999,$__phel_1997,$__phel_1998,$fn_name_2000,$meta_2001) {
          $__phel_2002_2003 = (\Phel::keyword("test"))($meta_2001);
          if (($__truthy = $__phel_2002_2003) !== null && $__truthy !== false) {
            $__phel_2004_2005 = (\Phel::getDefinition("phel\\core", "nil?"))($filter_1992);
            if (($__truthy = $__phel_2004_2005) !== null && $__truthy !== false) {
              return $__phel_2004_2005;
            } else {
              return (\Phel::getDefinition("phel\\str", "contains?"))((\Phel::keyword("test-name"))($meta_2001), $filter_1992);
            }

          } else {
            return $__phel_2002_2003;
          }

        })()) !== null && $__truthy !== false) {
          (\Phel::getDefinition("phel\\core", "swap!"))($__phel_1995_1999, new class($ns, $__phel_1987, $__phel_1988_1990, $__phel_1989_1991, $filter_1992, $munge_1993, $munge_ns_1994, $__phel_1995_1999, $__phel_1997, $__phel_1998, $fn_name_2000, $meta_2001) extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\test\\find_test_fns";
            private $ns;
            private $__phel_1987;
            private $__phel_1988_1990;
            private $__phel_1989_1991;
            private $filter_1992;
            private $munge_1993;
            private $munge_ns_1994;
            private $__phel_1995_1999;
            private $__phel_1997;
            private $__phel_1998;
            private $fn_name_2000;
            private $meta_2001;

            public function __construct($ns, $__phel_1987, $__phel_1988_1990, $__phel_1989_1991, $filter_1992, $munge_1993, $munge_ns_1994, $__phel_1995_1999, $__phel_1997, $__phel_1998, $fn_name_2000, $meta_2001) {
              $this->ns = $ns;
              $this->__phel_1987 = $__phel_1987;
              $this->__phel_1988_1990 = $__phel_1988_1990;
              $this->__phel_1989_1991 = $__phel_1989_1991;
              $this->filter_1992 = $filter_1992;
              $this->munge_1993 = $munge_1993;
              $this->munge_ns_1994 = $munge_ns_1994;
              $this->__phel_1995_1999 = $__phel_1995_1999;
              $this->__phel_1997 = $__phel_1997;
              $this->__phel_1998 = $__phel_1998;
              $this->fn_name_2000 = $fn_name_2000;
              $this->meta_2001 = $meta_2001;
            }

            public function __invoke($__phel_1996) {
              $ns = $this->ns;
              $__phel_1987 = $this->__phel_1987;
              $__phel_1988_1990 = $this->__phel_1988_1990;
              $__phel_1989_1991 = $this->__phel_1989_1991;
              $filter_1992 = $this->filter_1992;
              $munge_1993 = $this->munge_1993;
              $munge_ns_1994 = $this->munge_ns_1994;
              $__phel_1995_1999 = $this->__phel_1995_1999;
              $__phel_1997 = $this->__phel_1997;
              $__phel_1998 = $this->__phel_1998;
              $fn_name_2000 = $this->fn_name_2000;
              $meta_2001 = $this->meta_2001;
              return (\Phel::getDefinition("phel\\core", "conj"))($__phel_1996, (\Phel::getDefinition($munge_ns_1994, $fn_name_2000)));
            }
          });
        } else {

        }

      }
      return (\Phel::getDefinition("phel\\core", "deref"))($__phel_1995_1999);
    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(find-test-fns ns {:filter filter})\n```\n",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/test.phel",
      \Phel::keyword("line"), 325,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/test.phel",
      \Phel::keyword("line"), 331,
      \Phel::keyword("column"), 55
    ),
    "min-arity", 2,
    "is-variadic", false,
    "arglists", "[ns __phel_1987]"
  )
);
\Phel::addDefinition(
  "phel\\test",
  "run-test",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\test\\run_test";

    public function __invoke($options, $ns) {
      $tests_2008 = (\Phel::getDefinition("phel\\test", "find-test-fns"))($ns, $options);
      return (function() use($options,$ns,$tests_2008) {
        foreach (\Phel\Lang\Seq::toIterable($tests_2008) as $__phel_2009) {
          $test_2010 = $__phel_2009;
          if (($__truthy = (\Phel::getDefinition("phel\\core", "not"))((\Phel::getDefinition("phel\\test", "should-stop?"))())) !== null && $__truthy !== false) {
            ($test_2010)();
          } else {

          }

        }
        return null;
      })();
    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(run-test options ns)\n```\n",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/test.phel",
      \Phel::keyword("line"), 333,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/test.phel",
      \Phel::keyword("line"), 337,
      \Phel::keyword("column"), 15
    ),
    "min-arity", 2,
    "is-variadic", false,
    "arglists", "[options ns]"
  )
);
\Phel::addDefinition(
  "phel\\test",
  "run-tests",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\test\\run_tests";

    public function __invoke($options, ...$namespaces) {
      $namespaces = \Phel::vector($namespaces);
      (\Phel::getDefinition("phel\\core", "set!"))(\Phel::getDefinition("phel\\test", "testdox?"), (\Phel::keyword("testdox"))($options));
      (\Phel::getDefinition("phel\\core", "set!"))(\Phel::getDefinition("phel\\test", "fail-fast?"), (\Phel::keyword("fail-fast"))($options));
      foreach (\Phel\Lang\Seq::toIterable($namespaces) as $__phel_2011) {
        $namespace_2012 = $__phel_2011;
        $ns_name_2013 = (\Phel::getDefinition("phel\\core", "name"))($namespace_2012);
        if (($__truthy = (\Phel::getDefinition("phel\\core", "not"))((\Phel::getDefinition("phel\\test", "should-stop?"))())) !== null && $__truthy !== false) {
          (\Phel::getDefinition("phel\\test", "run-test"))($options, $ns_name_2013);
        } else {

        }

      }
      return (\Phel::getDefinition("phel\\test", "print-summary"))();
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(run-tests options & namespaces)\n```\nRuns all tests in the given namespaces.",
    \Phel::keyword("example"), "(run-tests {} 'my-app\test)",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/test.phel",
      \Phel::keyword("line"), 339,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/test.phel",
      \Phel::keyword("line"), 349,
      \Phel::keyword("column"), 18
    ),
    "min-arity", 1,
    "is-variadic", true,
    "arglists", "[options & namespaces]"
  )
);
\Phel::addDefinition(
  "phel\\test",
  "reset-stats",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\test\\reset_stats";

    public function __invoke() {
      return (\Phel::getDefinition("phel\\core", "set!"))(\Phel::getDefinition("phel\\test", "stats"), \Phel::map(
        \Phel::keyword("failed"), \Phel::vector([]),
        \Phel::keyword("counts"), \Phel::map(
          \Phel::keyword("failed"), 0,
          \Phel::keyword("error"), 0,
          \Phel::keyword("pass"), 0,
          \Phel::keyword("total"), 0
        )
      ));
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(reset-stats)\n```\nResets the test statistics to their initial state.\n  Call this before running a new batch of tests to get fresh results.",
    \Phel::keyword("example"), "(reset-stats)",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/test.phel",
      \Phel::keyword("line"), 351,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/test.phel",
      \Phel::keyword("line"), 360,
      \Phel::keyword("column"), 36
    ),
    "min-arity", 0,
    "is-variadic", false,
    "arglists", "[]"
  )
);
\Phel::addDefinition(
  "phel\\test",
  "successful?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\test\\successful?";

    public function __invoke() {
      $__phel_2014_2017 = (\Phel::getDefinition("phel\\core", "get"))((\Phel::getDefinition("phel\\core", "deref"))(\Phel::getDefinition("phel\\test", "stats")), \Phel::keyword("counts"));
      $__phel_2015_2018 = (($__phel_2014_2017)[(\Phel::keyword("failed"))] ?? null);
      $failed_2019 = $__phel_2015_2018;
      $__phel_2016_2020 = (($__phel_2014_2017)[(\Phel::keyword("error"))] ?? null);
      $error_2021 = $__phel_2016_2020;
      return (\Phel::getDefinition("phel\\core", "zero?"))((function() use($__phel_2014_2017,$__phel_2015_2018,$failed_2019,$__phel_2016_2020,$error_2021) {
        (\Phel::getDefinition("phel\\core", "assert-non-nil"))($failed_2019, $error_2021);
        return ($failed_2019 + $error_2021);
      })());
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(successful?)\n```\nChecks if all tests passed.",
    \Phel::keyword("example"), "(successful?) # => true",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/test.phel",
      \Phel::keyword("line"), 362,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/test.phel",
      \Phel::keyword("line"), 367,
      \Phel::keyword("column"), 30
    ),
    "min-arity", 0,
    "is-variadic", false,
    "arglists", "[]"
  )
);
\Phel::addDefinition(
  "phel\\test",
  "get-stats",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\test\\get_stats";

    public function __invoke() {
      return (\Phel::getDefinition("phel\\core", "deref"))(\Phel::getDefinition("phel\\test", "stats"));
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(get-stats)\n```\nReturns the current test statistics as a hash-map with :failed and :counts keys.",
    \Phel::keyword("example"), "(get-stats) ; => {:failed [] :counts {:failed 0 :error 0 :pass 0 :total 0}}",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/test.phel",
      \Phel::keyword("line"), 369,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/test.phel",
      \Phel::keyword("line"), 373,
      \Phel::keyword("column"), 16
    ),
    "min-arity", 0,
    "is-variadic", false,
    "arglists", "[]"
  )
);
\Phel::addDefinition(
  "phel\\test",
  "restore-stats",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\test\\restore_stats";

    public function __invoke($saved) {
      return (\Phel::getDefinition("phel\\core", "set!"))(\Phel::getDefinition("phel\\test", "stats"), $saved);
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(restore-stats saved)\n```\nRestores test statistics from a previously saved state.",
    \Phel::keyword("example"), "(restore-stats saved)",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/test.phel",
      \Phel::keyword("line"), 375,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/test.phel",
      \Phel::keyword("line"), 379,
      \Phel::keyword("column"), 21
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[saved]"
  )
);
