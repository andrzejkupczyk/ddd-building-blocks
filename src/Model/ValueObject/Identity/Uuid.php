<?php

namespace Model\ValueObject\Identity;

use Model\ValueObject\StringLiteral\StringLiteral;
use Ramsey\Uuid\Uuid as BaseUuid;

class Uuid extends StringLiteral
{
    public static function generate()
    {
        return new static(BaseUuid::uuid4()->toString());
    }

    /**
     * {@inheritDoc}
     */
    protected function assertThat($value)
    {
        return parent::assertThat($value)->uuid();
    }
}
