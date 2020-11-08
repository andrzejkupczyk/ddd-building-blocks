<?php

declare(strict_types=1);

namespace WebGarden\Model\ValueObject\Number;

use Assert\AssertionChain;
use WebGarden\Model\Assert\Assert;
use WebGarden\Model\ValueObject\SimpleComparison;
use WebGarden\Model\ValueObject\ValueObject;

/**
 * @psalm-immutable
 */
class Integer implements ValueObject
{
    use SimpleComparison;

    private int $value;

    public function __construct(int $value)
    {
        static::assertThat($value);

        $this->value = $value;
    }

    public function __toString(): string
    {
        return (string) $this->value;
    }

    protected static function assertThat(int $value): AssertionChain
    {
        return Assert::that($value)->integer();
    }
}
