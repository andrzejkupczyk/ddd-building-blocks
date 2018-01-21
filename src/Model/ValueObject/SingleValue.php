<?php

namespace WebGarden\Model\ValueObject;

use WebGarden\Model\Assert\Assert;

abstract class SingleValue implements ValueObject
{
    protected $value;

    /**
     * {@inheritDoc}
     */
    public static function fromNative()
    {
        return new static(func_get_arg(0));
    }

    public function __construct($value)
    {
        $this->assertThat($value);
        $this->value = $value;
    }

    /**
     * {@inheritDoc}
     */
    final public function sameValueAs(ValueObject $valueObject)
    {
        return $this->toNative() === $valueObject->toNative()
            && get_called_class() == get_class($valueObject);
    }

    /**
     * @param  mixed $value
     *
     * @return \Assert\AssertionChain
     */
    protected function assertThat($value)
    {
        return Assert::that($value);
    }
}
