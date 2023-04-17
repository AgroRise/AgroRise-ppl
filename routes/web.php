<?php

use App\Http\Controllers\SigninController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\SignuppakarController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/daftar', function () {
    return view('signupmain');
});

Route::get('/mulai', function () {
    return view('main');
});

Route::get('/pakar', function () {
    return view('sesi/pakar');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/profilepakar', function () {
    return view('profilepakar');
});

Route::get('/keuntungan', function () {
    return view('keuntungan');
});

Route::get('/pestisida', function () {
    return view('pestisida');
});

route::get('/signin',[SigninController::class, 'index']);
route::post('/signin',[SigninController::class, 'login']);

route::get('/signup',[SignupController::class, 'index']);
route::post('/signup',[SignupController::class, 'store']);

route::get('/pakar',[SignuppakarController::class, 'index']);
route::post('/pakar',[SignuppakarController::class, 'store']);

