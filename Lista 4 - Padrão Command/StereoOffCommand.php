<?php

require_once "./Command.php";
require_once "./Stereo.php";

class StereoOffCommand implements Command
{
    /**
     * @var Stereo
     */
    protected $stereo;

    /**
     * StereoOffCommand constructor.
     * @param Stereo $stereo
     */
    public function __construct(Stereo $stereo)
    {
        $this->stereo = $stereo;
    }

    public function execute()
    {
        $this->stereo->off();
    }

    public function undo()
    {
        $this->stereo->on();
    }
}