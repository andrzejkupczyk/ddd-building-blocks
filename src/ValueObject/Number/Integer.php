<?php

declare(strict_types=1);

namespace WebGarden\Model\ValueObject\Number;

use WebGarden\Model\ValueObject\SingleValue;

class Integer extends SingleValue
{
    protected function assertThat($value)
    {
        return parent::assertThat($value)->integer();
    }
}
