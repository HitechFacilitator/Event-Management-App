<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Booking;
use App\Models\User;
use App\Models\Event;
use App\Models\Ticket;

class BookingFactory extends Factory
{
    protected $model = Booking::class;

    public function definition()
    {
        return [
            'user_id' => User::where('role', 'attendee')->inRandomOrder()->first()->id ?? User::factory()->create(['role' => 'attendee'])->id,
            'event_id' => Event::inRandomOrder()->first()->id ?? Event::factory()->create()->id,
            'ticket_id' => Ticket::inRandomOrder()->first()->id ?? Ticket::factory()->create()->id,
            'quantity' => $this->faker->numberBetween(1, 5),
            'status' => $this->faker->randomElement(['pending', 'confirmed', 'cancelled']),
        ];
    }
}
