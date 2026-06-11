<?php

namespace App\Chapter2_ObserverPattern\Models;

use App\Chapter2_ObserverPattern\Interfaces\IDisplay;
use App\Chapter2_ObserverPattern\Interfaces\IObserver;

class HeatIndexDisplay implements IObserver, IDisplay
{
    public float $heatIndex = 0.0;
    private WeatherData $weatherData;
    public function __construct(WeatherData $weatherData) {
        $this->weatherData = $weatherData;
        $this->weatherData->registerObserver($this);
    }

    public function update() : array {
        $temperature = $this->weatherData->getTemperature();
        $relativeHumidity = $this->weatherData->getHumidity();
        $this->heatIndex = $this->computeHeatIndex($temperature, $relativeHumidity);

        return $this->display();
    }

    public function computeHeatIndex($t, $rh) : float {
        return ((16.923 + (0.185212* $t) + (5.37941* $rh) - (0.100254* $t* $rh)
                + (0.00941695 * ($t* $t)) + (0.00728898 * ($rh* $rh))
                + (0.000345372 * ($t* $t* $rh)) - (0.000814971 * ($t* $rh* $rh))
                +  (0.0000102102 * ($t* $t* $rh* $rh)) - (0.000038646 * ($t* $t* $t))
                + (0.0000291583 * ($rh* $rh* $rh)) + (0.00000142721 * ($t* $t* $t* $rh))
                + (0.000000197483 * ($t* $rh* $rh* $rh)) - (0.0000000218429 * ($t* $t* $t* $rh* $rh))
                + 0.000000000843296 * ($t* $t* $rh* $rh* $rh))
                - (0.0000000000481975 * ($t* $t* $t* $rh* $rh* $rh)));
    }

    public function display() : array {
        return [
            "heatIndex" => $this->heatIndex,
        ];
    }
}
