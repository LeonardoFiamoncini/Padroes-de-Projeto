<?php

require_once "./Beverage.php";

class DarkRoast extends Beverage
{
    /**
     * DarkRoast constructor.
     */
    public function __construct()
    {
        $this->description = 'Dark Roast Coffee';
    }

    /**
     * @return float
     */
    public function cost()
    {
        return 0.99;
    }
}
