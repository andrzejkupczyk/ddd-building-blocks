<?php

namespace WebGarden\Model\Entity;

use WebGarden\Model\ValueObject\ValueObject;

interface Identifiable
{
    /**
     * Return identity of the entity.
     *
     * @return ValueObject
     */
    public function id(): ValueObject;
}
