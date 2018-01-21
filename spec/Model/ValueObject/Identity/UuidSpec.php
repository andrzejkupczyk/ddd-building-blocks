<?php

namespace spec\WebGarden\Model\ValueObject\Identity;

use PhpSpec\ObjectBehavior;
use WebGarden\Model\Assert\AssertionException;
use WebGarden\Model\ValueObject\Identity\Uuid;

class UuidSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->beConstructedWith('00000000-0000-0000-0000-000000000000');

        $this->shouldHaveType(Uuid::class);
    }

    function it_can_be_generated()
    {
        $this->beConstructedThrough('generate');

        $this->shouldHaveType(Uuid::class);
    }

    function it_invalidates_itself()
    {
        $this->beConstructedWith('123456');

        $this->shouldThrow(AssertionException::class)->duringInstantiation();
    }

    function it_validates_itself()
    {
        $this->beConstructedWith('00000000-0000-0000-0000-000000000000');

        $this->shouldNotThrow(AssertionException::class)->duringInstantiation();
    }
}
