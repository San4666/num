<?php

namespace Num\Operation;

use Num\OperationInterface;

/**
 * Class Minus
 */
class Minus implements OperationInterface
{
    /**
     * @inheritdoc
     */
    public function calculate(float $a, float $b): float
    {
        return $a - $b;
    }
}