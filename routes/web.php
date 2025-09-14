<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\StoreController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\WishlistController;

// Route::middlewareGroup('check:role');

Route::get('/', function () {
    return redirect('index');
});
// Route::get('/upload', [UploadController::class, 'create'])->name('upload.create');
// Route::post('/upload', [UploadController::class, 'store'])->name('upload.store');
Route::get('/index', [StoreController::class, 'storePage'])->name('index.storepage');

Route::get('/loginCustomer', [StoreController::class, 'loginPage'])->name('loginCustomer.loginPage');
Route::post('/loginCustomer', [LoginController::class, 'authenticate'])->name('loginCustomer.auth');

Route::get('/signup', [StoreController::class, 'signupPage'])->name('loginCustomer.signupPage');
Route::post('/signup', [LoginController::class, 'signup'])->name('loginCustomer.signup');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/profile', [StoreController::class, 'profilePage'])->name('customer.profile');

Route::get('/search', [StoreController::class, 'searchPage'])->name('index.search');

Route::get('/type/{id}', [StoreController::class, 'typePage'])->name('index.type');
Route::get('/author/{id}', [StoreController::class, 'authorPage'])->name('index.author');
Route::get('/category/{id}', [StoreController::class, 'categoryPage'])->name('index.category');

Route::get('/buy/{id}', [StoreController::class, 'buyPage'])->name('index.buy');
Route::post('/get-snap-token', [PaymentController::class, 'getSnapToken'])->name('index.paymentProcess');
Route::post('/payment-success', [PaymentController::class, 'paymentSuccess'])->name('index.paymentSuccess');

Route::post('/wishlist/{user_id}/{book_id}', [WishlistController::class, 'wishlist'])->name('wishlist');
Route::get('/wishlistPage/{id}', [StoreController::class, 'wishlistPage'])->name('index.wishlist');
Route::delete('/wishlist/remove/{user_id}/{book_id}', [WishlistController::class, 'removeWishlist'])->name('wishlist.remove');