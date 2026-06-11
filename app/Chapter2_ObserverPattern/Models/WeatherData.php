<?php

namespace App\Chapter2_ObserverPattern\Models;

use App\Chapter2_ObserverPattern\Interfaces\ISubject;
use App\Chapter2_ObserverPattern\Interfaces\IObserver;
use Illuminate\Database\Eloquent\Model;

class WeatherData extends Model implements ISubject
{
    private array $observers = [];
    private float $temperature;
    private float $humidity;
    private float $pressure;

    public function registerObserver(IObserver $o) : void {
        $this->observers[] = $o;
    }

    public function removeObserver(IObserver $o) : void {
        $this->observers = array_filter($this->observers, [$o]);
    }

    public function notifyObservers() : void {
        foreach ($this->observers as $observer) {
            $observer->update();
        }
    }

    public function measurementsChanged() : void {
        $this->notifyObservers();
    }

    public function setMeasurements(float $temperature, float $humidity, float $pressure) : void {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
        $this->measurementsChanged();
    }

    public function getTemperature(): float {
        return $this->temperature;
    }

    public function getHumidity(): float {
        return $this->humidity;
    }

    public function getPressure(): float {
        return $this->pressure;
    }

}
