<?php

namespace App\Patterns\Ch01_Strategy\HonkingStrategies;

use App\Patterns\Ch01_Strategy\Interfaces\HonkBehaviour;

class LoudHonk implements HonkBehaviour
{
    public function honk(): string
    {
        return 'LOUD honk!!!!';
    }
}
