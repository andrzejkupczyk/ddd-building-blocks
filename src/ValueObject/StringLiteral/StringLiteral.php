<?php

declare(strict_types=1);

namespace WebGarden\Model\ValueObject\StringLiteral;

use WebGarden\Model\ValueObject\SimpleComparison;
use WebGarden\Model\ValueObject\Validation;
use WebGarden\Model\ValueObject\ValueObject;

/**
 * @psalm-immutable
 */
class StringLiteral implements ValueObject
{
    use SimpleComparison;
    use Validation;

    private string $value;

    final public function __construct(string $value)
    {
        static::validate($value);

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
