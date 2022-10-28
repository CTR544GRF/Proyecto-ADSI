<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\articulos;

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

/*Pagina comercial*/

// Route::view('/', 'home')->name('home');
// Route::view('/Login', 'main')->name('login');
// Route::view('/Main', 'main')->name('main');

Route::view('/', 'main')->name('main');
//vistas Facturas
Route::view('/Facturas/registro', 'Facturas.registrar_factura')->name('reg_factura');
Route::view('/Facturas/ver', 'Facturas.facturas')->name('ver_factura');
Route::view('/Facturas/editar', 'Facturas.editar_factura')->name('edit_factura');

//vistas Empresas
Route::view('/Empresas/registro', 'Empresas.registrar_empresa')->name('reg_empresa');
Route::view('/Empresas/ver', 'Empresas.empresas')->name('ver_empresa');
Route::view('/Empresas/editar', 'Empresas.editar_empresa')->name('edit_empresa');

//vistas Articulos
Route::view('/Articulos/registro', 'Articulos.registrar_articulo')->name('reg_articulo');
Route::view('/Articulos/ver', 'Articulos.articulos')->name('ver_articulo');
Route::view('/Articulos/editar', 'Articulos.editar_articulo')->name('edit_articulo');
// Route::post('/Articulos/registro',articulos::class,'store')->name('post_reg_articulos');
Route::post('/Articulos/registro', articulos::class . '@store')->name('post_reg_articulos');