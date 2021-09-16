<?php

namespace Tests\Unit;

use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class FetchRandomDataTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_fetch_data()
    {
        // disable laravel default exception handling
       // $this->withoutExceptionHandling();
        $breeds = Http::get('https://dog.ceo/api/breeds/list/random/5')['message'];
        //$breeds->assertStatus(201);
        $this->assertTrue(count($breeds) > 0);
    }
}
