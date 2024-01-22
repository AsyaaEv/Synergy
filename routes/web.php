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

Route::get('/', function () {
    return view('routes.home');
});

Route::view('/test', 'routes.test');

<<<<<<< HEAD

Route::view('/hero', 'routes.hero');
=======
Route::view('/nav', 'routes.nav');
>>>>>>> 730a15aaca87f0e881ecd24241fb4ea2cfc3865e
