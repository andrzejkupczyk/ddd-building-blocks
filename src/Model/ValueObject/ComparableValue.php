<?php

namespace WebGarden\Model\ValueObject;

trait ComparableValue
{
    /**
     * @see Comparable::sameValueAs()
     * @param  object|\WebGarden\Model\ValueObject\ValueObject $valueObject
     * @return bool
     */
    public function sameValueAs(object $valueObject)
    {
        return get_called_class() == get_class($valueObject)
            && $this->toNative() === $valueObject->toNative();
    }
}
