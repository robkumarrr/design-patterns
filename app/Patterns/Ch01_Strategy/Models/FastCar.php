<?php

namespace App\Patterns\Ch01_Strategy\Models;

use App\Patterns\Ch01_Strategy\DrivingStrategies\FastDrive;
use App\Patterns\Ch01_Strategy\HonkingStrategies\LoudHonk;

class FastCar extends Car
{
    public function __construct()
    {
        $this->driveBehaviour = new FastDrive();
        $this->honkBehaviour = new LoudHonk();
    }

    public function display(): string
    {
        return "Hell yeah, I'm a fast car!";
    }
}
