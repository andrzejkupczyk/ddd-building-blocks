<?php

namespace spec\Domain\ValueObject\Identity;

use Domain\ValueObject\Identity\UUID;
use PhpSpec\ObjectBehavior;

class UUIDSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(UUID::class);
    }
}
