<?php

use App\Http\Controllers\Pagescontroller;
use App\Http\Controllers\ProductsController;
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
Route::get('/', [Pagescontroller::class, 'index'])->middleware(['auth', 'verified', 'role:user'])->name('home');
Route::get('admin', [Pagescontroller::class, 'admin'])->middleware(['auth', 'verified', 'role:admin'])->name('admin');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('product', ProductsController::class);

Route::get('/search',[Pagescontroller::class, 'search'])->middleware(['auth', 'verified', 'role:user'])->name('home');

require __DIR__.'/auth.php';
