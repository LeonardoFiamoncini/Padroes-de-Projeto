<?php

require_once "./Beverage.php";

class Espresso extends Beverage
{
    /**
     * Espresso constructor.
     * @param string $size
     */
    public function __construct(string $size = 'P', int $numberOfDoses = 1)
    {
        $this->description = 'Size ' . $size . ' - Espresso (Number of doses: ' . $numberOfDoses . ')';
        $this->setSize($size);
        $this->setNumberOfDoses($numberOfDoses);
    }

    /**
     * @return float
     */
    public function cost()
    {
        return 1.99 * $this->numberOfDoses;
    }
}
