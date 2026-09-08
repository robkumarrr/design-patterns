<?php

namespace App\Chapter6_CommandPattern\Commands;

use App\Chapter6_CommandPattern\Interfaces\Command;
use App\Chapter6_CommandPattern\Receivers\Light;

class LightOffCommand implements Command
{
    protected Light $light;

    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    public function execute(): void
    {
        $this->light->off();
    }

    public function undo(): void
    {
        $this->light->on();
    }
}
