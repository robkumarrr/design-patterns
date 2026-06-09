<?php

namespace App\Chapter1_StrategyPattern\Models;

use App\Chapter1_StrategyPattern\Interfaces\IFlyingBehaviour;
use App\Chapter1_StrategyPattern\Interfaces\IQuackBehaviour;

abstract class Duck
{

    public function __construct(public IFlyingBehaviour $flyingBehavior, public IQuackBehaviour $quackBehavior)
    {
    }

    public function performFly() : string {
        return $this->flyingBehavior->fly();
    }

    public function performQuack() : string {
        return $this->quackBehavior->quack();
    }
}
