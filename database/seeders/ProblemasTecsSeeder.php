<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProblemasTecsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos = [
            ['nombre' => 'Falla de conexión a Internet',
             'created_at' => Carbon::now(),
             'updated_at' => Carbon::now()],

            ['nombre' => 'Pérdida de datos',
             'created_at' => Carbon::now(),
             'updated_at' => Carbon::now()],

            ['nombre' => 'Pérdida de archivos', 
             'created_at' => Carbon::now(), 
             'updated_at' => Carbon::now()],

            ['nombre' => 'Falla de hardware',
             'created_at' => Carbon::now(), 
             'updated_at' => Carbon::now()],
            
            ['nombre' => 'Falla de software', 
             'created_at' => Carbon::now(),
             'updated_at' => Carbon::now()],

            ['nombre' => 'Problemas con el correo electrónico',
             'created_at' => Carbon::now(), 
             'updated_at' => Carbon::now()],

            ['nombre' => 'Fallas en la impresora',
             'created_at' => Carbon::now(), 
             'updated_at' => Carbon::now()],

            ['nombre' => 'Problemas con el sistema operativo',
             'created_at' => Carbon::now(), 
             'updated_at' => Carbon::now()],
            
            ['nombre' => 'Problemas con el servidor',
             'created_at' => Carbon::now(), 
             'updated_at' => Carbon::now()],
            
            ['nombre' => 'Otro',
             'created_at' => Carbon::now(),
             'updated_at' => Carbon::now()],
        ];

        DB::table('problematec')->insert($datos);
    }
}
