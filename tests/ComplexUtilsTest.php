<?php
namespace Tests;

use Math\ComplexNumber;
use Math\ComplexUtils;
use PHPUnit\Framework\TestCase;

/**
 * ComplexUtils test case.
 */
class ComplexUtilsTest extends TestCase
{
    /**
     * Tests ComplexUtils::sum()
     */
    public function testSum()
    {
        $number = ComplexUtils::sum(new ComplexNumber(2, -3), new ComplexNumber(-1, 2));
        $this->assertNotNull($number);
        $this->assertEquals(1.0, $number->getRe());
        $this->assertEquals(-1.0, $number->getIm());
    }

    /**
     * Tests ComplexUtils::subtract()
     */
    public function testSubtract()
    {
        $number = ComplexUtils::subtract(new ComplexNumber(2, -3), new ComplexNumber(-1, 2));
        $this->assertNotNull($number);
        $this->assertEquals(3.0, $number->getRe());
        $this->assertEquals(-5.0, $number->getIm());
    }

    /**
     * Tests ComplexUtils::multiply()
     */
    public function testMultiply()
    {
        $number = ComplexUtils::multiply(new ComplexNumber(2, -3), new ComplexNumber(-1, 2));
        $this->assertNotNull($number);
        $this->assertEquals(4.0, $number->getRe());
        $this->assertEquals(7.0, $number->getIm());
    }

    /**
     * Tests ComplexUtils::divide()
     */
    public function testDivide()
    {
        $number = ComplexUtils::divide(new ComplexNumber(2, -3), new ComplexNumber(-1, 2));
        $this->assertNotNull($number);
        $this->assertEquals(-1.6, $number->getRe());
        $this->assertEquals(-0.2, $number->getIm());
    }
    
    /**
     * Tests ComplexNumberMutable::divide()
     */
    public function testDivideByZero()
    {
        $this->expectError();
        ComplexUtils::divide(new ComplexNumber(2, -3), new ComplexNumber(0, 0));
    }
}
