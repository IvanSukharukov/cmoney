<?php


use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\UserController;
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

Route::group(['middleware' => 'admin'], function () {
    Route::get('/', [MainController::class, 'index'])->name('main.index');
//    Route::get('/currency', [CurrencyController::class, 'index'])->name('currency.index');
    //то же самое, что и 7 маршрутов
    Route::resource('/settings/currency', CurrencyController::class);
    Route::resource('/user', UserController::class);
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [UserController::class, 'loginForm'])->name('login.create');
    Route::post('/login', [UserController::class, 'login'])->name('login');
});

Route::get('/logout', [UserController::class, 'logout'])->name('logout')->middleware('auth');
