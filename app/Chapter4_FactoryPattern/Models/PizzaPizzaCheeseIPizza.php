<?php

namespace App\Chapter4_FactoryPattern\Models;

class PizzaPizzaCheeseIPizza extends Pizza
{
    public function __construct()
    {
        $this->name = "Pizza Pizza Cheese Pizza";
        $this->dough = 'Extra Thick Crush Dough';
        $this->sauce = 'Marinara Tomato Sauce';
        $this->toppings[] = 'Shredded Mozzarella Cheese';
    }
    public function prepare(): void {
        echo "<br>Preparing $this->name<br>";
        echo "Tossing $this->dough...<br>";
        echo "Adding $this->sauce...<br>";
        echo "Adding toppings:<br>";

        foreach ($this->toppings as $topping) {
            echo "$topping<br>";
        }
    }
    public function bake(): void {
        echo "Bake for 35 minutes at 350 ...<br>";
    }
    public function cut(): void {
        echo "Cutting the pizza into square slices...<br>";
    }
    public function box(): void {
        echo "Placing pizza in official PizzaPizzaStore box <br>";
    }
}
