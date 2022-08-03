<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContentController;

Route::get('/', function () {
    return view('login');
});
Route::get('/regis', function () {
    return view('register');
});

Route::get('/logout', function()
    {\Auth::logout();
    return redirect('/home');
});

Route::get('/coba', function () {
    return view('coba');
});

Auth::routes();

Route::get('/beranda', [App\Http\Controllers\CategoryController::class, 'beranda'])->name('index');
Route::get('/home', [App\Http\Controllers\CategoryController::class, 'home'])->name('home');
Route::get('/info', [App\Http\Controllers\HomeController::class, 'info'])->name('info');
Route::get('/read/{id}', [App\Http\Controllers\HomeController::class, 'read']);
Route::get('/category/{id}', [App\Http\Controllers\HomeController::class, 'category']);
Route::resource('categories', App\Http\Controllers\CategoryController::class);
Route::resource('contents', App\Http\Controllers\ContentController::class);
Route::get('/datauser',[App\Http\Controllers\UserController::class, 'datauser']);
Route::get('/deleteuser/{id}',[App\Http\Controllers\UserController::class, 'deleteuser']);