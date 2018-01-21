<?php

namespace WebGarden\Model\ValueObject;

use MyCLabs\Enum\Enum;
use WebGarden\Model\Assert\Assert;

abstract class EnumValue extends Enum implements ValueObject
{
    use ComparableValue;

    /**
     * {@inheritDoc}
     */
    public static function fromNative()
    {
        return new static(func_get_arg(0));
    }

    public function __construct($value)
    {
        Assert::that(parent::isValid($value))->true(
            sprintf("Value '%s' is not part of the enum %s.", $value, get_called_class())
        );

        $this->value = $value;
    }

    /**
     * {@inheritDoc}
     */
    final public function toNative()
    {
        return parent::getValue();
    }
}
