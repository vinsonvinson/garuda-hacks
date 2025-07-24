<?php

namespace Database\Seeders;

use App\Models\ModuleTitle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ModuleTitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ModuleTitle::truncate(); // Clear existing module titles
        ModuleTitle::insert([
            // module 1
            ["title" => '"Nyapa Konco" (Casual Greetings)', "module_id" => 1, "javanese_type_id" => 1],
            ["title" => '"Sugeng Enjing" (Polite Greetings)', "module_id" => 1, "javanese_type_id" => 2],
            ["title" => '"Sowan" (Respectful Greetings)', "module_id" => 1, "javanese_type_id" => 3],
            ["title" => '"Sapa Aruh" (Greetings Practice)', "module_id" => 1, "javanese_type_id" => 4],

            // module 2
            ["title" => '"Jenengku..." (Casual Introductions)', "module_id" => 2, "javanese_type_id" => 1],
            ["title" => '"Nepangaken" (Polite Introductions)', "module_id" => 2, "javanese_type_id" => 2],
            ["title" => '"Kulawarga" (Describing Family)', "module_id" => 2, "javanese_type_id" => 3],
            ["title" => 'Tepangaken (Introductions Practice)', "module_id" => 2, "javanese_type_id" => 4],
        ]);
    }
}
