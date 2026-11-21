<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'std_id' => 'S' . fake()->unique()->numberBetween(100, 999),
            'std_name' => fake()->name(),
            'std_campus' => fake()->city(),
        ];
    }
}
