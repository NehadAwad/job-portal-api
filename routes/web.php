<?php

use App\Http\Controllers\AuthController;
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



// --------------- WEB ---------------------

Route::get('/', [AuthController::class, 'authPage'])->name('login');
Route::Post('/sign-in', [AuthController::class, 'signInAdmin'])->name('sign.in');
