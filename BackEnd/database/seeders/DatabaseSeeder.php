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

        User::truncate();

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

        $this->call(QuizSeeder3::class);
        $this->call(ChoiceSeeder3::class);

        $this->call(QuizSeeder4::class);
        $this->call(ChoiceSeeder4::class);

        $this->call(QuizSeeder5::class);
        $this->call(ChoiceSeeder5::class);

        $this->call(QuizSeeder6::class);
        $this->call(ChoiceSeeder6::class);

        $this->call(QuizSeeder7::class);
        $this->call(ChoiceSeeder7::class);

        $this->call(QuizSeeder8::class);
        $this->call(ChoiceSeeder8::class);

        $this->call(QuizSeeder9::class);
        $this->call(ChoiceSeeder9::class);

        $this->call(QuizSeeder10::class);
        $this->call(ChoiceSeeder10::class);
    }
}
