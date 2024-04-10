<?php

require_once "./Command.php";
require_once "./Light.php";

class LightOffCommand implements Command
{
    /**
     * @var Light
     */
    protected $light;

    /**
     * LightOffCommand constructor.
     * @param Light $light
     */
    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    public function execute()
    {
        $this->light->off();
    }

    public function undo()
    {
        $this->light->on();
    }
}