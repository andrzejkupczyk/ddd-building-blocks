<?php

namespace Domain\Entity;

interface Comparable
{
    /**
     * Computes the equality on the entity identity.
     *
     * @param  Identifiable $entity
     * @return bool
     */
    public function equals(Identifiable $entity): bool;
}
