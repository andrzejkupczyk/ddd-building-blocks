<?php

declare(strict_types=1);

namespace spec\WebGarden\Model\ValueObject\NullValue;

use PhpSpec\ObjectBehavior;
use WebGarden\Model\ValueObject\NullValue\NullValue;
use WebGarden\Model\ValueObject\StringLiteral\StringLiteral;

class NullValueSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(NullValue::class);
    }

    function it_returns_string_representation_of_the_object()
    {
        $this->__toString()->shouldBe('');
    }

    function its_value_is_not_the_same_as_the_empty_string()
    {
        $emptyString = new StringLiteral('');

        $this->sameValueAs($emptyString)->shouldBe(false);
    }
}
