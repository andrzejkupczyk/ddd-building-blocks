<?php

namespace WebGarden\Model\Assert;

class Assert extends \Assert\Assert
{
    /** @var string */
    protected static $assertionClass = Assertion::class;

    /** @var string */
    protected static $lazyAssertionExceptionClass = LazyAssertionException::class;
}
