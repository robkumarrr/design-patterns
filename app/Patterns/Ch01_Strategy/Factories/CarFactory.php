<?php

namespace App\Patterns\Ch01_Strategy\Factories;

use App\Patterns\Ch01_Strategy\Models\Car;
use App\Patterns\Ch01_Strategy\Models\FastCar;

class CarFactory
{
    public static function make(string $type): Car
    {
        return match($type)
        {
            'fast' => new FastCar(),
            default  => throw new \InvalidArgumentException("Unknown car: $type")
        };
    }
}
