<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//Spatie
use Spatie\Permission\Models\Permission;

class SeederTablaPermisos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permisos = [
            
            //tabla productos 
            'ver-producto',
            'crear-producto',
            'editar-producto',
            'borrar-producto',
            //tabla usuarios
            'ver-usuario',
            'crear-usuario',
            'editar-usuario',
            'borrar-usuario',
            //tabla roles
            'ver-rol',
            'crear-rol',
            'editar-rol',
            'borrar-rol',
           //tabla blog 
            'ver-blog',
            'crear-blog',
            'editar-blog',
            'borrar-blog',
            
        ];
    foreach($permisos as $permiso){
        Permission::create(['name'=>$permiso]);
    }
    }
}
