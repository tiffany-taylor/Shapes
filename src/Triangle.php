<?php

namespace Shapes;

class Triangle implements Shape, HasSides
{
    public function __construct(private readonly Vertex $firstVertex, private readonly Vertex $secondVertex, private readonly Vertex $thirdVertex)
    {
    }

    public function getArea(): float
    {
        // abs([x1(y2 - y3) + x2(y3 - y1) + x3(y1 - y2)] / 2)

        return abs(($this->firstVertex->getX() * ($this->secondVertex->getY() - $this->thirdVertex->getY()) + $this->secondVertex->getX() * ($this->thirdVertex->getY() - $this->firstVertex->getY()) + $this->thirdVertex->getX() * ($this->firstVertex->getY() - $this->secondVertex->getY())) / 2);

    }

    public function getPerimeter(): float
    {
        // sqrt((x2 - x1)^2 + sqrt(y2 - y1)^2)
        $firstLine = sqrt((($this->secondVertex->getX() - $this->firstVertex->getX()) ** 2) + (($this->secondVertex->getY() - $this->firstVertex->getY()) ** 2));

        $secondLine = sqrt((($this->thirdVertex->getX() - $this->secondVertex->getX()) ** 2) + (($this->thirdVertex->getY() - $this->secondVertex->getY()) ** 2));

        $thirdLine = sqrt((($this->thirdVertex->getX() - $this->firstVertex->getX()) ** 2) + (($this->thirdVertex->getY() - $this->firstVertex->getY()) ** 2));

        return $firstLine + $secondLine + $thirdLine;
    }

    public function toString(): string
    {
        return "Area: {$this->getArea()}\n" . "Perimeter: {$this->getPerimeter()}\n";
    }
}