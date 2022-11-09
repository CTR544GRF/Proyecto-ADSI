<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\articulos;
use App\Http\Controllers\usuarios;
use App\Http\Controllers\empresas;
use App\Http\Controllers\facturas;
use App\Http\Controllers\entradas;
use App\Http\Controllers\roles;
use App\Http\Controllers\salidas;
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
Route::post('/Facturas/registro', facturas::class . '@store')->name('post_reg_factura');
Route::get('/Facturas/ver', facturas::class . '@index')->name('ver_factura');
Route::get('/Facturas/registro', facturas::class . '@index_reg')->name('reg_factura');
Route::get('/Facturas/editar/{factura}', facturas::class . '@edit')->name('edit_factura');
Route::patch('Facturas/editar/{factura}', facturas::class . '@update')->name('update_factura');

//vistas Empresas
Route::view('/Empresas/registro', 'Empresas.registrar_empresa')->name('reg_empresa');
Route::post('/Empresas/registro', empresas::class . '@store')->name('post_reg_empresa');
Route::get('/Empresas/ver', empresas::class . '@index')->name('ver_empresa');
Route::get('/Empresas/registro', empresas::class . '@index2')->name('reg_empresa');
Route::get('/Empresas/editar/{empresa}', empresas::class . '@edit')->name('edit_empresa');
Route::patch('/Empresas/{empresa}', empresas::class . '@update')->name('update_empresa');
Route::delete('/Empresas/{empresa}', empresas::class . '@destroy')->name('delete_empresa');


//vistas Articulos
Route::view('/Articulos/registro', 'Articulos.registrar_articulo')->name('reg_articulo');
Route::post('/Articulos/registro', articulos::class . '@store')->name('post_reg_articulos');
Route::get('/Articulos/ver', articulos::class . '@index')->name('ver_articulo');
Route::get('/Articulos/{articulo}/editar', articulos::class . '@edit')->name('edit_articulo');
Route::patch('/Articulos/{articulo}', articulos::class . '@update')->name('update_articulo');
Route::delete('/Articulos/{articulo}', articulos::class . '@destroy')->name('delete_articulo');

//vistas Usuarios
Route::view('/Usuarios/registro', 'usuarios.registrar_usuario')->name('reg_usuario');
Route::post('/Usuarios/registro', [usuarios::class, 'store'])->name('post_reg_usuario');
Route::get('/Usuarios/ver', [usuarios::class, 'index'])->name('ver_usuario');
Route::get('/Usuarios/registro', [usuarios::class, 'index2'])->name('reg_usuario');
Route::get('/Usuarios/editar/{usuario}', [usuarios::class, 'edit'])->name('edit_usuario');
Route::patch('/Usuarios/editar/{usuario}', [usuarios::class, 'update'])->name('update_usuario');
Route::delete('/Usuarios/ver/{usuario}', [usuarios::class, 'destroy'])->name('delete_usuario');

//vista roles
Route::view('/Usuario/Registro/Roles', 'usuarios.roles')->name('crear_rol');
Route::post('/Usuario/Registro/Roles', [roles::class, 'store'])->name('post_crear_rol');
Route::get('/Usuario/Registro/Roles', [roles::class, 'index'])->name('crear_rol');
Route::get('/Usuario/Registro/editar/{rol}', [roles::class, 'edit'])->name('edit_rol');
Route::patch('/Usuario/Registro/editar/{rol}', [roles::class, 'update'])->name('update_rol');
Route::delete('/Usuario/Registro/{rol}', roles::class . '@destroy')->name('delete_rol');

//vistas Salidas
Route::view('/Salidas/registro', 'salidas.registrar_salida')->name('reg_salida');
Route::post('/Salidas/registro', [salidas::class, 'store'])->name('post_reg_salida');
Route::get('/Salidas/registro', [salidas::class, 'index2'])->name('reg_salida');
Route::get('/Salidas/ver', [salidas::class, 'index'])->name('ver_salida');

//vistas Entradas
Route::view('/Entradas/registro', 'entradas.registrar_entrada')->name('reg_entrada');
Route::post('/Entradas/registro', [entradas::class, 'store'])->name('post_reg_entrada');
Route::get('/Entradas/registro', [entradas::class, 'index2'])->name('reg_entrada');
Route::get('/Entradas/Ver', [entradas::class, 'index'])->name('ver_entrada');

//vistas Inventarios
Route::view('/Inventarios/Ver', 'inventarios.inventarios')->name('ver_inventario');
