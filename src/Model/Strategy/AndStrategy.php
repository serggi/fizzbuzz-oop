<?php

declare(strict_types=1);

namespace FizzBuzzApp\Model\Strategy;

use FizzBuzzApp\Model\Condition\DivideCondition;

class AndStrategy implements StrategyInterface
{
    private $conditions;

    public function __construct($conditionsOrStrategy)
    {
        $this->conditions = $conditionsOrStrategy;
    }

    public function isTrue(int $number): bool
    {
        /** @var DivideCondition $condition */
        foreach ($this->conditions as $condition) {
            if (!$condition->isTrue($number)) {
                return false;
            }

            return true;
        }
    }
}
