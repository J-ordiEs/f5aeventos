<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Event;

class CreateTest extends TestCase
{
    //use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testRoute()
    {
        $response = $this->get('/createEvent');

        $response->assertStatus(200);
    }
    public function testReturnView()
    {
        $response = $this->get('/createEvent');

        $response->assertViewIs('events.createEvent');
    }

    public function testAdminCanCreateEvent()
    {
        // $event= Event::factory(1)->create();
        // $data = [...$event];
        $data = [
            "special" => false,
            "past" => false,
            "date" => "1985-06-04",
            "time" => "11:36:43",
            "title" => "Laboriosam cupiditate quos voluptatibus quo odit fugiat perferendis.",
            "speaker" => "Dr. Deangelo Emmerich",
            "image" => "/var/folders/_g/p7r0t53911j7mzzhthxv1srh0000gp/T/4ea2370a0ad7731daf23b679c05a877c.png",
            "description" => "Dolor et alias veniam.",
            "capacity" => 239,
            "requirements" => "Consequatur quo nesciunt cumque et alias quia voluptatem.",
            "zoom" => "https://terry.com/ex-porro-consequuntur-qui.html",
        ];
        
        $response = $this->post('/createEvent', $data);

        $this->assertDatabaseHas('events', $data);
        $response->assertRedirect('/events');

    }

}
