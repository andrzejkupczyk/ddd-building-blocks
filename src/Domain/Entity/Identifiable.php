<?php

namespace Domain\Entity;

use Domain\ValueObject\ValueObject;

interface Identifiable
{
    /**
     * Gets the entity id.
     *
     * @return ValueObject
     */
    public function id(): ValueObject;
}
