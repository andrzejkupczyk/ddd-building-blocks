<?php

namespace Domain\ValueObjects;

use Domain\ValueObjects\Util\Comparator;

abstract class ValueObject implements Comparable
{
    /** @var mixed */
    protected $value;

    /**
     * Returns an object taking PHP native value(s) as argument(s).
     */
    abstract public static function fromNative(): ValueObject;

    /**
     * {@inheritDoc}
     */
    public function sameValueAs(ValueObject $valueObject): bool
    {
        if (false === Comparator::classEquals($this, $valueObject)) {
            return false;
        }

        return $this->toNative() === call_user_func([$valueObject, 'toNative']);
    }

    /**
     * Returns the value of the ValueObject.
     *
     * @return mixed
     */
    public function toNative()
    {
        return $this->value;
    }

    /**
     * Returns a string representation of the object.
     */
    abstract public function __toString();
}
