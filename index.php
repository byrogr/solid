<?php

require_once __DIR__ . '\vendor\autoload.php';

use Solid\Circle;
use Solid\Square;
use Solid\AreaCalculator;
use Solid\AreaShapeOutputter;

$shapes = [
    new Circle(2.5),
    new Square(4.5)
];

$objAreaCal = new AreaCalculator($shapes);
$objOutput = new AreaShapeOutputter($objAreaCal);

echo $objOutput->renderJson();