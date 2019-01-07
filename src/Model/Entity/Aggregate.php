<?php

namespace WebGarden\Model\Entity;

/**
 * @method bool sameIdentityAs(Identifiable $entity)
 * @method \WebGarden\Model\ValueObject\ValueObject id()
 */
abstract class Aggregate implements Identifiable
{
    /** @var Entity */
    private $aggregateRoot;

    public function __construct(Entity $aggregateRoot)
    {
        $this->aggregateRoot = $aggregateRoot;
    }

    public function __call(string $name, array $arguments)
    {
        if (method_exists($this->aggregateRoot, $name)) {
            return call_user_func_array([$this->aggregateRoot, $name], $arguments);
        }

        throw new \BadMethodCallException(
            sprintf("Method %s::%s() does not exist.", static::class, $name)
        );
    }
}
