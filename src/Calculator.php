<?php

namespace Sirolad;

class Calculator
{
    /**
     * @var int
     */
    public $first;

    /**
     * @var int
     */
    public $second;

    /**
     * Calculator constructor.
     * @param int $a
     * @param int $b
     */
    public function __construct(int $a, int $b)
    {
        $this->first = $a;
        $this->second = $b;
    }

    /**
     * @return mixed
     */
    public function add()
    {
        return $this->first + $this->second;
    }

    /**
     * @return int
     */
    public function minus()
    {
        return $this->first - $this->second;
    }
}