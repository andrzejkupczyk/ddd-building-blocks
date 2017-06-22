<?php

namespace Domain\ValueObject\StringLiteral;

use Domain\ValueObject\Exception\InvalidNativeArgumentException;
use Domain\ValueObject\ValueObject;
use Respect\Validation\Validator;

class StringLiteral extends ValueObject
{
    /** @var string */
    protected $value;

    public static function fromNative(): ValueObject
    {
        return new static(func_get_arg(0));
    }

    public function __construct($value)
    {
        if (!$this->validator()->validate($value)) {
            throw new InvalidNativeArgumentException($value, ['string']);
        }

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

    protected function validator(): Validator
    {
        return parent::validator()->stringType();
    }
}
