<?php

declare(strict_types=1);

namespace WebGarden\Model\ValueObject;

abstract class SingleValue implements ValueObject
{
    use Comparision;
    use Validation;

    /** @var mixed */
    protected $value;

    final public function __construct($value)
    {
        $this->assertThat($value);

        $this->value = $value;
    }

    public function __toString()
    {
        return (string) $this->value;
    }
}
