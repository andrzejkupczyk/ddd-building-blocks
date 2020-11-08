<?php

declare(strict_types=1);

namespace WebGarden\Model\ValueObject\Identity;

use Ramsey\Uuid\Uuid as BaseUuid;
use WebGarden\Model\Assert\Assert;
use WebGarden\Model\ValueObject\StringLiteral\StringLiteral;

/**
 * @psalm-immutable
 */
final class Uuid extends StringLiteral
{
    public function __construct(string $value)
    {
        Assert::that(BaseUuid::isValid($value))->true(
            \sprintf('Value "%s" is not a valid UUID', $value)
        );

        parent::__construct($value);
    }

    public static function generate(): self
    {
        return new self(BaseUuid::uuid4()->toString());
    }

    public static function createEmpty(): self
    {
        return new self(BaseUuid::NIL);
    }
}
