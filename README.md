# countries
Country Codes Converter for PHP in Japanese.

[![Packagist](https://img.shields.io/packagist/v/kura-lab/countries.svg)](https://packagist.org/packages/kura-lab/countries)
[![license](https://img.shields.io/github/license/mashape/apistatus.svg)](https://github.com/kura-lab/countries/blob/master/LICENSE)

### Specification

* https://www.iso.org/obp/ui/#search/code/

### Requirements

[![Minimum PHP Version](https://img.shields.io/badge/php-%3E%3D%205.3.3-8892BF.svg?style=flat-square)](https://php.net/)
* PHP 5.3.3 or higher.

### Install

At first, install composer.

```
$ mkdir workspace
$ cd workspace
$ curl -s http://getcomposer.org/installer | php
```

Create composer.json.

```
{
    "require": {
        "kura-lab/countries": "1.*"
    }
}
```

Install library.

```
$ php composer.phar install
```

### Development

Check coding style with CodeSniffer.

```
$ vendor/bin/phpcs --standard=PSR2 src/
```

Execute unit test with PHPUnit.

```
$ vendor/bin/phpunit
```
