<?php declare(strict_types=1);
namespace phel\http;
require_once __DIR__ . '/../phel/core.php';
\Phel::addDefinition(
  "phel\\core",
  "*file*",
  "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/http.phel"
);
\Phel::addDefinition(
  "phel\\core",
  "*ns*",
  "phel\\http"
);
if (!class_exists('phel\http\uri')) {
class uri extends \Phel\Lang\Collections\Struct\AbstractPersistentStruct implements \Stringable {

  protected const array ALLOWED_KEYS = ['scheme', 'userinfo', 'host', 'port', 'path', 'query', 'fragment'];

  protected $scheme;
  protected $userinfo;
  protected $host;
  protected $port;
  protected $path;
  protected $query;
  protected $fragment;

  public function __construct($scheme, $userinfo, $host, $port, $path, $query, $fragment, $meta = null) {
    parent::__construct();
    $this->scheme = $scheme;
    $this->userinfo = $userinfo;
    $this->host = $host;
    $this->port = $port;
    $this->path = $path;
    $this->query = $query;
    $this->fragment = $fragment;
    $this->meta = $meta;
  }

  public function __toString() {
    $scheme = $this->scheme;
    $userinfo = $this->userinfo;
    $host = $this->host;
    $port = $this->port;
    $path = $this->path;
    $query = $this->query;
    $fragment = $this->fragment;
    $this_2446 = $this;
    $authority_2447 = (\Phel::getDefinition("phel\\core", "str"))($host);
    $authority_2448 = (($__truthy = (function() use($scheme,$userinfo,$host,$port,$path,$query,$fragment,$this_2446,$authority_2447) {
      $__phel_2449_2450 = $userinfo;
      if (($__truthy = $__phel_2449_2450) !== null && $__truthy !== false) {
        return (\Phel::getDefinition("phel\\core", "not="))($userinfo, "");
      } else {
        return $__phel_2449_2450;
      }

    })()) !== null && $__truthy !== false ? (\Phel::getDefinition("phel\\core", "str"))($userinfo, "@", $authority_2447) : $authority_2447);
    $authority_2451 = (($__truthy = $port) !== null && $__truthy !== false ? (\Phel::getDefinition("phel\\core", "str"))($authority_2448, ":", $port) : $authority_2448);
    $res_2452 = "";
    $res_2453 = (($__truthy = (function() use($scheme,$userinfo,$host,$port,$path,$query,$fragment,$this_2446,$authority_2451,$res_2452) {
      $__phel_2454_2455 = $scheme;
      if (($__truthy = $__phel_2454_2455) !== null && $__truthy !== false) {
        return (\Phel::getDefinition("phel\\core", "not="))($scheme, "");
      } else {
        return $__phel_2454_2455;
      }

    })()) !== null && $__truthy !== false ? (\Phel::getDefinition("phel\\core", "str"))($res_2452, $scheme, ":") : $res_2452);
    $res_2456 = (($__truthy = (function() use($scheme,$userinfo,$host,$port,$path,$query,$fragment,$this_2446,$authority_2451,$res_2453) {
      $__phel_2457_2458 = (\Phel::getDefinition("phel\\core", "not="))($authority_2451, "");
      if (($__truthy = $__phel_2457_2458) !== null && $__truthy !== false) {
        return $__phel_2457_2458;
      } else {
        return (\Phel::getDefinition("phel\\core", "="))($scheme, "file");
      }

    })()) !== null && $__truthy !== false ? (\Phel::getDefinition("phel\\core", "str"))($res_2453, "//", $authority_2451) : $res_2453);
    $res_2459 = (\Phel::getDefinition("phel\\core", "str"))($res_2456, $path);
    $res_2460 = (($__truthy = (function() use($scheme,$userinfo,$host,$port,$path,$query,$fragment,$this_2446,$authority_2451,$res_2459) {
      $__phel_2461_2462 = $query;
      if (($__truthy = $__phel_2461_2462) !== null && $__truthy !== false) {
        return (\Phel::getDefinition("phel\\core", "not="))($query, "");
      } else {
        return $__phel_2461_2462;
      }

    })()) !== null && $__truthy !== false ? (\Phel::getDefinition("phel\\core", "str"))($res_2459, "?", $query) : $res_2459);
    $res_2463 = (($__truthy = (function() use($scheme,$userinfo,$host,$port,$path,$query,$fragment,$this_2446,$authority_2451,$res_2460) {
      $__phel_2464_2465 = $fragment;
      if (($__truthy = $__phel_2464_2465) !== null && $__truthy !== false) {
        return (\Phel::getDefinition("phel\\core", "not="))($fragment, "");
      } else {
        return $__phel_2464_2465;
      }

    })()) !== null && $__truthy !== false ? (\Phel::getDefinition("phel\\core", "str"))($res_2460, "#", $fragment) : $res_2460);
    return $res_2463;
  }
}
}

