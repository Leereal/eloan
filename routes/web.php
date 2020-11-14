<?php

use App\Http\Controllers\BankController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\PaymentController;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::get('/dashboard', [Dashboard::class, 'index'])->middleware(['auth'])->name('dashboard');
require __DIR__.'/auth.php';
Route::group(['middleware' => 'auth'], function() {
    Route::resources([
    'banks'         => BankController::class,
    'clients'       => ClientController::class,
    'loans'         => LoanController::class,
    'payments'      => PaymentController::class,
]);
});
