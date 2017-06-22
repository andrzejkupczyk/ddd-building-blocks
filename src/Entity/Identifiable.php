<?php

namespace Domain\Entity;

use Domain\ValueObjects\ValueObject as Identifier;

interface Identifiable
{
    /**
     * Gets the entity id.
     *
     * @return Identifier
     */
    public function id(): Identifier;

    /**
     * Computes the hash code on the entity identity.
     *
     * @return string Hash code built from all non-transient fields
     */
    public function hashCode(): string;
}
