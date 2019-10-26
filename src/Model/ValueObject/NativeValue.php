<?php

namespace WebGarden\Model\ValueObject;

/**
 * @deprecated Will be removed in the next major version
 */
interface NativeValue
{
    /**
     * Return an object taking PHP native value(s) as argument(s).
     *
     * @return self
     */
    public static function fromNative();

    /**
     * Return the native value of an object.
     *
     * @return mixed
     */
    public function toNative();
}
