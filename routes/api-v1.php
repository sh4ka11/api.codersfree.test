<?php
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\RegisterController;

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/prueba', function() {
//     return 'prueba';
// });

Route::post('register', [RegisterController::class, 'store'])->name('api.v1.register');

Route::get('categories', [CategoryController::class,'index'])->name('api.v1.categories.index');
 Route::post('categories', [CategoryController::class,'store'])->name('api.v1.categories.store');
 Route::get('categories/{category}', [CategoryController::class,'show'])->name('api.v1.categories.show');
 Route::put('categories/{category}', [CategoryController::class,'update'])->name('api.v1.categories.update');
 Route::delete('categories/{category}', [CategoryController::class,'destroy'])->name('api.v1.categories.delete');



// Route::get('Category/create', [CategoryController::class, 'create'])->name('Category.create');
// Route::post('Category/store', [CategoryController::class, 'store'])->name('Category.store');
// Route::get('Category/list', [CategoryController::class, 'index'])->name('Category.index');
// Route::delete('Category/{category}', [CategoryController::class, 'destroy'])->name('Category.destroy');
// Route::get('Category/{category}', [CategoryController::class, 'show'])->name('Category.show');
// Route::put('Category/{category}', [CategoryController::class, 'update'])->name('Category.update');
// Route::get('Category/{category}/edit', [CategoryController::class, 'edit'])->name('Category.edit');


