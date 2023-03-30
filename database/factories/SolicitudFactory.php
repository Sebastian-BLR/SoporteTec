<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Solicitud>
 */
class SolicitudFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
            'nombre' =>fake()->name,
            'email' => fake()->email,
            'problema_id' => fake()->numberBetween(1 , 10),
            'descripcion' => fake()->paragraph(2),
            'fecha' => fake()->dateTimeBetween('+3 days', '+10 days')->format('Y-m-d'),
            'estatus_id' => '1',
            'direccion' => fake()->address,
            'created_at' => fake()->dateTimeBetween('now', '+10 days'),
            'updated_at' => fake()->dateTimeBetween('now', '+10 days'),
        ];
    }
}
