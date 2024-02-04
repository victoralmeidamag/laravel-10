<?php

use App\Http\Controllers\Admin\{SupportController};
use App\Http\Controllers\Site\SiteController;
use Illuminate\Support\Facades\Route;

Route::delete('/suporte/{id}',[SupportController::class, 'destroy'])->name('support.destroy');
Route::put('/suporte/{id}',[SupportController::class, 'update'])->name('supports.update');
Route::get('/suporte/{id}/editar', [SupportController::class, 'edit'])->name('supports.edit');
Route::get('/suporte/create',[SupportController::class, 'create'])->name('supports.create');
Route::get('/suporte/{id}',[SupportController::class,'show'])->name('supports.show');
Route::post('/supports',[SupportController::class,'store'])->name('supports.store');
Route::get('/suporte',[SupportController::class, 'index'])->name('supports.index');

Route::get('/contato', [SiteController::class, 'contact']);

Route::get('/', function () {
    return view('welcome');
});
