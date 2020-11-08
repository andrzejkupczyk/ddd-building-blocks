<?php

declare(strict_types=1);

namespace spec\WebGarden\Model\ValueObject\Number;

use PhpSpec\ObjectBehavior;
use WebGarden\Model\Assert\AssertionFailed;
use WebGarden\Model\ValueObject\Number\Integer;

class IntegerSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->beConstructedWith(123);

        $this->shouldHaveType(Integer::class);
        $this->shouldNotThrow(AssertionFailed::class)->duringInstantiation();
    }
}
