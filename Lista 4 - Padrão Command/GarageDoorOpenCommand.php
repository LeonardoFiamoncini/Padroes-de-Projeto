<?php

require_once "./Command.php";
require_once "./GarageDoor.php";

class GarageDoorOpenCommand implements Command
{
    /**
     * @var GarageDoor
     */
    protected $garageDoor;

    /**
     * GarageDoorOpenCommand constructor.
     * @param GarageDoor $garageDoor
     */
    public function __construct(GarageDoor $garageDoor)
    {
        $this->garageDoor = $garageDoor;
    }

    public function execute()
    {
        $this->garageDoor->up();
    }

    public function undo()
    {
        $this->garageDoor->down();
    }
}