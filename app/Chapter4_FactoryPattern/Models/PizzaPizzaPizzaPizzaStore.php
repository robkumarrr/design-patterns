<?php

namespace App\Chapter4_FactoryPattern\Models;

class PizzaPizzaPizzaPizzaStore extends PizzaStore
{
    public function createPizza($type): Pizza
    {
        if ($type === "pepperoni")
        {
            return new PizzaPizzaPizzaPepperoniIPizza();
        } else  {
            return new PizzaPizzaPizzaCheeseIPizza();
        }
    }

}
