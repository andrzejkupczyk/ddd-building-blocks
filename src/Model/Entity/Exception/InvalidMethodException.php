<?php

namespace WebGarden\Model\Entity\Exception;

class InvalidMethodException extends \BadMethodCallException
{
    public function __construct($method)
    {
        $this->message = sprintf('Method "%s" does not exist', $method);
    }
}
