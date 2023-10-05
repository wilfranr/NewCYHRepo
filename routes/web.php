<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\TerceroController;
use App\Http\Controllers\CiudadController;
use App\Http\Controllers\ListaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\MaquinaController;
use App\Http\Controllers\ListaPadreController;
use App\Http\Controllers\FotoArticuloTemporalController;
use App\Http\Controllers\FotoController;
use App\Http\Controllers\ArticuloTemporalController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CosteoController;
use App\Http\Controllers\CotizacionController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\SistemaController;


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

//ruta raiz
Route::get('/', function () {
    return view('auth.login');
});

//ruta home
Route::get('/home', [HomeController::class, 'index']);

//ruta para modificar trm
Route::post('/home/updateTrm', [HomeController::class, 'updateTrm'])->name('home.updateTrm');

//ruta de logo
Route::get('/resize-logo', 'LogoController@resizeLogo');

//ruta terceros
Route::get('/terceros', [TerceroController::class, 'index'])->name('terceros.index');
Route::get('/terceros/create', [TerceroController::class, 'create'])->name('terceros.create');
Route::post('/terceros', [TerceroController::class, 'store'])->name('terceros.store');
Route::get('/terceros/{id}/edit', [TerceroController::class, 'edit'])->name('terceros.edit');
Route::put('/terceros/{id}/update', [TerceroController::class, 'update'])->name('terceros.update');
Route::get('/terceros/{id}', [TerceroController::class, 'show'])->name('terceros.show');
Route::delete('/terceros/{id}', [TerceroController::class, 'destroy'])->name('terceros.destroy');
Route::get('/terceros/{tercero_id}/maquinas', [TerceroController::class, 'getMaquinasByTercero'])->name('terceros.maquinas');
Route::get('/terceros/{tercero_id}/contactos', [TerceroController::class, 'getContactosByTercero'])->name('terceros.contactos');


//rutas para previsualizar rut
Route::get('/terceros/{id}/preview', [TerceroController::class, 'preview'])->name('terceros.preview');
Route::post('/terceros/{id}/updateRut', [TerceroController::class, 'updateRut'])->name('terceros.updateRut');


//ciudades
Route::get('/ciudades/{codigo_pais}', [CiudadController::class, 'getCiudadesByPais']);

//ruta para descargar certificacion
Route::get('terceros/{id}/certificacion', [TerceroController::class, 'downloadCertificacion'])->name('terceros.downloadCertificacion');

//ruta para descargar rut
Route::get('terceros/{id}/rut', [TerceroController::class, 'downloadRut'])->name('terceros.downloadRut');

//rutas maquinas
Route::get('/maquinas', [MaquinaController::class, 'index'])->name('maquinas.index');
Route::get('/maquinas/create', [MaquinaController::class, 'create'])->name('maquinas.create');
Route::post('/maquinas', [MaquinaController::class, 'store'])->name('maquinas.store');
Route::get('/maquinas/{id}', [MaquinaController::class, 'show'])->name('maquinas.show');
Route::get('/maquinas/{id}/edit', [MaquinaController::class, 'edit'])->name('maquinas.edit');
Route::put('/maquinas/{id}/update', [MaquinaController::class, 'update'])->name('maquinas.update');
Route::delete('/maquinas/{id}', [MaquinaController::class, 'destroy'])->name('maquinas.destroy');

//rutas marcas
Route::get('/marcas', [MarcaController::class, 'index'])->name('marcas.index');
Route::get('/marcas/create', [MarcaController::class, 'create'])->name('marcas.create');
Route::post('/marcas', [MarcaController::class, 'store'])->name('marcas.store');
Route::get('/marcas/{id}', [MarcaController::class, 'show'])->name('marcas.show');
Route::get('/marcas/{id}/edit', [MarcaController::class, 'edit'])->name('marcas.edit');
Route::put('/marcas/{id}/update', [MarcaController::class, 'update'])->name('marcas.update');
Route::delete('/marcas/{id}', [MarcaController::class, 'destroy'])->name('marcas.destroy');

//rutas sistemas
Route::get('/sistemas', [SistemaController::class, 'index'])->name('sistemas.index');
Route::get('/sistemas/create', [SistemaController::class, 'create'])->name('sistemas.create');
Route::post('/sistemas', [SistemaController::class, 'store'])->name('sistemas.store');
Route::get('/sistemas/{id}/edit', [SistemaController::class, 'edit'])->name('sistemas.edit');
Route::put('/sistemas/{id}/update', [SistemaController::class, 'update'])->name('sistemas.update');
Route::delete('/sistemas/{id}', [SistemaController::class, 'destroy'])->name('sistemas.destroy');

//ruta listas
Route::get('/listas', [ListaController::class, 'index'])->name('listas.index');
Route::get('/listas/create', [ListaController::class, 'create'])->name('listas.create');
Route::post('/listas', [ListaController::class, 'store'])->name('listas.store');
Route::get('/listas/{id}', [ListaController::class, 'show'])->name('listas.show');
Route::get('/listas/{id}/edit', [ListaController::class, 'edit'])->name('listas.edit');
Route::put('/listas/{id}/update', [ListaController::class, 'update'])->name('listas.update');
Route::delete('/listas/{id}', [ListaController::class, 'destroy'])->name('listas.destroy');

