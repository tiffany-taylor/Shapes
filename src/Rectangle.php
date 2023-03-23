<?php

namespace Shapes;

class Rectangle implements Shape, HasSides
{
    public function __construct(private int $width, private int $height)
    {
    }

    public function getArea(): int
    {
        return $this->width * $this->height;
    }

    public function getPerimeter(): int
    {
        return 2 * ($this->width + $this->height);
    }

    public function isSquare(): bool
    {
        return $this->width === $this->height;
    }

    public function toString(): string
    {
        return "Area: {$this->getArea()}\n" . "Perimeter: {$this->getPerimeter()}\n";
    }
}