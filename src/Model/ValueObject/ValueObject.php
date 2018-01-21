<?php

namespace WebGarden\Model\ValueObject;

interface ValueObject extends Comparable, NativeValue
{
    /**
     * Return a string representation of the object.
     *
     * @return string
     */
    public function __toString();
}
