<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Models\cliente;


class ClientesController extends Controller
{

    public function index(){

        $total = cliente::count();

        $clientes = cliente::all();

        return view('Clientes.index', compact('clientes', 'total'));

    }

    public function create(request $request)
    {

        $request->validate([
            'CLI_NOMBRE' => 'required|unique:clientes',
            'CLI_CODE' => 'required|unique:clientes'
        ]);

        $datosCliente = request()->except('_token');
        cliente::insert($datosCliente);

        return redirect('/clientes')->with('rgcmessage', 'Client cargado con exito!...');
    }

    public function destroy($id)
    {
        cliente::where('CLI_ID', $id)->delete();
        return redirect('/clientes')->with('msjdelete', 'Client borrado correctamente!...');
    }

    public function update(request $request, $id)
    {

        $datosCliente = request()->except(['_token','_method']);
        cliente::where('CLI_ID','=', $id)->update($datosCliente);


        Session::flash('msjupdate', '¡El Cliente se a actualizado correctamente!...');
        return redirect('/clientes');
    }

}
