<?php

namespace spec\WebGarden\Model\ValueObject;

use PhpSpec\ObjectBehavior;
use WebGarden\Model\Assert\AssertionException;
use WebGarden\Model\ValueObject\EnumValue;

class EnumValueSpec extends ObjectBehavior
{
    function let()
    {
        $this->beAnInstanceOf(DummyEnumValue::class);
    }

    function it_is_initializable()
    {
        $this->beConstructedWith('foo');

        $this->shouldHaveType(EnumValue::class);
    }

    function it_invalidates_itself()
    {
        $this->beConstructedWith(123);

        $this->shouldThrow(AssertionException::class)->duringInstantiation();
    }

    function it_validates_itself()
    {
        $this->beConstructedWith('foo');

        $this->shouldNotThrow(AssertionException::class)->duringInstantiation();
    }

    function its_value_is_compared_properly()
    {
        $foo = new DummyEnumValue('foo');
        $bar = new DummyEnumValue('bar');

        $this->beConstructedWith('foo');

        $this->sameValueAs($foo)->shouldBe(true);
        $this->sameValueAs($bar)->shouldBe(false);
    }
}

class DummyEnumValue extends EnumValue
{
    const FOO = 'foo';
    const BAR = 'bar';
}

