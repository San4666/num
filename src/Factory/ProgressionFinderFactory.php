<?php

namespace Num\Factory;


use Num\Service\ProgressionFinder;

/**
 * Class ProgressionFinderFactory
 */
class ProgressionFinderFactory
{
    /**
     * @return ProgressionFinder
     */
    public static function Factory() : ProgressionFinder
    {
        return new ProgressionFinder(ArgumentFindersFactory::factory());
    }
}