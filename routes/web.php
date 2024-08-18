<?php

use App\Http\Controllers\ImageController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\Auth\PanelController;
use App\Http\Controllers\PoemController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [UserController::class,'index'])->name('main');
Route::get('/test',function(){
    return view('test');
});
Route::get("/locale/{lang}",[LanguageController::class,'changeLang'])->name('change.locale');

Auth::routes();
Route::get('/panel',PanelController::class)->name('panel');


Route::middleware('auth')->group(function (){
    Route::get('/admin/home', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin.home');

    Route::get('/admin/poem', [App\Http\Controllers\Admin\PoemController::class, 'index'])->name('admin.poem');
    Route::post('/admin/poem/store', [App\Http\Controllers\Admin\PoemController::class, 'store'])->name('poem.store');
    Route::get('/admin/poem/edit/{poem}', [App\Http\Controllers\Admin\PoemController::class, 'edit'])->name('poem.edit');
    Route::post('/admin/poem/update', [App\Http\Controllers\Admin\PoemController::class, 'update'])->name('poem.update');
    Route::get('/admin/poem/active/{poem}', [App\Http\Controllers\Admin\PoemController::class, 'active'])->name('poem.active');
    Route::delete('/admin/poem/delete/{poem}', [App\Http\Controllers\Admin\PoemController::class, 'destroy'])->name('poem.delete');

    Route::get('/admin/audio-poem', [App\Http\Controllers\Admin\SongController::class, 'index'])->name('admin.audioPoem');

    Route::get('/admin/gallery', [App\Http\Controllers\Admin\ImageController::class, 'index'])->name('admin.gallery');

    Route::get('/admin/controll',[UserController::class,'admins'])->name('admin.controll');
    Route::post('/admin/create',[UserController::class,'create'])->name('admin.create');

});


