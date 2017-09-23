<?php

namespace Model\Entity;

interface Equatable
{
    /**
     * Computes the equality on the entity identity.
     *
     * @param  Identifiable $entity
     *
     * @return bool
     */
    public function sameIdentityAs(Identifiable $entity): bool;
}
