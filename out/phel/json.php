<?php declare(strict_types=1);
namespace phel\json;
require_once __DIR__ . '/../phel/core.php';
\Phel::addDefinition(
  "phel\\core",
  "*file*",
  "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/json.phel"
);
\Phel::addDefinition(
  "phel\\core",
  "*ns*",
  "phel\\json"
);
\Phel::addDefinition(
  "phel\\json",
  "valid-key?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\json\\valid_key?";

    public function __invoke($v) {
      $__phel_2761_2762 = (\Phel::getDefinition("phel\\core", "int?"))($v);
      if (($__truthy = $__phel_2761_2762) !== null && $__truthy !== false) {
        return $__phel_2761_2762;
      } else {
        $__phel_2763_2764 = (\Phel::getDefinition("phel\\core", "float?"))($v);
        if (($__truthy = $__phel_2763_2764) !== null && $__truthy !== false) {
          return $__phel_2763_2764;
        } else {
          $__phel_2765_2766 = (\Phel::getDefinition("phel\\core", "symbol?"))($v);
          if (($__truthy = $__phel_2765_2766) !== null && $__truthy !== false) {
            return $__phel_2765_2766;
          } else {
            $__phel_2767_2768 = (\Phel::getDefinition("phel\\core", "keyword?"))($v);
            if (($__truthy = $__phel_2767_2768) !== null && $__truthy !== false) {
              return $__phel_2767_2768;
            } else {
              return (\Phel::getDefinition("phel\\core", "string?"))($v);
            }

          }

        }

      }

    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(valid-key? v)\n```\nChecks if a value can be used as a JSON key.",
    \Phel::keyword("example"), "(valid-key? :name) ; => true",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/json.phel",
      \Phel::keyword("line"), 4,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/json.phel",
      \Phel::keyword("line"), 8,
      \Phel::keyword("column"), 64
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[v]"
  )
);
\Phel::addDefinition(
  "phel\\json",
  "encode-value",
  null,
  \Phel::map(
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/json.phel",
      \Phel::keyword("line"), 10,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/json.phel",
      \Phel::keyword("line"), 10,
      \Phel::keyword("column"), 26
    )
  )
);
\Phel::addDefinition(
  "phel\\json",
  "encode-value-iterable",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\json\\encode_value_iterable";

    public function __invoke($x) {
      $arr_2769 = array();
      foreach (\Phel\Lang\Seq::toIterable($x) as $k => $v) {
        if (($__truthy = (\Phel::getDefinition("phel\\json", "valid-key?"))($k)) !== null && $__truthy !== false) {

        } else {
          throw (new \JsonException("Key can only be an integer, float, symbol, keyword or a string."));
        }

        ($arr_2769)[((\Phel::getDefinition("phel\\json", "encode-value"))($k))] = (\Phel::getDefinition("phel\\json", "encode-value"))($v);
      }
      return $arr_2769;
    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(encode-value-iterable x)\n```\n",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/json.phel",
      \Phel::keyword("line"), 12,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/json.phel",
      \Phel::keyword("line"), 18,
      \Phel::keyword("column"), 9
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[x]"
  )
);
\Phel::addDefinition(
  "phel\\json",
  "encode-value",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\json\\encode_value";

    public function __invoke($x) {
      if (($__truthy = is_iterable($x)) !== null && $__truthy !== false) {
        return (\Phel::getDefinition("phel\\json", "encode-value-iterable"))($x);
      } else {
        if (($__truthy = (\Phel::getDefinition("phel\\core", "symbol?"))($x)) !== null && $__truthy !== false) {
          return (\Phel::getDefinition("phel\\core", "name"))($x);
        } else {
          if (($__truthy = (\Phel::getDefinition("phel\\core", "keyword?"))($x)) !== null && $__truthy !== false) {
            return (\Phel::getDefinition("phel\\core", "name"))($x);
          } else {
            if (($__truthy = (\Phel::getDefinition("phel\\core", "float?"))($x)) !== null && $__truthy !== false) {
              return (\Phel::getDefinition("phel\\core", "str"))($x);
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
    \Phel::keyword("doc"), "```phel\n(encode-value x)\n```\nConverts a Phel value to JSON-compatible format.",
    \Phel::keyword("example"), "(encode-value :name) ; => \"name\"",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/json.phel",
      \Phel::keyword("line"), 20,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/json.phel",
      \Phel::keyword("line"), 29,
      \Phel::keyword("column"), 12
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[x]"
  )
);
\Phel::addDefinition(
  "phel\\json",
  "encode",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\json\\encode";

    public function __invoke($value, ...$__phel_2770) {
      $__phel_2770 = \Phel::vector($__phel_2770);
      $__phel_2771_2777 = $__phel_2770;
      $__phel_2772_2778 = (\Phel::getDefinition("phel\\core", "first"))($__phel_2771_2777);
      $__phel_2773_2779 = (\Phel::getDefinition("phel\\core", "next"))($__phel_2771_2777);
      $__phel_2774_2780 = $__phel_2772_2778;
      $__phel_2775_2781 = (($__phel_2774_2780)[(\Phel::keyword("flags"))] ?? null);
      $flags_2782 = $__phel_2775_2781;
      $__phel_2776_2783 = (($__phel_2774_2780)[(\Phel::keyword("depth"))] ?? null);
      $depth_2784 = $__phel_2776_2783;
      $flags_2785 = (function() use($value,$__phel_2770,$__phel_2771_2777,$__phel_2772_2778,$__phel_2773_2779,$__phel_2774_2780,$__phel_2775_2781,$flags_2782,$__phel_2776_2783,$depth_2784) {
        $__phel_2786_2787 = $flags_2782;
        if (($__truthy = $__phel_2786_2787) !== null && $__truthy !== false) {
          return $__phel_2786_2787;
        } else {
          return 0;
        }

      })();
      $depth_2788 = (function() use($value,$__phel_2770,$__phel_2771_2777,$__phel_2772_2778,$__phel_2773_2779,$__phel_2774_2780,$__phel_2775_2781,$flags_2785,$__phel_2776_2783,$depth_2784) {
        $__phel_2789_2790 = $depth_2784;
        if (($__truthy = $__phel_2789_2790) !== null && $__truthy !== false) {
          return $__phel_2789_2790;
        } else {
          return 512;
        }

      })();
      if (($__truthy = is_resource($value)) !== null && $__truthy !== false) {
        throw (new \JsonException("Value can be any type except a resource."));
      } else {

      }

      if (($__truthy = (\Phel::getDefinition("phel\\core", "int?"))($flags_2785)) !== null && $__truthy !== false) {

      } else {
        throw (new \JsonException("Flags must be an integer."));
      }

      if (($__truthy = (\Phel::getDefinition("phel\\core", "int?"))($depth_2788)) !== null && $__truthy !== false) {

      } else {
        throw (new \JsonException("Depth must be an integer."));
      }

      if (($__truthy = ($depth_2788 > 0)) !== null && $__truthy !== false) {

      } else {
        throw (new \JsonException("Depth must be greater than zero."));
      }

      return json_encode((\Phel::getDefinition("phel\\json", "encode-value"))($value), $flags_2785, $depth_2788);
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(encode value & [{:flags flags, :depth depth}])\n```\nEncodes a Phel value to a JSON string.",
    \Phel::keyword("example"), "(encode {:name \"Alice\"}) ; => \"{\\\"name\\\":\\\"Alice\\\"}\"",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/json.phel",
      \Phel::keyword("line"), 31,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/json.phel",
      \Phel::keyword("line"), 41,
      \Phel::keyword("column"), 56
    ),
    "min-arity", 1,
    "is-variadic", true,
    "arglists", "[value & __phel_2770]"
  )
);
\Phel::addDefinition(
  "phel\\json",
  "decode-value",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\json\\decode_value";

    public function __invoke($x) {
      if (($__truthy = (\Phel::getDefinition("phel\\core", "indexed?"))($x)) !== null && $__truthy !== false) {
        $__phel_2791_2794 = (\Phel::getDefinition("phel\\core", "var"))(\Phel::vector([]));
        foreach (\Phel\Lang\Seq::toIterable($x) as $__phel_2793) {
          $v_2795 = $__phel_2793;
          (\Phel::getDefinition("phel\\core", "swap!"))($__phel_2791_2794, new class($x, $__phel_2791_2794, $__phel_2793, $v_2795) extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\json\\decode_value";
            private $x;
            private $__phel_2791_2794;
            private $__phel_2793;
            private $v_2795;

            public function __construct($x, $__phel_2791_2794, $__phel_2793, $v_2795) {
              $this->x = $x;
              $this->__phel_2791_2794 = $__phel_2791_2794;
              $this->__phel_2793 = $__phel_2793;
              $this->v_2795 = $v_2795;
            }

            public function __invoke($__phel_2792) {
              $x = $this->x;
              $__phel_2791_2794 = $this->__phel_2791_2794;
              $__phel_2793 = $this->__phel_2793;
              $v_2795 = $this->v_2795;
              return (\Phel::getDefinition("phel\\core", "conj"))($__phel_2792, (\Phel::getDefinition("phel\\json", "decode-value"))($v_2795));
            }
          });
        }
        return (\Phel::getDefinition("phel\\core", "deref"))($__phel_2791_2794);
      } else {
        if (($__truthy = (\Phel::getDefinition("phel\\core", "php-array?"))($x)) !== null && $__truthy !== false) {
          $hashmap_2796 = (\Phel::getDefinition("phel\\core", "transient"))(\Phel::map());
          foreach (\Phel\Lang\Seq::toIterable($x) as $k => $v) {
            (\Phel::getDefinition("phel\\core", "assoc"))($hashmap_2796, (\Phel::getDefinition("phel\\core", "keyword"))($k), (\Phel::getDefinition("phel\\json", "decode-value"))($v));
          }
          return (\Phel::getDefinition("phel\\core", "persistent"))($hashmap_2796);
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
    \Phel::keyword("doc"), "```phel\n(decode-value x)\n```\nConverts a JSON value to Phel format.",
    \Phel::keyword("example"), "(decode-value [1 2 3]) ; => [1 2 3]",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/json.phel",
      \Phel::keyword("line"), 43,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/json.phel",
      \Phel::keyword("line"), 53,
      \Phel::keyword("column"), 12
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[x]"
  )
);
\Phel::addDefinition(
  "phel\\json",
  "decode",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\json\\decode";

    public function __invoke($json, ...$__phel_2797) {
      $__phel_2797 = \Phel::vector($__phel_2797);
      $__phel_2798_2804 = $__phel_2797;
      $__phel_2799_2805 = (\Phel::getDefinition("phel\\core", "first"))($__phel_2798_2804);
      $__phel_2800_2806 = (\Phel::getDefinition("phel\\core", "next"))($__phel_2798_2804);
      $__phel_2801_2807 = $__phel_2799_2805;
      $__phel_2802_2808 = (($__phel_2801_2807)[(\Phel::keyword("flags"))] ?? null);
      $flags_2809 = $__phel_2802_2808;
      $__phel_2803_2810 = (($__phel_2801_2807)[(\Phel::keyword("depth"))] ?? null);
      $depth_2811 = $__phel_2803_2810;
      $flags_2812 = (function() use($json,$__phel_2797,$__phel_2798_2804,$__phel_2799_2805,$__phel_2800_2806,$__phel_2801_2807,$__phel_2802_2808,$flags_2809,$__phel_2803_2810,$depth_2811) {
        $__phel_2813_2814 = $flags_2809;
        if (($__truthy = $__phel_2813_2814) !== null && $__truthy !== false) {
          return $__phel_2813_2814;
        } else {
          return 0;
        }

      })();
      $depth_2815 = (function() use($json,$__phel_2797,$__phel_2798_2804,$__phel_2799_2805,$__phel_2800_2806,$__phel_2801_2807,$__phel_2802_2808,$flags_2812,$__phel_2803_2810,$depth_2811) {
        $__phel_2816_2817 = $depth_2811;
        if (($__truthy = $__phel_2816_2817) !== null && $__truthy !== false) {
          return $__phel_2816_2817;
        } else {
          return 512;
        }

      })();
      if (($__truthy = (\Phel::getDefinition("phel\\core", "string?"))($json)) !== null && $__truthy !== false) {

      } else {
        throw (new \JsonException("Json must be a string."));
      }

      if (($__truthy = (\Phel::getDefinition("phel\\core", "int?"))($flags_2812)) !== null && $__truthy !== false) {

      } else {
        throw (new \JsonException("Flags must be an integer."));
      }

      if (($__truthy = (\Phel::getDefinition("phel\\core", "int?"))($depth_2815)) !== null && $__truthy !== false) {

      } else {
        throw (new \JsonException("Depth must be an integer."));
      }

      if (($__truthy = ($depth_2815 > 0)) !== null && $__truthy !== false) {

      } else {
        throw (new \JsonException("Depth must be greater than zero."));
      }

      return (\Phel::getDefinition("phel\\json", "decode-value"))(json_decode($json, true, $depth_2815, $flags_2812));
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(decode json & [{:flags flags, :depth depth}])\n```\nDecodes a JSON string to a Phel value.",
    \Phel::keyword("example"), "(decode \"{\\\"name\\\":\\\"Alice\\\"}\") ; => {:name \"Alice\"}",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/json.phel",
      \Phel::keyword("line"), 55,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/json.phel",
      \Phel::keyword("line"), 65,
      \Phel::keyword("column"), 60
    ),
    "min-arity", 1,
    "is-variadic", true,
    "arglists", "[json & __phel_2797]"
  )
);
