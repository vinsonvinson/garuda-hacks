<?php

namespace Database\Seeders;

use App\Models\Quiz;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuizSeeder1 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Quiz::truncate(); // Clear existing quizzes
        
        // Module 1: Greetings
        // Lesson 1.1: Ngoko - "Nyapa Konco" (Casual Greetings)

        Quiz::insert([
            // Learning Phase - Ngoko
            // Concept: Piye kabare? (How are you?)
            [
                "question" => 'How do you say "How are you?" to a friend?',
                "module_id" => 1,
                "type_id" => 1, // Multiple Choice
                "answer" => "Piye kabare?",
                "is_learning" => true,
                "concept" => "Piye kabare? (How are you?)",
                "javanese_type_id" => 1, // Ngoko
            ],
            // Concept: Apik. (Good.)
            [
                "question" => 'Your friend asks, "Piye kabare?". You reply:',
                "module_id" => 1,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Apik",
                "is_learning" => true,
                "concept" => "Apik. (Good.)",
                "javanese_type_id" => 1, // Ngoko
            ],
            // Concept: Arep nang endi? (Where are you going?)
            [
                "question" => 'Which phrase means "Where are you going?"',
                "module_id" => 1,
                "type_id" => 1, // Multiple Choice
                "answer" => "Arep nang endi?",
                "is_learning" => true,
                "concept" => "Arep nang endi? (Where are you going?)",
                "javanese_type_id" => 1, // Ngoko
            ],
            // Concept: Saka ngendi? (Where are you from?)
            [
                "question" => 'Which phrase means "Where are you from?"',
                "module_id" => 1,
                "type_id" => 1, // Multiple Choice
                "answer" => "Saka ngendi?",
                "is_learning" => true,
                "concept" => "Saka ngendi? (Where are you from?)",
                "javanese_type_id" => 1, // Ngoko
            ],
            // Concept: Aku melu, ya. (Can I come along?)
            [
                "question" => 'To ask "Can I come along?", you say:',
                "module_id" => 1,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Aku melu, ya",
                "is_learning" => true,
                "concept" => "Aku melu, ya. (Can I come along?)",
                "javanese_type_id" => 1, // Ngoko
            ],
            // Concept: Kapan? (When?)
            [
                "question" => 'How do you ask "When?"',
                "module_id" => 1,
                "type_id" => 1, // Multiple Choice
                "answer" => "Kapan?",
                "is_learning" => true,
                "concept" => "Kapan? (When?)",
                "javanese_type_id" => 1, // Ngoko
            ],
            // Concept: Mengko. (Later.)
            [
                "question" => 'Your friend asks "Kapan?". You can reply:',
                "module_id" => 1,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Mengko",
                "is_learning" => true,
                "concept" => "Mengko. (Later.)",
                "javanese_type_id" => 1, // Ngoko
            ],

            // Final Quiz - Ngoko
            [
                "question" => 'Apik means...',
                "module_id" => 1,
                "type_id" => 1, // Multiple Choice
                "answer" => "Good",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 1, // Ngoko
            ],
            [
                "question" => 'How do you ask "Where are you going?"',
                "module_id" => 1,
                "type_id" => 1, // Multiple Choice
                "answer" => "Arep nang endi?",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 1, // Ngoko
            ],
            [
                "question" => 'How would you say "Can I come along?"',
                "module_id" => 1,
                "type_id" => 1, // Multiple Choice
                "answer" => "Aku melu, ya.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 1, // Ngoko
            ],
            [
                "question" => 'The word for "Where are you from?" is...',
                "module_id" => 1,
                "type_id" => 1, // Multiple Choice
                "answer" => "Saka ngendi?",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 1, // Ngoko
            ],
            [
                "question" => 'To ask "When?", you say:',
                "module_id" => 1,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Kapan?",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 1, // Ngoko
            ],
            [
                "question" => 'To say "Later.", you say:',
                "module_id" => 1,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Mengko",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 1, // Ngoko
            ],
            [
                "question" => 'Which phrase means "How are you?"',
                "module_id" => 1,
                "type_id" => 1, // Multiple Choice
                "answer" => "Piye kabare?",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 1, // Ngoko
            ],
            [
                "question" => 'To say "Good", you say:',
                "module_id" => 1,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Apik",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 1, // Ngoko
            ],

            // Lesson 1.2: Krama Madya - "Sugeng Enjing" (Polite Greetings)

            // Learning Phase - Krama Madya
            [
                "question" => 'You meet a teacher in the morning. You say:',
                "module_id" => 1,
                "type_id" => 1, // Multiple Choice
                "answer" => "Sugeng enjing.",
                "is_learning" => true,
                "concept" => "Sugeng enjing. (Good morning.)",
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'To politely ask "How are you?", you say:',
                "module_id" => 1,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Pripun kabare?",
                "is_learning" => true,
                "concept" => "Pripun kabare? (How are you?)",
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'How do you politely say "Good"?',
                "module_id" => 1,
                "type_id" => 1, // Multiple Choice
                "answer" => "Sae.",
                "is_learning" => true,
                "concept" => "Sae. (Good.)",
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'How do you say "Thank you" politely?',
                "module_id" => 1,
                "type_id" => 1, // Multiple Choice
                "answer" => "Matur nuwun.",
                "is_learning" => true,
                "concept" => "Matur nuwun. (Thank you.)",
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'Someone says "Matur nuwun." You reply:',
                "module_id" => 1,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Sami-sami",
                "is_learning" => true,
                "concept" => "Sami-sami. (You\'re welcome.)",
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'To get someone\'s attention politely, you say:',
                "module_id" => 1,
                "type_id" => 1, // Multiple Choice
                "answer" => "Nyuwun sewu.",
                "is_learning" => true,
                "concept" => "Nyuwun sewu. (Excuse me.)",
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'To offer a seat, you say:',
                "module_id" => 1,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Mangga",
                "is_learning" => true,
                "concept" => "Mangga. (Please.)",
                "javanese_type_id" => 2, // Krama Madya
            ],

            // Final Quiz - Krama Madya
            [
                "question" => 'Sae means...',
                "module_id" => 1,
                "type_id" => 1, // Multiple Choice
                "answer" => "Good",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'How do you say "Excuse me"?',
                "module_id" => 1,
                "type_id" => 1, // Multiple Choice
                "answer" => "Nyuwun sewu.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'What is the polite way to say "Thank you"?',
                "module_id" => 1,
                "type_id" => 1, // Multiple Choice
                "answer" => "Matur nuwun.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'The polite question for "How are you?" is...',
                "module_id" => 1,
                "type_id" => 1, // Multiple Choice
                "answer" => "Pripun kabare?",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'To say "You\'re welcome", you say:',
                "module_id" => 1,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Sami-sami",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'To say "Good morning", you say:',
                "module_id" => 1,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Sugeng enjing",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'Which phrase means "Please"?',
                "module_id" => 1,
                "type_id" => 1, // Multiple Choice
                "answer" => "Mangga.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'To politely ask "How are you?", you say:',
                "module_id" => 1,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Pripun kabare?",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 2, // Krama Madya
            ],

            // Lesson 1.3: Krama Inggil - "Sowan" (Respectful Greetings)

            // Learning Phase - Krama Inggil
            [
                "question" => 'To greet your grandparent in the morning, you say:',
                "module_id" => 1,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Sugeng enjing, Mbah",
                "is_learning" => true,
                "concept" => "Sugeng enjing, Mbah. (Good morning, Grandparent.)",
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'To ask your grandfather "How are you?", you say:',
                "module_id" => 1,
                "type_id" => 1, // Multiple Choice
                "answer" => "Kados pundi pawartosipun?",
                "is_learning" => true,
                "concept" => "Kados pundi pawartosipun? (How are you? - very formal)",
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'An elder asks how you are. You humbly reply:',
                "module_id" => 1,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Pangestunipun, sae",
                "is_learning" => true,
                "concept" => "Pangestunipun, sae. (By your blessing, I am well.)",
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'As a humble opening, you say:',
                "module_id" => 1,
                "type_id" => 1, // Multiple Choice
                "answer" => "Nyuwun pangapunten.",
                "is_learning" => true,
                "concept" => "Nyuwun pangapunten. (I ask for forgiveness.)",
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'The highest form of "Thank you" is:',
                "module_id" => 1,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Matur sembah nuwun",
                "is_learning" => true,
                "concept" => "Matur sembah nuwun. (Thank you very much - highest form)",
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'When passing in front of elders, you say:',
                "module_id" => 1,
                "type_id" => 1, // Multiple Choice
                "answer" => "Nderek langkung.",
                "is_learning" => true,
                "concept" => "Nderek langkung. (Excuse me, passing by.)",
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'To welcome a respected guest, you say:',
                "module_id" => 1,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Sugeng rawuh",
                "is_learning" => true,
                "concept" => "Sugeng rawuh. (Welcome.)",
                "javanese_type_id" => 3, // Krama Inggil
            ],

            // Final Quiz - Krama Inggil
            [
                "question" => 'Nderek langkung is used when...',
                "module_id" => 1,
                "type_id" => 1, // Multiple Choice
                "answer" => "Passing by elders",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'How do you formally say "Welcome"?',
                "module_id" => 1,
                "type_id" => 1, // Multiple Choice
                "answer" => "Sugeng rawuh.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'The phrase Nyuwun pangapunten means...',
                "module_id" => 1,
                "type_id" => 1, // Multiple Choice
                "answer" => "I ask for forgiveness.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'The most formal way to ask "How are you?" is...',
                "module_id" => 1,
                "type_id" => 1, // Multiple Choice
                "answer" => "Kados pundi pawartosipun?",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'The highest form of "Thank you" is:',
                "module_id" => 1,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Matur sembah nuwun",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'A humble way to say you are well is:',
                "module_id" => 1,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Pangestunipun, sae",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'Which phrase is a very formal way to ask "How are you?"',
                "module_id" => 1,
                "type_id" => 1, // Multiple Choice
                "answer" => "Kados pundi pawartosipun?",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'To say "Good morning, Grandparent", you say:',
                "module_id" => 1,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Sugeng enjing, Mbah",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 3, // Krama Inggil
            ],

            // Lesson 1.4: Gladhen Sapa Aruh (Greetings Practice)
            [
                "question" => 'The phrase Pripun kabare? is best used in which situation?',
                "module_id" => 1,
                "type_id" => 1, // Multiple Choice
                "answer" => "Talking to a new colleague",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 4, // Gladhen
            ],
            [
                "question" => 'You see your best friend, Budi, across the campus lawn. He waves. What\'s the most natural way to greet him?',
                "module_id" => 1,
                "type_id" => 1, // Multiple Choice
                "answer" => "Piye kabare?",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 4, // Gladhen
            ],
            [
                "question" => 'You\'ve just finished buying groceries. To thank the young cashier who was very helpful, what is the standard polite phrase to use?',
                "module_id" => 1,
                "type_id" => 1, // Multiple Choice
                "answer" => "Matur nuwun.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 4, // Gladhen
            ],
            [
                "question" => 'You need to walk past your friend\'s grandparents who are sitting on the porch. To show respect for their space and presence, you say:',
                "module_id" => 1,
                "type_id" => 1, // Multiple Choice
                "answer" => "Nderek langkung.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 4, // Gladhen
            ],
            [
                "question" => 'Budi is visiting his grandfather. He wants to express his gratitude. He says: "Mbah, kula seneng sanget saged mriki. Matur nuwun." His intention is good, but which phrase could he use to show even deeper respect?',
                "module_id" => 1,
                "type_id" => 1, // Multiple Choice
                "answer" => "Matur sembah nuwun.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 4, // Gladhen
            ],
            [
                "question" => 'You are introduced to your new manager, Ibu Santi, who is much older than you. You greet her by saying: "Sugeng enjing, Bu Santi. Piye kabare?" Which part of your greeting was too casual for a first impression?',
                "module_id" => 1,
                "type_id" => 1, // Multiple Choice
                "answer" => "Piye kabare?",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 4, // Gladhen
            ],
            [
                "question" => 'To politely get a shopkeeper\'s attention before asking a question, you say: Nyuwun ______',
                "module_id" => 1,
                "type_id" => 2, // Fill in the Blank
                "answer" => "sewu",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 4, // Gladhen
            ],
            [
                "question" => 'To welcome a highly respected guest to your home, you say: Sugeng ______',
                "module_id" => 1,
                "type_id" => 2, // Fill in the Blank
                "answer" => "rawuh",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 4, // Gladhen
            ],
        ]);


        
    }
}
