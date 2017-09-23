<?php

namespace WebGarden\Model\Entity;

use WebGarden\Model\ValueObject\ValueObject;

abstract class Entity implements Equatable, Identifiable
{
    /** @var ValueObject */
    protected $id;

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
