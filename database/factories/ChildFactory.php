<?php

namespace Database\Factories;

use App\Models\School;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Child>
 */
class ChildFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'registration_no' => fake()->unique()->word(),
            'name' => fake()->sentence(),
            'dob' => fake()->date(),
            'gender' => fake()->randomElement(['male', 'female']),
            'edu_status' => fake()->randomElement(['yet_to_start', 'preschool', 'primary', 'secondary', 'tertiary', 'completed']),
            'admission_date' => fake()->dateTimeBetween('-1 year', 'now'),
            'admission_notes' => fake()->paragraph(),
            'guardian_name' => fake()->name(),
            'guardian_phone_no' => fake()->phoneNumber(),
            'guardian_relationship' => fake()->randomElement(['parent', 'guardian', 'relative']),
            'photo_url' => fake()->imageUrl(),
            'behavior_notes' => fake()->paragraph(),
            'enrollment_date' => fake()->date(),
            'expected_completion_date' =>  fake()->dateTimeBetween('now', '+4 year'),
            'health_notes' => fake()->paragraph(),
            'has_special_needs' => fake()->boolean(),
            'special_needs_description' => fake()->paragraph(),
            'residency_status' => fake()->randomElement(['active', 'inactive', 'on_leave']),

            'school_name' => fake()->sentence(),
            'school_affiliation' => fake()->randomElement(['public', 'private', 'ngo']),
            'school_location' => fake()->sentence(),
            'school_county' => fake()->sentence(),
            'school_phone_no' => fake()->sentence(),
            'school_notes' => fake()->sentence(),



        ];
    }
}