\Phel::addDefinition(
  "phel\\http",
  "uri",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\http\\uri";

    public function __invoke($scheme, $userinfo, $host, $port, $path, $query, $fragment) {
      return (function() use($scheme,$userinfo,$host,$port,$path,$query,$fragment) {
        $target_2466 = "phel\\http\\uri";
        return new $target_2466($scheme, $userinfo, $host, $port, $path, $query, $fragment);
      })();
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(uri scheme userinfo host port path query fragment)\n```\nCreates a new uri struct.",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/http.phel",
      \Phel::keyword("line"), 9,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/http.phel",
      \Phel::keyword("line"), 33,
      \Phel::keyword("column"), 31
    ),
    "min-arity", 7,
    "is-variadic", false,
    "arglists", "[scheme userinfo host port path query fragment]"
  )
);

\Phel::addDefinition(
  "phel\\http",
  "uri?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\http\\uri?";

    public function __invoke($x) {
      return is_a($x, "phel\\http\\uri");
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(uri? x)\n```\nChecks if `x` is an instance of the uri struct.",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/http.phel",
      \Phel::keyword("line"), 9,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/http.phel",
      \Phel::keyword("line"), 33,
      \Phel::keyword("column"), 31
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[x]"
  )
);
\Phel::addDefinition(
  "phel\\http",
  "uri-host-port-regex",
  "/^(.+)\\:(\\d+)\$/",
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/http.phel",
      \Phel::keyword("line"), 35,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/http.phel",
      \Phel::keyword("line"), 35,
      \Phel::keyword("column"), 44
    )
  )
);
\Phel::addDefinition(
  "phel\\http",
  "host-and-port-from-globals",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\http\\host_and_port_from_globals";

    public function __invoke(...$__phel_2468) {
      $__phel_2468 = \Phel::vector($__phel_2468);
      $__phel_2469_2472 = $__phel_2468;
      $__phel_2470_2473 = (\Phel::getDefinition("phel\\core", "first"))($__phel_2469_2472);
      $__phel_2471_2474 = (\Phel::getDefinition("phel\\core", "next"))($__phel_2469_2472);
      $server_2475 = $__phel_2470_2473;
      $server_2476 = (function() use($__phel_2468,$__phel_2469_2472,$__phel_2470_2473,$__phel_2471_2474,$server_2475) {
        $__phel_2477_2478 = $server_2475;
        if (($__truthy = $__phel_2477_2478) !== null && $__truthy !== false) {
          return $__phel_2477_2478;
        } else {
          return $_SERVER;
        }

      })();
      $http_host_2479 = (\Phel::getDefinition("phel\\core", "get"))($server_2476, "HTTP_HOST");
      $server_name_2480 = (\Phel::getDefinition("phel\\core", "get"))($server_2476, "SERVER_NAME");
      $server_port_2481 = intval((\Phel::getDefinition("phel\\core", "get"))($server_2476, "SERVER_PORT"));
      $matches_2482 = array();
      $match_result_2483 = (($__truthy = (\Phel::getDefinition("phel\\core", "nil?"))($http_host_2479)) !== null && $__truthy !== false ? null : preg_match(\Phel::getDefinition("phel\\http", "uri-host-port-regex"), $http_host_2479, $matches_2482));
      if (($__truthy = (function() use($__phel_2468,$__phel_2469_2472,$__phel_2470_2473,$__phel_2471_2474,$server_2476,$http_host_2479,$server_name_2480,$server_port_2481,$matches_2482,$match_result_2483) {
        $__phel_2484_2485 = (\Phel::getDefinition("phel\\core", "not"))((\Phel::getDefinition("phel\\core", "nil?"))($http_host_2479));
        if (($__truthy = $__phel_2484_2485) !== null && $__truthy !== false) {
          return (\Phel::getDefinition("phel\\core", "one?"))($match_result_2483);
        } else {
          return $__phel_2484_2485;
        }

      })()) !== null && $__truthy !== false) {
        return \Phel::vector([(\Phel::getDefinition("phel\\core", "get"))($matches_2482, 1), intval((\Phel::getDefinition("phel\\core", "get"))($matches_2482, 2))]);
      } else {
        if (($__truthy = (\Phel::getDefinition("phel\\core", "not"))((\Phel::getDefinition("phel\\core", "nil?"))($http_host_2479))) !== null && $__truthy !== false) {
          return \Phel::vector([$http_host_2479, $server_port_2481]);
        } else {
          return \Phel::vector([$server_name_2480, $server_port_2481]);
        }

      }

    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(host-and-port-from-globals & [server])\n```\nExtract the host and port from the `\$_SERVER` array.",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/http.phel",
      \Phel::keyword("line"), 37,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/http.phel",
      \Phel::keyword("line"), 51,
      \Phel::keyword("column"), 34
    ),
    "min-arity", 0,
    "is-variadic", true,
    "arglists", "[& __phel_2468]"
  )
);
\Phel::addDefinition(
  "phel\\http",
  "uri-from-globals",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\http\\uri_from_globals";

    public function __invoke(...$__phel_2486) {
      $__phel_2486 = \Phel::vector($__phel_2486);
      $__phel_2487_2490 = $__phel_2486;
      $__phel_2488_2491 = (\Phel::getDefinition("phel\\core", "first"))($__phel_2487_2490);
      $__phel_2489_2492 = (\Phel::getDefinition("phel\\core", "next"))($__phel_2487_2490);
      $server_2493 = $__phel_2488_2491;
      $server_2499 = (function() use($__phel_2486,$__phel_2487_2490,$__phel_2488_2491,$__phel_2489_2492,$server_2493) {
        $__phel_2500_2501 = $server_2493;
        if (($__truthy = $__phel_2500_2501) !== null && $__truthy !== false) {
          return $__phel_2500_2501;
        } else {
          return $_SERVER;
        }

      })();
      $scheme_2502 = (($__truthy = (\Phel::getDefinition("phel\\core", "get"))($server_2499, "HTTP_X_FORWARDED_PROTO")) !== null && $__truthy !== false ? (\Phel::getDefinition("phel\\core", "get"))($server_2499, "HTTP_X_FORWARDED_PROTO") : (($__truthy = (\Phel::getDefinition("phel\\core", "get"))($server_2499, "REQUEST_SCHEME")) !== null && $__truthy !== false ? (\Phel::getDefinition("phel\\core", "get"))($server_2499, "REQUEST_SCHEME") : (($__truthy = (\Phel::getDefinition("phel\\core", "get"))($server_2499, "HTTPS")) !== null && $__truthy !== false ? (($__truthy = (\Phel::getDefinition("phel\\core", "="))("on", (\Phel::getDefinition("phel\\core", "get"))($server_2499, "HTTPS"))) !== null && $__truthy !== false ? "https" : "http") : null)));
      $path_2503 = (($__truthy = (\Phel::getDefinition("phel\\core", "get"))($server_2499, "REQUEST_URI")) !== null && $__truthy !== false ? (\Phel::getDefinition("phel\\core", "first"))(explode("?", (\Phel::getDefinition("phel\\core", "get"))($server_2499, "REQUEST_URI", ""))) : null);
      $query_2504 = (\Phel::getDefinition("phel\\core", "get"))($server_2499, "QUERY_STRING");
      $__phel_2494_2505 = (\Phel::getDefinition("phel\\http", "host-and-port-from-globals"))($server_2499);
      $__phel_2495_2506 = (\Phel::getDefinition("phel\\core", "first"))($__phel_2494_2505);
      $__phel_2496_2507 = (\Phel::getDefinition("phel\\core", "next"))($__phel_2494_2505);
      $h_2508 = $__phel_2495_2506;
      $__phel_2497_2509 = (\Phel::getDefinition("phel\\core", "first"))($__phel_2496_2507);
      $__phel_2498_2510 = (\Phel::getDefinition("phel\\core", "next"))($__phel_2496_2507);
      $p_2511 = $__phel_2497_2509;
      return (\Phel::getDefinition("phel\\http", "uri"))($scheme_2502, null, $h_2508, $p_2511, $path_2503, $query_2504, null);
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(uri-from-globals & [server])\n```\nExtracts the URI from the `\$_SERVER` variable.",
    \Phel::keyword("example"), "(uri-from-globals) ; => (uri \"https\" nil \"example.com\" 443 \"/path\" \"foo=bar\" nil)",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/http.phel",
      \Phel::keyword("line"), 53,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/http.phel",
      \Phel::keyword("line"), 66,
      \Phel::keyword("column"), 41
    ),
    "min-arity", 0,
    "is-variadic", true,
    "arglists", "[& __phel_2486]"
  )
);
\Phel::addDefinition(
  "phel\\http",
  "encode-utf-8-url",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\http\\encode_utf_8_url";

    public function __invoke($url) {
      return preg_replace_callback("%[^:/@?&=#]+%usD", new class($url) extends \Phel\Lang\AbstractFn {
        public const BOUND_TO = "phel\\http\\encode_utf_8_url";
        private $url;

        public function __construct($url) {
          $this->url = $url;
        }

        public function __invoke($matches) {
          $url = $this->url;
          return urlencode((($matches)[(0)] ?? null));
        }
      }, $url);
    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(encode-utf-8-url url)\n```\nPrepares utf-8 urls from php/parse-url.",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/http.phel",
      \Phel::keyword("line"), 69,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/http.phel",
      \Phel::keyword("line"), 75,
      \Phel::keyword("column"), 8
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[url]"
  )
);
\Phel::addDefinition(
  "phel\\http",
  "uri-from-string",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\http\\uri_from_string";

    public function __invoke($url) {
      $matches_2517 = array();
      $__phel_2512_2518 = (($__truthy = (\Phel::getDefinition("phel\\core", "one?"))(preg_match("%^(.*://\\[[0-9:a-f]+\\])(.*?)\$%", $url, $matches_2517))) !== null && $__truthy !== false ? \Phel::vector([(($matches_2517)[(1)] ?? null), (($matches_2517)[(2)] ?? null)]) : \Phel::vector(["", $url]));
      $__phel_2513_2519 = (\Phel::getDefinition("phel\\core", "first"))($__phel_2512_2518);
      $__phel_2514_2520 = (\Phel::getDefinition("phel\\core", "next"))($__phel_2512_2518);
      $prefix_2521 = $__phel_2513_2519;
      $__phel_2515_2522 = (\Phel::getDefinition("phel\\core", "first"))($__phel_2514_2520);
      $__phel_2516_2523 = (\Phel::getDefinition("phel\\core", "next"))($__phel_2514_2520);
      $url_2524 = $__phel_2515_2522;
      $encodedUrl_2525 = (\Phel::getDefinition("phel\\http", "encode-utf-8-url"))($url_2524);
      $parts_2526 = parse_url((\Phel::getDefinition("phel\\core", "str"))($prefix_2521, $encodedUrl_2525));
      $parts_2527 = array_map((function(...$args) { return urldecode(...$args);}), $parts_2526);
      if (($__truthy = $parts_2527) !== null && $__truthy !== false) {

      } else {
        throw (new \InvalidArgumentException((\Phel::getDefinition("phel\\core", "str"))("This is not a valid uri: ", $url_2524)));
      }

      return (\Phel::getDefinition("phel\\http", "uri"))((($parts_2527)[("scheme")] ?? null), (($__truthy = (($parts_2527)[("pass")] ?? null)) !== null && $__truthy !== false ? (\Phel::getDefinition("phel\\core", "str"))((($parts_2527)[("user")] ?? null), ":", (($parts_2527)[("pass")] ?? null)) : (($parts_2527)[("user")] ?? null)), (($parts_2527)[("host")] ?? null), (($__truthy = (($parts_2527)[("port")] ?? null)) !== null && $__truthy !== false ? intval((($parts_2527)[("port")] ?? null)) : null), (($parts_2527)[("path")] ?? null), (($parts_2527)[("query")] ?? null), (($parts_2527)[("fragment")] ?? null));
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(uri-from-string url)\n```\nCreate a uri struct from a string.",
    \Phel::keyword("example"), "(uri-from-string \"https://example.com/path?foo=bar\") ; => (uri \"https\" nil \"example.com\" nil \"/path\" \"foo=bar\" nil)",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/http.phel",
      \Phel::keyword("line"), 77,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/http.phel",
      \Phel::keyword("line"), 99,
      \Phel::keyword("column"), 35
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[url]"
  )
);
if (!class_exists('phel\http\uploaded_file')) {
class uploaded_file extends \Phel\Lang\Collections\Struct\AbstractPersistentStruct {

  protected const array ALLOWED_KEYS = ['tmp-file', 'size', 'error-status', 'client-filename', 'client-media-type'];

  protected $tmp_file;
  protected $size;
  protected $error_status;
  protected $client_filename;
  protected $client_media_type;

  public function __construct($tmp_file, $size, $error_status, $client_filename, $client_media_type, $meta = null) {
    parent::__construct();
    $this->tmp_file = $tmp_file;
    $this->size = $size;
    $this->error_status = $error_status;
    $this->client_filename = $client_filename;
    $this->client_media_type = $client_media_type;
    $this->meta = $meta;
  }
}
}

