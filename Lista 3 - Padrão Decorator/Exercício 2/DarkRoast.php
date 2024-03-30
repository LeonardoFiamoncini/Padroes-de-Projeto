<?php

require_once "./Beverage.php";

class DarkRoast extends Beverage
{
    /**
     * DarkRoast constructor.
     * @param string $size
     */
    public function __construct(string $size = 'P')
    {
        $this->description = 'Dark Roast Coffee';
        $this->setSize($size);
    }

    /**
     * @return float
     */
    public function cost()
    {
        return 0.99;
    }
}
