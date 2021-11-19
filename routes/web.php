<?php

use App\Http\Controllers\dashcontrol;
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

// route view
Route::get('/dashboard',[dashcontrol::class,'dashboard']);
Route::get('/proyek',[dashcontrol::class,'proyek']);
Route::get('/material',[dashcontrol::class,'material']);
Route::get('/provinsi',[dashcontrol::class,'provinsi']);
Route::get('/user',[dashcontrol::class,'user']);
Route::get('/lokasi',[dashcontrol::class,'lokasi']);
// route post
Route::post('/proyek/upload',[dashcontrol::class,'proyekpost']);
Route::post('/material/upload',[dashcontrol::class,'materialpost']);
Route::post('/provinsi/upload',[dashcontrol::class,'provinsipost']);
Route::post('/user/upload',[dashcontrol::class,'userpost']);
Route::post('/lokasi/upload',[dashcontrol::class,'lokasipost']);
// route untuk delete
Route::get('/proyek/del/{id}',[dashcontrol::class,'delproyek']);
Route::get('/material/del/{id}',[dashcontrol::class,'delmaterial']);
Route::get('/provinsi/del/{id}',[dashcontrol::class,'delprovinsi']);
Route::get('/user/del/{id}',[dashcontrol::class,'deluser']);
Route::get('/lokasi/del/{id}',[dashcontrol::class,'dellokasi']);
// route untuk edit
Route::get('/proyek/edit/{id}',[dashcontrol::class,'editproyek']);
Route::get('/material/edit/{id}',[dashcontrol::class,'editmaterial']);
Route::get('/provinsi/edit/{id}',[dashcontrol::class,'editprovinsi']);
Route::get('/user/edit/{id}',[dashcontrol::class,'edituser']);
Route::get('/lokasi/edit/{id}',[dashcontrol::class,'editlokasi']);
// route untuk post edit
Route::post('/proyek/edit/{id}/post',[dashcontrol::class,'editproyekpost']);
Route::post('/material/edit/{id}/post',[dashcontrol::class,'editmaterialpost']);
Route::post('/provinsi/edit/{id}/post',[dashcontrol::class,'editprovinsipost']);
Route::post('/user/edit/{id}/post',[dashcontrol::class,'edituserpost']);
Route::post('/lokasi/edit/{id}/post',[dashcontrol::class,'editlokasipost']);
