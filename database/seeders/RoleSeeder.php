<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() /* PARA EJECUTAR COLOCAR EN CONSOLA: php artisan db:seed --class=NombreDelSeeder */
    {
        $permisos = [

            /* PERMISOS PARA VER OPCIONES SIDEBAR */
            'sidebar_supervisor',
            'sidebar_finanzas',
            'sidebar_agente'

        ];


        $roles = [

            'Administrador',
            'Supervisor',
            'Contadores',
            'Agente'

        ];


        foreach($roles as $rol) {
            Role::create(['name'=>$rol]);
        }

        foreach($permisos as $permiso) {
            Permission::create(['name'=>$permiso]);
        }
    }
}
