<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProductController;

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

Route::get('/customer/create', [CommentController::class, 'create'])->name('comment_create');
Route::post('/customer/store', [CommentController::class, 'store'])->name('comment_store');
Route::get('/product/create', [ProductController::class, 'create'])->name('product_create');
Route::post('/product/create', [ProductController::class, 'store'])->name('product_store');

Auth::routes();


Route::namespace("Admin")->prefix('admin')->group(function(){
 Route::get('/', 'HomeController@index')->name('admin.home');
 Route::namespace('Admin/Auth')->group(function(){
 Route::get('/login', 'LoginController@showLoginForm')->name('admin.login');
 Route::post('/login', 'LoginController@login');
 Route::post('logout', 'LoginController@logout')->name('admin.logout');
 });
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
