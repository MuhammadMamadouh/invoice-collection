<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\CollectionScenarioController;
use App\Http\Controllers\UserController;
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


//-----------------clients--------------------------------
Route::resource("/clients", ClientController::class);


//-----------------CollectionScenarios--------------------------------
Route::post('/collection_scenarios/duplicate/{id}', [CollectionScenarioController::class, 'duplicateScenario'])->name('collection.duplicateScenario');
Route::post('/collection_scenarios/actions', [CollectionScenarioController::class, 'storeAction'])->name('collection.storeAction');
Route::resource("/collection_scenarios", CollectionScenarioController::class);





require __DIR__.'/auth.php';
