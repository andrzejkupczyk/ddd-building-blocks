<?php

declare(strict_types=1);

namespace WebGarden\Model\ValueObject\Identity;

use Ramsey\Uuid\Uuid as BaseUuid;
use WebGarden\Model\ValueObject\StringLiteral\StringLiteral;

/**
 * @psalm-immutable
 */
final class Uuid extends StringLiteral
{
    public static function generate(): self
    {
        return new self(BaseUuid::uuid4()->toString());
    }

    public static function createEmpty(): self
    {
        return new self(BaseUuid::NIL);
    }

    protected static function validate($value)
    {
        return parent::validate(BaseUuid::isValid($value))
            ->true("Value \"{$value}\" is not a valid UUID");
    }
}
