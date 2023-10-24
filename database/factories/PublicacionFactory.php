<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Publicacion>
 */
class PublicacionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->words(3, true),
            'descripcion' => fake()->sentence(),
            'categoria'=> fake()->randomElement(['comida', 'electronico', 'ropa', 'otro']),
            'precio' => $this->faker->randomFloat(2,0,50),
            'user_id' => User::factory(),
        ];
    }
}
