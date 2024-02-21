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


Route::view('/list-kelas', 'routes.list-kelas-section')->name('list-kelas');;

Route::get('/profil-guru/{nama}', function($nama){
    return view('routes.profil-guru', ['nama' => $nama]);
});

Route::view('/profil-rima', 'routes.profil-guru.profil-rima')->name('profil-rima');
Route::view('/profil-azzam', 'routes.profil-guru.profil-azzam')->name('profil-azzam');
Route::view('/profil-iwan', 'routes.profil-guru.profil-iwan')->name('profil-iwan');
Route::view('/profil-agung', 'routes.profil-guru.profil-agung')->name('profil-agung');
Route::view('/profil-latif', 'routes.profil-guru.profil-latif')->name('profil-latif');
Route::view('/profil-eko', 'routes.profil-guru.profil-eko')->name('profil-eko');


Route::view('/angkatan22/profil-pplg-1', 'routes.profil-kelas.angkatan22.pplg1');
Route::view('/angkatan22/profil-pplg-2', 'routes.profil-kelas.angkatan22.pplg2');
Route::view('/angkatan23/profil-pplg-1', 'routes.profil-kelas.angkatan23.pplg1');
Route::view('/angkatan23/profil-pplg-2', 'routes.profil-kelas.angkatan23.pplg2');