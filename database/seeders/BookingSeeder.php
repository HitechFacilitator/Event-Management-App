<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Booking;
use App\Models\User;
use App\Models\Event;
use App\Models\Ticket;

class BookingSeeder extends Seeder
{
    public function run()
    {
        $attendees = User::where('role', 'attendee')->get();
        $events = Event::all();

        foreach ($attendees as $attendee) {
            $event = $events->random();
            $ticket = $event->tickets->random();

            Booking::create([
                'user_id' => $attendee->id,
                'event_id' => $event->id,
                'ticket_id' => $ticket->id,
                'quantity' => rand(1, 3),
                'status' => 'confirmed',
            ]);
        }
    }
}
