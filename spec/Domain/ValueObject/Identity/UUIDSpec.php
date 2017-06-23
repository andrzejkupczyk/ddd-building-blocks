<?php

namespace spec\Domain\ValueObject\Identity;

use Domain\Assert\InvalidValueException;
use Domain\Contracts\ValueObject\ValueObject;
use Domain\ValueObject\Identity\UUID;
use PhpSpec\ObjectBehavior;

class UUIDSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType(UUID::class);
        $this->shouldImplement(ValueObject::class);
    }

    public function it_invalidates_itself()
    {
        $value = '123456';

        $this->beConstructedWith($value);
        $this->shouldThrow(InvalidValueException::class)->duringInstantiation();
    }

    public function it_validates_itself()
    {
        $value = '00000000-0000-0000-0000-000000000000';

        $this->beConstructedWith($value);
        $this->shouldNotThrow(InvalidValueException::class)->duringInstantiation();
    }
}
