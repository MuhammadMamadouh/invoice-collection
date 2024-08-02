<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\CollectionScenarioController;
use App\Http\Controllers\ActionController;
use App\Http\Controllers\ActionsCollectionScenarioController;
use App\Http\Controllers\UserController;

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientsGroupController;
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
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');

Route::resource('users', UserController::class);


//-----------------clients--------------------------------
Route::resource("/clients", ClientController::class);


//-----------------CollectionScenarios--------------------------------
Route::post('/collection_scenarios/actions', [ActionsCollectionScenarioController::class, 'store'])->name('collection.storeAction');
Route::post('/collection_scenarios/duplicate/{id}', [CollectionScenarioController::class, 'duplicateScenario'])->name('collection.duplicateScenario');
Route::resource("/collection_scenarios", CollectionScenarioController::class);





require __DIR__.'/auth.php';


Route::get('actions/create', [ActionController::class,'create']);
Route::post('actions', [ActionController::class,'store'])->name('actions.store');


Route::get('actions/create', [ActionController::class,'create']);
Route::post('actions', [ActionController::class,'store'])->name('actions.store');


Route::get('actions/create', [ActionController::class,'create']);
Route::post('actions', [ActionController::class,'store'])->name('actions.store');


Route::get('/item', [ItemsController::class, 'showItemsForm'])->name('items.show');

Route::post('/item', [ItemsController::class, 'store'])->name('items.store');
Route::get('/status', [StatusItemController::class,'showStatusItemsForm'])->name('status.show');
Route::post('/status', [StatusItemController::class,'store'])->name('status.store');

Route::get('/clients-group', [ClientsGroupController::class, 'index'])->name('clients-group');
Route::post('store-client-group', [ClientsGroupController::class, 'store'])->name('store-client-group');
Route::get('/delete-client-group/{id}', [ClientsGroupController::class, 'destroy'])->name('delete-client-group');
Route::post('/clients-group/delete-all', [ClientsGroupController::class, 'deleteAll'])->name('clients-group.delete-all');
Route::get('/get-client-group/{id}', [ClientsGroupController::class, 'getGroup'])->name('get-client-group');
Route::post('/update-client-group/{id}', [ClientsGroupController::class, 'update'])->name('update-client-group');



