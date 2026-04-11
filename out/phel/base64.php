<?php declare(strict_types=1);
namespace phel\base64;
require_once __DIR__ . '/../phel/core.php';
require_once __DIR__ . '/../phel/str.php';
\Phel::addDefinition(
  "phel\\core",
  "*file*",
  "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/base64.phel"
);
\Phel::addDefinition(
  "phel\\core",
  "*ns*",
  "phel\\base64"
);
\Phel::addDefinition(
  "phel\\base64",
  "encode",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\base64\\encode";

    public function __invoke($s) {
      return base64_encode($s);
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(encode s)\n```\nEncodes a string to Base64.",
    \Phel::keyword("example"), "(encode \"Hello\") ; => \"SGVsbG8=\"",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/base64.phel",
      \Phel::keyword("line"), 4,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/base64.phel",
      \Phel::keyword("line"), 8,
      \Phel::keyword("column"), 24
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[s]"
  )
);
\Phel::addDefinition(
  "phel\\base64",
  "decode",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\base64\\decode";

    public function __invoke($s, ...$__phel_3030) {
      $__phel_3030 = \Phel::vector($__phel_3030);
      $__phel_3031_3034 = $__phel_3030;
      $__phel_3032_3035 = (\Phel::getDefinition("phel\\core", "first"))($__phel_3031_3034);
      $__phel_3033_3036 = (\Phel::getDefinition("phel\\core", "next"))($__phel_3031_3034);
      $strict_QMARK__3037 = $__phel_3032_3035;
      return base64_decode($s, (function() use($s,$__phel_3030,$__phel_3031_3034,$__phel_3032_3035,$__phel_3033_3036,$strict_QMARK__3037) {
        $__phel_3038_3039 = $strict_QMARK__3037;
        if (($__truthy = $__phel_3038_3039) !== null && $__truthy !== false) {
          return $__phel_3038_3039;
        } else {
          return false;
        }

      })());
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(decode s & [strict?])\n```\nDecodes a Base64 string. Optional `strict?` flag validates characters.",
    \Phel::keyword("example"), "(decode \"SGVsbG8=\") ; => \"Hello\"",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/base64.phel",
      \Phel::keyword("line"), 10,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/base64.phel",
      \Phel::keyword("line"), 14,
      \Phel::keyword("column"), 43
    ),
    "min-arity", 1,
    "is-variadic", true,
    "arglists", "[s & __phel_3030]"
  )
);
\Phel::addDefinition(
  "phel\\base64",
  "encode-url",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\base64\\encode_url";

    public function __invoke($s) {
      return (\Phel::getDefinition("phel\\str", "replace"))((\Phel::getDefinition("phel\\str", "replace"))((\Phel::getDefinition("phel\\str", "replace"))((\Phel::getDefinition("phel\\base64", "encode"))($s), "+", "-"), "/", "_"), "=", "");
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(encode-url s)\n```\nEncodes a string to URL-safe Base64 (no padding).",
    \Phel::keyword("example"), "(encode-url \"Hello\") ; => \"SGVsbG8\"",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/base64.phel",
      \Phel::keyword("line"), 16,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/base64.phel",
      \Phel::keyword("line"), 23,
      \Phel::keyword("column"), 26
    ),
    "min-arity", 1,
    "is-variadic", false,
    "arglists", "[s]"
  )
);
\Phel::addDefinition(
  "phel\\base64",
  "decode-url",
  new class() extends \Phel\Lang\AbstractFn {
    public const BOUND_TO = "phel\\base64\\decode_url";

    public function __invoke($s, ...$__phel_3040) {
      $__phel_3040 = \Phel::vector($__phel_3040);
      $__phel_3041_3044 = $__phel_3040;
      $__phel_3042_3045 = (\Phel::getDefinition("phel\\core", "first"))($__phel_3041_3044);
      $__phel_3043_3046 = (\Phel::getDefinition("phel\\core", "next"))($__phel_3041_3044);
      $strict_QMARK__3047 = $__phel_3042_3045;
      $s_3048 = (\Phel::getDefinition("phel\\str", "replace"))($s, "-", "+");
      $s_3049 = (\Phel::getDefinition("phel\\str", "replace"))($s_3048, "_", "/");
      $len_3050 = strlen($s_3049);
      $rem_3051 = fmod($len_3050, 4);
      $pad_3052 = fmod((function() use($s_3049,$__phel_3040,$__phel_3041_3044,$__phel_3042_3045,$__phel_3043_3046,$strict_QMARK__3047,$len_3050,$rem_3051) {
        (\Phel::getDefinition("phel\\core", "assert-non-nil"))(4, $rem_3051);
        return (4 - $rem_3051);
      })(), 4);
      $s_3053 = (\Phel::getDefinition("phel\\core", "str"))($s_3049, (\Phel::getDefinition("phel\\str", "repeat"))("=", $pad_3052));
      return (\Phel::getDefinition("phel\\base64", "decode"))($s_3053, (function() use($s_3053,$__phel_3040,$__phel_3041_3044,$__phel_3042_3045,$__phel_3043_3046,$strict_QMARK__3047,$len_3050,$rem_3051,$pad_3052) {
        $__phel_3054_3055 = $strict_QMARK__3047;
        if (($__truthy = $__phel_3054_3055) !== null && $__truthy !== false) {
          return $__phel_3054_3055;
        } else {
          return false;
        }

      })());
    }
  },
  \Phel::map(
    \Phel::keyword("doc"), "```phel\n(decode-url s & [strict?])\n```\nDecodes a URL-safe Base64 string. Adds padding automatically.",
    \Phel::keyword("example"), "(decode-url \"SGVsbG8\") ; => \"Hello\"",
    \Phel::keyword("start-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/base64.phel",
      \Phel::keyword("line"), 25,
      \Phel::keyword("column"), 0
    ),
    \Phel::keyword("end-location"), \Phel::map(
      \Phel::keyword("file"), "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/phel/base64.phel",
      \Phel::keyword("line"), 35,
      \Phel::keyword("column"), 35
    ),
    "min-arity", 1,
    "is-variadic", true,
    "arglists", "[s & __phel_3040]"
  )
);
