<?php

namespace Domain\Entity;

use Domain\ValueObject\ValueObject as Identifier;

abstract class Entity implements Equatable, Identifiable
{
    /** @var Identifier */
    private $id;

    /**
     * {@inheritDoc}
     */
    public function equals(Identifiable $entity): bool
    {
        return $this->id()->sameValueAs($entity->id());
    }

    /**
     * {@inheritDoc}
     */
    public function id(): Identifier
    {
        return $this->id;
    }
}
