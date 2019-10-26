<?php

declare(strict_types=1);

namespace WebGarden\Model\ValueObject\Enum;

use MyCLabs\Enum\Enum as BaseEnum;
use WebGarden\Model\ValueObject\Validation;
use WebGarden\Model\ValueObject\ValueObject;

abstract class Enum extends BaseEnum implements ValueObject
{
    use Validation;

    final public function __construct($value)
    {
        $this->assertThat(self::isValid($value))->true(
            \sprintf("Value '%s' is not part of the enum %s.", $value, static::class)
        );

        parent::__construct($value);
    }

    public function sameValueAs(ValueObject $object): bool
    {
        return $this->equals($object);
    }
}
