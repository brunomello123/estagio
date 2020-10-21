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
Route::group(['middleware'=>'web'],function(){

    Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

    Auth::routes();

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

});
Route::get('/usuarios',[App\Http\Controllers\UsuariosController::class,'index']);

Route::get('/usuarios/new',[App\Http\Controllers\UsuariosController::class,'new']);
Route::post('/usuarios/add',[App\Http\Controllers\UsuariosController::class,'add']);
Route::get('usuarios/{id}/edit',[App\Http\Controllers\UsuariosController::class,'edit']);
Route::post('usuarios/update/{id}',[App\Http\Controllers\UsuariosController::class,'update']);
Route::delete('usuarios/delete/{id}',[App\Http\Controllers\UsuariosController::class,'delete']);

Route::get('/menu/websites',[App\Http\Controllers\MenuController::class,'websites']);
Route::get('/menu/app',[App\Http\Controllers\MenuController::class,'app']);
Route::get('/menu/ecommerce',[App\Http\Controllers\MenuController::class,'ecommerce']);
Route::get('/menu/marketing',[App\Http\Controllers\MenuController::class,'marketing']);
Route::get('/menu/sistemas',[App\Http\Controllers\MenuController::class,'sistemas']);
