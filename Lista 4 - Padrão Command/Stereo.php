<?php

class Stereo
{
    /**
     * @var string
     */
    protected $name = '';

    /**
     * Stereo constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        if (isset($name))
            $this->name = $name;
    }

    public function on()
    {
        echo $this->name . ' Stereo is ON.' . PHP_EOL;
    }

    public function setCD()
    {
        echo $this->name . ' Stereo CD is set.' . PHP_EOL;
    }

    /**
     * @param int $vol
     */
    public function setVolume(int $vol)
    {
        echo $this->name . ' Stereo volume is ' . $vol . PHP_EOL;
    }

    public function off()
    {
        echo $this->name . ' Stereo is OFF. ' . PHP_EOL;
    }
}