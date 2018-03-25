<?php

namespace WebGarden\Model\ValueObject;

use WebGarden\Model\Assert\Assert;

abstract class SingleValue implements ValueObject
{
    use ComparableValue;

    protected $value;

    public static function fromNative()
    {
        return new static(func_get_arg(0));
    }

    public function __construct($value)
    {
        $this->assertThat($value);
        $this->value = $value;
    }

    public function toNative()
    {
        return $this->value;
    }

    /**
     * Start an assertion chain that is happening on the passed value.
     *
     * @param  mixed $value
     *
     * @return \Assert\AssertionChain
     * @SuppressWarnings(PHPMD.StaticAccess)
     */
    protected function assertThat($value)
    {
        return Assert::that($value);
    }
}
