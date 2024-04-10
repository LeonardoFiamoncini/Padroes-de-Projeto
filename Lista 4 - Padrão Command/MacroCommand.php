<?php

require_once "./Command.php";

class MacroCommand implements Command
{
    /**
     * @var array
     */
    protected $commands = array();

    /**
     * MacroCommand constructor.
     * @param array $cmds
     */
    public function __construct(array $cmds)
    {
        $this->commands = $cmds;
    }

    public function execute()
    {
        for ($i = 0; $i < count($this->commands); $i++) {
            $this->commands[$i]->execute();
        }
    }

    public function undo()
    {
        for ($i = 0; $i < count($this->commands); $i++) {
            $this->commands[$i]->undo();
        }
    }
}