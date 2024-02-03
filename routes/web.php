<?php

use App\Http\Controllers\Admin\{SupportController};
use App\Http\Controllers\Site\SiteController;
use Illuminate\Support\Facades\Route;

Route::post('/supports',[SupportController::class,'store'])->name('supports.store');

Route::get('/suporte/create',[SupportController::class, 'create'])->name('supports.create');

Route::get('/suporte',[SupportController::class, 'index'])->name('supports.index');

Route::get('/contato', [SiteController::class, 'contact']);

Route::get('/', function () {
    return view('welcome');
});
