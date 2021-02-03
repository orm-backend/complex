<?php

namespace Math;

/**
 * Utilities for calculating mathematical operations with complex numbers.
 * 
 * @author vitaliy
 *        
 */
class ComplexUtils
{
    /**
     * Allows to get the sum of two <code>ComplexNumber</code> given in the parameters.
     *
     * @param ComplexNumber $a
     *            the first <code>ComplexNumber</code>
     * @param ComplexNumber $b
     *            the second <code>ComplexNumber</code>
     * @return ComplexNumber the new complex number
     */
    public static function sum(ComplexNumber $a, ComplexNumber $b): ComplexNumber
    {
        return new ComplexNumber($a->getRe() + $b->getRe(), $a->getIm() + $b->getIm());
    }
    
    /**
     * Allows to get the difference of two <code>ComplexNumber</code> given in the parameters.
     *
     * @param ComplexNumber $a
     *            the first <code>ComplexNumber</code>
     * @param ComplexNumber $b
     *            the second <code>ComplexNumber</code>
     * @return ComplexNumber the new complex number
     */
    public static function subtract(ComplexNumber $a, ComplexNumber $b): ComplexNumber
    {
        return new ComplexNumber($a->getRe() - $b->getRe(), $a->getIm() - $b->getIm());
    }
    
    /**
     * Allows to get the product of two <code>ComplexNumber</code> given in the parameters.
     *
     * @param ComplexNumber $a
     *            the first <code>ComplexNumber</code>
     * @param ComplexNumber $b
     *            the second <code>ComplexNumber</code>
     * @return ComplexNumber the new complex number
     */
    public static function multiply(ComplexNumber $a, ComplexNumber $b): ComplexNumber
    {
        $real = $a->getRe() * $b->getRe() - $a->getIm() * $b->getIm();
        $imag = $a->getRe() * $b->getIm() + $a->getIm() * $b->getRe();
        return new ComplexNumber($real, $imag);
    }
    
    /**
     * Allows to get the product of two <code>ComplexNumber</code> given in the parameters.
     *
     * @param ComplexNumber $a
     *            the first <code>ComplexNumber</code>
     * @param ComplexNumber $b
     *            the second <code>ComplexNumber</code>
     * @return ComplexNumber the new complex number
     */
    public static function divide(ComplexNumber $a, ComplexNumber $b): ComplexNumber
    {
        $tmp = new ComplexNumber($b->getRe(), - $b->getIm());
        $tmp = self::multiply($a, $tmp);
        $denominator = $b->getRe() * $b->getRe() + $b->getIm() * $b->getIm();
        return new ComplexNumber($tmp->getRe() / $denominator, $tmp->getIm() / $denominator);
    }
}

