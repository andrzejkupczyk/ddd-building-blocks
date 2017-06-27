<?php

namespace spec\Model\ValueObject\StringLiteral;

use Model\Assert\AssertionFailedException;
use Model\ValueObject\StringLiteral\StringLiteral;
use Model\ValueObject\ValueObject;
use PhpSpec\ObjectBehavior;

class StringLiteralSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $value = 'foobar';

        $this->beConstructedWith($value);
        $this->shouldHaveType(StringLiteral::class);
        $this->shouldImplement(ValueObject::class);
    }

    public function it_checks_if_value_is_empty()
    {
        $value = '';

        $this->beConstructedWith($value);
        $this->isEmpty()->shouldReturn(true);
    }

    public function it_invalidates_itself()
    {
        $value = 123;

        $this->beConstructedWith($value);
        $this->shouldThrow(AssertionFailedException::class)->duringInstantiation();
    }

    public function it_validates_itself()
    {
        $value = 'foobar';

        $this->beConstructedWith($value);
        $this->shouldNotThrow(AssertionFailedException::class)->duringInstantiation();
    }
}
