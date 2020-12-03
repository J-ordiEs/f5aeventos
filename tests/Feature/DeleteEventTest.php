<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Event;
use App\Models\User;

class DeleteEventTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use RefreshDatabase;
    public function testUserCanDeleteEvent()
    {
        
        $this->actingAs(User::factory()->create());

        $eventToDelete = Event::factory()->create();   


        $this->delete('/events/' . $eventToDelete->id);
        

        $this->assertDatabaseCount('events', 0);

        
    }
}
