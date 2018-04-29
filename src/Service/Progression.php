<?php


namespace Num\Service;


use Num\OperationInterface;

/**
 * Class Progression
 */
class Progression
{
    /**
     * @var OperationInterface
     */
    private $operation;
    /**
     * @var float
     */
    private $argument;

    /**
     * Progression constructor.
     * @param OperationInterface $operation
     * @param float $argument
     */
    public function __construct(OperationInterface $operation, float $argument)
    {
        $this->operation = $operation;
        $this->argument = $argument;
    }

    /**
     * @return OperationInterface
     */
    public function getOperation() : OperationInterface
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