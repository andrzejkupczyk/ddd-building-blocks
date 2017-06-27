<?php

namespace Model\ValueObject;

abstract class SingleValue implements ValueObject
{
    protected $value;

    public static function fromNative()
    {
        return new static(func_get_arg(0));
    }

    public function sameValueAs(ValueObject $valueObject): bool
    {
        if (false === Util::classEquals($this, $valueObject)) {
            return false;
        }

        return $this->toNative() === $valueObject->toNative();
    }
}
