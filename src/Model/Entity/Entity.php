<?php

namespace Model\Entity;

use Model\ValueObject\ValueObject;

abstract class Entity implements Equatable, Identifiable
{
    /** @var ValueObject */
    private $id;

    /**
     * {@inheritDoc}
     */
    public function sameIdentityAs(Identifiable $entity): bool
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
