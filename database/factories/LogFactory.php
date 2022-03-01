<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Log>
 */
class LogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "user_id" => $this->faker->numberBetween(1,25),
            "juego_id" => $this->faker->numberBetween(1,2),
            "puntos" => $this->faker->numberBetween(-150,150)
        ];
    }
}
