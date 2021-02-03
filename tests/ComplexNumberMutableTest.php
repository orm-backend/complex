<?php
namespace Tests;

use Math\ComplexNumber;
use Math\ComplexNumberMutable;
use PHPUnit\Framework\TestCase;

/**
 * ComplexNumber test case.
 */
class ComplexNumberMutableTest extends TestCase
{

    /**
     *
     * @var ComplexNumberMutable
     */
    private $number;

    /**
     *
     * {@inheritdoc}
     * @see \PHPUnit\Framework\TestCase::setUp()
     */
    protected function setUp(): void
    {
        $this->number = new ComplexNumberMutable(5.0, 6.0);
    }

    /**
     *
     * {@inheritdoc}
     * @see \PHPUnit\Framework\TestCase::tearDown()
     */
    protected function tearDown(): void
    {
        $this->number = null;
    }

    /**
     * Tests ComplexNumberMutable::add()
     */
    public function testAdd()
    {
        $this->number->add(new ComplexNumber(- 3.0, 4.0));
        $this->assertNotNull($this->number);
        $this->assertEquals(2.0, $this->number->getRe());
        $this->assertEquals(10.0, $this->number->getIm());
    }

    /**
     * Tests ComplexNumberMutable::multiply()
     */
    public function testMultiply()
    {
        $this->number->multiply(new ComplexNumber(- 3.0, 4.0));
        $this->assertNotNull($this->number);
        $this->assertEquals(- 39.0, $this->number->getRe());
        $this->assertEquals(2.0, $this->number->getIm());
    }

    /**
     * Tests ComplexNumberMutable::subtract()
     */
    public function testSubtract()
    {
        $this->number->subtract(new ComplexNumber(- 3.0, 4.0));
        $this->assertNotNull($this->number);
        $this->assertEquals(8.0, $this->number->getRe());
        $this->assertEquals(2.0, $this->number->getIm());
    }

    /**
     * Tests ComplexNumberMutable::divide()
     */
    public function testDivide()
    {
        $this->number->divide(new ComplexNumber(- 3.0, 4.0));
        $this->assertNotNull($this->number);
        $this->assertEquals(0.36, $this->number->getRe());
        $this->assertEquals(- 1.52, $this->number->getIm());
    }

    /**
     * Tests ComplexNumberMutable::divide()
     */
    public function testDivideByZero()
    {
        $this->expectError();
        $this->number->divide(new ComplexNumber(0.0, 0.0));
    }
}

