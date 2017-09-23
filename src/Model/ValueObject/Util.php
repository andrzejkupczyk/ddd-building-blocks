<?php

namespace Model\ValueObject;

/**
 * Utility class for methods used across the value objects.
 */
class Util
{
    /**
     * Tells whether two objects are of the same class.
     *
     * @param  Comparable $first
     * @param  Comparable $second
     *
     * @return bool
     */
    public static function classEquals(Comparable $first, Comparable $second): bool
    {
        return get_class($first) === get_class($second);
    }

    /**
     * Returns full namespaced class as a string.
     *
     * @param  Comparable $object
     *
     * @return string
     */
    public static function getClassAsString(Comparable $object): string
    {
        return get_class($object);
    }
}
