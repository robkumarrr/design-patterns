<?php

namespace App\Chapter2_ObserverPattern\Controllers;

use App\Chapter2_ObserverPattern\Displays\CurrentConditionsDisplay;
use App\Chapter2_ObserverPattern\Displays\ForecastDisplay;
use App\Chapter2_ObserverPattern\Displays\StatisticsDisplay;
use App\Chapter2_ObserverPattern\Models\WeatherData;
use App\Http\Controllers\Controller;

class ObserverController extends Controller
{
    public function index()
    {
        $weatherData = new WeatherData();
        $currentConditionsDisplay = new CurrentConditionsDisplay($weatherData);
        $statisticsDisplay = new StatisticsDisplay($weatherData);
        $forecastDisplay = new ForecastDisplay($weatherData);

        // Problem: setMeasurements will call notify observers, which calls their update method, which calls their display method
        // The display method returns a string atm
        // How do we send multiple updates to the frontend display?
        $weatherData->setMeasurements(80, 65, 30.4);
        $weatherData->setMeasurements(82, 70, 29.2);
        $weatherData->setMeasurements(78, 90, 29.2);
    }
}
