<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\HomeController;
use App\Models\Post;

Route::get('/', function () {
    return view('home');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('post', App\Http\Controllers\PostController::class);

