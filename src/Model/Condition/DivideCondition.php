<?php

declare(strict_types=1);

namespace FizzBuzzApp\Model\Condition;

class DivideCondition implements ConditionInterface
{
    private $divider;

    public function __construct($divider)
    {
        $this->divider = $divider;
    }

    public function isTrue(int $number): bool
    {
        return $number % $this->divider === 0;
    }
}
