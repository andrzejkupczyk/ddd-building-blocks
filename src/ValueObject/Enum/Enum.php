<?php

declare(strict_types=1);

namespace WebGarden\Model\ValueObject\Enum;

use MyCLabs\Enum\Enum as BaseEnum;
use WebGarden\Model\Assert\Assert;
use WebGarden\Model\ValueObject\ValueObject;

/**
 * @psalm-immutable
 */
abstract class Enum extends BaseEnum implements ValueObject
{
    /**
     * @param mixed $value
     */
    final public function __construct($value)
    {
        Assert::that(self::isValid($value))->true(
            \sprintf('Value "%s" is not part of the enum %s.', $value, static::class)
        );

        parent::__construct($value);
    }

    public function __toString(): string
    {
        return parent::__toString();
    }

    public function sameValueAs(ValueObject $other): bool
    {
        return $this->equals($other);
    }
}
