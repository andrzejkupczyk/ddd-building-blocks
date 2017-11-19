<?php

namespace WebGarden\Model\ValueObject\Number;

use WebGarden\Model\ValueObject\SingleValue;

class Integer extends SingleValue
{
    /**
     * {@inheritDoc}
     */
    public function toNative()
    {
        return $this->value;
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {
        return strval($this->value);
    }

    /**
     * {@inheritDoc}
     */
    protected function assertThat($value)
    {
        return parent::assertThat($value)->integer();
    }
}
