<?php

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

Route::prefix('dashboard')->group(function () {

    Route::get('users', [\App\Http\Controllers\Admin\UserController::class, 'index']);
    Route::get('users', [\App\Http\Controllers\Admin\UserController::class, 'create']);
    Route::get('users', [\App\Http\Controllers\Admin\UserController::class, 'edit']);

});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('/', function () {
    return view('welcome');
});
