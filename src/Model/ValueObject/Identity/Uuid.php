<?php

namespace Model\ValueObject\Identity;

use Model\Assert\Assertion;
use Model\ValueObject\StringLiteral\StringLiteral;
use Ramsey\Uuid\Uuid as BaseUuid;

class Uuid extends StringLiteral
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

        parent::__construct($value ?: BaseUuid::uuid4()->toString());
    }
}
