<?php

namespace App\Chapter2_ObserverPattern\Interfaces;

interface IObserver
{
    public function update() : array;
}
