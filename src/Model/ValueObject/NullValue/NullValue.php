<?php

namespace WebGarden\Model\ValueObject\NullValue;

use BadMethodCallException;
use WebGarden\Model\ValueObject\ComparableValue;
use WebGarden\Model\ValueObject\ValueObject;

class NullValue implements ValueObject
{
    use ComparableValue;

    public function toNative()
    {
        return null;
    }

    /**
     * @throws \BadMethodCallException
     */
    public static function fromNative()
    {
        throw new BadMethodCallException('Cannot create a NullValue object via this method.');
    }

    public function __toString()
    {
        return strval(null);
    }
}
