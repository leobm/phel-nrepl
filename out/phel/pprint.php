<?php declare(strict_types=1);
namespace phel\pprint;
require_once __DIR__ . '/../phel/core.php';
require_once __DIR__ . '/../phel/core.php';
\Phel::addDefinition(
  "phel\\core",
  "*file*",
  "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/pprint.phel"
);
\Phel::addDefinition(
  "phel\\core",
  "*ns*",
  "phel\\pprint"
);
\Phel::addDefinition(
  "phel\\pprint",
  "*default-width*",
  72,
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/pprint.phel",
      \Phel::keyword("line"), 5,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/pprint.phel",
      \Phel::keyword("line"), 5,
      \Phel::keyword("column"), 25
    )
  )
);
\Phel::addDefinition(
  "phel\\pprint",
  "print-value",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\pprint\\print_value";

    public function __invoke($x) {
      return (function() use($x) {
        $target_2245 = (\Phel\Printer\Printer::readable());
        return $target_2245->print($x);
      })();
    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(print-value x)\n```\nPrints a scalar or non-collection value using the standard readable printer.",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/pprint.phel",
      \Phel::keyword("line"), 7,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/pprint.phel",
      \Phel::keyword("line"), 10,
      \Phel::keyword("column"), 49
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[x]"
  )
);
\Phel::addDefinition(
  "phel\\pprint",
  "pp-str",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\pprint\\pp_str";

    public function __invoke($form, $indent, $width) {
      $t_2247 = (\Phel::getDefinition("phel\\core", "type"))($form);
      $available_2248 = (function() use($form,$indent,$width,$t_2247) {
        (\Phel::getDefinition("phel\\core", "assert-non-nil"))($width, $indent);
        return ($width - $indent);
      })();
      $flat_2249 = (\Phel::getDefinition("phel\\pprint", "print-value"))($form);
      if (($__truthy = (\Phel::getDefinition("phel\\core", "="))($t_2247, \Phel::keyword("vector"))) !== null && $__truthy !== false) {
        if (($__truthy = ((\Phel::getDefinition("phel\\core", "count"))($flat_2249) <= $available_2248)) !== null && $__truthy !== false) {
          return $flat_2249;
        } else {
          $prefix_2250 = "[";
          $suffix_2251 = "]";
          $inner_indent_2252 = (function() use($form,$indent,$width,$t_2247,$available_2248,$flat_2249,$prefix_2250,$suffix_2251) {
            (\Phel::getDefinition("phel\\core", "assert-non-nil"))($indent, 1);
            return ($indent + 1);
          })();
          $pad_2253 = str_repeat(" ", $inner_indent_2252);
          $parts_2254 = (function() use($form,$indent,$width,$t_2247,$available_2248,$flat_2249,$prefix_2250,$suffix_2251,$inner_indent_2252,$pad_2253) {
            $__phel_2255_2258 = (\Phel::getDefinition("phel\\core", "var"))(\Phel::vector([]));
            foreach (\Phel\Lang\Seq::toIterable($form) as $__phel_2257) {
              $x_2259 = $__phel_2257;
              (\Phel::getDefinition("phel\\core", "swap!"))($__phel_2255_2258, new class($form, $indent, $width, $t_2247, $available_2248, $flat_2249, $prefix_2250, $suffix_2251, $inner_indent_2252, $pad_2253, $__phel_2255_2258, $__phel_2257, $x_2259) extends \Phel\Lang\AbstractFn {
                public const BOUND_TO = "phel\\pprint\\pp_str.parts";
                private $form;
                private $indent;
                private $width;
                private $t_2247;
                private $available_2248;
                private $flat_2249;
                private $prefix_2250;
                private $suffix_2251;
                private $inner_indent_2252;
                private $pad_2253;
                private $__phel_2255_2258;
                private $__phel_2257;
                private $x_2259;

                public function __construct($form, $indent, $width, $t_2247, $available_2248, $flat_2249, $prefix_2250, $suffix_2251, $inner_indent_2252, $pad_2253, $__phel_2255_2258, $__phel_2257, $x_2259) {
                  $this->form = $form;
                  $this->indent = $indent;
                  $this->width = $width;
                  $this->t_2247 = $t_2247;
                  $this->available_2248 = $available_2248;
                  $this->flat_2249 = $flat_2249;
                  $this->prefix_2250 = $prefix_2250;
                  $this->suffix_2251 = $suffix_2251;
                  $this->inner_indent_2252 = $inner_indent_2252;
                  $this->pad_2253 = $pad_2253;
                  $this->__phel_2255_2258 = $__phel_2255_2258;
                  $this->__phel_2257 = $__phel_2257;
                  $this->x_2259 = $x_2259;
                }

                public function __invoke($__phel_2256) {
                  $form = $this->form;
                  $indent = $this->indent;
                  $width = $this->width;
                  $t_2247 = $this->t_2247;
                  $available_2248 = $this->available_2248;
                  $flat_2249 = $this->flat_2249;
                  $prefix_2250 = $this->prefix_2250;
                  $suffix_2251 = $this->suffix_2251;
                  $inner_indent_2252 = $this->inner_indent_2252;
                  $pad_2253 = $this->pad_2253;
                  $__phel_2255_2258 = $this->__phel_2255_2258;
                  $__phel_2257 = $this->__phel_2257;
                  $x_2259 = $this->x_2259;
                  return (\Phel::getDefinition("phel\\core", "conj"))($__phel_2256, (\Phel::getDefinition("phel\\pprint", "pp-str"))($x_2259, $inner_indent_2252, $width));
                }
              });
            }
            return (\Phel::getDefinition("phel\\core", "deref"))($__phel_2255_2258);
          })();
          return (\Phel::getDefinition("phel\\core", "str"))($prefix_2250, implode((\Phel::getDefinition("phel\\core", "str"))("\n", $pad_2253), (\Phel::getDefinition("phel\\core", "php-indexed-array"))(...(($parts_2254) ?? []))), $suffix_2251);
        }

      } else {
        if (($__truthy = (\Phel::getDefinition("phel\\core", "="))($t_2247, \Phel::keyword("list"))) !== null && $__truthy !== false) {
          if (($__truthy = ((\Phel::getDefinition("phel\\core", "count"))($flat_2249) <= $available_2248)) !== null && $__truthy !== false) {
            return $flat_2249;
          } else {
            $prefix_2260 = "(";
            $suffix_2261 = ")";
            $inner_indent_2262 = (function() use($form,$indent,$width,$t_2247,$available_2248,$flat_2249,$prefix_2260,$suffix_2261) {
              (\Phel::getDefinition("phel\\core", "assert-non-nil"))($indent, 1);
              return ($indent + 1);
            })();
            $pad_2263 = str_repeat(" ", $inner_indent_2262);
            $parts_2264 = (function() use($form,$indent,$width,$t_2247,$available_2248,$flat_2249,$prefix_2260,$suffix_2261,$inner_indent_2262,$pad_2263) {
              $__phel_2265_2268 = (\Phel::getDefinition("phel\\core", "var"))(\Phel::vector([]));
              foreach (\Phel\Lang\Seq::toIterable($form) as $__phel_2267) {
                $x_2269 = $__phel_2267;
                (\Phel::getDefinition("phel\\core", "swap!"))($__phel_2265_2268, new class($form, $indent, $width, $t_2247, $available_2248, $flat_2249, $prefix_2260, $suffix_2261, $inner_indent_2262, $pad_2263, $__phel_2265_2268, $__phel_2267, $x_2269) extends \Phel\Lang\AbstractFn {
                  public const BOUND_TO = "phel\\pprint\\pp_str.parts";
                  private $form;
                  private $indent;
                  private $width;
                  private $t_2247;
                  private $available_2248;
                  private $flat_2249;
                  private $prefix_2260;
                  private $suffix_2261;
                  private $inner_indent_2262;
                  private $pad_2263;
                  private $__phel_2265_2268;
                  private $__phel_2267;
                  private $x_2269;

                  public function __construct($form, $indent, $width, $t_2247, $available_2248, $flat_2249, $prefix_2260, $suffix_2261, $inner_indent_2262, $pad_2263, $__phel_2265_2268, $__phel_2267, $x_2269) {
                    $this->form = $form;
                    $this->indent = $indent;
                    $this->width = $width;
                    $this->t_2247 = $t_2247;
                    $this->available_2248 = $available_2248;
                    $this->flat_2249 = $flat_2249;
                    $this->prefix_2260 = $prefix_2260;
                    $this->suffix_2261 = $suffix_2261;
                    $this->inner_indent_2262 = $inner_indent_2262;
                    $this->pad_2263 = $pad_2263;
                    $this->__phel_2265_2268 = $__phel_2265_2268;
                    $this->__phel_2267 = $__phel_2267;
                    $this->x_2269 = $x_2269;
                  }

                  public function __invoke($__phel_2266) {
                    $form = $this->form;
                    $indent = $this->indent;
                    $width = $this->width;
                    $t_2247 = $this->t_2247;
                    $available_2248 = $this->available_2248;
                    $flat_2249 = $this->flat_2249;
                    $prefix_2260 = $this->prefix_2260;
                    $suffix_2261 = $this->suffix_2261;
                    $inner_indent_2262 = $this->inner_indent_2262;
                    $pad_2263 = $this->pad_2263;
                    $__phel_2265_2268 = $this->__phel_2265_2268;
                    $__phel_2267 = $this->__phel_2267;
                    $x_2269 = $this->x_2269;
                    return (\Phel::getDefinition("phel\\core", "conj"))($__phel_2266, (\Phel::getDefinition("phel\\pprint", "pp-str"))($x_2269, $inner_indent_2262, $width));
                  }
                });
              }
              return (\Phel::getDefinition("phel\\core", "deref"))($__phel_2265_2268);
            })();
            return (\Phel::getDefinition("phel\\core", "str"))($prefix_2260, implode((\Phel::getDefinition("phel\\core", "str"))("\n", $pad_2263), (\Phel::getDefinition("phel\\core", "php-indexed-array"))(...(($parts_2264) ?? []))), $suffix_2261);
          }

        } else {
          if (($__truthy = (\Phel::getDefinition("phel\\core", "="))($t_2247, \Phel::keyword("hash-map"))) !== null && $__truthy !== false) {
            if (($__truthy = ((\Phel::getDefinition("phel\\core", "count"))($flat_2249) <= $available_2248)) !== null && $__truthy !== false) {
              return $flat_2249;
            } else {
              $prefix_2270 = "{";
              $suffix_2271 = "}";
              $inner_indent_2272 = (function() use($form,$indent,$width,$t_2247,$available_2248,$flat_2249,$prefix_2270,$suffix_2271) {
                (\Phel::getDefinition("phel\\core", "assert-non-nil"))($indent, 1);
                return ($indent + 1);
              })();
              $pad_2273 = str_repeat(" ", $inner_indent_2272);
              $pairs_2274 = (function() use($form,$indent,$width,$t_2247,$available_2248,$flat_2249,$prefix_2270,$suffix_2271,$inner_indent_2272,$pad_2273) {
                $__phel_2275_2279 = (\Phel::getDefinition("phel\\core", "var"))(\Phel::vector([]));
                foreach (\Phel\Lang\Seq::toIterable($form) as $__phel_2278 => $__phel_2277) {
                  $__phel_2280_2285 = \Phel::vector([$__phel_2278, $__phel_2277]);
                  $__phel_2281_2286 = (\Phel::getDefinition("phel\\core", "first"))($__phel_2280_2285);
                  $__phel_2282_2287 = (\Phel::getDefinition("phel\\core", "next"))($__phel_2280_2285);
                  $k_2288 = $__phel_2281_2286;
                  $__phel_2283_2289 = (\Phel::getDefinition("phel\\core", "first"))($__phel_2282_2287);
                  $__phel_2284_2290 = (\Phel::getDefinition("phel\\core", "next"))($__phel_2282_2287);
                  $v_2291 = $__phel_2283_2289;
                  (\Phel::getDefinition("phel\\core", "swap!"))($__phel_2275_2279, new class($form, $indent, $width, $t_2247, $available_2248, $flat_2249, $prefix_2270, $suffix_2271, $inner_indent_2272, $pad_2273, $__phel_2275_2279, $__phel_2277, $__phel_2278, $__phel_2280_2285, $__phel_2281_2286, $__phel_2282_2287, $k_2288, $__phel_2283_2289, $__phel_2284_2290, $v_2291) extends \Phel\Lang\AbstractFn {
                    public const BOUND_TO = "phel\\pprint\\pp_str.pairs";
                    private $form;
                    private $indent;
                    private $width;
                    private $t_2247;
                    private $available_2248;
                    private $flat_2249;
                    private $prefix_2270;
                    private $suffix_2271;
                    private $inner_indent_2272;
                    private $pad_2273;
                    private $__phel_2275_2279;
                    private $__phel_2277;
                    private $__phel_2278;
                    private $__phel_2280_2285;
                    private $__phel_2281_2286;
                    private $__phel_2282_2287;
                    private $k_2288;
                    private $__phel_2283_2289;
                    private $__phel_2284_2290;
                    private $v_2291;

                    public function __construct($form, $indent, $width, $t_2247, $available_2248, $flat_2249, $prefix_2270, $suffix_2271, $inner_indent_2272, $pad_2273, $__phel_2275_2279, $__phel_2277, $__phel_2278, $__phel_2280_2285, $__phel_2281_2286, $__phel_2282_2287, $k_2288, $__phel_2283_2289, $__phel_2284_2290, $v_2291) {
                      $this->form = $form;
                      $this->indent = $indent;
                      $this->width = $width;
                      $this->t_2247 = $t_2247;
                      $this->available_2248 = $available_2248;
                      $this->flat_2249 = $flat_2249;
                      $this->prefix_2270 = $prefix_2270;
                      $this->suffix_2271 = $suffix_2271;
                      $this->inner_indent_2272 = $inner_indent_2272;
                      $this->pad_2273 = $pad_2273;
                      $this->__phel_2275_2279 = $__phel_2275_2279;
                      $this->__phel_2277 = $__phel_2277;
                      $this->__phel_2278 = $__phel_2278;
                      $this->__phel_2280_2285 = $__phel_2280_2285;
                      $this->__phel_2281_2286 = $__phel_2281_2286;
                      $this->__phel_2282_2287 = $__phel_2282_2287;
                      $this->k_2288 = $k_2288;
                      $this->__phel_2283_2289 = $__phel_2283_2289;
                      $this->__phel_2284_2290 = $__phel_2284_2290;
                      $this->v_2291 = $v_2291;
                    }

                    public function __invoke($__phel_2276) {
                      $form = $this->form;
                      $indent = $this->indent;
                      $width = $this->width;
                      $t_2247 = $this->t_2247;
                      $available_2248 = $this->available_2248;
                      $flat_2249 = $this->flat_2249;
                      $prefix_2270 = $this->prefix_2270;
                      $suffix_2271 = $this->suffix_2271;
                      $inner_indent_2272 = $this->inner_indent_2272;
                      $pad_2273 = $this->pad_2273;
                      $__phel_2275_2279 = $this->__phel_2275_2279;
                      $__phel_2277 = $this->__phel_2277;
                      $__phel_2278 = $this->__phel_2278;
                      $__phel_2280_2285 = $this->__phel_2280_2285;
                      $__phel_2281_2286 = $this->__phel_2281_2286;
                      $__phel_2282_2287 = $this->__phel_2282_2287;
                      $k_2288 = $this->k_2288;
                      $__phel_2283_2289 = $this->__phel_2283_2289;
                      $__phel_2284_2290 = $this->__phel_2284_2290;
                      $v_2291 = $this->v_2291;
                      return (\Phel::getDefinition("phel\\core", "conj"))($__phel_2276, (function() use($form,$indent,$width,$t_2247,$available_2248,$flat_2249,$prefix_2270,$suffix_2271,$inner_indent_2272,$pad_2273,$__phel_2275_2279,$__phel_2277,$__phel_2278,$__phel_2280_2285,$__phel_2281_2286,$__phel_2282_2287,$k_2288,$__phel_2283_2289,$__phel_2284_2290,$v_2291,$__phel_2276) {
                        $kstr_2292 = (\Phel::getDefinition("phel\\pprint", "print-value"))($k_2288);
                        return (\Phel::getDefinition("phel\\core", "str"))($kstr_2292, " ", (\Phel::getDefinition("phel\\pprint", "pp-str"))($v_2291, (function() use($form,$indent,$width,$t_2247,$available_2248,$flat_2249,$prefix_2270,$suffix_2271,$inner_indent_2272,$pad_2273,$__phel_2275_2279,$__phel_2277,$__phel_2278,$__phel_2280_2285,$__phel_2281_2286,$__phel_2282_2287,$k_2288,$__phel_2283_2289,$__phel_2284_2290,$v_2291,$__phel_2276,$kstr_2292) {
                          (\Phel::getDefinition("phel\\core", "assert-non-nil"))($inner_indent_2272, (\Phel::getDefinition("phel\\core", "count"))($kstr_2292), 1);
                          return ($inner_indent_2272 + (\Phel::getDefinition("phel\\core", "count"))($kstr_2292) + 1);
                        })(), $width));
                      })());
                    }
                  });
                }
                return (\Phel::getDefinition("phel\\core", "deref"))($__phel_2275_2279);
              })();
              $joined_2293 = implode((\Phel::getDefinition("phel\\core", "str"))("\n", $pad_2273), (\Phel::getDefinition("phel\\core", "php-indexed-array"))(...(($pairs_2274) ?? [])));
              return (\Phel::getDefinition("phel\\core", "str"))($prefix_2270, $joined_2293, $suffix_2271);
            }

          } else {
            if (($__truthy = (\Phel::getDefinition("phel\\core", "="))($t_2247, \Phel::keyword("set"))) !== null && $__truthy !== false) {
              if (($__truthy = ((\Phel::getDefinition("phel\\core", "count"))($flat_2249) <= $available_2248)) !== null && $__truthy !== false) {
                return $flat_2249;
              } else {
                $prefix_2294 = "#{";
                $suffix_2295 = "}";
                $inner_indent_2296 = (function() use($form,$indent,$width,$t_2247,$available_2248,$flat_2249,$prefix_2294,$suffix_2295) {
                  (\Phel::getDefinition("phel\\core", "assert-non-nil"))($indent, 2);
                  return ($indent + 2);
                })();
                $pad_2297 = str_repeat(" ", $inner_indent_2296);
                $parts_2298 = (function() use($form,$indent,$width,$t_2247,$available_2248,$flat_2249,$prefix_2294,$suffix_2295,$inner_indent_2296,$pad_2297) {
                  $__phel_2299_2302 = (\Phel::getDefinition("phel\\core", "var"))(\Phel::vector([]));
                  foreach (\Phel\Lang\Seq::toIterable($form) as $__phel_2301) {
                    $x_2303 = $__phel_2301;
                    (\Phel::getDefinition("phel\\core", "swap!"))($__phel_2299_2302, new class($form, $indent, $width, $t_2247, $available_2248, $flat_2249, $prefix_2294, $suffix_2295, $inner_indent_2296, $pad_2297, $__phel_2299_2302, $__phel_2301, $x_2303) extends \Phel\Lang\AbstractFn {
                      public const BOUND_TO = "phel\\pprint\\pp_str.parts";
                      private $form;
                      private $indent;
                      private $width;
                      private $t_2247;
                      private $available_2248;
                      private $flat_2249;
                      private $prefix_2294;
                      private $suffix_2295;
                      private $inner_indent_2296;
                      private $pad_2297;
                      private $__phel_2299_2302;
                      private $__phel_2301;
                      private $x_2303;

                      public function __construct($form, $indent, $width, $t_2247, $available_2248, $flat_2249, $prefix_2294, $suffix_2295, $inner_indent_2296, $pad_2297, $__phel_2299_2302, $__phel_2301, $x_2303) {
                        $this->form = $form;
                        $this->indent = $indent;
                        $this->width = $width;
                        $this->t_2247 = $t_2247;
                        $this->available_2248 = $available_2248;
                        $this->flat_2249 = $flat_2249;
                        $this->prefix_2294 = $prefix_2294;
                        $this->suffix_2295 = $suffix_2295;
                        $this->inner_indent_2296 = $inner_indent_2296;
                        $this->pad_2297 = $pad_2297;
                        $this->__phel_2299_2302 = $__phel_2299_2302;
                        $this->__phel_2301 = $__phel_2301;
                        $this->x_2303 = $x_2303;
                      }

                      public function __invoke($__phel_2300) {
                        $form = $this->form;
                        $indent = $this->indent;
                        $width = $this->width;
                        $t_2247 = $this->t_2247;
                        $available_2248 = $this->available_2248;
                        $flat_2249 = $this->flat_2249;
                        $prefix_2294 = $this->prefix_2294;
                        $suffix_2295 = $this->suffix_2295;
                        $inner_indent_2296 = $this->inner_indent_2296;
                        $pad_2297 = $this->pad_2297;
                        $__phel_2299_2302 = $this->__phel_2299_2302;
                        $__phel_2301 = $this->__phel_2301;
                        $x_2303 = $this->x_2303;
                        return (\Phel::getDefinition("phel\\core", "conj"))($__phel_2300, (\Phel::getDefinition("phel\\pprint", "pp-str"))($x_2303, $inner_indent_2296, $width));
                      }
                    });
                  }
                  return (\Phel::getDefinition("phel\\core", "deref"))($__phel_2299_2302);
                })();
                return (\Phel::getDefinition("phel\\core", "str"))($prefix_2294, implode((\Phel::getDefinition("phel\\core", "str"))("\n", $pad_2297), (\Phel::getDefinition("phel\\core", "php-indexed-array"))(...(($parts_2298) ?? []))), $suffix_2295);
              }

            } else {
              if (($__truthy = (\Phel::getDefinition("phel\\core", "="))($t_2247, \Phel::keyword("struct"))) !== null && $__truthy !== false) {
                if (($__truthy = ((\Phel::getDefinition("phel\\core", "count"))($flat_2249) <= $available_2248)) !== null && $__truthy !== false) {
                  return $flat_2249;
                } else {
                  $prefix_2304 = "{";
                  $suffix_2305 = "}";
                  $inner_indent_2306 = (function() use($form,$indent,$width,$t_2247,$available_2248,$flat_2249,$prefix_2304,$suffix_2305) {
                    (\Phel::getDefinition("phel\\core", "assert-non-nil"))($indent, 1);
                    return ($indent + 1);
                  })();
                  $pad_2307 = str_repeat(" ", $inner_indent_2306);
                  $pairs_2308 = (function() use($form,$indent,$width,$t_2247,$available_2248,$flat_2249,$prefix_2304,$suffix_2305,$inner_indent_2306,$pad_2307) {
                    $__phel_2309_2313 = (\Phel::getDefinition("phel\\core", "var"))(\Phel::vector([]));
                    foreach (\Phel\Lang\Seq::toIterable($form) as $__phel_2312 => $__phel_2311) {
                      $__phel_2314_2319 = \Phel::vector([$__phel_2312, $__phel_2311]);
                      $__phel_2315_2320 = (\Phel::getDefinition("phel\\core", "first"))($__phel_2314_2319);
                      $__phel_2316_2321 = (\Phel::getDefinition("phel\\core", "next"))($__phel_2314_2319);
                      $k_2322 = $__phel_2315_2320;
                      $__phel_2317_2323 = (\Phel::getDefinition("phel\\core", "first"))($__phel_2316_2321);
                      $__phel_2318_2324 = (\Phel::getDefinition("phel\\core", "next"))($__phel_2316_2321);
                      $v_2325 = $__phel_2317_2323;
                      (\Phel::getDefinition("phel\\core", "swap!"))($__phel_2309_2313, new class($form, $indent, $width, $t_2247, $available_2248, $flat_2249, $prefix_2304, $suffix_2305, $inner_indent_2306, $pad_2307, $__phel_2309_2313, $__phel_2311, $__phel_2312, $__phel_2314_2319, $__phel_2315_2320, $__phel_2316_2321, $k_2322, $__phel_2317_2323, $__phel_2318_2324, $v_2325) extends \Phel\Lang\AbstractFn {
                        public const BOUND_TO = "phel\\pprint\\pp_str.pairs";
                        private $form;
                        private $indent;
                        private $width;
                        private $t_2247;
                        private $available_2248;
                        private $flat_2249;
                        private $prefix_2304;
                        private $suffix_2305;
                        private $inner_indent_2306;
                        private $pad_2307;
                        private $__phel_2309_2313;
                        private $__phel_2311;
                        private $__phel_2312;
                        private $__phel_2314_2319;
                        private $__phel_2315_2320;
                        private $__phel_2316_2321;
                        private $k_2322;
                        private $__phel_2317_2323;
                        private $__phel_2318_2324;
                        private $v_2325;

                        public function __construct($form, $indent, $width, $t_2247, $available_2248, $flat_2249, $prefix_2304, $suffix_2305, $inner_indent_2306, $pad_2307, $__phel_2309_2313, $__phel_2311, $__phel_2312, $__phel_2314_2319, $__phel_2315_2320, $__phel_2316_2321, $k_2322, $__phel_2317_2323, $__phel_2318_2324, $v_2325) {
                          $this->form = $form;
                          $this->indent = $indent;
                          $this->width = $width;
                          $this->t_2247 = $t_2247;
                          $this->available_2248 = $available_2248;
                          $this->flat_2249 = $flat_2249;
                          $this->prefix_2304 = $prefix_2304;
                          $this->suffix_2305 = $suffix_2305;
                          $this->inner_indent_2306 = $inner_indent_2306;
                          $this->pad_2307 = $pad_2307;
                          $this->__phel_2309_2313 = $__phel_2309_2313;
                          $this->__phel_2311 = $__phel_2311;
                          $this->__phel_2312 = $__phel_2312;
                          $this->__phel_2314_2319 = $__phel_2314_2319;
                          $this->__phel_2315_2320 = $__phel_2315_2320;
                          $this->__phel_2316_2321 = $__phel_2316_2321;
                          $this->k_2322 = $k_2322;
                          $this->__phel_2317_2323 = $__phel_2317_2323;
                          $this->__phel_2318_2324 = $__phel_2318_2324;
                          $this->v_2325 = $v_2325;
                        }

                        public function __invoke($__phel_2310) {
                          $form = $this->form;
                          $indent = $this->indent;
                          $width = $this->width;
                          $t_2247 = $this->t_2247;
                          $available_2248 = $this->available_2248;
                          $flat_2249 = $this->flat_2249;
                          $prefix_2304 = $this->prefix_2304;
                          $suffix_2305 = $this->suffix_2305;
                          $inner_indent_2306 = $this->inner_indent_2306;
                          $pad_2307 = $this->pad_2307;
                          $__phel_2309_2313 = $this->__phel_2309_2313;
                          $__phel_2311 = $this->__phel_2311;
                          $__phel_2312 = $this->__phel_2312;
                          $__phel_2314_2319 = $this->__phel_2314_2319;
                          $__phel_2315_2320 = $this->__phel_2315_2320;
                          $__phel_2316_2321 = $this->__phel_2316_2321;
                          $k_2322 = $this->k_2322;
                          $__phel_2317_2323 = $this->__phel_2317_2323;
                          $__phel_2318_2324 = $this->__phel_2318_2324;
                          $v_2325 = $this->v_2325;
                          return (\Phel::getDefinition("phel\\core", "conj"))($__phel_2310, (function() use($form,$indent,$width,$t_2247,$available_2248,$flat_2249,$prefix_2304,$suffix_2305,$inner_indent_2306,$pad_2307,$__phel_2309_2313,$__phel_2311,$__phel_2312,$__phel_2314_2319,$__phel_2315_2320,$__phel_2316_2321,$k_2322,$__phel_2317_2323,$__phel_2318_2324,$v_2325,$__phel_2310) {
                            $kstr_2326 = (\Phel::getDefinition("phel\\pprint", "print-value"))($k_2322);
                            return (\Phel::getDefinition("phel\\core", "str"))($kstr_2326, " ", (\Phel::getDefinition("phel\\pprint", "pp-str"))($v_2325, (function() use($form,$indent,$width,$t_2247,$available_2248,$flat_2249,$prefix_2304,$suffix_2305,$inner_indent_2306,$pad_2307,$__phel_2309_2313,$__phel_2311,$__phel_2312,$__phel_2314_2319,$__phel_2315_2320,$__phel_2316_2321,$k_2322,$__phel_2317_2323,$__phel_2318_2324,$v_2325,$__phel_2310,$kstr_2326) {
                              (\Phel::getDefinition("phel\\core", "assert-non-nil"))($inner_indent_2306, (\Phel::getDefinition("phel\\core", "count"))($kstr_2326), 1);
                              return ($inner_indent_2306 + (\Phel::getDefinition("phel\\core", "count"))($kstr_2326) + 1);
                            })(), $width));
                          })());
                        }
                      });
                    }
                    return (\Phel::getDefinition("phel\\core", "deref"))($__phel_2309_2313);
                  })();
                  $joined_2327 = implode((\Phel::getDefinition("phel\\core", "str"))("\n", $pad_2307), (\Phel::getDefinition("phel\\core", "php-indexed-array"))(...(($pairs_2308) ?? [])));
                  return (\Phel::getDefinition("phel\\core", "str"))($prefix_2304, $joined_2327, $suffix_2305);
                }

              } else {
                return $flat_2249;
              }

            }

          }

        }

      }

    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(pp-str form indent width)\n```\nPretty-prints `form` to a string with the given indent level and max width.",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/pprint.phel",
      \Phel::keyword("line"), 12,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/pprint.phel",
      \Phel::keyword("line"), 81,
      \Phel::keyword("column"), 13
    ),
    "min-arity", 3,
    "is-variadic", false,
    "arglists", "[form indent width]"
  )
);
\Phel::addDefinition(
  "phel\\pprint",
  "pprint-str",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\pprint\\pprint_str";

    public function __invoke($form, ...$__phel_2328) {
      $__phel_2328 = \Phel::vector($__phel_2328);
      $__phel_2329_2332 = $__phel_2328;
      $__phel_2330_2333 = (\Phel::getDefinition("phel\\core", "first"))($__phel_2329_2332);
      $__phel_2331_2334 = (\Phel::getDefinition("phel\\core", "next"))($__phel_2329_2332);
      $width_2335 = $__phel_2330_2333;
      $w_2336 = (function() use($form,$__phel_2328,$__phel_2329_2332,$__phel_2330_2333,$__phel_2331_2334,$width_2335) {
        $__phel_2337_2338 = $width_2335;
        if (($__truthy = $__phel_2337_2338) !== null && $__truthy !== false) {
          return $__phel_2337_2338;
        } else {
          return \Phel::getDefinition("phel\\pprint", "*default-width*");
        }

      })();
      return (\Phel::getDefinition("phel\\pprint", "pp-str"))($form, 0, $w_2336);
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(pprint-str form & [width])\n```\nPretty-print a data structure to a string with line breaks and indentation.",
    \Phel::keyword("see-also"), \Phel::vector(["pprint"]),
    \Phel::keyword("example"), "(pprint-str {:a [1 2 3] :b {:c 4 :d 5}})",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/pprint.phel",
      \Phel::keyword("line"), 83,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/pprint.phel",
      \Phel::keyword("line"), 90,
      \Phel::keyword("column"), 23
    ),
    "min-arity", 1,
    "is-variadic", true,
    "arglists", "[form & __phel_2328]"
  )
);
\Phel::addDefinition(
  "phel\\pprint",
  "pprint",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\pprint\\pprint";

    public function __invoke($form, ...$__phel_2339) {
      $__phel_2339 = \Phel::vector($__phel_2339);
      $__phel_2340_2343 = $__phel_2339;
      $__phel_2341_2344 = (\Phel::getDefinition("phel\\core", "first"))($__phel_2340_2343);
      $__phel_2342_2345 = (\Phel::getDefinition("phel\\core", "next"))($__phel_2340_2343);
      $width_2346 = $__phel_2341_2344;
      print((\Phel::getDefinition("phel\\pprint", "pprint-str"))($form, $width_2346));
      print("\n");
      return null;
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(pprint form & [width])\n```\nPretty-print a data structure to stdout with line breaks and indentation.",
    \Phel::keyword("see-also"), \Phel::vector(["pprint-str"]),
    \Phel::keyword("example"), "(pprint {:a [1 2 3] :b {:c 4 :d 5}})",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/pprint.phel",
      \Phel::keyword("line"), 92,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/pprint.phel",
      \Phel::keyword("line"), 100,
      \Phel::keyword("column"), 6
    ),
    "min-arity", 1,
    "is-variadic", true,
    "arglists", "[form & __phel_2339]"
  )
);
