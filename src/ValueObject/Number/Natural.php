<?php

declare(strict_types=1);

namespace WebGarden\Model\ValueObject\Number;

/**
 * @psalm-immutable
 */
class Natural extends Integer
{
    protected static function validate($value)
    {
        return parent::validate($value)->greaterThan(0);
    }
}
