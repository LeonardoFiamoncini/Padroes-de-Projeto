<?php

require_once "./Beverage.php";

class Decaf extends Beverage
{
    /**
     * Decaf constructor.
     */
    public function __construct()
    {
        $this->description = 'Decaf Coffee';
    }

    /**
     * @return float
     */
    public function cost()
    {
        return 1.05;
    }
}
