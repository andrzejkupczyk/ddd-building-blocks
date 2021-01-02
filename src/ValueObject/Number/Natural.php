<?php

declare(strict_types=1);

namespace WebGarden\Model\ValueObject\Number;

use Assert\AssertionChain;

/**
 * @psalm-immutable
 */
class Natural extends Integer
{
    protected static function validate($value): AssertionChain
    {
        return parent::validate($value)->greaterThan(0);
    }
}
