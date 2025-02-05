<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Ticket;
use App\Models\Event;

class TicketFactory extends Factory
{
    protected $model = Ticket::class;

    public function definition()
    {
        return [
            'event_id' => Event::inRandomOrder()->first()->id ?? Event::factory()->create()->id,
            'ticketType' => $this->faker->randomElement(['VIP', 'General', 'Student']),
            'ticketQuantity' => $this->faker->numberBetween(50, 200),
            'currentTicketQty' => $this->faker->numberBetween(0, 200),
            'price' => $this->faker->randomFloat(2, 10, 100),
        ];
    }
}
