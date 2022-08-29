<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Models\contrato;
use App\Models\unidad_negocio;
use App\Models\cliente;
use App\Models\servicio;
use App\Models\campaña;

class ContratosController extends Controller
{
    public function index(){

        $total = contrato::count();

        $unidad_negocios = unidad_negocio::all();
        $clientes = cliente::all();
        $servicios = servicio::all();
        $campañas = campaña::all();

        $sql = "SELECT con.CON_ID ,uni.UNI_ID, uni.UNI_NOMBRE, cli.CLI_ID, cli.CLI_NOMBRE, ser.SER_ID, ser.SER_NOMBRE, cam.CAM_ID, cam.CAM_NOMBRE
        FROM contratos con
        INNER JOIN unidad_negocios uni
        INNER JOIN clientes cli
        INNER JOIN servicios ser
        INNER JOIN campañas cam
        WHERE con.CON_ESTADO = 1 AND
        con.UNI_ID = uni.UNI_ID AND
        con.CLI_ID = cli.CLI_ID AND
        con.SER_ID = ser.SER_ID AND
        con.CAM_ID = cam.CAM_ID";

        $contratos = DB::select($sql);

        return view('Contratos.index', compact('contratos', 'total', 'unidad_negocios', 'clientes', 'servicios', 'campañas'));

    }

    public function create(request $request)
    {

        $request->validate([
            'UNI_ID' => 'required',
            'CLI_ID' => 'required',
            'SER_ID' => 'required',
            'CAM_ID' => 'required'
        ]);

        $datosContrato = request()->except('_token');
        contrato::insert($datosContrato);

        return redirect('/contratos')->with('rgcmessage', 'Contrato cargado con exito!...');
    }

    public function destroy($id)
    {
        contrato::where('CON_ID', $id)->delete();
        return redirect('/contratos')->with('msjdelete', 'Contrato borrado correctamente!...');
    }

    public function update(request $request, $id)
    {

        $datosContrato = request()->except(['_token','_method']);
        contrato::where('CON_ID','=', $id)->update($datosContrato);


        Session::flash('msjupdate', '¡El Contrato se a actualizado correctamente!...');
        return redirect('/contratos');
    }
}
