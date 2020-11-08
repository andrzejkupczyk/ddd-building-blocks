<?php

declare(strict_types=1);

namespace WebGarden\Model\ValueObject\Number;

use Assert\AssertionChain;

/**
 * @psalm-immutable
 */
final class Natural extends Integer
{
    protected static function assertThat(int $value): AssertionChain
    {
        return parent::assertThat($value)->greaterThan(0);
    }
}
