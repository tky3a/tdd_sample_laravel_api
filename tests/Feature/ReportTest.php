<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ReportTest extends TestCase
{
    use RefreshDatabase;

    // 初期データの投入(各テストメソッドが呼ばれるたびにデータが作成される)
    public function setUp(): void
    {
        parent::setUp();
        $this->artisan('db:seed', ['--class' => 'TestDataSeeder', '--database'=> config('app.db_test_database')]);
    }

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

    public function test_api_customersにGETメソッドでアクセスするとJSONが返却される()
    {
        $response = $this->get('api/customers');
        $this->assertThat($response->content(), $this->isJson());
    }

    public function test_api_customersにGETメソッドで取得できる顧客情報のJSON形式が要件通りである()
    {
        $response = $this->get('api/customers');
        $customers = $response->json();
        $customer = $customers[0];
        $this->assertSame(['id', 'name'], array_keys($customer));
    }

    public function test_api_customersにPOSTメソッドでアクセスできる()
    {
        $response = $this->post('api/customers');

        $response->assertStatus(200);
    }

    public function test_api_customers_customer_idにGETメソッドでアクセスできる()
    {
        $response = $this->get('api/customers/1');

        $response->assertStatus(200);
    }

    public function test_api_customers_customer_idにPUTメソッドでアクセスできる()
    {
        $response = $this->put('api/customers/1');

        $response->assertStatus(200);
    }

    public function test_api_customers_customer_idにDELETEメソッドでアクセスできる()
    {
        $response = $this->delete('api/customers/1');

        $response->assertStatus(200);
    }

    public function test_api_reportsにGETメソッドでアクセスできる()
    {
        $response = $this->get('api/reports');

        $response->assertStatus(200);
    }

    public function test_api_reportsにPOSTメソッドでアクセスできる()
    {
        $response = $this->post('api/reports');

        $response->assertStatus(200);
    }

    public function test_api_reports_report_idにGETメソッドでアクセスできる()
    {
        $response = $this->get('api/reports/1');

        $response->assertStatus(200);
    }

    public function test_api_reports_report_idにPUTメソッドでアクセスできる()
    {
        $response = $this->put('api/reports/1');

        $response->assertStatus(200);
    }

    public function test_api_reports_report_idにDELETEメソッドでアクセスできる()
    {
        $response = $this->delete('api/reports/1');

        $response->assertStatus(200);
    }
}
