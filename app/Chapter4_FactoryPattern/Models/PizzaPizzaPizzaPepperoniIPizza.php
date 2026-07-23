<?php

namespace App\Chapter4_FactoryPattern\Models;

class PizzaPizzaPizzaPepperoniIPizza extends Pizza
{
    public function __construct()
    {
        $this->name = "Pizza Pizza Pizza Pepperoni Pizza";
        $this->dough = 'Extra Think Crush Dough';
        $this->sauce = 'Plum Tomato Sauce';
        $this->toppings[] = 'Shredded Mozzarella Cheese';
    }

    public function prepare(): void {
        echo "Preparing $this->name<br>";
        echo "Tossing $this->dough...<br>";
        echo "Adding $this->sauce...<br>";
        echo "Adding toppings:<br>";

        foreach ($this->toppings as $topping) {
            echo "$topping<br>";
        }
    }
    public function bake(): void {
        echo "Bake for 25 minutes at 350 ...<br>";
    }
    public function cut(): void {
        echo "Cutting the pizza into diagonal slices...<br>";
    }
    public function box(): void {
        echo "Placing pizza in official PizzaPizzaPizzaStore box <br>";
    }
}
