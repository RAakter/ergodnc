<?php

namespace Tests\Feature;

use App\Models\Office;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class OfficeControllerTest extends TestCase
{
//    use RefreshDatabase;
    /**
     * @test
     */
    public function itOfficesList()
    {
        Office::factory(5)->create();

        $response = $this->get('/api/offices');

        $response->assertOk();
        $this->assertNotNull($response->json('data')[0]['id']);
        $this->assertCount(5, $response->json('data'));
    }
}
