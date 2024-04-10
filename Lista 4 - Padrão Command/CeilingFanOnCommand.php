<?php

require_once "./Command.php";
require_once "./CeilingFan.php";

class CeilingFanOnCommand implements Command
{
    private $fan;

    public function __construct(CeilingFan $fan)
    {
        $this->fan = $fan;
    }

    public function execute()
    {
        $this->fan->on();
    }

    public function undo()
    {
        $this->fan->off();
    }
}