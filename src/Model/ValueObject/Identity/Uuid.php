<?php

namespace Model\ValueObject\Identity;

use Model\ValueObject\StringLiteral\StringLiteral;
use Ramsey\Uuid\Uuid as BaseUuid;

class Uuid extends StringLiteral
{
    public static function generateAsString(): string
    {
        $uuid = new static(BaseUuid::uuid4()->toString());

        return $uuid->toNative();
    }

    /**
     * {@inheritDoc}
     */
    protected function assertThat($value)
    {
        return parent::assertThat($value)->uuid();
    }
}
