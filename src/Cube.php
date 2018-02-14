<?php

namespace Solid;

use Solid\Services\ManageShapeService;
use Solid\Services\ShapeService;
use Solid\Services\SolidShapeService;

class Cube implements ShapeService, SolidShapeService, ManageShapeService
{
    private $side;

    public function __construct($side)
    {
        $this->side = $side;
    }

    public function area()
    {
        return 6 * pow($this->side, 2);
    }

    public function volume()
    {
        return pow($this->side, 3);
    }

    public function calculate()
    {
        return $this->area() + $this->volume();
    }
}