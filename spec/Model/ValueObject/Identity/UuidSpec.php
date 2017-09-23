<?php

namespace spec\WebGarden\Model\ValueObject\Identity;

use WebGarden\Model\Assert\AssertionException;
use WebGarden\Model\ValueObject\Identity\Uuid;
use WebGarden\Model\ValueObject\ValueObject;
use PhpSpec\ObjectBehavior;

class UuidSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $value = '00000000-0000-0000-0000-000000000000';

        $this->beConstructedWith($value);
        $this->shouldHaveType(Uuid::class);
        $this->shouldImplement(ValueObject::class);
    }

    function it_can_be_generated()
    {
        $this->beConstructedThrough('generate');

        $this->shouldHaveType(Uuid::class);
    }

    function it_invalidates_itself()
    {
        $value = '123456';

        $this->beConstructedWith($value);
        $this->shouldThrow(AssertionException::class)->duringInstantiation();
    }

    function it_validates_itself()
    {
        $value = '00000000-0000-0000-0000-000000000000';

        $this->beConstructedWith($value);
        $this->shouldNotThrow(AssertionException::class)->duringInstantiation();
    }
}
