<?php

namespace Domain\Entity;

use Domain\ValueObjects\ValueObject as Identifier;

abstract class Entity implements Comparable, Identifiable
{
    /**
     * @var Identifier
     */
    private $id;

    /**
     * {@inheritDoc}
     */
    public function id(): Identifier
    {
        return $this->id;
    }

    /**
     * {@inheritDoc}
     */
    public function equals(Identifiable $entity): bool
    {
        return $this->id()->sameValueAs($entity->id());
    }
}
