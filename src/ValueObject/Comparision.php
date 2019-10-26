<?php

declare(strict_types=1);

namespace WebGarden\Model\ValueObject;

trait Comparision
{
    public function sameValueAs(ValueObject $object): bool
    {
        return static::class === \get_class($object)
            && \strcmp((string) $this, (string) $object) === 0;
    }
}
