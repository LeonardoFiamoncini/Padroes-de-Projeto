<?php

require_once "./Beverage.php";

class HouseBlend extends Beverage
{
    /**
     * HouseBlend constructor.
     */
    public function __construct()
    {
        $this->description = 'House Blend Coffee';
    }

    /**
     * @return float
     */
    public function cost()
    {
        return 0.89;
    }
}
