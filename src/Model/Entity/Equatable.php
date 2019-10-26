<?php

namespace WebGarden\Model\Entity;

/**
 * @deprecated Will be removed in the next major version
 */
interface Equatable
{
    /**
     * Compute the equality on the entity identity.
     *
     * @param Identifiable $entity
     *
     * @return bool
     */
    public function sameIdentityAs(Identifiable $entity);
}
