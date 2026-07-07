<?php

use App\Chapter1_StrategyPattern\Controllers\StrategyController;
use App\Chapter2_ObserverPattern\Controllers\ObserverController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/duck', [StrategyController::class, 'index']);

Route::get('/weather', [ObserverController::class, 'index'])->name('weather');
Route::get('/weather/current-conditions', [ObserverController::class, 'currentConditions'])->name('weather.current-conditions');
Route::get('/weather/forecast', [ObserverController::class, 'forecast'])->name('weather.forecast');
Route::get('/weather/heat-index', [ObserverController::class, 'heatIndex'])->name('weather.heat-index');
Route::get('/weather/statistics', [ObserverController::class, 'statistics'])->name('weather.statistics');
