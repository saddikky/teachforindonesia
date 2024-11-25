<?php

namespace Database\Seeders;

use App\Models\EventDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class EventDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create a Faker instance
        $faker = Faker::create();

        // Loop to create 10 events
        for ($i = 0; $i < 10; $i++) {
            EventDetail::create([
                'e_name' => $faker->sentence(3), // Random event name
                'e_type' => 'Social Event', // Fixed event type
                'organizer' => 'BINUS University', // Fixed organizer name
                'role' => 'Volunteer', // Fixed role
                'open_reg' => $faker->dateTimeBetween('now', '+1 week'), // Random open registration date
                'close_reg' => $faker->dateTimeBetween('+1 week', '+2 weeks'), // Random close registration date
                'report_deadline' => $faker->dateTimeBetween('+2 weeks', '+3 weeks'), // Random report deadline
                'e_desc' => $faker->paragraph, // Random description
                'notes' => $faker->optional()->sentence, // Random notes (optional)
                'cb_type' => $faker->randomElement(['Pancasila', 'Kewarganegaraan', 'Agama']), // Random cb_type
            ]);
        }
    }
}
