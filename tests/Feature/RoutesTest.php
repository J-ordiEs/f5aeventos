<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RoutesTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testRouteHome()
    {
        $response = $this->get(route('events'));

        $response->assertStatus(200);
    }
    public function testRouteLogin()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    public function testRouteRegister()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }


}
