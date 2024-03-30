<?php

require_once "./Beverage.php";

abstract class CondimentDecorator extends Beverage
{
    /**
     * @return string $this->description
     */
    public function getDescription()
    {
        return $this->description;
    }
}