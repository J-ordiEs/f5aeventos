<?php

namespace Database\Factories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Event::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //'id' => $this->faker->id,
            'date' => $this->faker->date(),
            'time' => $this->faker->time(),
            'title' => $this->faker->sentence(),
            'speaker' => $this->faker->name,
            'image' => $this->faker->image,
            'description' => $this->faker->sentence(),
            'capacity' =>$this->faker->numberBetween(1, 1000),
            'requirements' => $this->faker->sentence(),
            'zoom' => $this->faker->url(),

        ];
    }
}
