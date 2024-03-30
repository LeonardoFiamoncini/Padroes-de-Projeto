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
        $this->setSize($size);
        $this->description = 'Size ' . $this->size . ' - House Blend Coffee';
    }

    /**
     * @return float
     */
    public function cost()
    {
        return 0.89;
    }
}
