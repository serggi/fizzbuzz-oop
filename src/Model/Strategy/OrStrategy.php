<?php

declare(strict_types=1);

namespace FizzBuzzApp\Model\Strategy;

use FizzBuzzApp\Model\Condition\ConditionInterface;

class OrStrategy implements StrategyInterface
{
    private $conditions;

    public function __construct($conditionsOrStrategy)
    {
        $this->conditions = $conditionsOrStrategy;
    }

    public function isTrue(int $number): bool
    {
        $result = false;
        /** @var ConditionInterface $condition */
        foreach ($this->conditions as $condition) {
            if ($condition->isTrue($number)) {
                $result = true;
            }
        }

        return $result;
    }
}
