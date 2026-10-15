<?php

namespace App\Chapter7_AdapterPattern\Models;

use App\Chapter7_AdapterPattern\Interfaces\IDuck;

class MallardDuck implements IDuck
{
    public function quack(): void
    {
        echo "Quack Quack<br>";
    }

    public function fly(): void
    {
        echo "Flap<br>";
    }
}
