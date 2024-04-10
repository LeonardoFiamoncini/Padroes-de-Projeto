<?php

require_once "./Light.php";
require_once "./GarageDoor.php";
require_once "./CeilingFan.php";
require_once "./RemoteControl.php";
require_once "./Stereo.php";
require_once "./LightOnCommand.php";
require_once "./LightOffCommand.php";
require_once "./GarageDoorCloseCommand.php";
require_once "./GarageDoorOpenCommand.php";
require_once "./CeilingFanOffCommand.php";
require_once "./CeilingFanOnCommand.php";
require_once "./CeilingFanHighCommand.php";
require_once "./CeilingFanMediumCommand.php";
require_once "./MacroCommand.php";
require_once "./StereoOnWithCDCommand.php";
require_once "./StereoOffCommand.php";

//* index.php [the client] also acts as The RemoteLoader

//* The RemoteControl [the invoker] (holds commands to execute a request by calling execute() )
$remote = new RemoteControl();

//* The Receivers (have no knowledge of what to do to carry out request)
$ceilingFan = new CeilingFan("Living Room");
$light = new Light("Living room");
$stereo = new Stereo("Living room");

//* The Requests encapsulated with objects [commands] (sets a Receiver for a Command)
$partyOn = [
    new CeilingFanOnCommand($ceilingFan),
    new LightOnCommand($light),
    new StereoOnWithCDCommand($stereo)
];

$partyOf = [
    new CeilingFanOffCommand($ceilingFan),
    new LightOffCommand($light),
    new StereoOffCommand($stereo)
];

$partyOnMacro = new MacroCommand($partyOn);
$partyOffMacro = new MacroCommand($partyOf);

$remote->setCommand(0 , $partyOnMacro , $partyOffMacro);

$remote->onButtonWasPushed(0);

echo $remote;

$remote->undoButtonWasPushed();
 
/**
 * Undo Ceiling fan test
 */
// $ceilingFanBedroom = new CeilingFan("Bedroom");
// $cfHighCommand = new CeilingFanHighCommand($ceilingFanBedroom);
// $cfMidCommand = new CeilingFanMediumCommand($ceilingFanBedroom);
// $cfOffCommand = new CeilingFanOffCommand($ceilingFanBedroom);

// $remote->setCommand(1, $cfHighCommand, $cfOffCommand);
// $remote->setCommand(2, $cfMidCommand, $cfOffCommand);

// $remote->onButtonWasPushed(1);
// $remote->onButtonWasPushed(2);

// $remote->undoButtonWasPushed();

// echo $remote;
