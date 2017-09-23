<?php

namespace Model\ValueObject;

use Model\Assert\Assert;

abstract class SingleValue implements ValueObject
{
    protected $value;

    public static function fromNative()
    {
        return new static(func_get_arg(0));
    }

    public function __construct($value)
    {
        $this->assertThat($value);
        $this->value = $value;
    }

    public function sameValueAs(ValueObject $valueObject): bool
    {
        if (false === Util::classEquals($this, $valueObject)) {
            return false;
        }

        return $this->toNative() === $valueObject->toNative();
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
