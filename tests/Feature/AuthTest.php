<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use Laravel\Sanctum\Sanctum;

class AuthTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_task_list_can_be_retrieved(): void
    {
        Sanctum::actingAs(
            User::factory()->create(),
            ['view-tasks']
        );
    
        $response = $this->get('/api/task');
    
        $response->assertOk();
    }
}


