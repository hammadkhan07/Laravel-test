<?php

namespace Database\Factories;
use App\Models\Consignment;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Consignment>
 */
class ConsignmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'company'        => $this->faker->company(),
            'contact'        => $this->faker->phoneNumber(),
            'address_line_1' => $this->faker->address(),
            'address_line_2' => $this->faker->secondaryAddress(),
            'address_line_3' => $this->faker->buildingNumber(),
            'city'           => $this->faker->city(),
            'country'        => $this->faker->country(),
        ];
    }
}
