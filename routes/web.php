<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\articulos;
use App\Http\Controllers\usuarios;
use App\Http\Controllers\empresas;

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
Route::post('/Empresas/registro', empresas::class . '@store')->name('post_reg_empresa');
Route::get('/Empresas/ver', empresas::class . '@index')->name('ver_empresa');
Route::get('/Empresas/{empresa}/editar', empresas::class . '@edit')->name('edit_empresa');
// Route::patch('/Empresas/{empresa}', empresas::class . '@update')->name('update_empresa');
// Route::delete('/Empresas/{empresa}', empresas::class . '@destroy')->name('delete_empresa');


//vistas Articulos
Route::view('/Articulos/registro', 'Articulos.registrar_articulo')->name('reg_articulo');
Route::post('/Articulos/registro', articulos::class . '@store')->name('post_reg_articulos');
Route::get('/Articulos/ver', articulos::class . '@index')->name('ver_articulo');
Route::get('/Articulos/{articulo}/editar', articulos::class . '@edit')->name('edit_articulo');
Route::patch('/Articulos/{articulo}', articulos::class . '@update')->name('update_articulo');
Route::delete('/Articulos/{articulo}', articulos::class . '@destroy')->name('delete_articulo');

//vistas Usuarios
Route::view('/Usuarios/registro', 'usuarios.registrar_usuario')->name('reg_usuario');
Route::view('/Usuarios/ver', 'usuarios.usuarios')->name('ver_usuario');
Route::view('/Usuarios/editar', 'usuarios.editar_usuario')->name('edit_usuario');
Route::post('/store', [usuarios::class, 'store'])->name('regusuario');
Route::view('/prueba', 'usuarios.prueba')->name('prueba.store');
Route::get('/Usuarios/ver', [usuarios::class, 'index'])->name('ver_usuario');

//vistas Salidas
Route::view('/Salidas/registro', 'salidas.registrar_salida')->name('reg_salida');
Route::view('/Salidas/ver', 'salidas.salidas')->name('ver_salida');

//vistas Entradas
Route::view('/Entradas/registro', 'entradas.registrar_entrada')->name('reg_entrada');
Route::view('/Entradas/ver', 'entradas.entradas')->name('ver_entrada');
