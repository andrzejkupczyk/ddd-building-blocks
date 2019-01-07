<?php

namespace WebGarden\Model\ValueObject;

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
