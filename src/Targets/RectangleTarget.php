<?php

namespace Djelusive\OMR\Targets;

use Djelusive\OMR\Contracts\Target;
use Djelusive\OMR\Point;

class RectangleTarget extends Target
{
    /**
     * Pointer Top/Left
     *
     * @var Point
     */
    private $a;

    /**
     * Pointer Bottom/Right
     *
     * @var Point
     */
    private $b;

    /**
     * Contructor
     *
     * @param $id
     * @param Point $a
     * @param Point $b
     */
    public function __construct($id, Point $a, Point $b)
    {
        $this->id = $id;
        $this->a = $a;
        $this->b = $b;
    }

    /**
     * Get Pointer Top/Left
     *
     * @return Point
     */
    public function getA()
    {
        return $this->a;
    }

    /**
     * Get Pointer Bottom/Right
     *
     * @return Point
     */
    public function getB()
    {
        return $this->b;
    }

}
