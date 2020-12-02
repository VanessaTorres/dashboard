<?php

use Illuminate\Database\Seeder;
use App\TipoMaestro;
use App\TipoMaestroItem;
use App\User;

class TipomaestroTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::role('Administrador')->get();

        DB::table('tipomaestro')->insert([

            'nombre' => 'DOCUMENTO',
            'estado' => true,
            'observacion' => "TIPO DE DOCUMENTO DE IDENTIFICACIÓN"
        ]);
            DB::table('tipomaestroitem')->insert([

                'tipomaestro_id' => 1,
                'nombre' => 'CEDULA DE CIUDADANIA',
                'numitem' => 1,
                'estado' => true,
                'observacion' => ""
            ]);

            DB::table('tipomaestroitem')->insert([

                'tipomaestro_id' => 1,
                'nombre' => 'CEDULA EXTRANJERIA',
                'numitem' => 2,
                'estado' => true,
                'observacion' => ""
            ]);

            DB::table('tipomaestroitem')->insert([

                'tipomaestro_id' => 1,
                'nombre' => 'PASAPORTE',
                'numitem' => 3,
                'estado' => true,
                'observacion' => ""
            ]);
        
    }
}
