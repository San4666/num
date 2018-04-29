<?php


namespace Num\Service;


use Num\CalculatorInterface;

/**
 * Class Progression
 */
class Progression
{
    /**
     * @var CalculatorInterface
     */
    private $operation;
    /**
     * @var float
     */
    private $argument;

    /**
     * Progression constructor.
     *
     * @param CalculatorInterface $operation
     * @param float $argument
     */
    public function __construct(CalculatorInterface $operation, float $argument)
    {
        $this->operation = $operation;
        $this->argument = $argument;
    }

    /**
     * @return CalculatorInterface
     */
    public function getOperation() : CalculatorInterface
    {
        return $this->operation;
    }

    /**
     * @return float
     */
    public function getArgument() : float
    {
        return $this->argument;
    }
}