<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;
use App\Models\User;

class EventSeeder extends Seeder
{
    public function run()
    {
        $organizers = User::where('role', 'organizer')->get();

        foreach ($organizers as $organizer) {
            Event::factory(2)->create(['organizer_id' => $organizer->id]);
        }
    }
}
