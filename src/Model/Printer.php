<?php

declare(strict_types=1);

namespace FizzBuzzApp\Model;

class Printer
{
    private $context;

    public function __construct($context)
    {
        $this->context = $context;
    }

    public function print()
    {
        echo $this->context.PHP_EOL;
    }
}
