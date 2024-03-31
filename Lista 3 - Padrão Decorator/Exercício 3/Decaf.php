<?php

require_once "./Beverage.php";

class Decaf extends Beverage
{
    /**
     * Decaf constructor.
     * @param string $size
     * @param int $numberOfDoses
     */
    public function __construct(string $size = 'P', int $numberOfDoses = 1)
    {
        $this->setSize($size);
        $this->setNumberOfDoses($numberOfDoses);
        $this->description = 'Size ' . $this->size . ' - Decaf Coffee (Number of doses: ' . $this->numberOfDoses . ')';
    }

    /**
     * @return float
     */
    public function cost()
    {
        return 1.05 * $this->numberOfDoses;
    }
}
