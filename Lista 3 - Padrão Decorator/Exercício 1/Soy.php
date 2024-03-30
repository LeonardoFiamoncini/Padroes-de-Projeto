<?php

require_once "./CondimentDecorator.php";

class Soy extends CondimentDecorator
{
    /**
     * @var Beverage $beverage
     */
    protected $beverage;

    /**
     * Soy constructor.
     * @param Beverage $beverage
     */
    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->beverage->getDescription() . ', Soy';
    }

    /**
     * @return float
     */
    public function cost()
    {
        return 0.15 + $this->beverage->cost();
    }
}
