<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SslCommerzPaymentController;

Route::get("/", [HomeController::class,"my_home"])->name("root");

Route::get('/home', [HomeController::class,'index'])->name('home');

Route::get('/add_food', [AdminController::class,'add_food'])->name('add_food');

Route::post('/upload_food', [AdminController::class,'upload_food'])->name('upload_food');

Route::get('/view_food', [AdminController::class,'view_food'])->name('view_food');

Route::get('/delete_food/{id}', [AdminController::class,'delete_food'])->name('delete_food');

Route::get('/update_food/{id}', [AdminController::class,'update_food'])->name('update_food');

Route::post('/edit_food/{id}', [AdminController::class,'edit_food'])->name('edit_food');

Route::post('/add_cart/{id}', [HomeController::class,'add_cart'])->name('add_cart');

Route::get('/my_cart', [HomeController::class,'my_cart'])->name('my_cart');

Route::get('/remove_cart/{id}', [HomeController::class,'remove_cart'])->name('remove_cart');

Route::post('/confirm_order', [HomeController::class,'confirm_order'])->name('confirm_order');

Route::get('/my_orders', [HomeController::class,'my_orders'])->name('my_orders'); // New route for My Orders
// 
Route::get('/orders', [AdminController::class,'orders'])->name('orders');

Route::get('/on_the_way/{id}', [AdminController::class,'on_the_way'])->name('on_the_way');

Route::get('/delivered/{id}', [AdminController::class,'delivered'])->name('delivered');

Route::get('/cancelled/{id}', [AdminController::class,'cancelled'])->name('cancelled');

Route::post('/book_table', [HomeController::class,'book_table'])->name('book_table');

Route::get('/reservation', [AdminController::class,'reservation'])->name('reservation');

// SSLCOMMERZ Start
Route::get('/checkout', [SslCommerzPaymentController::class, 'exampleEasyCheckout'])->name('checkout');
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END

Route::post('/submit-review', [HomeController::class, 'submit_review'])->name('submit_review');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});