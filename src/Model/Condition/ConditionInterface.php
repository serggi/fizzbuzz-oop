<?php

declare(strict_types=1);

namespace FizzBuzzApp\Model\Condition;

interface ConditionInterface
{
    public function isTrue(int $number): bool;
}
