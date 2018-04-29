<?php

namespace Num\Factory;

use Num\Operation\Division;
use Num\Operation\Minus;
use Num\Operation\Multiply;
use Num\Operation\Plus;
use Num\Operation\Pow;
use Num\Operation\ReversePow;
use Num\Service\ArgumentFinder;

/**
 * Class ArgumentFindersFactory
 */
class ArgumentFindersFactory
{
    /**
     * @return ArgumentFinder[]
     */
    public static function factory(): array
    {
        return [
            new ArgumentFinder(new Division(), new Multiply()),
            new ArgumentFinder(new Minus(), new Plus()),
        ];
    }
}