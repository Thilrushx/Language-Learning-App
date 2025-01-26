<?php

use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//   return view('welcome');
//});

Route::get('language', [LanguageController::class, 'index']);
Route::get('language/create', [LanguageController::class, 'create']);
Route::get('language/{id}/edit', [LanguageController::class, 'edit']);

//CREATE
Route::post('language/store', [LanguageController::class, 'store']);

//READ
Route::get('language/all', [LanguageController::class, 'all']);
Route::get('language/{id}/get', [LanguageController::class, 'get']);

//UPDATE
// Route::get('language/{id}/edit', [LanguageController::class, 'edit']);
Route::post('employeeupdate/{id}', [LanguageController::class, 'update']);

//DELETE
Route::delete('language/delete/{id}', [LanguageController::class, 'delete']);