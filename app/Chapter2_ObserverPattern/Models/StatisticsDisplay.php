<?php

namespace App\Chapter2_ObserverPattern\Models;

use App\Chapter2_ObserverPattern\Interfaces\IDisplay;
use App\Chapter2_ObserverPattern\Interfaces\IObserver;

class StatisticsDisplay implements IObserver, IDisplay
{
    private float $maxTemperature = 0.0;
    private float $minTemperature = 200;
    private float $temperatureSum = 0.0;
    private int $numReadings;
    private WeatherData $weatherData;

    public function __construct(WeatherData $weatherData) {
        $this->weatherData = $weatherData;
        $this->weatherData->registerObserver($this);
    }

    public function update() : array {
        $temperature = $this->weatherData->getTemperature();
        $this->temperatureSum += $temperature;
        $this->numReadings++;

        if ($temperature > $this->maxTemperature) {
            $this->maxTemperature = $temperature;
        }

        if ($temperature < $this->minTemperature) {
            $this->minTemperature = $temperature;
        }

        return $this->display();
    }

    public function display() : array {
        return [
          "maxTemperature" => $this->maxTemperature,
          "minTemperature" => $this->minTemperature,
          "averageTemperature" => $this->calculateAverageTemperature(),
        ];
    }

    public function calculateAverageTemperature() : float {
        if ($this->numReadings <= 0) {
            return 0.0;
        }
        $averageTemp = $this->temperatureSum / $this->numReadings;
        return round($averageTemp, 2);
    }

}
