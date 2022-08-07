<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;
use App\Models\Report;

class TestDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * テストDBにデータを追加するシーダー
     */
    public function run()
    {
        Customer::factory()->count(2)->create()->each(function ($customer) {
            Report::factory()->count(2)->make()->each(function ($report) use ($customer) {
                $customer->reports()->save($report);
            });
        });
    }
}
