<?php

namespace Num\Factory;

use Num\Calculator\Division;
use Num\Calculator\Minus;
use Num\Calculator\Multiply;
use Num\Calculator\Plus;
use Num\Calculator\Pow;
use Num\Calculator\ReversePow;
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