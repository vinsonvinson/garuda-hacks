<?php

namespace Database\Seeders;

use App\Models\Quiz;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuizSeeder6 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Quiz::insert([
            // Learning Phase - Ngoko
            // Concept: Aku seneng banget. (I'm very happy.)
            [
                "question" => 'How do you say "I\'m very happy"?',
                "module_id" => 6,
                "type_id" => 1, // Multiple Choice
                "answer" => "Aku seneng banget.",
                "is_learning" => true,
                "concept" => "Aku seneng banget. (I\'m very happy.)",
                "javanese_type_id" => 1, // Ngoko
            ],
            // Concept: Aku nesu. (I'm angry.)
            [
                "question" => 'To say "I\'m angry," you say:',
                "module_id" => 6,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Aku nesu.",
                "is_learning" => true,
                "concept" => "Aku nesu. (I\'m angry.)",
                "javanese_type_id" => 1, // Ngoko
            ],
            // Concept: Aku sedhih. (I'm sad.)
            [
                "question" => 'Which phrase means "I\'m sad"?',
                "module_id" => 6,
                "type_id" => 1, // Multiple Choice
                "answer" => "Aku sedhih.",
                "is_learning" => true,
                "concept" => "Aku sedhih. (I\'m sad.)",
                "javanese_type_id" => 1, // Ngoko
            ],
            // Concept: Aku kesel. (I'm tired.)
            [
                "question" => 'After a long day, you say:',
                "module_id" => 6,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Aku kesel.",
                "is_learning" => true,
                "concept" => "Aku kesel. (I\'m tired.)",
                "javanese_type_id" => 1, // Ngoko
            ],
            // Concept: Ojo kuwatir. (Don't worry.)
            [
                "question" => 'How do you tell a friend "Don\'t worry"?',
                "module_id" => 6,
                "type_id" => 1, // Multiple Choice
                "answer" => "Ojo kuwatir.",
                "is_learning" => true,
                "concept" => "Ojo kuwatir. (Don\'t worry.)",
                "javanese_type_id" => 1, // Ngoko
            ],
            // Concept: Aku kangen. (I miss you.)
            [
                "question" => 'To say "I miss you," you say:',
                "module_id" => 6,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Aku kangen.",
                "is_learning" => true,
                "concept" => "Aku kangen. (I miss you.)",
                "javanese_type_id" => 1, // Ngoko
            ],
            // Concept: Aku wedi. (I'm scared.)
            [
                "question" => 'The phrase for "I\'m scared" is:',
                "module_id" => 6,
                "type_id" => 1, // Multiple Choice
                "answer" => "Aku wedi.",
                "is_learning" => true,
                "concept" => "Aku wedi. (I\'m scared.)",
                "javanese_type_id" => 1, // Ngoko
            ],

            // Final Quiz - Ngoko
            [
                "question" => 'Aku sedhih means...',
                "module_id" => 6,
                "type_id" => 1, // Multiple Choice
                "answer" => "I\'m sad",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 1, // Ngoko
            ],
            [
                "question" => 'How do you say "I\'m angry"?',
                "module_id" => 6,
                "type_id" => 1, // Multiple Choice
                "answer" => "Aku nesu.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 1, // Ngoko
            ],
            [
                "question" => 'The phrase Ojo kuwatir means...',
                "module_id" => 6,
                "type_id" => 1, // Multiple Choice
                "answer" => "Don\'t worry",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 1, // Ngoko
            ],
            [
                "question" => 'How do you say "I\'m scared"?',
                "module_id" => 6,
                "type_id" => 1, // Multiple Choice
                "answer" => "Aku wedi.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 1, // Ngoko
            ],
            [
                "question" => 'To say "I\'m very happy," you say:',
                "module_id" => 6,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Aku seneng banget.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 1, // Ngoko
            ],
            [
                "question" => 'To say "I\'m tired," you say:',
                "module_id" => 6,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Aku kesel.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 1, // Ngoko
            ],
            [
                "question" => 'Which phrase means "I miss you"?',
                "module_id" => 6,
                "type_id" => 1, // Multiple Choice
                "answer" => "Aku kangen.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 1, // Ngoko
            ],
            [
                "question" => 'To say "I\'m sad," you say:',
                "module_id" => 6,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Aku sedhih.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 1, // Ngoko
            ],

            // Lesson 6.2: Krama Madya - Nawakake Bantuan (Offering Help)

            // Learning Phase - Krama Madya
            [
                "question" => 'How do you politely offer help?',
                "module_id" => 6,
                "type_id" => 1, // Multiple Choice
                "answer" => "Saged kula bantu?",
                "is_learning" => true,
                "concept" => "Saged kula bantu? (Can I help?)",
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'A polite way to ask if someone needs help is:',
                "module_id" => 6,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Wonten sing saged dibantu?",
                "is_learning" => true,
                "concept" => "Wonten sing saged dibantu? (Is there anything I can help with?)",
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'How do you politely decline an offer of help?',
                "module_id" => 6,
                "type_id" => 1, // Multiple Choice
                "answer" => "Mboten usah.",
                "is_learning" => true,
                "concept" => "Mboten usah. (No need.)",
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'After helping someone, you can say:',
                "module_id" => 6,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Kula remen saged mbantu.",
                "is_learning" => true,
                "concept" => "Kula remen saged mbantu. (I\'m happy to help.)",
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'When you accept someone\'s offer to help, you can say:',
                "module_id" => 6,
                "type_id" => 1, // Multiple Choice
                "answer" => "Sumangga.",
                "is_learning" => true,
                "concept" => "Sumangga. (Please, go ahead.)",
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'To politely ask for help, you say:',
                "module_id" => 6,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Nyuwun tulung.",
                "is_learning" => true,
                "concept" => "Nyuwun tulung. (Please help me.)",
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'The polite word for "How?" is:',
                "module_id" => 6,
                "type_id" => 1, // Multiple Choice
                "answer" => "Pripun?",
                "is_learning" => true,
                "concept" => "Pripun? (How?)",
                "javanese_type_id" => 2, // Krama Madya
            ],

            // Final Quiz - Krama Madya
            [
                "question" => 'Sumangga means...',
                "module_id" => 6,
                "type_id" => 1, // Multiple Choice
                "answer" => "Please, go ahead",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'To politely ask for help, you say:',
                "module_id" => 6,
                "type_id" => 1, // Multiple Choice
                "answer" => "Nyuwun tulung.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'The phrase Mboten usah means...',
                "module_id" => 6,
                "type_id" => 1, // Multiple Choice
                "answer" => "No need",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'How do you politely ask "How?"?',
                "module_id" => 6,
                "type_id" => 1, // Multiple Choice
                "answer" => "Pripun?",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'To offer help, you can ask:',
                "module_id" => 6,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Saged kula bantu?",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'When you are happy to help, you say:',
                "module_id" => 6,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Kula remen saged mbantu.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'Which phrase means "Is there anything I can help with?"?',
                "module_id" => 6,
                "type_id" => 1, // Multiple Choice
                "answer" => "Wonten sing saged dibantu?",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'The polite word for "How?" is:',
                "module_id" => 6,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Pripun?",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 2, // Krama Madya
            ],

            // Lesson 6.3: Krama Inggil - Nyuwun Pangapunten (Respectfully Apologizing)

            // Learning Phase - Krama Inggil
            [
                "question" => 'The respectful way to say "I\'m sorry" is:',
                "module_id" => 6,
                "type_id" => 1, // Multiple Choice
                "answer" => "Nyuwun pangapunten.",
                "is_learning" => true,
                "concept" => "Nyuwun pangapunten. (I ask for forgiveness.)",
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'To admit your mistake respectfully, you say:',
                "module_id" => 6,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Kula lepat.",
                "is_learning" => true,
                "concept" => "Kula lepat. (I was wrong.)",
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'You can start an apology with:',
                "module_id" => 6,
                "type_id" => 1, // Multiple Choice
                "answer" => "Menawi wonten lepat.",
                "is_learning" => true,
                "concept" => "Menawi wonten lepat. (If there are any mistakes.)",
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'To apologize for your words, you mention:',
                "module_id" => 6,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Atur kula.",
                "is_learning" => true,
                "concept" => "Atur kula. (In my speech.)",
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'To apologize for your actions, you mention:',
                "module_id" => 6,
                "type_id" => 1, // Multiple Choice
                "answer" => "Tindak-tanduk kula.",
                "is_learning" => true,
                "concept" => "Tindak-tanduk kula. (In my actions.)",
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'A respectful way to describe your displeasing action is:',
                "module_id" => 6,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Ingkang mboten mranani.",
                "is_learning" => true,
                "concept" => "Ingkang mboten mranani. (That was not pleasing.)",
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'A respectful way to accept an apology is:',
                "module_id" => 6,
                "type_id" => 1, // Multiple Choice
                "answer" => "Mboten dados menapa.",
                "is_learning" => true,
                "concept" => "Mboten dados menapa. (It is not a problem.)",
                "javanese_type_id" => 3, // Krama Inggil
            ],

            // Final Quiz - Krama Inggil
            [
                "question" => 'Kula lepat means...',
                "module_id" => 6,
                "type_id" => 1, // Multiple Choice
                "answer" => "I was wrong",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'The respectful way to accept an apology is:',
                "module_id" => 6,
                "type_id" => 1, // Multiple Choice
                "answer" => "Mboten dados menapa.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'The phrase Atur kula refers to your...',
                "module_id" => 6,
                "type_id" => 1, // Multiple Choice
                "answer" => "Speech",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'How do you respectfully say "I\'m sorry"?',
                "module_id" => 6,
                "type_id" => 1, // Multiple Choice
                "answer" => "Nyuwun pangapunten.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'To admit your mistake, you say:',
                "module_id" => 6,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Kula lepat.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'To apologize for your actions, you mention:',
                "module_id" => 6,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Tindak-tanduk kula.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'Which phrase means "If there are any mistakes"?',
                "module_id" => 6,
                "type_id" => 1, // Multiple Choice
                "answer" => "Menawi wonten lepat.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'The respectful way to say "It is not a problem" is:',
                "module_id" => 6,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Mboten dados menapa.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 3, // Krama Inggil
            ],

            // Lesson 6.4: Gladhen Raos (Feelings & Expressions Practice)
            [
                "question" => 'You see your close friend looking sad. You ask them what\'s wrong and they tell you. To show you\'re sad for them, you say:',
                "module_id" => 6,
                "type_id" => 1, // Multiple Choice
                "answer" => "Aku melu sedhih.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 4, // Gladhen
            ],
            [
                "question" => 'A colleague looks like they are struggling to carry a heavy box. You want to offer help. You say:',
                "module_id" => 6,
                "type_id" => 1, // Multiple Choice
                "answer" => "Saged kula bantu?",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 4, // Gladhen
            ],
            [
                "question" => 'You accidentally bump into an elder at a formal event. What is the most respectful way to apologize?',
                "module_id" => 6,
                "type_id" => 1, // Multiple Choice
                "answer" => "Nyuwun agunging pangapunten.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 4, // Gladhen
            ],
            [
                "question" => 'Your friend is worried about an upcoming exam. You tell them:',
                "module_id" => 6,
                "type_id" => 1, // Multiple Choice
                "answer" => "Ojo kuwatir.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 4, // Gladhen
            ],
            [
                "question" => 'A student is apologizing to their teacher. They say: "Bu, kula nyuwun sepuro." Which phrase is not formal enough for a teacher?',
                "module_id" => 6,
                "type_id" => 1, // Multiple Choice
                "answer" => "nyuwun sepuro",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 4, // Gladhen
            ],
            [
                "question" => 'You are offering to help your much older, respected boss. You say: "Pak, wonten sing saged tak bantu?" Which part of the phrase is too casual?',
                "module_id" => 6,
                "type_id" => 1, // Multiple Choice
                "answer" => "tak bantu",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 4, // Gladhen
            ],
            [
                "question" => 'To respectfully say "I was wrong," you say: Kula ______',
                "module_id" => 6,
                "type_id" => 2, // Fill in the Blank
                "answer" => "lepat",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 4, // Gladhen
            ],
            [
                "question" => 'To politely decline an offer of help, you say: Mboten ______',
                "module_id" => 6,
                "type_id" => 2, // Fill in the Blank
                "answer" => "usah",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 4, // Gladhen
            ],
        ]);
    }
    
}
