<?php

namespace Database\Seeders;

use App\Models\customers;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class customersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        customers::factory(50)->create();
    }
}
