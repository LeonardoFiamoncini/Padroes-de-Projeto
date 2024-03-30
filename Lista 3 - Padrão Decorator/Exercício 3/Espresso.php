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
        $this->setSize($size);
        $this->setNumberOfDoses($numberOfDoses);
        $this->description = 'Size ' . $this->size . ' - Espresso (Number of doses: ' . $this->numberOfDoses . ')';
    }

    /**
     * @return float
     */
    public function cost()
    {
        return 1.99 * $this->numberOfDoses;
    }
}
