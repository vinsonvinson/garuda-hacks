<?php

namespace Database\Seeders;

use App\Models\Quiz;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuizSeeder5 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Module 5 Theme: Getting Around
        // Lesson 5.1: Ngoko - Mlaku-mlaku (Going for a Walk/Stroll)

        Quiz::insert([
            // Learning Phase - Ngoko
            // Concept: Ayo mlaku-mlaku. (Let's go for a walk.)
            [
                "question" => "How do you invite a friend for a walk?",
                "module_id" => 5,
                "type_id" => 1, // Multiple Choice
                "answer" => "Ayo mlaku-mlaku.",
                "is_learning" => true,
                "concept" => "Ayo mlaku-mlaku. (Let\'s go for a walk.)",
                "javanese_type_id" => 1, // Ngoko
            ],
            // Concept: Nang endi? (To where?)
            [
                "question" => 'To ask "To where?", you say:',
                "module_id" => 5,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Nang endi?",
                "is_learning" => true,
                "concept" => "Nang endi? (To where?)",
                "javanese_type_id" => 1, // Ngoko
            ],
            // Concept: Cedhak kene. (Near here.)
            [
                "question" => 'How do you say "Near here"?',
                "module_id" => 5,
                "type_id" => 1, // Multiple Choice
                "answer" => "Cedhak kene.",
                "is_learning" => true,
                "concept" => "Cedhak kene. (Near here.)",
                "javanese_type_id" => 1, // Ngoko
            ],
            // Concept: Adoh. (Far.)
            [
                "question" => "The opposite of cedhak is:",
                "module_id" => 5,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Adoh.",
                "is_learning" => true,
                "concept" => "Adoh. (Far.)",
                "javanese_type_id" => 1, // Ngoko
            ],
            // Concept: Numpak apa? (Ride what?)
            [
                "question" => "How do you ask what vehicle to take?",
                "module_id" => 5,
                "type_id" => 1, // Multiple Choice
                "answer" => "Numpak apa?",
                "is_learning" => true,
                "concept" => "Numpak apa? (Ride what?)",
                "javanese_type_id" => 1, // Ngoko
            ],
            // Concept: Mlaku wae. (Just walk.)
            [
                "question" => 'If you don\'t need a vehicle, you can say:',
                "module_id" => 5,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Mlaku wae.",
                "is_learning" => true,
                "concept" => "Mlaku wae. (Just walk.)",
                "javanese_type_id" => 1, // Ngoko
            ],
            // Concept: Ayo budhal. (Let's go/depart.)
            [
                "question" => 'When you\'re ready to leave, you say:',
                "module_id" => 5,
                "type_id" => 1, // Multiple Choice
                "answer" => "Ayo budhal.",
                "is_learning" => true,
                "concept" => "Ayo budhal. (Let\'s go/depart.)",
                "javanese_type_id" => 1, // Ngoko
            ],

            // Final Quiz - Ngoko
            [
                "question" => "Adoh means...",
                "module_id" => 5,
                "type_id" => 1, // Multiple Choice
                "answer" => "Far",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 1, // Ngoko
            ],
            [
                "question" => 'How do you say "Just walk"?',
                "module_id" => 5,
                "type_id" => 1, // Multiple Choice
                "answer" => "Mlaku wae.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 1, // Ngoko
            ],
            [
                "question" => "The phrase Ayo budhal means...",
                "module_id" => 5,
                "type_id" => 1, // Multiple Choice
                "answer" => "Let\'s go/depart",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 1, // Ngoko
            ],
            [
                "question" => 'How do you say "Near here"?',
                "module_id" => 5,
                "type_id" => 1, // Multiple Choice
                "answer" => "Cedhak kene.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 1, // Ngoko
            ],
            [
                "question" => 'To ask "To where?", you say:',
                "module_id" => 5,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Nang endi?",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 1, // Ngoko
            ],
            [
                "question" => "To ask what vehicle to use, you say:",
                "module_id" => 5,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Numpak apa?",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 1, // Ngoko
            ],
            [
                "question" => 'Which phrase means "Let\'s go for a walk"?',
                "module_id" => 5,
                "type_id" => 1, // Multiple Choice
                "answer" => "Ayo mlaku-mlaku.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 1, // Ngoko
            ],
            [
                "question" => 'The word for "far" is:',
                "module_id" => 5,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Adoh.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 1, // Ngoko
            ],

            // Lesson 5.2: Krama Madya - Numpak Bis (Riding the Bus)

            // Learning Phase - Krama Madya
            [
                "question" =>
                    'To tell the driver you\'re getting off, you say:',
                "module_id" => 5,
                "type_id" => 1, // Multiple Choice
                "answer" => "Mandhap ngajeng, nggih.",
                "is_learning" => true,
                "concept" =>
                    "Mandhap ngajeng, nggih. (I\'ll get off at the front.)",
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => "To ask for the fare, you say:",
                "module_id" => 5,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Ongkosipun pinten?",
                "is_learning" => true,
                "concept" => "Ongkosipun pinten? (How much is the fare?)",
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'How do you say "To the left"?',
                "module_id" => 5,
                "type_id" => 1, // Multiple Choice
                "answer" => "Teng kiwa.",
                "is_learning" => true,
                "concept" => "Teng kiwa. (To the left.)",
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => "If the direction is straight ahead, you say:",
                "module_id" => 5,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Lurus mawon.",
                "is_learning" => true,
                "concept" => "Lurus mawon. (Just go straight.)",
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => "The place to wait for a bus is called:",
                "module_id" => 5,
                "type_id" => 1, // Multiple Choice
                "answer" => "Halte bis",
                "is_learning" => true,
                "concept" => "Halte bis. (Bus stop.)",
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" =>
                    "To politely start a question to a stranger, you say:",
                "module_id" => 5,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Nyuwun pirsa.",
                "is_learning" => true,
                "concept" => "Nyuwun pirsa. (May I ask.)",
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => "How do you ask if a place is far?",
                "module_id" => 5,
                "type_id" => 1, // Multiple Choice
                "answer" => "Tebih mboten?",
                "is_learning" => true,
                "concept" => "Tebih mboten? (Is it far?)",
                "javanese_type_id" => 2, // Krama Madya
            ],

            // Final Quiz - Krama Madya
            [
                "question" => "Tebih means...",
                "module_id" => 5,
                "type_id" => 1, // Multiple Choice
                "answer" => "Far",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => "To ask for the fare, you say:",
                "module_id" => 5,
                "type_id" => 1, // Multiple Choice
                "answer" => "Ongkosipun pinten?",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => "The phrase Mandhap ngajeng means...",
                "module_id" => 5,
                "type_id" => 1, // Multiple Choice
                "answer" => "Get off at the front",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'The polite way to say "To the left" is:',
                "module_id" => 5,
                "type_id" => 1, // Multiple Choice
                "answer" => "Teng kiwa",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => "The place to wait for a bus is called:",
                "module_id" => 5,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Halte bis.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => "To politely start a question, you say:",
                "module_id" => 5,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Nyuwun pirsa.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'Which phrase means "Just go straight"?',
                "module_id" => 5,
                "type_id" => 1, // Multiple Choice
                "answer" => "Lurus mawon.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'The polite word for "far" is:',
                "module_id" => 5,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Tebih.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 2, // Krama Madya
            ],

            // Lesson 5.3: Krama Inggil - Nyuwun Pirsa Dalan (Respectfully Asking for Directions)

            // Learning Phase - Krama Inggil
            [
                "question" =>
                    "The most respectful way to start asking for directions is:",
                "module_id" => 5,
                "type_id" => 1, // Multiple Choice
                "answer" => "Nyuwun pangapunten, badhe nyuwun pirsa.",
                "is_learning" => true,
                "concept" =>
                    "Nyuwun pangapunten, badhe nyuwun pirsa. (Forgive me, I\'d like to inquire.)",
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" =>
                    'To respectfully refer to someone\'s house, you say:',
                "module_id" => 5,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Dalemipun",
                "is_learning" => true,
                "concept" => "Dalemipun... (The residence of...)",
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" =>
                    "How do you respectfully ask for the way to a place?",
                "module_id" => 5,
                "type_id" => 1, // Multiple Choice
                "answer" => "Menawi tindak dhateng",
                "is_learning" => true,
                "concept" =>
                    "Menawi tindak dhateng... (If one were to go to...)",
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => "If a place is reachable by foot, you can say:",
                "module_id" => 5,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Mlampah kemawon.",
                "is_learning" => true,
                "concept" => "Mlampah kemawon. (Just by walking.)",
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'The respectful word for "to ride" is:',
                "module_id" => 5,
                "type_id" => 1, // Multiple Choice
                "answer" => "Nitih",
                "is_learning" => true,
                "concept" => "Nitih. (To ride (a vehicle).)",
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" =>
                    'The respectful way to say "Just go straight" is:',
                "module_id" => 5,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Kedah lurus kemawon.",
                "is_learning" => true,
                "concept" =>
                    "Kedah lurus kemawon. (One must just go straight.)",
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" =>
                    "After receiving directions from an elder, you say:",
                "module_id" => 5,
                "type_id" => 1, // Multiple Choice
                "answer" => "Matur sembah nuwun.",
                "is_learning" => true,
                "concept" =>
                    "Matur sembah nuwun. (Thank you very much - highest form.)",
                "javanese_type_id" => 3, // Krama Inggil
            ],

            // Final Quiz - Krama Inggil
            [
                "question" => "Dalemipun is the respectful word for...",
                "module_id" => 5,
                "type_id" => 1, // Multiple Choice
                "answer" => "House",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'The respectful word for "to ride" a vehicle is:',
                "module_id" => 5,
                "type_id" => 1, // Multiple Choice
                "answer" => "Nitih",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => "The phrase Mlampah kemawon means...",
                "module_id" => 5,
                "type_id" => 1, // Multiple Choice
                "answer" => "Just by walking",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" =>
                    "How do you respectfully ask for the way to a place?",
                "module_id" => 5,
                "type_id" => 1, // Multiple Choice
                "answer" => "Menawi tindak dhateng",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => "The most respectful way to start a question is:",
                "module_id" => 5,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Nyuwun pangapunten, badhe nyuwun pirsa.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'The highest form of "Thank you" is:',
                "module_id" => 5,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Matur sembah nuwun.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'Which phrase means "One must just go straight"?',
                "module_id" => 5,
                "type_id" => 1, // Multiple Choice
                "answer" => "Kedah lurus kemawon.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'The respectful word for "house" is:',
                "module_id" => 5,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Dalemipun.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 3, // Krama Inggil
            ],

            // Lesson 5.4: Gladhen Papan (Location & Directions Practice)
            [
                "question" =>
                    "You are lost and ask a friendly-looking person your age for directions. You start by saying:",
                "module_id" => 5,
                "type_id" => 1, // Multiple Choice
                "answer" => "Nyuwun sewu.", // Or "Mas, arep takon." depending on context of "friendly-looking"
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 4, // Gladhen
            ],
            [
                "question" =>
                    "You are on a bus and need to tell the driver you want to get off at the next stop. You say:",
                "module_id" => 5,
                "type_id" => 1, // Multiple Choice
                "answer" => "Mandhap ngajeng, nggih.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 4, // Gladhen
            ],
            [
                "question" =>
                    "You are asking a respected elder for directions to the main mosque. You start your question with:",
                "module_id" => 5,
                "type_id" => 1, // Multiple Choice
                "answer" => "Pak, nyuwun pangapunten, badhe nyuwun pirsa",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 4, // Gladhen
            ],
            [
                "question" =>
                    "An elder tells you that the place you are looking for is far. Which word would they most likely use?",
                "module_id" => 5,
                "type_id" => 1, // Multiple Choice
                "answer" => "Tebih",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 4, // Gladhen
            ],
            [
                "question" =>
                    'A tourist is respectfully asking an elder for directions. They ask: "Pak, omahipun Pak Lurah teng pundi?" Which word is polite, but could be more respectful?',
                "module_id" => 5,
                "type_id" => 1, // Multiple Choice
                "answer" => "omahipun",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 4, // Gladhen
            ],
            [
                "question" =>
                    'You are asking your friend what to ride to get to the city square. You ask: "Kanggo nang alun-alun, nitih apa?" Which word is too formal for a friend?',
                "module_id" => 5,
                "type_id" => 1, // Multiple Choice
                "answer" => "nitih",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 4, // Gladhen
            ],
            [
                "question" =>
                    'To politely ask a stranger, "Is it far from here?", you say: ______ mboten saking mriki?',
                "module_id" => 5,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Tebih",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 4, // Gladhen
            ],
            [
                "question" =>
                    'The most respectful way to say "Just by walking" is: ______ kemawon.',
                "module_id" => 5,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Mlampah",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 4, // Gladhen
            ],
        ]);
    }
}
