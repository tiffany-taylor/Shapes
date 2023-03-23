<?php

namespace Shapes;

class Circle implements Shape
{
    protected float $radius;

    public function __construct(float $radius)
    {
        $this->radius = $radius;
    }

    public function getArea(): float
    {
        return M_PI * $this->radius * $this->radius;
    }

    public function toString(): string
    {
        return "Area: {$this->getArea()}\n";
    }
}