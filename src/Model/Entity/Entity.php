<?php

namespace WebGarden\Model\Entity;

abstract class Entity implements Equatable, Identifiable
{
    /** @var \WebGarden\Model\ValueObject\ValueObject */
    protected $id;

    public function sameIdentityAs(Identifiable $entity): bool
    {
        return $this->id()->sameValueAs($entity->id());
    }

    /**
     * @return \WebGarden\Model\ValueObject\ValueObject
     */
    public function id()
    {
        return $this->id;
    }
}
