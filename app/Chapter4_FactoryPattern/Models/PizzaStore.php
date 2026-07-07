<?php

namespace App\Chapter4_FactoryPattern\Models;

use App\Chapter4_FactoryPattern\Classes\PepperoniPizza;
use App\Chapter4_FactoryPattern\Classes\VegetarianPizza;
use App\Chapter4_FactoryPattern\Interfaces\IPizzaStore;

class PizzaStore extends IPizzaStore
{
    public function createPizza($type): Pizza
    {
        if ($type == 'vegetarian') {
            return new VegetarianPizza();
        }

        return new PepperoniPizza();
    }
}
