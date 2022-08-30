<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ThanksController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\MyPageController;


Route::get('/', [ShopController::class, 'index'])->name('index');
Route::get('/search', [ShopController::class, 'search'])->name('search');
Route::get('/detail', [ShopController::class, 'show'])->name('detail');
// Route::get('/register', [RegisterController::class, 'index']);
// Route::post('/register', [RegisterController::class, 'store']);
Route::get('/thanks-register', [ThanksController::class, 'thanksRegister']);
// Route::get('/login', [LoginController::class, 'index']);
// Route::post('/login', [LoginController::class, 'input']);
Route::post('/book', [BookController::class, 'store'])->middleware(['auth'])->name('book');
Route::get('/thanks-book', [ThanksController::class, 'thanksBook'])->middleware(['auth']);
Route::post('/like', [LikeController::class, 'like'])->middleware(['auth'])->name('like');
Route::post('/dislike', [LikeController::class, 'dislike'])->middleware(['auth'])->name('dislike');
Route::post('/dislike', [LikeController::class, 'dislike'])->middleware(['auth'])->name('dislike');
Route::get('/my-page', [MyPageController::class, 'index'])->middleware(['auth'])->name('my_page');
// Route::post('/my-page/booking', [MyPageController::class, 'destroyBooking']);
Route::post('/my-page/booking', [BookController::class, 'destroyBooking'])->middleware(['auth'])->name('destroyBooking');


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', [ShopController::class, 'index'])->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
