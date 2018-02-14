<?php

namespace Solid;

class AreaShapeOutputter
{
    private $areaCalculator;

    public function __construct(AreaCalculator $areaCalculator)
    {
        $this->areaCalculator = $areaCalculator;
    }

    public function renderJson()
    {
        $response = ['sum' => $this->areaCalculator->calculateSum()];
        return json_encode($response);
    }

    public function renderHtml()
    {
        return '<p>Total sum: '. $this->areaCalculator->calculateSum() .'</p>';
    }
}