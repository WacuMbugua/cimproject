<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ClientsTest extends TestCase
{
    
    /**
     * A basic test example.
     *
     * @return void
     */
   /* public function test_a_user_can_access_portfolios()
    {
        $response = $this->get('/portfolios');
        $response->assertStatus(200);
    } */
    public function test_login_authenticates_and_redirects_user()
    {
        $user = factory(User::class)->create();
    
        $response = $this->post(route('login'), [
            'email' => $user->email,
            'password' => 'password'
        ]);
    
        $response->assertRedirect(route('home'));
        $this->assertAuthenticatedAs($user);
    }
}
