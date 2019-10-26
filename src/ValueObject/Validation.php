<?php

declare(strict_types=1);

namespace WebGarden\Model\ValueObject;

use WebGarden\Model\Assert\Assert;

trait Validation
{
    /** @var \Assert\Assert|string */
    protected $assert = Assert::class;

    /**
     * Start an assertion chain that is happening on the passed value.
     *
     * @param mixed $value
     *
     * @return \Assert\AssertionChain
     */
    protected function assertThat($value)
    {
        return $this->assert::that($value);
    }
}
