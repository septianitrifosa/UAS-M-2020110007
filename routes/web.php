<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\TransactionController;
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

// Route::get('/', function () {
//     return view('landing');
// });

Route::resource('account', AccountController::class);
Route::get('/account/create', [AccountController::class, 'create'])->name('account.create');
Route::get('/account/edit', [AccountController::class, 'edit'])->name('account.edit');

Route::resource('transaction', TransactionController::class);
Route::get('/Transaction/create', [TransactionController::class, 'create'])->name('transaction.create');


Route::get('/', [AppController::class, 'index']);

