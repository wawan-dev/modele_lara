<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\CustomerController;


Route::get('/', function () {
    return view('welcome');
});



Route::get('/orders/create', [OrdersController::class, 'createForm']);
Route::post('/orders/create', [OrdersController::class, 'create']);

Route::get('/orders', [OrdersController::class, 'list']);
Route::get('/orders/{id}', [OrdersController::class, 'detail']);

Route::get('/customers', [CustomerController::class, 'list']);

Route::get('/customers/categories', [CustomerController::class, 'test']);