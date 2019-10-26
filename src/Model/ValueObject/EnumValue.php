<?php

namespace WebGarden\Model\ValueObject;

use MyCLabs\Enum\Enum;
use WebGarden\Model\Assert\Assert;

/**
 * @deprecated Will be replaced with the WebGarden\Model\ValueObject\Enum\Enum in the next major version
 */
abstract class EnumValue extends Enum implements ValueObject
{
    use ComparableValue;

    /** @var string|\Assert\Assert */
    protected $assert = Assert::class;

    public static function fromNative()
    {
        return new static(func_get_arg(0));
    }

    public function __construct($value)
    {
        $this->assert::that(parent::isValid($value))->true(
            sprintf("Value '%s' is not part of the enum %s.", $value, get_called_class())
        );

        parent::__construct($value);
    }

    final public function toNative()
    {
        return parent::getValue();
    }
}
