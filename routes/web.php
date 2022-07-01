<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\Auth\RegisteredUserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::get('address/validate', [AddressController::class, 'index'])->name('address/validate');
Route::get('registration-code', [RegisteredUserController::class, 'generateRegCode'])->name('registration-code');
Route::post('getRegCode', [RegisteredUserController::class, 'getRegCode'])->name('getRegCode');


require __DIR__ . '/auth.php';
