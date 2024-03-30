<?php

abstract class Beverage
{
    /**
     * @var string $description
     */
    protected $description = 'Unknown Beverage';

    /**
     * @var string $size
     */
    protected $size = 'P';

    /**
     * @return string $this->description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $size
     */
    public function setSize(string $size)
    {
        $this->size = $size;
    }

    /**
     * @return string
     */
    public function getSize(): string
    {
        return $this->size;
    }

    /**
     * @return float
     */
    public abstract function cost();
}