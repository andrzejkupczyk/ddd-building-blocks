<?php

declare(strict_types=1);

namespace WebGarden\Model\ValueObject\Identity;

use WebGarden\Model\ValueObject\StringLiteral\StringLiteral;

class Uuid extends StringLiteral
{
    protected function assertThat($value)
    {
        return parent::assertThat($value)->uuid();
    }
}
