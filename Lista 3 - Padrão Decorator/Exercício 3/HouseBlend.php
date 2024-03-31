<?php

require_once "./Beverage.php";

class HouseBlend extends Beverage
{
    /**
     * HouseBlend constructor.
     * @param string $size
     * @param int $numberOfDoses
     */
    public function __construct(string $size = 'P', int $numberOfDoses = 1)
    {
        $this->setSize($size);
        $this->setNumberOfDoses($numberOfDoses);
        $this->description = 'Size ' . $this->size . ' - House Blend Coffee (Number of doses: ' . $this->numberOfDoses . ')';
    }

    /**
     * @return float
     */
    public function cost()
    {
        return 0.89 * $this->numberOfDoses;
    }
}
