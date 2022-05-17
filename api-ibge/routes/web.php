<?php

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

Route::get('/list', [addressController::class, 'index']);
Route::post('/create', [addressController::class, 'store']);
Route::put('/update', [addressController::class, 'update']);
Route::delete('/delete', [addressController::class, 'index']);
