<?php

namespace Domain\Model\Assert;

use Model\Assert\Assertion;
use Model\Assert\LazyAssertionException;

class Assert extends \Assert\Assert
{
    /** @var string */
    protected static $assertionClass = Assertion::class;

    /** @var string */
    protected static $lazyAssertionExceptionClass = LazyAssertionException::class;
}
