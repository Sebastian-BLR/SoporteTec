<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class estatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'estatu' => 'Solicitado',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'estatu' => 'En espera',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'estatu' => 'En proceso',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'estatu' => 'Completado',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'estatu' => 'Rechazado',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ];
        

        DB::table('estatus')->insert($data);
    }
}
