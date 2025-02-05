<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ticket;
use App\Models\Event;

class TicketSeeder extends Seeder
{
    public function run()
    {
        $events = Event::all();

        foreach ($events as $event) {
            Ticket::factory(3)->create(['event_id' => $event->id]);
        }
    }
}
