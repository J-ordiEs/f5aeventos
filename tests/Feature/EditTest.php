<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Event;

class editTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testUserCanUpdateEvents()
    {
        $this->actingAs(User::factory()->create());

        $event= Event::factory(1)->create();
        $event[0]->title = 'Maria';
        
        $data = $event[0]->toArray();
       
        $this->put('/events/'. $event[0]->id, $data);
    

        $this->assertDatabaseHas('events', [
            'title' => 'Maria'
        ]);
    }
}
