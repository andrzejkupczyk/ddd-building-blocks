<?php

declare(strict_types=1);

namespace WebGarden\Model\ValueObject\Number;

use WebGarden\Model\ValueObject\SimpleComparison;
use WebGarden\Model\ValueObject\Validation;
use WebGarden\Model\ValueObject\ValueObject;

/**
 * @psalm-immutable
 */
class Integer implements ValueObject
{
    use SimpleComparison;
    use Validation;

    private int $value;

    final public function __construct(int $value)
    {
        static::validate($value);

        $this->value = $value;
    }

    public function __toString(): string
    {
        return (string) $this->value;
    }
}
