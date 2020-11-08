<?php

declare(strict_types=1);

namespace WebGarden\Model\ValueObject\NullValue;

use WebGarden\Model\ValueObject\SimpleComparison;
use WebGarden\Model\ValueObject\ValueObject;

/**
 * @psalm-immutable
 */
final class NullValue implements ValueObject
{
    use SimpleComparison;

    public function __toString(): string
    {
        return (string) null;
    }
}
