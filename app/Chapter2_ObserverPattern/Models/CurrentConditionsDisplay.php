<?php

namespace App\Chapter2_ObserverPattern\Models;

use App\Chapter2_ObserverPattern\Interfaces\IObserver;
use App\Chapter2_ObserverPattern\Interfaces\IDisplay;

class CurrentConditionsDisplay implements IObserver, IDisplay
{
    private float $temperature;
    private float $humidity;
    private WeatherData $weatherData;

    public function __construct(WeatherData $weatherData) {
        $this->weatherData = $weatherData;
        $this->weatherData->registerObserver($this);
    }

    public function update() : void {
        $this->temperature = $this->weatherData->getTemperature();
        $this->humidity = $this->weatherData->getHumidity();
    }

    public function display() : array
    {
        return [
            "temperature" => $this->temperature,
            "humidity" => $this->humidity,
        ];
    }
}
