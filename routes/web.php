<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\RedirectController;
use App\Http\Controllers\TaxpayController;
use App\Http\Controllers\QrController;
use App\Http\Controllers\WardController;
use App\Http\Controllers\SearchTaxpayerController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Home URL
Route::get('/', [RedirectController::class, 'redirectTo'])->name('redirect');

//FOR QR CODE
Route::get('/lpps/qr-code/{id}', [QrController::class, 'qrGenerate'])->name('code.qr');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'prevent-back-history'])->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

    //TAX MODULE
    Route::get('/add-taxpayer', [TaxpayController::class, 'index'])->name('taxpayer.add');
    Route::post('/new-taxpayer', [TaxpayController::class, 'create'])->name('taxpayer.new');
    Route::get('/manage-taxpayer', [TaxpayController::class, 'manage'])->name('taxpayer.manage');
    Route::get('/holding-status/{id}', [TaxpayController::class, 'updateStatus'])->name('holdingStatus.update');
    Route::get('/show-taxpayer/{id}', [TaxpayController::class, 'show'])->name('taxpayer.show');
    Route::get('/edit-taxpayer/{id}', [TaxpayController::class, 'edit'])->name('taxpayer.edit');
    Route::post('/update-taxpayer/{id}', [TaxpayController::class, 'update'])->name('taxpayer.update');
    Route::post('/delete-taxpayer/{id}', [TaxpayController::class, 'delete'])->name('taxpayer.delete');

    // HOLDING PLATE DISTRIBUTION
    Route::get('/holding-plate-taxpayer', [TaxpayController::class, 'holding'])->name('taxpayer.holdingPlate');

    //SEARCH MODULE
    Route::get('/search-taxpayer', [SearchTaxpayerController::class, 'search'])->name('taxpayer.search');

    //WARD MODULE
    Route::get('/add-ward', [WardController::class, 'index'])->name('ward.add');
    Route::post('/new-ward', [WardController::class, 'create'])->name('ward.new');
    Route::get('/manage-ward', [WardController::class, 'manage'])->name('ward.manage');
    Route::get('/edit-ward/{id}', [WardController::class, 'edit'])->name('ward.edit');
    Route::get('/update-status/{id}', [WardController::class, 'updateStatus'])->name('status.update');
    Route::post('/update-ward/{id}', [WardController::class, 'update'])->name('ward.update');
    Route::post('/delete-ward/{id}', [WardController::class, 'delete'])->name('ward.delete');

    //TAXPAYER ACCORDING TO WARD
    Route::get('/ward-taxpayer/{wardNo}', [WardController::class, 'wardTaxpayer'])->name('ward.taxpayer');






});
