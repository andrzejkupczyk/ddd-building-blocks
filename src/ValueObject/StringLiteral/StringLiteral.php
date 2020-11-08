<?php

declare(strict_types=1);

namespace WebGarden\Model\ValueObject\StringLiteral;

use WebGarden\Model\ValueObject\SimpleComparison;
use WebGarden\Model\ValueObject\ValueObject;

/**
 * @psalm-immutable
 */
class StringLiteral implements ValueObject
{
    use SimpleComparison;

    private string $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public function __toString(): string
    {
        return $this->value;
    }

    /**
     * Check whether the value is empty.
     */
    public function isEmpty(): bool
    {
        return $this->value === '';
    }
}
