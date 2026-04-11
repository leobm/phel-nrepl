<?php declare(strict_types=1);
namespace phel\repl;
require_once __DIR__ . '/../phel/core.php';
require_once __DIR__ . '/../phel/test.php';
\Phel::addDefinition(
  "phel\\core",
  "*file*",
  "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel"
);
\Phel::addDefinition(
  "phel\\core",
  "*ns*",
  "phel\\repl"
);
\Phel::addDefinition(
  "phel\\repl",
  "build-facade",
  (new \Phel\Build\BuildFacade()),
  \Phel::map(
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 15,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 15,
      \Phel::keyword("column"), 40
    )
  )
);
\Phel::addDefinition(
  "phel\\repl",
  "src-dirs",
  array(),
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 17,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 17,
      \Phel::keyword("column"), 27
    )
  )
);
\Phel::addDefinition(
  "phel\\repl",
  "get-global-env",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\repl\\get_global_env";

    public function __invoke() {
      return (\Phel\Compiler\Infrastructure\GlobalEnvironmentSingleton::getInstance());
    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(get-global-env)\n```\n",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 19,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 20,
      \Phel::keyword("column"), 52
    ),
    "min-arity", 0,
    "is-variadic", false,
    "arglists", "[]"
  )
);
\Phel::addDefinition(
  "phel\\repl",
  "loaded-namespaces",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\repl\\loaded_namespaces";

    public function __invoke() {
      return (\Phel::getNamespaces());
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(loaded-namespaces)\n```\nReturns all namespaces currently loaded in the REPL.",
    \Phel::keyword("example"), "(loaded-namespaces) ; => [\"phel\\core\" \"phel\\repl\"]",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 22,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 26,
      \Phel::keyword("column"), 32
    ),
    "min-arity", 0,
    "is-variadic", false,
    "arglists", "[]"
  )
);
\Phel::addDefinition(
  "phel\\repl",
  "ns-list",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\repl\\ns_list";

    public function __invoke() {
      $munge_2022 = (new \Phel\Compiler\Application\Munge());
      return (\Phel::getDefinition("phel\\core", "sort"))((function() use($munge_2022) {
        $__phel_2023_2026 = (\Phel::getDefinition("phel\\core", "var"))(\Phel::vector([]));
        foreach (\Phel\Lang\Seq::toIterable((\Phel::getDefinition("phel\\repl", "loaded-namespaces"))()) as $__phel_2025) {
          $ns_2027 = $__phel_2025;
          (\Phel::getDefinition("phel\\core", "swap!"))($__phel_2023_2026, new class($munge_2022, $__phel_2023_2026, $__phel_2025, $ns_2027) extends \Phel\Lang\AbstractFn {
            public const BOUND_TO = "phel\\repl\\ns_list";
            private $munge_2022;
            private $__phel_2023_2026;
            private $__phel_2025;
            private $ns_2027;

            public function __construct($munge_2022, $__phel_2023_2026, $__phel_2025, $ns_2027) {
              $this->munge_2022 = $munge_2022;
              $this->__phel_2023_2026 = $__phel_2023_2026;
              $this->__phel_2025 = $__phel_2025;
              $this->ns_2027 = $ns_2027;
            }

            public function __invoke($__phel_2024) {
              $munge_2022 = $this->munge_2022;
              $__phel_2023_2026 = $this->__phel_2023_2026;
              $__phel_2025 = $this->__phel_2025;
              $ns_2027 = $this->ns_2027;
              return (\Phel::getDefinition("phel\\core", "conj"))($__phel_2024, (function() use($munge_2022,$__phel_2023_2026,$__phel_2025,$ns_2027,$__phel_2024) {
                $target_2028 = $munge_2022;
                return $target_2028->decodeNs($ns_2027);
              })());
            }
          });
        }
        return (\Phel::getDefinition("phel\\core", "deref"))($__phel_2023_2026);
      })());
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(ns-list)\n```\nReturns a sorted vector of all loaded namespace names, decoded to\n  human-readable form (hyphens restored instead of underscores).",
    \Phel::keyword("example"), "(ns-list) ; => [\"phel\\core\" \"phel\\repl\" ...]",
    \Phel::keyword("see-also"), \Phel::vector(["loaded-namespaces", "dir", "ns-publics"]),
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 28,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 36,
      \Phel::keyword("column"), 44
    ),
    "min-arity", 0,
    "is-variadic", false,
    "arglists", "[]"
  )
);
\Phel::addDefinition(
  "phel\\repl",
  "eval-file",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\repl\\eval_file";

    public function __invoke($file) {
      return (function() use($file) {
        $target_2030 = \Phel::getDefinition("phel\\repl", "build-facade");
        return $target_2030->evalFile($file);
      })();
    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(eval-file file)\n```\n",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 38,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 39,
      \Phel::keyword("column"), 40
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[file]"
  )
);
\Phel::addDefinition(
  "phel\\repl",
  "get-src-dirs",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\repl\\get_src_dirs";

    public function __invoke() {
      if (($__truthy = (\Phel::getDefinition("phel\\core", "not"))(empty(\Phel::getDefinition("phel\\repl", "src-dirs")))) !== null && $__truthy !== false) {
        return \Phel::getDefinition("phel\\repl", "src-dirs");
      } else {
        $dirs_2032 = (function() {
          $target_2034 = (new \Phel\Command\CommandFacade());
          return $target_2034->getAllPhelDirectories();
        })();
        $cwd_2033 = getcwd();
        if (($__truthy = $cwd_2033) !== null && $__truthy !== false) {
          array_push($dirs_2032, $cwd_2033);
        } else {

        }

        return $dirs_2032;
      }

    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(get-src-dirs)\n```\nReturns source directories for namespace resolution. Falls back to\n  CommandFacade when src-dirs has not been initialized (e.g. outside vanilla REPL).",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 41,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 51,
      \Phel::keyword("column"), 13
    ),
    "min-arity", 0,
    "is-variadic", false,
    "arglists", "[]"
  )
);
\Phel::addDefinition(
  "phel\\repl",
  "eval-namespace",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\repl\\eval_namespace";

    public function __invoke($namespace) {
      $dependencies_2036 = (function() use($namespace) {
        $target_2037 = \Phel::getDefinition("phel\\repl", "build-facade");
        return $target_2037->getDependenciesForNamespace((\Phel::getDefinition("phel\\repl", "get-src-dirs"))(), array($namespace));
      })();
      return (function() use($namespace,$dependencies_2036) {
        foreach (\Phel\Lang\Seq::toIterable($dependencies_2036) as $dep) {
          if (($__truthy = in_array((function() use($namespace,$dependencies_2036,$dep) {
            $target_2038 = $dep;
            return $target_2038->getNamespace();
          })(), (\Phel::getDefinition("phel\\repl", "loaded-namespaces"))())) !== null && $__truthy !== false) {

          } else {
            (\Phel::getDefinition("phel\\repl", "eval-file"))((function() use($namespace,$dependencies_2036,$dep) {
              $target_2039 = $dep;
              return $target_2039->getFile();
            })());
          }

        }
        return null;
      })();
    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(eval-namespace namespace)\n```\n",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 53,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 57,
      \Phel::keyword("column"), 46
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[namespace]"
  )
);
\Phel::addDefinition(
  "phel\\repl",
  "resolve",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\repl\\resolve";

    public function __invoke($sym) {
      return (function() use($sym) {
        $target_2043 = (\Phel::getDefinition("phel\\repl", "get-global-env"))();
        return $target_2043->resolveAsSymbol($sym, (\Phel\Compiler\Domain\Analyzer\Environment\NodeEnvironment::empty()));
      })();
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(resolve sym)\n```\nResolves the given symbol in the current environment and returns a resolved Symbol with the absolute namespace or nil if it cannot be resolved.",
    \Phel::keyword("example"), "(resolve 'map) ; => phel\\core/map",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 59,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 64,
      \Phel::keyword("column"), 71
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[sym]"
  )
);
\Phel::addDefinition(
  "phel\\repl",
  "clean-doc",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\repl\\clean_doc";

    public function __invoke($str) {
      return trim(str_replace(array("```phel\n", "```"), "", $str));
    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(clean-doc str)\n```\n",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 66,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 67,
      \Phel::keyword("column"), 68
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[str]"
  )
);
\Phel::addDefinition(
  "phel\\repl",
  "find-doc",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\repl\\find_doc";

    public function __invoke($namespace, $name) {
      $meta_2045 = (\Phel::getDefinitionMetaData($namespace, $name));
      if (($__truthy = $meta_2045) !== null && $__truthy !== false) {
        $doc_2046 = (function() use($namespace,$name,$meta_2045) {
          $__phel_2047_2048 = (\Phel::getDefinition("phel\\core", "get"))($meta_2045, \Phel::keyword("doc"));
          if (($__truthy = $__phel_2047_2048) !== null && $__truthy !== false) {
            return $__phel_2047_2048;
          } else {
            return "";
          }

        })();
        $deprecated_2049 = (\Phel::getDefinition("phel\\core", "get"))($meta_2045, \Phel::keyword("deprecated"));
        $message_2050 = (($__truthy = $deprecated_2049) !== null && $__truthy !== false ? (\Phel::getDefinition("phel\\core", "str"))($doc_2046, (($__truthy = (\Phel::getDefinition("phel\\core", "="))($doc_2046, "")) !== null && $__truthy !== false ? "" : "\n"), "DEPRECATED: ", $deprecated_2049) : $doc_2046);
        return (\Phel::getDefinition("phel\\repl", "clean-doc"))($message_2050);
      } else {
        return null;
      }

    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(find-doc namespace name)\n```\n",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 69,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 77,
      \Phel::keyword("column"), 31
    ),
    "min-arity", 2,
    "is-variadic", false,
    "arglists", "[namespace name]"
  )
);
\Phel::addDefinition(
  "phel\\repl",
  "doc",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\repl\\doc";

    public function __invoke($sym) {
      $resolved_sym_2051 = (\Phel::getDefinition("phel\\repl", "resolve"))($sym);
      if (($__truthy = $resolved_sym_2051) !== null && $__truthy !== false) {
        return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\core/println"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\repl/find-doc"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "namespace"))($resolved_sym_2051)), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "name"))($resolved_sym_2051)))) ?? []))))) ?? []));
      } else {
        return null;
      }

    }
  },
  \Phel::map(
    \Phel::keyword("macro"), true,
    \Phel::keyword("doc"), "```phel\n(doc sym)\n```\nPrints the documentation for the given symbol.",
    \Phel::keyword("example"), "(doc map)",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 79,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 85,
      \Phel::keyword("column"), 77
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[sym]"
  )
);
\Phel::addDefinition(
  "phel\\repl",
  "extract-alias",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\repl\\extract_alias";

    public function __invoke($sym, $options) {
      if (($__truthy = (\Phel::keyword("as"))($options)) !== null && $__truthy !== false) {
        return (\Phel::keyword("as"))($options);
      } else {
        $parts_2052 = explode("\\", (\Phel::getDefinition("phel\\core", "name"))($sym));
        $last_2053 = array_pop($parts_2052);
        return (\Phel\Lang\Symbol::create($last_2053));
      }

    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(extract-alias sym options)\n```\n",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 87,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 92,
      \Phel::keyword("column"), 38
    ),
    "min-arity", 2,
    "is-variadic", false,
    "arglists", "[sym options]"
  )
);
\Phel::addDefinition(
  "phel\\repl",
  "set-ns",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\repl\\set_ns";

    public function __invoke($namespace) {
      \Phel::addDefinition(
        "phel\\core",
        "*ns*",
        $namespace
      );

    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(set-ns namespace)\n```\n",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 94,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 95,
      \Phel::keyword("column"), 27
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[namespace]"
  )
);
\Phel::addDefinition(
  "phel\\repl",
  "require-namespace",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\repl\\require_namespace";

    public function __invoke($namespace, $alias, $refers) {
      $env_2054 = (\Phel::getDefinition("phel\\repl", "get-global-env"))();
      $current_ns_2055 = \Phel::getDefinition("phel\\core", "*ns*");
      (function() use($namespace,$alias,$refers,$env_2054,$current_ns_2055) {
        $target_2056 = $env_2054;
        return $target_2056->addRequireAlias($current_ns_2055, $alias, $namespace);
      })();
      foreach (\Phel\Lang\Seq::toIterable($refers) as $r) {
        (function() use($namespace,$alias,$refers,$env_2054,$current_ns_2055,$r) {
          $target_2057 = $env_2054;
          return $target_2057->addRefer($current_ns_2055, $r, $namespace);
        })();
      }
      (\Phel::getDefinition("phel\\repl", "eval-namespace"))($namespace);
      (function() use($namespace,$alias,$refers,$env_2054,$current_ns_2055) {
        $target_2058 = (\Phel::getDefinition("phel\\repl", "get-global-env"))();
        return $target_2058->setNs($current_ns_2055);
      })();
      (\Phel::getDefinition("phel\\repl", "set-ns"))($current_ns_2055);
      return $namespace;
    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(require-namespace namespace alias refers)\n```\n",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 97,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 107,
      \Phel::keyword("column"), 15
    ),
    "min-arity", 3,
    "is-variadic", false,
    "arglists", "[namespace alias refers]"
  )
);
\Phel::addDefinition(
  "phel\\repl",
  "require",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\repl\\require";

    public function __invoke($sym, ...$args) {
      $args = \Phel::vector($args);
      $options_2062 = (\Phel::getDefinition("phel\\core", "hash-map"))(...(($args) ?? []));
      $alias_2063 = (\Phel::getDefinition("phel\\repl", "extract-alias"))($sym, $options_2062);
      $refers_2064 = (function() use($sym,$args,$options_2062,$alias_2063) {
        $__phel_2065_2066 = (\Phel::keyword("refer"))($options_2062);
        if (($__truthy = $__phel_2065_2066) !== null && $__truthy !== false) {
          return $__phel_2065_2066;
        } else {
          return \Phel::vector([]);
        }

      })();
      return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\repl/require-namespace"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("quote"))), (\Phel::getDefinition("phel\\core", "list"))($sym))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("quote"))), (\Phel::getDefinition("phel\\core", "list"))($alias_2063))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("quote"))), (\Phel::getDefinition("phel\\core", "list"))($refers_2064))) ?? []))))) ?? []));
    }
  },
  \Phel::map(
    \Phel::keyword("macro"), true,
    \Phel::keyword("doc"), "```phel\n(require sym & args)\n```\nRequires a Phel module into the environment.",
    \Phel::keyword("example"), "(require phel\\http :as http :refer [request]) ; => phel\\http",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 109,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 116,
      \Phel::keyword("column"), 49
    ),
    "min-arity", 1,
    "is-variadic", true,
    "arglists", "[sym & args]"
  )
);
\Phel::addDefinition(
  "phel\\repl",
  "use-namespace",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\repl\\use_namespace";

    public function __invoke($namespace, $alias) {
      (function() use($namespace,$alias) {
        $target_2067 = (\Phel::getDefinition("phel\\repl", "get-global-env"))();
        return $target_2067->addUseAlias(\Phel::getDefinition("phel\\core", "*ns*"), $alias, $namespace);
      })();
      return $namespace;
    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(use-namespace namespace alias)\n```\n",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 118,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 121,
      \Phel::keyword("column"), 12
    ),
    "min-arity", 2,
    "is-variadic", false,
    "arglists", "[namespace alias]"
  )
);
\Phel::addDefinition(
  "phel\\repl",
  "use",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\repl\\use";

    public function __invoke($sym, ...$args) {
      $args = \Phel::vector($args);
      $options_2069 = (\Phel::getDefinition("phel\\core", "hash-map"))(...(($args) ?? []));
      $alias_2070 = (\Phel::getDefinition("phel\\repl", "extract-alias"))($sym, $options_2069);
      return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\repl/use-namespace"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("quote"))), (\Phel::getDefinition("phel\\core", "list"))($sym))) ?? []))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("quote"))), (\Phel::getDefinition("phel\\core", "list"))($alias_2070))) ?? []))))) ?? []));
    }
  },
  \Phel::map(
    \Phel::keyword("macro"), true,
    \Phel::keyword("doc"), "```phel\n(use sym & args)\n```\nAdds a use statement to the environment.",
    \Phel::keyword("example"), "(use DateTime :as DT) ; => DateTime",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 123,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 129,
      \Phel::keyword("column"), 36
    ),
    "min-arity", 1,
    "is-variadic", true,
    "arglists", "[sym & args]"
  )
);
\Phel::addDefinition(
  "phel\\repl",
  "print-colorful-str",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\repl\\print_colorful_str";

    public function __invoke(...$xs) {
      $xs = \Phel::vector($xs);
      $len_2072 = (\Phel::getDefinition("phel\\core", "count"))($xs);
      $printer_2073 = (\Phel\Printer\Printer::readableWithColor());
      $pp_2074 = new class($xs, $len_2072, $printer_2073) extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\repl\\print_colorful_str.pp";
        private $xs;
        private $len_2072;
        private $printer_2073;

        public function __construct($xs, $len_2072, $printer_2073) {
          $this->xs = $xs;
          $this->len_2072 = $len_2072;
          $this->printer_2073 = $printer_2073;
        }

        public function __invoke($__short_fn_1_2071) {
          $xs = $this->xs;
          $len_2072 = $this->len_2072;
          $printer_2073 = $this->printer_2073;
          return (function() use($xs,$len_2072,$printer_2073,$__short_fn_1_2071) {
            $target_2081 = $printer_2073;
            return $target_2081->print($__short_fn_1_2071);
          })();
        }
      };
      $__phel_2075_2076 = (\Phel::getDefinition("phel\\core", "count"))($xs);
      if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_2075_2076, 0)) !== null && $__truthy !== false) {
        return "";
      } else {
        $__phel_2077_2078 = $__phel_2075_2076;
        if (($__truthy = (\Phel::getDefinition("phel\\core", "equals1"))($__phel_2077_2078, 1)) !== null && $__truthy !== false) {
          return ($pp_2074)((\Phel::getDefinition("phel\\core", "first"))($xs));
        } else {
          $res_2079 = ($pp_2074)((\Phel::getDefinition("phel\\core", "first"))($xs));
          $seq_2080 = (\Phel::getDefinition("phel\\core", "next"))($xs);
          while (true) {
            if (($__truthy = $seq_2080) !== null && $__truthy !== false) {
              $__phel_2082 = (\Phel::getDefinition("phel\\core", "str"))($res_2079, " ", ($pp_2074)((\Phel::getDefinition("phel\\core", "first"))($seq_2080)));
              $__phel_2083 = (\Phel::getDefinition("phel\\core", "next"))($seq_2080);
              $res_2079 = $__phel_2082;
              $seq_2080 = $__phel_2083;
              continue;

            } else {
              return $res_2079;
            }
            break;
          }
        }

      }

    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(print-colorful-str & xs)\n```\nSame as print-str from core, but with color.",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 131,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 144,
      \Phel::keyword("column"), 18
    ),
    "min-arity", 0,
    "is-variadic", true,
    "arglists", "[& xs]"
  )
);
\Phel::addDefinition(
  "phel\\repl",
  "print-colorful",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\repl\\print_colorful";

    public function __invoke(...$xs) {
      $xs = \Phel::vector($xs);
      print((\Phel::getDefinition("phel\\repl", "print-colorful-str"))(...(($xs) ?? [])));
      return null;
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(print-colorful & xs)\n```\nPrints arguments with colored output.",
    \Phel::keyword("example"), "(print-colorful [1 2 3])",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 146,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 151,
      \Phel::keyword("column"), 6
    ),
    "min-arity", 0,
    "is-variadic", true,
    "arglists", "[& xs]"
  )
);
\Phel::addDefinition(
  "phel\\repl",
  "println-colorful",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\repl\\println_colorful";

    public function __invoke(...$xs) {
      $xs = \Phel::vector($xs);
      (\Phel::getDefinition("phel\\repl", "print-colorful"))(...(($xs) ?? []));
      print("\n");
      return null;
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(println-colorful & xs)\n```\nPrints arguments with colored output followed by a newline.",
    \Phel::keyword("example"), "(println-colorful [1 2 3])",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 153,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 159,
      \Phel::keyword("column"), 6
    ),
    "min-arity", 0,
    "is-variadic", true,
    "arglists", "[& xs]"
  )
);
\Phel::addDefinition(
  "phel\\repl",
  "compile-str",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\repl\\compile_str";

    public function __invoke($s) {
      $cf_2087 = (new \Phel\Compiler\CompilerFacade());
      $opts_2088 = (new \Phel\Compiler\Infrastructure\CompileOptions());
      $res_2089 = (function() use($s,$cf_2087,$opts_2088) {
        $target_2090 = $cf_2087;
        return $target_2090->compile($s, $opts_2088);
      })();
      return (function() use($s,$cf_2087,$opts_2088,$res_2089) {
        $target_2091 = $res_2089;
        return $target_2091->getCode();
      })();
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(compile-str s)\n```\nCompiles a Phel expression string to PHP code.",
    \Phel::keyword("example"), "(compile-str \"(+ 1 2)\") ; => \"(1 + 2)\"",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 161,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 168,
      \Phel::keyword("column"), 28
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[s]"
  )
);
\Phel::addDefinition(
  "phel\\repl",
  "eval-str",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\repl\\eval_str";

    public function __invoke($s) {
      $cf_2094 = (new \Phel\Compiler\CompilerFacade());
      $opts_2095 = (new \Phel\Compiler\Infrastructure\CompileOptions());
      return (function() use($s,$cf_2094,$opts_2095) {
        $target_2096 = $cf_2094;
        return $target_2096->eval($s, $opts_2095);
      })();
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(eval-str s)\n```\nEvaluates a string of Phel code and returns the result.\n  If the string contains multiple expressions, returns the result of the last one.",
    \Phel::keyword("example"), "(eval-str \"(+ 1 2)\") ; => 3",
    \Phel::keyword("see-also"), \Phel::vector(["compile-str", "load-file"]),
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 170,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 178,
      \Phel::keyword("column"), 31
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[s]"
  )
);
\Phel::addDefinition(
  "phel\\repl",
  "load-file",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\repl\\load_file";

    public function __invoke($path) {
      $content_2098 = file_get_contents($path);
      if (($__truthy = $content_2098) !== null && $__truthy !== false) {
        $cf_2099 = (new \Phel\Compiler\CompilerFacade());
        $opts_2100 = (function() use($path,$content_2098,$cf_2099) {
          $target_2101 = (new \Phel\Compiler\Infrastructure\CompileOptions());
          return $target_2101->setSource($path);
        })();
        return (function() use($path,$content_2098,$cf_2099,$opts_2100) {
          $target_2102 = $cf_2099;
          return $target_2102->eval($content_2098, $opts_2100);
        })();
      } else {
        return null;
      }

    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(load-file path)\n```\nLoads and evaluates a Phel source file in the current REPL session.\n  Reads the file content and evaluates it using the compiler, preserving\n  the current REPL namespace context. Returns the result of the last expression.",
    \Phel::keyword("example"), "(load-file \"src/my-module.phel\")",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 180,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 190,
      \Phel::keyword("column"), 43
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[path]"
  )
);
\Phel::addDefinition(
  "phel\\repl",
  "munge-ns",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\repl\\munge_ns";

    public function __invoke($ns_str) {
      $munge_2105 = (new \Phel\Compiler\Application\Munge());
      return (function() use($ns_str,$munge_2105) {
        $target_2106 = $munge_2105;
        return $target_2106->encodeNs($ns_str);
      })();
    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(munge-ns ns-str)\n```\nEncodes a namespace string for registry lookup.",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 192,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 196,
      \Phel::keyword("column"), 38
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[ns-str]"
  )
);
\Phel::addDefinition(
  "phel\\repl",
  "get-symbol-info",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\repl\\get_symbol_info";

    public function __invoke($ns_str, $name_str) {
      $encoded_ns_2108 = (\Phel::getDefinition("phel\\repl", "munge-ns"))($ns_str);
      $munge_2109 = (new \Phel\Compiler\Application\Munge());
      $encoded_name_2110 = (function() use($ns_str,$name_str,$encoded_ns_2108,$munge_2109) {
        $target_2118 = $munge_2109;
        return $target_2118->encode($name_str);
      })();
      $meta_2111 = (\Phel::getDefinitionMetaData($encoded_ns_2108, $encoded_name_2110));
      if (($__truthy = $meta_2111) !== null && $__truthy !== false) {
        $start_loc_2112 = (\Phel::getDefinition("phel\\core", "get"))($meta_2111, \Phel::keyword("start-location"));
        $end_loc_2113 = (\Phel::getDefinition("phel\\core", "get"))($meta_2111, \Phel::keyword("end-location"));
        return \Phel::map(
          \Phel::keyword("doc"), (\Phel::getDefinition("phel\\core", "get"))($meta_2111, \Phel::keyword("doc")),
          \Phel::keyword("file"), (($__truthy = $start_loc_2112) !== null && $__truthy !== false ? (\Phel::getDefinition("phel\\core", "get"))($start_loc_2112, \Phel::keyword("file")) : null),
          \Phel::keyword("end-line"), (($__truthy = $end_loc_2113) !== null && $__truthy !== false ? (\Phel::getDefinition("phel\\core", "get"))($end_loc_2113, \Phel::keyword("line")) : null),
          \Phel::keyword("end-column"), (($__truthy = $end_loc_2113) !== null && $__truthy !== false ? (\Phel::getDefinition("phel\\core", "get"))($end_loc_2113, \Phel::keyword("column")) : null),
          \Phel::keyword("line"), (($__truthy = $start_loc_2112) !== null && $__truthy !== false ? (\Phel::getDefinition("phel\\core", "get"))($start_loc_2112, \Phel::keyword("line")) : null),
          \Phel::keyword("column"), (($__truthy = $start_loc_2112) !== null && $__truthy !== false ? (\Phel::getDefinition("phel\\core", "get"))($start_loc_2112, \Phel::keyword("column")) : null),
          \Phel::keyword("private"), (function() use($ns_str,$name_str,$encoded_ns_2108,$munge_2109,$encoded_name_2110,$meta_2111,$start_loc_2112,$end_loc_2113) {
            $__phel_2114_2115 = (\Phel::getDefinition("phel\\core", "get"))($meta_2111, \Phel::keyword("private"));
            if (($__truthy = $__phel_2114_2115) !== null && $__truthy !== false) {
              return $__phel_2114_2115;
            } else {
              return false;
            }

          })(),
          \Phel::keyword("deprecated"), (\Phel::getDefinition("phel\\core", "get"))($meta_2111, \Phel::keyword("deprecated")),
          \Phel::keyword("max-arity"), (\Phel::getDefinition("phel\\core", "get"))($meta_2111, "max-arity"),
          \Phel::keyword("min-arity"), (\Phel::getDefinition("phel\\core", "get"))($meta_2111, "min-arity"),
          \Phel::keyword("ns"), $ns_str,
          \Phel::keyword("is-variadic"), (function() use($ns_str,$name_str,$encoded_ns_2108,$munge_2109,$encoded_name_2110,$meta_2111,$start_loc_2112,$end_loc_2113) {
            $__phel_2116_2117 = (\Phel::getDefinition("phel\\core", "get"))($meta_2111, "is-variadic");
            if (($__truthy = $__phel_2116_2117) !== null && $__truthy !== false) {
              return $__phel_2116_2117;
            } else {
              return false;
            }

          })(),
          \Phel::keyword("name"), $name_str
        );
      } else {
        return null;
      }

    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(get-symbol-info ns-str name-str)\n```\nReturns a hash-map of structured metadata for the definition identified by\n  namespace and name strings. Returns nil if no such definition exists.\n\n  Keys: :doc, :file, :line, :column, :end-line, :end-column, :private,\n        :deprecated, :min-arity, :max-arity, :is-variadic, :ns, :name",
    \Phel::keyword("example"), "(get-symbol-info \"phel\\core\" \"map\")",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 198,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 225,
      \Phel::keyword("column"), 28
    ),
    "min-arity", 2,
    "is-variadic", false,
    "arglists", "[ns-str name-str]"
  )
);
\Phel::addDefinition(
  "phel\\repl",
  "symbol-info",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\repl\\symbol_info";

    public function __invoke($sym) {
      $resolved_sym_2120 = (\Phel::getDefinition("phel\\repl", "resolve"))($sym);
      if (($__truthy = $resolved_sym_2120) !== null && $__truthy !== false) {
        return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\repl/get-symbol-info"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "namespace"))($resolved_sym_2120)), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "name"))($resolved_sym_2120)))) ?? []));
      } else {
        return null;
      }

    }
  },
  \Phel::map(
    \Phel::keyword("macro"), true,
    \Phel::keyword("doc"), "```phel\n(symbol-info sym)\n```\nReturns a hash-map of structured metadata for the given symbol, or nil if\n  the symbol cannot be resolved.\n\n  Keys: :doc, :file, :line, :column, :end-line, :end-column, :private,\n        :deprecated, :min-arity, :max-arity, :is-variadic, :ns, :name",
    \Phel::keyword("example"), "(symbol-info map) ; => {:doc \"...\" :ns \"phel\\core\" :name \"map\" ...}",
    \Phel::keyword("see-also"), \Phel::vector(["doc", "dir", "apropos"]),
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 227,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 238,
      \Phel::keyword("column"), 74
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[sym]"
  )
);
\Phel::addDefinition(
  "phel\\repl",
  "dir",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\repl\\dir";

    public function __invoke($ns_str) {
      $encoded_2121 = (\Phel::getDefinition("phel\\repl", "munge-ns"))($ns_str);
      $defs_2122 = (\Phel::getDefinitionInNamespace($encoded_2121));
      $munge_2123 = (new \Phel\Compiler\Application\Munge());
      $names_2124 = (function() use($ns_str,$encoded_2121,$defs_2122,$munge_2123) {
        $__phel_2125_2129 = (\Phel::getDefinition("phel\\core", "var"))(\Phel::vector([]));
        foreach (\Phel\Lang\Seq::toIterable($defs_2122) as $__phel_2128 => $__phel_2127) {
          $fn_name_2130 = $__phel_2128;
          $meta_2131 = (\Phel::getDefinitionMetaData($encoded_2121, $fn_name_2130));
          if (($__truthy = (\Phel::getDefinition("phel\\core", "not"))((\Phel::getDefinition("phel\\core", "get"))($meta_2131, \Phel::keyword("private")))) !== null && $__truthy !== false) {
            (\Phel::getDefinition("phel\\core", "swap!"))($__phel_2125_2129, new class($ns_str, $encoded_2121, $defs_2122, $munge_2123, $__phel_2125_2129, $__phel_2127, $__phel_2128, $fn_name_2130, $meta_2131) extends \Phel\Lang\AbstractFn {
              public const BOUND_TO = "phel\\repl\\dir.names";
              private $ns_str;
              private $encoded_2121;
              private $defs_2122;
              private $munge_2123;
              private $__phel_2125_2129;
              private $__phel_2127;
              private $__phel_2128;
              private $fn_name_2130;
              private $meta_2131;

              public function __construct($ns_str, $encoded_2121, $defs_2122, $munge_2123, $__phel_2125_2129, $__phel_2127, $__phel_2128, $fn_name_2130, $meta_2131) {
                $this->ns_str = $ns_str;
                $this->encoded_2121 = $encoded_2121;
                $this->defs_2122 = $defs_2122;
                $this->munge_2123 = $munge_2123;
                $this->__phel_2125_2129 = $__phel_2125_2129;
                $this->__phel_2127 = $__phel_2127;
                $this->__phel_2128 = $__phel_2128;
                $this->fn_name_2130 = $fn_name_2130;
                $this->meta_2131 = $meta_2131;
              }

              public function __invoke($__phel_2126) {
                $ns_str = $this->ns_str;
                $encoded_2121 = $this->encoded_2121;
                $defs_2122 = $this->defs_2122;
                $munge_2123 = $this->munge_2123;
                $__phel_2125_2129 = $this->__phel_2125_2129;
                $__phel_2127 = $this->__phel_2127;
                $__phel_2128 = $this->__phel_2128;
                $fn_name_2130 = $this->fn_name_2130;
                $meta_2131 = $this->meta_2131;
                return (\Phel::getDefinition("phel\\core", "conj"))($__phel_2126, (function() use($ns_str,$encoded_2121,$defs_2122,$munge_2123,$__phel_2125_2129,$__phel_2127,$__phel_2128,$fn_name_2130,$meta_2131,$__phel_2126) {
                  $target_2132 = $munge_2123;
                  return $target_2132->decodeNs($fn_name_2130);
                })());
              }
            });
          } else {

          }

        }
        return (\Phel::getDefinition("phel\\core", "deref"))($__phel_2125_2129);
      })();
      foreach (\Phel\Lang\Seq::toIterable((\Phel::getDefinition("phel\\core", "sort"))($names_2124)) as $n) {
        (\Phel::getDefinition("phel\\core", "println"))($n);
      }
      return null;
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(dir ns-str)\n```\nPrints all public definitions in the given namespace string.\n\n  Returns nil. Prints one name per line, sorted alphabetically.",
    \Phel::keyword("example"), "(dir \"phel\\core\")",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 240,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 255,
      \Phel::keyword("column"), 9
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[ns-str]"
  )
);
\Phel::addDefinition(
  "phel\\repl",
  "apropos",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\repl\\apropos";

    public function __invoke($search) {
      $munge_2134 = (new \Phel\Compiler\Application\Munge());
      $results_2135 = (\Phel::getDefinition("phel\\core", "transient"))(\Phel::vector([]));
      foreach (\Phel\Lang\Seq::toIterable((\Phel::getDefinition("phel\\repl", "loaded-namespaces"))()) as $ns) {
        $defs_2136 = (\Phel::getDefinitionInNamespace($ns));
        $fn_names_2137 = array_keys($defs_2136);
        foreach (\Phel\Lang\Seq::toIterable($fn_names_2137) as $fn_name) {
          $decoded_2138 = (function() use($search,$munge_2134,$results_2135,$ns,$defs_2136,$fn_names_2137,$fn_name) {
            $target_2142 = $munge_2134;
            return $target_2142->decodeNs($fn_name);
          })();
          $meta_2139 = (\Phel::getDefinitionMetaData($ns, $fn_name));
          if (($__truthy = (function() use($search,$munge_2134,$results_2135,$ns,$defs_2136,$fn_names_2137,$fn_name,$decoded_2138,$meta_2139) {
            $__phel_2140_2141 = (\Phel::getDefinition("phel\\core", "not"))((\Phel::getDefinition("phel\\core", "get"))($meta_2139, \Phel::keyword("private")));
            if (($__truthy = $__phel_2140_2141) !== null && $__truthy !== false) {
              return str_contains($decoded_2138, $search);
            } else {
              return $__phel_2140_2141;
            }

          })()) !== null && $__truthy !== false) {
            (\Phel::getDefinition("phel\\core", "conj"))($results_2135, (\Phel::getDefinition("phel\\core", "str"))((function() use($search,$munge_2134,$results_2135,$ns,$defs_2136,$fn_names_2137,$fn_name,$decoded_2138,$meta_2139) {
              $target_2143 = $munge_2134;
              return $target_2143->decodeNs($ns);
            })(), "/", $decoded_2138));
          } else {

          }

        }
      }
      return (\Phel::getDefinition("phel\\core", "sort"))((\Phel::getDefinition("phel\\core", "persistent"))($results_2135));
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(apropos search)\n```\nReturns a vector of symbols whose name contains the given search string.\n  Searches across all loaded namespaces.",
    \Phel::keyword("example"), "(apropos \"map\") ; => [phel\\core/flat-map phel\\core/map ...]",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 257,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 273,
      \Phel::keyword("column"), 33
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[search]"
  )
);
\Phel::addDefinition(
  "phel\\repl",
  "find-fn",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\repl\\find_fn";

    public function __invoke($search) {
      $munge_2146 = (new \Phel\Compiler\Application\Munge());
      $search_lower_2147 = strtolower($search);
      $results_2148 = (\Phel::getDefinition("phel\\core", "transient"))(\Phel::vector([]));
      foreach (\Phel\Lang\Seq::toIterable((\Phel::getDefinition("phel\\repl", "loaded-namespaces"))()) as $ns) {
        $defs_2149 = (\Phel::getDefinitionInNamespace($ns));
        $fn_names_2150 = array_keys($defs_2149);
        foreach (\Phel\Lang\Seq::toIterable($fn_names_2150) as $fn_name) {
          $definition_2151 = (\Phel::getDefinition($ns, $fn_name));
          if (($__truthy = ($definition_2151 instanceof \Phel\Lang\FnInterface)) !== null && $__truthy !== false) {
            $meta_2152 = (\Phel::getDefinitionMetaData($ns, $fn_name));
            $decoded_name_2153 = (function() use($search,$munge_2146,$search_lower_2147,$results_2148,$ns,$defs_2149,$fn_names_2150,$fn_name,$definition_2151,$meta_2152) {
              $target_2166 = $munge_2146;
              return $target_2166->decodeNs($fn_name);
            })();
            $decoded_ns_2154 = (function() use($search,$munge_2146,$search_lower_2147,$results_2148,$ns,$defs_2149,$fn_names_2150,$fn_name,$definition_2151,$meta_2152,$decoded_name_2153) {
              $target_2167 = $munge_2146;
              return $target_2167->decodeNs($ns);
            })();
            $doc_2155 = (function() use($search,$munge_2146,$search_lower_2147,$results_2148,$ns,$defs_2149,$fn_names_2150,$fn_name,$definition_2151,$meta_2152,$decoded_name_2153,$decoded_ns_2154) {
              $__phel_2156_2157 = (\Phel::getDefinition("phel\\core", "get"))($meta_2152, \Phel::keyword("doc"));
              if (($__truthy = $__phel_2156_2157) !== null && $__truthy !== false) {
                return $__phel_2156_2157;
              } else {
                return "";
              }

            })();
            $name_lower_2158 = strtolower($decoded_name_2153);
            $doc_lower_2159 = strtolower($doc_2155);
            if (($__truthy = (function() use($search,$munge_2146,$search_lower_2147,$results_2148,$ns,$defs_2149,$fn_names_2150,$fn_name,$definition_2151,$meta_2152,$decoded_name_2153,$decoded_ns_2154,$doc_2155,$name_lower_2158,$doc_lower_2159) {
              $__phel_2160_2161 = str_contains($name_lower_2158, $search_lower_2147);
              if (($__truthy = $__phel_2160_2161) !== null && $__truthy !== false) {
                return $__phel_2160_2161;
              } else {
                return str_contains($doc_lower_2159, $search_lower_2147);
              }

            })()) !== null && $__truthy !== false) {
              (\Phel::getDefinition("phel\\core", "conj"))($results_2148, \Phel::map(
                \Phel::keyword("ns"), $decoded_ns_2154,
                \Phel::keyword("name"), $decoded_name_2153,
                \Phel::keyword("doc"), $doc_2155,
                \Phel::keyword("private"), (function() use($search,$munge_2146,$search_lower_2147,$results_2148,$ns,$defs_2149,$fn_names_2150,$fn_name,$definition_2151,$meta_2152,$decoded_name_2153,$decoded_ns_2154,$doc_2155,$name_lower_2158,$doc_lower_2159) {
                  $__phel_2162_2163 = (\Phel::getDefinition("phel\\core", "get"))($meta_2152, \Phel::keyword("private"));
                  if (($__truthy = $__phel_2162_2163) !== null && $__truthy !== false) {
                    return $__phel_2162_2163;
                  } else {
                    return false;
                  }

                })(),
                \Phel::keyword("min-arity"), (\Phel::getDefinition("phel\\core", "get"))($meta_2152, "min-arity"),
                \Phel::keyword("max-arity"), (\Phel::getDefinition("phel\\core", "get"))($meta_2152, "max-arity"),
                \Phel::keyword("is-variadic"), (function() use($search,$munge_2146,$search_lower_2147,$results_2148,$ns,$defs_2149,$fn_names_2150,$fn_name,$definition_2151,$meta_2152,$decoded_name_2153,$decoded_ns_2154,$doc_2155,$name_lower_2158,$doc_lower_2159) {
                  $__phel_2164_2165 = (\Phel::getDefinition("phel\\core", "get"))($meta_2152, "is-variadic");
                  if (($__truthy = $__phel_2164_2165) !== null && $__truthy !== false) {
                    return $__phel_2164_2165;
                  } else {
                    return false;
                  }

                })()
              ));
            } else {

            }

          } else {

          }

        }
      }
      return (\Phel::getDefinition("phel\\core", "persistent"))($results_2148);
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(find-fn search)\n```\nSearches for functions whose name or docstring contains the search string.\n  Returns a vector of maps with :ns, :name, :doc, :private, :min-arity, :max-arity, :is-variadic.",
    \Phel::keyword("example"), "(find-fn \"map\") ; => [{:ns \"phel\\core\" :name \"map\" ...} ...]",
    \Phel::keyword("see-also"), \Phel::vector(["apropos", "search-doc", "get-symbol-info"]),
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 275,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 305,
      \Phel::keyword("column"), 26
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[search]"
  )
);
\Phel::addDefinition(
  "phel\\repl",
  "get-source-code",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\repl\\get_source_code";

    public function __invoke($ns_str, $name_str) {
      $info_2170 = (\Phel::getDefinition("phel\\repl", "get-symbol-info"))($ns_str, $name_str);
      if (($__truthy = $info_2170) !== null && $__truthy !== false) {
        $file_2171 = (\Phel::getDefinition("phel\\core", "get"))($info_2170, \Phel::keyword("file"));
        $start_line_2172 = (\Phel::getDefinition("phel\\core", "get"))($info_2170, \Phel::keyword("line"));
        $end_line_2173 = (\Phel::getDefinition("phel\\core", "get"))($info_2170, \Phel::keyword("end-line"));
        if (($__truthy = (function() use($ns_str,$name_str,$info_2170,$file_2171,$start_line_2172,$end_line_2173) {
          $__phel_2174_2175 = $file_2171;
          if (($__truthy = $__phel_2174_2175) !== null && $__truthy !== false) {
            $__phel_2176_2177 = $start_line_2172;
            if (($__truthy = $__phel_2176_2177) !== null && $__truthy !== false) {
              $__phel_2178_2179 = $end_line_2173;
              if (($__truthy = $__phel_2178_2179) !== null && $__truthy !== false) {
                return file_exists($file_2171);
              } else {
                return $__phel_2178_2179;
              }

            } else {
              return $__phel_2176_2177;
            }

          } else {
            return $__phel_2174_2175;
          }

        })()) !== null && $__truthy !== false) {
          $content_2180 = file_get_contents($file_2171);
          $lines_2181 = explode("\n", $content_2180);
          $extracted_2182 = array_slice($lines_2181, ($start_line_2172 - 1), (($end_line_2173 - $start_line_2172) + 1));
          return implode("\n", $extracted_2182);
        } else {
          return null;
        }

      } else {
        return null;
      }

    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(get-source-code ns-str name-str)\n```\nReturns the source code of the definition identified by namespace and name\n  strings, or nil if the source file cannot be found or metadata is missing.",
    \Phel::keyword("example"), "(get-source-code \"phel\\core\" \"map\")",
    \Phel::keyword("see-also"), \Phel::vector(["source", "get-symbol-info"]),
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 307,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 322,
      \Phel::keyword("column"), 46
    ),
    "min-arity", 2,
    "is-variadic", false,
    "arglists", "[ns-str name-str]"
  )
);
\Phel::addDefinition(
  "phel\\repl",
  "source",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\repl\\source";

    public function __invoke($sym) {
      $resolved_sym_2183 = (\Phel::getDefinition("phel\\repl", "resolve"))($sym);
      if (($__truthy = $resolved_sym_2183) !== null && $__truthy !== false) {
        return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\repl/get-source-code"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "namespace"))($resolved_sym_2183)), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "name"))($resolved_sym_2183)))) ?? []));
      } else {
        return null;
      }

    }
  },
  \Phel::map(
    \Phel::keyword("macro"), true,
    \Phel::keyword("doc"), "```phel\n(source sym)\n```\nReturns the source code of the given symbol as a string, or nil if unavailable.",
    \Phel::keyword("example"), "(source map)",
    \Phel::keyword("see-also"), \Phel::vector(["doc", "symbol-info"]),
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 324,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 331,
      \Phel::keyword("column"), 74
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[sym]"
  )
);
\Phel::addDefinition(
  "phel\\repl",
  "ns-publics",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\repl\\ns_publics";

    public function __invoke($ns_str) {
      $encoded_2184 = (\Phel::getDefinition("phel\\repl", "munge-ns"))($ns_str);
      $defs_2185 = (\Phel::getDefinitionInNamespace($encoded_2184));
      $munge_2186 = (new \Phel\Compiler\Application\Munge());
      $result_2187 = (\Phel::getDefinition("phel\\core", "transient"))(\Phel::map());
      foreach (\Phel\Lang\Seq::toIterable($defs_2185) as $fn_name => $value) {
        $meta_2188 = (\Phel::getDefinitionMetaData($encoded_2184, $fn_name));
        if (($__truthy = (\Phel::getDefinition("phel\\core", "get"))($meta_2188, \Phel::keyword("private"))) !== null && $__truthy !== false) {

        } else {
          (\Phel::getDefinition("phel\\core", "put"))($result_2187, (function() use($ns_str,$encoded_2184,$defs_2185,$munge_2186,$result_2187,$value,$fn_name,$meta_2188) {
            $target_2189 = $munge_2186;
            return $target_2189->decodeNs($fn_name);
          })(), $value);
        }

      }
      return (\Phel::getDefinition("phel\\core", "persistent"))($result_2187);
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(ns-publics ns-str)\n```\nReturns a hash-map of {name => value} for all public definitions in the\n  given namespace string. Private definitions are excluded.",
    \Phel::keyword("example"), "(ns-publics \"phel\\core\") ; => {\"map\" <fn> \"filter\" <fn> ...}",
    \Phel::keyword("see-also"), \Phel::vector(["ns-aliases", "ns-refers", "dir", "loaded-namespaces"]),
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 333,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 347,
      \Phel::keyword("column"), 25
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[ns-str]"
  )
);
\Phel::addDefinition(
  "phel\\repl",
  "ns-aliases",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\repl\\ns_aliases";

    public function __invoke($ns_str) {
      $env_2191 = (\Phel::getDefinition("phel\\repl", "get-global-env"))();
      $aliases_2192 = (function() use($ns_str,$env_2191) {
        $target_2194 = $env_2191;
        return $target_2194->getRequireAliases($ns_str);
      })();
      $result_2193 = (\Phel::getDefinition("phel\\core", "transient"))(\Phel::map());
      foreach (\Phel\Lang\Seq::toIterable($aliases_2192) as $alias_name => $target_sym) {
        (\Phel::getDefinition("phel\\core", "put"))($result_2193, $alias_name, (function() use($ns_str,$env_2191,$aliases_2192,$result_2193,$target_sym,$alias_name) {
          $target_2195 = $target_sym;
          return $target_2195->getName();
        })());
      }
      return (\Phel::getDefinition("phel\\core", "persistent"))($result_2193);
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(ns-aliases ns-str)\n```\nReturns a hash-map of {alias => namespace} for all require aliases in the\n  given namespace string.",
    \Phel::keyword("example"), "(ns-aliases *ns*) ; => {\"repl\" \"phel\\repl\" ...}",
    \Phel::keyword("see-also"), \Phel::vector(["ns-publics", "ns-refers", "loaded-namespaces"]),
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 349,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 360,
      \Phel::keyword("column"), 25
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[ns-str]"
  )
);
\Phel::addDefinition(
  "phel\\repl",
  "ns-refers",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\repl\\ns_refers";

    public function __invoke($ns_str) {
      $env_2198 = (\Phel::getDefinition("phel\\repl", "get-global-env"))();
      $refers_2199 = (function() use($ns_str,$env_2198) {
        $target_2201 = $env_2198;
        return $target_2201->getRefers($ns_str);
      })();
      $result_2200 = (\Phel::getDefinition("phel\\core", "transient"))(\Phel::map());
      foreach (\Phel\Lang\Seq::toIterable($refers_2199) as $refer_name => $source_sym) {
        (\Phel::getDefinition("phel\\core", "put"))($result_2200, $refer_name, (function() use($ns_str,$env_2198,$refers_2199,$result_2200,$source_sym,$refer_name) {
          $target_2202 = $source_sym;
          return $target_2202->getName();
        })());
      }
      return (\Phel::getDefinition("phel\\core", "persistent"))($result_2200);
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(ns-refers ns-str)\n```\nReturns a hash-map of {name => source-namespace} for all referred symbols\n  in the given namespace string.",
    \Phel::keyword("example"), "(ns-refers *ns*) ; => {\"doc\" \"phel\\repl\" ...}",
    \Phel::keyword("see-also"), \Phel::vector(["ns-publics", "ns-aliases", "loaded-namespaces"]),
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 362,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 373,
      \Phel::keyword("column"), 25
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[ns-str]"
  )
);
\Phel::addDefinition(
  "phel\\repl",
  "search-doc",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\repl\\search_doc";

    public function __invoke($search) {
      $munge_2205 = (new \Phel\Compiler\Application\Munge());
      $search_lower_2206 = strtolower($search);
      foreach (\Phel\Lang\Seq::toIterable((\Phel::getDefinition("phel\\repl", "loaded-namespaces"))()) as $ns) {
        $defs_2207 = (\Phel::getDefinitionInNamespace($ns));
        $fn_names_2208 = array_keys($defs_2207);
        foreach (\Phel\Lang\Seq::toIterable($fn_names_2208) as $fn_name) {
          $meta_2209 = (\Phel::getDefinitionMetaData($ns, $fn_name));
          if (($__truthy = $meta_2209) !== null && $__truthy !== false) {
            $doc_2210 = (function() use($search,$munge_2205,$search_lower_2206,$ns,$defs_2207,$fn_names_2208,$fn_name,$meta_2209) {
              $__phel_2211_2212 = (\Phel::getDefinition("phel\\core", "get"))($meta_2209, \Phel::keyword("doc"));
              if (($__truthy = $__phel_2211_2212) !== null && $__truthy !== false) {
                return $__phel_2211_2212;
              } else {
                return "";
              }

            })();
            $doc_lower_2213 = strtolower($doc_2210);
            $decoded_name_2214 = (function() use($search,$munge_2205,$search_lower_2206,$ns,$defs_2207,$fn_names_2208,$fn_name,$meta_2209,$doc_2210,$doc_lower_2213) {
              $target_2218 = $munge_2205;
              return $target_2218->decodeNs($fn_name);
            })();
            $decoded_ns_2215 = (function() use($search,$munge_2205,$search_lower_2206,$ns,$defs_2207,$fn_names_2208,$fn_name,$meta_2209,$doc_2210,$doc_lower_2213,$decoded_name_2214) {
              $target_2219 = $munge_2205;
              return $target_2219->decodeNs($ns);
            })();
            if (($__truthy = (function() use($search,$munge_2205,$search_lower_2206,$ns,$defs_2207,$fn_names_2208,$fn_name,$meta_2209,$doc_2210,$doc_lower_2213,$decoded_name_2214,$decoded_ns_2215) {
              $__phel_2216_2217 = (\Phel::getDefinition("phel\\core", "not"))((\Phel::getDefinition("phel\\core", "get"))($meta_2209, \Phel::keyword("private")));
              if (($__truthy = $__phel_2216_2217) !== null && $__truthy !== false) {
                return str_contains($doc_lower_2213, $search_lower_2206);
              } else {
                return $__phel_2216_2217;
              }

            })()) !== null && $__truthy !== false) {
              (\Phel::getDefinition("phel\\core", "println"))((\Phel::getDefinition("phel\\core", "str"))("--- ", $decoded_ns_2215, "/", $decoded_name_2214, " ---"));
              (\Phel::getDefinition("phel\\core", "println"))((\Phel::getDefinition("phel\\repl", "clean-doc"))($doc_2210));
              (\Phel::getDefinition("phel\\core", "println"))();
            } else {

            }

          } else {

          }

        }
      }
      return null;
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(search-doc search)\n```\nSearches docstrings across all loaded namespaces for the given string.\n  Prints matching function names and their documentation.",
    \Phel::keyword("example"), "(search-doc \"reduce\")",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 375,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 397,
      \Phel::keyword("column"), 9
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[search]"
  )
);
\Phel::addDefinition(
  "phel\\repl",
  "eval-capturing",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\repl\\eval_capturing";

    public function __invoke($code_str) {
      ob_start();
      try {
        $cf_2223 = (new \Phel\Compiler\CompilerFacade());
        $opts_2224 = (new \Phel\Compiler\Infrastructure\CompileOptions());
        $value_2225 = (function() use($code_str,$cf_2223,$opts_2224) {
          $target_2227 = $cf_2223;
          return $target_2227->eval($code_str, $opts_2224);
        })();
        $out_2226 = ob_get_clean();
        return \Phel::map(
          \Phel::keyword("value"), $value_2225,
          \Phel::keyword("out"), $out_2226,
          \Phel::keyword("success"), true,
          \Phel::keyword("error"), null
        );
      } catch (\Throwable $e) {
        $out_2222 = ob_get_clean();
        return \Phel::map(
          \Phel::keyword("value"), null,
          \Phel::keyword("out"), $out_2222,
          \Phel::keyword("success"), false,
          \Phel::keyword("error"), (function() use($code_str,$e,$out_2222) {
            $target_2228 = $e;
            return $target_2228->getMessage();
          })()
        );
      }
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(eval-capturing code-str)\n```\nEvaluates a string of Phel code while capturing stdout. Returns a hash-map\n  with :value (the result), :out (captured stdout), :success (boolean), and\n  :error (error message or nil).\n\n  Useful for nREPL and other tooling that needs to separate printed output from\n  return values.",
    \Phel::keyword("example"), "(eval-capturing \"(do (println \\\"hello\\\") 42)\") ; => {:value 42 :out \"hello\\n\" :success true :error nil}",
    \Phel::keyword("see-also"), \Phel::vector(["compile-str", "load-file"]),
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 399,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 424,
      \Phel::keyword("column"), 44
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[code-str]"
  )
);
\Phel::addDefinition(
  "phel\\repl",
  "test-ns",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\repl\\test_ns";

    public function __invoke($ns_str) {
      (\Phel::getDefinition("phel\\repl", "eval-namespace"))($ns_str);
      $saved_stats_2231 = (\Phel::getDefinition("phel\\test", "get-stats"))();
      (\Phel::getDefinition("phel\\test", "reset-stats"))();
      $sym_2232 = (\Phel\Lang\Symbol::create($ns_str));
      (\Phel::getDefinition("phel\\test", "run-tests"))(\Phel::map(), $sym_2232);
      $__phel_2233_2235 = (\Phel::getDefinition("phel\\test", "get-stats"))();
      $__phel_2234_2236 = (($__phel_2233_2235)[(\Phel::keyword("counts"))] ?? null);
      $counts_2237 = $__phel_2234_2236;
      $result_2238 = \Phel::map(
        \Phel::keyword("pass"), (\Phel::getDefinition("phel\\core", "get"))($counts_2237, \Phel::keyword("pass")),
        \Phel::keyword("fail"), (\Phel::getDefinition("phel\\core", "get"))($counts_2237, \Phel::keyword("failed")),
        \Phel::keyword("error"), (\Phel::getDefinition("phel\\core", "get"))($counts_2237, \Phel::keyword("error"))
      );
      (\Phel::getDefinition("phel\\test", "restore-stats"))($saved_stats_2231);
      return $result_2238;
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(test-ns ns-str)\n```\nRuns all tests in a given namespace from the REPL.\n  Requires the namespace if not already loaded, finds all deftest definitions,\n  runs them, prints results, and returns a hash-map with :pass, :fail, and :error counts.\n  Preserves outer test state so it can be safely called during a test run.",
    \Phel::keyword("example"), "(test-ns \"phel-test\\test\\core\")",
    \Phel::keyword("see-also"), \Phel::vector(["dir", "loaded-namespaces"]),
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 426,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 444,
      \Phel::keyword("column"), 18
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[ns-str]"
  )
);
\Phel::addDefinition(
  "phel\\repl",
  "macroexpand-1-form",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\repl\\macroexpand_1_form";

    public function __invoke($form) {
      $cf_2239 = (new \Phel\Compiler\CompilerFacade());
      return (function() use($form,$cf_2239) {
        $target_2240 = $cf_2239;
        return $target_2240->macroexpand1($form);
      })();
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(macroexpand-1-form form)\n```\nExpands the given form once if it is a macro call.\n  Takes a quoted form and returns the expanded form, or the original\n  form unchanged if it is not a macro call. Uses the CompilerFacade\n  to perform the expansion without going through analyze+emit.",
    \Phel::keyword("example"), "(macroexpand-1-form '(defn foo [x] x))",
    \Phel::keyword("see-also"), \Phel::vector(["macroexpand-form", "macroexpand-1", "macroexpand"]),
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 446,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 455,
      \Phel::keyword("column"), 37
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[form]"
  )
);
\Phel::addDefinition(
  "phel\\repl",
  "macroexpand-form",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\repl\\macroexpand_form";

    public function __invoke($form) {
      $cf_2242 = (new \Phel\Compiler\CompilerFacade());
      return (function() use($form,$cf_2242) {
        $target_2243 = $cf_2242;
        return $target_2243->macroexpand($form);
      })();
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(macroexpand-form form)\n```\nRecursively expands the given form until it is no longer a macro call.\n  Takes a quoted form and returns the fully expanded form. Uses the\n  CompilerFacade to perform the expansion without going through analyze+emit.",
    \Phel::keyword("example"), "(macroexpand-form '(defn foo [x] x))",
    \Phel::keyword("see-also"), \Phel::vector(["macroexpand-1-form", "macroexpand-1", "macroexpand"]),
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 457,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 465,
      \Phel::keyword("column"), 36
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[form]"
  )
);
\Phel::addDefinition(
  "phel\\repl",
  "macroexpand-1",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\repl\\macroexpand_1";

    public function __invoke($form) {
      return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\repl/macroexpand-1-form"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("quote"))), (\Phel::getDefinition("phel\\core", "list"))($form))) ?? []))))) ?? []));
    }
  },
  \Phel::map(
    \Phel::keyword("macro"), true,
    \Phel::keyword("doc"), "```phel\n(macroexpand-1 form)\n```\nExpands the given form once. The form is automatically quoted.\n  Returns the expanded form, or the original if it is not a macro call.",
    \Phel::keyword("example"), "(macroexpand-1 (defn foo [x] x))",
    \Phel::keyword("see-also"), \Phel::vector(["macroexpand", "macroexpand-1-form", "macroexpand-form"]),
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 467,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 473,
      \Phel::keyword("column"), 31
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[form]"
  )
);
\Phel::addDefinition(
  "phel\\repl",
  "macroexpand",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\repl\\macroexpand";

    public function __invoke($form) {
      return (\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("phel\\repl/macroexpand-form"))), (\Phel::getDefinition("phel\\core", "list"))((\Phel::getDefinition("phel\\core", "list"))(...(((\Phel::getDefinition("phel\\core", "concat"))((\Phel::getDefinition("phel\\core", "list"))((\Phel\Lang\Symbol::create("quote"))), (\Phel::getDefinition("phel\\core", "list"))($form))) ?? []))))) ?? []));
    }
  },
  \Phel::map(
    \Phel::keyword("macro"), true,
    \Phel::keyword("doc"), "```phel\n(macroexpand form)\n```\nRecursively expands the given form until it is no longer a macro call.\n  The form is automatically quoted. Returns the fully expanded form.",
    \Phel::keyword("example"), "(macroexpand (defn foo [x] x))",
    \Phel::keyword("see-also"), \Phel::vector(["macroexpand-1", "macroexpand-1-form", "macroexpand-form"]),
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 475,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/repl.phel",
      \Phel::keyword("line"), 481,
      \Phel::keyword("column"), 29
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[form]"
  )
);
