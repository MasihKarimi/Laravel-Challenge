<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class LoadingPagesTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_index_page_rendering()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function test_read_me_page_rendering()
    {
        $response = $this->get('/read-me');

        $response->assertStatus(200);
    }
    public function test_fetching_data_from_api()
    {
        $response =Http::get('https://dog.ceo/api/breeds/list/random/5')['message'];
        $this->assertTrue(count($response) > 0);

    }
}
