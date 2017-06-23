<?php

namespace spec\Domain\ValueObject\StringLiteral;

use Domain\Assert\InvalidValueException;
use Domain\Contracts\ValueObject\ValueObject;
use Domain\ValueObject\StringLiteral\StringLiteral;
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

    public function it_invalidates_itself()
    {
        $value = 123;

        $this->beConstructedWith($value);
        $this->shouldThrow(InvalidValueException::class)->duringInstantiation();
    }

    public function it_validates_itself()
    {
        $value = 'foobar';

        $this->beConstructedWith($value);
        $this->shouldNotThrow(InvalidValueException::class)->duringInstantiation();
    }
}
