<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;

class servicioExport implements FromQuery, WithHeadings
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
            'Id',
            'Nombre',
            'Email',
        ];
    }
    
    public function query()
    {
        // $users = "SELECT * FROM users WHERE email = '".$this->email."'";

        // $p6m_sql = "SELECT MONTH(create_at) AS mes, AVG(cal_calificacion) AS promedio FROM calificaciones WHERE create_at BETWEEN date_sub(now(), interval 6 month) AND NOW() GROUP BY MONTH(create_at) ORDER BY cal_id DESC";

        // $p6m = DB::select($p6m_sql);

        return User::query()->where('id', $this->date);


        // $users = DB::table('Users')->select('id','name', 'email')->get();
        // return $users;
    }
}
