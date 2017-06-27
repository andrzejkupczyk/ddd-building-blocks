<?php

namespace Model\ValueObject\StringLiteral;

use Model\Assert\Assertion;
use Model\ValueObject\SingleValue;

class StringLiteral extends SingleValue
{
    /** @var string */
    protected $value;

    public function __construct($value)
    {
        Assertion::string($value);

        $this->value = $value;
    }

    public function isEmpty(): bool
    {
        return strlen($this->toNative()) == 0;
    }

    public function toNative(): string
    {
        return $this->value;
    }

    public function __toString()
    {
        return $this->toNative();
    }
}
