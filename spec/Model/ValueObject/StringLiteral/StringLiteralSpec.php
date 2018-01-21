<?php

namespace spec\WebGarden\Model\ValueObject\StringLiteral;

use PhpSpec\ObjectBehavior;
use WebGarden\Model\Assert\AssertionException;
use WebGarden\Model\ValueObject\StringLiteral\StringLiteral;

class StringLiteralSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->beConstructedWith('foobar');

        $this->shouldHaveType(StringLiteral::class);
    }

    function it_checks_if_value_is_empty()
    {
        $this->beConstructedWith('');

        $this->isEmpty()->shouldReturn(true);
    }

    function it_invalidates_itself()
    {
        $this->beConstructedWith(123);

        $this->shouldThrow(AssertionException::class)->duringInstantiation();
    }

    function it_validates_itself()
    {
        $this->beConstructedWith('foobar');

        $this->shouldNotThrow(AssertionException::class)->duringInstantiation();
    }
}
