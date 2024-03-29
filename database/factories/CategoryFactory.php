<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    // Esta funcion se utiliza para generar datos en el cual cada uno tenga un nombre diferente esto permite llenar la base de datos con datos falsos
    public function definition(): array
    {
        $name = $this->faker->unique()->word(20);
        return [
            'name'=> $name,
            'slug'=> Str::slug($name)
        ];
    }
}