\Phel::addDefinition(
  "phel\\http",
  "uploaded-file",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\http\\uploaded_file";

    public function __invoke($tmp_file, $size, $error_status, $client_filename, $client_media_type) {
      return (function() use($tmp_file,$size,$error_status,$client_filename,$client_media_type) {
        $target_2528 = "phel\\http\\uploaded_file";
        return new $target_2528($tmp_file, $size, $error_status, $client_filename, $client_media_type);
      })();
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(uploaded-file tmp-file size error-status client-filename client-media-type)\n```\nCreates a new uploaded-file struct.",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/http.phel",
      \Phel::keyword("line"), 105,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/http.phel",
      \Phel::keyword("line"), 105,
      \Phel::keyword("column"), 88
    ),
    "min-arity", 5,
    "is-variadic", false,
    "arglists", "[tmp-file size error-status client-filename client-media-type]"
  )
);

\Phel::addDefinition(
  "phel\\http",
  "uploaded-file?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\http\\uploaded_file?";

    public function __invoke($x) {
      return is_a($x, "phel\\http\\uploaded_file");
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(uploaded-file? x)\n```\nChecks if `x` is an instance of the uploaded-file struct.",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/http.phel",
      \Phel::keyword("line"), 105,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/http.phel",
      \Phel::keyword("line"), 105,
      \Phel::keyword("column"), 88
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[x]"
  )
);
\Phel::addDefinition(
  "phel\\http",
  "create-uploaded-file-from-spec",
  null,
  \Phel::map(
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/http.phel",
      \Phel::keyword("line"), 107,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/http.phel",
      \Phel::keyword("line"), 107,
      \Phel::keyword("column"), 40
    )
  )
);
\Phel::addDefinition(
  "phel\\http",
  "normalize-nested-file-spec",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\http\\normalize_nested_file_spec";

    public function __invoke($files) {
      $res_2530 = (\Phel::getDefinition("phel\\core", "transient"))(\Phel::map());
      foreach (\Phel\Lang\Seq::toIterable((\Phel::getDefinition("phel\\core", "get"))($files, "tmp_name")) as $__phel_2532 => $__phel_2531) {
        $k_2533 = $__phel_2532;
        $spec_2534 = (\Phel::getDefinition("phel\\core", "php-associative-array"))("tmp_name", (\Phel::getDefinition("phel\\core", "get-in"))($files, \Phel::vector(["tmp_name", $k_2533])), "size", (\Phel::getDefinition("phel\\core", "get-in"))($files, \Phel::vector(["size", $k_2533])), "error", (\Phel::getDefinition("phel\\core", "get-in"))($files, \Phel::vector(["error", $k_2533])), "name", (\Phel::getDefinition("phel\\core", "get-in"))($files, \Phel::vector(["name", $k_2533])), "type", (\Phel::getDefinition("phel\\core", "get-in"))($files, \Phel::vector(["type", $k_2533])));
        (\Phel::getDefinition("phel\\core", "assoc"))($res_2530, $k_2533, (\Phel::getDefinition("phel\\http", "create-uploaded-file-from-spec"))($spec_2534));
      }
      return (\Phel::getDefinition("phel\\core", "persistent"))($res_2530);
    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(normalize-nested-file-spec files)\n```\n",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/http.phel",
      \Phel::keyword("line"), 109,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/http.phel",
      \Phel::keyword("line"), 119,
      \Phel::keyword("column"), 22
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[files]"
  )
);
\Phel::addDefinition(
  "phel\\http",
  "create-uploaded-file-from-spec",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\http\\create_uploaded_file_from_spec";

    public function __invoke($value) {
      if (($__truthy = is_array((\Phel::getDefinition("phel\\core", "get"))($value, "tmp_name"))) !== null && $__truthy !== false) {
        return (\Phel::getDefinition("phel\\http", "normalize-nested-file-spec"))($value);
      } else {
        return (\Phel::getDefinition("phel\\http", "uploaded-file"))((\Phel::getDefinition("phel\\core", "get"))($value, "tmp_name"), intval((\Phel::getDefinition("phel\\core", "get"))($value, "size")), intval((\Phel::getDefinition("phel\\core", "get"))($value, "error")), (\Phel::getDefinition("phel\\core", "get"))($value, "name"), (\Phel::getDefinition("phel\\core", "get"))($value, "type"));
      }

    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(create-uploaded-file-from-spec value)\n```\n",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/http.phel",
      \Phel::keyword("line"), 121,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/http.phel",
      \Phel::keyword("line"), 129,
      \Phel::keyword("column"), 26
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[value]"
  )
);
\Phel::addDefinition(
  "phel\\http",
  "normalize-files",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\http\\normalize_files";

    public function __invoke($files) {
      $res_2535 = (\Phel::getDefinition("phel\\core", "transient"))(\Phel::map());
      foreach (\Phel\Lang\Seq::toIterable($files) as $k => $v) {
        if (($__truthy = (\Phel::getDefinition("phel\\http", "uploaded-file?"))($v)) !== null && $__truthy !== false) {
          (\Phel::getDefinition("phel\\core", "assoc"))($res_2535, $k, $v);
        } else {
          if (($__truthy = (function() use($files,$res_2535,$v,$k) {
            $__phel_2536_2537 = is_array($v);
            if (($__truthy = $__phel_2536_2537) !== null && $__truthy !== false) {
              return (\Phel::getDefinition("phel\\core", "get"))($v, "tmp_name");
            } else {
              return $__phel_2536_2537;
            }

          })()) !== null && $__truthy !== false) {
            (\Phel::getDefinition("phel\\core", "assoc"))($res_2535, $k, (\Phel::getDefinition("phel\\http", "create-uploaded-file-from-spec"))($v));
          } else {
            if (($__truthy = (\Phel::getDefinition("phel\\core", "indexed?"))($v)) !== null && $__truthy !== false) {
              (\Phel::getDefinition("phel\\core", "assoc"))($res_2535, $k, (\Phel::getDefinition("phel\\http", "normalize-files"))($v));
            } else {
              throw (new \InvalidArgumentException("Invalid value in files specification"));
            }

          }

        }

      }
      return (\Phel::getDefinition("phel\\core", "persistent"))($res_2535);
    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(normalize-files files)\n```\n",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/http.phel",
      \Phel::keyword("line"), 131,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/http.phel",
      \Phel::keyword("line"), 143,
      \Phel::keyword("column"), 22
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[files]"
  )
);
\Phel::addDefinition(
  "phel\\http",
  "files-from-globals",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\http\\files_from_globals";

    public function __invoke(...$__phel_2538) {
      $__phel_2538 = \Phel::vector($__phel_2538);
      $__phel_2539_2542 = $__phel_2538;
      $__phel_2540_2543 = (\Phel::getDefinition("phel\\core", "first"))($__phel_2539_2542);
      $__phel_2541_2544 = (\Phel::getDefinition("phel\\core", "next"))($__phel_2539_2542);
      $files_2545 = $__phel_2540_2543;
      return (\Phel::getDefinition("phel\\http", "normalize-files"))((function() use($__phel_2538,$__phel_2539_2542,$__phel_2540_2543,$__phel_2541_2544,$files_2545) {
        $__phel_2546_2547 = $files_2545;
        if (($__truthy = $__phel_2546_2547) !== null && $__truthy !== false) {
          return $__phel_2546_2547;
        } else {
          return $_FILES;
        }

      })());
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(files-from-globals & [files])\n```\nExtracts the files from `\$_FILES` and normalizes them to a map of \"uploaded-file\".",
    \Phel::keyword("example"), "(files-from-globals) ; => {:avatar (uploaded-file \"/tmp/phpYzdqkD\" 1024 0 \"photo.jpg\" \"image/jpeg\")}",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/http.phel",
      \Phel::keyword("line"), 145,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/http.phel",
      \Phel::keyword("line"), 149,
      \Phel::keyword("column"), 43
    ),
    "min-arity", 0,
    "is-variadic", true,
    "arglists", "[& __phel_2538]"
  )
);
\Phel::addDefinition(
  "phel\\http",
  "headers-from-server",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\http\\headers_from_server";

    public function __invoke(...$__phel_2548) {
      $__phel_2548 = \Phel::vector($__phel_2548);
      $__phel_2549_2552 = $__phel_2548;
      $__phel_2550_2553 = (\Phel::getDefinition("phel\\core", "first"))($__phel_2549_2552);
      $__phel_2551_2554 = (\Phel::getDefinition("phel\\core", "next"))($__phel_2549_2552);
      $server_2555 = $__phel_2550_2553;
      $headers_2556 = (\Phel::getDefinition("phel\\core", "transient"))(\Phel::map());
      $server_2557 = (function() use($__phel_2548,$__phel_2549_2552,$__phel_2550_2553,$__phel_2551_2554,$server_2555,$headers_2556) {
        $__phel_2558_2559 = $server_2555;
        if (($__truthy = $__phel_2558_2559) !== null && $__truthy !== false) {
          return $__phel_2558_2559;
        } else {
          return $_SERVER;
        }

      })();
      foreach (\Phel\Lang\Seq::toIterable($server_2557) as $__phel_2561 => $__phel_2560) {
        $__phel_2562_2567 = \Phel::vector([$__phel_2561, $__phel_2560]);
        $__phel_2563_2568 = (\Phel::getDefinition("phel\\core", "first"))($__phel_2562_2567);
        $__phel_2564_2569 = (\Phel::getDefinition("phel\\core", "next"))($__phel_2562_2567);
        $k_2570 = $__phel_2563_2568;
        $__phel_2565_2571 = (\Phel::getDefinition("phel\\core", "first"))($__phel_2564_2569);
        $__phel_2566_2572 = (\Phel::getDefinition("phel\\core", "next"))($__phel_2564_2569);
        $v_2573 = $__phel_2565_2571;
        $redirected_QMARK__2574 = (\Phel::getDefinition("phel\\core", "id"))(0, strpos($k_2570, "REDIRECT_"));
        $redirected_key_2575 = (($__truthy = $redirected_QMARK__2574) !== null && $__truthy !== false ? substr($k_2570, 9) : null);
        $k_2576 = (($__truthy = (function() use($__phel_2548,$__phel_2549_2552,$__phel_2550_2553,$__phel_2551_2554,$server_2557,$headers_2556,$__phel_2560,$__phel_2561,$__phel_2562_2567,$__phel_2563_2568,$__phel_2564_2569,$k_2570,$__phel_2565_2571,$__phel_2566_2572,$v_2573,$redirected_QMARK__2574,$redirected_key_2575) {
          $__phel_2577_2578 = $redirected_QMARK__2574;
          if (($__truthy = $__phel_2577_2578) !== null && $__truthy !== false) {
            return (\Phel::getDefinition("phel\\core", "not"))(array_key_exists($redirected_key_2575, $server_2557));
          } else {
            return $__phel_2577_2578;
          }

        })()) !== null && $__truthy !== false ? $redirected_key_2575 : $k_2570);
        if (($__truthy = (function() use($__phel_2548,$__phel_2549_2552,$__phel_2550_2553,$__phel_2551_2554,$server_2557,$headers_2556,$__phel_2560,$__phel_2561,$__phel_2562_2567,$__phel_2563_2568,$__phel_2564_2569,$k_2576,$__phel_2565_2571,$__phel_2566_2572,$v_2573,$redirected_QMARK__2574,$redirected_key_2575) {
          $__phel_2579_2580 = $v_2573;
          if (($__truthy = $__phel_2579_2580) !== null && $__truthy !== false) {
            return (\Phel::getDefinition("phel\\core", "id"))(0, strpos($k_2576, "HTTP_"));
          } else {
            return $__phel_2579_2580;
          }

        })()) !== null && $__truthy !== false) {
          $name_2581 = strtr(strtolower(substr($k_2576, 5)), "_", "-");
          (\Phel::getDefinition("phel\\core", "assoc"))($headers_2556, (\Phel::getDefinition("phel\\core", "keyword"))($name_2581), $v_2573);
        } else {
          if (($__truthy = (function() use($__phel_2548,$__phel_2549_2552,$__phel_2550_2553,$__phel_2551_2554,$server_2557,$headers_2556,$__phel_2560,$__phel_2561,$__phel_2562_2567,$__phel_2563_2568,$__phel_2564_2569,$k_2576,$__phel_2565_2571,$__phel_2566_2572,$v_2573,$redirected_QMARK__2574,$redirected_key_2575) {
            $__phel_2582_2583 = $v_2573;
            if (($__truthy = $__phel_2582_2583) !== null && $__truthy !== false) {
              return (\Phel::getDefinition("phel\\core", "id"))(0, strpos($k_2576, "CONTENT_"));
            } else {
              return $__phel_2582_2583;
            }

          })()) !== null && $__truthy !== false) {
            $name_2584 = (\Phel::getDefinition("phel\\core", "str"))("content-", strtolower(substr($k_2576, 8)));
            (\Phel::getDefinition("phel\\core", "assoc"))($headers_2556, (\Phel::getDefinition("phel\\core", "keyword"))($name_2584), $v_2573);
          } else {

          }

        }

      }
      return (\Phel::getDefinition("phel\\core", "persistent"))($headers_2556);
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(headers-from-server & [server])\n```\nExtracts all headers from the `\$_SERVER` variable.",
    \Phel::keyword("example"), "(headers-from-server) ; => {:host \"example.com\" :content-type \"application/json\"}",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/http.phel",
      \Phel::keyword("line"), 155,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/http.phel",
      \Phel::keyword("line"), 174,
      \Phel::keyword("column"), 26
    ),
    "min-arity", 0,
    "is-variadic", true,
    "arglists", "[& __phel_2548]"
  )
);
if (!class_exists('phel\http\request')) {
class request extends \Phel\Lang\Collections\Struct\AbstractPersistentStruct {

  protected const array ALLOWED_KEYS = ['method', 'uri', 'headers', 'parsed-body', 'query-params', 'cookie-params', 'server-params', 'uploaded-files', 'version', 'attributes'];

  protected $method;
  protected $uri;
  protected $headers;
  protected $parsed_body;
  protected $query_params;
  protected $cookie_params;
  protected $server_params;
  protected $uploaded_files;
  protected $version;
  protected $attributes;

  public function __construct($method, $uri, $headers, $parsed_body, $query_params, $cookie_params, $server_params, $uploaded_files, $version, $attributes, $meta = null) {
    parent::__construct();
    $this->method = $method;
    $this->uri = $uri;
    $this->headers = $headers;
    $this->parsed_body = $parsed_body;
    $this->query_params = $query_params;
    $this->cookie_params = $cookie_params;
    $this->server_params = $server_params;
    $this->uploaded_files = $uploaded_files;
    $this->version = $version;
    $this->attributes = $attributes;
    $this->meta = $meta;
  }
}
}

\Phel::addDefinition(
  "phel\\http",
  "request",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\http\\request";

    public function __invoke($method, $uri, $headers, $parsed_body, $query_params, $cookie_params, $server_params, $uploaded_files, $version, $attributes) {
      return (function() use($method,$uri,$headers,$parsed_body,$query_params,$cookie_params,$server_params,$uploaded_files,$version,$attributes) {
        $target_2585 = "phel\\http\\request";
        return new $target_2585($method, $uri, $headers, $parsed_body, $query_params, $cookie_params, $server_params, $uploaded_files, $version, $attributes);
      })();
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(request method uri headers parsed-body query-params cookie-params server-params uploaded-files version attributes)\n```\nCreates a new request struct.",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/http.phel",
      \Phel::keyword("line"), 180,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/http.phel",
      \Phel::keyword("line"), 190,
      \Phel::keyword("column"), 2
    ),
    "min-arity", 10,
    "is-variadic", false,
    "arglists", "[method uri headers parsed-body query-params cookie-params server-params uploaded-files version attributes]"
  )
);

