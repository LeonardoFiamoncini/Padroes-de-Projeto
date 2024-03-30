<?php

require_once "./CondimentDecorator.php";

class Whip extends CondimentDecorator
{
    /**
     * @var Beverage $beverage
     */
    protected $beverage;

    /**
     * Whip constructor.
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
        return $this->beverage->getDescription() . ', Whip';
    }

    /**
     * @return float
     */
    public function cost()
    {
        return 0.10 + $this->beverage->cost();
    }
}
