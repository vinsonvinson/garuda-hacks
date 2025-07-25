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
            ["title" => "Food & Hospitality"],
            ["title" => "Basic Transactions"],
            ["title" => "Getting Around"],
            ["title" => "Expressing Oneself"],
            ["title" => "Making Plans"],
            ["title" => "Daily Life Scenarios"],
            ["title" => "Deeper Conversations"],
            ["title" => "Narative"],
        ]);
    }
}
