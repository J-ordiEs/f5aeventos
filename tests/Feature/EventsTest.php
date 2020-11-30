<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Event;


class EventsTest extends TestCase
{
    use RefreshDatabase;
    public function testRouteEvents()
    {
        $response = $this->get('/events');

        $response->assertStatus(200);
    }


    public function testReturnEventView()
    {
        $response = $this->get('/events');
        $response->assertViewIs('events.events');
    }
    public function testCreateEvent()
    {
        $events = Event::factory(2)->create();
        $this->assertCount(2, $events);
    }

    public function testReturnViewHasEvents()
    {
        $events = Event::all();
        $response = $this->get(route('events'));
        $response->assertViewHas('events', $events);
    }

    public function testReturnCanSeeEventsInView()
    {
        Event::factory(2)->create();
        $events = Event::all();
        $response = $this->get(route('events'));
        $response->assertSee($events[0]->title);

    }

}
