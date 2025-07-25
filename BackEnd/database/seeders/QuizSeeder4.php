<?php

namespace Database\Seeders;

use App\Models\Quiz;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuizSeeder4 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Module 4 Theme: Basic Transactions
        // Lesson 4.1: Ngoko - Tuku-tuku (Casual Shopping)

        Quiz::insert([
            // Learning Phase - Ngoko
            // Concept: Iki pira? (How much is this?)
            [
                "question" => 'How do you ask "How much is this?"',
                "module_id" => 4,
                "type_id" => 1, // Multiple Choice
                "answer" => "Iki pira?",
                "is_learning" => true,
                "concept" => "Iki pira? (How much is this?)",
                "javanese_type_id" => 1, // Ngoko
            ],
            // Concept: Larane... (So expensive...)
            [
                "question" =>
                    "When you think something is too expensive, you say:",
                "module_id" => 4,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Larane",
                "is_learning" => true,
                "concept" => "Larane... (So expensive...)",
                "javanese_type_id" => 1, // Ngoko
            ],
            // Concept: Isa kurang? (Can you lower the price?)
            [
                "question" => "How do you ask for a discount?",
                "module_id" => 4,
                "type_id" => 1, // Multiple Choice
                "answer" => "Isa kurang?",
                "is_learning" => true,
                "concept" => "Isa kurang? (Can you lower the price?)",
                "javanese_type_id" => 1, // Ngoko
            ],
            // Concept: Aku tuku iki. (I'll buy this.)
            [
                "question" => 'To say "I\'ll buy this," you say:',
                "module_id" => 4,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Aku tuku iki.",
                "is_learning" => true,
                "concept" => "Aku tuku iki. (I\'ll buy this.)",
                "javanese_type_id" => 1, // Ngoko
            ],
            // Concept: Dhuwit pas. (Exact change.)
            [
                "question" => 'What is the term for "exact change"?',
                "module_id" => 4,
                "type_id" => 1, // Multiple Choice
                "answer" => "Dhuwit pas.",
                "is_learning" => true,
                "concept" => "Dhuwit pas. (Exact change.)",
                "javanese_type_id" => 1, // Ngoko
            ],
            // Concept: Susuk. (Change (money).)
            [
                "question" => "The money you get back after paying is called:",
                "module_id" => 4,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Susuk.",
                "is_learning" => true,
                "concept" => "Susuk. (Change (money).)",
                "javanese_type_id" => 1, // Ngoko
            ],
            // Concept: Entuk. (Got it / Deal.)
            [
                "question" => "After a successful bargain, you can say:",
                "module_id" => 4,
                "type_id" => 1, // Multiple Choice
                "answer" => "Entuk.",
                "is_learning" => true,
                "concept" => "Entuk. (Got it / Deal.)",
                "javanese_type_id" => 1, // Ngoko
            ],

            // Final Quiz - Ngoko
            [
                "question" => "Larane... means...",
                "module_id" => 4,
                "type_id" => 1, // Multiple Choice
                "answer" => "So expensive",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 1, // Ngoko
            ],
            [
                "question" => 'How do you say "I\'ll buy this"?',
                "module_id" => 4,
                "type_id" => 1, // Multiple Choice
                "answer" => "Aku tuku iki.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 1, // Ngoko
            ],
            [
                "question" => "The word Susuk means...",
                "module_id" => 4,
                "type_id" => 1, // Multiple Choice
                "answer" => "Change (money)",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 1, // Ngoko
            ],
            [
                "question" => "How do you ask for a discount?",
                "module_id" => 4,
                "type_id" => 1, // Multiple Choice
                "answer" => "Isa kurang?",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 1, // Ngoko
            ],
            [
                "question" => 'To say "How much is this?", you say:',
                "module_id" => 4,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Iki pira?",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 1, // Ngoko
            ],
            [
                "question" => 'The term for "exact change" is:',
                "module_id" => 4,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Dhuwit pas.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 1, // Ngoko
            ],
            [
                "question" => 'Which phrase means "Deal"?',
                "module_id" => 4,
                "type_id" => 1, // Multiple Choice
                "answer" => "Entuk.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 1, // Ngoko
            ],
            [
                "question" => 'To say "I\'ll buy this," you say:',
                "module_id" => 4,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Aku tuku iki.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 1, // Ngoko
            ],

            // Lesson 4.2: Krama Madya - Ing Pasar (At the Market)

            // Learning Phase - Krama Madya
            [
                "question" => "How do you politely ask for a price?",
                "module_id" => 4,
                "type_id" => 1, // Multiple Choice
                "answer" => "Niki regine pinten?",
                "is_learning" => true,
                "concept" => "Niki regine pinten? (How much is this?)",
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => "To politely ask for a discount, you say:",
                "module_id" => 4,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Angsal kirang, mboten?",
                "is_learning" => true,
                "concept" => "Angsal kirang, mboten? (Can I get a discount?)",
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'How do you politely say "I will buy this"?',
                "module_id" => 4,
                "type_id" => 1, // Multiple Choice
                "answer" => "Kula tumbas niki.",
                "is_learning" => true,
                "concept" => "Kula tumbas niki. (I will buy this.)",
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => "To ask where to pay, you say:",
                "module_id" => 4,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Mbayaripun teng pundi?",
                "is_learning" => true,
                "concept" => "Mbayaripun teng pundi? (Where do I pay?)",
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => "To praise the quality of an item, you say:",
                "module_id" => 4,
                "type_id" => 1, // Multiple Choice
                "answer" => "Sae sanget.",
                "is_learning" => true,
                "concept" => "Sae sanget. (Very good quality.)",
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => "When buying multiple items, you ask:",
                "module_id" => 4,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Pinten sedanten?",
                "is_learning" => true,
                "concept" => "Pinten sedanten? (How much for everything?)",
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => "The polite term for money change is:",
                "module_id" => 4,
                "type_id" => 1, // Multiple Choice
                "answer" => "Wangsulan",
                "is_learning" => true,
                "concept" => "Wangsulan. (Change (money).)",
                "javanese_type_id" => 2, // Krama Madya
            ],

            // Final Quiz - Krama Madya
            [
                "question" => "Sae sanget means...",
                "module_id" => 4,
                "type_id" => 1, // Multiple Choice
                "answer" => "Very good quality",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'To ask "Where do I pay?", you say:',
                "module_id" => 4,
                "type_id" => 1, // Multiple Choice
                "answer" => "Mbayaripun teng pundi?",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'The polite way to say "I will buy this" is:',
                "module_id" => 4,
                "type_id" => 1, // Multiple Choice
                "answer" => "Kula tumbas niki.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => "How do you politely ask for a discount?",
                "module_id" => 4,
                "type_id" => 1, // Multiple Choice
                "answer" => "Angsal kirang, mboten?",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => "To politely ask for a price, you say:",
                "module_id" => 4,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Niki regine pinten?",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => "The polite term for money change is:",
                "module_id" => 4,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Wangsulan.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'Which phrase means "How much for everything"?',
                "module_id" => 4,
                "type_id" => 1, // Multiple Choice
                "answer" => "Pinten sedanten?",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'The polite way to say "Very good quality" is:',
                "module_id" => 4,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Sae sanget.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 2, // Krama Madya
            ],

            // Lesson 4.3: Krama Inggil - Nyuwun Pirsa Regi (Respectfully Asking for a Price)

            // Learning Phase - Krama Inggil
            [
                "question" => "A very respectful way to start a question is:",
                "module_id" => 4,
                "type_id" => 1, // Multiple Choice
                "answer" => "Nyuwun pirsa.",
                "is_learning" => true,
                "concept" => "Nyuwun pirsa. (May I inquire.)",
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => "To respectfully ask for the price, you say:",
                "module_id" => 4,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Regipun pinten?",
                "is_learning" => true,
                "concept" => "Regipun pinten? (How much is the price?)",
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" =>
                    'The most respectful way to say "I want to buy" is:',
                "module_id" => 4,
                "type_id" => 1, // Multiple Choice
                "answer" => "Kula badhe mundhut.",
                "is_learning" => true,
                "concept" => "Kula badhe mundhut. (I would like to purchase.)",
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" =>
                    'A respectful term for something you\'ve purchased is:',
                "module_id" => 4,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Kintunan.",
                "is_learning" => true,
                "concept" => "Kintunan. (A gift/purchase to be taken home.)",
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => "The respectful term for handing over money is:",
                "module_id" => 4,
                "type_id" => 1, // Multiple Choice
                "answer" => "Marasakeun.",
                "is_learning" => true,
                "concept" => "Marasakeun. (To give/hand over payment.)",
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" =>
                    "To respectfully ask if an elder wants something, you use the word:",
                "module_id" => 4,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Kersa.",
                "is_learning" => true,
                "concept" => "Kersa. (To wish/want.)",
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" =>
                    'The highest form of "Thank you" after a transaction is:',
                "module_id" => 4,
                "type_id" => 1, // Multiple Choice
                "answer" => "Matur sembah nuwun.",
                "is_learning" => true,
                "concept" =>
                    "Matur sembah nuwun. (Thank you very much - highest form.)",
                "javanese_type_id" => 3, // Krama Inggil
            ],

            // Final Quiz - Krama Inggil
            [
                "question" => "Kula badhe mundhut means...",
                "module_id" => 4,
                "type_id" => 1, // Multiple Choice
                "answer" => "I would like to purchase",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => "To respectfully ask for a price, you say:",
                "module_id" => 4,
                "type_id" => 1, // Multiple Choice
                "answer" => "Regipun pinten?",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" =>
                    "The respectful term for handing over payment is:",
                "module_id" => 4,
                "type_id" => 1, // Multiple Choice
                "answer" => "Marasakeun",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => "Nyuwun pirsa is a very respectful way to say...",
                "module_id" => 4,
                "type_id" => 1, // Multiple Choice
                "answer" => "May I inquire",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" =>
                    'The most respectful way to say "I want to buy" is:',
                "module_id" => 4,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Kula badhe mundhut.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" =>
                    "A respectful term for a purchase you take home is:",
                "module_id" => 4,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Kintunan.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" =>
                    'Which word means "to wish/want" when referring to an elder?',
                "module_id" => 4,
                "type_id" => 1, // Multiple Choice
                "answer" => "Kersa",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'The highest form of "Thank you" is:',
                "module_id" => 4,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Matur sembah nuwun.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 3, // Krama Inggil
            ],

            // Lesson 4.4: Gladhen Tumbas (Purchase Practice)
            [
                "question" =>
                    "You are buying snacks from a street vendor your age. How do you ask for the price?",
                "module_id" => 4,
                "type_id" => 1, // Multiple Choice
                "answer" => "Iki pira?",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 4, // Gladhen
            ],
            [
                "question" =>
                    "You are at a traditional market buying batik from a middle-aged shop owner. How do you politely ask for a discount?",
                "module_id" => 4,
                "type_id" => 1, // Multiple Choice
                "answer" => "Angsal kirang, mboten?",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 4, // Gladhen
            ],
            [
                "question" =>
                    'You are helping your grandmother buy a gift for her friend from a respected artisan. How do you say "We would like to purchase this"?',
                "module_id" => 4,
                "type_id" => 1, // Multiple Choice
                "answer" => "Kula badhe mundhut niki.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 4, // Gladhen
            ],
            [
                "question" =>
                    "After buying from a friendly shopkeeper at the market, you receive your change. What is the polite term for this change?",
                "module_id" => 4,
                "type_id" => 1, // Multiple Choice
                "answer" => "Wangsulan",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 4, // Gladhen
            ],
            [
                "question" =>
                    'A student is buying a book from a polite bookstore clerk. The student says: "Mbak, iki pira?" Which part of the question is too casual?',
                "module_id" => 4,
                "type_id" => 1, // Multiple Choice
                "answer" => "iki pira",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 4, // Gladhen
            ],
            [
                "question" =>
                    'You are at a formal gallery. You respectfully ask the curator: "Pak, kula tumbas lukisan niki." Which phrase is not respectful enough for this formal situation?',
                "module_id" => 4,
                "type_id" => 1, // Multiple Choice
                "answer" => "kula tumbas",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 4, // Gladhen
            ],
            [
                "question" =>
                    'To politely ask "How much for everything?" at a market stall, you say: Pinten ______',
                "module_id" => 4,
                "type_id" => 2, // Fill in the Blank
                "answer" => "sedanten",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 4, // Gladhen
            ],
            [
                "question" =>
                    "A very respectful way to begin an inquiry with an elder artisan is: Nyuwun ______",
                "module_id" => 4,
                "type_id" => 2, // Fill in the Blank
                "answer" => "pirsa",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 4, // Gladhen
            ],
        ]);
    }
}
