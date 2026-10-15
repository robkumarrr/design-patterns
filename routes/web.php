<?php

use App\Chapter1_StrategyPattern\Controllers\StrategyController;
use App\Chapter3_DecoratorPattern\Controllers\DecoratorController;
use App\Chapter4_FactoryPattern\Controllers\PizzaController;
use App\Chapter5_SingletonPattern\Controllers\SingletonController;
use Illuminate\Support\Facades\Route;
use App\Chapter2_ObserverPattern\Controllers\ObserverController;
use App\Chapter6_CommandPattern\Controllers\RemoteController;
use App\Chapter7_AdapterPattern\Controllers\AdapterController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/duck', [StrategyController::class, 'index']);

Route::get('/decorator', [DecoratorController::class, 'index'])->name('decorator.index');
Route::get('/weather', [ObserverController::class, 'index'])->name('weather');
Route::get('/weather/current-conditions', [ObserverController::class, 'currentConditions'])->name('weather.current-conditions');
Route::get('/weather/forecast', [ObserverController::class, 'forecast'])->name('weather.forecast');
Route::get('/weather/heat-index', [ObserverController::class, 'heatIndex'])->name('weather.heat-index');
Route::get('/weather/statistics', [ObserverController::class, 'statistics'])->name('weather.statistics');
Route::get('/pizza',[PizzaController::class, 'index'])->name('pizza.index');
Route::get('/singleton', [SingletonController::class, 'index'])->name('singleton.index');
Route::get('/remote', [RemoteController::class, 'index'])->name('remote');
Route::get('/adapter', [AdapterController::class, 'index'])->name('adapter');
