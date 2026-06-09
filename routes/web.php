<?php

use App\Http\Controllers\DesignPatternController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/patterns/ch01/{car}', [DesignPatternController::class, 'chapterOne']);
