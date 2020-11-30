<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Event;
use App\Database\Factories;

class EventsTest extends TestCase
{  
    public function testRouteEvents()
    {
        $response = $this->get('/events');

        $response->assertStatus(200);
    }

    public function testCreateEvent()
    {
        $events = Event::factory(2)->create();
        $this->assertCount(2, $events);
    }

    public function testReturnEventView()
    {
        $response = $this->get('/events');
        $response->assertViewIs('events.events');
    }
}
