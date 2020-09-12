<?php

declare(strict_types=1);

namespace FizzBuzzApp\Model\Tag;

use FizzBuzzApp\Model\Strategy\StrategyInterface;

class TagNumRule
{
    private $tag;
    private $strategy;

    public function __construct(Tag $tag, StrategyInterface $strategy)
    {
        $this->tag      = $tag;
        $this->strategy = $strategy;
    }

    public function isSuccess(int $number)
    {
        return $this->strategy->isTrue($number);
    }

    public function __toString(): string
    {
        return (string)$this->tag->getValue();
    }
}
