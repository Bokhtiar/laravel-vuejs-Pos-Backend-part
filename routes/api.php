<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();

});
Route::post('/registration', [App\Http\Controllers\ApiController::class, 'register']);
Route::post('/login', [App\Http\Controllers\ApiController::class, 'login']);

//category
Route::get('/category/index', [App\Http\Controllers\CategoryController::class, 'index']);
Route::post('/category/store', [App\Http\Controllers\CategoryController::class, 'store']);
Route::get('/category/status/{id}', [App\Http\Controllers\CategoryController::class, 's']);
Route::get('/category/edit/{id}', [App\Http\Controllers\CategoryController::class, 'edit']);
Route::post('/category/update/{id}', [App\Http\Controllers\CategoryController::class, 'update']);
Route::get('/category/delete/{id}', [App\Http\Controllers\CategoryController::class, 'delete']);


Route::post('/brand/store', [App\Http\Controllers\BrandController::class, 'store']);
Route::get('/brand/index', [App\Http\Controllers\BrandController::class, 'index']);
Route::get('/brand/edit/{id}', [App\Http\Controllers\BrandController::class, 'edit']);
Route::post('/brand/update/{id}', [App\Http\Controllers\BrandController::class, 'update']);
Route::get('/brand/delete/{id}', [App\Http\Controllers\BrandController::class, 'destroy']);
Route::get('/brand/ways/product/{id}', [App\Http\Controllers\BrandController::class, 'brand_ways_product']);


Route::post('/company/store', [App\Http\Controllers\CompanyController::class, 'store']);
Route::get('/company/index', [App\Http\Controllers\CompanyController::class, 'index']);
Route::get('/company/edit/{id}', [App\Http\Controllers\CompanyController::class, 'edit']);
Route::post('/company/update/{id}', [App\Http\Controllers\CompanyController::class, 'update']);
Route::get('/company/delete/{id}', [App\Http\Controllers\CompanyController::class, 'destroy']);
Route::get('/brand/show/{id}', [App\Http\Controllers\ProductController::class, 'company_ways_show']);


Route::get('/product/index', [App\Http\Controllers\ProductController::class, 'index']);
Route::post('/product/store', [App\Http\Controllers\ProductController::class, 'store']);
Route::get('/product/edit/{id}', [App\Http\Controllers\ProductController::class, 'edit']);
Route::get('/product/detail/{id}', [App\Http\Controllers\ProductController::class, 'show']);
Route::post('/product/update/{id}', [App\Http\Controllers\ProductController::class, 'update']);
Route::get('/product/delete/{id}', [App\Http\Controllers\ProductController::class, 'delete']);

Route::get('/product/search/{text}', [App\Http\Controllers\ProductController::class, 'search']);
Route::get('/product/category/', [App\Http\Controllers\ProductController::class, 'category_ways_show']);

Route::post('/add-to-cart', [App\Http\Controllers\CartController::class, 'store']);
Route::post('/quantity/update/{id}', [App\Http\Controllers\CartController::class, 'update']);

Route::get('/all-cart/{id}', [App\Http\Controllers\CartController::class, 'index']);
Route::get('/cart/delete/{id}', [App\Http\Controllers\CartController::class, 'delete']);


Route::get('/customer/index', [App\Http\Controllers\CustomerController::class, 'index']);
Route::post('/customer/store', [App\Http\Controllers\CustomerController::class, 'store']);
Route::get('/edit/customer/{id}', [App\Http\Controllers\CustomerController::class, 'edit']);
Route::post('/customer/update/{id}', [App\Http\Controllers\CustomerController::class, 'update']);
Route::get('/customer/delete/{id}', [App\Http\Controllers\CustomerController::class, 'destroy']);


Route::get('/order/index/', [App\Http\Controllers\OrderController::class, 'index']);
Route::post('/order', [App\Http\Controllers\OrderController::class, 'store']);
Route::get('/order/detail/{id}', [App\Http\Controllers\OrderController::class, 'detail']);
Route::get('/order/delete/{id}', [App\Http\Controllers\OrderController::class, 'delete']);
