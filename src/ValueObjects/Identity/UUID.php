<?php

namespace Domain\ValueObjects\Identity;

use Domain\ValueObjects\Exception\InvalidNativeArgumentException;
use Domain\ValueObjects\StringLiteral\StringLiteral;
use Domain\ValueObjects\ValueObject;
use Ramsey\Uuid\Uuid as BaseUuid;

class UUID extends StringLiteral
{
    /** @var BaseUuid */
    protected $value;

    public function __construct($value = null)
    {
        if (null !== $value) {
            $pattern = '/' . BaseUuid::VALID_PATTERN . '/';

            if (!preg_match($pattern, $value)) {
                throw new InvalidNativeArgumentException($value, ['UUID string']);
            }

            $uuid = $value;
        }

        parent::__construct(strval($uuid ?? BaseUuid::uuid4()));
    }

    public static function fromNative(): ValueObject
    {
        return new static(func_get_arg(0));
    }

    public static function generateAsString(): string
    {
        $uuid = new static();

        return $uuid->toNative();
    }
}
