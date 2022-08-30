<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ThanksController;
use App\Http\Controllers\MyPageController;


Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/search', [IndexController::class, 'search'])->name('search');
Route::get('/shop/detail', [ShopController::class, 'show'])->name('detail');
Route::get('/thanks-register', [ThanksController::class, 'thanksRegister'])->middleware(['auth']);
Route::post('/shop/book', [ShopController::class, 'store'])->middleware(['auth'])->name('book');
Route::get('/thanks-book', [ThanksController::class, 'thanksBook'])->middleware(['auth']);
Route::post('/like', [IndexController::class, 'like'])->middleware(['auth'])->name('like');
Route::post('/dislike', [IndexController::class, 'dislike'])->middleware(['auth'])->name('dislike');
Route::get('/my-page', [MyPageController::class, 'index'])->middleware(['auth'])->name('my_page');
Route::post('/my-page/edit-booking', [MyPageController::class, 'editBooking'])->middleware(['auth'])->name('editBooking');
Route::get('/thanks-book-edit', [ThanksController::class, 'thanksBookEdit'])->middleware(['auth']);
Route::post('/my-page/destroy-booking', [MyPageController::class, 'destroyBooking'])->middleware(['auth'])->name('destroyBooking');
Route::get('/thanks-book-destroy', [ThanksController::class, 'thanksBookDestroy'])->middleware(['auth']);
Route::post('/my-page/dislike', [MyPageController::class, 'dislike'])->middleware(['auth'])->name('my_page_dislike');
Route::post('/my-page/rating', [MyPageController::class, 'rait'])->middleware(['auth'])->name('rating');



Route::get('/dashboard', [IndexController::class, 'index'])->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
