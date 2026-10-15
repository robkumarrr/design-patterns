<?php

use App\Chapter1_StrategyPattern\Controllers\StrategyController;
use App\Chapter2_ObserverPattern\Controllers\ObserverController;
use App\Chapter3_DecoratorPattern\Controllers\DecoratorController;
use App\Chapter4_FactoryPattern\Controllers\PizzaController;
use App\Chapter5_SingletonPattern\Controllers\SingletonController;
use App\Chapter6_CommandPattern\Controllers\RemoteController;
use App\Chapter7_AdapterPattern\Controllers\AdapterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Chapter 1: Strategy Pattern
Route::prefix('duck')->name('duck.')->controller(StrategyController::class)->group(function () {
    Route::get('/', 'index')->name('index');
});

// Chapter 2: Observer Pattern
Route::prefix('weather')->name('weather.')->controller(ObserverController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/current-conditions', 'currentConditions')->name('current-conditions');
    Route::get('/forecast', 'forecast')->name('forecast');
    Route::get('/heat-index', 'heatIndex')->name('heat-index');
    Route::get('/statistics', 'statistics')->name('statistics');
});

// Chapter 3: Decorator Pattern
Route::prefix('decorator')->name('decorator.')->controller(DecoratorController::class)->group(function () {
    Route::get('/', 'index')->name('index');
});

// Chapter 4: Factory Pattern
Route::prefix('pizza')->name('pizza.')->controller(PizzaController::class)->group(function () {
    Route::get('/', 'index')->name('index');
});

// Chapter 5: Singleton Pattern
Route::prefix('singleton')->name('singleton.')->controller(SingletonController::class)->group(function () {
    Route::get('/', 'index')->name('index');
});

// Chapter 6: Command Pattern
Route::prefix('remote')->name('remote.')->controller(RemoteController::class)->group(function () {
    Route::get('/', 'index')->name('index');
});

// Chapter 7: Adapter Pattern
Route::prefix('adapter')->name('adapter.')->controller(AdapterController::class)->group(function () {
    Route::get('/', 'index')->name('index');
});
