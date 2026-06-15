<?php

use App\Chapter1_StrategyPattern\Controllers\StrategyController;
use App\Chapter2_ObserverPattern\Controllers\ObserverController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/duck', [StrategyController::class, 'index']);

Route::get('/weather/current-conditions', [ObserverController::class, 'currentConditions']);
Route::get('/weather/forecast', [ObserverController::class, 'forecast']);
Route::get('/weather/heat-index', [ObserverController::class, 'heatIndex']);
Route::get('/weather/statistics', [ObserverController::class, 'statistics']);
