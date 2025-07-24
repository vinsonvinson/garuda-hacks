<?php

namespace Database\Seeders;

use App\Models\QuestionType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        QuestionType::truncate(); // Clear existing question types
        QuestionType::insert([
            ["name" => "Multiple Choice"],
            ["name" => "Fill the blank"],
        ]);
    }
}
