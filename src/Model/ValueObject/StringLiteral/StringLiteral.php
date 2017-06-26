<?php

namespace Model\ValueObject\StringLiteral;

use Model\ValueObject\SingleValue;
use Respect\Validation\Validator;

class StringLiteral extends SingleValue
{
    /** @var string */
    protected $value;

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

    protected function validator(): Validator
    {
        return parent::validator()->stringType();
    }
}
