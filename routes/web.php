<?php

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
});

Auth::routes();
Route::prefix('admin')->middleware('auth')->group(function (){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::prefix('/product')->group(function (){
        Route::get('/list',[\App\Http\Controllers\ProductController::class,'list'])->name('admin.productList');
        Route::get('/add',[\App\Http\Controllers\ProductController::class,'addShow'])->name('admin.productAdd');
        Route::post('/add',[\App\Http\Controllers\ProductController::class,'add']);
        Route::post('/delete',[\App\Http\Controllers\ProductController::class,'delete'])->name('admin.productDelete');
        Route::post('/changeStatus',[\App\Http\Controllers\ProductController::class,'changeStatus'])->name('admin.productChangeStatus');

        Route::prefix('/category')->group(function (){
            Route::get('list',[\App\Http\Controllers\CategoryController::class,'list'])->name('admin.categoryList');
            Route::get('/add',[\App\Http\Controllers\CategoryController::class,'addShow'])->name('admin.categoryAdd');
            Route::post('/add',[\App\Http\Controllers\CategoryController::class,'add']);
            Route::post('/delete',[\App\Http\Controllers\CategoryController::class,'delete'])->name('admin.categoryDelete');
        });
    });


});



