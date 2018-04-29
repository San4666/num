<?php

namespace Num\Operation;

use Num\OperationInterface;

class Multiply implements OperationInterface
{
    /**
     * @inheritdoc
     */
    public function calculate(float $a, float $b): float
    {
        return $a * $b;
    }
}