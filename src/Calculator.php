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
     * Perform addition operation of properties
     *
     * @return int
     */
    public function add(): int
    {
        return $this->first + $this->second;
    }

    /**
     * Perform subtraction operation of properties
     *
     * @return int
     */
    public function minus(): int
    {
        return $this->first - $this->second;
    }
}