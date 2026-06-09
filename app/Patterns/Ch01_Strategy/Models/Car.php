<?php

namespace App\Patterns\Ch01_Strategy\Models;

use App\Patterns\Ch01_Strategy\Interfaces\DriveBehaviour;
use App\Patterns\Ch01_Strategy\Interfaces\HonkBehaviour;

abstract class Car
{
    protected DriveBehaviour $driveBehaviour;
    protected HonkBehaviour $honkBehaviour;

    public function performDrive(): string
    {
        return $this->driveBehaviour->drive();
    }

    public function performHonk(): string
    {
        return $this->honkBehaviour->honk();
    }

    public abstract function display(): string;
}
