<?php

namespace App\Chapter1_StrategyPattern\Behaviours;

use App\Chapter1_StrategyPattern\Interfaces\IQuackBehaviour;

class NoCanQuack implements IQuackBehaviour
{
    public function quack(): string
    {
        return 'I am NOT quacking!';
    }
}
