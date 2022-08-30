<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ThanksController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\MyPageController;


Route::get('/', [ShopController::class, 'index']);
Route::get('/detail', [ShopController::class, 'show']);
// Route::get('/register', [RegisterController::class, 'index']);
// Route::post('/register', [RegisterController::class, 'store']);
Route::get('/thanks-register', [ThanksController::class, 'thanksRegister']);
Route::get('/thanks-book', [ThanksController::class, 'thanksBook'])->middleware(['auth']);
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'input']);
Route::post('/book', [BookController::class, 'store'])->middleware(['auth']);
Route::get('/my-page', [MyPageController::class, 'index'])->middleware(['auth']);
Route::post('/my-page/booking', [MyPageController::class, 'destroyBooking'])->middleware(['auth']);
Route::post('/my-page/like', [MyPageController::class, 'destroyLike'])->middleware(['auth']);




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
