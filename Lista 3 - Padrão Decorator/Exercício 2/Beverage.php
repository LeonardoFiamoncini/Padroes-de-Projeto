<?php

abstract class Beverage
{
    /**
     * @var string $description
     */
    protected $description = 'Unknown Beverage';

    /**
     * @return string $this->description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return float
     */
    public abstract function cost();
}