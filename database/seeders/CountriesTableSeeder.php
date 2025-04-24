<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countries = [
            ['name' => 'United States'],
            ['name' => 'Canada'],
            ['name' => 'Mexico'],
            ['name' => 'United Kingdom'],
            ['name' => 'Germany'],
            ['name' => 'France'],
            ['name' => 'Italy'],
            ['name' => 'Spain'],
            ['name' => 'Australia'],
            ['name' => 'New Zealand'],
        ];

        DB::table('countries')->insert($countries);
    }
}
