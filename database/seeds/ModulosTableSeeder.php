<?php

use Illuminate\Database\Seeder;


class ModulosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Paquete: Config
        DB::table('modulos')->insert([
            'name' => 'Roles',
            'url' => 'roles',
            'paquete_id' => 1,
            'icon' => 'fa fa-tag',
            'observation' => 'nada',
            'position' => 1,
            'state' => true,
        ]);

        DB::table('modulos')->insert([
            'name' => 'Paquetes',
            'url' => 'paquetes',
            'paquete_id' => 1,
            'icon' => 'fa fa-th-large',
            'observation' => 'nada',
            'position' => 2,
            'state' => true,
        ]);

        DB::table('modulos')->insert([
            'name' => 'Modulos',
            'url' => 'modulos',
            'paquete_id' => 1,
            'icon' => 'fa fa-th',
            'observation' => 'nada',
            'position' => 3,
            'state' => true,
        ]);

        DB::table('modulos')->insert([
            'name' => 'Permisos',
            'url' => 'permisos',
            'paquete_id' => 1,
            'icon' => 'fa fa-id-badge',
            'observation' => 'nada',
            'position' => 4,
            'state' => true,
        ]);

        DB::table('modulos')->insert([
            'name' => 'Tipo Maestro',
            'url' => 'tiposmaestro',
            'paquete_id' => 2,
            'icon' => 'fa fa-circle',
            'observation' => 'nada',
            'position' => 5,
            'state' => true,
        ]);



        //Paquete: Basicos

        DB::table('modulos')->insert([
            'name' => 'Tipo Maestro Item',
            'url' => 'tiposmaestroitem',
            'paquete_id' => 2,
            'icon' => 'fa fa-list-ol',
            'observation' => 'nada',
            'position' => 1,
            'state' => true,
        ]);

        DB::table('modulos')->insert([
            'name' => 'Paises',
            'url' => 'paises',
            'paquete_id' => 2,
            'icon' => 'fa fa-globe',
            'observation' => 'nada',
            'position' => 2,
            'state' => true,
        ]);

        DB::table('modulos')->insert([
            'name' => 'Departamentos',
            'url' => 'departamentos',
            'paquete_id' => 2,
            'icon' => 'fa fa-map',
            'observation' => 'nada',
            'position' => 3,
            'state' => true,
        ]);

        DB::table('modulos')->insert([
            'name' => 'Ciudades',
            'url' => 'ciudades',
            'paquete_id' => 2,
            'icon' => 'fa fa-flag',
            'observation' => 'nada',
            'position' => 4,
            'state' => true,
        ]);

        DB::table('modulos')->insert([
            'name' => 'Usuario',
            'url' => 'usuarios',
            'paquete_id' => 2,
            'icon' => 'fa fa-user',
            'observation' => 'nada',
            'position' => 5,
            'state' => true,
        ]);
    }
}
