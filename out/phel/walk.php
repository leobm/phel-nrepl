<?php declare(strict_types=1);
namespace phel\walk;
require_once __DIR__ . '/../phel/core.php';
require_once __DIR__ . '/../phel/core.php';
\Phel::addDefinition(
  "phel\\core",
  "*file*",
  "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/walk.phel"
);
\Phel::addDefinition(
  "phel\\core",
  "*ns*",
  "phel\\walk"
);
\Phel::addDefinition(
  "phel\\walk",
  "walk",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\walk\\walk";

    public function __invoke($inner, $outer, $form) {
      $t_2347 = (\Phel::getDefinition("phel\\core", "type"))($form);
      return ($outer)((($__truthy = (\Phel::getDefinition("phel\\core", "="))($t_2347, \Phel::keyword("list"))) !== null && $__truthy !== false ? (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "map"))($inner, $form)) ?? [])) : (($__truthy = (\Phel::getDefinition("phel\\core", "="))($t_2347, \Phel::keyword("vector"))) !== null && $__truthy !== false ? (\Phel::getDefinition("phel\\core", "vec"))((\Phel::getDefinition("phel\\core", "map"))($inner, $form)) : (($__truthy = (\Phel::getDefinition("phel\\core", "="))($t_2347, \Phel::keyword("hash-map"))) !== null && $__truthy !== false ? (\Phel::getDefinition("phel\\core", "into"))(\Phel::map(), (function() use($inner,$outer,$form,$t_2347) {
        $__phel_2348_2352 = (\Phel::getDefinition("phel\\core", "var"))(\Phel::vector([]));
        foreach (\Phel\Lang\Seq::toIterable($form) as $__phel_2351 => $__phel_2350) {
          $__phel_2353_2358 = \Phel::vector([$__phel_2351, $__phel_2350]);
          $__phel_2354_2359 = (\Phel::getDefinition("phel\\core", "first"))($__phel_2353_2358);
          $__phel_2355_2360 = (\Phel::getDefinition("phel\\core", "next"))($__phel_2353_2358);
          $k_2361 = $__phel_2354_2359;
          $__phel_2356_2362 = (\Phel::getDefinition("phel\\core", "first"))($__phel_2355_2360);
          $__phel_2357_2363 = (\Phel::getDefinition("phel\\core", "next"))($__phel_2355_2360);
          $v_2364 = $__phel_2356_2362;
          (\Phel::getDefinition("phel\\core", "swap!"))($__phel_2348_2352, new class($inner, $outer, $form, $t_2347, $__phel_2348_2352, $__phel_2350, $__phel_2351, $__phel_2353_2358, $__phel_2354_2359, $__phel_2355_2360, $k_2361, $__phel_2356_2362, $__phel_2357_2363, $v_2364) extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\walk\\walk";
            private $inner;
            private $outer;
            private $form;
            private $t_2347;
            private $__phel_2348_2352;
            private $__phel_2350;
            private $__phel_2351;
            private $__phel_2353_2358;
            private $__phel_2354_2359;
            private $__phel_2355_2360;
            private $k_2361;
            private $__phel_2356_2362;
            private $__phel_2357_2363;
            private $v_2364;

            public function __construct($inner, $outer, $form, $t_2347, $__phel_2348_2352, $__phel_2350, $__phel_2351, $__phel_2353_2358, $__phel_2354_2359, $__phel_2355_2360, $k_2361, $__phel_2356_2362, $__phel_2357_2363, $v_2364) {
              $this->inner = $inner;
              $this->outer = $outer;
              $this->form = $form;
              $this->t_2347 = $t_2347;
              $this->__phel_2348_2352 = $__phel_2348_2352;
              $this->__phel_2350 = $__phel_2350;
              $this->__phel_2351 = $__phel_2351;
              $this->__phel_2353_2358 = $__phel_2353_2358;
              $this->__phel_2354_2359 = $__phel_2354_2359;
              $this->__phel_2355_2360 = $__phel_2355_2360;
              $this->k_2361 = $k_2361;
              $this->__phel_2356_2362 = $__phel_2356_2362;
              $this->__phel_2357_2363 = $__phel_2357_2363;
              $this->v_2364 = $v_2364;
            }

            public function __invoke($__phel_2349) {
              $inner = $this->inner;
              $outer = $this->outer;
              $form = $this->form;
              $t_2347 = $this->t_2347;
              $__phel_2348_2352 = $this->__phel_2348_2352;
              $__phel_2350 = $this->__phel_2350;
              $__phel_2351 = $this->__phel_2351;
              $__phel_2353_2358 = $this->__phel_2353_2358;
              $__phel_2354_2359 = $this->__phel_2354_2359;
              $__phel_2355_2360 = $this->__phel_2355_2360;
              $k_2361 = $this->k_2361;
              $__phel_2356_2362 = $this->__phel_2356_2362;
              $__phel_2357_2363 = $this->__phel_2357_2363;
              $v_2364 = $this->v_2364;
              return (\Phel::getDefinition("phel\\core", "conj"))($__phel_2349, \Phel::vector([($inner)($k_2361), ($inner)($v_2364)]));
            }
          });
        }
        return (\Phel::getDefinition("phel\\core", "deref"))($__phel_2348_2352);
      })()) : (($__truthy = (\Phel::getDefinition("phel\\core", "="))($t_2347, \Phel::keyword("set"))) !== null && $__truthy !== false ? (\Phel::getDefinition("phel\\core", "into"))((\Phel::getDefinition("phel\\core", "hash-set"))(), (\Phel::getDefinition("phel\\core", "map"))($inner, $form)) : (($__truthy = (\Phel::getDefinition("phel\\core", "="))($t_2347, \Phel::keyword("struct"))) !== null && $__truthy !== false ? (\Phel::getDefinition("phel\\core", "into"))(\Phel::map(), (function() use($inner,$outer,$form,$t_2347) {
        $__phel_2365_2369 = (\Phel::getDefinition("phel\\core", "var"))(\Phel::vector([]));
        foreach (\Phel\Lang\Seq::toIterable($form) as $__phel_2368 => $__phel_2367) {
          $__phel_2370_2375 = \Phel::vector([$__phel_2368, $__phel_2367]);
          $__phel_2371_2376 = (\Phel::getDefinition("phel\\core", "first"))($__phel_2370_2375);
          $__phel_2372_2377 = (\Phel::getDefinition("phel\\core", "next"))($__phel_2370_2375);
          $k_2378 = $__phel_2371_2376;
          $__phel_2373_2379 = (\Phel::getDefinition("phel\\core", "first"))($__phel_2372_2377);
          $__phel_2374_2380 = (\Phel::getDefinition("phel\\core", "next"))($__phel_2372_2377);
          $v_2381 = $__phel_2373_2379;
          (\Phel::getDefinition("phel\\core", "swap!"))($__phel_2365_2369, new class($inner, $outer, $form, $t_2347, $__phel_2365_2369, $__phel_2367, $__phel_2368, $__phel_2370_2375, $__phel_2371_2376, $__phel_2372_2377, $k_2378, $__phel_2373_2379, $__phel_2374_2380, $v_2381) extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\walk\\walk";
            private $inner;
            private $outer;
            private $form;
            private $t_2347;
            private $__phel_2365_2369;
            private $__phel_2367;
            private $__phel_2368;
            private $__phel_2370_2375;
            private $__phel_2371_2376;
            private $__phel_2372_2377;
            private $k_2378;
            private $__phel_2373_2379;
            private $__phel_2374_2380;
            private $v_2381;

            public function __construct($inner, $outer, $form, $t_2347, $__phel_2365_2369, $__phel_2367, $__phel_2368, $__phel_2370_2375, $__phel_2371_2376, $__phel_2372_2377, $k_2378, $__phel_2373_2379, $__phel_2374_2380, $v_2381) {
              $this->inner = $inner;
              $this->outer = $outer;
              $this->form = $form;
              $this->t_2347 = $t_2347;
              $this->__phel_2365_2369 = $__phel_2365_2369;
              $this->__phel_2367 = $__phel_2367;
              $this->__phel_2368 = $__phel_2368;
              $this->__phel_2370_2375 = $__phel_2370_2375;
              $this->__phel_2371_2376 = $__phel_2371_2376;
              $this->__phel_2372_2377 = $__phel_2372_2377;
              $this->k_2378 = $k_2378;
              $this->__phel_2373_2379 = $__phel_2373_2379;
              $this->__phel_2374_2380 = $__phel_2374_2380;
              $this->v_2381 = $v_2381;
            }

            public function __invoke($__phel_2366) {
              $inner = $this->inner;
              $outer = $this->outer;
              $form = $this->form;
              $t_2347 = $this->t_2347;
              $__phel_2365_2369 = $this->__phel_2365_2369;
              $__phel_2367 = $this->__phel_2367;
              $__phel_2368 = $this->__phel_2368;
              $__phel_2370_2375 = $this->__phel_2370_2375;
              $__phel_2371_2376 = $this->__phel_2371_2376;
              $__phel_2372_2377 = $this->__phel_2372_2377;
              $k_2378 = $this->k_2378;
              $__phel_2373_2379 = $this->__phel_2373_2379;
              $__phel_2374_2380 = $this->__phel_2374_2380;
              $v_2381 = $this->v_2381;
              return (\Phel::getDefinition("phel\\core", "conj"))($__phel_2366, \Phel::vector([($inner)($k_2378), ($inner)($v_2381)]));
            }
          });
        }
        return (\Phel::getDefinition("phel\\core", "deref"))($__phel_2365_2369);
      })()) : $form))))));
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(walk inner outer form)\n```\nGeneric tree walker for nested data structures.",
    \Phel::keyword("see-also"), \Phel::vector(["postwalk", "prewalk"]),
    \Phel::keyword("example"), "(walk inc identity [1 2 3]) ; => [2 3 4]",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/walk.phel",
      \Phel::keyword("line"), 4,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/walk.phel",
      \Phel::keyword("line"), 31,
      \Phel::keyword("column"), 16
    ),
    "min-arity", 3,
    "is-variadic", false,
    "arglists", "[inner outer form]"
  )
);
\Phel::addDefinition(
  "phel\\walk",
  "postwalk",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\walk\\postwalk";

    public function __invoke($f, $form) {
      return (\Phel::getDefinition("phel\\walk", "walk"))(new class($f, $form) extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\walk\\postwalk";
        private $f;
        private $form;

        public function __construct($f, $form) {
          $this->f = $f;
          $this->form = $form;
        }

        public function __invoke($__short_fn_1_2382) {
          $f = $this->f;
          $form = $this->form;
          return (\Phel::getDefinition("phel\\walk", "postwalk"))($f, $__short_fn_1_2382);
        }
      }, $f, $form);
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(postwalk f form)\n```\nBottom-up tree walk — applies f after recursing into children.",
    \Phel::keyword("see-also"), \Phel::vector(["prewalk", "walk", "postwalk-replace"]),
    \Phel::keyword("example"), "(postwalk inc [1 [2 3]]) ; => [2 [3 4]]",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/walk.phel",
      \Phel::keyword("line"), 33,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/walk.phel",
      \Phel::keyword("line"), 41,
      \Phel::keyword("column"), 32
    ),
    "min-arity", 2,
    "is-variadic", false,
    "arglists", "[f form]"
  )
);
\Phel::addDefinition(
  "phel\\walk",
  "prewalk",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\walk\\prewalk";

    public function __invoke($f, $form) {
      return (\Phel::getDefinition("phel\\walk", "walk"))(new class($f, $form) extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\walk\\prewalk";
        private $f;
        private $form;

        public function __construct($f, $form) {
          $this->f = $f;
          $this->form = $form;
        }

        public function __invoke($__short_fn_1_2383) {
          $f = $this->f;
          $form = $this->form;
          return (\Phel::getDefinition("phel\\walk", "prewalk"))($f, $__short_fn_1_2383);
        }
      }, \Phel::getDefinition("phel\\core", "identity"), ($f)($form));
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(prewalk f form)\n```\nTop-down tree walk — applies f before recursing into children.",
    \Phel::keyword("see-also"), \Phel::vector(["postwalk", "walk", "prewalk-replace"]),
    \Phel::keyword("example"), "(prewalk identity [1 [2 3]]) ; => [1 [2 3]]",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/walk.phel",
      \Phel::keyword("line"), 43,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/walk.phel",
      \Phel::keyword("line"), 50,
      \Phel::keyword("column"), 42
    ),
    "min-arity", 2,
    "is-variadic", false,
    "arglists", "[f form]"
  )
);
\Phel::addDefinition(
  "phel\\walk",
  "postwalk-replace",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\walk\\postwalk_replace";

    public function __invoke($smap, $form) {
      return (\Phel::getDefinition("phel\\walk", "postwalk"))(new class($smap, $form) extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\walk\\postwalk_replace";
        private $smap;
        private $form;

        public function __construct($smap, $form) {
          $this->smap = $smap;
          $this->form = $form;
        }

        public function __invoke($x) {
          $smap = $this->smap;
          $form = $this->form;
          if (($__truthy = (\Phel::getDefinition("phel\\core", "contains?"))($smap, $x)) !== null && $__truthy !== false) {
            return (\Phel::getDefinition("phel\\core", "get"))($smap, $x);
          } else {
            return $x;
          }

        }
      }, $form);
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(postwalk-replace smap form)\n```\nReplace values bottom-up using a substitution map.",
    \Phel::keyword("see-also"), \Phel::vector(["prewalk-replace", "postwalk"]),
    \Phel::keyword("example"), "(postwalk-replace {:a :b} [:a :c]) ; => [:b :c]",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/walk.phel",
      \Phel::keyword("line"), 52,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/walk.phel",
      \Phel::keyword("line"), 59,
      \Phel::keyword("column"), 66
    ),
    "min-arity", 2,
    "is-variadic", false,
    "arglists", "[smap form]"
  )
);
\Phel::addDefinition(
  "phel\\walk",
  "prewalk-replace",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\walk\\prewalk_replace";

    public function __invoke($smap, $form) {
      return (\Phel::getDefinition("phel\\walk", "prewalk"))(new class($smap, $form) extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\walk\\prewalk_replace";
        private $smap;
        private $form;

        public function __construct($smap, $form) {
          $this->smap = $smap;
          $this->form = $form;
        }

        public function __invoke($x) {
          $smap = $this->smap;
          $form = $this->form;
          if (($__truthy = (\Phel::getDefinition("phel\\core", "contains?"))($smap, $x)) !== null && $__truthy !== false) {
            return (\Phel::getDefinition("phel\\core", "get"))($smap, $x);
          } else {
            return $x;
          }

        }
      }, $form);
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(prewalk-replace smap form)\n```\nReplace values top-down using a substitution map.",
    \Phel::keyword("see-also"), \Phel::vector(["postwalk-replace", "prewalk"]),
    \Phel::keyword("example"), "(prewalk-replace {:a :b} [:a :c]) ; => [:b :c]",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/walk.phel",
      \Phel::keyword("line"), 61,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/walk.phel",
      \Phel::keyword("line"), 68,
      \Phel::keyword("column"), 65
    ),
    "min-arity", 2,
    "is-variadic", false,
    "arglists", "[smap form]"
  )
);
\Phel::addDefinition(
  "phel\\walk",
  "keywordize-keys",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\walk\\keywordize_keys";

    public function __invoke($m) {
      return (\Phel::getDefinition("phel\\walk", "postwalk"))(new class($m) extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\walk\\keywordize_keys";
        private $m;

        public function __construct($m) {
          $this->m = $m;
        }

        public function __invoke($form) {
          $m = $this->m;
          if (($__truthy = (\Phel::getDefinition("phel\\core", "="))((\Phel::getDefinition("phel\\core", "type"))($form), \Phel::keyword("hash-map"))) !== null && $__truthy !== false) {
            return (\Phel::getDefinition("phel\\core", "into"))(\Phel::map(), (function() use($m,$form) {
              $__phel_2384_2388 = (\Phel::getDefinition("phel\\core", "var"))(\Phel::vector([]));
              foreach (\Phel\Lang\Seq::toIterable($form) as $__phel_2387 => $__phel_2386) {
                $__phel_2389_2394 = \Phel::vector([$__phel_2387, $__phel_2386]);
                $__phel_2390_2395 = (\Phel::getDefinition("phel\\core", "first"))($__phel_2389_2394);
                $__phel_2391_2396 = (\Phel::getDefinition("phel\\core", "next"))($__phel_2389_2394);
                $k_2397 = $__phel_2390_2395;
                $__phel_2392_2398 = (\Phel::getDefinition("phel\\core", "first"))($__phel_2391_2396);
                $__phel_2393_2399 = (\Phel::getDefinition("phel\\core", "next"))($__phel_2391_2396);
                $v_2400 = $__phel_2392_2398;
                (\Phel::getDefinition("phel\\core", "swap!"))($__phel_2384_2388, new class($m, $form, $__phel_2384_2388, $__phel_2386, $__phel_2387, $__phel_2389_2394, $__phel_2390_2395, $__phel_2391_2396, $k_2397, $__phel_2392_2398, $__phel_2393_2399, $v_2400) extends \Phel\Lang\AbstractFn {
                  public const BOUND_TO = "phel\\walk\\keywordize_keys";
                  private $m;
                  private $form;
                  private $__phel_2384_2388;
                  private $__phel_2386;
                  private $__phel_2387;
                  private $__phel_2389_2394;
                  private $__phel_2390_2395;
                  private $__phel_2391_2396;
                  private $k_2397;
                  private $__phel_2392_2398;
                  private $__phel_2393_2399;
                  private $v_2400;

                  public function __construct($m, $form, $__phel_2384_2388, $__phel_2386, $__phel_2387, $__phel_2389_2394, $__phel_2390_2395, $__phel_2391_2396, $k_2397, $__phel_2392_2398, $__phel_2393_2399, $v_2400) {
                    $this->m = $m;
                    $this->form = $form;
                    $this->__phel_2384_2388 = $__phel_2384_2388;
                    $this->__phel_2386 = $__phel_2386;
                    $this->__phel_2387 = $__phel_2387;
                    $this->__phel_2389_2394 = $__phel_2389_2394;
                    $this->__phel_2390_2395 = $__phel_2390_2395;
                    $this->__phel_2391_2396 = $__phel_2391_2396;
                    $this->k_2397 = $k_2397;
                    $this->__phel_2392_2398 = $__phel_2392_2398;
                    $this->__phel_2393_2399 = $__phel_2393_2399;
                    $this->v_2400 = $v_2400;
                  }

                  public function __invoke($__phel_2385) {
                    $m = $this->m;
                    $form = $this->form;
                    $__phel_2384_2388 = $this->__phel_2384_2388;
                    $__phel_2386 = $this->__phel_2386;
                    $__phel_2387 = $this->__phel_2387;
                    $__phel_2389_2394 = $this->__phel_2389_2394;
                    $__phel_2390_2395 = $this->__phel_2390_2395;
                    $__phel_2391_2396 = $this->__phel_2391_2396;
                    $k_2397 = $this->k_2397;
                    $__phel_2392_2398 = $this->__phel_2392_2398;
                    $__phel_2393_2399 = $this->__phel_2393_2399;
                    $v_2400 = $this->v_2400;
                    return (\Phel::getDefinition("phel\\core", "conj"))($__phel_2385, \Phel::vector([(($__truthy = (\Phel::getDefinition("phel\\core", "string?"))($k_2397)) !== null && $__truthy !== false ? (\Phel::getDefinition("phel\\core", "keyword"))($k_2397) : $k_2397), $v_2400]));
                  }
                });
              }
              return (\Phel::getDefinition("phel\\core", "deref"))($__phel_2384_2388);
            })());
          } else {
            return $form;
          }

        }
      }, $m);
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(keywordize-keys m)\n```\nConvert string map keys to keywords, recursively.",
    \Phel::keyword("see-also"), \Phel::vector(["stringify-keys"]),
    \Phel::keyword("example"), "(keywordize-keys {\"name\" \"phel\"}) ; => {:name \"phel\"}",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/walk.phel",
      \Phel::keyword("line"), 70,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/walk.phel",
      \Phel::keyword("line"), 83,
      \Phel::keyword("column"), 7
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[m]"
  )
);
\Phel::addDefinition(
  "phel\\walk",
  "stringify-keys",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\walk\\stringify_keys";

    public function __invoke($m) {
      return (\Phel::getDefinition("phel\\walk", "postwalk"))(new class($m) extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\walk\\stringify_keys";
        private $m;

        public function __construct($m) {
          $this->m = $m;
        }

        public function __invoke($form) {
          $m = $this->m;
          if (($__truthy = (\Phel::getDefinition("phel\\core", "="))((\Phel::getDefinition("phel\\core", "type"))($form), \Phel::keyword("hash-map"))) !== null && $__truthy !== false) {
            return (\Phel::getDefinition("phel\\core", "into"))(\Phel::map(), (function() use($m,$form) {
              $__phel_2401_2405 = (\Phel::getDefinition("phel\\core", "var"))(\Phel::vector([]));
              foreach (\Phel\Lang\Seq::toIterable($form) as $__phel_2404 => $__phel_2403) {
                $__phel_2406_2411 = \Phel::vector([$__phel_2404, $__phel_2403]);
                $__phel_2407_2412 = (\Phel::getDefinition("phel\\core", "first"))($__phel_2406_2411);
                $__phel_2408_2413 = (\Phel::getDefinition("phel\\core", "next"))($__phel_2406_2411);
                $k_2414 = $__phel_2407_2412;
                $__phel_2409_2415 = (\Phel::getDefinition("phel\\core", "first"))($__phel_2408_2413);
                $__phel_2410_2416 = (\Phel::getDefinition("phel\\core", "next"))($__phel_2408_2413);
                $v_2417 = $__phel_2409_2415;
                (\Phel::getDefinition("phel\\core", "swap!"))($__phel_2401_2405, new class($m, $form, $__phel_2401_2405, $__phel_2403, $__phel_2404, $__phel_2406_2411, $__phel_2407_2412, $__phel_2408_2413, $k_2414, $__phel_2409_2415, $__phel_2410_2416, $v_2417) extends \Phel\Lang\AbstractFn {
                  public const BOUND_TO = "phel\\walk\\stringify_keys";
                  private $m;
                  private $form;
                  private $__phel_2401_2405;
                  private $__phel_2403;
                  private $__phel_2404;
                  private $__phel_2406_2411;
                  private $__phel_2407_2412;
                  private $__phel_2408_2413;
                  private $k_2414;
                  private $__phel_2409_2415;
                  private $__phel_2410_2416;
                  private $v_2417;

                  public function __construct($m, $form, $__phel_2401_2405, $__phel_2403, $__phel_2404, $__phel_2406_2411, $__phel_2407_2412, $__phel_2408_2413, $k_2414, $__phel_2409_2415, $__phel_2410_2416, $v_2417) {
                    $this->m = $m;
                    $this->form = $form;
                    $this->__phel_2401_2405 = $__phel_2401_2405;
                    $this->__phel_2403 = $__phel_2403;
                    $this->__phel_2404 = $__phel_2404;
                    $this->__phel_2406_2411 = $__phel_2406_2411;
                    $this->__phel_2407_2412 = $__phel_2407_2412;
                    $this->__phel_2408_2413 = $__phel_2408_2413;
                    $this->k_2414 = $k_2414;
                    $this->__phel_2409_2415 = $__phel_2409_2415;
                    $this->__phel_2410_2416 = $__phel_2410_2416;
                    $this->v_2417 = $v_2417;
                  }

                  public function __invoke($__phel_2402) {
                    $m = $this->m;
                    $form = $this->form;
                    $__phel_2401_2405 = $this->__phel_2401_2405;
                    $__phel_2403 = $this->__phel_2403;
                    $__phel_2404 = $this->__phel_2404;
                    $__phel_2406_2411 = $this->__phel_2406_2411;
                    $__phel_2407_2412 = $this->__phel_2407_2412;
                    $__phel_2408_2413 = $this->__phel_2408_2413;
                    $k_2414 = $this->k_2414;
                    $__phel_2409_2415 = $this->__phel_2409_2415;
                    $__phel_2410_2416 = $this->__phel_2410_2416;
                    $v_2417 = $this->v_2417;
                    return (\Phel::getDefinition("phel\\core", "conj"))($__phel_2402, \Phel::vector([(($__truthy = (\Phel::getDefinition("phel\\core", "keyword?"))($k_2414)) !== null && $__truthy !== false ? (\Phel::getDefinition("phel\\core", "name"))($k_2414) : $k_2414), $v_2417]));
                  }
                });
              }
              return (\Phel::getDefinition("phel\\core", "deref"))($__phel_2401_2405);
            })());
          } else {
            return $form;
          }

        }
      }, $m);
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(stringify-keys m)\n```\nConvert keyword map keys to strings, recursively.",
    \Phel::keyword("see-also"), \Phel::vector(["keywordize-keys"]),
    \Phel::keyword("example"), "(stringify-keys {:name \"phel\"}) ; => {\"name\" \"phel\"}",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/walk.phel",
      \Phel::keyword("line"), 85,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/walk.phel",
      \Phel::keyword("line"), 98,
      \Phel::keyword("column"), 7
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[m]"
  )
);
