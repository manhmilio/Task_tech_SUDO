<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SVController;

Route::get('/', function () {
    return view('welcome');
});

Route::Resource('/sinhvien', SVController::class);
