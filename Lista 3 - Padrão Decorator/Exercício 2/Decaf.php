<?php

require_once "./Beverage.php";

class Decaf extends Beverage
{
    /**
     * Decaf constructor.
     */
    public function __construct(string $size = 'P')
    {
        $this->description = 'Decaf Coffee';
        $this->setSize($size);
    }

    /**
     * @return float
     */
    public function cost()
    {
        return 1.05;
    }
}
