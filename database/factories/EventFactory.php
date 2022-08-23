<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //

            'title' => $this->faker->company(),
            'description' => $this->faker->realText(),
            'img' => $this->faker->imageUrl(),
            'spaces' => $this->faker->biasedNumberBetween($min = 10, $max = 30, $function = 'sqrt'),
            'event_date' => $this->faker->date($format = 'Y-m-d', $max = 'now')
        ];
    }
}
