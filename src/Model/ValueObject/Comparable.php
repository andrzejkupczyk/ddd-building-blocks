<?php

namespace WebGarden\Model\ValueObject;

interface Comparable
{
    /**
     * Compare two ValueObject and tell whether they can be considered equal.
     *
     * @param  object|\WebGarden\Model\ValueObject\ValueObject $valueObject
     * @return bool
     */
    public function sameValueAs(object $valueObject);
}
