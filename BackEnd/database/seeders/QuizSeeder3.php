<?php

namespace Database\Seeders;

use App\Models\Quiz;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuizSeeder3 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Module 3: Food & Hospitality
        // Lesson 3.1: Ngoko - Jajan (Snacking/Eating Out)

        Quiz::insert([
            // Learning Phase - Ngoko
            // Concept: Aku luwe. (I'm hungry.)
            [
                "question" => 'How do you say "I\'m hungry"?',
                "module_id" => 3,
                "type_id" => 1, // Multiple Choice
                "answer" => "Aku luwe.",
                "is_learning" => true,
                "concept" => "Aku luwe. (I\'m hungry.)",
                "javanese_type_id" => 1, // Ngoko
            ],
            // Concept: Aku ngelak. (I'm thirsty.)
            [
                "question" => 'To say "I\'m thirsty," you say:',
                "module_id" => 3,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Aku ngelak.",
                "is_learning" => true,
                "concept" => "Aku ngelak. (I\'m thirsty.)",
                "javanese_type_id" => 1, // Ngoko
            ],
            // Concept: Pesen siji. (I'll order one.)
            [
                "question" => "How do you order one item?",
                "module_id" => 3,
                "type_id" => 1, // Multiple Choice
                "answer" => "Pesen siji.",
                "is_learning" => true,
                "concept" => "Pesen siji. (I\'ll order one.)",
                "javanese_type_id" => 1, // Ngoko
            ],
            // Concept: Enak tenan. (Really delicious.)
            [
                "question" => "The food is great! You say:",
                "module_id" => 3,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Enak tenan.",
                "is_learning" => true,
                "concept" => "Enak tenan. (Really delicious.)",
                "javanese_type_id" => 1, // Ngoko
            ],
            // Concept: Wis wareg. (Already full.)
            [
                "question" => 'How do you say you\'re full?',
                "module_id" => 3,
                "type_id" => 1, // Multiple Choice
                "answer" => "Wis wareg.",
                "is_learning" => true,
                "concept" => "Wis wareg. (Already full.)",
                "javanese_type_id" => 1, // Ngoko
            ],
            // Concept: Pedes, ya. (Make it spicy.)
            [
                "question" => "You like spicy food, so you say:",
                "module_id" => 3,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Pedes, ya.",
                "is_learning" => true,
                "concept" => "Pedes, ya. (Make it spicy.)",
                "javanese_type_id" => 1, // Ngoko
            ],
            // Concept: Mbayar. (To pay.)
            [
                "question" => 'What is the word for "to pay"?',
                "module_id" => 3,
                "type_id" => 1, // Multiple Choice
                "answer" => "Mbayar",
                "is_learning" => true,
                "concept" => "Mbayar. (To pay.)",
                "javanese_type_id" => 1, // Ngoko
            ],

            // Final Quiz - Ngoko
            [
                "question" => "Aku ngelak. means...",
                "module_id" => 3,
                "type_id" => 1, // Multiple Choice
                "answer" => "I\'m thirsty",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 1, // Ngoko
            ],
            [
                "question" => 'How do you say "Really delicious"?',
                "module_id" => 3,
                "type_id" => 1, // Multiple Choice
                "answer" => "Enak tenan.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 1, // Ngoko
            ],
            [
                "question" => "The word Pesen means...",
                "module_id" => 3,
                "type_id" => 1, // Multiple Choice
                "answer" => "To order",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 1, // Ngoko
            ],
            [
                "question" => 'How do you say "I\'m full"?',
                "module_id" => 3,
                "type_id" => 1, // Multiple Choice
                "answer" => "Wis wareg.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 1, // Ngoko
            ],
            [
                "question" => 'To say "I\'m hungry," you say:',
                "module_id" => 3,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Aku luwe.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 1, // Ngoko
            ],
            [
                "question" => "To ask for your food to be spicy, you say:",
                "module_id" => 3,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Pedes, ya.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 1, // Ngoko
            ],
            [
                "question" => 'Which phrase means "to pay"?',
                "module_id" => 3,
                "type_id" => 1, // Multiple Choice
                "answer" => "Mbayar",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 1, // Ngoko
            ],
            [
                "question" => 'To say "Really delicious," you say:',
                "module_id" => 3,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Enak tenan.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 1, // Ngoko
            ],

            // Lesson 3.2: Krama Madya - Mertamu (Being a Guest)

            // Learning Phase - Krama Madya
            [
                "question" => 'When arriving at someone\'s house, you say:',
                "module_id" => 3,
                "type_id" => 1, // Multiple Choice
                "answer" => "Kula nuwun.",
                "is_learning" => true,
                "concept" => "Kula nuwun. (Excuse me / knocking)",
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => "The host asks you to sit down by saying:",
                "module_id" => 3,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Monggo pinarak.",
                "is_learning" => true,
                "concept" => "Monggo pinarak. (Please have a seat.)",
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'To say "Thank you very much," you say:',
                "module_id" => 3,
                "type_id" => 1, // Multiple Choice
                "answer" => "Matur nuwun sanget.",
                "is_learning" => true,
                "concept" => "Matur nuwun sanget. (Thank you very much.)",
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" =>
                    "When the host offers you a drink, you can politely say:",
                "module_id" => 3,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Ampun repot-repot.",
                "is_learning" => true,
                "concept" => "Ampun repot-repot. (Don\'t trouble yourself.)",
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'The polite word for "delicious" is:',
                "module_id" => 3,
                "type_id" => 1, // Multiple Choice
                "answer" => "Eco.",
                "is_learning" => true,
                "concept" => "Eco. (Delicious.)",
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" =>
                    "When offered more food but you are full, you say:",
                "module_id" => 3,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Sampun cekap.",
                "is_learning" => true,
                "concept" => "Sampun cekap. (It\'s enough.)",
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => "When you are about to leave, you say:",
                "module_id" => 3,
                "type_id" => 1, // Multiple Choice
                "answer" => "Nyuwun pamit.",
                "is_learning" => true,
                "concept" => "Nyuwun pamit. (Asking for permission to leave.)",
                "javanese_type_id" => 2, // Krama Madya
            ],

            // Final Quiz - Krama Madya
            [
                "question" => "Eco means...",
                "module_id" => 3,
                "type_id" => 1, // Multiple Choice
                "answer" => "Delicious",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => "To ask for permission to leave, you say:",
                "module_id" => 3,
                "type_id" => 1, // Multiple Choice
                "answer" => "Nyuwun pamit.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => "The phrase Monggo pinarak means...",
                "module_id" => 3,
                "type_id" => 1, // Multiple Choice
                "answer" => "Please have a seat",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'How do you say "Thank you very much"?',
                "module_id" => 3,
                "type_id" => 1, // Multiple Choice
                "answer" => "Matur nuwun sanget.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => "When knocking on a door, you say:",
                "module_id" => 3,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Kula nuwun.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'To politely say "It\'s enough," you say:',
                "module_id" => 3,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Sampun cekap.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'Which phrase means "Don\'t trouble yourself"?',
                "module_id" => 3,
                "type_id" => 1, // Multiple Choice
                "answer" => "Ampun repot-repot.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'The polite word for "delicious" is:',
                "module_id" => 3,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Eco.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 2, // Krama Madya
            ],

            // Lesson 3.3: Krama Inggil - Nyuguh Dhaharan (Serving Food)

            // Learning Phase - Krama Inggil
            [
                "question" =>
                    "To respectfully offer food to an elder, you say:",
                "module_id" => 3,
                "type_id" => 1, // Multiple Choice
                "answer" => "Mangga dipun dhahar.",
                "is_learning" => true,
                "concept" => "Mangga dipun dhahar. (Please, eat.)",
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" =>
                    "To respectfully offer a drink, you say: Mangga ________.",
                "module_id" => 3,
                "type_id" => 2, // Fill in the Blank
                "answer" => "dipun unjuk.",
                "is_learning" => true,
                "concept" => "Dipun unjuk. (Please, drink.)",
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'The respectful word for "the taste" is:',
                "module_id" => 3,
                "type_id" => 1, // Multiple Choice
                "answer" => "Raosipun",
                "is_learning" => true,
                "concept" => "Raosipun. (The taste.)",
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => "To politely say you are full, you say:",
                "module_id" => 3,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Sampun wareg.",
                "is_learning" => true,
                "concept" => "Sampun wareg. (Already full.)",
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => "How do you offer more food to an elder?",
                "module_id" => 3,
                "type_id" => 1, // Multiple Choice
                "answer" => "Tambah malih.",
                "is_learning" => true,
                "concept" => "Tambah malih. (Have some more.)",
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'The respectful word for "food" is:',
                "module_id" => 3,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Dhaharan.",
                "is_learning" => true,
                "concept" => "Dhaharan. (Food/meal.)",
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'The respectful word for "drink" is:',
                "module_id" => 3,
                "type_id" => 1, // Multiple Choice
                "answer" => "Unjukan",
                "is_learning" => true,
                "concept" => "Unjukan. (Drink.)",
                "javanese_type_id" => 3, // Krama Inggil
            ],

            // Final Quiz - Krama Inggil
            [
                "question" => "Dhaharan is the respectful word for...",
                "module_id" => 3,
                "type_id" => 1, // Multiple Choice
                "answer" => "Food",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => "How do you respectfully offer a drink?",
                "module_id" => 3,
                "type_id" => 1, // Multiple Choice
                "answer" => "Mangga dipun unjuk.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => "The phrase Tambah malih means...",
                "module_id" => 3,
                "type_id" => 1, // Multiple Choice
                "answer" => "Have some more",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'The respectful word for "the taste" is:',
                "module_id" => 3,
                "type_id" => 1, // Multiple Choice
                "answer" => "Raosipun",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => "To respectfully offer food, you say:",
                "module_id" => 3,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Mangga dipun dhahar.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'The respectful word for "drink" is:',
                "module_id" => 3,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Unjukan.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'Which phrase means "Already full"?',
                "module_id" => 3,
                "type_id" => 1, // Multiple Choice
                "answer" => "Sampun wareg.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'The respectful word for "food" is:',
                "module_id" => 3,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Dhaharan.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 3, // Krama Inggil
            ],

            // Lesson 3.4: Gladhen Panganan (Food Etiquette Practice)
            [
                "question" =>
                    'You are at your friend\'s house and their mom serves you snacks. How do you say "Thank you very much"?',
                "module_id" => 3,
                "type_id" => 1, // Multiple Choice
                "answer" => "Matur nuwun sanget.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 4, // Gladhen
            ],
            [
                "question" =>
                    "You are eating with your friends at a street food stall. The food is amazing. You exclaim:",
                "module_id" => 3,
                "type_id" => 1, // Multiple Choice
                "answer" => "Enak tenan!",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 4, // Gladhen
            ],
            [
                "question" =>
                    "You are at a formal dinner and your host offers you more rice. You are already full. How do you politely decline?",
                "module_id" => 3,
                "type_id" => 1, // Multiple Choice
                "answer" => "Matur nuwun, sampun cekap.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 4, // Gladhen
            ],
            [
                "question" =>
                    "You are visiting your grandmother. To respectfully ask if she has eaten, you say:",
                "module_id" => 3,
                "type_id" => 1, // Multiple Choice
                "answer" => "Simbah sampun dhahar?",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 4, // Gladhen
            ],
            [
                "question" =>
                    'A young person is serving tea to their grandfather. They say: "Mbah, monggo diombe." Which word is not respectful enough for this situation?',
                "module_id" => 3,
                "type_id" => 1, // Multiple Choice
                "answer" => "diombe",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 4, // Gladhen
            ],
            [
                "question" =>
                    'You are a guest at a friend\'s house. After finishing a delicious meal, you say: "Wah, dhaharanipun eco sanget." Which word is incorrect for you to use as a guest?',
                "module_id" => 3,
                "type_id" => 1, // Multiple Choice
                "answer" => "dhaharanipun",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 4, // Gladhen
            ],
            [
                "question" =>
                    'When knocking on the door of a relative\'s house, the proper phrase is: Kula ______',
                "module_id" => 3,
                "type_id" => 2, // Fill in the Blank
                "answer" => "nuwun",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 4, // Gladhen
            ],
            [
                "question" =>
                    "To respectfully offer food to an elder, you say: Mangga dipun ______",
                "module_id" => 3,
                "type_id" => 2, // Fill in the Blank
                "answer" => "dhahar",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 4, // Gladhen
            ],
        ]);
    }
}
