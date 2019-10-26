<?php

declare(strict_types=1);

namespace spec\WebGarden\Model\ValueObject\Enum;

use PhpSpec\ObjectBehavior;
use WebGarden\Model\Assert\AssertionFailed;
use WebGarden\Model\ValueObject\Enum\Enum;

class EnumSpec extends ObjectBehavior
{
    function let()
    {
        $this->beAnInstanceOf(DummyEnum::class);
    }

    function it_checks_whether_the_given_value_is_a_part_of_enum()
    {
        $this->beConstructedWith('foo');

        $this->shouldNotThrow(AssertionFailed::class)->duringInstantiation();
    }

    function it_checks_whether_the_given_value_is_not_a_part_of_enum()
    {
        $this->beConstructedWith('baz');

        $this->shouldThrow(AssertionFailed::class)->duringInstantiation();
    }

    function it_compares_itself_against_other_value_objects()
    {
        $this->beConstructedWith('foo');
        $same = new DummyEnum('foo');
        $other = new DummyEnum('bar');

        $this->sameValueAs($same)->shouldBe(true);
        $this->sameValueAs($other)->shouldBe(false);
    }

    function it_returns_string_representation_of_the_object()
    {
        $this->beConstructedWith('foo');

        $this->__toString()->shouldBe('foo');
    }
}

class DummyEnum extends Enum
{
    private const FOO = 'foo';
    private const BAR = 'bar';
}
