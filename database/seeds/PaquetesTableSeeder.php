<?php

use Illuminate\Database\Seeder;

class PaquetesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('paquetes')->insert([
            'name' => 'Config',
            'icon' => 'fa fa-cog',
            'url' => 'config',
            'observation' => 'nada',
            'state' => true,
        ]);

        DB::table('paquetes')->insert([
            'name' => 'Básicos',
            'icon' => 'fa fa-bars',
            'url' => 'basicos',
            'observation' => 'nada',
            'state' => true,
        ]);

    }
}
