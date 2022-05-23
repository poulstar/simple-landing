<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
    return view('landing');
});

Route::post('/add-user', [MainController::class, 'register'])->name('add-user');

Route::post('login', [AuthController::class, 'login'])->name('login');
Route::get('login', [AuthController::class, 'loginView']);

Route::get('dashboard', [MainController::class, 'dashboard'])->name('dashboard')->middleware('auth');
