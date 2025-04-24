<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker; 
class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        DB::table('employee')->insert( [
            ['name' => 'John Doe', 'email' => 'john@gmail.com','country_id' => 1],
            ['name' => 'Jane Smith', 'email' => 'jane@gmail.com','country_id' => 2],
        ]);
        // ($employees);
        for ($i = 0; $i < 20; $i++) {
            DB::table('employee')->insert([
                'name' => $faker->name(),
                'email' => $faker->unique()->safeEmail(),
                'country_id' => $faker->numberBetween(1, 10), 
            ]);
        }

    }
}
