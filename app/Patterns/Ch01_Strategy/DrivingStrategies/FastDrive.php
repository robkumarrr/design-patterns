<?php

namespace App\Patterns\Ch01_Strategy\DrivingStrategies;

use App\Patterns\Ch01_Strategy\Interfaces\DriveBehaviour;

class FastDrive implements DriveBehaviour
{
    public function drive(): string
    {
        return 'Driving fast!';
    }
}
