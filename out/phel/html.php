<?php declare(strict_types=1);
namespace phel\html;
require_once __DIR__ . '/../phel/core.php';
\Phel::addDefinition(
  "phel\\core",
  "*file*",
  "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/html.phel"
);
\Phel::addDefinition(
  "phel\\core",
  "*ns*",
  "phel\\html"
);
if (!class_exists('phel\html\raw_string')) {
class raw_string extends \Phel\Lang\Collections\Struct\AbstractPersistentStruct {

  protected const array ALLOWED_KEYS = ['s'];

  protected $s;

  public function __construct($s, $meta = null) {
    parent::__construct();
    $this->s = $s;
    $this->meta = $meta;
  }
}
}

\Phel::addDefinition(
  "phel\\html",
  "raw-string",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\html\\raw_string";

    public function __invoke($s) {
      return (function() use($s) {
        $target_2818 = "phel\\html\\raw_string";
        return new $target_2818($s);
      })();
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(raw-string s)\n```\nCreates a new raw-string struct.",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/html.phel",
      \Phel::keyword("line"), 4,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/html.phel",
      \Phel::keyword("line"), 4,
      \Phel::keyword("column"), 26
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[s]"
  )
);

\Phel::addDefinition(
  "phel\\html",
  "raw-string?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\html\\raw_string?";

    public function __invoke($x) {
      return is_a($x, "phel\\html\\raw_string");
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(raw-string? x)\n```\nChecks if `x` is an instance of the raw-string struct.",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/html.phel",
      \Phel::keyword("line"), 4,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/html.phel",
      \Phel::keyword("line"), 4,
      \Phel::keyword("column"), 26
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[x]"
  )
);
\Phel::addDefinition(
  "phel\\html",
  "escape-html",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\html\\escape_html";

    public function __invoke($s) {
      return htmlspecialchars($s, (function() use($s) {
        (\Phel::getDefinition("phel\\core", "assert-non-nil"))(ENT_QUOTES, ENT_SUBSTITUTE);
        return (ENT_QUOTES | ENT_SUBSTITUTE);
      })());
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(escape-html s)\n```\nEscapes HTML special characters to prevent XSS.",
    \Phel::keyword("example"), "(escape-html \"<div>\") ; => \"&lt;div&gt;\"",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/html.phel",
      \Phel::keyword("line"), 6,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/html.phel",
      \Phel::keyword("line"), 10,
      \Phel::keyword("column"), 70
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[s]"
  )
);
\Phel::addDefinition(
  "phel\\html",
  "to-str",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\html\\to_str";

    public function __invoke($x) {
      if (($__truthy = (\Phel::getDefinition("phel\\core", "string?"))($x)) !== null && $__truthy !== false) {
        return $x;
      } else {
        if (($__truthy = (\Phel::getDefinition("phel\\core", "keyword?"))($x)) !== null && $__truthy !== false) {
          return (\Phel::getDefinition("phel\\core", "name"))($x);
        } else {
          if (($__truthy = (\Phel::getDefinition("phel\\core", "nil?"))($x)) !== null && $__truthy !== false) {
            return "";
          } else {
            return (\Phel::getDefinition("phel\\core", "str"))($x);
          }

        }

      }

    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(to-str x)\n```\n",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/html.phel",
      \Phel::keyword("line"), 12,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/html.phel",
      \Phel::keyword("line"), 17,
      \Phel::keyword("column"), 13
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[x]"
  )
);
\Phel::addDefinition(
  "phel\\html",
  "void-tags",
  (\Phel::getDefinition("phel\\core", "hash-set"))("area", "base", "br", "col", "command", "embed", "hr", "img", "input", "keygen", "link", "meta", "param", "source", "track", "wbr"),
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/html.phel",
      \Phel::keyword("line"), 19,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/html.phel",
      \Phel::keyword("line"), 22,
      \Phel::keyword("column"), 41
    )
  )
);
\Phel::addDefinition(
  "phel\\html",
  "container-tag?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\html\\container_tag?";

    public function __invoke($tag, $content) {
      $__phel_2820_2821 = $content;
      if (($__truthy = $__phel_2820_2821) !== null && $__truthy !== false) {
        return $__phel_2820_2821;
      } else {
        return (\Phel::getDefinition("phel\\core", "not"))((\Phel::getDefinition("phel\\core", "contains?"))(\Phel::getDefinition("phel\\html", "void-tags"), $tag));
      }

    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(container-tag? tag content)\n```\n",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/html.phel",
      \Phel::keyword("line"), 24,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/html.phel",
      \Phel::keyword("line"), 25,
      \Phel::keyword("column"), 47
    ),
    "min-arity", 2,
    "is-variadic", false,
    "arglists", "[tag content]"
  )
);
\Phel::addDefinition(
  "phel\\html",
  "normalize-element",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\html\\normalize_element";

    public function __invoke($__phel_2822) {
      $__phel_2823_2827 = $__phel_2822;
      $__phel_2824_2828 = (\Phel::getDefinition("phel\\core", "first"))($__phel_2823_2827);
      $__phel_2825_2829 = (\Phel::getDefinition("phel\\core", "next"))($__phel_2823_2827);
      $tag_2830 = $__phel_2824_2828;
      $__phel_2826_2831 = $__phel_2825_2829;
      $content_2832 = $__phel_2826_2831;
      if (($__truthy = (function() use($__phel_2822,$__phel_2823_2827,$__phel_2824_2828,$__phel_2825_2829,$tag_2830,$__phel_2826_2831,$content_2832) {
        $__phel_2833_2834 = (\Phel::getDefinition("phel\\core", "keyword?"))($tag_2830);
        if (($__truthy = $__phel_2833_2834) !== null && $__truthy !== false) {
          return $__phel_2833_2834;
        } else {
          return (\Phel::getDefinition("phel\\core", "string?"))($tag_2830);
        }

      })()) !== null && $__truthy !== false) {

      } else {
        throw (new \InvalidArgumentException((\Phel::getDefinition("phel\\core", "str"))($tag_2830, " is not a valid element name.")));
      }

      $tag_2835 = (\Phel::getDefinition("phel\\html", "to-str"))($tag_2830);
      $elem_2836 = (\Phel::getDefinition("phel\\core", "first"))($content_2832);
      $map_attrs_2837 = (($__truthy = (\Phel::getDefinition("phel\\core", "associative?"))($elem_2836)) !== null && $__truthy !== false ? $elem_2836 : \Phel::map());
      $content_2838 = (($__truthy = (\Phel::getDefinition("phel\\core", "associative?"))($elem_2836)) !== null && $__truthy !== false ? (\Phel::getDefinition("phel\\core", "next"))($content_2832) : $content_2832);
      $content_arr_2839 = (($__truthy = (\Phel::getDefinition("phel\\core", "nil?"))($content_2838)) !== null && $__truthy !== false ? null : (\Phel::getDefinition("phel\\core", "list"))(...(($content_2838) ?? [])));
      return \Phel::vector([$tag_2835, $map_attrs_2837, $content_arr_2839]);
    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(normalize-element [tag & content])\n```\n",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/html.phel",
      \Phel::keyword("line"), 27,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/html.phel",
      \Phel::keyword("line"), 36,
      \Phel::keyword("column"), 36
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[__phel_2822]"
  )
);
\Phel::addDefinition(
  "phel\\html",
  "render-html",
  null,
  \Phel::map(
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/html.phel",
      \Phel::keyword("line"), 42,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/html.phel",
      \Phel::keyword("line"), 42,
      \Phel::keyword("column"), 21
    )
  )
);
\Phel::addDefinition(
  "phel\\html",
  "render-style-table",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\html\\render_style_table";

    public function __invoke($value) {
      $kvs_2840 = (function() use($value) {
        $__phel_2841_2845 = (\Phel::getDefinition("phel\\core", "var"))(\Phel::vector([]));
        foreach (\Phel\Lang\Seq::toIterable($value) as $__phel_2844 => $__phel_2843) {
          $__phel_2846_2851 = \Phel::vector([$__phel_2844, $__phel_2843]);
          $__phel_2847_2852 = (\Phel::getDefinition("phel\\core", "first"))($__phel_2846_2851);
          $__phel_2848_2853 = (\Phel::getDefinition("phel\\core", "next"))($__phel_2846_2851);
          $k_2854 = $__phel_2847_2852;
          $__phel_2849_2855 = (\Phel::getDefinition("phel\\core", "first"))($__phel_2848_2853);
          $__phel_2850_2856 = (\Phel::getDefinition("phel\\core", "next"))($__phel_2848_2853);
          $v_2857 = $__phel_2849_2855;
          (\Phel::getDefinition("phel\\core", "swap!"))($__phel_2841_2845, new class($value, $__phel_2841_2845, $__phel_2843, $__phel_2844, $__phel_2846_2851, $__phel_2847_2852, $__phel_2848_2853, $k_2854, $__phel_2849_2855, $__phel_2850_2856, $v_2857) extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\html\\render_style_table.kvs";
            private $value;
            private $__phel_2841_2845;
            private $__phel_2843;
            private $__phel_2844;
            private $__phel_2846_2851;
            private $__phel_2847_2852;
            private $__phel_2848_2853;
            private $k_2854;
            private $__phel_2849_2855;
            private $__phel_2850_2856;
            private $v_2857;

            public function __construct($value, $__phel_2841_2845, $__phel_2843, $__phel_2844, $__phel_2846_2851, $__phel_2847_2852, $__phel_2848_2853, $k_2854, $__phel_2849_2855, $__phel_2850_2856, $v_2857) {
              $this->value = $value;
              $this->__phel_2841_2845 = $__phel_2841_2845;
              $this->__phel_2843 = $__phel_2843;
              $this->__phel_2844 = $__phel_2844;
              $this->__phel_2846_2851 = $__phel_2846_2851;
              $this->__phel_2847_2852 = $__phel_2847_2852;
              $this->__phel_2848_2853 = $__phel_2848_2853;
              $this->k_2854 = $k_2854;
              $this->__phel_2849_2855 = $__phel_2849_2855;
              $this->__phel_2850_2856 = $__phel_2850_2856;
              $this->v_2857 = $v_2857;
            }

            public function __invoke($__phel_2842) {
              $value = $this->value;
              $__phel_2841_2845 = $this->__phel_2841_2845;
              $__phel_2843 = $this->__phel_2843;
              $__phel_2844 = $this->__phel_2844;
              $__phel_2846_2851 = $this->__phel_2846_2851;
              $__phel_2847_2852 = $this->__phel_2847_2852;
              $__phel_2848_2853 = $this->__phel_2848_2853;
              $k_2854 = $this->k_2854;
              $__phel_2849_2855 = $this->__phel_2849_2855;
              $__phel_2850_2856 = $this->__phel_2850_2856;
              $v_2857 = $this->v_2857;
              return (\Phel::getDefinition("phel\\core", "conj"))($__phel_2842, (\Phel::getDefinition("phel\\core", "str"))((\Phel::getDefinition("phel\\html", "escape-html"))((\Phel::getDefinition("phel\\html", "to-str"))($k_2854)), ":", (\Phel::getDefinition("phel\\html", "escape-html"))($v_2857), ";"));
            }
          });
        }
        return (\Phel::getDefinition("phel\\core", "deref"))($__phel_2841_2845);
      })();
      return (\Phel::getDefinition("phel\\core", "str"))(...(((\Phel::getDefinition("phel\\core", "sort"))($kvs_2840)) ?? []));
    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(render-style-table value)\n```\n",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/html.phel",
      \Phel::keyword("line"), 44,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/html.phel",
      \Phel::keyword("line"), 46,
      \Phel::keyword("column"), 28
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[value]"
  )
);
\Phel::addDefinition(
  "phel\\html",
  "render-attr-table",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\html\\render_attr_table";

    public function __invoke($value) {
      return (\Phel::getDefinition("phel\\html", "escape-html"))(implode(" ", (\Phel::getDefinition("phel\\core", "to-php-array"))((function() use($value) {
        $__phel_2858_2862 = (\Phel::getDefinition("phel\\core", "var"))(\Phel::vector([]));
        foreach (\Phel\Lang\Seq::toIterable($value) as $__phel_2861 => $__phel_2860) {
          $__phel_2863_2868 = \Phel::vector([$__phel_2861, $__phel_2860]);
          $__phel_2864_2869 = (\Phel::getDefinition("phel\\core", "first"))($__phel_2863_2868);
          $__phel_2865_2870 = (\Phel::getDefinition("phel\\core", "next"))($__phel_2863_2868);
          $k_2871 = $__phel_2864_2869;
          $__phel_2866_2872 = (\Phel::getDefinition("phel\\core", "first"))($__phel_2865_2870);
          $__phel_2867_2873 = (\Phel::getDefinition("phel\\core", "next"))($__phel_2865_2870);
          $v_2874 = $__phel_2866_2872;
          if (($__truthy = $v_2874) !== null && $__truthy !== false) {
            (\Phel::getDefinition("phel\\core", "swap!"))($__phel_2858_2862, new class($value, $__phel_2858_2862, $__phel_2860, $__phel_2861, $__phel_2863_2868, $__phel_2864_2869, $__phel_2865_2870, $k_2871, $__phel_2866_2872, $__phel_2867_2873, $v_2874) extends \Phel\Lang\AbstractFn {
              public const BOUND_TO = "phel\\html\\render_attr_table";
              private $value;
              private $__phel_2858_2862;
              private $__phel_2860;
              private $__phel_2861;
              private $__phel_2863_2868;
              private $__phel_2864_2869;
              private $__phel_2865_2870;
              private $k_2871;
              private $__phel_2866_2872;
              private $__phel_2867_2873;
              private $v_2874;

              public function __construct($value, $__phel_2858_2862, $__phel_2860, $__phel_2861, $__phel_2863_2868, $__phel_2864_2869, $__phel_2865_2870, $k_2871, $__phel_2866_2872, $__phel_2867_2873, $v_2874) {
                $this->value = $value;
                $this->__phel_2858_2862 = $__phel_2858_2862;
                $this->__phel_2860 = $__phel_2860;
                $this->__phel_2861 = $__phel_2861;
                $this->__phel_2863_2868 = $__phel_2863_2868;
                $this->__phel_2864_2869 = $__phel_2864_2869;
                $this->__phel_2865_2870 = $__phel_2865_2870;
                $this->k_2871 = $k_2871;
                $this->__phel_2866_2872 = $__phel_2866_2872;
                $this->__phel_2867_2873 = $__phel_2867_2873;
                $this->v_2874 = $v_2874;
              }

              public function __invoke($__phel_2859) {
                $value = $this->value;
                $__phel_2858_2862 = $this->__phel_2858_2862;
                $__phel_2860 = $this->__phel_2860;
                $__phel_2861 = $this->__phel_2861;
                $__phel_2863_2868 = $this->__phel_2863_2868;
                $__phel_2864_2869 = $this->__phel_2864_2869;
                $__phel_2865_2870 = $this->__phel_2865_2870;
                $k_2871 = $this->k_2871;
                $__phel_2866_2872 = $this->__phel_2866_2872;
                $__phel_2867_2873 = $this->__phel_2867_2873;
                $v_2874 = $this->v_2874;
                return (\Phel::getDefinition("phel\\core", "conj"))($__phel_2859, (\Phel::getDefinition("phel\\html", "to-str"))($k_2871));
              }
            });
          } else {

          }

        }
        return (\Phel::getDefinition("phel\\core", "deref"))($__phel_2858_2862);
      })())));
    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(render-attr-table value)\n```\n",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/html.phel",
      \Phel::keyword("line"), 48,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/html.phel",
      \Phel::keyword("line"), 49,
      \Phel::keyword("column"), 95
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[value]"
  )
);
\Phel::addDefinition(
  "phel\\html",
  "render-attribute-value",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\html\\render_attribute_value";

    public function __invoke($name, $value) {
      if (($__truthy = (function() use($name,$value) {
        $__phel_2875_2876 = (\Phel::getDefinition("phel\\core", "="))($name, "style");
        if (($__truthy = $__phel_2875_2876) !== null && $__truthy !== false) {
          return (\Phel::getDefinition("phel\\core", "associative?"))($value);
        } else {
          return $__phel_2875_2876;
        }

      })()) !== null && $__truthy !== false) {
        return (\Phel::getDefinition("phel\\html", "render-style-table"))($value);
      } else {
        if (($__truthy = (\Phel::getDefinition("phel\\core", "associative?"))($value)) !== null && $__truthy !== false) {
          return (\Phel::getDefinition("phel\\html", "render-attr-table"))($value);
        } else {
          if (($__truthy = (\Phel::getDefinition("phel\\core", "indexed?"))($value)) !== null && $__truthy !== false) {
            return (\Phel::getDefinition("phel\\html", "escape-html"))(implode(" ", (\Phel::getDefinition("phel\\core", "to-php-array"))((\Phel::getDefinition("phel\\core", "map"))(\Phel::getDefinition("phel\\html", "to-str"), $value))));
          } else {
            return (\Phel::getDefinition("phel\\html", "escape-html"))((\Phel::getDefinition("phel\\html", "to-str"))($value));
          }

        }

      }

    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(render-attribute-value name value)\n```\n",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/html.phel",
      \Phel::keyword("line"), 51,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/html.phel",
      \Phel::keyword("line"), 59,
      \Phel::keyword("column"), 34
    ),
    "min-arity", 2,
    "is-variadic", false,
    "arglists", "[name value]"
  )
);
\Phel::addDefinition(
  "phel\\html",
  "render-attribute",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\html\\render_attribute";

    public function __invoke($name, $value) {
      $name_2877 = (\Phel::getDefinition("phel\\html", "to-str"))($name);
      if (($__truthy = (\Phel::getDefinition("phel\\core", "true?"))($value)) !== null && $__truthy !== false) {
        return (\Phel::getDefinition("phel\\core", "str"))(" ", (\Phel::getDefinition("phel\\html", "escape-html"))($name_2877), "=\"", (\Phel::getDefinition("phel\\html", "render-attribute-value"))($name_2877, $name_2877), "\"");
      } else {
        if (($__truthy = (\Phel::getDefinition("phel\\core", "not"))($value)) !== null && $__truthy !== false) {
          return "";
        } else {
          return (\Phel::getDefinition("phel\\core", "str"))(" ", (\Phel::getDefinition("phel\\html", "escape-html"))($name_2877), "=\"", (\Phel::getDefinition("phel\\html", "render-attribute-value"))($name_2877, $value), "\"");
        }

      }

    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(render-attribute name value)\n```\n",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/html.phel",
      \Phel::keyword("line"), 61,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/html.phel",
      \Phel::keyword("line"), 68,
      \Phel::keyword("column"), 85
    ),
    "min-arity", 2,
    "is-variadic", false,
    "arglists", "[name value]"
  )
);
\Phel::addDefinition(
  "phel\\html",
  "render-attrs",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\html\\render_attrs";

    public function __invoke($attrs) {
      return (\Phel::getDefinition("phel\\core", "str"))(...(((function() use($attrs) {
        $__phel_2878_2882 = (\Phel::getDefinition("phel\\core", "var"))(\Phel::vector([]));
        foreach (\Phel\Lang\Seq::toIterable($attrs) as $__phel_2881 => $__phel_2880) {
          $__phel_2883_2888 = \Phel::vector([$__phel_2881, $__phel_2880]);
          $__phel_2884_2889 = (\Phel::getDefinition("phel\\core", "first"))($__phel_2883_2888);
          $__phel_2885_2890 = (\Phel::getDefinition("phel\\core", "next"))($__phel_2883_2888);
          $name_2891 = $__phel_2884_2889;
          $__phel_2886_2892 = (\Phel::getDefinition("phel\\core", "first"))($__phel_2885_2890);
          $__phel_2887_2893 = (\Phel::getDefinition("phel\\core", "next"))($__phel_2885_2890);
          $value_2894 = $__phel_2886_2892;
          (\Phel::getDefinition("phel\\core", "swap!"))($__phel_2878_2882, new class($attrs, $__phel_2878_2882, $__phel_2880, $__phel_2881, $__phel_2883_2888, $__phel_2884_2889, $__phel_2885_2890, $name_2891, $__phel_2886_2892, $__phel_2887_2893, $value_2894) extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\html\\render_attrs";
            private $attrs;
            private $__phel_2878_2882;
            private $__phel_2880;
            private $__phel_2881;
            private $__phel_2883_2888;
            private $__phel_2884_2889;
            private $__phel_2885_2890;
            private $name_2891;
            private $__phel_2886_2892;
            private $__phel_2887_2893;
            private $value_2894;

            public function __construct($attrs, $__phel_2878_2882, $__phel_2880, $__phel_2881, $__phel_2883_2888, $__phel_2884_2889, $__phel_2885_2890, $name_2891, $__phel_2886_2892, $__phel_2887_2893, $value_2894) {
              $this->attrs = $attrs;
              $this->__phel_2878_2882 = $__phel_2878_2882;
              $this->__phel_2880 = $__phel_2880;
              $this->__phel_2881 = $__phel_2881;
              $this->__phel_2883_2888 = $__phel_2883_2888;
              $this->__phel_2884_2889 = $__phel_2884_2889;
              $this->__phel_2885_2890 = $__phel_2885_2890;
              $this->name_2891 = $name_2891;
              $this->__phel_2886_2892 = $__phel_2886_2892;
              $this->__phel_2887_2893 = $__phel_2887_2893;
              $this->value_2894 = $value_2894;
            }

            public function __invoke($__phel_2879) {
              $attrs = $this->attrs;
              $__phel_2878_2882 = $this->__phel_2878_2882;
              $__phel_2880 = $this->__phel_2880;
              $__phel_2881 = $this->__phel_2881;
              $__phel_2883_2888 = $this->__phel_2883_2888;
              $__phel_2884_2889 = $this->__phel_2884_2889;
              $__phel_2885_2890 = $this->__phel_2885_2890;
              $name_2891 = $this->name_2891;
              $__phel_2886_2892 = $this->__phel_2886_2892;
              $__phel_2887_2893 = $this->__phel_2887_2893;
              $value_2894 = $this->value_2894;
              return (\Phel::getDefinition("phel\\core", "conj"))($__phel_2879, (\Phel::getDefinition("phel\\html", "render-attribute"))($name_2891, $value_2894));
            }
          });
        }
        return (\Phel::getDefinition("phel\\core", "deref"))($__phel_2878_2882);
      })()) ?? []));
    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(render-attrs attrs)\n```\n",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/html.phel",
      \Phel::keyword("line"), 70,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/html.phel",
      \Phel::keyword("line"), 71,
      \Phel::keyword("column"), 78
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[attrs]"
  )
);
\Phel::addDefinition(
  "phel\\html",
  "render-element",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\html\\render_element";

    public function __invoke($element) {
      $__phel_2895_2902 = (\Phel::getDefinition("phel\\html", "normalize-element"))($element);
      $__phel_2896_2903 = (\Phel::getDefinition("phel\\core", "first"))($__phel_2895_2902);
      $__phel_2897_2904 = (\Phel::getDefinition("phel\\core", "next"))($__phel_2895_2902);
      $tag_2905 = $__phel_2896_2903;
      $__phel_2898_2906 = (\Phel::getDefinition("phel\\core", "first"))($__phel_2897_2904);
      $__phel_2899_2907 = (\Phel::getDefinition("phel\\core", "next"))($__phel_2897_2904);
      $attrs_2908 = $__phel_2898_2906;
      $__phel_2900_2909 = (\Phel::getDefinition("phel\\core", "first"))($__phel_2899_2907);
      $__phel_2901_2910 = (\Phel::getDefinition("phel\\core", "next"))($__phel_2899_2907);
      $content_2911 = $__phel_2900_2909;
      if (($__truthy = (\Phel::getDefinition("phel\\html", "container-tag?"))($tag_2905, $content_2911)) !== null && $__truthy !== false) {
        return (\Phel::getDefinition("phel\\core", "str"))("<", $tag_2905, (\Phel::getDefinition("phel\\html", "render-attrs"))($attrs_2908), ">", (\Phel::getDefinition("phel\\html", "render-html"))($content_2911), "</", $tag_2905, ">");
      } else {
        return (\Phel::getDefinition("phel\\core", "str"))("<", $tag_2905, (\Phel::getDefinition("phel\\html", "render-attrs"))($attrs_2908), " />");
      }

    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(render-element element)\n```\nRenders an Element.",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/html.phel",
      \Phel::keyword("line"), 73,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/html.phel",
      \Phel::keyword("line"), 82,
      \Phel::keyword("column"), 49
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[element]"
  )
);
\Phel::addDefinition(
  "phel\\html",
  "render-html",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\html\\render_html";

    public function __invoke($element) {
      if (($__truthy = (\Phel::getDefinition("phel\\core", "vector?"))($element)) !== null && $__truthy !== false) {
        return (\Phel::getDefinition("phel\\html", "render-element"))($element);
      } else {
        if (($__truthy = (\Phel::getDefinition("phel\\core", "indexed?"))($element)) !== null && $__truthy !== false) {
          return (\Phel::getDefinition("phel\\core", "str"))(...(((\Phel::getDefinition("phel\\core", "map"))(\Phel::getDefinition("phel\\html", "render-html"), $element)) ?? []));
        } else {
          if (($__truthy = (\Phel::getDefinition("phel\\html", "raw-string?"))($element)) !== null && $__truthy !== false) {
            return (\Phel::getDefinition("phel\\core", "get"))($element, \Phel::keyword("s"));
          } else {
            if (($__truthy = (\Phel::getDefinition("phel\\core", "string?"))($element)) !== null && $__truthy !== false) {
              return (\Phel::getDefinition("phel\\html", "escape-html"))($element);
            } else {
              if (($__truthy = (\Phel::getDefinition("phel\\core", "nil?"))($element)) !== null && $__truthy !== false) {
                return "";
              } else {
                return (\Phel::getDefinition("phel\\html", "escape-html"))((\Phel::getDefinition("phel\\core", "str"))($element));
              }

            }

          }

        }

      }

    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(render-html element)\n```\n",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/html.phel",
      \Phel::keyword("line"), 84,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/html.phel",
      \Phel::keyword("line"), 91,
      \Phel::keyword("column"), 33
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[element]"
  )
);
\Phel::addDefinition(
  "phel\\html",
  "compile-seq",
  null,
  \Phel::map(
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/html.phel",
      \Phel::keyword("line"), 97,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/html.phel",
      \Phel::keyword("line"), 97,
      \Phel::keyword("column"), 21
    )
  )
);
\Phel::addDefinition(
  "phel\\html",
  "compile-html",
  null,
  \Phel::map(
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/html.phel",
      \Phel::keyword("line"), 98,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/html.phel",
      \Phel::keyword("line"), 98,
      \Phel::keyword("column"), 22
    )
  )
);
\Phel::addDefinition(
  "phel\\html",
  "unevaluated?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\html\\unevaluated?";

    public function __invoke($expr) {
      $__phel_2912_2913 = (\Phel::getDefinition("phel\\core", "symbol?"))($expr);
      if (($__truthy = $__phel_2912_2913) !== null && $__truthy !== false) {
        return $__phel_2912_2913;
      } else {
        $__phel_2914_2915 = (\Phel::getDefinition("phel\\core", "indexed?"))($expr);
        if (($__truthy = $__phel_2914_2915) !== null && $__truthy !== false) {
          return (\Phel::getDefinition("phel\\core", "not="))((\Phel::getDefinition("phel\\core", "first"))($expr), (\Phel\Lang\Symbol::create("quote")));
        } else {
          return $__phel_2914_2915;
        }

      }

    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(unevaluated? expr)\n```\nAn expression is unevaluated if it is a symbol or it is not quoted.",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/html.phel",
      \Phel::keyword("line"), 100,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/html.phel",
      \Phel::keyword("line"), 107,
      \Phel::keyword("column"), 33
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[expr]"
  )
);
\Phel::addDefinition(
  "phel\\html",
  "compile-attrs",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\html\\compile_attrs";

    public function __invoke($attrs) {
      if (($__truthy = (\Phel::getDefinition("phel\\core", "some?"))(\Phel::getDefinition("phel\\html", "unevaluated?"), (\Phel::getDefinition("phel\\core", "kvs"))($attrs))) !== null && $__truthy !== false) {
        return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\html/render-attrs"))), (\Phel::getDefinition("phel\\core", "list"))($attrs))) ?? []));
      } else {
        return (\Phel::getDefinition("phel\\html", "render-attrs"))($attrs);
      }

    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(compile-attrs attrs)\n```\n",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/html.phel",
      \Phel::keyword("line"), 109,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/html.phel",
      \Phel::keyword("line"), 112,
      \Phel::keyword("column"), 26
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[attrs]"
  )
);
\Phel::addDefinition(
  "phel\\html",
  "compile-element",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\html\\compile_element";

    public function __invoke($element) {
      $__phel_2916_2923 = (\Phel::getDefinition("phel\\html", "normalize-element"))($element);
      $__phel_2917_2924 = (\Phel::getDefinition("phel\\core", "first"))($__phel_2916_2923);
      $__phel_2918_2925 = (\Phel::getDefinition("phel\\core", "next"))($__phel_2916_2923);
      $tag_2926 = $__phel_2917_2924;
      $__phel_2919_2927 = (\Phel::getDefinition("phel\\core", "first"))($__phel_2918_2925);
      $__phel_2920_2928 = (\Phel::getDefinition("phel\\core", "next"))($__phel_2918_2925);
      $attrs_2929 = $__phel_2919_2927;
      $__phel_2921_2930 = (\Phel::getDefinition("phel\\core", "first"))($__phel_2920_2928);
      $__phel_2922_2931 = (\Phel::getDefinition("phel\\core", "next"))($__phel_2920_2928);
      $content_2932 = $__phel_2921_2930;
      if (($__truthy = (\Phel::getDefinition("phel\\html", "container-tag?"))($tag_2926, $content_2932)) !== null && $__truthy !== false) {
        return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/str"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "str"))("<", $tag_2926)), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\html", "compile-attrs"))($attrs_2929)), (\Phel::getDefinition("phel\\core", "list"))(">"), (\Phel::getDefinition("phel\\html", "compile-seq"))($content_2932), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "str"))("</", $tag_2926, ">")))) ?? []));
      } else {
        return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/str"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "str"))("<", $tag_2926)), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\html", "compile-attrs"))($attrs_2929)), (\Phel::getDefinition("phel\\core", "list"))(" />"))) ?? []));
      }

    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(compile-element element)\n```\nCompiles a element.",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/html.phel",
      \Phel::keyword("line"), 114,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/html.phel",
      \Phel::keyword("line"), 123,
      \Phel::keyword("column"), 59
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[element]"
  )
);
\Phel::addDefinition(
  "phel\\html",
  "compile-form",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\html\\compile_form";

    public function __invoke($form) {
      $form_name_2933 = (($__truthy = (function() use($form) {
        $__phel_2934_2935 = (\Phel::getDefinition("phel\\core", "list?"))($form);
        if (($__truthy = $__phel_2934_2935) !== null && $__truthy !== false) {
          return (\Phel::getDefinition("phel\\core", "symbol?"))((\Phel::getDefinition("phel\\core", "first"))($form));
        } else {
          return $__phel_2934_2935;
        }

      })()) !== null && $__truthy !== false ? (\Phel::getDefinition("phel\\core", "name"))((\Phel::getDefinition("phel\\core", "first"))($form)) : null);
      $__phel_2936_2937 = $form_name_2933;
      if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_2936_2937, "for")) !== null && $__truthy !== false) {
        $__phel_2938_2946 = $form;
        $__phel_2939_2947 = (\Phel::getDefinition("phel\\core", "first"))($__phel_2938_2946);
        $__phel_2940_2948 = (\Phel::getDefinition("phel\\core", "next"))($__phel_2938_2946);
        $__phel_2941_2949 = $__phel_2939_2947;
        $__phel_2942_2950 = (\Phel::getDefinition("phel\\core", "first"))($__phel_2940_2948);
        $__phel_2943_2951 = (\Phel::getDefinition("phel\\core", "next"))($__phel_2940_2948);
        $bindings_2952 = $__phel_2942_2950;
        $__phel_2944_2953 = (\Phel::getDefinition("phel\\core", "first"))($__phel_2943_2951);
        $__phel_2945_2954 = (\Phel::getDefinition("phel\\core", "next"))($__phel_2943_2951);
        $body_2955 = $__phel_2944_2953;
        return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("apply"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/str"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/for"))), (\Phel::getDefinition("phel\\core", "list"))($bindings_2952), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\html", "compile-html"))($body_2955)))) ?? []))))) ?? []));
      } else {
        $__phel_2956_2957 = $__phel_2936_2937;
        if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_2956_2957, "if")) !== null && $__truthy !== false) {
          $__phel_2958_2965 = $form;
          $__phel_2959_2966 = (\Phel::getDefinition("phel\\core", "first"))($__phel_2958_2965);
          $__phel_2960_2967 = (\Phel::getDefinition("phel\\core", "next"))($__phel_2958_2965);
          $__phel_2961_2968 = $__phel_2959_2966;
          $__phel_2962_2969 = (\Phel::getDefinition("phel\\core", "first"))($__phel_2960_2967);
          $__phel_2963_2970 = (\Phel::getDefinition("phel\\core", "next"))($__phel_2960_2967);
          $condition_2971 = $__phel_2962_2969;
          $__phel_2964_2972 = $__phel_2963_2970;
          $body_2973 = $__phel_2964_2972;
          return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("if"))), (\Phel::getDefinition("phel\\core", "list"))($condition_2971), (function() use($form,$form_name_2933,$__phel_2936_2937,$__phel_2956_2957,$__phel_2958_2965,$__phel_2959_2966,$__phel_2960_2967,$__phel_2961_2968,$__phel_2962_2969,$__phel_2963_2970,$condition_2971,$__phel_2964_2972,$body_2973) {
            $__phel_2974_2977 = (\Phel::getDefinition("phel\\core", "var"))(\Phel::vector([]));
            foreach (\Phel\Lang\Seq::toIterable($body_2973) as $__phel_2976) {
              $x_2978 = $__phel_2976;
              (\Phel::getDefinition("phel\\core", "swap!"))($__phel_2974_2977, new class($form, $form_name_2933, $__phel_2936_2937, $__phel_2956_2957, $__phel_2958_2965, $__phel_2959_2966, $__phel_2960_2967, $__phel_2961_2968, $__phel_2962_2969, $__phel_2963_2970, $condition_2971, $__phel_2964_2972, $body_2973, $__phel_2974_2977, $__phel_2976, $x_2978) extends \Phel\Lang\AbstractFn {
                public const BOUND_TO = "phel\\html\\compile_form";
                private $form;
                private $form_name_2933;
                private $__phel_2936_2937;
                private $__phel_2956_2957;
                private $__phel_2958_2965;
                private $__phel_2959_2966;
                private $__phel_2960_2967;
                private $__phel_2961_2968;
                private $__phel_2962_2969;
                private $__phel_2963_2970;
                private $condition_2971;
                private $__phel_2964_2972;
                private $body_2973;
                private $__phel_2974_2977;
                private $__phel_2976;
                private $x_2978;

                public function __construct($form, $form_name_2933, $__phel_2936_2937, $__phel_2956_2957, $__phel_2958_2965, $__phel_2959_2966, $__phel_2960_2967, $__phel_2961_2968, $__phel_2962_2969, $__phel_2963_2970, $condition_2971, $__phel_2964_2972, $body_2973, $__phel_2974_2977, $__phel_2976, $x_2978) {
                  $this->form = $form;
                  $this->form_name_2933 = $form_name_2933;
                  $this->__phel_2936_2937 = $__phel_2936_2937;
                  $this->__phel_2956_2957 = $__phel_2956_2957;
                  $this->__phel_2958_2965 = $__phel_2958_2965;
                  $this->__phel_2959_2966 = $__phel_2959_2966;
                  $this->__phel_2960_2967 = $__phel_2960_2967;
                  $this->__phel_2961_2968 = $__phel_2961_2968;
                  $this->__phel_2962_2969 = $__phel_2962_2969;
                  $this->__phel_2963_2970 = $__phel_2963_2970;
                  $this->condition_2971 = $condition_2971;
                  $this->__phel_2964_2972 = $__phel_2964_2972;
                  $this->body_2973 = $body_2973;
                  $this->__phel_2974_2977 = $__phel_2974_2977;
                  $this->__phel_2976 = $__phel_2976;
                  $this->x_2978 = $x_2978;
                }

                public function __invoke($__phel_2975) {
                  $form = $this->form;
                  $form_name_2933 = $this->form_name_2933;
                  $__phel_2936_2937 = $this->__phel_2936_2937;
                  $__phel_2956_2957 = $this->__phel_2956_2957;
                  $__phel_2958_2965 = $this->__phel_2958_2965;
                  $__phel_2959_2966 = $this->__phel_2959_2966;
                  $__phel_2960_2967 = $this->__phel_2960_2967;
                  $__phel_2961_2968 = $this->__phel_2961_2968;
                  $__phel_2962_2969 = $this->__phel_2962_2969;
                  $__phel_2963_2970 = $this->__phel_2963_2970;
                  $condition_2971 = $this->condition_2971;
                  $__phel_2964_2972 = $this->__phel_2964_2972;
                  $body_2973 = $this->body_2973;
                  $__phel_2974_2977 = $this->__phel_2974_2977;
                  $__phel_2976 = $this->__phel_2976;
                  $x_2978 = $this->x_2978;
                  return (\Phel::getDefinition("phel\\core", "conj"))($__phel_2975, (\Phel::getDefinition("phel\\html", "compile-html"))($x_2978));
                }
              });
            }
            return (\Phel::getDefinition("phel\\core", "deref"))($__phel_2974_2977);
          })())) ?? []));
        } else {
          $__phel_2979_2980 = $__phel_2956_2957;
          if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_2979_2980, "when")) !== null && $__truthy !== false) {
            $__phel_2981_2988 = $form;
            $__phel_2982_2989 = (\Phel::getDefinition("phel\\core", "first"))($__phel_2981_2988);
            $__phel_2983_2990 = (\Phel::getDefinition("phel\\core", "next"))($__phel_2981_2988);
            $__phel_2984_2991 = $__phel_2982_2989;
            $__phel_2985_2992 = (\Phel::getDefinition("phel\\core", "first"))($__phel_2983_2990);
            $__phel_2986_2993 = (\Phel::getDefinition("phel\\core", "next"))($__phel_2983_2990);
            $condition_2994 = $__phel_2985_2992;
            $__phel_2987_2995 = $__phel_2986_2993;
            $body_2996 = $__phel_2987_2995;
            return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("if"))), (\Phel::getDefinition("phel\\core", "list"))($condition_2994), (function() use($form,$form_name_2933,$__phel_2936_2937,$__phel_2956_2957,$__phel_2979_2980,$__phel_2981_2988,$__phel_2982_2989,$__phel_2983_2990,$__phel_2984_2991,$__phel_2985_2992,$__phel_2986_2993,$condition_2994,$__phel_2987_2995,$body_2996) {
              $__phel_2997_3000 = (\Phel::getDefinition("phel\\core", "var"))(\Phel::vector([]));
              foreach (\Phel\Lang\Seq::toIterable($body_2996) as $__phel_2999) {
                $x_3001 = $__phel_2999;
                (\Phel::getDefinition("phel\\core", "swap!"))($__phel_2997_3000, new class($form, $form_name_2933, $__phel_2936_2937, $__phel_2956_2957, $__phel_2979_2980, $__phel_2981_2988, $__phel_2982_2989, $__phel_2983_2990, $__phel_2984_2991, $__phel_2985_2992, $__phel_2986_2993, $condition_2994, $__phel_2987_2995, $body_2996, $__phel_2997_3000, $__phel_2999, $x_3001) extends \Phel\Lang\AbstractFn {
                  public const BOUND_TO = "phel\\html\\compile_form";
                  private $form;
                  private $form_name_2933;
                  private $__phel_2936_2937;
                  private $__phel_2956_2957;
                  private $__phel_2979_2980;
                  private $__phel_2981_2988;
                  private $__phel_2982_2989;
                  private $__phel_2983_2990;
                  private $__phel_2984_2991;
                  private $__phel_2985_2992;
                  private $__phel_2986_2993;
                  private $condition_2994;
                  private $__phel_2987_2995;
                  private $body_2996;
                  private $__phel_2997_3000;
                  private $__phel_2999;
                  private $x_3001;

                  public function __construct($form, $form_name_2933, $__phel_2936_2937, $__phel_2956_2957, $__phel_2979_2980, $__phel_2981_2988, $__phel_2982_2989, $__phel_2983_2990, $__phel_2984_2991, $__phel_2985_2992, $__phel_2986_2993, $condition_2994, $__phel_2987_2995, $body_2996, $__phel_2997_3000, $__phel_2999, $x_3001) {
                    $this->form = $form;
                    $this->form_name_2933 = $form_name_2933;
                    $this->__phel_2936_2937 = $__phel_2936_2937;
                    $this->__phel_2956_2957 = $__phel_2956_2957;
                    $this->__phel_2979_2980 = $__phel_2979_2980;
                    $this->__phel_2981_2988 = $__phel_2981_2988;
                    $this->__phel_2982_2989 = $__phel_2982_2989;
                    $this->__phel_2983_2990 = $__phel_2983_2990;
                    $this->__phel_2984_2991 = $__phel_2984_2991;
                    $this->__phel_2985_2992 = $__phel_2985_2992;
                    $this->__phel_2986_2993 = $__phel_2986_2993;
                    $this->condition_2994 = $condition_2994;
                    $this->__phel_2987_2995 = $__phel_2987_2995;
                    $this->body_2996 = $body_2996;
                    $this->__phel_2997_3000 = $__phel_2997_3000;
                    $this->__phel_2999 = $__phel_2999;
                    $this->x_3001 = $x_3001;
                  }

                  public function __invoke($__phel_2998) {
                    $form = $this->form;
                    $form_name_2933 = $this->form_name_2933;
                    $__phel_2936_2937 = $this->__phel_2936_2937;
                    $__phel_2956_2957 = $this->__phel_2956_2957;
                    $__phel_2979_2980 = $this->__phel_2979_2980;
                    $__phel_2981_2988 = $this->__phel_2981_2988;
                    $__phel_2982_2989 = $this->__phel_2982_2989;
                    $__phel_2983_2990 = $this->__phel_2983_2990;
                    $__phel_2984_2991 = $this->__phel_2984_2991;
                    $__phel_2985_2992 = $this->__phel_2985_2992;
                    $__phel_2986_2993 = $this->__phel_2986_2993;
                    $condition_2994 = $this->condition_2994;
                    $__phel_2987_2995 = $this->__phel_2987_2995;
                    $body_2996 = $this->body_2996;
                    $__phel_2997_3000 = $this->__phel_2997_3000;
                    $__phel_2999 = $this->__phel_2999;
                    $x_3001 = $this->x_3001;
                    return (\Phel::getDefinition("phel\\core", "conj"))($__phel_2998, (\Phel::getDefinition("phel\\html", "compile-html"))($x_3001));
                  }
                });
              }
              return (\Phel::getDefinition("phel\\core", "deref"))($__phel_2997_3000);
            })())) ?? []));
          } else {
            $__phel_3002_3003 = $__phel_2979_2980;
            if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_3002_3003, "when-not")) !== null && $__truthy !== false) {
              $__phel_3004_3011 = $form;
              $__phel_3005_3012 = (\Phel::getDefinition("phel\\core", "first"))($__phel_3004_3011);
              $__phel_3006_3013 = (\Phel::getDefinition("phel\\core", "next"))($__phel_3004_3011);
              $__phel_3007_3014 = $__phel_3005_3012;
              $__phel_3008_3015 = (\Phel::getDefinition("phel\\core", "first"))($__phel_3006_3013);
              $__phel_3009_3016 = (\Phel::getDefinition("phel\\core", "next"))($__phel_3006_3013);
              $condition_3017 = $__phel_3008_3015;
              $__phel_3010_3018 = $__phel_3009_3016;
              $body_3019 = $__phel_3010_3018;
              return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("if"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/not"))), (\Phel::getDefinition("phel\\core", "list"))($condition_3017))) ?? []))), (function() use($form,$form_name_2933,$__phel_2936_2937,$__phel_2956_2957,$__phel_2979_2980,$__phel_3002_3003,$__phel_3004_3011,$__phel_3005_3012,$__phel_3006_3013,$__phel_3007_3014,$__phel_3008_3015,$__phel_3009_3016,$condition_3017,$__phel_3010_3018,$body_3019) {
                $__phel_3020_3023 = (\Phel::getDefinition("phel\\core", "var"))(\Phel::vector([]));
                foreach (\Phel\Lang\Seq::toIterable($body_3019) as $__phel_3022) {
                  $x_3024 = $__phel_3022;
                  (\Phel::getDefinition("phel\\core", "swap!"))($__phel_3020_3023, new class($form, $form_name_2933, $__phel_2936_2937, $__phel_2956_2957, $__phel_2979_2980, $__phel_3002_3003, $__phel_3004_3011, $__phel_3005_3012, $__phel_3006_3013, $__phel_3007_3014, $__phel_3008_3015, $__phel_3009_3016, $condition_3017, $__phel_3010_3018, $body_3019, $__phel_3020_3023, $__phel_3022, $x_3024) extends \Phel\Lang\AbstractFn {
                    public const BOUND_TO = "phel\\html\\compile_form";
                    private $form;
                    private $form_name_2933;
                    private $__phel_2936_2937;
                    private $__phel_2956_2957;
                    private $__phel_2979_2980;
                    private $__phel_3002_3003;
                    private $__phel_3004_3011;
                    private $__phel_3005_3012;
                    private $__phel_3006_3013;
                    private $__phel_3007_3014;
                    private $__phel_3008_3015;
                    private $__phel_3009_3016;
                    private $condition_3017;
                    private $__phel_3010_3018;
                    private $body_3019;
                    private $__phel_3020_3023;
                    private $__phel_3022;
                    private $x_3024;

                    public function __construct($form, $form_name_2933, $__phel_2936_2937, $__phel_2956_2957, $__phel_2979_2980, $__phel_3002_3003, $__phel_3004_3011, $__phel_3005_3012, $__phel_3006_3013, $__phel_3007_3014, $__phel_3008_3015, $__phel_3009_3016, $condition_3017, $__phel_3010_3018, $body_3019, $__phel_3020_3023, $__phel_3022, $x_3024) {
                      $this->form = $form;
                      $this->form_name_2933 = $form_name_2933;
                      $this->__phel_2936_2937 = $__phel_2936_2937;
                      $this->__phel_2956_2957 = $__phel_2956_2957;
                      $this->__phel_2979_2980 = $__phel_2979_2980;
                      $this->__phel_3002_3003 = $__phel_3002_3003;
                      $this->__phel_3004_3011 = $__phel_3004_3011;
                      $this->__phel_3005_3012 = $__phel_3005_3012;
                      $this->__phel_3006_3013 = $__phel_3006_3013;
                      $this->__phel_3007_3014 = $__phel_3007_3014;
                      $this->__phel_3008_3015 = $__phel_3008_3015;
                      $this->__phel_3009_3016 = $__phel_3009_3016;
                      $this->condition_3017 = $condition_3017;
                      $this->__phel_3010_3018 = $__phel_3010_3018;
                      $this->body_3019 = $body_3019;
                      $this->__phel_3020_3023 = $__phel_3020_3023;
                      $this->__phel_3022 = $__phel_3022;
                      $this->x_3024 = $x_3024;
                    }

                    public function __invoke($__phel_3021) {
                      $form = $this->form;
                      $form_name_2933 = $this->form_name_2933;
                      $__phel_2936_2937 = $this->__phel_2936_2937;
                      $__phel_2956_2957 = $this->__phel_2956_2957;
                      $__phel_2979_2980 = $this->__phel_2979_2980;
                      $__phel_3002_3003 = $this->__phel_3002_3003;
                      $__phel_3004_3011 = $this->__phel_3004_3011;
                      $__phel_3005_3012 = $this->__phel_3005_3012;
                      $__phel_3006_3013 = $this->__phel_3006_3013;
                      $__phel_3007_3014 = $this->__phel_3007_3014;
                      $__phel_3008_3015 = $this->__phel_3008_3015;
                      $__phel_3009_3016 = $this->__phel_3009_3016;
                      $condition_3017 = $this->condition_3017;
                      $__phel_3010_3018 = $this->__phel_3010_3018;
                      $body_3019 = $this->body_3019;
                      $__phel_3020_3023 = $this->__phel_3020_3023;
                      $__phel_3022 = $this->__phel_3022;
                      $x_3024 = $this->x_3024;
                      return (\Phel::getDefinition("phel\\core", "conj"))($__phel_3021, (\Phel::getDefinition("phel\\html", "compile-html"))($x_3024));
                    }
                  });
                }
                return (\Phel::getDefinition("phel\\core", "deref"))($__phel_3020_3023);
              })())) ?? []));
            } else {
              return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\html/render-html"))), (\Phel::getDefinition("phel\\core", "list"))($form))) ?? []));
            }

          }

        }

      }

    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(compile-form form)\n```\n",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/html.phel",
      \Phel::keyword("line"), 125,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/html.phel",
      \Phel::keyword("line"), 137,
      \Phel::keyword("column"), 29
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[form]"
  )
);
\Phel::addDefinition(
  "phel\\html",
  "compile-seq",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\html\\compile_seq";

    public function __invoke($content) {
      $__phel_3025_3028 = (\Phel::getDefinition("phel\\core", "var"))(\Phel::vector([]));
      foreach (\Phel\Lang\Seq::toIterable($content) as $__phel_3027) {
        $element_3029 = $__phel_3027;
        (\Phel::getDefinition("phel\\core", "swap!"))($__phel_3025_3028, new class($content, $__phel_3025_3028, $__phel_3027, $element_3029) extends \Phel\Lang\AbstractFn {
          public const BOUND_TO = "phel\\html\\compile_seq";
          private $content;
          private $__phel_3025_3028;
          private $__phel_3027;
          private $element_3029;

          public function __construct($content, $__phel_3025_3028, $__phel_3027, $element_3029) {
            $this->content = $content;
            $this->__phel_3025_3028 = $__phel_3025_3028;
            $this->__phel_3027 = $__phel_3027;
            $this->element_3029 = $element_3029;
          }

          public function __invoke($__phel_3026) {
            $content = $this->content;
            $__phel_3025_3028 = $this->__phel_3025_3028;
            $__phel_3027 = $this->__phel_3027;
            $element_3029 = $this->element_3029;
            return (\Phel::getDefinition("phel\\core", "conj"))($__phel_3026, (($__truthy = (\Phel::getDefinition("phel\\core", "vector?"))($element_3029)) !== null && $__truthy !== false ? (\Phel::getDefinition("phel\\html", "compile-element"))($element_3029) : (($__truthy = (\Phel::getDefinition("phel\\core", "keyword?"))($element_3029)) !== null && $__truthy !== false ? (\Phel::getDefinition("phel\\html", "escape-html"))((\Phel::getDefinition("phel\\core", "name"))($element_3029)) : (($__truthy = (\Phel::getDefinition("phel\\html", "raw-string?"))($element_3029)) !== null && $__truthy !== false ? (\Phel::getDefinition("phel\\core", "get"))($element_3029, \Phel::keyword("s")) : (($__truthy = (\Phel::getDefinition("phel\\core", "string?"))($element_3029)) !== null && $__truthy !== false ? (\Phel::getDefinition("phel\\html", "escape-html"))($element_3029) : (($__truthy = (\Phel::getDefinition("phel\\core", "indexed?"))($element_3029)) !== null && $__truthy !== false ? (\Phel::getDefinition("phel\\html", "compile-form"))($element_3029) : (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\html/render-html"))), (\Phel::getDefinition("phel\\core", "list"))($element_3029))) ?? []))))))));
          }
        });
      }
      return (\Phel::getDefinition("phel\\core", "deref"))($__phel_3025_3028);
    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(compile-seq content)\n```\n",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/html.phel",
      \Phel::keyword("line"), 139,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/html.phel",
      \Phel::keyword("line"), 147,
      \Phel::keyword("column"), 32
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[content]"
  )
);
\Phel::addDefinition(
  "phel\\html",
  "compile-html",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\html\\compile_html";

    public function __invoke(...$content) {
      $content = \Phel::vector($content);
      return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/str"))), (\Phel::getDefinition("phel\\html", "compile-seq"))($content))) ?? []));
    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(compile-html & content)\n```\n",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/html.phel",
      \Phel::keyword("line"), 149,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/html.phel",
      \Phel::keyword("line"), 150,
      \Phel::keyword("column"), 33
    ),
    "min-arity", 0,
    "is-variadic", true,
    "arglists", "[& content]"
  )
);
\Phel::addDefinition(
  "phel\\html",
  "html",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\html\\html";

    public function __invoke(...$content) {
      $content = \Phel::vector($content);
      return (\Phel::getDefinition("phel\\html", "compile-html"))(...(($content) ?? []));
    }
  },
  \Phel::map(
    \Phel::keyword("macro"), true,
    \Phel::keyword("doc"), "```phel\n(html & content)\n```\nCompiles Phel vectors to HTML strings.",
    \Phel::keyword("example"), "(html [:div \"Hello\"]) ; => \"<div>Hello</div>\"",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/html.phel",
      \Phel::keyword("line"), 152,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/html.phel",
      \Phel::keyword("line"), 156,
      \Phel::keyword("column"), 31
    ),
    "min-arity", 0,
    "is-variadic", true,
    "arglists", "[& content]"
  )
);
\Phel::addDefinition(
  "phel\\html",
  "doctypes",
  \Phel::map(
    \Phel::keyword("html4"), (\Phel::getDefinition("phel\\core", "str"))("<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.01//EN\" ", "\"http://www.w3.org/TR/html4/strict.dtd\">\n"),
    \Phel::keyword("xhtml-strict"), (\Phel::getDefinition("phel\\core", "str"))("<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" ", "\"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">\n"),
    \Phel::keyword("xhtml-transitional"), (\Phel::getDefinition("phel\\core", "str"))("<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" ", "\"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">\n"),
    \Phel::keyword("html5"), "<!DOCTYPE html>\n"
  ),
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/html.phel",
      \Phel::keyword("line"), 158,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/html.phel",
      \Phel::keyword("line"), 165,
      \Phel::keyword("column"), 44
    )
  )
);
\Phel::addDefinition(
  "phel\\html",
  "doctype",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\html\\doctype";

    public function __invoke($type) {
      return (\Phel::getDefinition("phel\\html", "raw-string"))((\Phel::getDefinition("phel\\core", "get"))(\Phel::getDefinition("phel\\html", "doctypes"), $type, (\Phel::keyword("html5"))(\Phel::getDefinition("phel\\html", "doctypes"))));
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(doctype type)\n```\nReturns an HTML doctype declaration.",
    \Phel::keyword("example"), "(doctype :html5) ; => \"<!DOCTYPE html>\\n\"",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/html.phel",
      \Phel::keyword("line"), 167,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/html.phel",
      \Phel::keyword("line"), 171,
      \Phel::keyword("column"), 53
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[type]"
  )
);
