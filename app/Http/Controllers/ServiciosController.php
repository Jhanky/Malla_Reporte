<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Models\servicio;

class ServiciosController extends Controller
{

    public function index(){

        $total = servicio::count();

        $servicio = servicio::all();

        return view('Servicios.index', compact('servicio', 'total'));

    }

    public function create(request $request)
    {

        $request->validate([
            'SER_NOMBRE' => 'required|unique:servicios',
            'SER_CODE' => 'required|unique:servicios'
        ]);

        $datosServicio = request()->except('_token');
        servicio::insert($datosServicio);

        return redirect('/servicios')->with('rgcmessage', '¡Servicio cargado con exito!...');
    }

    public function destroy($id)
    {
        servicio::where('SER_ID', $id)->delete();
        return redirect('/servicios')->with('msjdelete', '¡Servicio borrado correctamente!...');
    }

    public function update(request $request, $id)
    {

        $datosServicio = request()->except(['_token','_method']);
        servicio::where('SER_ID','=', $id)->update($datosServicio);


        Session::flash('msjupdate', '¡El servicio se a actualizado correctamente!...');
        return redirect('/servicios');
    }


}
