<?php

namespace WebGarden\Model\ValueObject;

interface ValueObject extends Comparable, NativeValue
{
    /**
     * Returns a string representation of the object.
     *
     * @return string
     */
    public function __toString();
}
