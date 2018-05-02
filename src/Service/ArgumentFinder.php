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
     *
     * @param CalculatorInterface $calculate
     * @param CalculatorInterface $operation
     */
    public function __construct(CalculatorInterface $calculate, CalculatorInterface $operation)
    {

        $this->calculate = $calculate;
        $this->operation = $operation;
    }

    /**
     * Finds a argument
     *
     * @return float|null
     *
     * @throws Exception
     */
    public function find(array $nums): ?float
    {

        if (count($nums) < 2) {
            throw new Exception('Must be minimum two items of array for finding  argument');
        }
        try {
            $argument = $this->getArgument($nums);
            if($this->checks($nums,$argument)) {
                return $argument;
            }
        }catch (\DivisionByZeroError $exception) {
            $debug = 1;
        }
        return null;
    }

    /**
     * Checks the argument
     *
     * @param array $nums
     * @param float $argument
     *
     * @return bool
     */
    private function checks(array $nums, float $argument): bool
    {
        $previous = null;
        foreach ($nums as $num) {
            if ($previous !== null) {
                if ($argument !== $this->calculate->calculate($num, $previous)) {
                    return false;
                }
            }
            $previous = $num;
        }
        return true;
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