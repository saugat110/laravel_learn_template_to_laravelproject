<?php

use App\Http\Controllers\Frontend\AboutusController;
use App\Http\Controllers\Frontend\ContactusController;
use App\Http\Controllers\Frontend\OurservicesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/aboutus', [AboutusController::class, 'index']);

Route::get('/contactus', [ContactusController::class, 'index']);

Route::get('/ourservices', [OurservicesController::class, 'index']);

