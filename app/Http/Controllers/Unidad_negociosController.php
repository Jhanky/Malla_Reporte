<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Models\unidad_negocio;

class Unidad_negociosController extends Controller
{

    public function index(){

        $total = unidad_negocio::count();

        $unidad_negocio = unidad_negocio::all();

        return view('Unidad_negocios.index', compact('unidad_negocio', 'total'));

    }

    public function create(request $request)
    {

        $request->validate([
            'UNI_NOMBRE' => 'required|unique:unidad_negocios',
            'UNI_CODE' => 'required|unique:unidad_negocios'
        ]);

        $datosUniNegocio = request()->except('_token');
        unidad_negocio::insert($datosUniNegocio);

        return redirect('/uni_negocios')->with('rgcmessage', '¡Unidad de Negocio cargada con exito!...');
    }

    public function destroy($id)
    {
        unidad_negocio::where('UNI_ID', $id)->delete();
        return redirect('/uni_negocios')->with('msjdelete', '¡Unidad de Negicio borrada correctamente!...');
    }

    public function update(request $request, $id)
    {

        $datosUniNegocios = request()->except(['_token','_method']);
        unidad_negocio::where('UNI_ID','=', $id)->update($datosUniNegocios);


        Session::flash('msjupdate', '¡La Unidad de Negocio se a actualizado correctamente!...');
        return redirect('/uni_negocios');
    }


}
