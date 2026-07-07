<?php

use App\Chapter1_StrategyPattern\Controllers\StrategyController;
use App\Chapter3_DecoratorPattern\Controllers\DecoratorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/duck', [StrategyController::class, 'index']);

Route::get('/decorator', [DecoratorController::class, 'index'])->name('decorator.index');
