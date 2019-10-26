<?php

declare(strict_types=1);

namespace WebGarden\Model\Assert;

use Assert\Assertion as BaseAssertion;

class Assertion extends BaseAssertion
{
    protected static $exceptionClass = AssertionFailed::class;
}
