<?php

namespace spec\WebGarden\Model\Repository;

use PhpSpec\ObjectBehavior;
use WebGarden\Model\Entity\Aggregate;
use WebGarden\Model\Repository\InMemory;
use WebGarden\Model\ValueObject\Identity\Uuid;

class InMemorySpec extends ObjectBehavior
{
    function let()
    {
        $this->beAnInstanceOf(DummyRepository::class);
    }

    function it_adds_an_aggregate(Aggregate $aggregate)
    {
        $aggregate->identity()->willReturn(Uuid::createEmpty());

        $this->add($aggregate);

        $this->contains($aggregate)->shouldBe(true);
    }

    function it_prevents_from_adding_already_existing_aggregate(Aggregate $aggregate)
    {
        $aggregate->identity()->willReturn(Uuid::createEmpty());

        $this->add($aggregate);

        $this->shouldThrow(\RuntimeException::class)->during('add', [$aggregate]);
    }

    function it_returns_aggregate(Aggregate $aggregate)
    {
        $aggregate->identity()->willReturn(Uuid::createEmpty());

        $this->add($aggregate);

        $this->get(Uuid::createEmpty())->shouldEqual($aggregate);
    }
}

class DummyRepository extends InMemory
{
}
