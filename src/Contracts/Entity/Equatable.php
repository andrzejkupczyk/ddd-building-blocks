<?php

namespace Domain\Contracts\Entity;

interface Equatable
{
    /**
     * Computes the equality on the entity identity.
     *
     * @param  Identifiable $entity
     * @return bool
     */
    public function equals(Identifiable $entity): bool;
}
