<?php

namespace spec\WebGarden\Model\ValueObject\Number;

use PhpSpec\ObjectBehavior;
use WebGarden\Model\Assert\AssertionException;
use WebGarden\Model\ValueObject\Number\Integer;
use WebGarden\Model\ValueObject\Number\Natural;

class NaturalSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->beConstructedWith(123);

        $this->shouldHaveType(Natural::class);
        $this->shouldHaveType(Integer::class);
    }

    function it_should_throw_an_exception_if_number_is_less_then_zero()
    {
        $this->beConstructedWith(-123);

        $this->shouldThrow(AssertionException::class)->duringInstantiation();
    }
}
