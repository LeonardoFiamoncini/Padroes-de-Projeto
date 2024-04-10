<?php

require_once "./NoCommand.php";

class RemoteControl
{
    /**
     * @var Command[]
     */
    protected $onCommands = [];

    /**
     * @var Command[]
     */
    protected $offCommands = [];

    /**
     * @var Command
     */
    protected $undoCommand;

    public function __construct()
    {
        $NoCommand = new NoCommand;

        for ($i = 0; $i < 7; $i++) {
            $this->onCommands[$i] = $NoCommand;
            $this->offCommands[$i] = $NoCommand;
        }
        $undoCommand = $NoCommand;
    }

    /**
     * @param int $slot
     * @param Command $on
     * @param Command $off
     */
    public function setCommand(int $slot, Command $on, Command $off)
    {
        $this->onCommands[$slot] = $on;
        $this->offCommands[$slot] = $off;
    }

    /**
     * @param int $slot
     * @throws Exception
     */
    public function onButtonWasPushed(int $slot)
    {
        if (isset($this->onCommands[$slot])) {
            $this->onCommands[$slot]->execute();
            $this->undoCommand = $this->onCommands[$slot];
        } else throw new Exception('Slot is empty.');
    }

    /**
     * @param int $slot
     * @throws Exception
     */
    public function offButtonWasPushed(int $slot)
    {
        if (isset($this->offCommands[$slot])) {
            $this->offCommands[$slot]->execute();
            $this->undoCommand = $this->offCommands[$slot];
        } else throw new Exception('Slot is empty.');
    }

    public function undoButtonWasPushed()
    {
        echo "[ <-undo ] : \n";
        $this->undoCommand->undo();
    }

    /**
     * @param $class
     * @return string
     */
    protected function class_name($class): string
    {
        $className = get_class($class);
        $lastSlash = strpos($className, '\\') + 1;
        $className = substr($className, $lastSlash);
        return $className;
    }

    public function __toString()
    {
        $str = "\n-------- Remote Control --------\n";
        for ($i = 0; $i < count($this->onCommands); $i++) {
            $str .= "[slot $i] | " .
                $this->class_name($this->onCommands[$i])
                . " | " . $this->class_name($this->offCommands[$i]) . "\n";
        }

        $str .= "[undo] " . $this->class_name($this->undoCommand) . "\n"
            . "--------------------------------\n\n";
        return $str;
    }
}
