<?php

namespace WebGarden\Model\Repository;

use WebGarden\Model\Entity\Identifiable;
use WebGarden\Model\ValueObject\ValueObject;

interface Repository
{
    /**
     * Return an entity identified by the given ValueObject.
     *
     * @param  ValueObject $identity
     *
     * @return mixed
     */
    public function get(ValueObject $identity);

    /**
     * Return all entities.
     *
     * @return array
     */
    public function getAll(): array;

    /**
     * Store the given entity.
     *
     * @param  Identifiable $entity
     *
     * @return mixed
     */
    public function store(Identifiable $entity);
}
