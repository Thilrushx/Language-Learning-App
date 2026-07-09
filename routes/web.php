<?php

use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

// Language CRUD routes
Route::get('language',              [LanguageController::class, 'index'])->name('language.index');
Route::get('language/create',       [LanguageController::class, 'create'])->name('language.create');
Route::post('language',             [LanguageController::class, 'store'])->name('language.store');
Route::get('language/{id}/edit',    [LanguageController::class, 'edit'])->name('language.edit');
Route::put('language/{id}',         [LanguageController::class, 'update'])->name('language.update');
Route::delete('language/{id}',      [LanguageController::class, 'delete'])->name('language.delete');

// API-style read routes
Route::get('language/all',          [LanguageController::class, 'all'])->name('language.all');
Route::get('language/{id}/get',     [LanguageController::class, 'get'])->name('language.get');
