<?php

require_once "./Beverage.php";

class Decaf extends Beverage
{
    /**
     * Decaf constructor.
     * @param string $size
     */
    public function __construct(string $size = 'P')
    {
        $this->setSize($size);
        $this->description = 'Size ' . $this->size . ' - Decaf Coffee';
    }

    /**
     * @return float
     */
    public function cost()
    {
        return 1.05;
    }
}
