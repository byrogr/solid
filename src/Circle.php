<?php

namespace Solid;

use Solid\Services\ManageShapeService;
use Solid\Services\ShapeService;

class Circle implements ShapeService, ManageShapeService
{
    private $ratio;

    public function __construct($ratio)
    {
        $this->ratio = $ratio;
    }

    public function area()
    {
        return M_PI * pow($this->ratio, 2);
    }

    public function calculate()
    {
        return $this->area();
    }
}