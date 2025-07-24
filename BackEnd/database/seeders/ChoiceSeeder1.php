<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Quiz; // Although not strictly needed for hardcoding, good practice to include
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChoiceSeeder1 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Choice::truncate(); // Clear existing choices

        Choice::insert([
            // Lesson 1.1: Ngoko - "Nyapa Konco" (Casual Greetings)
            // Learning Phase
            // Quiz ID 1: "How do you say 'How are you?' to a friend?" (MC)
            [
                "quiz_id" => 1,
                "text" => "Piye kabare?",
            ],
            [
                "quiz_id" => 1,
                "text" => "Arep nang endi?",
            ],
            // Quiz ID 2: (FIB - no choices)
            // Quiz ID 3: "Which phrase means 'Where are you going?'" (MC)
            [
                "quiz_id" => 3,
                "text" => "Arep nang endi?",
            ],
            [
                "quiz_id" => 3,
                "text" => "Saka ngendi?",
            ],
            // Quiz ID 4: "Which phrase means 'Where are you from?'" (MC)
            [
                "quiz_id" => 4,
                "text" => "Saka ngendi?",
            ],
            [
                "quiz_id" => 4,
                "text" => "Aku melu, ya.",
            ],
            // Quiz ID 5: (FIB - no choices)
            // Quiz ID 6: "How do you ask 'When?'" (MC)
            [
                "quiz_id" => 6,
                "text" => "Kapan?",
            ],
            [
                "quiz_id" => 6,
                "text" => "Mengko.",
            ],
            // Quiz ID 7: (FIB - no choices)

            // Final Quiz - Ngoko
            // Quiz ID 8: "Apik means..." (MC)
            [
                "quiz_id" => 8,
                "text" => "Good",
            ],
            [
                "quiz_id" => 8,
                "text" => "Bad",
            ],
            // Quiz ID 9: "How do you ask 'Where are you going?'" (MC)
            [
                "quiz_id" => 9,
                "text" => "Saka ngendi?",
            ],
            [
                "quiz_id" => 9,
                "text" => "Arep nang endi?",
            ],
            // Quiz ID 10: "How would you say 'Can I come along?'" (MC)
            [
                "quiz_id" => 10,
                "text" => "Aku melu, ya.",
            ],
            [
                "quiz_id" => 10,
                "text" => "Piye kabare?",
            ],
            // Quiz ID 11: "The word for 'Where are you from?' is..." (MC)
            [
                "quiz_id" => 11,
                "text" => "Saka ngendi?",
            ],
            [
                "quiz_id" => 11,
                "text" => "Kapan?",
            ],
            // Quiz ID 12: (FIB - no choices)
            // Quiz ID 13: (FIB - no choices)
            // Quiz ID 14: "Which phrase means 'How are you?'" (MC)
            [
                "quiz_id" => 14,
                "text" => "Piye kabare?",
            ],
            [
                "quiz_id" => 14,
                "text" => "Kapan?",
            ],
            // Quiz ID 15: (FIB - no choices)


            // Lesson 1.2: Krama Madya - "Sugeng Enjing" (Polite Greetings)
            // Learning Phase - Krama Madya
            // Quiz ID 16: "You meet a teacher in the morning. You say:" (MC)
            [
                "quiz_id" => 16,
                "text" => "Sugeng enjing.",
            ],
            [
                "quiz_id" => 16,
                "text" => "Sugeng sonten.",
            ],
            // Quiz ID 17: (FIB - no choices)
            // Quiz ID 18: "How do you politely say 'Good'?" (MC)
            [
                "quiz_id" => 18,
                "text" => "Sae.",
            ],
            [
                "quiz_id" => 18,
                "text" => "Apik.",
            ],
            // Quiz ID 19: "How do you say 'Thank you' politely?" (MC)
            [
                "quiz_id" => 19,
                "text" => "Matur nuwun.",
            ],
            [
                "quiz_id" => 19,
                "text" => "Sami-sami.",
            ],
            // Quiz ID 20: (FIB - no choices)
            // Quiz ID 21: "To get someone's attention politely, you say:" (MC)
            [
                "quiz_id" => 21,
                "text" => "Nyuwun sewu.",
            ],
            [
                "quiz_id" => 21,
                "text" => "Mangga.",
            ],
            // Quiz ID 22: (FIB - no choices)

            // Final Quiz - Krama Madya
            // Quiz ID 23: "Sae means..." (MC)
            [
                "quiz_id" => 23,
                "text" => "Good",
            ],
            [
                "quiz_id" => 23,
                "text" => "Bad",
            ],
            // Quiz ID 24: "How do you say 'Excuse me'?" (MC)
            [
                "quiz_id" => 24,
                "text" => "Matur nuwun.",
            ],
            [
                "quiz_id" => 24,
                "text" => "Nyuwun sewu.",
            ],
            // Quiz ID 25: "What is the polite way to say 'Thank you'?" (MC)
            [
                "quiz_id" => 25,
                "text" => "Nuwun.",
            ],
            [
                "quiz_id" => 25,
                "text" => "Matur nuwun.",
            ],
            // Quiz ID 26: "The polite question for 'How are you?' is..." (MC)
            [
                "quiz_id" => 26,
                "text" => "Piye kabare?",
            ],
            [
                "quiz_id" => 26,
                "text" => "Pripun kabare?",
            ],
            // Quiz ID 27: (FIB - no choices)
            // Quiz ID 28: (FIB - no choices)
            // Quiz ID 29: "Which phrase means 'Please'?" (MC)
            [
                "quiz_id" => 29,
                "text" => "Mangga.",
            ],
            [
                "quiz_id" => 29,
                "text" => "Sae.",
            ],
            // Quiz ID 30: (FIB - no choices)


            // Lesson 1.3: Krama Inggil - "Sowan" (Respectful Greetings)
            // Learning Phase - Krama Inggil
            // Quiz ID 31: (FIB - no choices)
            // Quiz ID 32: "To ask your grandfather 'How are you?'" (MC)
            [
                "quiz_id" => 32,
                "text" => "Pripun kabare?",
            ],
            [
                "quiz_id" => 32,
                "text" => "Kados pundi pawartosipun?",
            ],
            // Quiz ID 33: (FIB - no choices)
            // Quiz ID 34: "As a humble opening, you say:" (MC)
            [
                "quiz_id" => 34,
                "text" => "Nyuwun pangapunten.",
            ],
            [
                "quiz_id" => 34,
                "text" => "Matur sembah nuwun.",
            ],
            // Quiz ID 35: (FIB - no choices)
            // Quiz ID 36: "When passing in front of elders, you say:" (MC)
            [
                "quiz_id" => 36,
                "text" => "Nyuwun sewu.",
            ],
            [
                "quiz_id" => 36,
                "text" => "Nderek langkung.",
            ],
            // Quiz ID 37: (FIB - no choices)

            // Final Quiz - Krama Inggil
            // Quiz ID 38: "Nderek langkung is used when..." (MC)
            [
                "quiz_id" => 38,
                "text" => "Passing by elders",
            ],
            [
                "quiz_id" => 38,
                "text" => "Asking for forgiveness",
            ],
            // Quiz ID 39: "How do you formally say 'Welcome'?" (MC)
            [
                "quiz_id" => 39,
                "text" => "Sugeng enjing.",
            ],
            [
                "quiz_id" => 39,
                "text" => "Sugeng rawuh.",
            ],
            // Quiz ID 40: "The phrase Nyuwun pangapunten means..." (MC)
            [
                "quiz_id" => 40,
                "text" => "I ask for forgiveness.",
            ],
            [
                "quiz_id" => 40,
                "text" => "Thank you very much.",
            ],
            // Quiz ID 41: "The most formal way to ask 'How are you?' is..." (MC)
            [
                "quiz_id" => 41,
                "text" => "Pripun kabare?",
            ],
            [
                "quiz_id" => 41,
                "text" => "Kados pundi pawartosipun?",
            ],
            // Quiz ID 42: (FIB - no choices)
            // Quiz ID 43: (FIB - no choices)
            // Quiz ID 44: "Which phrase is a very formal way to ask 'How are you?'" (MC)
            [
                "quiz_id" => 44,
                "text" => "Kados pundi pawartosipun?",
            ],
            [
                "quiz_id" => 44,
                "text" => "Pripun kabare?",
            ],
            // Quiz ID 45: (FIB - no choices)

            // Lesson 1.4: Gladhen Sapa Aruh (Greetings Practice)
            // Quiz ID 46: "The phrase Pripun kabare? is best used in which situation?" (MC)
            [
                "quiz_id" => 46,
                "text" => "Talking to your best friend",
            ],
            [
                "quiz_id" => 46,
                "text" => "Talking to a new colleague",
            ],
            [
                "quiz_id" => 46,
                "text" => "Talking to your grandfather",
            ],
            // Quiz ID 47: "You see your best friend, Budi..." (MC)
            [
                "quiz_id" => 47,
                "text" => "Piye kabare?",
            ],
            [
                "quiz_id" => 47,
                "text" => "Pripun kabare?",
            ],
            [
                "quiz_id" => 47,
                "text" => "Kados pundi pawartosipun?",
            ],
            // Quiz ID 48: "You've just finished buying groceries..." (MC)
            [
                "quiz_id" => 48,
                "text" => "Sami-sami.",
            ],
            [
                "quiz_id" => 48,
                "text" => "Matur nuwun.",
            ],
            [
                "quiz_id" => 48,
                "text" => "Matur sembah nuwun.",
            ],
            // Quiz ID 49: "You need to walk past your friend's grandparents..." (MC)
            [
                "quiz_id" => 49,
                "text" => "Nyuwun sewu.",
            ],
            [
                "quiz_id" => 49,
                "text" => "Nderek langkung.",
            ],
            [
                "quiz_id" => 49,
                "text" => "Sugeng rawuh.",
            ],
            // Quiz ID 50: "Budi is visiting his grandfather..." (MC)
            [
                "quiz_id" => 50,
                "text" => "Kula seneng sanget.",
            ],
            [
                "quiz_id" => 50,
                "text" => "Matur sembah nuwun.",
            ],
            [
                "quiz_id" => 50,
                "text" => "Mbah.",
            ],
            // Quiz ID 51: "You are introduced to your new manager..." (MC)
            [
                "quiz_id" => 51,
                "text" => "Sugeng enjing, Bu Santi.",
            ],
            [
                "quiz_id" => 51,
                "text" => "Piye kabare?",
            ],
            // Quiz ID 52: (FIB - no choices)
            // Quiz ID 53: (FIB - no choices)
        ]);
    }
}