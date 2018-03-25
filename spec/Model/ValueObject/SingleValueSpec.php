<?php

namespace spec\WebGarden\Model\ValueObject;

use PhpSpec\ObjectBehavior;
use WebGarden\Model\ValueObject\SingleValue;

class SingleValueSpec extends ObjectBehavior
{
    function let()
    {
        $this->beAnInstanceOf(DummySingleValue::class);
    }

    function its_value_is_compared_properly(DummySingleValue $stub)
    {
        $same = new DummySingleValue('foo');
        $other = new DummySingleValue('bar');
        $stub->toNative()->willReturn('foo');

        $this->beConstructedWith('foo');

        $this->sameValueAs($same)->shouldBe(true);
        $this->sameValueAs($other)->shouldBe(false);
        $this->sameValueAs($stub)->shouldBe(false);
    }
}

class DummySingleValue extends SingleValue
{
    public function __toString()
    {
        // not applicable
    }
}
