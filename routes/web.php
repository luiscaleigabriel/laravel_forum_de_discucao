<?php

use App\Http\Controllers\Admin\{SupportController};
use App\Http\Controllers\Site\SiteController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/forum', [SupportController::class, 'index'])->name('forum.index');

Route::get('/contacto', [SiteController::class, 'index'])->name('site.home');
