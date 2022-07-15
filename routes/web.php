<?php

use App\Http\Controllers\FarmCowCertificateController;
use App\Http\Controllers\FarmCowController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\FarmController;
use App\Http\Controllers\CowMilkConsignmentController;
use App\Http\Controllers\MilkConsigmentCowController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderProductController;
use App\Http\Controllers\ProductConsignmentController;
use App\Http\Controllers\ProductController;
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
    return view('welcome');
})->name('home');

Route::resource('/employees', EmployeeController::class);

Route::resource('/farms', FarmController::class);

Route::resource('/farms.cows', FarmCowController::class)
    ->except(['index']);

Route::resource('/farms.cows.certificates', FarmCowCertificateController::class)
    ->except(['index']);

Route::resource('/farms.cows.milk-consignments', CowMilkConsignmentController::class)
    ->except(['index']);



Route::resource('/orders', OrderController::class);

Route::resource('/order-products', OrderProductController::class);

Route::resource('/products', ProductController::class);

Route::resource('/product-consignments', ProductConsignmentController::class);
