<?php

namespace Num\Service;

use Num\Exception\NotFoundProgression;

/**
 * Class ProgressionFinder
 */
class ProgressionFinder
{
    /**
     * @var array|ArgumentFinder[]
     */
    private $argumentFinder;

    /**
     * ProgressionFinder constructor.
     *
     * @param ArgumentFinder[] $argumentFinder
     */
    public function __construct(array $argumentFinder)
    {
        $this->argumentFinder = $argumentFinder;
    }

    /**
     * @param float[] $nums
     *
     * @return Progression
     *
     * @throws NotFoundProgression
     */
    public function find(array $nums): Progression
    {
        if (count($nums) <= 2) {
            throw new NotFoundProgression();
        }
        foreach ($this->argumentFinder as $finder) {
            $argument = $finder->find($nums);
            if($argument) {
                return new Progression($finder->getOperation(),$argument);
            }
        }
        throw new NotFoundProgression();
    }
}