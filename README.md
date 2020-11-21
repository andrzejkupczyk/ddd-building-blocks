# Domain-Driven Design components

![PHP requirement](https://img.shields.io/packagist/php-v/andrzejkupczyk/ddd-building-blocks?logo=php&style=for-the-badge "PHP requirement")
[![GitHub license](https://img.shields.io/github/license/andrzejkupczyk/ddd-building-blocks?style=for-the-badge)](https://github.com/andrzejkupczyk/ddd-building-blocks/blob/main/LICENSE "License")
![GitHub tag (latest SemVer)](https://img.shields.io/github/v/tag/andrzejkupczyk/ddd-building-blocks?sort=semver&style=for-the-badge)

This repository helps me experiment with the DDD approach.

All implementations are inspired by books, ValueObject library created by [Nicolò Pignatelli](https://github.com/nicolopignatelli), 
[SeedStack](http://seedstack.org) Java development stack, [ValueObjects toolkit](https://github.com/barryosull/valueobjects)
 and some other, more direct sources, but mainly by my experiences and needs.

## Should I use this library?

Although this package can be introduced as a Generic Subdomain to relieve the Core Domain of a project from unnecessary 
clutter, it has been developed as an example which probably do not reflect 100% your domain. Therefore, you should 
rather write your own DDD components using interfaces provided by the [DDD Generics](https://github.com/andrzejkupczyk/ddd-generic-subdomain) 
package to force members of your team or yourself on thinking in terms of immutable objects and their interaction.

## Installation

Using Composer:

```
composer require andrzejkupczyk/ddd-building-blocks
```

## Example usages

```php
<?php

namespace Brunswick\Billiards\Table;

use WebGarden\Model\ValueObject\Number\Natural;

final class Size extends Natural
{
    protected static function validate($feet)
    {
        return parent::validate($feet)->between(7, 9);
    }
}
```
