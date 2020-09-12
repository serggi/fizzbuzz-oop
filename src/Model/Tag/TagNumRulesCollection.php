<?php

declare(strict_types=1);

namespace FizzBuzzApp\Model\Tag;

class TagNumRulesCollection
{
    private $tagNumRules;

    public function __construct(array $tagNumRules)
    {
        $this->tagNumRules = $tagNumRules;
    }

    public function find(int $number, int $defaultValue)
    {
        /** @var TagNumRule $tag */
        foreach ($this->tagNumRules as $tag) {
            if ($tag->isSuccess($number)) {
                return $tag;
            }
        }

        return  $defaultValue;
    }
}
