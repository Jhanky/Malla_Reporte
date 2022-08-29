<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Models\cliente;
use App\Models\campaña;

class CampañasController extends Controller
{
    public function index(){

        $total = campaña::count();

        $campañas = campaña::all();

        return view('Campañas.index', compact('campañas', 'total'));

    }

    public function create(request $request)
    {

        $request->validate([
            'CAM_NOMBRE' => 'required|unique:campañas',
            'CAM_CODE' => 'required|unique:campañas'
        ]);

        $datoscampaña = request()->except('_token');
        campaña::insert($datoscampaña);

        return redirect('/campañas')->with('rgcmessage', 'Campaña cargada con exito!...');
    }

    public function destroy($id)
    {
        campaña::where('CAM_ID', $id)->delete();
        return redirect('/campañas')->with('msjdelete', 'Campaña borrada correctamente!...');
    }

    public function update(request $request, $id)
    {

        $datoscampaña = request()->except(['_token','_method']);
        campaña::where('CAM_ID','=', $id)->update($datoscampaña);


        Session::flash('msjupdate', '¡La campaña se a actualizado correctamente!...');
        return redirect('/campañas');
    }

}
