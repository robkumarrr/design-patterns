<?php

namespace App\Chapter2_ObserverPattern\Controllers;

use App\Chapter2_ObserverPattern\Displays\CurrentConditionsDisplay;
use App\Chapter2_ObserverPattern\Displays\ForecastDisplay;
use App\Chapter2_ObserverPattern\Displays\HeatIndexDisplay;
use App\Chapter2_ObserverPattern\Displays\StatisticsDisplay;
use App\Chapter2_ObserverPattern\Models\WeatherData;
use App\Http\Controllers\Controller;

class ObserverController extends Controller
{
    public function index()
    {
        return view('weather.index');
    }

    public function currentConditions() {
        $weatherData = new WeatherData();
        $currentConditionsDisplay = new CurrentConditionsDisplay($weatherData);
        $weatherData->setMeasurements(80, 65, 30.4);

        return view('weather.current-conditions', $currentConditionsDisplay->display());
    }

    public function forecast() {
        $weatherData = new WeatherData();
        $forecastDisplay = new ForecastDisplay($weatherData);
        $weatherData->setMeasurements(80, 65, 30.4);
        $weatherData->setMeasurements(82, 70, 29.2);

        return view('weather.forecast', $forecastDisplay->display());
    }

    public function heatIndex() {
        $weatherData = new WeatherData();
        $heatIndexDisplay = new HeatIndexDisplay($weatherData);
        $weatherData->setMeasurements(80, 65, 30.4);
        $weatherData->setMeasurements(82, 70, 29.2);

        return view('weather.heat-index', $heatIndexDisplay->display());
    }

    public function statistics() {
        $weatherData = new WeatherData();
        $statisticsDisplay = new StatisticsDisplay($weatherData);
        $weatherData->setMeasurements(80, 65, 30.4);
        $weatherData->setMeasurements(82, 70, 29.2);
        $weatherData->setMeasurements(78, 90, 29.2);

        return view('weather.statistics', $statisticsDisplay->display());
    }
}