\Phel::addDefinition(
  "phel\\http",
  "request?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\http\\request?";

    public function __invoke($x) {
      return is_a($x, "phel\\http\\request");
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(request? x)\n```\nChecks if `x` is an instance of the request struct.",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/http.phel",
      \Phel::keyword("line"), 180,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/http.phel",
      \Phel::keyword("line"), 190,
      \Phel::keyword("column"), 2
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[x]"
  )
);
\Phel::addDefinition(
  "phel\\http",
  "get-method-from-globals",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\http\\get_method_from_globals";

    public function __invoke(...$__phel_2587) {
      $__phel_2587 = \Phel::vector($__phel_2587);
      $__phel_2588_2591 = $__phel_2587;
      $__phel_2589_2592 = (\Phel::getDefinition("phel\\core", "first"))($__phel_2588_2591);
      $__phel_2590_2593 = (\Phel::getDefinition("phel\\core", "next"))($__phel_2588_2591);
      $server_2594 = $__phel_2589_2592;
      $method_2595 = (\Phel::getDefinition("phel\\core", "get"))((function() use($__phel_2587,$__phel_2588_2591,$__phel_2589_2592,$__phel_2590_2593,$server_2594) {
        $__phel_2596_2597 = $server_2594;
        if (($__truthy = $__phel_2596_2597) !== null && $__truthy !== false) {
          return $__phel_2596_2597;
        } else {
          return $_SERVER;
        }

      })(), "REQUEST_METHOD");
      if (($__truthy = $method_2595) !== null && $__truthy !== false) {
        return $method_2595;
      } else {
        throw (new \InvalidArgumentException("cannot determine HTTP Method"));
      }

    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(get-method-from-globals & [server])\n```\nExtracts the request method from `\$_SERVER`.",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/http.phel",
      \Phel::keyword("line"), 192,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/http.phel",
      \Phel::keyword("line"), 198,
      \Phel::keyword("column"), 82
    ),
    "min-arity", 0,
    "is-variadic", true,
    "arglists", "[& __phel_2587]"
  )
);
\Phel::addDefinition(
  "phel\\http",
  "post-global-valid",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\http\\post_global_valid";

    public function __invoke($method, $headers) {
      $content_type_2598 = (\Phel::getDefinition("phel\\core", "get"))($headers, \Phel::keyword("content-type"), "");
      $types_2599 = strtolower(trim((\Phel::getDefinition("phel\\core", "first"))(explode(";", $content_type_2598, 2))));
      $__phel_2600_2601 = (\Phel::getDefinition("phel\\core", "="))($method, "POST");
      if (($__truthy = $__phel_2600_2601) !== null && $__truthy !== false) {
        return in_array($types_2599, array("application/x-www-form-urlencoded", "multipart/form-data"));
      } else {
        return $__phel_2600_2601;
      }

    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(post-global-valid method headers)\n```\n",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/http.phel",
      \Phel::keyword("line"), 200,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/http.phel",
      \Phel::keyword("line"), 205,
      \Phel::keyword("column"), 98
    ),
    "min-arity", 2,
    "is-variadic", false,
    "arglists", "[method headers]"
  )
);
\Phel::addDefinition(
  "phel\\http",
  "request-from-globals-args",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\http\\request_from_globals_args";

    public function __invoke($server, $get_parameter, $post_parameter, $cookies, $files) {
      $method_2602 = (\Phel::getDefinition("phel\\http", "get-method-from-globals"))($server);
      $uri_2603 = (\Phel::getDefinition("phel\\http", "uri-from-globals"))($server);
      $headers_2604 = (\Phel::getDefinition("phel\\http", "headers-from-server"))($server);
      $server_protocol_2605 = (\Phel::getDefinition("phel\\core", "get"))($server, "SERVER_PROTOCOL");
      $version_2606 = (($__truthy = (\Phel::getDefinition("phel\\core", "string?"))($server_protocol_2605)) !== null && $__truthy !== false ? str_replace("HTTP/", "", $server_protocol_2605) : "1.1");
      return (\Phel::getDefinition("phel\\http", "request"))($method_2602, $uri_2603, $headers_2604, (($__truthy = (\Phel::getDefinition("phel\\http", "post-global-valid"))($method_2602, $headers_2604)) !== null && $__truthy !== false ? (\Phel::getDefinition("phel\\core", "php-array-to-map"))($post_parameter) : null), (\Phel::getDefinition("phel\\core", "php-array-to-map"))($get_parameter), (\Phel::getDefinition("phel\\core", "php-array-to-map"))($cookies), (\Phel::getDefinition("phel\\core", "php-array-to-map"))($server), (\Phel::getDefinition("phel\\http", "normalize-files"))($files), $version_2606, \Phel::map());
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(request-from-globals-args server get-parameter post-parameter cookies files)\n```\nExtracts a request from args.",
    \Phel::keyword("example"), "(request-from-globals-args php/\$_SERVER php/\$_GET php/\$_POST php/\$_COOKIE php/\$_FILES) ; => (request \"GET\" (uri ...) {...} nil {...} {...} {...} {...} \"1.1\" {})",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/http.phel",
      \Phel::keyword("line"), 207,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/http.phel",
      \Phel::keyword("line"), 228,
      \Phel::keyword("column"), 10
    ),
    "min-arity", 5,
    "is-variadic", false,
    "arglists", "[server get-parameter post-parameter cookies files]"
  )
);
\Phel::addDefinition(
  "phel\\http",
  "request-from-globals",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\http\\request_from_globals";

    public function __invoke() {
      return (\Phel::getDefinition("phel\\http", "request-from-globals-args"))($_SERVER, $_GET, $_POST, $_COOKIE, $_FILES);
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(request-from-globals)\n```\nExtracts a request from `\$_SERVER`, `\$_GET`, `\$_POST`, `\$_COOKIE` and `\$_FILES`.",
    \Phel::keyword("example"), "(request-from-globals) ; => (request \"GET\" (uri ...) {...} nil {...} {...} {...} {...} \"1.1\" {})",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/http.phel",
      \Phel::keyword("line"), 230,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/http.phel",
      \Phel::keyword("line"), 234,
      \Phel::keyword("column"), 89
    ),
    "min-arity", 0,
    "is-variadic", false,
    "arglists", "[]"
  )
);
\Phel::addDefinition(
  "phel\\http",
  "request-from-map",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\http\\request_from_map";

    public function __invoke($__phel_2607) {
      $__phel_2608_2619 = $__phel_2607;
      $__phel_2609_2620 = (($__phel_2608_2619)[(\Phel::keyword("method"))] ?? null);
      $method_2621 = $__phel_2609_2620;
      $__phel_2610_2622 = (($__phel_2608_2619)[(\Phel::keyword("version"))] ?? null);
      $version_2623 = $__phel_2610_2622;
      $__phel_2611_2624 = (($__phel_2608_2619)[(\Phel::keyword("uri"))] ?? null);
      $uri_2625 = $__phel_2611_2624;
      $__phel_2612_2626 = (($__phel_2608_2619)[(\Phel::keyword("headers"))] ?? null);
      $headers_2627 = $__phel_2612_2626;
      $__phel_2613_2628 = (($__phel_2608_2619)[(\Phel::keyword("parsed-body"))] ?? null);
      $parsed_body_2629 = $__phel_2613_2628;
      $__phel_2614_2630 = (($__phel_2608_2619)[(\Phel::keyword("query-params"))] ?? null);
      $query_params_2631 = $__phel_2614_2630;
      $__phel_2615_2632 = (($__phel_2608_2619)[(\Phel::keyword("cookie-params"))] ?? null);
      $cookie_params_2633 = $__phel_2615_2632;
      $__phel_2616_2634 = (($__phel_2608_2619)[(\Phel::keyword("server-params"))] ?? null);
      $server_params_2635 = $__phel_2616_2634;
      $__phel_2617_2636 = (($__phel_2608_2619)[(\Phel::keyword("uploaded-files"))] ?? null);
      $uploaded_files_2637 = $__phel_2617_2636;
      $__phel_2618_2638 = (($__phel_2608_2619)[(\Phel::keyword("attributes"))] ?? null);
      $attributes_2639 = $__phel_2618_2638;
      return (\Phel::getDefinition("phel\\http", "request"))($method_2621, (($__truthy = (\Phel::getDefinition("phel\\core", "string?"))($uri_2625)) !== null && $__truthy !== false ? (\Phel::getDefinition("phel\\http", "uri-from-string"))($uri_2625) : (($__truthy = (\Phel::getDefinition("phel\\http", "uri?"))($uri_2625)) !== null && $__truthy !== false ? $uri_2625 : (($__truthy = (\Phel::getDefinition("phel\\core", "nil?"))($uri_2625)) !== null && $__truthy !== false ? null : (function() use($__phel_2607,$__phel_2608_2619,$__phel_2609_2620,$method_2621,$__phel_2610_2622,$version_2623,$__phel_2611_2624,$uri_2625,$__phel_2612_2626,$headers_2627,$__phel_2613_2628,$parsed_body_2629,$__phel_2614_2630,$query_params_2631,$__phel_2615_2632,$cookie_params_2633,$__phel_2616_2634,$server_params_2635,$__phel_2617_2636,$uploaded_files_2637,$__phel_2618_2638,$attributes_2639) {
        throw (new \InvalidArgumentException("Invalid :uri provided. Must be nil, string or uri"));
      })()))), (function() use($__phel_2607,$__phel_2608_2619,$__phel_2609_2620,$method_2621,$__phel_2610_2622,$version_2623,$__phel_2611_2624,$uri_2625,$__phel_2612_2626,$headers_2627,$__phel_2613_2628,$parsed_body_2629,$__phel_2614_2630,$query_params_2631,$__phel_2615_2632,$cookie_params_2633,$__phel_2616_2634,$server_params_2635,$__phel_2617_2636,$uploaded_files_2637,$__phel_2618_2638,$attributes_2639) {
        $__phel_2640_2641 = $headers_2627;
        if (($__truthy = $__phel_2640_2641) !== null && $__truthy !== false) {
          return $__phel_2640_2641;
        } else {
          return \Phel::map();
        }

      })(), $parsed_body_2629, (function() use($__phel_2607,$__phel_2608_2619,$__phel_2609_2620,$method_2621,$__phel_2610_2622,$version_2623,$__phel_2611_2624,$uri_2625,$__phel_2612_2626,$headers_2627,$__phel_2613_2628,$parsed_body_2629,$__phel_2614_2630,$query_params_2631,$__phel_2615_2632,$cookie_params_2633,$__phel_2616_2634,$server_params_2635,$__phel_2617_2636,$uploaded_files_2637,$__phel_2618_2638,$attributes_2639) {
        $__phel_2642_2643 = $query_params_2631;
        if (($__truthy = $__phel_2642_2643) !== null && $__truthy !== false) {
          return $__phel_2642_2643;
        } else {
          return \Phel::map();
        }

      })(), (function() use($__phel_2607,$__phel_2608_2619,$__phel_2609_2620,$method_2621,$__phel_2610_2622,$version_2623,$__phel_2611_2624,$uri_2625,$__phel_2612_2626,$headers_2627,$__phel_2613_2628,$parsed_body_2629,$__phel_2614_2630,$query_params_2631,$__phel_2615_2632,$cookie_params_2633,$__phel_2616_2634,$server_params_2635,$__phel_2617_2636,$uploaded_files_2637,$__phel_2618_2638,$attributes_2639) {
        $__phel_2644_2645 = $cookie_params_2633;
        if (($__truthy = $__phel_2644_2645) !== null && $__truthy !== false) {
          return $__phel_2644_2645;
        } else {
          return \Phel::map();
        }

      })(), (function() use($__phel_2607,$__phel_2608_2619,$__phel_2609_2620,$method_2621,$__phel_2610_2622,$version_2623,$__phel_2611_2624,$uri_2625,$__phel_2612_2626,$headers_2627,$__phel_2613_2628,$parsed_body_2629,$__phel_2614_2630,$query_params_2631,$__phel_2615_2632,$cookie_params_2633,$__phel_2616_2634,$server_params_2635,$__phel_2617_2636,$uploaded_files_2637,$__phel_2618_2638,$attributes_2639) {
        $__phel_2646_2647 = $server_params_2635;
        if (($__truthy = $__phel_2646_2647) !== null && $__truthy !== false) {
          return $__phel_2646_2647;
        } else {
          return \Phel::map();
        }

      })(), (function() use($__phel_2607,$__phel_2608_2619,$__phel_2609_2620,$method_2621,$__phel_2610_2622,$version_2623,$__phel_2611_2624,$uri_2625,$__phel_2612_2626,$headers_2627,$__phel_2613_2628,$parsed_body_2629,$__phel_2614_2630,$query_params_2631,$__phel_2615_2632,$cookie_params_2633,$__phel_2616_2634,$server_params_2635,$__phel_2617_2636,$uploaded_files_2637,$__phel_2618_2638,$attributes_2639) {
        $__phel_2648_2649 = $uploaded_files_2637;
        if (($__truthy = $__phel_2648_2649) !== null && $__truthy !== false) {
          return $__phel_2648_2649;
        } else {
          return \Phel::vector([]);
        }

      })(), (function() use($__phel_2607,$__phel_2608_2619,$__phel_2609_2620,$method_2621,$__phel_2610_2622,$version_2623,$__phel_2611_2624,$uri_2625,$__phel_2612_2626,$headers_2627,$__phel_2613_2628,$parsed_body_2629,$__phel_2614_2630,$query_params_2631,$__phel_2615_2632,$cookie_params_2633,$__phel_2616_2634,$server_params_2635,$__phel_2617_2636,$uploaded_files_2637,$__phel_2618_2638,$attributes_2639) {
        $__phel_2650_2651 = $version_2623;
        if (($__truthy = $__phel_2650_2651) !== null && $__truthy !== false) {
          return $__phel_2650_2651;
        } else {
          return "1.1";
        }

      })(), (function() use($__phel_2607,$__phel_2608_2619,$__phel_2609_2620,$method_2621,$__phel_2610_2622,$version_2623,$__phel_2611_2624,$uri_2625,$__phel_2612_2626,$headers_2627,$__phel_2613_2628,$parsed_body_2629,$__phel_2614_2630,$query_params_2631,$__phel_2615_2632,$cookie_params_2633,$__phel_2616_2634,$server_params_2635,$__phel_2617_2636,$uploaded_files_2637,$__phel_2618_2638,$attributes_2639) {
        $__phel_2652_2653 = $attributes_2639;
        if (($__truthy = $__phel_2652_2653) !== null && $__truthy !== false) {
          return $__phel_2652_2653;
        } else {
          return \Phel::map();
        }

      })());
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(request-from-map {:method method, :version version, :uri uri, :headers headers, :parsed-body parsed-body, :query-params query-params, :cookie-params cookie-params, :server-params server-params, :uploaded-files uploaded-files, :attributes attributes})\n```\nCreates a request struct from a map with optional keys :method, :uri, :headers, etc.",
    \Phel::keyword("example"), "(request-from-map {:method \"POST\" :uri \"https://api.example.com/users\"}) ; => (request \"POST\" (uri ...) {} nil {} {} {} [] \"1.1\" {})",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/http.phel",
      \Phel::keyword("line"), 236,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/http.phel",
      \Phel::keyword("line"), 263,
      \Phel::keyword("column"), 23
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[__phel_2607]"
  )
);
if (!class_exists('phel\http\response')) {
class response extends \Phel\Lang\Collections\Struct\AbstractPersistentStruct {

  protected const array ALLOWED_KEYS = ['status', 'headers', 'body', 'version', 'reason'];

  protected $status;
  protected $headers;
  protected $body;
  protected $version;
  protected $reason;

  public function __construct($status, $headers, $body, $version, $reason, $meta = null) {
    parent::__construct();
    $this->status = $status;
    $this->headers = $headers;
    $this->body = $body;
    $this->version = $version;
    $this->reason = $reason;
    $this->meta = $meta;
  }
}
}

