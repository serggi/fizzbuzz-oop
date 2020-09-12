<?php

use FizzBuzzApp\Model\Condition\DivideCondition;
use FizzBuzzApp\Model\Printer;
use FizzBuzzApp\Model\Strategy\AndStrategy;
use FizzBuzzApp\Model\Strategy\OrStrategy;
use FizzBuzzApp\Model\Tag\Tag;
use FizzBuzzApp\Model\Tag\TagNumRule;
use FizzBuzzApp\Model\Tag\TagNumRulesCollection;

require_once 'vendor/autoload.php';
const MAX_NUM = 100;

try {
    $numberTag = new TagNumRulesCollection([
        new TagNumRule(
            new Tag('FizzBuzz'),
            new OrStrategy([
                new DivideCondition(3),
                new DivideCondition(4),
                new DivideCondition(5),
            ]),
        ),
        new TagNumRule(
            new Tag('Fizz'),
            new AndStrategy([
                new DivideCondition(3),
            ]),
        ),
        new TagNumRule(
            new Tag('Buzz'),
            new AndStrategy([
                new DivideCondition(5),
            ]),
        ),
    ]);

    for ($number = 1; $number <= MAX_NUM; $number++) {
        (new Printer(
            $numberTag->find(
                $number,
                (new Tag($number))->getValue()
            )
        ))->print();
    }
} catch (Exception $e) {
    echo $e->getMessage().PHP_EOL;
}
