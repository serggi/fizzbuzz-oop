<?php

declare(strict_types=1);

namespace FizzBuzzApp\Model\Strategy;

interface StrategyInterface
{
    public function isTrue(int $number): bool;
}
