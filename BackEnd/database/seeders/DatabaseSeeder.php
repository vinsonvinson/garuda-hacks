<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'Vinson',
            'email' => 'vinsonleonardi@gmail.com',
            'password' => Hash::make('123'),
            'is_validated' => true,
        ]);

        User::create([
            'name' => 'Luis Gantar',
            'email' => 'xinewithepic@gmail.com',
            'password' => '$2y$12$n77aWZE9DZhl70mc/pPuWuUVU7vCHMbS01OwG5S1WtDG.VOvNiM.6',
            'is_validated' => true,
        ]);

        $this->call(JavaneseTypeSeeder::class);
        $this->call(QuestionTypeSeeder::class);

        $this->call(ModuleSeeder::class);
        $this->call(ModuleTitleSeeder::class);

        $this->call(QuizSeeder1::class);
        $this->call(ChoiceSeeder1::class);

        $this->call(QuizSeeder2::class);
        $this->call(ChoiceSeeder2::class);
    }
}
