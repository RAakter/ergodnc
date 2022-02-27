<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TagsControllerTest extends TestCase
{
    /**
     * @test
     */
    public function itListsTags()
    {
        $response = $this->get('/api/tags');

        $response->assertStatus(200);
//      $this->assertCount(3, $response->json('data'));
        $this->assertNotNull($response->json('data')[0]['id']);
    }
}
