<?php

use App\Http\Controllers\FlagController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('flags', FlagController::class)
    ->only(['index', 'store']);

Route::get('raffy-gwapo', [FlagController::class, 'raffyGwapo'])
    ->name('flags.raffy-gwapo');
