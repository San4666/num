<?php

namespace Num\Test\Service;


use Num\Exception\NotFoundProgression;
use Num\Factory\ProgressionFinderFactory;
use Num\Calculator\Multiply;
use Num\Calculator\Plus;
use Num\CalculatorInterface;
use Num\Service\ProgressionFinder;
use PHPUnit\Framework\TestCase;

/**
 * Class ProgressionFinderTests
 */
class ProgressionFinderTests extends TestCase
{
    /**
     * @var ProgressionFinder
     */
    private $finder;

    /**
     * @inheritdoc
     */
    public function setUp()
    {
        $this->finder = ProgressionFinderFactory::Factory();
        parent::setUp();
    }

    /**
     * @dataProvider dataFind
     */
    public function testFind(array $nums, CalculatorInterface $operation, float $argument)
    {
        $progression = $this->finder->find($nums);
        $this->assertTrue($progression->getOperation() instanceof $operation);
        $this->assertEquals($progression->getArgument(), $argument);
    }

    /**
     * @return array
     */
    public function dataFind(): array
    {
        return [
            [[2, 4, 8, 16], new Multiply(), 2],
            [[2, 6, 18, 18 * 3], new Multiply(), 3],
            [[5, 10, 15, 20], new Plus(), 5],
            [[100, 99, 98, 97], new Plus(), -1],
        ];
    }

    /**
     * @dataProvider dataNotFound
     */
    public function testNotFound(array $nums) {
        $this->expectException(NotFoundProgression::class);
        $this->finder->find($nums);
    }

    /**
     * @return array
     */
    public function dataNotFound() : array {
        return [
            [[1,2,3,4,7]],
            [[2,4,12,100]],
            [[]],
            [[1,2]],
            [[2,0,4]]
        ];
    }

}