<?php


namespace Num\Calculator;

use DivisionByZeroError;
use Num\CalculatorInterface;

class Division implements CalculatorInterface
{
    /**
     * @inheritdoc
     */
    public function calculate(float $a, float $b): float
    {
        if(0 == $b) {
            throw new DivisionByZeroError();
        }
        return $a / $b;
    }
}