<?php

use Shapes\Circle;
use Shapes\Rectangle;
use Shapes\Triangle;
use Shapes\Vertex;

require_once __DIR__ . '/vendor/autoload.php';

echo "Finding area of a circle\n";
$circle = new Circle(2);
echo $circle->toString();

echo "\nFinding the area and perimeter of a rectangle\n";
$rectangle = new Rectangle(2, 3);
echo $rectangle->toString();
echo "Is this shape a square? " . ($rectangle->isSquare() ? "yes" : "no") . "\n";

echo "\nFinding the area and perimeter of a square\n";
$square = new Rectangle(2, 2);
echo $square->toString();
echo "Is this shape a square? " . ($square->isSquare() ? "yes" : "no") . "\n";

echo "\nFinding the area and perimeter of a triangle\n";
$triangle = new Triangle(new Vertex(1, 2), new Vertex(3, -4), new Vertex(-4, 5));
echo $triangle->toString();