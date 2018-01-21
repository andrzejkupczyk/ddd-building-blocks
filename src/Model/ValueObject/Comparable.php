<?php

namespace WebGarden\Model\ValueObject;

interface Comparable
{
    /**
     * Compare two ValueObject and tell whether they can be considered equal.
     *
     * @param  ValueObject $object
     *
     * @return bool
     */
    public function sameValueAs(ValueObject $object);
}
