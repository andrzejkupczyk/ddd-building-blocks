<?php

declare(strict_types=1);

namespace WebGarden\Model\ValueObject\NullValue;

use WebGarden\Model\ValueObject\Comparision;
use WebGarden\Model\ValueObject\ValueObject;

class NullValue implements ValueObject
{
    use Comparision;

    public function __toString()
    {
        return (string) null;
    }
}
