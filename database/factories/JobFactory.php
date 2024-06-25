<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employer_id' => Employer::factory(),
            'title' => fake()->jobTitle,
            'salary' => fake()->randomElement([26000, 34000, 22000, 54000, 44000, 14000, 29000]),
            'location' => fake()->randomElement(['Remote', 'On-Site', 'Hybrid']),
            'schedule' => fake()->randomElement(['Full-time', 'Half-time']),
            'url' => fake()->url,
            'featured' => false
        ];
    }
}
