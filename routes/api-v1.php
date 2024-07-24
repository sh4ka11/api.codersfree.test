<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Register;


Route::get('/', function () {
    return view('welcome');
    
});

Route::get('users/{id}', function ($id) {
    
});

// Route::get('/prueba', function()){
//     Return 'prueba';
// });



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('register', [Register::class, 'store'])->name('api.v1.registrer');