<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\songs;

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
    return view('start');
});


// Route::get('/login', function () {
//     return view('login');
// });

// Route::get('/register', function () {
//     return view('register');
// });

Route::get('/newpassword', function () {
    return view('newpassword');
});

Route::get('/forget', function () {
    return view('forget');
});

Route::get('/recovery_code', function () {
    return view('recovery_code');
});

Route::get("/song/{name}/{id}",[Songs::class, "getSong"]);