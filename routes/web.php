<?php

use App\Http\Controllers\CourierController;
use App\Http\Controllers\LoginController;
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

Route::get('/dashboard', function () {
    return view('pages.dashboard', [
        'active' => 'dashboard'
    ]);
});

Route::get('/chart', function () {
    return view('pages.chart', [
        'active' => 'chart'
    ]);
});

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

//Route::get('/sign-out', [LoginController::class, 'logout']);
//Route::post('/sign-out', [LoginController::class, 'logout']);

