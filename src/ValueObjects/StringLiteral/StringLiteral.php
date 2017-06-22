<?php

namespace Domain\ValueObjects\StringLiteral;

use Domain\ValueObjects\Exception\InvalidNativeArgumentException;
use Domain\ValueObjects\ValueObject;

class StringLiteral extends ValueObject
{
    /** @var string */
    protected $value;

    public function __construct($value)
    {
        if (false === is_string($value)) {
            throw new InvalidNativeArgumentException($value, ['string']);
        }

        $this->value = $value;
    }

    public static function fromNative(): ValueObject
    {
        return new static(func_get_arg(0));
    }

    public function toNative(): string
    {
        return $this->value;
    }

    public function isEmpty(): bool
    {
        return strlen($this->toNative()) == 0;
    }

    public function __toString()
    {
        return $this->toNative();
    }
}
