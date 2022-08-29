<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;
use Illuminate\Support\Facades\DB;
use App\Exports\grupoExport;
use App\Exports\empresaExport;
use App\Exports\servicioExport;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

class FinanzasController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $empleados = Empleado::all();
        return view('Finanzas.Principal', compact('empleados'));
    }


    public function show($EMP_ID)
    {
        $empleados = 'select * from empleados where EMP_ID = ' . $EMP_ID . ' limit 1';
        $consulta = DB::select($empleados);
        return view('Finanzas.horaAgente', compact('consulta'));
        // return $consulta;
    }

    public function export()
    {
        return Excel::download(new UsersExport, 'Agentes.xlsx');
    }

    public function grupo($id)
    {

        return (new grupoExport)->forDate($id)->download('campaña.xlsx');
        /* return Excel::download(new UsersExport, 'users.xlsx'); */
    }

    public function empresa($id)
    {

        return (new empresaExport)->forDate($id)->download('empresa.xlsx');
        /* return Excel::download(new UsersExport, 'users.xlsx'); */
    }


    public function servicio($id)
    {

        return (new servicioExport)->forDate($id)->download('servicio.xlsx');
        /* return Excel::download(new UsersExport, 'users.xlsx'); */
    }
}
