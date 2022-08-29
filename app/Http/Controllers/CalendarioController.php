<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CalendarioController extends Controller
{
    public function calendario_Agente(request $request){

        $sql = "SELECT e.`EVE_ID`, c.`CLI_NOMBRE` as title, e.`EVE_INICIO` as start, e.`EVE_FINAL` as end
        FROM `eventos` e
        INNER JOIN clientes c
        WHERE c.`CLI_ID` = e.`CLI_ID` AND EMP_ID = ".$request->id_empleado;

        $eventos = DB::select($sql);

        echo json_encode(
            array(
                "success" => true,
                "evento" => $eventos
            )
        );

    }

    public function calendario_Supervisor_Agente(request $request){

        $sql = "SELECT c.`CLI_NOMBRE` as title, e.`EVE_INICIO` as start, e.`EVE_FINAL` as end
        FROM `eventos` e
        INNER JOIN clientes c
        WHERE c.`CLI_ID` = e.`CLI_ID` AND EMP_ID = ".$request->id_empleado;

        $eventos = DB::select($sql);

        echo json_encode(
            array(
                "success" => true,
                "evento" => $eventos
            )
        );

    }





    /*
    public function calendario_Agente(request $request){

        $sql = "SELECT cl.CLI_NOMBRE as title, e.EVE_INICIO as start, e.EVE_FINAL as end
        FROM mallas m
        INNER JOIN contratos co
        INNER JOIN clientes cl
        INNER JOIN evento e
        WHERE co.CON_ID = m.CON_ID
        AND cl.CLI_ID = co.CLI_ID
        AND e.MAL_ID = m.MAL_ID
        AND m.EMP_ID = ".$request->id_empleado;

        $eventos = DB::select($sql);

        echo json_encode(
            array(
                "success" => true,
                "evento" => $eventos
            )
        );

    }

    public function calendario_Supervisor_Agente(request $request){

        $sql = "SELECT cl.CLI_NOMBRE as title, e.EVE_INICIO as start, e.EVE_FINAL as end
        FROM mallas m
        INNER JOIN contratos co
        INNER JOIN clientes cl
        INNER JOIN evento e
        WHERE co.CON_ID = m.CON_ID
        AND cl.CLI_ID = co.CLI_ID
        AND e.MAL_ID = m.MAL_ID
        AND m.EMP_ID = ".$request->id_empleado;

        $eventos = DB::select($sql);

        echo json_encode(
            array(
                "success" => true,
                "evento" => $eventos
            )
        );

    } */
}
