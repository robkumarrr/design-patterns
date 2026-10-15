<?php

namespace App\Chapter6_CommandPattern\Invokers;

use App\Chapter6_CommandPattern\Interfaces\Command;
use App\Chapter6_CommandPattern\Commands\NoCommand;

/**
 * The Invoker
 */
class RemoteControl
{
    /** @var Command[] */
    protected array $onCommands = [];
    
    /** @var Command[] */
    protected array $offCommands = [];
    
    protected Command $undoCommand;

    public function __construct()
    {
        $noCommand = new NoCommand();
        
        // Initialize 7 slots with NoCommand
        for ($i = 0; $i < 7; $i++) {
            $this->onCommands[$i] = $noCommand;
            $this->offCommands[$i] = $noCommand;
        }
        
        $this->undoCommand = $noCommand;
    }

    public function setCommand(int $slot, Command $onCommand, Command $offCommand): void
    {
        $this->onCommands[$slot] = $onCommand;
        $this->offCommands[$slot] = $offCommand;
    }

    public function onButtonWasPushed(int $slot): void
    {
        $this->onCommands[$slot]->execute();
        $this->undoCommand = $this->onCommands[$slot];
    }

    public function offButtonWasPushed(int $slot): void
    {
        $this->offCommands[$slot]->execute();
        $this->undoCommand = $this->offCommands[$slot];
    }

    public function undoButtonWasPushed(): void
    {
        echo "<i>-- Undoing last action --</i><br>";
        $this->undoCommand->undo();
    }

    public function __toString(): string
    {
        $stringBuff = "<br>------ Remote Control ------<br>";
        for ($i = 0; $i < count($this->onCommands); $i++) {
            $onClass = class_basename($this->onCommands[$i]);
            $offClass = class_basename($this->offCommands[$i]);
            $stringBuff .= "[slot " . $i . "] " . $onClass . "    " . $offClass . "<br>";
        }
        $stringBuff .= "[undo] " . class_basename($this->undoCommand) . "<br>";
        return $stringBuff;
    }
}
