<?php

namespace Database\Seeders;

use App\Models\Quiz;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuizSeeder10 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Module 10 Theme: Narrative
        // Lesson 10.1: Ngoko - Crita (Telling a Story)

        Quiz::insert([
            // Learning Phase - Ngoko
            // Concept: Mau isuk... (This morning...)
            [
                "question" => "How do you start a story about this morning?",
                "module_id" => 10,
                "type_id" => 1, // Multiple Choice
                "answer" => "Mau isuk",
                "is_learning" => true,
                "concept" => "Mau isuk... (This morning...)",
                "javanese_type_id" => 1, // Ngoko
            ],
            // Concept: Terus, aku... (Then, I...)
            [
                "question" => "To say what happened next, you say:",
                "module_id" => 10,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Terus, aku",
                "is_learning" => true,
                "concept" => "Terus, aku... (Then, I...)",
                "javanese_type_id" => 1, // Ngoko
            ],
            // Concept: Bar kuwi... (After that...)
            [
                "question" => 'Which phrase means "After that..."?',
                "module_id" => 10,
                "type_id" => 1, // Multiple Choice
                "answer" => "Bar kuwi",
                "is_learning" => true,
                "concept" => "Bar kuwi... (After that...)",
                "javanese_type_id" => 1, // Ngoko
            ],
            // Concept: Jebule... (Turns out...)
            [
                "question" => "To reveal a surprising fact, you say:",
                "module_id" => 10,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Jebule",
                "is_learning" => true,
                "concept" => "Jebule... (Turns out...)",
                "javanese_type_id" => 1, // Ngoko
            ],
            // Concept: Dumadakan... (Suddenly...)
            [
                "question" => 'How do you say "Suddenly..."?',
                "module_id" => 10,
                "type_id" => 1, // Multiple Choice
                "answer" => "Dumadakan",
                "is_learning" => true,
                "concept" => "Dumadakan... (Suddenly...)",
                "javanese_type_id" => 1, // Ngoko
            ],
            // Concept: Untunge... (Luckily...)
            [
                "question" => 'To say "Luckily", you say:',
                "module_id" => 10,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Untunge",
                "is_learning" => true,
                "concept" => "Untunge... (Luckily...)",
                "javanese_type_id" => 1, // Ngoko
            ],
            // Concept: Akhire... (Finally...)
            [
                "question" => "The word to end your story is:",
                "module_id" => 10,
                "type_id" => 1, // Multiple Choice
                "answer" => "Akhire",
                "is_learning" => true,
                "concept" => "Akhire... (Finally...)",
                "javanese_type_id" => 1, // Ngoko
            ],

            // Final Quiz - Ngoko
            [
                "question" => "Jebule... means...",
                "module_id" => 10,
                "type_id" => 1, // Multiple Choice
                "answer" => "Turns out",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 1, // Ngoko
            ],
            [
                "question" => 'How do you say "Luckily..."?',
                "module_id" => 10,
                "type_id" => 1, // Multiple Choice
                "answer" => "Untunge",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 1, // Ngoko
            ],
            [
                "question" => "The phrase Bar kuwi... means...",
                "module_id" => 10,
                "type_id" => 1, // Multiple Choice
                "answer" => "After that",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 1, // Ngoko
            ],
            [
                "question" => 'How do you say "This morning..."?',
                "module_id" => 10,
                "type_id" => 1, // Multiple Choice
                "answer" => "Mau isuk",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 1, // Ngoko
            ],
            [
                "question" => 'To say "Then, I", you say:',
                "module_id" => 10,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Terus, aku",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 1, // Ngoko
            ],
            [
                "question" => 'To say "Finally", you say:',
                "module_id" => 10,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Akhire",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 1, // Ngoko
            ],
            [
                "question" => 'Which phrase means "Suddenly..."?',
                "module_id" => 10,
                "type_id" => 1, // Multiple Choice
                "answer" => "Dumadakan",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 1, // Ngoko
            ],
            [
                "question" => 'To say "After that", you say:',
                "module_id" => 10,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Bar kuwi",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 1, // Ngoko
            ],

            // Lesson 10.2: Krama Madya - Matur Wangsulan (Giving an Answer)

            // Learning Phase - Krama Madya
            [
                "question" => "How do you politely agree?",
                "module_id" => 10,
                "type_id" => 1, // Multiple Choice
                "answer" => "Inggih, leres.",
                "is_learning" => true,
                "concept" => "Inggih, leres. (Yes, that is correct.)",
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'The polite word for "No" is:',
                "module_id" => 10,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Mboten.",
                "is_learning" => true,
                "concept" => "Mboten. (No.)",
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" =>
                    "To politely express an assumption, you start with:",
                "module_id" => 10,
                "type_id" => 1, // Multiple Choice
                "answer" => "Kadosipun",
                "is_learning" => true,
                "concept" => "Kadosipun... (It seems...)",
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" =>
                    "To politely say something is incorrect, you say:",
                "module_id" => 10,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Sanes.",
                "is_learning" => true,
                "concept" => "Sanes. (Not that one / Incorrect.)",
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'How do you politely say "Not yet"?',
                "module_id" => 10,
                "type_id" => 1, // Multiple Choice
                "answer" => "Dereng.",
                "is_learning" => true,
                "concept" => "Dereng. (Not yet.)",
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'The polite word for "already" is:',
                "module_id" => 10,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Sampun.",
                "is_learning" => true,
                "concept" => "Sampun. (Already.)",
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => "To politely give your opinion, you start with:",
                "module_id" => 10,
                "type_id" => 1, // Multiple Choice
                "answer" => "Miturut kula",
                "is_learning" => true,
                "concept" => "Miturut kula... (In my opinion...)",
                "javanese_type_id" => 2, // Krama Madya
            ],

            // Final Quiz - Krama Madya
            [
                "question" => "Dereng means...",
                "module_id" => 10,
                "type_id" => 1, // Multiple Choice
                "answer" => "Not yet",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'To politely say "No," you say:',
                "module_id" => 10,
                "type_id" => 1, // Multiple Choice
                "answer" => "Mboten.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => "The phrase Kadosipun... means...",
                "module_id" => 10,
                "type_id" => 1, // Multiple Choice
                "answer" => "It seems",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => "How do you politely agree?",
                "module_id" => 10,
                "type_id" => 1, // Multiple Choice
                "answer" => "Inggih, leres.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" =>
                    "To politely say something is incorrect, you say:",
                "module_id" => 10,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Sanes.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'The polite word for "already" is:',
                "module_id" => 10,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Sampun.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'Which phrase means "In my opinion..."?',
                "module_id" => 10,
                "type_id" => 1, // Multiple Choice
                "answer" => "Miturut kula",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'The polite word for "not yet" is:',
                "module_id" => 10,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Dereng.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 2, // Krama Madya
            ],

            // Lesson 10.3: Krama Inggil - Ngendikakaken Simbah (Speaking About Elders)

            // Learning Phase - Krama Inggil
            [
                "question" => "To respectfully quote an elder, you start with:",
                "module_id" => 10,
                "type_id" => 1, // Multiple Choice
                "answer" => "Ngendikanipun",
                "is_learning" => true,
                "concept" => "Ngendikanipun... (He/She said...)",
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'The respectful verb for "to go" is:',
                "module_id" => 10,
                "type_id" => 2, // Fill in the Blank
                "answer" => "tindak.",
                "is_learning" => true,
                "concept" => "Bapak nembe tindak. (Father is going.)",
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'The respectful verb for "to eat" is:',
                "module_id" => 10,
                "type_id" => 1, // Multiple Choice
                "answer" => "dhahar",
                "is_learning" => true,
                "concept" => "Ibu nembe dhahar. (Mother is eating.)",
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'The respectful verb for "to sleep" is:',
                "module_id" => 10,
                "type_id" => 2, // Fill in the Blank
                "answer" => "sare.",
                "is_learning" => true,
                "concept" => "Simbah nembe sare. (Grandparent is sleeping.)",
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'The respectful word for "sick" is:',
                "module_id" => 10,
                "type_id" => 1, // Multiple Choice
                "answer" => "gerah",
                "is_learning" => true,
                "concept" => "Eyang gerah. (Grandparent is sick.)",
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'The respectful verb for "to have" is:',
                "module_id" => 10,
                "type_id" => 2, // Fill in the Blank
                "answer" => "kagungan.",
                "is_learning" => true,
                "concept" => "Kagungan. (To have/own.)",
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => "To say an elder was given something, you use:",
                "module_id" => 10,
                "type_id" => 1, // Multiple Choice
                "answer" => "Dipun paringi",
                "is_learning" => true,
                "concept" => "Dipun paringi. (To be given.)",
                "javanese_type_id" => 3, // Krama Inggil
            ],

            // Final Quiz - Krama Inggil
            [
                "question" => "Gerah is the respectful word for...",
                "module_id" => 10,
                "type_id" => 1, // Multiple Choice
                "answer" => "Sick",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'The respectful verb for "to go" is:',
                "module_id" => 10,
                "type_id" => 1, // Multiple Choice
                "answer" => "tindak",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => "The phrase Ngendikanipun... means...",
                "module_id" => 10,
                "type_id" => 1, // Multiple Choice
                "answer" => "He/She said",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" =>
                    "How do you respectfully say an elder is sleeping?",
                "module_id" => 10,
                "type_id" => 1, // Multiple Choice
                "answer" => "Nembe sare.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'The respectful verb for "to eat" is:',
                "module_id" => 10,
                "type_id" => 2, // Fill in the Blank
                "answer" => "dhahar.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'The respectful verb for "to have" is:',
                "module_id" => 10,
                "type_id" => 2, // Fill in the Blank
                "answer" => "kagungan.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'Which phrase means "to be given"?',
                "module_id" => 10,
                "type_id" => 1, // Multiple Choice
                "answer" => "Dipun paringi",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'The respectful word for "sick" is:',
                "module_id" => 10,
                "type_id" => 2, // Fill in the Blank
                "answer" => "gerah.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 3, // Krama Inggil
            ],

            // Lesson 10.4: Gladhen Crita (Narration Practice)
            [
                "question" =>
                    "You are telling your friend a surprising story. You say:",
                "module_id" => 10,
                "type_id" => 1, // Multiple Choice
                "answer" => "Jebule",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 4, // Gladhen
            ],
            [
                "question" =>
                    "Your manager asks if you have finished your report. You have. You politely reply:",
                "module_id" => 10,
                "type_id" => 1, // Multiple Choice
                "answer" => "Sampun, Pak.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 4, // Gladhen
            ],
            [
                "question" =>
                    "You are telling your teacher what your grandfather said. You start the sentence with:",
                "module_id" => 10,
                "type_id" => 1, // Multiple Choice
                "answer" => "Ngendikanipun eyang",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 4, // Gladhen
            ],
            [
                "question" =>
                    'Your friend asks if you are coming to the party. You haven\'t decided yet. You say:',
                "module_id" => 10,
                "type_id" => 1, // Multiple Choice
                "answer" => "Dereng.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 4, // Gladhen
            ],
            [
                "question" =>
                    'A student is politely answering their teacher\'s question. They say: "Miturut kula, jawabane salah." Which word is not polite enough?',
                "module_id" => 10,
                "type_id" => 1, // Multiple Choice
                "answer" => "jawabane",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 4, // Gladhen
            ],
            [
                "question" =>
                    'You are telling your boss about your father. You say: "Bapak kula nembe lara." Which word is too casual?',
                "module_id" => 10,
                "type_id" => 1, // Multiple Choice
                "answer" => "lara",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 4, // Gladhen
            ],
            [
                "question" =>
                    'To politely say "Yes, that is correct" to a colleague, you say: Inggih, ______',
                "module_id" => 10,
                "type_id" => 2, // Fill in the Blank
                "answer" => "leres",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 4, // Gladhen
            ],
            [
                "question" =>
                    'The respectful verb for "to sleep" when talking about an elder is: ______',
                "module_id" => 10,
                "type_id" => 2, // Fill in the Blank
                "answer" => "sare",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 4, // Gladhen
            ],
        ]);
    }
}
