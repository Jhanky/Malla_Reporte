<?php

namespace App\Exports;

use App\User;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings(): array
    {
        return [
            'Numero de Identificacion',
            'Nombre',
            'Email',
        ];
    }


    public function collection()
    {

         $users = DB::table('Empleados')->select('EMP_CEDULA','EMP_NOMBRES', 'EMP_EMAIL')->get();
         return $users;

    }
}
