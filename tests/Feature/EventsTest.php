<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EventsTest extends TestCase
{  

        public function testDatabase()
    {
        // Make call to application...

        $this->assertDatabaseHas('events', [
            'id' => 'fjsdjfiosdjfoisdjfoisdjf',
            'date' => '2020-11-16 09:36:19',
            'title' => 'Css',
            'speaker' => 'steve jobs',
            'image' => 'imagen',
            'description' => 'css is cool',
            'capacity' => 20,
            'requirements' => 'mic',
            'special' => false,
            'past' => false
        ]);
    }
}