//rutas pedidos
Route::get('/pedidos', [PedidoController::class, 'index'])->name('pedidos.index');
Route::get('/pedidos/create', [PedidoController::class, 'create'])->name('pedidos.create');
Route::post('/pedidos', [PedidoController::class, 'store'])->name('pedidos.store');
Route::get('/pedidos/{id}', [PedidoController::class, 'show'])->name('pedidos.show');
Route::get('/pedidos/{id}/edit', [PedidoController::class, 'edit'])->name('pedidos.edit');
Route::put('/pedidos/{id}/update', [PedidoController::class, 'update'])->name('pedidos.update');
Route::delete('/pedidos/{id}', [PedidoController::class, 'destroy'])->name('pedidos.destroy');
//Cambiar estado de pedido
Route::put('/pedidos/{id}/cambiarEstado', [PedidoController::class, 'cambiarEstado'])->name('pedidos.cambiarEstado');
//Crear máquina desde pedido
Route::post('/pedidos/crearMaquina', [PedidoController::class, 'crearMaquina'])->name('pedidos.crearMaquina');


//rutas costeo
Route::get('/costeos', [CosteoController::class, 'index'])->name('costeos.index');
Route::get('/costeos/costear/{id}', [CosteoController::class, 'costear'])->name('costeos.costear');


//foto articulo temporal
Route::get('/pedidos/{articuloTemporal}/fotos', [FotoArticuloTemporalController::class, 'index'])->name('fotos.index');
Route::post('/fotos', [FotoArticuloTemporalController::class, 'store'])->name('fotos.store');
//Ruta para eliminar relación entre pedido y articulo
Route::delete('/pedido/{pedidoId}/articulo/{articuloId}/detach', [PedidoController::class, 'detachArticulo'])->name('pedidos.detachArticulo');




//rutas usuarios
//middleware para proteger la ruta 'can:users.index
Route::get('/users', [UserController::class, 'index'])->name('users.index')->middleware('can:users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create')->middleware('can:users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{id}/update', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy')->middleware('can:users.destroy');


//rutas articulos
Route::get('/articulos', [ArticuloController::class, 'index'])->name('articulos.index');
Route::get('/articulos/create', [ArticuloController::class, 'create'])->name('articulos.create');
Route::post('/articulos', [ArticuloController::class, 'store'])->name('articulos.store');
Route::get('/articulos/{id}', [ArticuloController::class, 'show'])->name('articulos.show');
Route::get('/articulos/{id}/edit', [ArticuloController::class, 'edit'])->name('articulos.edit');
Route::put('/articulos/{id}/update', [ArticuloController::class, 'update'])->name('articulos.update');
Route::delete('/articulos/{id}', [ArticuloController::class, 'destroy'])->name('articulos.destroy');
Route::post('/articulos/definicion', [ArticuloController::class, 'definicion'])->name('articulos.definicion');

// Ruta para mostrar una cotización específica
Route::get('/cotizaciones/{id}', [CotizacionController::class, 'show'])->name('cotizaciones.show');

// Ruta para almacenar una nueva cotización
Route::post('/cotizaciones', [CotizacionController::class, 'store'])->name('cotizaciones.store');






Route::group(['middleware' => 'role:superadmin'], function () {
    // rutas accesibles solo para usuarios con rol 'superusuario'

    //rutas listas padre
    Route::get('/listasPadre', [ListaPadreController::class, 'index'])->name('listasPadre.index');
    Route::get('/listasPadre/create', [ListaPadreController::class, 'create'])->name('listasPadre.create');
    Route::post('/listasPadre', [ListaPadreController::class, 'store'])->name('listasPadre.store');
    Route::get('/listasPadre/{listaPadre}/edit', [ListaPadreController::class, 'edit'])->name('listasPadre.edit');
    Route::put('/listasPadre/{id}/update', [ListaPadreController::class, 'update'])->name('listasPadre.update');
    Route::delete('/listasPadre/{listaPadre}', [ListaPadreController::class, 'destroy'])->name('listasPadre.destroy');

    // Rutas para empresas
    Route::get('/empresas', [EmpresaController::class, 'index'])->name('empresas.index');
    Route::get('/empresas/create', [EmpresaController::class, 'create'])->name('empresas.create');
    Route::post('/empresas', [EmpresaController::class, 'store'])->name('empresas.store');
    Route::get('/empresas/{empresa}', [EmpresaController::class, 'show'])->name('empresas.show');
    Route::get('/empresas/{empresa}/edit', [EmpresaController::class, 'edit'])->name('empresas.edit');
    Route::put('/empresas/{empresa}/update', [EmpresaController::class, 'update'])->name('empresas.update');
    Route::delete('/empresas/{empresa}', [EmpresaController::class, 'destroy'])->name('empresas.destroy');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/set-dark-mode', function (\Illuminate\Http\Request $request) {
    $darkMode = $request->input('dark_mode');
    session(['dark_mode' => $darkMode]);
    return response()->json(['success' => true]);
});
