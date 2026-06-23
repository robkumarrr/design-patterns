<?php

namespace App\Chapter1_StrategyPattern\Behaviours;

use App\Chapter1_StrategyPattern\Interfaces\IFlyingBehaviour;

class NoCanFly implements IFlyingBehaviour
{
    public function fly(): string
    {
        return 'I am NOT flying!';
    }
}
