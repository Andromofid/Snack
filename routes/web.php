<?php

use App\Http\Controllers\Admin\saladController as AdminSaladController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\SaladController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
Route::post('/language/switch', [LanguageController::class, 'switch'])->name('language.switch');
Route::resource('salad', SaladController::class);

Route::post('commancer', [SaladController::class, 'commancer'])->name('salad.commancer');



// admin
Route::resource('/adminSalad', AdminSaladController::class);