<?php

namespace Database\Seeders;

use App\Models\Quiz;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuizSeeder9 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Module 9 Theme: Deeper Conversations
        // Lesson 9.1: Ngoko - Kesenengan (Hobbies)

        Quiz::insert([
            // Learning Phase - Ngoko
            // Concept: Kesenenganmu apa? (What's your hobby?)
            [
                "question" => 'How do you ask a friend about their hobby?',
                "module_id" => 9,
                "type_id" => 1, // Multiple Choice
                "answer" => "Kesenenganmu apa?",
                "is_learning" => true,
                "concept" => "Kesenenganmu apa? (What\'s your hobby?)",
                "javanese_type_id" => 1, // Ngoko
            ],
            // Concept: Aku seneng... (I like...)
            [
                "question" => 'To say "I like reading," you say:',
                "module_id" => 9,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Aku seneng maca.",
                "is_learning" => true,
                "concept" => "Aku seneng... (I like...)",
                "javanese_type_id" => 1, // Ngoko
            ],
            // Concept: Nonton film. (Watching movies.)
            [
                "question" => 'The phrase for "watching movies" is:',
                "module_id" => 9,
                "type_id" => 1, // Multiple Choice
                "answer" => "Nonton film.",
                "is_learning" => true,
                "concept" => "Nonton film. (Watching movies.)",
                "javanese_type_id" => 1, // Ngoko
            ],
            // Concept: Olahraga. (Sports.)
            [
                "question" => 'The word for "sports" is:',
                "module_id" => 9,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Olahraga.",
                "is_learning" => true,
                "concept" => "Olahraga. (Sports.)",
                "javanese_type_id" => 1, // Ngoko
            ],
            // Concept: Wiwit kapan? (Since when?)
            [
                "question" => 'How do you ask "Since when?"',
                "module_id" => 9,
                "type_id" => 1, // Multiple Choice
                "answer" => "Wiwit kapan?",
                "is_learning" => true,
                "concept" => "Wiwit kapan? (Since when?)",
                "javanese_type_id" => 1, // Ngoko
            ],
            // Concept: Wis suwe. (A long time.)
            [
                "question" => 'If you\'ve had a hobby for a long time, you say:',
                "module_id" => 9,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Wis suwe.",
                "is_learning" => true,
                "concept" => "Wis suwe. (A long time.)",
                "javanese_type_id" => 1, // Ngoko
            ],
            // Concept: Seru! (Awesome!/Fun!)
            [
                "question" => 'A casual way to say something is fun is:',
                "module_id" => 9,
                "type_id" => 1, // Multiple Choice
                "answer" => "Seru!",
                "is_learning" => true,
                "concept" => "Seru! (Awesome!/Fun!)",
                "javanese_type_id" => 1, // Ngoko
            ],

            // Final Quiz - Ngoko
            [
                "question" => 'Wiwit kapan? means...',
                "module_id" => 9,
                "type_id" => 1, // Multiple Choice
                "answer" => "Since when?",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 1, // Ngoko
            ],
            [
                "question" => 'How do you say "Awesome!" or "Fun!"?',
                "module_id" => 9,
                "type_id" => 1, // Multiple Choice
                "answer" => "Seru!",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 1, // Ngoko
            ],
            [
                "question" => 'The phrase Wis suwe means...',
                "module_id" => 9,
                "type_id" => 1, // Multiple Choice
                "answer" => "A long time",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 1, // Ngoko
            ],
            [
                "question" => 'How do you ask about a friend\'s hobby?',
                "module_id" => 9,
                "type_id" => 1, // Multiple Choice
                "answer" => "Kesenenganmu apa?",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 1, // Ngoko
            ],
            [
                "question" => 'To say "I like watching movies," you say:',
                "module_id" => 9,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Aku seneng nonton film.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 1, // Ngoko
            ],
            [
                "question" => 'The word for "sports" is:',
                "module_id" => 9,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Olahraga.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 1, // Ngoko
            ],
            [
                "question" => 'Which phrase means "A long time"?',
                "module_id" => 9,
                "type_id" => 1, // Multiple Choice
                "answer" => "Wis suwe.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 1, // Ngoko
            ],
            [
                "question" => 'To say "Awesome!", you say:',
                "module_id" => 9,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Seru!",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 1, // Ngoko
            ],

            // Lesson 9.2: Krama Madya - Babagan Hawa (About the Weather)

            // Learning Phase - Krama Madya
            [
                "question" => 'How do you politely ask about the weather?',
                "module_id" => 9,
                "type_id" => 1, // Multiple Choice
                "answer" => "Hawane pripun?",
                "is_learning" => true,
                "concept" => "Hawane pripun? (How is the weather?)",
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'When it\'s very hot, you say:',
                "module_id" => 9,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Panas sanget.",
                "is_learning" => true,
                "concept" => "Panas sanget. (Very hot.)",
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'How do you say "Very cold"?',
                "module_id" => 9,
                "type_id" => 1, // Multiple Choice
                "answer" => "Adem sanget.",
                "is_learning" => true,
                "concept" => "Adem sanget. (Very cold.)",
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'If you see dark clouds, you might say:',
                "module_id" => 9,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Badhe jawah.",
                "is_learning" => true,
                "concept" => "Badhe jawah. (It\'s going to rain.)",
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'How do you say "It\'s windy"?',
                "module_id" => 9,
                "type_id" => 1, // Multiple Choice
                "answer" => "Kathah angin.",
                "is_learning" => true,
                "concept" => "Kathah angin. (It\'s windy.)",
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'The word for "cloudy" is:',
                "module_id" => 9,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Mendung.",
                "is_learning" => true,
                "concept" => "Mendung. (Cloudy.)",
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'The opposite of Mendung is:',
                "module_id" => 9,
                "type_id" => 1, // Multiple Choice
                "answer" => "Cerah.",
                "is_learning" => true,
                "concept" => "Cerah. (Clear/Sunny.)",
                "javanese_type_id" => 2, // Krama Madya
            ],

            // Final Quiz - Krama Madya
            [
                "question" => 'Badhe jawah means...',
                "module_id" => 9,
                "type_id" => 1, // Multiple Choice
                "answer" => "It\'s going to rain",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'To say "It\'s very cold," you say:',
                "module_id" => 9,
                "type_id" => 1, // Multiple Choice
                "answer" => "Adem sanget.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'The word Cerah means...',
                "module_id" => 9,
                "type_id" => 1, // Multiple Choice
                "answer" => "Clear/Sunny",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'How do you politely ask about the weather?',
                "module_id" => 9,
                "type_id" => 1, // Multiple Choice
                "answer" => "Hawane pripun?",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'To say "It\'s very hot," you say:',
                "module_id" => 9,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Panas sanget.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'The word for "cloudy" is:',
                "module_id" => 9,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Mendung.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'Which phrase means "It\'s windy"?',
                "module_id" => 9,
                "type_id" => 1, // Multiple Choice
                "answer" => "Kathah angin.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'The word for "clear/sunny" is:',
                "module_id" => 9,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Cerah.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 2, // Krama Madya
            ],

            // Lesson 9.3: Krama Inggil - Ndhawuh Timbalan (Listening to Advice)

            // Learning Phase - Krama Inggil
            [
                "question" => 'To respectfully ask for an elder\'s opinion, you say:',
                "module_id" => 9,
                "type_id" => 1, // Multiple Choice
                "answer" => "Nyuwun priksa.",
                "is_learning" => true,
                "concept" => "Nyuwun priksa. (Asking for an opinion/view.)",
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'You start a question about their view with:',
                "module_id" => 9,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Miturut pamanggih panjenengan...",
                "is_learning" => true,
                "concept" => "Miturut pamanggih panjenengan... (According to your opinion...)",
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'After receiving advice, you show your intent to follow it by saying:',
                "module_id" => 9,
                "type_id" => 1, // Multiple Choice
                "answer" => "Kula estokaken.",
                "is_learning" => true,
                "concept" => "Kula estokaken. (I will obey/follow it.)",
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'A respectful term for an elder\'s advice is:',
                "module_id" => 9,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Pitutur luhur.",
                "is_learning" => true,
                "concept" => "Pitutur luhur. (Noble advice.)",
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'How do you say the advice will be a lesson for you?',
                "module_id" => 9,
                "type_id" => 1, // Multiple Choice
                "answer" => "Dadosaken piwulang.",
                "is_learning" => true,
                "concept" => "Dadosaken piwulang. (It will be my lesson.)",
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'To quote what an elder said, you start with:',
                "module_id" => 9,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Ngendikanipun...",
                "is_learning" => true,
                "concept" => "Ngendikanipun... (He/She said...)",
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'The best way to thank an elder for their advice is:',
                "module_id" => 9,
                "type_id" => 1, // Multiple Choice
                "answer" => "Matur sembah nuwun.",
                "is_learning" => true,
                "concept" => "Matur sembah nuwun. (Thank you very much - highest form.)",
                "javanese_type_id" => 3, // Krama Inggil
            ],

            // Final Quiz - Krama Inggil
            [
                "question" => 'Kula estokaken means...',
                "module_id" => 9,
                "type_id" => 1, // Multiple Choice
                "answer" => "I will obey/follow it",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'To respectfully ask for an opinion, you say:',
                "module_id" => 9,
                "type_id" => 1, // Multiple Choice
                "answer" => "Nyuwun priksa.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'The phrase Pitutur luhur means...',
                "module_id" => 9,
                "type_id" => 1, // Multiple Choice
                "answer" => "Noble advice",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'How do you respectfully quote what an elder said?',
                "module_id" => 9,
                "type_id" => 1, // Multiple Choice
                "answer" => "Ngendikanipun...",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'To say "According to your opinion...", you say:',
                "module_id" => 9,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Miturut pamanggih panjenengan...",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'To say the advice will be a lesson for you, you say:',
                "module_id" => 9,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Dadosaken piwulang.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'Which phrase means "Noble advice"?',
                "module_id" => 9,
                "type_id" => 1, // Multiple Choice
                "answer" => "Pitutur luhur.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'The highest form of "Thank you" is:',
                "module_id" => 9,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Matur sembah nuwun.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 3, // Krama Inggil
            ],

            // Lesson 9.4: Gladhen Wicara (Conversation Practice)
            [
                "question" => 'You are chatting with a new friend and want to ask about their hobbies. You say:',
                "module_id" => 9,
                "type_id" => 1, // Multiple Choice
                "answer" => "Kesenenganmu apa?",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 4, // Gladhen
            ],
            [
                "question" => 'You are making small talk with a colleague while waiting for a meeting. You look outside and say:',
                "module_id" => 9,
                "type_id" => 1, // Multiple Choice
                "answer" => "Hawane panas sanget, nggih.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 4, // Gladhen
            ],
            [
                "question" => 'You have asked your grandfather for life advice. After he shares his wisdom, you say:',
                "module_id" => 9,
                "type_id" => 1, // Multiple Choice
                "answer" => "Matur sembah nuwun, kula estokaken.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 4, // Gladhen
            ],
            [
                "question" => 'Your friend says they\'ve been learning to play the guitar for a long time. They say:',
                "module_id" => 9,
                "type_id" => 1, // Multiple Choice
                "answer" => "Wis suwe.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 4, // Gladhen
            ],
            [
                "question" => 'A student is respectfully asking their professor for an opinion. They say: "Pak, miturut pikiranmu pripun?" Which word is too casual for a professor?',
                "module_id" => 9,
                "type_id" => 1, // Multiple Choice
                "answer" => "pikiranmu",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 4, // Gladhen
            ],
            [
                "question" => 'You are talking to your boss about the weather. You say: "Bu, hawane adem banget." Which phrase, while understandable, could be more formal?',
                "module_id" => 9,
                "type_id" => 1, // Multiple Choice
                "answer" => "adem banget",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 4, // Gladhen
            ],
            [
                "question" => 'To say "It\'s going to rain" to a colleague, you say: Badhe ______',
                "module_id" => 9,
                "type_id" => 2, // Fill in the Blank
                "answer" => "jawah",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 4, // Gladhen
            ],
            [
                "question" => 'A respectful term for an elder\'s advice is: Pitutur ______',
                "module_id" => 9,
                "type_id" => 2, // Fill in the Blank
                "answer" => "luhur",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 4, // Gladhen
            ],
        ]);
    }
}
