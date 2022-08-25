<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Event;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Event::factory()->create(['title' => 'Scrum Webinar', 'description' => 'Learn by doing with our scrum game', 'img' => 'https://via.placeholder.com/640x480.png/0000ee?text=officiis }}', 'spaces' => 12, 'event_date' => '2022-09-09']);
        Event::factory()->create(['title' => 'JS Webinar', 'description' => 'Learn by doing with our JS game', 'img' => 'https://via.placeholder.com/640x480.png/0000ee?text=officiis', 'spaces' => 14, 'event_date' => '2022-11-09']);
        Event::factory(30)->create();
    }
}
