<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\ItemsController;
use App\Http\Controllers\Dashboard\StatusItemController;
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

Route::get('/', function () {
    return view('dashboard.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::resource('users', UserController::class);




Route::get('/item', [ItemsController::class, 'showItemsForm'])->name('items.show');

Route::post('/item', [ItemsController::class, 'store'])->name('items.store');
Route::get('/status', [StatusItemController::class,'showStatusItemsForm'])->name('status.show');
Route::post('/status', [StatusItemController::class,'store'])->name('status.store');

require __DIR__.'/auth.php';