\Phel::addDefinition(
  "phel\\http",
  "response",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\http\\response";

    public function __invoke($status, $headers, $body, $version, $reason) {
      return (function() use($status,$headers,$body,$version,$reason) {
        $target_2654 = "phel\\http\\response";
        return new $target_2654($status, $headers, $body, $version, $reason);
      })();
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(response status headers body version reason)\n```\nCreates a new response struct.",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/http.phel",
      \Phel::keyword("line"), 269,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/http.phel",
      \Phel::keyword("line"), 269,
      \Phel::keyword("column"), 57
    ),
    "min-arity", 5,
    "is-variadic", false,
    "arglists", "[status headers body version reason]"
  )
);

\Phel::addDefinition(
  "phel\\http",
  "response?",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\http\\response?";

    public function __invoke($x) {
      return is_a($x, "phel\\http\\response");
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(response? x)\n```\nChecks if `x` is an instance of the response struct.",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/http.phel",
      \Phel::keyword("line"), 269,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/http.phel",
      \Phel::keyword("line"), 269,
      \Phel::keyword("column"), 57
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[x]"
  )
);
\Phel::addDefinition(
  "phel\\http",
  "response-phrases",
  \Phel::map(
    308, "Permanent Redirect",
    404, "Not Found",
    500, "Internal Server Error",
    226, "IM Used",
    418, "I\\'m a teapot",
    100, "Continue",
    101, "Switching Protocols",
    421, "Misdirected Request",
    102, "Processing",
    422, "Unprocessable Entity",
    103, "Early Hints",
    423, "Locked",
    200, "OK",
    424, "Failed Dependency",
    201, "Created",
    425, "Too Early",
    202, "Accepted",
    426, "Upgrade Required",
    203, "Non-Authoritative Information",
    204, "No Content",
    300, "Multiple Choices",
    428, "Precondition Required",
    205, "Reset Content",
    301, "Moved Permanently",
    429, "Too Many Requests",
    206, "Partial Content",
    302, "Found",
    207, "Multi-Status",
    303, "See Other",
    431, "Request Header Fields Too Large",
    208, "Already Reported",
    304, "Not Modified",
    400, "Bad Request",
    305, "Use Proxy",
    401, "Unauthorized",
    307, "Temporary Redirect",
    403, "Forbidden",
    402, "Payment Required",
    405, "Method Not Allowed",
    501, "Not Implemented",
    406, "Not Acceptable",
    502, "Bad Gateway",
    407, "Proxy Authentication Required",
    503, "Service Unavailable",
    408, "Request Timeout",
    504, "Gateway Timeout",
    409, "Conflict",
    505, "HTTP Version Not Supported",
    410, "Gone",
    506, "Variant Also Negotiates",
    411, "Length Required",
    507, "Insufficient Storage",
    412, "Precondition Failed",
    508, "Loop Detected",
    413, "Payload Too Large",
    414, "URI Too Long",
    510, "Not Extended",
    415, "Unsupported Media Type",
    511, "Network Authentication Required",
    416, "Range Not Satisfiable",
    417, "Expectation Failed",
    451, "Unavailable For Legal Reasons"
  ),
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/http.phel",
      \Phel::keyword("line"), 271,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/http.phel",
      \Phel::keyword("line"), 332,
      \Phel::keyword("column"), 63
    )
  )
);
\Phel::addDefinition(
  "phel\\http",
  "response-from-map",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\http\\response_from_map";

    public function __invoke($__phel_2656) {
      $__phel_2657_2663 = $__phel_2656;
      $__phel_2658_2664 = (($__phel_2657_2663)[(\Phel::keyword("status"))] ?? null);
      $status_2665 = $__phel_2658_2664;
      $__phel_2659_2666 = (($__phel_2657_2663)[(\Phel::keyword("headers"))] ?? null);
      $headers_2667 = $__phel_2659_2666;
      $__phel_2660_2668 = (($__phel_2657_2663)[(\Phel::keyword("body"))] ?? null);
      $body_2669 = $__phel_2660_2668;
      $__phel_2661_2670 = (($__phel_2657_2663)[(\Phel::keyword("version"))] ?? null);
      $version_2671 = $__phel_2661_2670;
      $__phel_2662_2672 = (($__phel_2657_2663)[(\Phel::keyword("reason"))] ?? null);
      $reason_2673 = $__phel_2662_2672;
      $status_2674 = (function() use($__phel_2656,$__phel_2657_2663,$__phel_2658_2664,$status_2665,$__phel_2659_2666,$headers_2667,$__phel_2660_2668,$body_2669,$__phel_2661_2670,$version_2671,$__phel_2662_2672,$reason_2673) {
        $__phel_2675_2676 = $status_2665;
        if (($__truthy = $__phel_2675_2676) !== null && $__truthy !== false) {
          return $__phel_2675_2676;
        } else {
          return 200;
        }

      })();
      $headers_2677 = (function() use($__phel_2656,$__phel_2657_2663,$__phel_2658_2664,$status_2674,$__phel_2659_2666,$headers_2667,$__phel_2660_2668,$body_2669,$__phel_2661_2670,$version_2671,$__phel_2662_2672,$reason_2673) {
        $__phel_2678_2679 = $headers_2667;
        if (($__truthy = $__phel_2678_2679) !== null && $__truthy !== false) {
          return $__phel_2678_2679;
        } else {
          return \Phel::map();
        }

      })();
      $body_2680 = (function() use($__phel_2656,$__phel_2657_2663,$__phel_2658_2664,$status_2674,$__phel_2659_2666,$headers_2677,$__phel_2660_2668,$body_2669,$__phel_2661_2670,$version_2671,$__phel_2662_2672,$reason_2673) {
        $__phel_2681_2682 = $body_2669;
        if (($__truthy = $__phel_2681_2682) !== null && $__truthy !== false) {
          return $__phel_2681_2682;
        } else {
          return "";
        }

      })();
      $version_2683 = (function() use($__phel_2656,$__phel_2657_2663,$__phel_2658_2664,$status_2674,$__phel_2659_2666,$headers_2677,$__phel_2660_2668,$body_2680,$__phel_2661_2670,$version_2671,$__phel_2662_2672,$reason_2673) {
        $__phel_2684_2685 = $version_2671;
        if (($__truthy = $__phel_2684_2685) !== null && $__truthy !== false) {
          return $__phel_2684_2685;
        } else {
          return "1.1";
        }

      })();
      $reason_2686 = (function() use($__phel_2656,$__phel_2657_2663,$__phel_2658_2664,$status_2674,$__phel_2659_2666,$headers_2677,$__phel_2660_2668,$body_2680,$__phel_2661_2670,$version_2683,$__phel_2662_2672,$reason_2673) {
        $__phel_2687_2688 = $reason_2673;
        if (($__truthy = $__phel_2687_2688) !== null && $__truthy !== false) {
          return $__phel_2687_2688;
        } else {
          $__phel_2689_2690 = (\Phel::getDefinition("phel\\core", "get"))(\Phel::getDefinition("phel\\http", "response-phrases"), $status_2674);
          if (($__truthy = $__phel_2689_2690) !== null && $__truthy !== false) {
            return $__phel_2689_2690;
          } else {
            return "";
          }

        }

      })();
      return (\Phel::getDefinition("phel\\http", "response"))($status_2674, $headers_2677, $body_2680, $version_2683, $reason_2686);
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(response-from-map {:status status, :headers headers, :body body, :version version, :reason reason})\n```\nCreates a response struct from a map with optional keys :status, :headers, :body, :version, and :reason.",
    \Phel::keyword("example"), "(response-from-map {:status 200 :body \"Hello World\"}) ; => (response 200 {} \"Hello World\" \"1.1\" \"OK\")",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/http.phel",
      \Phel::keyword("line"), 334,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/http.phel",
      \Phel::keyword("line"), 343,
      \Phel::keyword("column"), 51
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[__phel_2656]"
  )
);
\Phel::addDefinition(
  "phel\\http",
  "create-response-from-map",
  \Phel::getDefinition("phel\\http", "response-from-map"),
  \Phel::map(
    \Phel::keyword("deprecated"), "Use response-from-map",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/http.phel",
      \Phel::keyword("line"), 345,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/http.phel",
      \Phel::keyword("line"), 345,
      \Phel::keyword("column"), 86
    )
  )
);
\Phel::addDefinition(
  "phel\\http",
  "response-from-string",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\http\\response_from_string";

    public function __invoke($s) {
      return (\Phel::getDefinition("phel\\http", "create-response-from-map"))(\Phel::map(
        \Phel::keyword("body"), $s
      ));
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(response-from-string s)\n```\nCreate a response from a string.",
    \Phel::keyword("example"), "(response-from-string \"Hello World\") ; => (response 200 {} \"Hello World\" \"1.1\" \"OK\")",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/http.phel",
      \Phel::keyword("line"), 347,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/http.phel",
      \Phel::keyword("line"), 351,
      \Phel::keyword("column"), 39
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[s]"
  )
);
\Phel::addDefinition(
  "phel\\http",
  "create-response-from-string",
  \Phel::getDefinition("phel\\http", "response-from-string"),
  \Phel::map(
    \Phel::keyword("deprecated"), "Use response-from-string",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/http.phel",
      \Phel::keyword("line"), 353,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/http.phel",
      \Phel::keyword("line"), 353,
      \Phel::keyword("column"), 95
    )
  )
);
\Phel::addDefinition(
  "phel\\http",
  "emit-status-line",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\http\\emit_status_line";

    public function __invoke($__phel_2691) {
      $__phel_2692_2696 = $__phel_2691;
      $__phel_2693_2697 = (($__phel_2692_2696)[(\Phel::keyword("status"))] ?? null);
      $status_2698 = $__phel_2693_2697;
      $__phel_2694_2699 = (($__phel_2692_2696)[(\Phel::keyword("reason"))] ?? null);
      $reason_2700 = $__phel_2694_2699;
      $__phel_2695_2701 = (($__phel_2692_2696)[(\Phel::keyword("version"))] ?? null);
      $version_2702 = $__phel_2695_2701;
      if (($__truthy = headers_sent()) !== null && $__truthy !== false) {
        return null;
      } else {
        $version_2703 = (function() use($__phel_2691,$__phel_2692_2696,$__phel_2693_2697,$status_2698,$__phel_2694_2699,$reason_2700,$__phel_2695_2701,$version_2702) {
          $__phel_2704_2705 = $version_2702;
          if (($__truthy = $__phel_2704_2705) !== null && $__truthy !== false) {
            return $__phel_2704_2705;
          } else {
            return "1.1";
          }

        })();
        $status_2706 = (function() use($__phel_2691,$__phel_2692_2696,$__phel_2693_2697,$status_2698,$__phel_2694_2699,$reason_2700,$__phel_2695_2701,$version_2703) {
          $__phel_2707_2708 = $status_2698;
          if (($__truthy = $__phel_2707_2708) !== null && $__truthy !== false) {
            return $__phel_2707_2708;
          } else {
            return 200;
          }

        })();
        $reason_2709 = (function() use($__phel_2691,$__phel_2692_2696,$__phel_2693_2697,$status_2706,$__phel_2694_2699,$reason_2700,$__phel_2695_2701,$version_2703) {
          $__phel_2710_2711 = $reason_2700;
          if (($__truthy = $__phel_2710_2711) !== null && $__truthy !== false) {
            return $__phel_2710_2711;
          } else {
            return (\Phel::getDefinition("phel\\core", "get"))(\Phel::getDefinition("phel\\http", "response-phrases"), $status_2706);
          }

        })();
        return header(sprintf("HTTP/%s %d%s", $version_2703, $status_2706, (($__truthy = $reason_2709) !== null && $__truthy !== false ? (\Phel::getDefinition("phel\\core", "str"))(" ", $reason_2709) : "")), true, $status_2706);
      }

    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(emit-status-line {:status status, :reason reason, :version version})\n```\n",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/http.phel",
      \Phel::keyword("line"), 355,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/http.phel",
      \Phel::keyword("line"), 367,
      \Phel::keyword("column"), 17
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[__phel_2691]"
  )
);
\Phel::addDefinition(
  "phel\\http",
  "assert-no-crlf",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\http\\assert_no_crlf";

    public function __invoke($value) {
      if (($__truthy = (function() use($value) {
        $__phel_2712_2713 = (\Phel::getDefinition("phel\\core", "string?"))($value);
        if (($__truthy = $__phel_2712_2713) !== null && $__truthy !== false) {
          $__phel_2714_2715 = str_contains($value, "\r");
          if (($__truthy = $__phel_2714_2715) !== null && $__truthy !== false) {
            return $__phel_2714_2715;
          } else {
            return str_contains($value, "\n");
          }

        } else {
          return $__phel_2712_2713;
        }

      })()) !== null && $__truthy !== false) {
        throw (new \InvalidArgumentException("Header must not contain CR or LF characters"));
      } else {

      }

      return $value;
    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(assert-no-crlf value)\n```\n",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/http.phel",
      \Phel::keyword("line"), 370,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/http.phel",
      \Phel::keyword("line"), 374,
      \Phel::keyword("column"), 8
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[value]"
  )
);
\Phel::addDefinition(
  "phel\\http",
  "normalize-header-name",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\http\\normalize_header_name";

    public function __invoke($header_name) {
      if (($__truthy = (function() use($header_name) {
        $__phel_2716_2717 = (\Phel::getDefinition("phel\\core", "keyword?"))($header_name);
        if (($__truthy = $__phel_2716_2717) !== null && $__truthy !== false) {
          return $__phel_2716_2717;
        } else {
          return (\Phel::getDefinition("phel\\core", "string?"))($header_name);
        }

      })()) !== null && $__truthy !== false) {

      } else {
        throw (new \InvalidArgumentException((\Phel::getDefinition("phel\\core", "str"))("Header must be a keyword or string. Given: ", $header_name)));
      }

      return (\Phel::getDefinition("phel\\http", "assert-no-crlf"))(ucwords((\Phel::getDefinition("phel\\core", "name"))($header_name), "-"));
    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(normalize-header-name header-name)\n```\n",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/http.phel",
      \Phel::keyword("line"), 376,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/http.phel",
      \Phel::keyword("line"), 379,
      \Phel::keyword("column"), 56
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[header-name]"
  )
);
\Phel::addDefinition(
  "phel\\http",
  "emit-headers",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\http\\emit_headers";

    public function __invoke($__phel_2718) {
      $__phel_2719_2722 = $__phel_2718;
      $__phel_2720_2723 = (($__phel_2719_2722)[(\Phel::keyword("status"))] ?? null);
      $status_2724 = $__phel_2720_2723;
      $__phel_2721_2725 = (($__phel_2719_2722)[(\Phel::keyword("headers"))] ?? null);
      $headers_2726 = $__phel_2721_2725;
      if (($__truthy = headers_sent()) !== null && $__truthy !== false) {
        return null;
      } else {
        return (function() use($__phel_2718,$__phel_2719_2722,$__phel_2720_2723,$status_2724,$__phel_2721_2725,$headers_2726) {
          foreach (\Phel\Lang\Seq::toIterable($headers_2726) as $__phel_2728 => $__phel_2727) {
            $__phel_2729_2734 = \Phel::vector([$__phel_2728, $__phel_2727]);
            $__phel_2730_2735 = (\Phel::getDefinition("phel\\core", "first"))($__phel_2729_2734);
            $__phel_2731_2736 = (\Phel::getDefinition("phel\\core", "next"))($__phel_2729_2734);
            $header_2737 = $__phel_2730_2735;
            $__phel_2732_2738 = (\Phel::getDefinition("phel\\core", "first"))($__phel_2731_2736);
            $__phel_2733_2739 = (\Phel::getDefinition("phel\\core", "next"))($__phel_2731_2736);
            $values_2740 = $__phel_2732_2738;
            $normalized_name_2741 = (\Phel::getDefinition("phel\\http", "normalize-header-name"))($header_2737);
            $replace_2742 = (function() use($__phel_2718,$__phel_2719_2722,$__phel_2720_2723,$status_2724,$__phel_2721_2725,$headers_2726,$__phel_2727,$__phel_2728,$__phel_2729_2734,$__phel_2730_2735,$__phel_2731_2736,$header_2737,$__phel_2732_2738,$__phel_2733_2739,$values_2740,$normalized_name_2741) {
              $__phel_2743_2744 = (\Phel::getDefinition("phel\\core", "id"))(0, strcasecmp($normalized_name_2741, "Content-Type"));
              if (($__truthy = $__phel_2743_2744) !== null && $__truthy !== false) {
                return (\Phel::getDefinition("phel\\core", "not"))((\Phel::getDefinition("phel\\core", "id"))(0, strcasecmp($normalized_name_2741, "Set-Cookie")));
              } else {
                return $__phel_2743_2744;
              }

            })();
            if (($__truthy = (\Phel::getDefinition("phel\\core", "string?"))($values_2740)) !== null && $__truthy !== false) {
              header(sprintf("%s: %s", $normalized_name_2741, (\Phel::getDefinition("phel\\http", "assert-no-crlf"))($values_2740)), $replace_2742, $status_2724);
            } else {
              if (($__truthy = (\Phel::getDefinition("phel\\core", "indexed?"))($values_2740)) !== null && $__truthy !== false) {
                foreach (\Phel\Lang\Seq::toIterable($values_2740) as $__phel_2745) {
                  $value_2746 = $__phel_2745;
                  header(sprintf("%s: %s", $normalized_name_2741, (\Phel::getDefinition("phel\\http", "assert-no-crlf"))($value_2746)), $replace_2742, $status_2724);
                }
              } else {

              }

            }

          }
          return null;
        })();
      }

    }
  },
  \Phel::map(
    \Phel::keyword("private"), true,
    \Phel::keyword("doc"), "```phel\n(emit-headers {:status status, :headers headers})\n```\n",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/http.phel",
      \Phel::keyword("line"), 381,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/http.phel",
      \Phel::keyword("line"), 392,
      \Phel::keyword("column"), 104
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[__phel_2718]"
  )
);
\Phel::addDefinition(
  "phel\\http",
  "emit-response",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\http\\emit_response";

    public function __invoke($response) {
      (\Phel::getDefinition("phel\\http", "emit-status-line"))($response);
      (\Phel::getDefinition("phel\\http", "emit-headers"))($response);
      print((\Phel::getDefinition("phel\\core", "get"))($response, \Phel::keyword("body")));
      return null;
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(emit-response response)\n```\nEmits the response by sending headers and outputting the body.",
    \Phel::keyword("example"), "(emit-response (response-from-string \"Hello World\")) ; => nil",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/http.phel",
      \Phel::keyword("line"), 394,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/http.phel",
      \Phel::keyword("line"), 401,
      \Phel::keyword("column"), 6
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[response]"
  )
);
