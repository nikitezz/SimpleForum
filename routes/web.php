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
Route::get('/home',[\App\Http\Controllers\HomeController::class,'index']);

Route::group(['middleware'=>'guest'], function (){
   Route::get('/register',[\App\Http\Controllers\UserController::class,'create'])->name('register.create');
   Route::post('/register',[\App\Http\Controllers\UserController::class,'store'])->name('register.store');

   Route::get('/login',[\App\Http\Controllers\UserController::class,'loginForm'])->name('login');
   Route::post('/login',[\App\Http\Controllers\UserController::class,'login'])->name('login.store');

});
Route::get('/logout',[\App\Http\Controllers\UserController::class,'logout'])->name('logout');

Route::get('/create',[\App\Http\Controllers\PostsController::class,'index'])->name('create');
Route::post('/create',[\App\Http\Controllers\PostsController::class,'store'])->name('create.store');

Route::group(['middleware'=>'admin'], function(){
   Route::get('/admin',[\App\Http\Controllers\AdminController::class,'index']);
});
Route::get('/profile',[\App\Http\Controllers\ProfileController::class,'index'])->name('profile');

