<?php

require_once "./Beverage.php";

class HouseBlend extends Beverage
{
    /**
     * HouseBlend constructor.
     * @param string $size
     */
    public function __construct(string $size = 'P', int $numberOfDoses = 1)
    {
        $this->description = 'Size ' . $size . ' - House Blend Coffee (Number of doses: ' . $numberOfDoses . ')';
        $this->setSize($size);
        $this->setNumberOfDoses($numberOfDoses);
    }

    /**
     * @return float
     */
    public function cost()
    {
        return 0.89 * $this->numberOfDoses;
    }
}
