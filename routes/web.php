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

//Dashboard
Route::view('/dashboard', 'routes.dashboard.index');

//dashboard guru
Route::view('/dashboard/guru', 'routes.dashboard.guru');
Route::view('/dashboard/guru/add', 'routes.dashboard.guruAdd');
Route::get('/dashboard/guru/view/{id}', function($id){
    return view('routes.dashboard.guruView', ['id' => $id]);
});

//Dashboard Kelas
Route::view('/dashboard/kelas', 'routes.dashboard.kelas.index');
Route::view('/dashboard/kelas/add', 'routes.dashboard.kelas.kelasAdd');

//Dashboard WaliKelas
Route::view('/dashboard/walikelas', 'routes.dashboard.walikelas.index');
Route::view('/dashboard/walikelas/add', 'routes.dashboard.walikelas.wkAdd');
Route::get('/dashboard/walikelas/edit/{id}', function($id){
    return view('routes.dashboard.walikelas.wkEdit', ['id' => $id]);
});

Route::view('/', 'routes.home');
Route::view('/profil-kelas', 'routes.profil-kelas');

Route::get('/profil-guru/{nama}', function($nama){
    return view('routes.profil-guru', ['nama' => $nama]);
});

