<?php declare(strict_types=1);
namespace user;
require_once __DIR__ . '/phel/core.php';
require_once __DIR__ . '/phel/repl.php';
require_once __DIR__ . '/phel/pprint.php';
require_once __DIR__ . '/phel/walk.php';
\Phel::addDefinition(
  "phel\\core",
  "*file*",
  "/Users/jfwittmann/Projects/phel/phel-nrepl/vendor/phel-lang/phel-lang/src/php/Run/Domain/Repl/startup.phel"
);
\Phel::addDefinition(
  "phel\\core",
  "*ns*",
  "user"
);
