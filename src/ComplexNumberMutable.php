<?php
namespace Math;

/**
 * Mutable complex number.
 * 
 * @author vitaliy
 *        
 */
class ComplexNumberMutable extends ComplexNumber
{
    /**
     * Increments this number by the number specified by the parameter
     *
     * @param ComplexNumber $number
     *            the number to increment
     * @return ComplexNumber this instance
     */
    public function add(ComplexNumber $number): ComplexNumber
    {
        $this->re += $number->re;
        $this->im += $number->im;

        return $this;
    }

    /**
     * Decrements this number by the number specified by the parameter
     *
     * @param ComplexNumber $number
     *            the number to decrement
     * @return ComplexNumber this instance
     */
    public function subtract(ComplexNumber $number): ComplexNumber
    {
        $this->re -= $number->re;
        $this->im -= $number->im;

        return $this;
    }

    /**
     * Multiplies this number by the number specified by the parameter
     *
     * @param ComplexNumber $number
     *            the multiplier
     * @return ComplexNumber this instance
     */
    public function multiply(ComplexNumber $number): ComplexNumber
    {
        $real = $this->re * $number->re - $this->im * $number->im;
        $imaginary = $this->re * $number->im + $this->im * $number->re;
        $this->re = $real;
        $this->im = $imaginary;

        return $this;
    }
    
    /**
     * Divides this number by the number specified by the parameter
     *
     * @param ComplexNumber $number
     *            the denominator
     * @return ComplexNumber this instance
     */
    public function divide(ComplexNumber $number): ComplexNumber
    {
        $denominator = $number->re * $number->re + $number->im * $number->im;
        $this->multiply(new ComplexNumber($number->re, - $number->im));
        $this->re /= $denominator;
        $this->im /= $denominator;
        
        return $this;
    }

}

