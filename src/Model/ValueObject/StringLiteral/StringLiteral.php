<?php

namespace WebGarden\Model\ValueObject\StringLiteral;

use WebGarden\Model\ValueObject\SingleValue;

class StringLiteral extends SingleValue
{
    /**
     * Check whether the value is empty.
     *
     * @return bool
     */
    public function isEmpty()
    {
        return $this->toNative() === '';
    }

    public function __toString()
    {
        return $this->toNative();
    }

    protected function assertThat($value)
    {
        return parent::assertThat($value)->string();
    }
}
