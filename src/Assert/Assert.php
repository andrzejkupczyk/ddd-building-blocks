<?php

declare(strict_types=1);

namespace WebGarden\Model\Assert;

use Assert\Assert as BaseAssert;

class Assert extends BaseAssert
{
    protected static $assertionClass = Assertion::class;

    protected static $lazyAssertionExceptionClass = LazyAssertionFailed::class;
}
