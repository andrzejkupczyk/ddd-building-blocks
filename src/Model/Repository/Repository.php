<?php

namespace WebGarden\Model\Repository;

interface Repository
{
    /**
     * Return an entity identified by the given ValueObject.
     *
     * @param \WebGarden\Model\ValueObject\ValueObject $identity
     *
     * @return \WebGarden\Model\Entity\Identifiable
     * @deprecated Will be renamed to "find" in the next major version
     */
    public function get($identity);

    /**
     * Return all entities.
     *
     * @return array
     * @deprecated Will be renamed to "all" in the next major version
     */
    public function getAll();

    /**
     * Store the given entity.
     *
     * @param \WebGarden\Model\Entity\Identifiable $entity
     */
    public function store($entity);
}
