<?php

namespace WebGarden\Model\ValueObject\Number;

use WebGarden\Model\ValueObject\SingleValue;

class Integer extends SingleValue
{
    public function __toString()
    {
        return strval($this->value);
    }

    protected function assertThat($value)
    {
        return parent::assertThat($value)->integer();
    }
}
