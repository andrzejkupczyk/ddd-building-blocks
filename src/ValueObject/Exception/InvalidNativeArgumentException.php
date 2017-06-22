<?php

namespace Domain\ValueObject\Exception;

class InvalidNativeArgumentException extends \InvalidArgumentException
{
    public function __construct($value, array $allowedTypes)
    {
        $this->message = sprintf(
            'Argument "%s" is invalid. Allowed types for argument are "%s".',
            $value,
            implode(', ', $allowedTypes)
        );
    }
}
