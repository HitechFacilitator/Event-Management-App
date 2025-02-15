<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Create Admin User
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
            'phone_number' => '123456789',
            'profile_picture' => null,
            'address' => '123 Admin Street',
            'cni_picture' => null,
            'cni_number' => '1234567890',
        ]);

        // Create Organizers
        User::factory(5)->create(['role' => 'organizer']);

        // Create Attendees
        User::factory(10)->create(['role' => 'attendee']);
    }
}
