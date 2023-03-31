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
                'color' => 'secondary',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'estatu' => 'En espera',
                'color' => 'warning',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'estatu' => 'En proceso',
                'color' => 'primary',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'estatu' => 'Completado',
                'color' => 'success',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'estatu' => 'Rechazado',
                'color' => 'danger',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ];
        

        DB::table('estatus')->insert($data);
    }
}
