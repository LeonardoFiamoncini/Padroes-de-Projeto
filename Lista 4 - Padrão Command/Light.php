<?php

class Light
{
    /**
     * @var string
     */
    protected $name = '';

    /**
     * Light constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        if (isset($name))
            $this->name = $name;
    }

    public function on()
    {
        echo $this->name . ' Light is ON.' . PHP_EOL;
    }

    public function off()
    {
        echo $this->name . ' Light is OFF. ' . PHP_EOL;
    }
}