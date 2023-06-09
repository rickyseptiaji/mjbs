<?php

use App\Exports\StockExport;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\karyawanController;
use App\Http\Controllers\produkController;

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
    return view('home');
})->middleware('auth');

    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('login', [AuthController::class, 'authenticating']);
    Route::post('/logout', function () {
        Auth::logout();
        return redirect('/login');
    })->name('logout');

Route::resource('karyawan', karyawanController::class);

Route::resource('stock', produkController::class);
Route::get('/export', [produkController::class, 'exportToExcel'])->name('excel.export');


