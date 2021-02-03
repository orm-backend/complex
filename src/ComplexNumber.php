<?php
namespace Math;

/**
 * Immutable complex number.
 *
 * @author vitaliy
 *        
 */
class ComplexNumber
{

    /**
     * Represents the real part of a complex number
     *
     * @var float
     */
    protected $re;

    /**
     * Represents imaginary part of a complex number
     *
     * @var float
     */
    protected $im;

    /**
     * Constructs a new <code>ComplexNumber</code> instanse.
     *
     * @param float $re
     *            the real part of the complex number
     * @param float $im
     *            the imaginary part of the complex number
     */
    public function __construct(float $re, float $im)
    {
        $this->re = $re;
        $this->im = $im;
    }

    /**
     * The real part
     *
     * @return float real part of the complex number
     */
    public function getRe(): float
    {
        return $this->re;
    }

    /**
     * The imaginary part
     *
     * @return float the imaginary part of the complex number
     */
    public function getIm(): float
    {
        return $this->im;
    }

    public function __toString(): string
    {
        if ($this->im == 0) {
            return $this->re;
        }
        
        if ($this->re == 0) {
            return $this->im . "i";
        }

        return $this->re . ($this->im > 0 ? " + " : " - ") . abs($this->im) . "i";
    }
}

