<?php

namespace WebGarden\Model\ValueObject;

trait ComparableValue
{
    /**
     * @see Comparable::sameValueAs()
     *
     * @param  ValueObject $object
     *
     * @return bool
     */
    public function sameValueAs(ValueObject $object)
    {
        return $this->toNative() === $object->toNative()
            && get_called_class() == get_class($object);
    }
}
