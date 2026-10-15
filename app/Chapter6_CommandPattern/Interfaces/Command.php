<?php

namespace App\Chapter6_CommandPattern\Interfaces;

/**
 * The Command Interface
 * All commands must implement these methods.
 */
interface Command
{
    public function execute(): void;
    public function undo(): void;
}
