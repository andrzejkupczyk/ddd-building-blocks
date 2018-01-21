<?php

namespace WebGarden\Model\Entity;

interface Equatable
{
    /**
     * Compute the equality on the entity identity.
     *
     * @param  Identifiable $entity
     *
     * @return bool
     */
    public function sameIdentityAs(Identifiable $entity): bool;
}
