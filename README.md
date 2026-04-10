# Phel nREPL Server

An nREPL server for [Phel](https://phel-lang.org/), written in Phel itself. Allows interactive development with editors that support the nREPL protocol, such as [Calva](https://calva.io/) (VS Code).

## Requirements

- PHP 8.1+
- Composer
- Phel 0.31+

## Installation

### As a dependency in your Phel project

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

### Connecting with Calva (VS Code)

1. Start the nREPL server with `vendor/bin/phel-nrepl`
2. In VS Code, open the command palette and run **Calva: Connect to a Running REPL Server...**
3. Select **Generic** as the project type
4. Enter `localhost:7888` as the host and port

You can now evaluate Phel code from your editor.

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

| Operation   | Status      |
|-------------|-------------|
| `clone`     | supported   |
| `describe`  | supported   |
| `eval`      | supported   |
| `load-file` | supported   |
| `close`     | supported   |
| `info`      | stub        |
| `complete`  | stub        |

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
