<?php

namespace Tests\Feature\Api;

use App\Models\Event;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;


class EventsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    use RefreshDatabase;

    public function test_CheckIfEventsAreListedInJsonFile()
    {
       Event::factory(2)->create();

       $response = $this->get(route('eventsApi'));

       $response->assertStatus(200)
            ->AssertJsonCount(2);
    }

    public function test_CanDeleteOneEvent(){
        
        Event::factory(2)->create();
        
        $response = $this->get(route('eventsApi'));

        $response->assertStatus(200)
            ->AssertJsonCount(2);

        $response = $this->delete(route('deleteEventApi', 1));
        $response =$this->get(route('eventsApi'));

        $response->assertStatus(200)
            ->assertJsonCount(1);
    }
}
