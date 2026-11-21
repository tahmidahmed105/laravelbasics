<?php

namespace Database\Factories;

use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Teacher>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
             'teacher_id' => 'T' . fake()->unique()->numberBetween(100, 999),
            'teacher_name' => fake()->name(),
            'teacher_department' => fake()->city(),

    
            //
        ];
    }
}
