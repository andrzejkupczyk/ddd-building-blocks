<?php

namespace Model\ValueObject;

interface NativeValue
{
    /**
     * Returns an object taking PHP native value(s) as argument(s).
     *
     * @return static
     */
    public static function fromNative();

    /**
     * Returns the native value of an object.
     *
     * @return mixed
     */
    public function toNative();
}
