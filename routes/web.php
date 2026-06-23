<?php

use App\Chapter1_StrategyPattern\Controllers\StrategyController;
use App\Chapter3_DecoratorPattern\Controllers\DecoratorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

# Strategy Pattern
Route::prefix('/strategy')->group(function() {
    Route::get('/duck', [StrategyController::class, 'index']);
});

# Decorator Pattern
Route::prefix('/decorator')->group(function() {
    Route::get('/basicConcert', [DecoratorController::class, 'basicConcertTicket']);
    Route::get('/concertWithFees', [DecoratorController::class, 'concertTicketWithFees']);
});
