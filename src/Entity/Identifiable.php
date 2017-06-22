<?php

namespace Domain\Entity;

use Domain\ValueObject\ValueObject as Identifier;

interface Identifiable
{
    /**
     * Computes the hash code on the entity identity.
     *
     * @return string Hash code built from all non-transient fields
     */
    public function hashCode(): string;

    /**
     * Gets the entity id.
     *
     * @return Identifier
     */
    public function id(): Identifier;
}
