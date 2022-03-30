<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ip>
 */
class IpFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'ip' => $this->faker->ipv4(),
            'description' => $this->faker->text(),
            'user' => $this->faker->name(),
            'date_ajout' => now(),
        ];
    }
}
