<?php

namespace App\Chapter2_ObserverPattern\Interfaces;

interface ISubject {
    public function registerObserver(IObserver $o): void;
    public function removeObserver(IObserver $o) : void;
    public function notifyObservers() : void;
}
