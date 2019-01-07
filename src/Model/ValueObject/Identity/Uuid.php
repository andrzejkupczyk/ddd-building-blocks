<?php

namespace WebGarden\Model\ValueObject\Identity;

use Ramsey\Uuid\Uuid as BaseUuid;
use WebGarden\Model\ValueObject\StringLiteral\StringLiteral;

class Uuid extends StringLiteral
{
    /**
     * @return \WebGarden\Model\ValueObject\Identity\Uuid
     * @throws \Exception if there's something wrong with generating an UUID
     */
    public static function generate()
    {
        return new static(BaseUuid::uuid4()->toString());
    }

    protected function assertThat($value)
    {
        return parent::assertThat($value)->uuid();
    }
}
