<?php

require_once "./Beverage.php";

class Decaf extends Beverage
{
    /**
     * Decaf constructor.
     * @param string $size
     */
    public function __construct(string $size = 'P', int $numberOfDoses = 1)
    {
        $this->description = 'Size ' . $size . ' - Decaf Coffee (Number of doses: ' . $numberOfDoses . ')';
        $this->setSize($size);
        $this->setNumberOfDoses($numberOfDoses);
    }

    /**
     * @return float
     */
    public function cost()
    {
        return 1.05 * $this->numberOfDoses;
    }
}
