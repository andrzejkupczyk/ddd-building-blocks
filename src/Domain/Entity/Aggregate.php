<?php

namespace Domain\Entity;

use Domain\Entity\Exception\InvalidMethodException;
use Domain\ValueObject\ValueObject as Identifier;

/**
 * @method bool equals(Identifiable $entity)
 * @method Identifier id()
 */
abstract class Aggregate
{
    /** @var Entity */
    private $aggregateRoot;

    public function __construct(Entity $aggregateRoot)
    {
        $this->aggregateRoot = $aggregateRoot;
    }

    public function __call(string $name, array $arguments)
    {
        if (!method_exists($this->aggregateRoot, $name)) {
            throw new InvalidMethodException($name);
        }

        return call_user_func_array([$this->aggregateRoot, $name], $arguments);
    }
}
