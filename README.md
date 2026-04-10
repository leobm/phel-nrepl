# Phel nREPL Server

An nREPL server for [Phel](https://phel-lang.org/), written in Phel itself. Allows interactive development with editors that support the nREPL protocol, such as [Calva](https://calva.io/) (VS Code).

## Requirements

- PHP 8.1+
- Composer
- Phel 0.31+

## Installation

### As a dependency in your Phel project

This package is not yet on Packagist. Add the GitHub repository to your `composer.json`:

```json
{
    "require": {
        "phel-lang/phel-nrepl": "dev-main"
    },
    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/leobm/phel-nrepl.git"
        }
    ],
    "minimum-stability": "dev",
    "prefer-stable": true
}
```

Then run:

```bash
composer update
```

<!-- Once published on Packagist, this will be enough:
composer require phel-lang/phel-nrepl
-->

### Standalone (for development)

```bash
git clone https://github.com/leobm/phel-nrepl.git
cd phel-nrepl
composer install
```

## Usage

Start the nREPL server:

```bash
vendor/bin/phel-nrepl
```

Or if installed standalone:

```bash
bin/phel-nrepl
```

The server listens on `127.0.0.1:7888` by default.

### VS Code / Calva Setup

Add the following to your project's `.vscode/settings.json`:

```json
{
  "calva.replConnectSequences": [
    {
      "name": "phel",
      "projectType": "custom",
      "customJackInCommandLine": "lsof -ti:7888 | xargs kill -9 2>/dev/null; ./vendor/bin/phel-nrepl",
      "nReplPortFile": [".nrepl-port"],
      "cljsType": "none"
    }
  ],
  "files.associations": {
    "*.phel": "clojure"
  }
}
```

This enables:
- **Jack-in**: Run **Calva: Start a Project REPL and Connect (aka Jack-In)** from the command palette — starts the nREPL server and connects automatically
- **Connect**: Run **Calva: Connect to a Running REPL Server** from the command palette — connects to an already running server (select "Generic", enter `localhost:7888`)
- Syntax highlighting for `.phel` files via Clojure grammar

### clj-kondo Configuration

Calva uses [clj-kondo](https://github.com/clj-kondo/clj-kondo) for linting. Since Phel syntax differs from Clojure (e.g. `php/::`, `defn-`, `#` comments), kondo will report false errors. To suppress them, create `.clj-kondo/config.edn` in your project root:

```edn
{:output {:exclude-files [".*\\.phel$"]}
 :config-in-glob {"*.phel" {:linters {:all {:level :off}}}}}
```

This disables all linters for `.phel` files and excludes them from kondo's output.

> **Note:** clj-kondo only reads `.clj-kondo/config.edn` — this cannot be configured via VS Code settings.

### Supported REPL Functions

The server supports common Phel REPL operations:

```clojure
# Load a namespace
(require phel\json :as json)

# Use functions from loaded namespaces
(json/decode "{\"a\": 1}")

# View documentation for a function
(doc filter)

# View source code
(source filter)

# List functions in a namespace
(dir phel\core)

# Search for functions by name
(apropos "map")

# Find functions matching a predicate
(find-fn "Returns a lazy")

# Get symbol info
(symbol-info filter)

# Search documentation
(search-doc "sequence")
```

### Supported nREPL Operations

| Operation     | Status      |
|---------------|-------------|
| `clone`       | supported   |
| `describe`    | supported   |
| `eval`        | supported   |
| `load-file`   | supported   |
| `close`       | supported   |
| `ls-sessions` | supported   |
| `info`        | stub        |
| `lookup`      | stub        |
| `complete`    | stub        |
| `completions` | stub        |
| `interrupt`   | stub        |

## Architecture

- **`src/phel/nrepl.phel`** — Main server: TCP socket handling, nREPL protocol, code evaluation
- **`src/php/NreplHelper.php`** — PHP helper class for string transformations (avoids backslash escape issues in Phel strings) and alias registration
- **`bin/phel-nrepl`** — CLI entry point
- **`phel-config.php`** — Phel source directory configuration

The server uses [ReactPHP](https://reactphp.org/) for async TCP and [rhilip/bencode](https://github.com/rhilip/bencode) for the nREPL Bencode wire format.

## Running Tests

Start the server, then run the test suite:

```bash
bin/phel-nrepl &
sleep 2
php tests/test-nrepl.php
```

## License

MIT
