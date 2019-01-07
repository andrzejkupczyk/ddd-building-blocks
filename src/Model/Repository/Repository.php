<?php

namespace WebGarden\Model\Repository;

interface Repository
{
    /**
     * Return an entity identified by the given ValueObject.
     *
     * @param  \WebGarden\Model\ValueObject\ValueObject $identity
     * @return \WebGarden\Model\Entity\Identifiable
     */
    public function get($identity);

    /**
     * Return all entities.
     *
     * @return array
     */
    public function getAll();

    /**
     * Store the given entity.
     *
     * @param  \WebGarden\Model\Entity\Identifiable $entity
     */
    public function store($entity);
}
