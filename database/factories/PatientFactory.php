<?php

namespace Database\Factories;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\Factory;

class PatientFactory extends Factory
{
    protected $model = Patient::class;

    public function definition(): array
    {
        return [
            'firstname' => $this->faker->firstName(),
            'lastname' => $this->faker->lastName(),
            'street' => $this->faker->streetName(),
            'housenumber' => $this->faker->numberBetween(1, 200),
            'housenumber_suffix' => $this->faker->optional()->randomElement(['A', 'B', 'C', null]),
            'postal_code' => $this->faker->postcode(),
            'city' => $this->faker->city(),
            'country' => $this->faker->country(),
            'phone' => $this->faker->phoneNumber(),
            'email' => $this->faker->unique()->safeEmail(),
            'birthdate' => $this->faker->date('Y-m-d', '-18 years'),
            'notes' => $this->faker->optional()->sentence(),
            'partner_firstname' => $this->faker->optional()->firstName(),
            'partner_lastname' => $this->faker->optional()->lastName(),
            'partner_phone' => $this->faker->optional()->phoneNumber(),
        ];
    }
}
