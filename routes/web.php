<?php

use App\Http\Controllers\ImageController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\PoemController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [UserController::class,'index'])->name('main');
Route::get("/locale/{lang}",[LanguageController::class,'changeLang'])->name('change.locale');

Auth::routes();


Route::middleware('auth')->group(function (){
    Route::get('/admin/home', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin.home');
    Route::get('/admin/poem', [App\Http\Controllers\Admin\PoemController::class, 'index'])->name('admin.poem');
    Route::get('/admin/song', [App\Http\Controllers\Admin\SongController::class, 'index'])->name('admin.song');
    Route::get('/admin/gallery', [App\Http\Controllers\Admin\ImageController::class, 'index'])->name('admin.gallery');
});


