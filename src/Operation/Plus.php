<?php

namespace Num\Operation;


use Num\OperationInterface;

class Plus implements OperationInterface
{
    /**
     * @inheritdoc
     */
   public function calculate(float $a, float $b): float
    {
        return $a + $b;
    }
}