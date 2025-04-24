<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Factories\NoteFactory as FactoriesNoteFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\factories\NoteFactory;
use App\Models\Note;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        
            // CountriesTableSeeder::class,
            // EmployeeSeeder::class,
            Note::class::factory(50)->create();
    }
}
