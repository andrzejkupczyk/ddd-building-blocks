<?php

namespace Domain\Entity;

use Domain\ValueObject\ValueObject;

abstract class Entity implements Equatable, Identifiable
{
    /** @var ValueObject */
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
    public function id(): ValueObject
    {
        return $this->id;
    }
}
