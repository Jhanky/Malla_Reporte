<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\campaña;
use App\Models\cliente;
use App\Models\servicio;
use App\Models\unidad_negocio;
use App\Models\evento;

class SupervisorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){

        $sql = "SELECT `EMP_ID`, `EMP_NOMBRES`, `EMP_CEDULA` FROM `empleados`";

        $empleados = DB::select($sql);

        return view('Supervisor.principal', compact('empleados'));

    }

    public function Horario_empleado($id){

        $campañas = campaña::all();
        $servicios = servicio::all();
        $uni_negocios = unidad_negocio::all();
        $clientes = cliente::all();

        $sql = "SELECT e.EMP_ID, e.EMP_NOMBRES, e.EMP_CEDULA, c.CAR_NOMBRE FROM empleados e INNER JOIN cargos c WHERE c.CAR_ID = e.CAR_ID AND e.EMP_ID =".$id;

        $empleado = DB::select($sql);

        return view('Supervisor.calenAgente', compact('empleado','campañas','servicios','uni_negocios','clientes'));
    }

    public function create_evento(request $request)
    {
        $datosEvento = request()->except('_token');
        evento::insert($datosEvento);

        return redirect()->back()->with('rgcmessage', '¡El evento fue guardado con exito!...');
    }

}
