<?php

namespace App\Chapter1_StrategyPattern\Behaviours;

use App\Chapter1_StrategyPattern\Interfaces\IFlyingBehaviour;

class CanFly implements IFlyingBehaviour
{
    public function fly(): string
    {
        return 'I am flying!';
    }
}
