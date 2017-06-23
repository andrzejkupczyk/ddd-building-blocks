<?php

namespace Domain\Assert;

use Respect\Validation\Exceptions\NestedValidationException;
use Respect\Validation\Validatable;

class Assert
{
    /** @var string */
    private $valueObjectClass;

    public function __construct($valueObjectClass)
    {
        $this->valueObjectClass = $valueObjectClass;
    }

    public function is(Validatable $validator, $value)
    {
        try {
            $validator->assert($value);
        } catch (NestedValidationException $exception) {
            throw new InvalidValueException($this->valueObjectClass, $exception->getMessages());
        }
    }
}
