<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('top', function () {
    return view('layouts/app');
});

Route::resource('products', ProductsController::class);
Route::resource('inbox', ContactController::class)->except([
    'create', 'edit', 'destroy'
  ]);
Route::get('/contact_form', function() {
  return view('contacts/create');
});
Route::get('/cafe', function() {
  return view('layouts/cafe');
});
Route::get('/about', function() {
  return view('layouts/about');
});
