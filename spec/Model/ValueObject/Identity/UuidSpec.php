<?php

namespace spec\Model\ValueObject\Identity;

use Model\Assert\AssertionException;
use Model\ValueObject\Identity\Uuid;
use Model\ValueObject\ValueObject;
use PhpSpec\ObjectBehavior;

class UuidSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $value = '00000000-0000-0000-0000-000000000000';

        $this->beConstructedWith($value);
        $this->shouldHaveType(Uuid::class);
        $this->shouldImplement(ValueObject::class);
    }

    public function it_invalidates_itself()
    {
        $value = '123456';

        $this->beConstructedWith($value);
        $this->shouldThrow(AssertionException::class)->duringInstantiation();
    }

    public function it_validates_itself()
    {
        $value = '00000000-0000-0000-0000-000000000000';

        $this->beConstructedWith($value);
        $this->shouldNotThrow(AssertionException::class)->duringInstantiation();
    }
}
