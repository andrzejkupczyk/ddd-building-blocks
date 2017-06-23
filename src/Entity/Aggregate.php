<?php

namespace Domain\Entity;

use Domain\Contracts\Entity\Identifiable;
use Domain\Contracts\ValueObject\ValueObject as Identifier;
use Domain\Entity\Exception\InvalidMethodException;

/**
 * @method bool equals(Identifiable $entity)
 * @method Identifier id()
 */
abstract class Aggregate
{
    /** @var Entity */
    private $root;

    public function __construct(Entity $root)
    {
        $this->root = $root;
    }

    public function __call(string $name, array $arguments)
    {
        if (!method_exists($this->root, $name)) {
            throw new InvalidMethodException($name);
        }

        return call_user_func_array([$this->root, $name], $arguments);
    }
}
