<?php


use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\Finance\CategoryAccountController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [MainController::class, 'index'])->name('main.index');
Route::get('/currency', [CurrencyController::class, 'index'])->name('currency.index');


//то же самое, что и 7 маршрутов
Route::resource('settings/currency', CurrencyController::class);

/*Route::group(['prefix' => 'settings'], function () {
    Route::group(['prefix' => 'currency'], function () {
        Route::get('/', [CurrencyController::class, 'index'])->name('currency.index');
        Route::get('/create', [CurrencyController::class, 'create'])->name('currency.create');
        Route::post('/store', [CurrencyController::class, 'store'])->name('currency.store');
        Route::get('/{currency}/edit', [CurrencyController::class, 'edit'])->name('currency.edit');
        Route::get('/{currency}', [CurrencyController::class, 'show'])->name('currency.show');
        Route::patch('/{currency}', [CurrencyController::class, 'update'])->name('currency.update');
        Route::delete('/{currency}', [CurrencyController::class, 'destroy'])->name('currency.destroy');
    });
});*/
