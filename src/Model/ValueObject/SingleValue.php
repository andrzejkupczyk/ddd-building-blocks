<?php

namespace WebGarden\Model\ValueObject;

use WebGarden\Model\Assert\Assert;

abstract class SingleValue implements ValueObject
{
    use ComparableValue;

    /** @var string|\Assert\Assert */
    protected $assert = Assert::class;

    /** @var mixed */
    protected $value;

    /**
     * @deprecated Will be removed in the next major version
     */
    public static function fromNative()
    {
        return new static(func_get_arg(0));
    }

    public function __construct($value)
    {
        $this->assertThat($value);
        $this->value = $value;
    }

    /**
     * @deprecated Will be removed in the next major version
     */
    public function toNative()
    {
        return $this->value;
    }

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
