<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\OrderController;

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

Route::get('/login', function () {
    return view('login');
});

Route::resource('/product', ProductsController::class);
Route::resource('/employee', EmployeeController::class);
Route::get(
    '/admin/adminDashboard',
    function () {
        return view('/admin/adminDashboard');
    }
)->name('admin.adminDashboard');


Route::get('/customer/register', function () {
    return view('register');
});
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/register', [CustomerController::class, 'store'])->name('register');
Route::get(
    '/customer/customerDashboard',
    function () {
        return view('/customer/customerDashboard');
    }
)->name('customer.customerDashboard');

Route::post('/customer/order/{id}', [OrderController::class, 'selectEmployee'])->name('product.selectEmployee');
Route::post('/customer/order/', [OrderController::class, 'store'])->name('product.order');

Route::get('/customer/order', [ProductsController::class, 'getProduct'])->name('customer.name');
