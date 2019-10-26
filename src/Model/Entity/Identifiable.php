<?php

namespace WebGarden\Model\Entity;

/**
 * @deprecated Will be removed in the next major version
 */
interface Identifiable
{
    /**
     * Return identity of the entity.
     *
     * @return \WebGarden\Model\ValueObject\ValueObject
     */
    public function id();
}
