<?php

namespace App\Chapter4_FactoryPattern\Models;

class PizzaPizzaPizzaStore extends PizzaStore
{
    public function createPizza($type): Pizza
    {
        if ($type === "pepperoni")
        {
            return PizzaPizzaCheesePizza();
        }
    }

}
