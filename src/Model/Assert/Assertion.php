<?php

namespace WebGarden\Model\Assert;

class Assertion extends \Assert\Assertion
{
    protected static $exceptionClass = AssertionException::class;
}
