<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\CollectionScenarioController;
use App\Http\Controllers\ActionController;
use App\Http\Controllers\ActionsCollectionScenarioController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LanguageController;

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientsGroupController;
use App\Http\Controllers\Dashboard\ItemsController;
use App\Http\Controllers\Dashboard\ItemStatusController;
use App\Http\Controllers\ImportExportController;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\CreditValidationController;
use App\Http\Controllers\InvoiceMailController;
use App\Http\Controllers\ItemsChangeStatusController;
use App\Http\Controllers\ScoreController;
use App\Http\Controllers\ScoreCriteriaController;
use App\Http\Controllers\SettingCreditValidationController;
use App\Http\Controllers\SettingManageRiskController;

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

Route::get('/migrataion', function () {
    Artisan::call('migrate');
    return 'migrate';
});
Route::get('/seed', function () {
    Artisan::call('db:seed');
    return 'seed';
});

Route::get('/clear', function () {
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    return 'clear';
});
Route::get('/link', function () {
    Artisan::call('storage:link');
    return 'link';
});
Route::get('migrate-refresh-seed', function () {
    Artisan::call('migrate:refresh --seed');
    return 'migrate:refresh --seed';
});


Route::get('/', function () {
    return view('dashboard.index');
});

require __DIR__.'/auth.php';

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
Route::get('/clients/client_data/{id}', [ClientController::class,'showClientData']);
Route::resource("/clients", ClientController::class);


//-----------------CollectionScenarios--------------------------------
Route::post('/collection_scenarios/actions', [ActionsCollectionScenarioController::class, 'store'])->name('collection.storeAction');
Route::post('/collection_scenarios/actions/{id}', [ActionsCollectionScenarioController::class, 'update'])->name('collection.update');
Route::post('/collection_scenarios/duplicate/{id}', [CollectionScenarioController::class, 'duplicateScenario'])->name('collection.duplicateScenario');
Route::resource("/collection_scenarios", CollectionScenarioController::class);


//-----------------ManageRisk--------------------------------
Route::get('/manage_risk/settings', [SettingManageRiskController::class, 'index'])->name('manage_risk_settings.index');
Route::post('/manage_risk/settings/store', [SettingManageRiskController::class, 'store'])->name('settings.store');

Route::post('/manage_risk/criteria', [ScoreCriteriaController::class, 'store'])->name('scoreCriteria.store');
Route::patch('/manage_risk/criteria/edit/{id}', [ScoreCriteriaController::class, 'update'])->name('scoreCriteria.update');
Route::resource('/manage_risk', ScoreController::class);



//-----------------ManageCreditLimitsValidation--------------------------------
Route::get('/credit-managment', [CreditValidationController::class, 'index'])->name('credit-managment.index');
Route::post('/credit-managment/store', [CreditValidationController::class, 'store'])->name('credit-managment.store');
Route::patch('/credit-managment/update/{id}', [CreditValidationController::class, 'update'])->name('credit-managment.update');
Route::delete('/credit-managment/destroy/{id}', [CreditValidationController::class, 'destroy'])->name('credit-managment.destroy');

Route::get('/credit-managment/settings', [SettingCreditValidationController::class, 'index'])->name('credit-managment_settings.index');
Route::post('/credit-managment/settings/store', [CreditValidationController::class, 'storeSettings'])->name('settings.storeSettings');


//-----------------ItemsChangeStatus--------------------------------
Route::post('/items_change_status', [ItemsChangeStatusController::class, 'store'])->name('items_change_status.store');
Route::patch('/items_change_status/{id}', [ItemsChangeStatusController::class, 'update'])->name('items_change_status.update');





Route::get('collection', [CollectionController::class,'index'])->name('collection.automatic.actions');
Route::get('collection-manual-actions', [CollectionController::class,'manualActions'])->name('collection.manual.actions');
Route::post('send/invoice', [InvoiceMailController::class,'sendInvoice'])->name('send.invoice');

Route::get('actions/create', [ActionController::class,'create']);
Route::post('actions', [ActionController::class,'store'])->name('actions.store');


Route::get('actions/create', [ActionController::class,'create']);
Route::post('actions', [ActionController::class,'store'])->name('actions.store');


Route::get('actions/create', [ActionController::class,'create']);
Route::post('actions', [ActionController::class,'store'])->name('actions.store');


Route::resource('items', ItemsController::class);
Route::get('item-status', [ItemStatusController::class,'showStatusItemsForm'])->name('item-status.index');
Route::post('item-status', [ItemStatusController::class,'store'])->name('item-status.store');

Route::resource('/clients-group', ClientsGroupController::class);
Route::post('/clients-group/delete-all', [ClientsGroupController::class, 'deleteAll'])->name('clients-group.delete-all');


Route::get('switch-language/{locale}', [LanguageController::class, 'switchLanguage'])->name('switch.language');

Route::get('import-export', [ImportExportController::class, 'importExportView'])->name('import-export');
Route::post('import', [ImportExportController::class, 'import'])->name('import');

