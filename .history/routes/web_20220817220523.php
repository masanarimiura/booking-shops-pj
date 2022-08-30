<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ThanksController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\MyPageController;


Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/search', [IndexController::class, 'search'])->name('search');
Route::get('/shop/detail', [ShopController::class, 'show'])->name('detail');
Route::get('/thanks-register', [ThanksController::class, 'thanksRegister'])->middleware(['auth']);
Route::post('/shop/book', [ShopController::class, 'store'])->middleware(['auth'])->name('book');
Route::get('/thanks-book', [ThanksController::class, 'thanksBook'])->middleware(['auth']);
Route::post('/like', [IndexController::class, 'like'])->middleware(['auth'])->name('like');
Route::post('/dislike', [IndexController::class, 'dislike'])->middleware(['auth'])->name('dislike');
Route::post('/my-page/dislike', [MyPageController::class, 'dislikeMyPage'])->middleware(['auth'])->name('my_page');
Route::get('/my-page', [MyPageController::class, 'index'])->middleware(['auth'])->name('my_page');
// Route::post('/my-page/booking', [MyPageController::class, 'destroyBooking']);
Route::post('/my-page/booking', [BookController::class, 'destroyBooking'])->middleware(['auth'])->name('destroyBooking');


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', [IndexController::class, 'index'])->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
