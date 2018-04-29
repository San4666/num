<?php

namespace Num\Calculator;

use Num\CalculatorInterface;

/**
 * Class Minus
 */
class Minus implements CalculatorInterface
{
    /**
     * @inheritdoc
     */
    public function calculate(float $a, float $b): float
    {
        return $a - $b;
    }
}