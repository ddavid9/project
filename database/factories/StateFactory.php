<?php

namespace Database\Factories;

use App\Models\State;
use Illuminate\Database\Eloquent\Factories\Factory;

class StateFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = State::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'text' => $this->faker->sentence(),
            'a' => rand(0, 8),
            'b' => rand(0, 8),
            'c' => rand(0, 8),
            'atext' => $this->faker->name(),
            'btext' => $this->faker->name(),
            'ctext' => $this->faker->name(),
        ];
    }
}
