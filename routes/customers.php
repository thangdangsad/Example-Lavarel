<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;



Route::get('/customers',[CustomerController::class,'index'])->name('customers.index');
Route::post('/customer',[CustomerController::class,'store'])->name('customers.store');
Route::get("/customers/create",[CustomerController::class,'create'])->name('customers.create');
Route::get('/customers/{id}',[CustomerController::class,'show'])->name('customers.show');
Route::get('/customers/{id}/edit',[CustomerController::class,'edit'])->name('customers.edit');
Route::put('/customers/{id}',[CustomerController::class,'update'])->name('customers.update');
Route::delete('/customers/{customer}', [CustomerController::class, 'destroy1'])->name('customers.destroy');

Route::get('/customers/list/{id}',[CustomerController::class,'list'])->name('customers.list');

// xem bẳng dữ liệu sqlite ở web: https://inloop.github.io/sqlite-viewer/