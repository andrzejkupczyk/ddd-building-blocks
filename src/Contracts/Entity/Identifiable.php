<?php

namespace Domain\Contracts\Entity;

use Domain\Contracts\ValueObject\ValueObject;

interface Identifiable
{
    /**
     * Gets the entity id.
     *
     * @return ValueObject
     */
    public function id(): ValueObject;
}
