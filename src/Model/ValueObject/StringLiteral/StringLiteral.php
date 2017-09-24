<?php

namespace WebGarden\Model\ValueObject\StringLiteral;

use WebGarden\Model\ValueObject\SingleValue;

class StringLiteral extends SingleValue
{
    public function isEmpty(): bool
    {
        return $this->toNative() === '';
    }

    /**
     * {@inheritDoc}
     */
    public function toNative(): string
    {
        return $this->value;
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {
        return $this->toNative();
    }

    /**
     * {@inheritDoc}
     */
    protected function assertThat($value)
    {
        return parent::assertThat($value)->string();
    }
}
