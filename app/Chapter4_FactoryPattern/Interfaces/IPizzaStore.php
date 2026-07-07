<?php

namespace App\Chapter4_FactoryPattern\Interfaces;

use App\Chapter4_FactoryPattern\Models\Pizza;

abstract class IPizzaStore
{
    abstract function createPizza(string $pizzaType): Pizza;

    function orderPizza(string  $pizzaType) : Pizza {
        $pizza = $this->createPizza($pizzaType);
        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();
        return $pizza;
    }
}
