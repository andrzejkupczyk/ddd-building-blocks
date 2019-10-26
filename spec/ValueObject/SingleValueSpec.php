<?php

declare(strict_types=1);

namespace spec\WebGarden\Model\ValueObject;

use PhpSpec\ObjectBehavior;
use WebGarden\Model\ValueObject\SingleValue;

class SingleValueSpec extends ObjectBehavior
{
    function let()
    {
        $this->beAnInstanceOf(DummySingleValue::class);
        $this->beConstructedWith('foo');
    }

    function it_compares_itself_against_other_value_objects(DummySingleValue $stub)
    {
        $same = new DummySingleValue('foo');
        $other = new DummySingleValue('bar');

        $this->sameValueAs($same)->shouldBe(true);
        $this->sameValueAs($other)->shouldBe(false);
        $this->sameValueAs($stub)->shouldBe(false);
    }

    function it_returns_string_representation_of_the_object()
    {
        $this->__toString()->shouldBe('foo');
    }
}

class DummySingleValue extends SingleValue
{
}
