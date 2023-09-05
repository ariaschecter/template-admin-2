<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('admin')->name('admin.')->middleware('language')->group(function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('/', fn()=>view('index'))->name('index');
        Route::get('log', 'log')->name('log');
        Route::get('component', 'component')->name('component');
        Route::post('component', 'store');
        Route::get('lang/{lang}', 'lang')->name('lang');
    });
});

Route::get('/', fn()=>view('index'))->name('index');
Route::get('/', fn()=>view('index'))->name('any');
Route::get('/{first}/{second}', fn()=>view('index'))->name('second');



Route::get('/dashboard', function () {
    return view('index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
