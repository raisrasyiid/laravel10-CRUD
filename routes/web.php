<?php

use App\Http\Controllers\KaryawanController;
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

Route::get('dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::controller(KaryawanController::class)->prefix('karyawan')->group(function(){
    Route::get('','index')->name('karyawan');

    Route::get('insert','add')->name('karyawan.insert');
    Route::post('insert','insert')->name('karyawan.add.insert');

    Route::get('update','edit')->name('karyawan.edit');
    Route::post('update','update')->name('karyawan.edit.update');

    Route::delete('karyawan/{id}', function ($id) {
        session_destroy();
    });


});