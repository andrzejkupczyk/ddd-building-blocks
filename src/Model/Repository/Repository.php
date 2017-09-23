<?php

namespace WebGarden\Model\Repository;

use WebGarden\Model\Entity\Identifiable;
use WebGarden\Model\ValueObject\ValueObject;

interface Repository
{
    public function get(ValueObject $identity);

    public function getAll(): array;

    public function store(Identifiable $entity);
}
