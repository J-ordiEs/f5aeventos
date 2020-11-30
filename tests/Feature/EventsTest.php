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

        public function testDatabase()
    {
        // Make call to application...

        $this->assertDatabaseHas('events', [
            'id' => 1,
            // 'date' => '2020-11-16 09:36:19',
            // 'time'=> '00:00:00',
            'title' => 'Css',
            'speaker' => 'steve jobs',
            'image' => 'imagen',
            'description' => 'css is cool',
            'capacity' => 20,
            'requirements' => 'mic',
            'zoom' => 'www.pages.com',
            'special' => false,
            'past' => false
        ]);
    }

    public function testCreateEvent()
    {
        $events = Event::factory(2)->create();
        $this->assertCount(2, $events);
    }
}
