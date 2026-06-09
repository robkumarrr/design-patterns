<?php

use App\Chapter1_StrategyPattern\Controllers\StrategyController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/duck', [StrategyController::class, 'index']);
