<?php


namespace Num\Calculator;


use Num\CalculatorInterface;

class Division implements CalculatorInterface
{
    /**
     * @inheritdoc
     */
    public function calculate(float $a, float $b): float
    {
        return $a / $b;
    }
}