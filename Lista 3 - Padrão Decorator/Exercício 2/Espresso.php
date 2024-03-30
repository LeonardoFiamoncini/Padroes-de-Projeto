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
        $this->setSize($size);
        $this->description = 'Size ' . $this->size . ' - Espresso';
    }

    /**
     * @return float
     */
    public function cost()
    {
        return 1.99;
    }
}
