<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ReportTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_api_customersにGETメソッドでアクセスできる()
    {
        $response = $this->get('api/customers');

        $response->assertStatus(200);
    }

    public function test_api_customersにPOSTメソッドでアクセスできる()
    {
        $response = $this->post('api/customers');

        $response->assertStatus(200);
    }
}
