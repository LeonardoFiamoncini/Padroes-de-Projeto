<?php

require_once "./CondimentDecorator.php";

class Milk extends CondimentDecorator
{
    /**
     * @var Beverage $beverage
     */
    protected $beverage;

    /**
     * Milk constructor.
     * @param Beverage $beverage
     */
    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
        $this->setSize($beverage->getSize());
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->beverage->getDescription() . ', Milk';
    }

    /**
     * @return float
     */
    public function cost()
    {
        return (0.10 * (parent::cost())) + $this->beverage->cost();
    }
}
