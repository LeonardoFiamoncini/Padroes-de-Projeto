<?php

require_once "./Command.php";

class NoCommand implements Command
{
    public function execute()
    {
        echo 'No command is set.' . PHP_EOL;
    }

    public function undo()
    {
    }
}