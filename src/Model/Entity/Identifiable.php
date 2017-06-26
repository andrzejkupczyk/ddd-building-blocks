<?php

namespace Model\Entity;

use Model\ValueObject\ValueObject;

interface Identifiable
{
    /**
     * Gets the entity id.
     *
     * @return ValueObject
     */
    public function id(): ValueObject;
}
