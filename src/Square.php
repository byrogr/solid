<?php

namespace Solid;

use Solid\Services\ManageShapeService;
use Solid\Services\ShapeService;

class Square implements ShapeService, ManageShapeService
{
    private $side;

    public function __construct($side)
    {
        $this->side = $side;
    }

    public function area()
    {
        return pow($this->side, 2);
    }

    public function calculate()
    {
        return $this->area();
    }
}