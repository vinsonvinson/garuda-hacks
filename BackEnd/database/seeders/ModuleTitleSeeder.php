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

            // module 3
            ["title" => 'Jajan (Snacking/Eating Out)', "module_id" => 3, "javanese_type_id" => 1],
            ["title" => 'Mertamu (Being a Guest)', "module_id" => 3, "javanese_type_id" => 2],
            ["title" => 'Nyuguh Dhaharan (Serving Food)', "module_id" => 3, "javanese_type_id" => 3],
            ["title" => 'Panganan (Food Etiquette Practice)', "module_id" => 3, "javanese_type_id" => 4],

            // module 4
            ["title" => 'Tuku-tuku (Casual Shopping)', "module_id" => 4, "javanese_type_id" => 1],
            ["title" => 'Ing Pasar (At the Market)', "module_id" => 4, "javanese_type_id" => 2],
            ["title" => 'Nyuwun Pirsa Regi (Respectfully Asking for a Price)', "module_id" => 4, "javanese_type_id" => 3],
            ["title" => 'Tumbas (Purchase Practice)', "module_id" => 4, "javanese_type_id" => 4],

            // module 5
            ["title" => 'Mlaku-mlaku (Going for a Walk/Stroll)', "module_id" => 5, "javanese_type_id" => 1],
            ["title" => 'Numpak Bis (Riding the Bus)', "module_id" => 5, "javanese_type_id" => 2],
            ["title" => 'Nyuwun Pirsa Dalan (Respectfully Asking for Directions)', "module_id" => 5, "javanese_type_id" => 3],
            ["title" => 'Papan (Location & Directions Practice)', "module_id" => 5, "javanese_type_id" => 4],

            // module 6
            ["title" => 'Atiku... (My Feelings...)', "module_id" => 6, "javanese_type_id" => 1],
            ["title" => 'Nawakake Bantuan (Offering Help)', "module_id" => 6, "javanese_type_id" => 2],
            ["title" => 'Nyuwun Pangapunten (Respectfully Apologizing)', "module_id" => 6, "javanese_type_id" => 3],
            ["title" => 'Raos (Feelings & Expressions Practice)', "module_id" => 6, "javanese_type_id" => 4],

            // module 7
            ["title" => "Ayo Dolan (Let's Hang Out)", "module_id" => 7, "javanese_type_id" => 1],
            ["title" => 'Gawe Janji (Making an Appointment)', "module_id" => 7, "javanese_type_id" => 2],
            ["title" => 'Nyuwun Pamit (Asking for Permission to Leave)', "module_id" => 7, "javanese_type_id" => 3],
            ["title" => 'Janjian (Appointments Practice)', "module_id" => 7, "javanese_type_id" => 4],

            // module 8
            ["title" => 'Ing Sekolah (At School)', "module_id" => 8, "javanese_type_id" => 1],
            ["title" => 'Ing Kantor (At the Office)', "module_id" => 8, "javanese_type_id" => 2],
            ["title" => 'Ing Pawiwahan (At a Formal Ceremony)', "module_id" => 8, "javanese_type_id" => 3],
            ["title" => 'Kahanan (Situational Practice)', "module_id" => 8, "javanese_type_id" => 4],

            // module 9
            ["title" => 'Kesenengan (Hobbies)', "module_id" => 9, "javanese_type_id" => 1],
            ["title" => 'Babagan Hawa (About the Weather)', "module_id" => 9, "javanese_type_id" => 2],
            ["title" => 'Ndhawuh Timbalan (Listening to Advice)', "module_id" => 9, "javanese_type_id" => 3],
            ["title" => 'Wicara (Conversation Practice)', "module_id" => 9, "javanese_type_id" => 4],

            // module 10
            ["title" => 'Crita (Telling a Story)', "module_id" => 10, "javanese_type_id" => 1],
            ["title" => 'Matur Wangsulan (Giving an Answer)', "module_id" => 10, "javanese_type_id" => 2],
            ["title" => 'Ngendikakaken Simbah (Speaking About Elders)', "module_id" => 10, "javanese_type_id" => 3],
            ["title" => 'Crita (Narration Practice)', "module_id" => 10, "javanese_type_id" => 4],
        ]);
    }
}
