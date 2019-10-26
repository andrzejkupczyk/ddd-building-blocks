<?php

declare(strict_types=1);

namespace WebGarden\Model\ValueObject\StringLiteral;

use WebGarden\Model\ValueObject\SingleValue;

class StringLiteral extends SingleValue
{
    /**
     * Check whether the value is empty.
     *
     * @return bool
     */
    public function isEmpty(): bool
    {
        return $this->value === '';
    }

    protected function assertThat($value)
    {
        return parent::assertThat($value)->string();
    }
}
