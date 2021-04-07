<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
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

Route::middleware('auth')->get('/', [HomeController::class, 'dashboard'])->name('dashboard');

Route::get('/login', [AuthController::class, 'pageLogin'])->name('auth.login');
Route::post('/login', [AuthController::class, 'login'])->name('login');
