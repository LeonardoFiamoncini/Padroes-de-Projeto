<?php

require_once "./Beverage.php";

class Espresso extends Beverage
{
    /**
     * Espresso constructor.
     * @param string $size
     */
    public function __construct(string $size = 'P')
    {
        $this->description = 'Espresso';
        $this->setSize($size);
    }

    /**
     * @return float
     */
    public function cost()
    {
        return 1.99;
    }
}
