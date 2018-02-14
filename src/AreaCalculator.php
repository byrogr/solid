<?php

namespace Solid;

use Solid\Services\ManageShapeService;

class AreaCalculator
{
    private $shapes = array();

    public function __construct(array $shapes)
    {
        $this->shapes = $shapes;
    }

    public function calculateSum()
    {
        $sum = 0;
        foreach ($this->shapes as $shape) {
            if ($shape instanceof ManageShapeService) {
                $sum += $shape->calculate();
                continue;
            }
            throw new AreaCalculatorInvalidException;
        }
        return $sum;
    }
}