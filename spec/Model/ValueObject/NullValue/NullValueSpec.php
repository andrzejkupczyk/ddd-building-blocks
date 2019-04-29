<?php

namespace spec\WebGarden\Model\ValueObject\NullValue;

use PhpSpec\ObjectBehavior;
use WebGarden\Model\ValueObject\NullValue\NullValue;

class NullValueSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->beConstructedWith();

        $this->shouldHaveType(NullValue::class);
    }

    function it_returns_string_representation_of_the_object()
    {
        $this->__toString()->shouldBe('');
    }

    function it_should_throw_an_exception_when_creating_using_native_value()
    {
        $this->shouldThrow(\BadMethodCallException::class)->during('fromNative');
    }
}
