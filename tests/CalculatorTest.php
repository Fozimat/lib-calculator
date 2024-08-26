<?php

use Fozimat\Calculator\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{

    private $calculator;

    protected function setUp(): void
    {
        $this->calculator = new Calculator();
    }

    public function testAdd()
    {
        $this->assertEquals(4, $this->calculator->add(1, 3));
        $this->assertEquals(-5, $this->calculator->add(5, -10));
        $this->assertEquals(0, $this->calculator->add(0, 0));
    }

    public function testSubtract()
    {
        $this->assertEquals(2, $this->calculator->subtract(5, 3));
        $this->assertEquals(-7, $this->calculator->subtract(10, 17));
        $this->assertEquals(0, $this->calculator->subtract(0, 0));
    }

    public function testMultiply()
    {
        $this->assertEquals(6, $this->calculator->multiply(2, 3));
        $this->assertEquals(-15, $this->calculator->multiply(5, -3));
        $this->assertEquals(0, $this->calculator->multiply(0, 0));
    }

    public function testDivide()
    {
        $this->assertEquals(2, $this->calculator->divide(6, 3));
        $this->assertEquals(-9, $this->calculator->divide(-27, 3));

        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("Division by zero is not allowed.");
        $this->calculator->divide(10, 0);
    }
}
