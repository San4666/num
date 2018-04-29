<?php

namespace Num;

interface CalculatorInterface
{
    /**
     * @param float $a
     * @param float $b
     *
     * @return float
     */
    function calculate(float $a, float $b): float;
}