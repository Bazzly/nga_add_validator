<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostcodeController;
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

Route::get('add-new-postcode/{id?}', [PostcodeController::class, 'viewPostcode'])->name('add-new-postcode')->middleware(['auth']);
Route::post('addPostcode', [PostcodeController::class, 'addPostcode'])->name('add-postcode')->middleware(['auth']);

Route::get('add-new-address/{id?}', [AddressController::class, 'viewAddress'])->name('add-new-address')->middleware(['auth']);
Route::post('addAddress', [AddressController::class, 'addAddress'])->name('add-address')->middleware(['auth']);

Route::get('postcode/validate', [PostcodeController::class, 'index'])->name('postcode/validate');

Route::get('registration-code', [RegisteredUserController::class, 'generateRegCode'])->name('registration-code');
Route::post('getRegCode', [RegisteredUserController::class, 'getRegCode'])->name('getRegCode');


require __DIR__ . '/auth.php';
