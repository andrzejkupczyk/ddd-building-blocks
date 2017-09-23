<?php

namespace WebGarden\Model\Entity;

use WebGarden\Model\ValueObject\ValueObject;

interface Identifiable
{
    /**
     * Gets the entity id.
     *
     * @return ValueObject
     */
    public function id(): ValueObject;
}
