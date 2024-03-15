<?php

use App\Http\Controllers\StripePaymentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoomController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/customer', [RoomController::class, 'show'])->name('rooms.show');
Route::get('/customer/refund/{uuid}', [RoomController::class, 'refund'])->name('rooms.refund');

Route::get('/admin/rooms-list', [RoomController::class, 'index'])->name('rooms.index');

Route::get('/',[AuthController::class,'index'])->name('home');
Route::get('/room',[AuthController::class,'room'])->name('room');
Route::get('/register',[AuthController::class,'register'])->name('register');
Route::post('/registers',[AuthController::class,'registers'])->name('registers');
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/logins',[AuthController::class,'logins'])->name('logins');
Route::get('/gallery',[AuthController::class,'gallery'])->name('gallery');
Route::get('/contact',[AuthController::class,'contact'])->name('contact');
Route::get('/service',[AuthController::class,'service'])->name('service');
Route::post('/contact-save',[AuthController::class,'contactSave'])->name('contact-save');
Route::post('/book-save',[AuthController::class,'bookSave'])->name('book-save');
Route::get('/admin/booking-list',[AuthController::class,'getBooking'])->name('booking-list');
Route::get('/admin/contact-list',[AuthController::class,'getContact'])->name('contact-list');

Route::resource('/auth',AuthController::class);

Route::controller(StripePaymentController::class)->group(function(){
    Route::get('stripe', 'stripe')->name('stripe.form');
    Route::post('stripe', 'stripePost')->name('stripe.post');

});

