<?php

namespace WebGarden\Model\Assert;

/** @SuppressWarnings(PHPMD.LongVariable) */
class Assert extends \Assert\Assert
{
    protected static $assertionClass = Assertion::class;

    protected static $lazyAssertionExceptionClass = LazyAssertionException::class;
}
