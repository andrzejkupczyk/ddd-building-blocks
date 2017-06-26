<?php

namespace Domain\ValueObject\Identity;

use Domain\ValueObject\SingleValue;
use Ramsey\Uuid\Uuid as BaseUuid;
use Respect\Validation\Validator;

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
        parent::__construct($value ?: BaseUuid::uuid4()->toString());
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
        return parent::validator()->regex('/' . BaseUuid::VALID_PATTERN . '/');
    }
}
