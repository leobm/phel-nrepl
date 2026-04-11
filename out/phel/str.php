<?php declare(strict_types=1);
namespace phel\str;
require_once __DIR__ . '/../phel/core.php';
require_once __DIR__ . '/../phel/core.php';
\Phel::addDefinition(
  "phel\\core",
  "*file*",
  "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/str.phel"
);
\Phel::addDefinition(
  "phel\\core",
  "*ns*",
  "phel\\str"
);
\Phel::addDefinition(
  "phel\\str",
  "split",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\str\\split";

    public function __invoke($s, $re, ...$__phel_1602) {
      $__phel_1602 = \Phel::vector($__phel_1602);
      $__phel_1603_1606 = $__phel_1602;
      $__phel_1604_1607 = (\Phel::getDefinition("phel\\core", "first"))($__phel_1603_1606);
      $__phel_1605_1608 = (\Phel::getDefinition("phel\\core", "next"))($__phel_1603_1606);
      $limit_1609 = $__phel_1604_1607;
      return (\Phel::getDefinition("phel\\core", "values"))(preg_split($re, $s, (function() use($s,$re,$__phel_1602,$__phel_1603_1606,$__phel_1604_1607,$__phel_1605_1608,$limit_1609) {
        $__phel_1610_1611 = $limit_1609;
        if (($__truthy = $__phel_1610_1611) !== null && $__truthy !== false) {
          return $__phel_1610_1611;
        } else {
          return -1;
        }

      })()));
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(split s re & [limit])\n```\nSplits string on a regular expression, returning a vector of parts.",
    \Phel::keyword("example"), "(split \"hello world foo bar\" #\"\\s+\") ; => [\"hello\" \"world\" \"foo\" \"bar\"]",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/str.phel",
      \Phel::keyword("line"), 5,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/str.phel",
      \Phel::keyword("line"), 9,
      \Phel::keyword("column"), 47
    ),
    "min-arity", 2,
    "is-variadic", true,
    "arglists", "[s re & __phel_1602]"
  )
);
\Phel::addDefinition(
  "phel\\str",
  "chars",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\str\\chars";

    public function __invoke($s) {
      return (\Phel::getDefinition("phel\\core", "vector"))(...((mb_str_split($s)) ?? []));
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(chars s)\n```\nReturns a vector of characters from string s.\n\n  This is a convenience function for converting strings to character sequences.\n  Properly handles multibyte UTF-8 characters.",
    \Phel::keyword("example"), "(chars \"hello\") ; => [\"h\" \"e\" \"l\" \"l\" \"o\"]",
    \Phel::keyword("see-also"), \Phel::vector(["seq"]),
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/str.phel",
      \Phel::keyword("line"), 11,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/str.phel",
      \Phel::keyword("line"), 19,
      \Phel::keyword("column"), 38
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[s]"
  )
);
\Phel::addDefinition(
  "phel\\str",
  "join",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\str\\join";

    public function __invoke($separator, ...$__phel_1612) {
      $__phel_1612 = \Phel::vector($__phel_1612);
      $__phel_1613_1616 = $__phel_1612;
      $__phel_1614_1617 = (\Phel::getDefinition("phel\\core", "first"))($__phel_1613_1616);
      $__phel_1615_1618 = (\Phel::getDefinition("phel\\core", "next"))($__phel_1613_1616);
      $coll_1619 = $__phel_1614_1617;
      $__phel_1620_1625 = (($__truthy = (\Phel::getDefinition("phel\\core", "nil?"))($coll_1619)) !== null && $__truthy !== false ? \Phel::vector([$separator, ""]) : \Phel::vector([$coll_1619, $separator]));
      $__phel_1621_1626 = (\Phel::getDefinition("phel\\core", "first"))($__phel_1620_1625);
      $__phel_1622_1627 = (\Phel::getDefinition("phel\\core", "next"))($__phel_1620_1625);
      $coll_1628 = $__phel_1621_1626;
      $__phel_1623_1629 = (\Phel::getDefinition("phel\\core", "first"))($__phel_1622_1627);
      $__phel_1624_1630 = (\Phel::getDefinition("phel\\core", "next"))($__phel_1622_1627);
      $separator_1631 = $__phel_1623_1629;
      return implode($separator_1631, (\Phel::getDefinition("phel\\core", "to-php-array"))($coll_1628));
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(join separator & [coll])\n```\nReturns a string of all elements in coll, separated by an optional separator.",
    \Phel::keyword("example"), "(join \", \" [\"apple\" \"banana\" \"cherry\"]) ; => \"apple, banana, cherry\"",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/str.phel",
      \Phel::keyword("line"), 21,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/str.phel",
      \Phel::keyword("line"), 26,
      \Phel::keyword("column"), 49
    ),
    "min-arity", 1,
    "is-variadic", true,
    "arglists", "[separator & __phel_1612]"
  )
);
\Phel::addDefinition(
  "phel\\str",
  "subs",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\str\\subs";

    public function __invoke($s, $start, ...$__phel_1632) {
      $__phel_1632 = \Phel::vector($__phel_1632);
      $__phel_1633_1636 = $__phel_1632;
      $__phel_1634_1637 = (\Phel::getDefinition("phel\\core", "first"))($__phel_1633_1636);
      $__phel_1635_1638 = (\Phel::getDefinition("phel\\core", "next"))($__phel_1633_1636);
      $end_1639 = $__phel_1634_1637;
      $len_1640 = mb_strlen($s);
      $end_1641 = (function() use($s,$start,$__phel_1632,$__phel_1633_1636,$__phel_1634_1637,$__phel_1635_1638,$end_1639,$len_1640) {
        $__phel_1642_1643 = $end_1639;
        if (($__truthy = $__phel_1642_1643) !== null && $__truthy !== false) {
          return $__phel_1642_1643;
        } else {
          return $len_1640;
        }

      })();
      if (($__truthy = (function() use($s,$start,$__phel_1632,$__phel_1633_1636,$__phel_1634_1637,$__phel_1635_1638,$end_1641,$len_1640) {
        $__phel_1644_1645 = ($start < 0);
        if (($__truthy = $__phel_1644_1645) !== null && $__truthy !== false) {
          return $__phel_1644_1645;
        } else {
          $__phel_1646_1647 = ($end_1641 < $start);
          if (($__truthy = $__phel_1646_1647) !== null && $__truthy !== false) {
            return $__phel_1646_1647;
          } else {
            return ($end_1641 > $len_1640);
          }

        }

      })()) !== null && $__truthy !== false) {
        throw (new \InvalidArgumentException("Invalid start or end index for subs"));
      } else {

      }

      return mb_substr($s, $start, (function() use($s,$start,$__phel_1632,$__phel_1633_1636,$__phel_1634_1637,$__phel_1635_1638,$end_1641,$len_1640) {
        (\Phel::getDefinition("phel\\core", "assert-non-nil"))($end_1641, $start);
        return ($end_1641 - $start);
      })());
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(subs s start & [end])\n```\nReturns the substring of s from start (inclusive) to end (exclusive).",
    \Phel::keyword("example"), "(subs \"hello world\" 0 5) ; => \"hello\"",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/str.phel",
      \Phel::keyword("line"), 28,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/str.phel",
      \Phel::keyword("line"), 36,
      \Phel::keyword("column"), 43
    ),
    "min-arity", 2,
    "is-variadic", true,
    "arglists", "[s start & __phel_1632]"
  )
);
\Phel::addDefinition(
  "phel\\str",
  "reverse",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\str\\reverse";

    public function __invoke($s) {
      $chars_1648 = mb_str_split($s);
      return (\Phel::getDefinition("phel\\str", "join"))((\Phel::getDefinition("phel\\core", "reverse"))($chars_1648));
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(reverse s)\n```\nReturns s with its characters reversed.",
    \Phel::keyword("example"), "(reverse \"hello\") ; => \"olleh\"",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/str.phel",
      \Phel::keyword("line"), 38,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/str.phel",
      \Phel::keyword("line"), 43,
      \Phel::keyword("column"), 33
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[s]"
  )
);
\Phel::addDefinition(
  "phel\\str",
  "repeat",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\str\\repeat";

    public function __invoke($s, $n) {
      return str_repeat($s, $n);
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(repeat s n)\n```\nReturns a string containing n copies of s.",
    \Phel::keyword("example"), "(repeat \"ha\" 3) ; => \"hahaha\"",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/str.phel",
      \Phel::keyword("line"), 45,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/str.phel",
      \Phel::keyword("line"), 49,
      \Phel::keyword("column"), 23
    ),
    "min-arity", 2,
    "is-variadic", false,
    "arglists", "[s n]"
  )
);
\Phel::addDefinition(
  "phel\\str",
  "as-pattern",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\str\\as_pattern";

    public function __invoke($match) {
      if (($__truthy = (function() use($match) {
        $__phel_1649_1650 = (mb_strlen($match) > 1);
        if (($__truthy = $__phel_1649_1650) !== null && $__truthy !== false) {
          return (\Phel::getDefinition("phel\\core", "="))(substr($match, 0, 1), substr($match, -1, 1));
        } else {
          return $__phel_1649_1650;
        }

      })()) !== null && $__truthy !== false) {
        return $match;
      } else {
        return (\Phel::getDefinition("phel\\core", "format"))("/%s/", preg_quote($match, "/"));
      }

    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(as-pattern match)\n```\nEnsures match is a regex pattern. If it looks like a delimited regex\n  (first and last chars match), returns as-is; otherwise wraps as literal.",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/str.phel",
      \Phel::keyword("line"), 51,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/str.phel",
      \Phel::keyword("line"), 61,
      \Phel::keyword("column"), 48
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[match]"
  )
);
\Phel::addDefinition(
  "phel\\str",
  "replace",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\str\\replace";

    public function __invoke($s, $match, $replacement) {
      $match_1651 = (\Phel::getDefinition("phel\\str", "as-pattern"))($match);
      if (($__truthy = (\Phel::getDefinition("phel\\core", "function?"))($replacement)) !== null && $__truthy !== false) {
        return preg_replace_callback($match_1651, new class($s, $match_1651, $replacement) extends \Phel\Lang\AbstractFn {
          public const BOUND_TO = "phel\\str\\replace";
          private $s;
          private $match_1651;
          private $replacement;

          public function __construct($s, $match_1651, $replacement) {
            $this->s = $s;
            $this->match_1651 = $match_1651;
            $this->replacement = $replacement;
          }

          public function __invoke($x) {
            $s = $this->s;
            $match_1651 = $this->match_1651;
            $replacement = $this->replacement;
            $x_1652 = (\Phel::getDefinition("phel\\core", "values"))((\Phel::getDefinition("phel\\core", "php-array-to-map"))($x));
            return ($replacement)(...(($x_1652) ?? []));
          }
        }, $s);
      } else {
        return preg_replace($match_1651, $replacement, $s);
      }

    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(replace s match replacement)\n```\nReplaces all instances of match with replacement in s.",
    \Phel::keyword("example"), "(replace \"hello world\" \"world\" \"there\") ; => \"hello there\"",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/str.phel",
      \Phel::keyword("line"), 63,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/str.phel",
      \Phel::keyword("line"), 72,
      \Phel::keyword("column"), 47
    ),
    "min-arity", 3,
    "is-variadic", false,
    "arglists", "[s match replacement]"
  )
);
\Phel::addDefinition(
  "phel\\str",
  "replace-first",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\str\\replace_first";

    public function __invoke($s, $match, $replacement) {
      $match_1653 = (\Phel::getDefinition("phel\\str", "as-pattern"))($match);
      if (($__truthy = (\Phel::getDefinition("phel\\core", "function?"))($replacement)) !== null && $__truthy !== false) {
        return preg_replace_callback($match_1653, new class($s, $match_1653, $replacement) extends \Phel\Lang\AbstractFn {
          public const BOUND_TO = "phel\\str\\replace_first";
          private $s;
          private $match_1653;
          private $replacement;

          public function __construct($s, $match_1653, $replacement) {
            $this->s = $s;
            $this->match_1653 = $match_1653;
            $this->replacement = $replacement;
          }

          public function __invoke($x) {
            $s = $this->s;
            $match_1653 = $this->match_1653;
            $replacement = $this->replacement;
            $x_1654 = (\Phel::getDefinition("phel\\core", "values"))((\Phel::getDefinition("phel\\core", "php-array-to-map"))($x));
            return ($replacement)(...(($x_1654) ?? []));
          }
        }, $s, 1);
      } else {
        return preg_replace($match_1653, $replacement, $s, 1);
      }

    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(replace-first s match replacement)\n```\nReplaces the first instance of match with replacement in s.",
    \Phel::keyword("example"), "(replace-first \"hello world world\" \"world\" \"there\") ; => \"hello there world\"",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/str.phel",
      \Phel::keyword("line"), 74,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/str.phel",
      \Phel::keyword("line"), 83,
      \Phel::keyword("column"), 49
    ),
    "min-arity", 3,
    "is-variadic", false,
    "arglists", "[s match replacement]"
  )
);
\Phel::addDefinition(
  "phel\\str",
  "trim-newline",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\str\\trim_newline";

    public function __invoke($s) {
      $index_1655 = mb_strlen($s);
      while (true) {
        if (($__truthy = (\Phel::getDefinition("phel\\core", "zero?"))($index_1655)) !== null && $__truthy !== false) {
          return "";
        } else {
          $ch_1656 = mb_substr($s, (function() use($s,$index_1655) {
            (\Phel::getDefinition("phel\\core", "assert-non-nil"))($index_1655);
            return ($index_1655 - 1);
          })(), 1);
          if (($__truthy = (function() use($s,$index_1655,$ch_1656) {
            $__phel_1657_1658 = (\Phel::getDefinition("phel\\core", "="))($ch_1656, "\n");
            if (($__truthy = $__phel_1657_1658) !== null && $__truthy !== false) {
              return $__phel_1657_1658;
            } else {
              return (\Phel::getDefinition("phel\\core", "="))($ch_1656, "\r");
            }

          })()) !== null && $__truthy !== false) {
            $__phel_1659 = (function() use($s,$index_1655,$ch_1656) {
              (\Phel::getDefinition("phel\\core", "assert-non-nil"))($index_1655);
              return ($index_1655 - 1);
            })();
            $index_1655 = $__phel_1659;
            continue;

          } else {
            return mb_substr($s, 0, $index_1655);
          }

        }
        break;
      }
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(trim-newline s)\n```\nRemoves all trailing newline or return characters from string.",
    \Phel::keyword("example"), "(trim-newline \"hello\\n\\n\") ; => \"hello\"",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/str.phel",
      \Phel::keyword("line"), 85,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/str.phel",
      \Phel::keyword("line"), 95,
      \Phel::keyword("column"), 40
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[s]"
  )
);
\Phel::addDefinition(
  "phel\\str",
  "capitalize",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\str\\capitalize";

    public function __invoke($s) {
      $first_char_1661 = mb_substr($s, 0, 1);
      $rest_1662 = mb_substr($s, 1);
      return (\Phel::getDefinition("phel\\core", "str"))(mb_strtoupper($first_char_1661), mb_strtolower($rest_1662));
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(capitalize s)\n```\nConverts first character to upper-case and all other characters to lower-case.",
    \Phel::keyword("example"), "(capitalize \"hELLO wORLD\") ; => \"Hello world\"",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/str.phel",
      \Phel::keyword("line"), 97,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/str.phel",
      \Phel::keyword("line"), 104,
      \Phel::keyword("column"), 36
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[s]"
  )
);
\Phel::addDefinition(
  "phel\\str",
  "lower-case",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\str\\lower_case";

    public function __invoke($s) {
      return mb_strtolower($s);
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(lower-case s)\n```\nConverts string to all lower-case.",
    \Phel::keyword("example"), "(lower-case \"HELLO World\") ; => \"hello world\"",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/str.phel",
      \Phel::keyword("line"), 106,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/str.phel",
      \Phel::keyword("line"), 110,
      \Phel::keyword("column"), 24
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[s]"
  )
);
\Phel::addDefinition(
  "phel\\str",
  "upper-case",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\str\\upper_case";

    public function __invoke($s) {
      return mb_strtoupper($s);
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(upper-case s)\n```\nConverts string to all upper-case.",
    \Phel::keyword("example"), "(upper-case \"hello World\") ; => \"HELLO WORLD\"",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/str.phel",
      \Phel::keyword("line"), 112,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/str.phel",
      \Phel::keyword("line"), 116,
      \Phel::keyword("column"), 24
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[s]"
  )
);
\Phel::addDefinition(
  "phel\\str",
  "trim",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\str\\trim";

    public function __invoke($s) {
      return preg_replace("/^[\\s]+|[\\s]+\$/u", "", $s);
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(trim s)\n```\nRemoves whitespace from both ends of string.",
    \Phel::keyword("example"), "(trim \"  hello  \") ; => \"hello\"",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/str.phel",
      \Phel::keyword("line"), 118,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/str.phel",
      \Phel::keyword("line"), 122,
      \Phel::keyword("column"), 45
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[s]"
  )
);
\Phel::addDefinition(
  "phel\\str",
  "triml",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\str\\triml";

    public function __invoke($s) {
      return preg_replace("/^[\\s]+/u", "", $s);
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(triml s)\n```\nRemoves whitespace from the left side of string.",
    \Phel::keyword("example"), "(triml \"  hello  \") ; => \"hello  \"",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/str.phel",
      \Phel::keyword("line"), 124,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/str.phel",
      \Phel::keyword("line"), 128,
      \Phel::keyword("column"), 38
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[s]"
  )
);
\Phel::addDefinition(
  "phel\\str",
  "trimr",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\str\\trimr";

    public function __invoke($s) {
      return preg_replace("/[\\s]+\$/u", "", $s);
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(trimr s)\n```\nRemoves whitespace from the right side of string.",
    \Phel::keyword("example"), "(trimr \"  hello  \") ; => \"  hello\"",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/str.phel",
      \Phel::keyword("line"), 130,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/str.phel",
      \Phel::keyword("line"), 134,
      \Phel::keyword("column"), 38
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[s]"
  )
);
\Phel::addDefinition(
  "phel\\str",
  "blank?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\str\\blank?";

    public function __invoke($s) {
      if (($__truthy = $s) !== null && $__truthy !== false) {
        return (\Phel::getDefinition("phel\\core", "not="))(0, preg_match("/^\\s*\$/u", $s));
      } else {
        return true;
      }

    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(blank? s)\n```\nTrue if s is nil, empty, or contains only whitespace.",
    \Phel::keyword("example"), "(blank? \"   \") ; => true",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/str.phel",
      \Phel::keyword("line"), 136,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/str.phel",
      \Phel::keyword("line"), 142,
      \Phel::keyword("column"), 10
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[s]"
  )
);
\Phel::addDefinition(
  "phel\\str",
  "starts-with?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\str\\starts_with?";

    public function __invoke($s, $substr) {
      return str_starts_with($s, $substr);
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(starts-with? s substr)\n```\nTrue if s starts with substr.",
    \Phel::keyword("example"), "(starts-with? \"hello world\" \"hello\") ; => true",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/str.phel",
      \Phel::keyword("line"), 144,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/str.phel",
      \Phel::keyword("line"), 148,
      \Phel::keyword("column"), 33
    ),
    "min-arity", 2,
    "is-variadic", false,
    "arglists", "[s substr]"
  )
);
\Phel::addDefinition(
  "phel\\str",
  "ends-with?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\str\\ends_with?";

    public function __invoke($s, $substr) {
      return str_ends_with($s, $substr);
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(ends-with? s substr)\n```\nTrue if s ends with substr.",
    \Phel::keyword("example"), "(ends-with? \"hello world\" \"world\") ; => true",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/str.phel",
      \Phel::keyword("line"), 150,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/str.phel",
      \Phel::keyword("line"), 154,
      \Phel::keyword("column"), 31
    ),
    "min-arity", 2,
    "is-variadic", false,
    "arglists", "[s substr]"
  )
);
\Phel::addDefinition(
  "phel\\str",
  "contains?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\str\\contains?";

    public function __invoke($s, $substr) {
      return str_contains($s, $substr);
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(contains? s substr)\n```\nTrue if s contains substr.",
    \Phel::keyword("example"), "(contains? \"hello world\" \"lo wo\") ; => true",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/str.phel",
      \Phel::keyword("line"), 156,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/str.phel",
      \Phel::keyword("line"), 160,
      \Phel::keyword("column"), 30
    ),
    "min-arity", 2,
    "is-variadic", false,
    "arglists", "[s substr]"
  )
);
\Phel::addDefinition(
  "phel\\str",
  "includes?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\str\\includes?";

    public function __invoke($s, $substr) {
      return str_contains($s, $substr);
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(includes? s substr)\n```\nTrue if s includes substr.",
    \Phel::keyword("example"), "(includes? \"hello world\" \"world\") ; => true",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/str.phel",
      \Phel::keyword("line"), 162,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/str.phel",
      \Phel::keyword("line"), 166,
      \Phel::keyword("column"), 30
    ),
    "min-arity", 2,
    "is-variadic", false,
    "arglists", "[s substr]"
  )
);
\Phel::addDefinition(
  "phel\\str",
  "re-quote-replacement",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\str\\re_quote_replacement";

    public function __invoke($replacement) {
      return preg_replace("/([\\\$])/", "\$1", $replacement);
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(re-quote-replacement replacement)\n```\nEscapes special characters in a replacement string for literal use.",
    \Phel::keyword("example"), "(re-quote-replacement \"\$1.00\") ; => \"\\\$1.00\"",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/str.phel",
      \Phel::keyword("line"), 168,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/str.phel",
      \Phel::keyword("line"), 172,
      \Phel::keyword("column"), 52
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[replacement]"
  )
);
\Phel::addDefinition(
  "phel\\str",
  "escape",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\str\\escape";

    public function __invoke($s, $cmap) {
      $chars_1663 = mb_str_split($s);
      $mapped_1664 = array_map(new class($s, $cmap, $chars_1663) extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\str\\escape.mapped";
        private $s;
        private $cmap;
        private $chars_1663;

        public function __construct($s, $cmap, $chars_1663) {
          $this->s = $s;
          $this->cmap = $cmap;
          $this->chars_1663 = $chars_1663;
        }

        public function __invoke($ch) {
          $s = $this->s;
          $cmap = $this->cmap;
          $chars_1663 = $this->chars_1663;
          $__phel_1665_1666 = ($cmap)($ch);
          if (($__truthy = $__phel_1665_1666) !== null && $__truthy !== false) {
            return $__phel_1665_1666;
          } else {
            return $ch;
          }

        }
      }, $chars_1663);
      return implode("", $mapped_1664);
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(escape s cmap)\n```\nReturns a new string with each character escaped according to cmap.",
    \Phel::keyword("example"), "(escape \"hello\" {\"h\" \"H\" \"o\" \"O\"}) ; => \"HellO\"",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/str.phel",
      \Phel::keyword("line"), 174,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/str.phel",
      \Phel::keyword("line"), 180,
      \Phel::keyword("column"), 29
    ),
    "min-arity", 2,
    "is-variadic", false,
    "arglists", "[s cmap]"
  )
);
\Phel::addDefinition(
  "phel\\str",
  "index-of",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\str\\index_of";

    public function __invoke($s, $value, ...$__phel_1667) {
      $__phel_1667 = \Phel::vector($__phel_1667);
      $__phel_1668_1671 = $__phel_1667;
      $__phel_1669_1672 = (\Phel::getDefinition("phel\\core", "first"))($__phel_1668_1671);
      $__phel_1670_1673 = (\Phel::getDefinition("phel\\core", "next"))($__phel_1668_1671);
      $from_index_1674 = $__phel_1669_1672;
      $from_index_1675 = (function() use($s,$value,$__phel_1667,$__phel_1668_1671,$__phel_1669_1672,$__phel_1670_1673,$from_index_1674) {
        $__phel_1676_1677 = $from_index_1674;
        if (($__truthy = $__phel_1676_1677) !== null && $__truthy !== false) {
          return $__phel_1676_1677;
        } else {
          return 0;
        }

      })();
      $from_index_1678 = (function() use($s,$value,$__phel_1667,$__phel_1668_1671,$__phel_1669_1672,$__phel_1670_1673,$from_index_1675) {
        $abs_1679 = abs($from_index_1675);
        $v_1680 = (\Phel::getDefinition("phel\\core", "min"))($abs_1679, (function() use($s,$value,$__phel_1667,$__phel_1668_1671,$__phel_1669_1672,$__phel_1670_1673,$from_index_1675,$abs_1679) {
          (\Phel::getDefinition("phel\\core", "assert-non-nil"))(mb_strlen($s));
          return (mb_strlen($s) - 1);
        })());
        if (($__truthy = ($from_index_1675 < 0)) !== null && $__truthy !== false) {
          (\Phel::getDefinition("phel\\core", "assert-non-nil"))($v_1680, -1);
          return ($v_1680 * -1);
        } else {
          return $v_1680;
        }

      })();
      $result_1681 = mb_strpos($s, $value, $from_index_1678);
      if (($__truthy = (\Phel::getDefinition("phel\\core", "="))($result_1681, false)) !== null && $__truthy !== false) {
        return null;
      } else {
        return $result_1681;
      }

    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(index-of s value & [from-index])\n```\nReturns the index of value in s, or nil if not found.",
    \Phel::keyword("example"), "(index-of \"hello world\" \"world\") ; => 6",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/str.phel",
      \Phel::keyword("line"), 182,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/str.phel",
      \Phel::keyword("line"), 195,
      \Phel::keyword("column"), 15
    ),
    "min-arity", 2,
    "is-variadic", true,
    "arglists", "[s value & __phel_1667]"
  )
);
\Phel::addDefinition(
  "phel\\str",
  "last-index-of",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\str\\last_index_of";

    public function __invoke($s, $value, ...$__phel_1682) {
      $__phel_1682 = \Phel::vector($__phel_1682);
      $__phel_1683_1686 = $__phel_1682;
      $__phel_1684_1687 = (\Phel::getDefinition("phel\\core", "first"))($__phel_1683_1686);
      $__phel_1685_1688 = (\Phel::getDefinition("phel\\core", "next"))($__phel_1683_1686);
      $from_index_1689 = $__phel_1684_1687;
      $len_1690 = mb_strlen($s);
      $max_index_1691 = (function() use($s,$value,$__phel_1682,$__phel_1683_1686,$__phel_1684_1687,$__phel_1685_1688,$from_index_1689,$len_1690) {
        (\Phel::getDefinition("phel\\core", "assert-non-nil"))($len_1690);
        return ($len_1690 - 1);
      })();
      $from_index_1692 = (function() use($s,$value,$__phel_1682,$__phel_1683_1686,$__phel_1684_1687,$__phel_1685_1688,$from_index_1689,$len_1690,$max_index_1691) {
        $__phel_1693_1694 = $from_index_1689;
        if (($__truthy = $__phel_1693_1694) !== null && $__truthy !== false) {
          return $__phel_1693_1694;
        } else {
          return $max_index_1691;
        }

      })();
      $from_index_1695 = (function() use($s,$value,$__phel_1682,$__phel_1683_1686,$__phel_1684_1687,$__phel_1685_1688,$from_index_1692,$len_1690,$max_index_1691) {
        $abs_1696 = abs($from_index_1692);
        $v_1697 = (\Phel::getDefinition("phel\\core", "min"))($abs_1696, $max_index_1691);
        if (($__truthy = ($from_index_1692 < 0)) !== null && $__truthy !== false) {
          (\Phel::getDefinition("phel\\core", "assert-non-nil"))($max_index_1691, $v_1697);
          return ($max_index_1691 - $v_1697);
        } else {
          return $v_1697;
        }

      })();
      $result_1698 = mb_strrpos($s, $value, 0);
      if (($__truthy = ($result_1698 === false)) !== null && $__truthy !== false) {
        return null;
      } else {
        if (($__truthy = ($result_1698 <= $from_index_1695)) !== null && $__truthy !== false) {
          return $result_1698;
        } else {
          $sub_1699 = mb_substr($s, 0, ($from_index_1695 + 1));
          $result_1700 = mb_strrpos($sub_1699, $value, 0);
          if (($__truthy = ($result_1700 === false)) !== null && $__truthy !== false) {
            return null;
          } else {
            return $result_1700;
          }

        }

      }

    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(last-index-of s value & [from-index])\n```\nReturns the last index of value in s, or nil if not found.",
    \Phel::keyword("example"), "(last-index-of \"hello world world\" \"world\") ; => 12",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/str.phel",
      \Phel::keyword("line"), 197,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/str.phel",
      \Phel::keyword("line"), 218,
      \Phel::keyword("column"), 24
    ),
    "min-arity", 2,
    "is-variadic", true,
    "arglists", "[s value & __phel_1682]"
  )
);
\Phel::addDefinition(
  "phel\\str",
  "split-lines",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\str\\split_lines";

    public function __invoke($s) {
      return (\Phel::getDefinition("phel\\str", "split"))($s, "/\\r?\\n/");
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(split-lines s)\n```\nSplits s on \\n or \\r\\n. Trailing empty lines are not returned.",
    \Phel::keyword("example"), "(split-lines \"hello\\nworld\\ntest\") ; => [\"hello\" \"world\" \"test\"]",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/str.phel",
      \Phel::keyword("line"), 220,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/str.phel",
      \Phel::keyword("line"), 224,
      \Phel::keyword("column"), 24
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[s]"
  )
);
\Phel::addDefinition(
  "phel\\str",
  "pad-left",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\str\\pad_left";

    public function __invoke($s, $len, ...$__phel_1701) {
      $__phel_1701 = \Phel::vector($__phel_1701);
      $__phel_1702_1705 = $__phel_1701;
      $__phel_1703_1706 = (\Phel::getDefinition("phel\\core", "first"))($__phel_1702_1705);
      $__phel_1704_1707 = (\Phel::getDefinition("phel\\core", "next"))($__phel_1702_1705);
      $pad_str_1708 = $__phel_1703_1706;
      return str_pad($s, $len, (function() use($s,$len,$__phel_1701,$__phel_1702_1705,$__phel_1703_1706,$__phel_1704_1707,$pad_str_1708) {
        $__phel_1709_1710 = $pad_str_1708;
        if (($__truthy = $__phel_1709_1710) !== null && $__truthy !== false) {
          return $__phel_1709_1710;
        } else {
          return " ";
        }

      })(), STR_PAD_LEFT);
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(pad-left s len & [pad-str])\n```\nReturns a string padded on the left side to length len.",
    \Phel::keyword("example"), "(pad-left \"hello\" 10) ; => \"     hello\"",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/str.phel",
      \Phel::keyword("line"), 226,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/str.phel",
      \Phel::keyword("line"), 230,
      \Phel::keyword("column"), 56
    ),
    "min-arity", 2,
    "is-variadic", true,
    "arglists", "[s len & __phel_1701]"
  )
);
\Phel::addDefinition(
  "phel\\str",
  "pad-right",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\str\\pad_right";

    public function __invoke($s, $len, ...$__phel_1711) {
      $__phel_1711 = \Phel::vector($__phel_1711);
      $__phel_1712_1715 = $__phel_1711;
      $__phel_1713_1716 = (\Phel::getDefinition("phel\\core", "first"))($__phel_1712_1715);
      $__phel_1714_1717 = (\Phel::getDefinition("phel\\core", "next"))($__phel_1712_1715);
      $pad_str_1718 = $__phel_1713_1716;
      return str_pad($s, $len, (function() use($s,$len,$__phel_1711,$__phel_1712_1715,$__phel_1713_1716,$__phel_1714_1717,$pad_str_1718) {
        $__phel_1719_1720 = $pad_str_1718;
        if (($__truthy = $__phel_1719_1720) !== null && $__truthy !== false) {
          return $__phel_1719_1720;
        } else {
          return " ";
        }

      })(), STR_PAD_RIGHT);
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(pad-right s len & [pad-str])\n```\nReturns a string padded on the right side to length len.",
    \Phel::keyword("example"), "(pad-right \"hello\" 10) ; => \"hello     \"",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/str.phel",
      \Phel::keyword("line"), 232,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/str.phel",
      \Phel::keyword("line"), 236,
      \Phel::keyword("column"), 57
    ),
    "min-arity", 2,
    "is-variadic", true,
    "arglists", "[s len & __phel_1711]"
  )
);
\Phel::addDefinition(
  "phel\\str",
  "pad-both",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\str\\pad_both";

    public function __invoke($s, $len, ...$__phel_1721) {
      $__phel_1721 = \Phel::vector($__phel_1721);
      $__phel_1722_1725 = $__phel_1721;
      $__phel_1723_1726 = (\Phel::getDefinition("phel\\core", "first"))($__phel_1722_1725);
      $__phel_1724_1727 = (\Phel::getDefinition("phel\\core", "next"))($__phel_1722_1725);
      $pad_str_1728 = $__phel_1723_1726;
      return str_pad($s, $len, (function() use($s,$len,$__phel_1721,$__phel_1722_1725,$__phel_1723_1726,$__phel_1724_1727,$pad_str_1728) {
        $__phel_1729_1730 = $pad_str_1728;
        if (($__truthy = $__phel_1729_1730) !== null && $__truthy !== false) {
          return $__phel_1729_1730;
        } else {
          return " ";
        }

      })(), STR_PAD_BOTH);
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(pad-both s len & [pad-str])\n```\nReturns a string padded on both sides to length len.",
    \Phel::keyword("example"), "(pad-both \"hello\" 11) ; => \"   hello   \"",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/str.phel",
      \Phel::keyword("line"), 238,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/str.phel",
      \Phel::keyword("line"), 242,
      \Phel::keyword("column"), 56
    ),
    "min-arity", 2,
    "is-variadic", true,
    "arglists", "[s len & __phel_1721]"
  )
);
