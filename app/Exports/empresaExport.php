<?php

namespace App\Exports;

use App\Models\Empleado;
use App\Models\User;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;

class empresaExport implements FromQuery, WithHeadings
{

    Use Exportable;

    private $date;
    public function forDate($date)
    {
        $this->date = $date;
        return $this;
    }

    public function headings(): array
    {
        return [
            'Numero de identificacion',
            'Nombre',
            'Email',
            'Nombre de usuario',
        ];
    }

    public function query()
    {
        return DB::table('empleados')
        ->join('users', 'users.id', '=', 'empleados.EMP_ID')
        ->select('empleados.EMP_CEDULA','empleados.EMP_NOMBRES', 'empleados.EMP_EMAIL', 'users.name')
        ->where('EMP_ID', $this->date)
        ->orderBy('empleados.EMP_NOMBRES', 'desc')
        ->limit(1);

    }

}
