<?php

namespace Domain\Contracts\ValueObject;

interface ValueObject extends Comparable, NativeValue
{
    /**
     * Returns a string representation of the object.
     */
    public function __toString();
}
