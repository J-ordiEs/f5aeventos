<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Event;

class editTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testUpdateEvents()
    {
        $event= Event::factory(1)->create();
        // dd($event);
        $event->title = 'Maria';
        $this->put("/events". $event[0]->id, $event->toArray());

        $this->assertDatabaseHas('events', [
            'id' => 1,
            'title' => 'Maria'
        ]);
    }
}
