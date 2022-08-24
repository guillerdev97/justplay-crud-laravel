<?php

namespace Tests\Feature;

use App\Models\Event;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CrudTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    use RefreshDatabase;
    
    // read test
    public function test_list_event_appear_in_homepage()
    {
        $this->withExceptionHandling();

        $events = Event::factory(2)->create();
        $event = $events[0];

        $response = $this->get('/');
        $response->assertStatus(200)
            ->assertViewIs('home');
        $response->assertSee($event->name);
    }

    // delete test
    public function test_an_event_can_be_deleted()
    {
        $this->withExceptionHandling();

        $event = Event::factory()->create();
        $this->assertCount(1, Event::all());
        $response = $this->delete(route('delete', $event->id));
        $this->assertCount(0, Event::all());
    }

    // create test
    public function test_create()
    {
        $this->withExceptionHandling();

        $response = $this->post(route('storeEvent', [
            'title' => 'title',
            'description' => 'description',
            'img' => 'img',
            'spaces' => 'spaces',
            'event_date' => 'event_date'
        ]));

        $this->assertCount(1, Event::all());
    }

    // edit test
    
}
