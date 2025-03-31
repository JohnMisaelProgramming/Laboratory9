<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::get('homepage', function () {
    return view('homepage');
});

Route::get('registration', function() {
    return view('registration');
});

Route::get('/user/create', function () {
    return view('user.create');
});

Route::post('/user', [UserController::class, 'store']);

