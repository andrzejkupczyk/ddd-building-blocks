<?php

namespace WebGarden\Model\Entity;

interface Identifiable
{
    /**
     * Return identity of the entity.
     *
     * @return \WebGarden\Model\ValueObject\ValueObject
     */
    public function id();
}
