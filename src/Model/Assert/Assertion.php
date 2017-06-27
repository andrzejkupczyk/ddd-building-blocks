<?php

namespace Model\Assert;

use Assert\Assertion as BaseAssertion;

class Assertion extends BaseAssertion
{
    protected static $exceptionClass = AssertionFailedException::class;
}
