<?php

use App\Http\Controllers\Cliente;
use App\Http\Controllers\Entrenador;
use App\Http\Controllers\PaginaGerente;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\GerenteController;
use App\Http\Controllers\MantenimientoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\EjercicioController;
use App\Http\Controllers\EntrenadorController;
use App\Http\Controllers\MaquinaController;
use App\Http\Controllers\ReporteController;
use App\Http\Controllers\RutinaController;
use App\Http\Controllers\ValoracionFisicaController;
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

Route::get('/', function () {
    return view('paginaPrincipal');
});

Route::get('/Contacto', function () {
    return view('Contacto');
});

Route::get('/Perfil', function () {
    return view('Perfil');
});

Route::get('/PerfilAdmin', function () {
    return view('PerfilAdmin');
});

Route::get('/Perfil', function () {
    return view('PerfilEntrenador');
});

Route::get('/login', [LoginController::class, 'create'])->name('login.login');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');
Route::get('/logout', [LoginController::class, 'destroy'])->name('login.destroy');

Route::get('gerente', [PaginaGerente::class, 'index'])->middleware('auth.admin')->name('gerente.indexadmin');
Route::get('cliente', [Cliente::class, 'index'])->middleware('auth.cliente')->name('Cliente.indexcliente');
Route::get('entrenador', [Entrenador::class, 'index'])->middleware('auth.entrenador')->name('entrenador.indexentrenador');

//Rutas Gerente

Route::get('usuario/registrar', [UsuarioController::class, 'create'])->name('usuario.create');
Route::get('usuario/index', [UsuarioController::class, 'index'])->name('usuario.index');
Route::post('usuario/guardar', [UsuarioController::class, 'store'])->name('usuario.store');
Route::get('usuario/{usuario}/editar', [UsuarioController::class, 'edit'])->name('usuario.edit');
Route::put('usuario/{usuario}/actualizar', [UsuarioController::class, 'update'])->name('usuario.update');
Route::delete('usuario/{usuario}/eliminar', [UsuarioController::class, 'destroy'])->name('usuario.destroy');

Route::get('mantenimiento/registrar', [MantenimientoController::class, 'create'])->name('mantenimiento.create');
Route::get('mantenimiento/index', [MantenimientoController::class, 'index'])->name('mantenimiento.index');
Route::post('mantenimiento/guardar', [MantenimientoController::class, 'store'])->name('mantenimiento.store');
Route::get('mantenimiento/{mantenimiento}/editar', [MantenimientoController::class, 'edit'])->name('mantenimiento.edit');
Route::put('mantenimiento/{mantenimiento}/actualizar', [MantenimientoController::class, 'update'])->name('mantenimiento.update');
Route::delete('mantenimiento/{mantenimiento}/eliminar', [MantenimientoController::class, 'destroy'])->name('mantenimiento.destroy');

Route::get('valoracion_fisica/registrar', [ValoracionFisicaController::class, 'create'])->name('valoracion_fisica.create');
Route::get('valoracion_fisica/index', [ValoracionFisicaController::class, 'index'])->name('valoracion_fisica.index');
Route::post('valoracion_fisica/guardar', [ValoracionFisicaController::class, 'store'])->name('valoracion_fisica.store');
Route::get('valoracion_fisica/{valoracion_fisica}/editar', [ValoracionFisicaController::class, 'edit'])->name('valoracion_fisica.edit');
Route::put('valoracion_fisica/{valoracion_fisica}/actualizar', [ValoracionFisicaController::class, 'update'])->name('valoracion_fisica.update');
Route::delete('valoracion_fisica/{valoracion_fisica}/eliminar', [ValoracionFisicaController::class, 'destroy'])->name('valoracion_fisica.destroy');

Route::get('ejercicio/registrar', [EjercicioController::class, 'create'])->name('ejercicio.create');
Route::get('ejercicio/index', [EjercicioController::class, 'index'])->name('ejercicio.index');
Route::post('ejercicio/guardar', [EjercicioController::class, 'store'])->name('ejercicio.store');
Route::get('ejercicio/{ejercicio}/editar', [EjercicioController::class, 'edit'])->name('ejercicio.edit');
Route::put('ejercicio/{ejercicio}/actualizar', [EjercicioController::class, 'update'])->name('ejercicio.update');
Route::delete('ejercicio/{ejercicio}/eliminar', [EjercicioController::class, 'destroy'])->name('ejercicio.destroy');

Route::get('gerente/registrar', [GerenteController::class, 'create'])->name('gerente.create');
Route::get('gerente/index', [GerenteController::class, 'index'])->name('gerente.index');
Route::post('gerente/guardar', [GerenteController::class, 'store'])->name('gerente.store');
Route::get('gerente/{gerente}/editar', [GerenteController::class, 'edit'])->name('gerente.edit');
Route::put('gerente/{gerente}/actualizar', [GerenteController::class, 'update'])->name('gerente.update');
Route::delete('gerente/{gerente}/eliminar', [GerenteController::class, 'destroy'])->name('gerente.destroy');

