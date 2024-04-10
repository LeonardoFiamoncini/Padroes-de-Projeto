<?php

require_once "./Command.php";
require_once "./GarageDoor.php";

class GarageDoorCloseCommand implements Command
{
    protected $garageDoor;

    /**
     * GarageDoorCloseCommand constructor.
     * @param GarageDoor $garageDoor
     */
    public function __construct(GarageDoor $garageDoor)
    {
        $this->garageDoor = $garageDoor;
    }

    public function execute()
    {
        $this->garageDoor->down();
    }

    public function undo()
    {
        $this->garageDoor->up();
    }
}