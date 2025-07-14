<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EssenController;
use App\Http\Controllers\BuyController;
Route::get('/', [EssenController::class, 'index'])->name('products.index');
Route::get('/admin', [EssenController::class, 'admin'])->name('products.dashboard');
Route::get('/admin/add', [EssenController::class, 'create'])->name('products.add');
Route::post('/admin/store', [EssenController::class, 'store'])->name('products.store');
Route::get('/admin/edit/{id}', [EssenController::class, 'edit'])->name('products.edit');
Route::put('/admin/update/{id}', [EssenController::class, 'update'])->name('products.update');
Route::delete('/admin/delete/{id}', [EssenController::class, 'destroy'])->name('products.delete_');
Route::get('/product/{id}', [EssenController::class, 'show'])->name('products.show');
Route::get('/product/more/{id}', [EssenController::class, 'more'])->name('products.more');
Route::get('/product/buy/{id}', [BuyController::class, 'buy'])->name('products.buy');
Route::post('/product/buy/{id}', [BuyController::class, 'buy_post'])->name('products.buy_post');
Route::get('/order', [EssenController::class, 'order'])->name('order.order');
Route::delete('/order/delete/{id}', [BuyController::class, 'delete'])->name('products.delete');
Route::get('/about',[BuyController::class, 'about'])->name('products.about');
Route::get('/contact',[BuyController::class, 'contact'])->name('products.contact');
