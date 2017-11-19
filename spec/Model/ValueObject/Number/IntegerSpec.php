<?php

namespace spec\WebGarden\Model\ValueObject\Number;

use PhpSpec\ObjectBehavior;
use WebGarden\Model\Assert\AssertionException;
use WebGarden\Model\ValueObject\Number\Integer;
use WebGarden\Model\ValueObject\SingleValue;

class IntegerSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->beConstructedWith(123);

        $this->shouldHaveType(Integer::class);
        $this->shouldHaveType(SingleValue::class);
    }

    function it_should_throw_an_exception_when_value_is_not_an_integer()
    {
        $this->beConstructedWith(123.30);

        $this->shouldThrow(AssertionException::class)->duringInstantiation();
    }
}
