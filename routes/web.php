<?php

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

use App\Http\Controllers\dkbsController;
use App\Http\Controllers\matakuliah_Controller;
use App\Http\Controllers\mktawar_Controller;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\UserController;

Route::get('/', function() {
    return redirect(route('login'));
});
Route::get('/starter', function() {
    return view('starter');
});

Auth::routes(['verify' => false, 'reset' => false]);

Route::middleware('auth')->group(function() {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
});

Route::get('edit_profile', [UserController::class, 'editProfile'])->name('editProfile');

Route::get('dkbs', [DKBSController::class, 'dkbs'])->name('dkbs');

Route::get('perwalian', [mktawar_Controller::class, 'mk_tawar'])->name('mk_tawar');

Route::get('mata_kuliah', 'mk_controller@index')->name('mata_kuliah');

# Route::get('/prodi/dashboard', [ProdiController::class, 'dashboard'])->name('prodi.dashboard');

Route::get('/prodi/dkbsmahasiswa', [ProdiController::class, 'dkbsmahasiswa'])->name('prodi.dkbs');

Route::get('/prodi/tawarmk', [ProdiController::class, 'tawarmk'])->name('prodi.tawarmk');

Route::middleware(['auth'])->group(function () {
    Route::get('/prodi/dashboard', 'ProdiController@dashboard')->name('prodi.dashboard');
});
