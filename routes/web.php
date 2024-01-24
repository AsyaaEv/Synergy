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

// Route::get('/', function () {
//     return view('routes.home');
// });

//dashboard guru
Route::view('/dashboard/guru', 'routes.dashboard.guru');
Route::view('/dashboard/guru/add', 'routes.dashboard.guruAdd');
Route::get('/dashboard/guru/edit/{id}', function($id){
    return view('routes.dashboard.guruEdit', ['id' => $id]);
});

Route::view('/home', 'routes.home');


