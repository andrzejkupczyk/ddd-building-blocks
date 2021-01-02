<?php

declare(strict_types=1);

namespace WebGarden\Model\ValueObject;

use Assert\AssertionChain;
use WebGarden\Model\Assert\Assert;

/**
 * @psalm-immutable
 */
trait Validation
{
    /**
     * Start validation on a value.
     *
     * @param mixed $value
     */
    protected static function validate($value): AssertionChain
    {
        return static::startAssertionChain($value);
    }

    /**
     * Start an assertion chain that is happening on the passed value.
     *
     * @param mixed $value
     */
    private static function startAssertionChain($value): AssertionChain
    {
        return Assert::that($value);
    }
}
