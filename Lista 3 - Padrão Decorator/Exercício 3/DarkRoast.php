<?php

require_once "./Beverage.php";

class DarkRoast extends Beverage
{
    /**
     * DarkRoast constructor.
     * @param string $size
     * @param int $numberOfDoses
     */
    public function __construct(string $size = 'P', int $numberOfDoses = 1)
    {
        $this->setSize($size);
        $this->setNumberOfDoses($numberOfDoses);
        $this->description = 'Size ' . $this->size . ' - Dark Roast Coffee (Number of doses: ' . $this->numberOfDoses . ')';
    }

    /**
     * @return float
     */
    public function cost()
    {
        return 0.99 * $this->numberOfDoses;
    }
}
