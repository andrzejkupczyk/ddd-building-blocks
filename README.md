# Domain-Driven Design components implementation

![PHP requirement](https://img.shields.io/badge/PHP-^7.2-blue.svg?logo=php&style=for-the-badge)
![Build status](https://img.shields.io/travis/andrzejkupczyk/ddd-building-blocks/master?logo=travis&style=for-the-badge)
![Code quality](https://img.shields.io/scrutinizer/quality/g/andrzejkupczyk/ddd-building-blocks?logo=scrutinizer&style=for-the-badge)

This repository helps me experiment with the DDD approach.

All implementations are inspired by books, [ValueObject](https://github.com/andrzejkupczyk/valueobjects) library created by [Nicolò Pignatelli](https://github.com/nicolopignatelli), 
[SeedStack](http://seedstack.org) Java development stack, [ValueObjects toolkit](https://github.com/barryosull/valueobjects)
 and some other, more direct sources, but mainly by my experiences and needs.

## Should I use this library?

Although this library can be introduced as a Generic Subdomain to relieve the Core Domain of a project from unnecessary 
clutter, it has been developed along with examples which probably do not reflect 100% your domain. Therefore, you should 
rather write your own DDD components using interfaces provided by this library to force members of your team or yourself 
on thinking in terms of immutable objects and their interaction.

## Installation

Using Composer:

```
composer require andrzejkupczyk/ddd-building-blocks
```

## Example usages

```php
<?php
use WebGarden\Model\Assert\Assert;
use WebGarden\Model\ValueObject\ValueObject;

class NaturalNumber implements ValueObject
{
    protected $value;

    public static function fromNative()
    {
        return new static(func_get_arg(0));
    }

    public function __construct($value)
    {
        Assert::that($value)->integer()->greaterOrEqualThan(0);

        $this->value = $value;
    }

    public function sameValueAs(object $valueObject)
    {
        return $valueObject instanceof ValueObject
            && get_called_class() == get_class($valueObject)
            && $this->toNative() === $valueObject->toNative();        
    }

    public function toNative()
    {
        return $this->value;
    }

    public function __toString()
    {
        return strval($this->value);
    }
}
```
