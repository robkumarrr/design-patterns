<?php

namespace App\Chapter6_CommandPattern\Commands;

use App\Chapter6_CommandPattern\Interfaces\Command;

/**
 * NoCommand (Null Object Pattern)
 * Used to initialize empty slots so we don't need null checks.
 */
class NoCommand implements Command
{
    public function execute(): void {}
    public function undo(): void {}
}
