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
        $this->description = 'Size ' . $size . ' - Dark Roast Coffee (Number of doses: ' . $numberOfDoses . ')';
        $this->setSize($size);
        $this->setNumberOfDoses($numberOfDoses);
    }

    /**
     * @return float
     */
    public function cost()
    {
        return 0.99 * $this->numberOfDoses;
    }
}
