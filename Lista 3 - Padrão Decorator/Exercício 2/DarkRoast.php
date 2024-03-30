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
        $this->setSize($size);
        $this->description = 'Size ' . $this->size . ' - Dark Roast Coffee';
    }

    /**
     * @return float
     */
    public function cost()
    {
        return 0.99;
    }
}
