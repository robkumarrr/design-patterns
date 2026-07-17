<?php

namespace App\Chapter4_FactoryPattern\Models;

abstract class PizzaStore
{
    public function orderPizza(string $type): Pizza {
        $pizza = $this->createPizza($type);

        return $pizza;
    }

    abstract public function createPizza($type): Pizza;

}