Route::get('cliente/registrar', [ClienteController::class, 'create'])->name('cliente.create');
Route::get('cliente/index', [ClienteController::class, 'index'])->name('cliente.index');
Route::post('cliente/guardar', [ClienteController::class, 'store'])->name('cliente.store');
Route::get('cliente/{cliente}/editar', [ClienteController::class, 'edit'])->name('cliente.edit');
Route::put('cliente/{cliente}/actualizar', [ClienteController::class, 'update'])->name('cliente.update');
Route::delete('cliente/{cliente}/eliminar', [ClienteController::class, 'destroy'])->name('cliente.destroy');

Route::get('entrenador/registrar', [EntrenadorController::class, 'create'])->name('entrenador.create');
Route::get('entrenador/index', [EntrenadorController::class, 'index'])->name('entrenador.index');
Route::post('entrenador/guardar', [EntrenadorController::class, 'store'])->name('entrenador.store');
Route::get('entrenador/{entrenador}/editar', [EntrenadorController::class, 'edit'])->name('entrenador.edit');
Route::put('entrenador/{entrenador}/actualizar', [EntrenadorController::class, 'update'])->name('entrenador.update');
Route::delete('entrenador/{entrenador}/eliminar', [EntrenadorController::class, 'destroy'])->name('entrenador.destroy');

Route::get('maquina/registrar', [MaquinaController::class, 'create'])->name('maquina.create');
Route::get('maquina/index', [MaquinaController::class, 'index'])->name('maquina.index');
Route::post('maquina/guardar', [MaquinaController::class, 'store'])->name('maquina.store');
Route::get('maquina/{maquina}/editar', [MaquinaController::class, 'edit'])->name('maquina.edit');
Route::put('maquina/{maquina}/actualizar', [MaquinaController::class, 'update'])->name('maquina.update');
Route::delete('maquina/{maquina}/eliminar', [MaquinaController::class, 'destroy'])->name('maquina.destroy');

Route::get('reporte/registrar', [ReporteController::class, 'create'])->name('reporte.create');
Route::get('reporte/index', [ReporteController::class, 'index'])->name('reporte.index');
Route::get('reporte/download-pdf', [ReporteController::class, 'downloadPDF'])->name('reporte.download');
Route::post('reporte/guardar', [ReporteController::class, 'store'])->name('reporte.store');
Route::get('reporte/{reporte}/editar', [ReporteController::class, 'edit'])->name('reporte.edit');
Route::put('reporte/{reporte}/actualizar', [ReporteController::class, 'update'])->name('reporte.update');
Route::delete('reporte/{reporte}/eliminar', [ReporteController::class, 'destroy'])->name('reporte.destroy');

Route::get('rutina/registrar', [RutinaController::class, 'create'])->name('rutina.create');
Route::get('rutina/index', [RutinaController::class, 'index'])->name('rutina.index');
Route::post('rutina/guardar', [RutinaController::class, 'store'])->name('rutina.store');
Route::get('rutina/{rutina}/editar', [RutinaController::class, 'edit'])->name('rutina.edit');
Route::put('rutina/{rutina}/actualizar', [RutinaController::class, 'update'])->name('rutina.update');
Route::delete('rutina/{rutina}/eliminar', [RutinaController::class, 'destroy'])->name('rutina.destroy');



//Rutas Cliente

Route::get('rutina/index2', [RutinaController::class, 'index2'])->name('rutina.index2');
Route::get('rutina/index2/{rutina}', [RutinaController::class, 'show']);
Route::get('maquina/index2', [MaquinaController::class, 'index2'])->name('maquina.index2');
Route::get('reporte/index2', [ReporteController::class, 'index2'])->name('reporte.index2');
Route::post('reporte/guardar2', [ReporteController::class, 'store2'])->name('reporte.store2');
Route::get('reporte/registrar2', [ReporteController::class, 'create2'])->name('reporte.create2');



//Rutas Entrenador

Route::get('cliente/index2', [ClienteController::class, 'index2'])->name('cliente.index2');
Route::get('rutina/index3', [RutinaController::class, 'index3'])->name('rutina.index3');
Route::get('rutina/registrar2', [RutinaController::class, 'create2'])->name('rutina.create2');
Route::post('rutina/guardar2', [RutinaController::class, 'store2'])->name('rutina.store2');
Route::get('rutina/{rutina}/editar2', [RutinaController::class, 'edit2'])->name('rutina.edit2');
Route::put('rutina/{rutina}/actualizar2', [RutinaController::class, 'update2'])->name('rutina.update2');
Route::delete('rutina/{rutina}/eliminar2', [RutinaController::class, 'destroy2'])->name('rutina.destroy2');
