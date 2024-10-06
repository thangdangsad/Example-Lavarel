<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SinhVienController;
use App\Http\Controllers\ProductsController;


// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/customers', [CustomerController::class, 'index']);
// Route::get('/customers/{id}', [CustomerController::class, 'show']);

Route::resource('/sinhvien',SinhVienController::class);
Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index');
Route::get('/customers/create', [CustomerController::class, 'create'])->name('customers.create');
Route::post('/customers', [CustomerController::class, 'store'])->name('customers.store');
Route::get('/customers/{id}', [CustomerController::class, 'show'])->name('customers.show');

Route::get('/products',[ProductsController::class,'index'])->name('products.index');
Route::post('/products/store',[ProductsController::class,'store'])->name('products.store');
Route::get("/products/create",[ProductsController::class,'create'])->name('products.create');
Route::get('/products/{id}',[ProductsController::class,'show'])->name('products.show');
Route::get('/products/{id}/edit',[ProductsController::class,'edit'])->name('products.edit');
Route::put('/products/{id}',[ProductsController::class,'update'])->name('products.update');
Route::delete('/products/{customer}', [ProductsController::class, 'destroy1'])->name('products.destroy');