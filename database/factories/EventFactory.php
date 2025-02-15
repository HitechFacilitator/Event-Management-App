<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Event;
use App\Models\User;

class EventFactory extends Factory
{
    protected $model = Event::class;

    public function definition()
    {
        return [
            'eventName' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(),
            'eventDate' => $this->faker->date(),
            'eventTime' => $this->faker->time(),
            'eventLocation' => $this->faker->city(),
            'capacity' => $this->faker->numberBetween(50, 500),
            'paid' => $this->faker->boolean(),
            'eventNature' => $this->faker->randomElement(['public', 'private']),
            'organizer_id' => User::where('role', 'organizer')->inRandomOrder()->first()->id ?? User::factory()->create(['role' => 'organizer'])->id,
        ];
    }
}
