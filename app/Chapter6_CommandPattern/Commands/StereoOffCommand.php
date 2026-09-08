<?php

namespace App\Chapter6_CommandPattern\Commands;

use App\Chapter6_CommandPattern\Interfaces\Command;
use App\Chapter6_CommandPattern\Receivers\Stereo;

class StereoOffCommand implements Command
{
    protected Stereo $stereo;

    public function __construct(Stereo $stereo)
    {
        $this->stereo = $stereo;
    }

    public function execute(): void
    {
        $this->stereo->off();
    }

    public function undo(): void
    {
        $this->stereo->on();
        $this->stereo->setCD();
        $this->stereo->setVolume(11);
    }
}
