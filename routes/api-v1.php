<?php

use App\Http\Controllers\Api\RegisterController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/prueba', function() {
//     return 'prueba';
// });

Route::post('register', [RegisterController::class, 'store'])->name('api.v1.register');
