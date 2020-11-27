<?php

namespace Tests\Feature\Http\Controllers\Auth;

use App\Models\User;
use Tests\TestCase;

class LoginControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    // public function testExample()
    // {
    //     $response = $this->get('/');

    //     $response->assertStatus(200);
    // }

    public function test_login_displays_the_login_form()
    {
        // when
        $response = $this->get(route('login'));
        // then
        $response->assertSuccessful();
        $response->assertViewIs('auth.login');
    }

    public function test_login_isnt_displayed_when_authenticated()
    {
        $user = User::factory()->make(); 

        $response = $this->actingAs($user)->get(route('login'));
        $response = $this->get(route('login'));
        $response->assertRedirect('home');
    }

    public function test_login_displays_validation_errors()
    {
        // when
        $response = $this->post(route('login'), []);
        // then
        $response->assertStatus(302);
        $response->assertSessionHasErrors('email');
        $response->assertSessionHasErrors('password');

    }
}
