<?php

namespace Model\ValueObject\StringLiteral;

use Model\ValueObject\SingleValue;

class StringLiteral extends SingleValue
{
    public function isEmpty(): bool
    {
        return $this->toNative() === '';
    }

    public function toNative(): string
    {
        return $this->value;
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
