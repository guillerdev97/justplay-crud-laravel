<?php


namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Event;
use Illuminate\Database\Seeder;
use App\Models\User;

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

        Event::factory()->create(['title' => 'Scrum Webinar', 'description' => 'Learn by doing with our scrum game', 'img' => 'https://www.comunidadbaratz.com/wp-content/uploads/Instrucciones-a-tener-en-cuenta-sobre-como-se-abre-un-libro-nuevo.jpg', 'spaces' => 12, 'event_date' => '2022-09-09']);
        Event::factory()->create(['title' => 'JS Webinar', 'description' => 'Learn by doing with our JS game', 'img' => 'https://via.placeholder.com/640x480.png/00ff44?text=commodi', 'spaces' => 14, 'event_date' => '2022-11-09']);
        Event::factory(10)->create();
        User::factory()->create(['name'=>'admin', 'email'=>'admin@admin.com', 'isAdmin'=>true]);
        User::factory()->create(['name'=>'user1', 'email'=>'user1@user1.com', 'isAdmin'=>false]);
        
        /* Event::factory()
            ->has(User::factory()->count(20))
            ->create();

        User::factory()
        ->has(Event::factory()->count(20))
        ->create(); */
    }
}
