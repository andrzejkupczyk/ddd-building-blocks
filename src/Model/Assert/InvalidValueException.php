<?php

namespace Model\Assert;

class InvalidValueException extends \InvalidArgumentException
{
    /** @var array */
    private $messages;

    /** @var mixed */
    private $valueObjectClass;

    public function __construct($valueObjectClass, array $messages)
    {
        $this->valueObjectClass = $valueObjectClass;
        $this->messages = $messages;

        parent::__construct(sprintf('Invalid value for "%s"', $valueObjectClass));
    }

    public function messages(): array
    {
        return $this->messages;
    }

    public function valueObjectClass()
    {
        return $this->valueObjectClass;
    }
}
