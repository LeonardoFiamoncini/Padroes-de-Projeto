<?php

require_once "./Beverage.php";

class Espresso extends Beverage
{
    /**
     * Espresso constructor.
     */
    public function __construct()
    {
        $this->description = 'Espresso';
    }

    /**
     * @return float
     */
    public function cost()
    {
        return 1.99;
    }
}
