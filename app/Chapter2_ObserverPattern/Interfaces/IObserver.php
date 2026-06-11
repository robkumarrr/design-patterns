<?php

namespace App\Chapter2_ObserverPattern\Interfaces;

interface IObserver
{
    public function update(float $temp, float $humidity, float $pressure);
}
