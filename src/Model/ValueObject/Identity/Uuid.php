<?php

namespace WebGarden\Model\ValueObject\Identity;

use Ramsey\Uuid\Uuid as BaseUuid;
use WebGarden\Model\ValueObject\StringLiteral\StringLiteral;

class Uuid extends StringLiteral
{
    public static function generate(): Uuid
    {
        return new self(BaseUuid::uuid4()->toString());
    }

    protected function assertThat($value)
    {
        return parent::assertThat($value)->uuid();
    }
}
