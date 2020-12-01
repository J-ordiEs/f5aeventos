<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Event;

class DeleteEventTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use RefreshDatabase;
    public function testDeleteEvent()
    {
        $event= Event::factory(1)->create();

        $response = $this->delete('/events'. $event[0]->id);

        $this->assertCount(0, Event::all());

        $response->assertRedirect('events');

        
    }
}
