<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('login');
});
Route::resource('/product', ProductsController::class);

// Route::get('/productManagement', function () {
//     return view('admin.productManagement');
// });
// Route::get('/createProduct', function () {
//     return view('admin.createProduct');
// });
Route::get('/register', function () {return view('register');});