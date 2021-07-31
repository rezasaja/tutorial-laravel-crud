<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

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

Route::get('siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('siswa/create', [ SiswaController::class, 'create'])->name('siswa.create');
Route::post('siswa/create', [ SiswaController::class, 'store' ])->name('siswa.store');
Route::get('siswa/{id}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('siswa/{id}/edit', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('siswa/{id}', [SiswaController::class, 'destroy'])->name('siswa.destroy');


Route::get('/', function () {
    return view('welcome');
});
