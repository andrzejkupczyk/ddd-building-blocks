<?php

namespace Model\Repository;

use Model\Entity\Identifiable;
use Model\ValueObject\ValueObject;

interface Repository
{
    public function get(ValueObject $identity);

    public function getAll(): array;

    public function store(Identifiable $entity);
}
