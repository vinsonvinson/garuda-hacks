<?php

namespace Database\Seeders;

use App\Models\Module;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Module::truncate(); // Clear existing modules
        Module::insert([
            ["title" => "Greetings"],
            ["title" => "Introductions"],
        ]);
    }
}
