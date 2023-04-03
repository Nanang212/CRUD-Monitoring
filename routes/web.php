<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MonitoringController;

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

// Route::get('/', function () {
//     return view('monitoring');
// });

Route::get('/', [App\Http\Controllers\MonitoringController::class, 'index'])->name('monitoring');
Route::post('/addmasuk', [App\Http\Controllers\MonitoringController::class, 'addmasuk'])->name('addmasuk');
Route::delete('/deletepemasukan/{id}', [App\Http\Controllers\MonitoringController::class, 'hapusmonitoring'])->name('hapusmonitoring');
Route::get('/editmonitoring/{id}', [App\Http\Controllers\MonitoringController::class, 'editmonitoring'])->name('editmonitoring');
