<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subject>
 */
class SubjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->word(),
            'lecturer_id' => 3,
            'semester' => 'Ganjil',
            'academic_year' => '2023/2024',
            'sks' => 3,
            'code' => strtoupper(fake()->lexify('???')).fake()->randomNumber(3),
            'description' => fake()->sentence(),

        ];
    }
}
