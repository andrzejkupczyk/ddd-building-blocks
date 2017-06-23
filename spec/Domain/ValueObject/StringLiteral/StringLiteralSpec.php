<?php

namespace spec\Domain\ValueObject\StringLiteral;

use Domain\ValueObject\StringLiteral\StringLiteral;
use PhpSpec\ObjectBehavior;

class StringLiteralSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $value = 'foobar';

        $this->beConstructedWith($value);
        $this->shouldHaveType(StringLiteral::class);
    }
}
