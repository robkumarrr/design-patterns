<?php

namespace App\Chapter2_ObserverPattern\Displays;

use App\Chapter2_ObserverPattern\Interfaces\IDisplay;
use App\Chapter2_ObserverPattern\Interfaces\IObserver;
use App\Chapter2_ObserverPattern\Models\WeatherData;

class CurrentConditionsDisplay implements IObserver, IDisplay
{
    private float $temperature;
    private float $humidity;
    private WeatherData $weatherData;

    public function __construct(WeatherData $weatherData) {
        $this->weatherData = $weatherData;
        $this->weatherData->attachObserver($this);
    }

    public function update() : array {
        $this->temperature = $this->weatherData->getTemperature();
        $this->humidity = $this->weatherData->getHumidity();

        return $this->display();
    }

    public function display() : array
    {
        return [
            "temperature" => $this->temperature,
            "humidity" => $this->humidity,
        ];
    }
}
