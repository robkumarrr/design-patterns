<?php

namespace App\Http\Controllers;

use App\Patterns\Ch01_Strategy\Factories\CarFactory;
use Illuminate\Http\JsonResponse;

class DesignPatternController extends Controller
{
    public function chapterOne(string $type): JsonResponse
    {
        $car = CarFactory::make($type);

        return response()->json([
            'car_type' => $car->display(),
            'honk' => $car->performHonk(),
            'drive' => $car->performDrive()
        ]);
    }
}
