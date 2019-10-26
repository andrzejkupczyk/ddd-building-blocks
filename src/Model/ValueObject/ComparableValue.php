<?php

namespace WebGarden\Model\ValueObject;

/**
 * @deprecated Will be replaced with other trait in the next major version
 */
trait ComparableValue
{
    /**
     * @see Comparable::sameValueAs()
     *
     * @param object&\WebGarden\Model\ValueObject\ValueObject $valueObject
     *
     * @return bool
     */
    public function sameValueAs(object $valueObject)
    {
        return $valueObject instanceof NativeValue
            && get_called_class() == get_class($valueObject)
            && $this->toNative() === $valueObject->toNative();
    }

    /**
     * Return the native value of an object.
     *
     * @see \WebGarden\Model\ValueObject\NativeValue
     * @return mixed
     */
    abstract public function toNative();
}
