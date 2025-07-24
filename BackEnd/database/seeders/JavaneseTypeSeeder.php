<?php

namespace Database\Seeders;

use App\Models\JavaneseType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JavaneseTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        JavaneseType::truncate(); // Clear existing types
        JavaneseType::insert([
            ["name" => "Ngoko"],
            ["name" => "Krama Madya"],
            ["name" => "Krama Inggil"],
            ["name" => "Gladhen"],
        ]);
    }
}
