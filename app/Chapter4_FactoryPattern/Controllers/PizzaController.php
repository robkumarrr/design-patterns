<?php

namespace App\Chapter4_FactoryPattern\Controllers;

use App\Chapter4_FactoryPattern\Models\PizzaStore;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class PizzaController extends Controller {
    public function index(): JsonResponse
    {
        $pizzaStore = new PizzaStore();
        $pizza = $pizzaStore->orderPizza("vegetarian");

        return response()->json([ "pizza" => $pizza]);
    }
}
