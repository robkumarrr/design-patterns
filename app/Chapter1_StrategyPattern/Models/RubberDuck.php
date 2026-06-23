<?php

namespace App\Chapter1_StrategyPattern\Models;

use App\Chapter1_StrategyPattern\Interfaces\IFlyingBehaviour;
use App\Chapter1_StrategyPattern\Interfaces\IQuackBehaviour;

class RubberDuck extends Duck
{
    public function __construct(IFlyingBehaviour $flyingBehavior, IQuackBehaviour $quackBehavior)
    {
        parent::__construct($flyingBehavior, $quackBehavior);
    }
}
