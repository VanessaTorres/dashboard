<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Modulo;


class PermisosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*****PAQUETE CONFIG****/

        //Roles
        $modulo = Modulo::where('name','Roles')->get();
        if(count($modulo) > 0){
            DB::table('permissions')->insert([
                'name' => 'Crear Rol',
                'guard_name' => 'web',
                'modulo_id' => $modulo[0]->id
            ]);

            DB::table('permissions')->insert([
                'name' => 'Actualizar Rol',
                'guard_name' => 'web',
                'modulo_id' =>  $modulo[0]->id
            ]);

            DB::table('permissions')->insert([
                'name' => 'Listar Roles',
                'guard_name' => 'web',
                'modulo_id' =>  $modulo[0]->id
            ]);


        }

        //Paquetes
        $modulo = Modulo::where('name','Paquetes')->get();
        if(count($modulo) > 0){

            DB::table('permissions')->insert([
                'name' => 'Crear Paquete',
                'guard_name' => 'web',
                'modulo_id' => $modulo[0]->id
            ]);

            DB::table('permissions')->insert([
                'name' => 'Actualizar Paquete',
                'guard_name' => 'web',
                'modulo_id' => $modulo[0]->id
            ]);

            DB::table('permissions')->insert([
                'name' => 'Listar Paquetes',
                'guard_name' => 'web',
                'modulo_id' => $modulo[0]->id
            ]);
        }




        //Modulos
        $modulo = Modulo::where('name','Modulos')->get();
        if(count($modulo) > 0){
            DB::table('permissions')->insert([
                'name' => 'Crear Modulo',
                'guard_name' => 'web',
                'modulo_id' => $modulo[0]->id
            ]);

            DB::table('permissions')->insert([
                'name' => 'Actualizar Modulo',
                'guard_name' => 'web',
                'modulo_id' => $modulo[0]->id
            ]);

            DB::table('permissions')->insert([
                'name' => 'Listar Modulos',
                'guard_name' => 'web',
                'modulo_id' => $modulo[0]->id
            ]);
        }


        //Permisos
        $modulo = Modulo::where('name','Permisos')->get();
        if(count($modulo) > 0){
            DB::table('permissions')->insert([
                'name' => 'Crear Permiso',
                'guard_name' => 'web',
                'modulo_id' => $modulo[0]->id
            ]);

            DB::table('permissions')->insert([
                'name' => 'Actualizar Permiso',
                'guard_name' => 'web',
                'modulo_id' => $modulo[0]->id
            ]);

            DB::table('permissions')->insert([
                'name' => 'Listar Permisos',
                'guard_name' => 'web',
                'modulo_id' => $modulo[0]->id
            ]);
        }


        /*****PAQUETE BÁSICOS****/

        //Tipo Maestro
        $modulo = Modulo::where('name','Tipo Maestro')->get();
        if(count($modulo) > 0){
            DB::table('permissions')->insert([
                'name' => 'Crear Tipo Maestro',
                'guard_name' => 'web',
                'modulo_id' => $modulo[0]->id
            ]);

            DB::table('permissions')->insert([
                'name' => 'Actualizar Tipo Maestro',
                'guard_name' => 'web',
                'modulo_id' => $modulo[0]->id
            ]);

            DB::table('permissions')->insert([
                'name' => 'Listar Tipo Maestro',
                'guard_name' => 'web',
                'modulo_id' => $modulo[0]->id
            ]);
        }

        //Tipo Maestro Item
        $modulo = Modulo::where('name','Tipo Maestro Item')->get();
        if(count($modulo) > 0){
            DB::table('permissions')->insert([
                'name' => 'Crear Tipo Maestro Item',
                'guard_name' => 'web',
                'modulo_id' => $modulo[0]->id
            ]);

            DB::table('permissions')->insert([
                'name' => 'Actualizar Tipo Maestro Item',
                'guard_name' => 'web',
                'modulo_id' => $modulo[0]->id
            ]);

            DB::table('permissions')->insert([
                'name' => 'Listar Tipo Maestro Item',
                'guard_name' => 'web',
                'modulo_id' => $modulo[0]->id
            ]);
        }


        //Paises
        $modulo = Modulo::where('name','Paises')->get();
        if(count($modulo) > 0){
            DB::table('permissions')->insert([
                'name' => 'Crear Pais',
                'guard_name' => 'web',
                'modulo_id' => $modulo[0]->id
            ]);

            DB::table('permissions')->insert([
                'name' => 'Actualizar Pais',
                'guard_name' => 'web',
                'modulo_id' => $modulo[0]->id
            ]);

            DB::table('permissions')->insert([
                'name' => 'Listar Paises',
                'guard_name' => 'web',
                'modulo_id' => $modulo[0]->id
            ]);
        }

        //Depeartamentos
        $modulo = Modulo::where('name','Departamentos')->get();
        if(count($modulo) > 0){
            DB::table('permissions')->insert([
                'name' => 'Crear Departamento',
                'guard_name' => 'web',
                'modulo_id' => $modulo[0]->id
            ]);

            DB::table('permissions')->insert([
                'name' => 'Actualizar Departamento',
                'guard_name' => 'web',
                'modulo_id' => $modulo[0]->id
            ]);

            DB::table('permissions')->insert([
                'name' => 'Listar Departamentos',
                'guard_name' => 'web',
                'modulo_id' => $modulo[0]->id
            ]);
        }

        //Ciudades
        $modulo = Modulo::where('name','Ciudades')->get();
        if(count($modulo) > 0){
            DB::table('permissions')->insert([
                'name' => 'Crear Ciudad',
                'guard_name' => 'web',
                'modulo_id' => $modulo[0]->id
            ]);

            DB::table('permissions')->insert([
                'name' => 'Actualizar Ciudad',
                'guard_name' => 'web',
                'modulo_id' => $modulo[0]->id
            ]);

            DB::table('permissions')->insert([
                'name' => 'Listar Ciudad',
                'guard_name' => 'web',
                'modulo_id' => $modulo[0]->id
            ]);
        }

        //Usuario
        $modulo = Modulo::where('name','Usuario')->get();
        if(count($modulo) > 0){
            DB::table('permissions')->insert([
                'name' => 'Crear Usuario',
                'guard_name' => 'web',
                'modulo_id' => $modulo[0]->id
            ]);

            DB::table('permissions')->insert([
                'name' => 'Actualizar Usuario',
                'guard_name' => 'web',
                'modulo_id' => $modulo[0]->id
            ]);

            DB::table('permissions')->insert([
                'name' => 'Listar Usuarios',
                'guard_name' => 'web',
                'modulo_id' => $modulo[0]->id
            ]);
        }

        $permisos = Permission::all()->toArray();
        $permisos_array_name = array_column($permisos, 'name');

        $role = Role::findByName('Administrador');
        $role->givePermissionTo($permisos_array_name);

    }
}
