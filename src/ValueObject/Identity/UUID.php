<?php

namespace Domain\ValueObject\Identity;

use Domain\ValueObject\Exception\InvalidNativeArgumentException;
use Domain\ValueObject\StringLiteral\StringLiteral;
use Domain\ValueObject\ValueObject;
use Ramsey\Uuid\Uuid as BaseUuid;
use Respect\Validation\Validator;

class UUID extends StringLiteral
{
    /** @var BaseUuid */
    protected $value;

    public static function fromNative(): ValueObject
    {
        return new static(func_get_arg(0));
    }

    public static function generateAsString(): string
    {
        $uuid = new static();

        return $uuid->toNative();
    }

    public function __construct($value = null)
    {
        if (null !== $value) {
            if (!$this->validator()->validate($value)) {
                throw new InvalidNativeArgumentException($value, ['UUID string']);
            }
            $uuid = $value;
        }

        parent::__construct(strval($uuid ?? BaseUuid::uuid4()));
    }

    protected function validator(): Validator
    {
        return parent::validator()->regex('/' . BaseUuid::VALID_PATTERN . '/');
    }
}
