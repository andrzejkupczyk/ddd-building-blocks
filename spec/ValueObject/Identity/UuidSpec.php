<?php

declare(strict_types=1);

namespace spec\WebGarden\Model\ValueObject\Identity;

use PhpSpec\ObjectBehavior;
use WebGarden\Model\Assert\AssertionFailed;
use WebGarden\Model\ValueObject\Identity\Uuid;

class UuidSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->beConstructedWith('00000000-0000-0000-0000-000000000000');

        $this->shouldHaveType(Uuid::class);
        $this->shouldNotThrow(AssertionFailed::class)->duringInstantiation();
    }

    function it_creates_an_empty_uuid()
    {
        $this->beConstructedThrough('createEmpty');

        $this->shouldHaveType(Uuid::class);
    }

    function it_generates_random_uuid()
    {
        $this->beConstructedThrough('generate');

        $this->shouldHaveType(Uuid::class);
    }

    function it_should_throw_an_exception_when_value_is_not_a_valid_uuid()
    {
        $this->beConstructedWith('123456');

        $this->shouldThrow(AssertionFailed::class)->duringInstantiation();
    }
}
