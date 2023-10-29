# Design Patterns PHP

Dockerized PHP skeleton to review design patterns in PHP.

This repository is based on https://github.com/nachosalvador/kata-php-skeleton

## Local environment

### Requirements

* PHP 8.1
* [Composer](https://getcomposer.org/download/)

### Installation

Install project dependencies:

```bash
$ composer install
```

### Testing

```bash
$ vendor/bin/phpunit
```

## Docker environment

### Requirements

* [Docker](https://docs.docker.com/install/)

### Installation

Create docker image and install project dependencies:

```bash
$ make build
```

### Testing

```bash
$ make tests
```

## License

Please see [License File](LICENSE) for more information.
