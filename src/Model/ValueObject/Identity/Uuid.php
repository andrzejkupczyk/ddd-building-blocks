<?php

namespace Model\ValueObject\Identity;

use Model\Assert\Assertion;
use Model\ValueObject\SingleValue;
use Ramsey\Uuid\Uuid as BaseUuid;

class Uuid extends SingleValue
{
    /** @var string */
    protected $value;

    public static function generateAsString(): string
    {
        $uuid = new static();

        return $uuid->toNative();
    }

    public function __construct($value = null)
    {
        Assertion::nullOrUuid($value);

        $this->value = $value ?: BaseUuid::uuid4()->toString();
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
