<?php

namespace WebGarden\Model\ValueObject\Number;

class Natural extends Integer
{
    /**
     * {@inheritDoc}
     */
    protected function assertThat($value)
    {
        return parent::assertThat($value)->greaterOrEqualThan(0);
    }
}
