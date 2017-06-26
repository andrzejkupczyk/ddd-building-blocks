<?php

namespace Domain\ValueObject;

/**
 * Utility class for methods used across the value objects.
 */
class Util
{
    /**
     * Tells whether two objects are of the same class.
     *
     * @param  object $first
     * @param  object $second
     * @return bool
     */
    public static function classEquals($first, $second): bool
    {
        return get_class($first) === get_class($second);
    }

    /**
     * Returns full namespaced class as a string.
     *
     * @param  object $object
     * @return string
     */
    public static function getClassAsString($object): string
    {
        return get_class($object);
    }
}
