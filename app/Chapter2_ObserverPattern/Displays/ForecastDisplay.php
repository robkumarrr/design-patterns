<?php

namespace App\Chapter2_ObserverPattern\Displays;

use App\Chapter2_ObserverPattern\Interfaces\IDisplay;
use App\Chapter2_ObserverPattern\Interfaces\IObserver;
use App\Chapter2_ObserverPattern\Models\WeatherData;

class ForecastDisplay implements IObserver, IDisplay
{
    private float $currentPressure = 29.92;
    private float $lastPressure;
    private WeatherData $weatherData;

    public function __construct(WeatherData $weatherData) {
        $this->weatherData = $weatherData;
        $this->weatherData->attachObserver($this);
    }

    public function update() : array {
        $this->lastPressure = $this->currentPressure;
        $this->currentPressure = $this->weatherData->getPressure();

        return $this->display();
    }

    public function display() : array {
        $pressureInfo = [
            "pressure" => $this->currentPressure
        ];

        if ($this->currentPressure > $this->lastPressure) {
            $pressureInfo["message"] = "Improving weather on the way!";
        } else if ($this->currentPressure === $this->lastPressure) {
            $pressureInfo["message"] = "More of the same";
        } else {
            $pressureInfo["message"] = "Watch out for cooler, rainy weather";
        }

        return $pressureInfo;
    }

}
