<?php

declare(strict_types=1);

namespace WebGarden\Model\ValueObject\Number;

class Natural extends Integer
{
    protected function assertThat($value)
    {
        return parent::assertThat($value)->greaterThan(0);
    }
}
