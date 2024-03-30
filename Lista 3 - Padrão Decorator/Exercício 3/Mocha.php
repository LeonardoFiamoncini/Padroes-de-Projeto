<?php

require_once "./CondimentDecorator.php";

class Mocha extends CondimentDecorator
{
    /**
     * @var Beverage $beverage
     */
    protected $beverage;

    /**
     * Mocha constructor.
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
        return $this->beverage->getDescription() . ', Mocha';
    }

    /**
     * @return float
     */
    public function cost()
    {
        return (0.20 * (parent::cost())) + $this->beverage->cost();
    }
}
