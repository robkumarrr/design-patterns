<?php

namespace App\Chapter4_FactoryPattern\Controllers;

use App\Chapter4_FactoryPattern\Models\PizzaPizzaPizzaPizzaStore;
use App\Chapter4_FactoryPattern\Models\PizzaPizzaPizzaStore;
use App\Http\Controllers\Controller;

class PizzaController extends Controller
{
    public function index(): void
    {

        $pizzaPizzaStore = new PizzaPizzaPizzaStore();
        $pizzaPizzaPizzaStore = new PizzaPizzaPizzaPizzaStore();

        $pizza = $pizzaPizzaStore->orderPizza('pepperoni');

        echo "Bob ordered a {$pizza->getName()} <br>";

        $pizza = $pizzaPizzaPizzaStore->orderPizza('cheese');

        echo "Ted ordered a {$pizza->getName()}";

    }
}
