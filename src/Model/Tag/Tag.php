<?php

declare(strict_types=1);

namespace FizzBuzzApp\Model\Tag;

class Tag
{
    private $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }
}
