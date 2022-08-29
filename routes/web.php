<?php

use App\Http\Controllers\FinanzasController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgenteController;
use App\Http\Controllers\SupervisorController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CalendarioController;
use App\Http\Controllers\Unidad_negociosController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\CampañasController;
use App\Http\Controllers\ContratosController;
use App\Exports\UsersExport;
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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//ROLE CRUD
Route::get('/roles', [RolController::class, 'index'])->name('indexRol');
Route::get('/rol/create', [RolController::class, 'create'])->name('GuardarRol');
Route::post('/rol/create', [RolController::class, 'store'])->name('StoreRol');
Route::delete('/roles/delete/{id}', [RolController::class, 'destroy'])->name('BorrarRol');
Route::get('/roles/update/{id}', [RolController::class, 'edit'])->name('EditarRol');
Route::patch('/roles/update/{id}', [RolController::class, 'update'])->name('UpdateRol');


//USUARIOS CRUD
Route::get('/user', [UserController::class, 'index'])->name('indexUser');
Route::get('/user/create', [UserController::class, 'create'])->name('GuardarUser');
Route::post('/user/create', [UserController::class, 'store'])->name('StoreUser');
Route::delete('/user/delete/{id}', [UserController::class, 'destroy'])->name('BorrarUser');
Route::get('/user/update/{id}', [UserController::class, 'edit'])->name('EditarUser');
Route::patch('/user/update/{id}', [UserController::class, 'update'])->name('UpdateUser');

//CALENDARIO AJAX
Route::get('/calendario/agente', [CalendarioController::class, 'calendario_Agente'])->name('Calendario.agente');
Route::get('/supervisor/calendario/agente', [CalendarioController::class, 'calendario_Supervisor_Agente'])->name('calendario.supervisor.agente');

//SUPERVISOR
Route::get('/supervisor', [SupervisorController::class, 'index'])->name('Supervisor.index');
Route::get('/horario/empleado/{id}', [SupervisorController::class, 'Horario_empleado'])->name('Supervisor.horario.empleado');
Route::post('/evento', [SupervisorController::class, 'create_evento'])->name('post.evento');

//AGENTE
Route::get('/agente', function () { return view('Agente.principal'); });
Route::get('/agente/perfil', [UserController::class, 'perfil'])->name('Agente.perfil');
Route::put('/agente/update/perfil/{id}', [UserController::class, 'perfil_update'])->name('UpdatePerfil');

//UNIDAD DE NEGOCIO
Route::get('/uni_negocios', [Unidad_negociosController::class, 'index'])->name('unidad_negocio.index');
Route::post('/uni_negocios', [Unidad_negociosController::class, 'create'])->name('unidad_negocio.create');
Route::delete('/uni_negocios/delete/{id}', [Unidad_negociosController::class, 'destroy'])->name('unidad_negocio.delete');
Route::put('/uni_negocios/update/{id}', [Unidad_negociosController::class, 'update'])->name('unidad_negocio.update');

//SERVICIOS
Route::get('/servicios', [ServiciosController::class, 'index'])->name('servicio.index');
Route::post('/servicios', [ServiciosController::class, 'create'])->name('servicio.create');
Route::delete('/servicios/delete/{id}', [ServiciosController::class, 'destroy'])->name('servicio.delete');
Route::put('/servicios/update/{id}', [ServiciosController::class, 'update'])->name('servicio.update');

//CLIENTE
Route::get('/clientes', [ClientesController::class, 'index'])->name('cliente.index');
Route::post('/clientes', [ClientesController::class, 'create'])->name('cliente.create');
Route::delete('/clientes/delete/{id}', [ClientesController::class, 'destroy'])->name('cliente.delete');
Route::put('/clientes/update/{id}', [ClientesController::class, 'update'])->name('cliente.update');

//CAMPAÑA
Route::get('/campañas', [CampañasController::class, 'index'])->name('campaña.index');
Route::post('/campañas', [CampañasController::class, 'create'])->name('campaña.create');
Route::delete('/campañas/delete/{id}', [CampañasController::class, 'destroy'])->name('campaña.delete');
Route::put('/campañas/update/{id}', [CampañasController::class, 'update'])->name('campaña.update');

//CONTRATOS
Route::get('/contratos', [ContratosController::class, 'index'])->name('contrato.index');
Route::post('/contratos', [ContratosController::class, 'create'])->name('contrato.create');
Route::delete('/contratos/delete/{id}', [ContratosController::class, 'destroy'])->name('contrato.delete');
Route::put('/contratos/update/{id}', [ContratosController::class, 'update'])->name('contrato.update');




Route::get('/Supervisor/Agente', function () {
    return view('Supervisor.totalAgente');
});

Route::get('/Supervisor/Actualizar', function () {
    return view('Supervisor.actualizar');
});

Route::get('/Supervisor/Horario-Agente', function () {
    return view('Supervisor.HorarioAgente');
});


/*  rutas de finanzas  */

// Route::get('/Finanzas', function () {
//     return view('Finanzas.principal');
// });
// Route::get('/Finanzas', [FinanzasController::class, 'listaEmpleado']);

Route::get('/Finanzas/Agente', function () {
    return view('Finanzas.horaAgente');
});

Route::get('/Finanzas/Total-Agente', function () {
    return view('Finanzas.totalAgente');
});

Route::get('/Finanzas/empleado/{id}', [FinanzasController::class, 'show']);

Route::get('/diosito/{id}', [FinanzasController::class, 'excel']);

Route::resource('Finanzas', FinanzasController::class);

/*  rutas de exportacion en excel  */
Route::get('/Agente/excel/post-grupo/{id}', [FinanzasController::class, 'grupo'])->name('post.grupo');
Route::get('/Agente/excel/post-empresa/{id}', [FinanzasController::class, 'empresa'])->name('post.empresa');
Route::get('/Agente/excel/post-servicio/{id}', [FinanzasController::class, 'servicio'])->name('post.servicio');
Route::get('/Agente/excel/post-exportAll', [FinanzasController::class, 'export'])->name('post.export');
// Route::get('/hola/{id}', function () {
//     return (new campañaExport)->forDate(request('date'))->download('hola.xlsx');
// });
