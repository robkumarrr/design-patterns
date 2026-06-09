<?php

namespace App\Chapter1_StrategyPattern\Controllers;

use App\Chapter1_StrategyPattern\Behaviours\NoCanFly;
use App\Chapter1_StrategyPattern\Behaviours\NoCanQuack;
use App\Chapter1_StrategyPattern\Models\RubberDuck;
use App\Http\Controllers\Controller;

class StrategyController extends Controller
{
    public function index()
    {
        $rubberDuck = new RubberDuck(new NoCanFly(), new NoCanQuack());

        return $rubberDuck->performFly();
    }
}
