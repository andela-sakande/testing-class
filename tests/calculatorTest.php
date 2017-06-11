<?php
namespace Sirolad\Test;

use Sirolad\Calculator;

class calculatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \Sirolad\Calculator object
     */
    public $calculator;

    /**
     *
     */
    public function setUp()
    {
        $this->calculator = new Calculator(6, 2);
    }

    public function testAdd()
    {
        $test = $this->calculator->add();

        $this->assertEquals($test, 8);
    }

    public function testMinus()
    {
        $test = $this->calculator->minus();

        $this->assertEquals($test, 4);
    }

}