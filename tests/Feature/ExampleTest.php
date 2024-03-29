<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Models\User;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {



        $user = User::where('super_admin', 1)->first();

        $response = $this->actingAs($user)->get('/');

        $response->assertStatus(200);
    }
}
