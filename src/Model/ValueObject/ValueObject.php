<?php

namespace Model\ValueObject;

interface ValueObject extends Comparable, NativeValue
{
    /**
     * Returns a string representation of the object.
     */
    public function __toString();
}
