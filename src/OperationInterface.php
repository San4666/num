<?php

namespace Num;

interface OperationInterface
{
    /**
     * @param float $a
     * @param float $b
     *
     * @return float
     */
    function calculate(float $a, float $b): float;

}