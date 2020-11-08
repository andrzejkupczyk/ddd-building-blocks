<?php

declare(strict_types=1);

namespace WebGarden\Model\Repository;

use ArrayObject;
use RuntimeException;
use WebGarden\Model\Entity\Entity;
use WebGarden\Model\ValueObject\ValueObject;

abstract class InMemory implements WritableRepository
{
    /** @var \ArrayObject<string, \WebGarden\Model\Entity\Entity> */
    protected ArrayObject $aggregates;

    public function __construct(?ArrayObject $aggregates = null)
    {
        $this->aggregates = $aggregates ?? new ArrayObject();
    }

    public function add(Entity $aggregate): void
    {
        if ($this->contains($aggregate)) {
            throw new RuntimeException(
                "The repository already contains the aggregate identified by {$aggregate->identity()}"
            );
        }

        $this->aggregates->offsetSet((string) $aggregate->identity(), $aggregate);
    }

    public function get(ValueObject $identity): ?Entity
    {
        return $this->aggregates->offsetGet((string) $identity) ?: null;
    }

    public function count(): int
    {
        return $this->aggregates->count();
    }

    public function contains(Entity $aggregate): bool
    {
        return $this->aggregates->offsetExists((string) $aggregate->identity());
    }

    public function remove(ValueObject $identity): void
    {
        if (!$this->aggregates->offsetExists((string) $identity)) {
            throw new RuntimeException(
                "The repository does not contain the aggregate identified by {$identity}"
            );
        }

        $this->aggregates->offsetUnset((string) $identity);
    }

    public function update(Entity $aggregate): Entity
    {
        if (!$this->contains($aggregate)) {
            throw new RuntimeException(
                "The repository does not contain the aggregate identified by {$aggregate->identity()}"
            );
        }

        $this->aggregates->offsetSet((string) $aggregate->identity(), $aggregate);

        return $aggregate;
    }
}
