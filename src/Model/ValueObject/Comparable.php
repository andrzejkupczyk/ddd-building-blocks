<?php

namespace WebGarden\Model\ValueObject;

/**
 * @deprecated Will be removed in the next major version
 */
interface Comparable
{
    /**
     * Compare two ValueObject and tell whether they can be considered equal.
     *
     * @param object&\WebGarden\Model\ValueObject\ValueObject $valueObject
     *
     * @return bool
     */
    public function sameValueAs(object $valueObject);
}
