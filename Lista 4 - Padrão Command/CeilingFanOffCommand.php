<?php

require_once "./CeilingFan.php";
require_once "./Command.php";

class CeilingFanOffCommand implements Command
{
    private $fan;
    private $prevSpeed;

    public function __construct(CeilingFan $fan)
    {
        $this->fan = $fan;
    }

    public function execute()
    {
        $this->prevSpeed = $this->fan->getSpeed();
        $this->fan->off();
    }

    public function undo()
    {
        $this->ceilingFan->setSpeed($this->prevSpeed);
    }
}