<?php

require_once "./Beverage.php";

class HouseBlend extends Beverage
{
    /**
     * HouseBlend constructor.
     * @param string $size
     */
    public function __construct(string $size = 'P')
    {
        $this->description = 'Size ' . $size . ' - House Blend Coffee';
        $this->setSize($size);
    }

    /**
     * @return float
     */
    public function cost()
    {
        return 0.89;
    }
}
