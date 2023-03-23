<?php

namespace Shapes;
class Vertex
{
    public function __construct(public int $x, public int $y)
    {
    }

    public function getX(): int
    {
        return $this->x;
    }

    public function getY(): int
    {
        return $this->y;
    }
}