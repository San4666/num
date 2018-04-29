<?php

namespace Num\Service;


use Num\Exception\Exception;
use Num\CalculatorInterface;

/**
 * Class ArgumentFinder
 */
class ArgumentFinder
{
    /**
     * @var CalculatorInterface
     */
    private $calculate;
    /**
     * @var CalculatorInterface
     */
    private $operation;

    /**
     * ArgumentFinder constructor.
     * @param CalculatorInterface $calculate
     * @param CalculatorInterface $operation
     */
    public function __construct(CalculatorInterface $calculate, CalculatorInterface $operation)
    {

        $this->calculate = $calculate;
        $this->operation = $operation;
    }

    /**
     * @return float|null
     */
    public function find(array $nums): ?float
    {
        if (count($nums) < 2) {
            throw new Exception('Must be minimum two items of array for finding  argument');
        }
        $previous = null;
        $argument = $this->getArgument($nums);
        foreach ($nums as $num) {
            if ($previous !== null) {
                if ($argument !== $this->calculate->calculate($num, $previous)) {
                    return null;
                }
            }
            $previous = $num;
        }
        return $argument;
    }

    /**
     * @param array $nums
     *
     * @return float
     */
    private function getArgument(array $nums): float
    {
        list($b, $a) = $nums;
        return $this->calculate->calculate($a, $b);

    }

    /**
     * @return CalculatorInterface
     */
    public function getOperation(): CalculatorInterface
    {
        return $this->operation;
    }
}