<?php

namespace Database\Seeders;

use App\Models\Quiz;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuizSeeder7 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Module 7 Theme: Making Plans
        // Lesson 7.1: Ngoko - Ayo Dolan (Let's Hang Out)

        Quiz::insert([
            // Learning Phase - Ngoko
            // Concept: Ayo dolan. (Let's hang out.)
            [
                "question" => 'How do you invite a friend to hang out?',
                "module_id" => 7,
                "type_id" => 1, // Multiple Choice
                "answer" => "Ayo dolan.",
                "is_learning" => true,
                "concept" => "Ayo dolan. (Let\'s hang out.)",
                "javanese_type_id" => 1, // Ngoko
            ],
            // Concept: Kapan? (When?)
            [
                "question" => 'To ask "When?", you say:',
                "module_id" => 7,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Kapan?",
                "is_learning" => true,
                "concept" => "Kapan? (When?)",
                "javanese_type_id" => 1, // Ngoko
            ],
            // Concept: Mengko bengi. (Tonight.)
            [
                "question" => 'How do you say "Tonight"?',
                "module_id" => 7,
                "type_id" => 1, // Multiple Choice
                "answer" => "Mengko bengi.",
                "is_learning" => true,
                "concept" => "Mengko bengi. (Tonight.)",
                "javanese_type_id" => 1, // Ngoko
            ],
            // Concept: Ketemu neng endi? (Where should we meet?)
            [
                "question" => 'To ask where to meet, you say:',
                "module_id" => 7,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Ketemu neng endi?",
                "is_learning" => true,
                "concept" => "Ketemu neng endi? (Where should we meet?)",
                "javanese_type_id" => 1, // Ngoko
            ],
            // Concept: Jam pira? (What time?)
            [
                "question" => 'How do you ask "What time?"',
                "module_id" => 7,
                "type_id" => 1, // Multiple Choice
                "answer" => "Jam pira?",
                "is_learning" => true,
                "concept" => "Jam pira? (What time?)",
                "javanese_type_id" => 1, // Ngoko
            ],
            // Concept: Aku ora isa. (I can't.)
            [
                "question" => 'To say "I can\'t," you say:',
                "module_id" => 7,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Aku ora isa.",
                "is_learning" => true,
                "concept" => "Aku ora isa. (I can\'t.)",
                "javanese_type_id" => 1, // Ngoko
            ],
            // Concept: Oke, siyap. (Okay, ready.)
            [
                "question" => 'How do you agree to a plan?',
                "module_id" => 7,
                "type_id" => 1, // Multiple Choice
                "answer" => "Oke, siyap.",
                "is_learning" => true,
                "concept" => "Oke, siyap. (Okay, ready.)",
                "javanese_type_id" => 1, // Ngoko
            ],

            // Final Quiz - Ngoko
            [
                "question" => 'Mengko bengi means...',
                "module_id" => 7,
                "type_id" => 1, // Multiple Choice
                "answer" => "Tonight",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 1, // Ngoko
            ],
            [
                "question" => 'How do you say "I can\'t"?',
                "module_id" => 7,
                "type_id" => 1, // Multiple Choice
                "answer" => "Aku ora isa.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 1, // Ngoko
            ],
            [
                "question" => 'The phrase Jam pira? is used to ask...',
                "module_id" => 7,
                "type_id" => 1, // Multiple Choice
                "answer" => "What time?",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 1, // Ngoko
            ],
            [
                "question" => 'How do you say "Let\'s hang out"?',
                "module_id" => 7,
                "type_id" => 1, // Multiple Choice
                "answer" => "Ayo dolan.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 1, // Ngoko
            ],
            [
                "question" => 'To ask "Where should we meet?", you say:',
                "module_id" => 7,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Ketemu neng endi?",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 1, // Ngoko
            ],
            [
                "question" => 'To agree to a plan, you say:',
                "module_id" => 7,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Oke, siyap.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 1, // Ngoko
            ],
            [
                "question" => 'Which phrase means "When?"?',
                "module_id" => 7,
                "type_id" => 1, // Multiple Choice
                "answer" => "Kapan?",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 1, // Ngoko
            ],
            [
                "question" => 'To say "I can\'t," you say:',
                "module_id" => 7,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Aku ora isa.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 1, // Ngoko
            ],

            // Lesson 7.2: Krama Madya - Gawe Janji (Making an Appointment)

            // Learning Phase - Krama Madya
            [
                "question" => 'How do you ask to meet someone tomorrow?',
                "module_id" => 7,
                "type_id" => 1, // Multiple Choice
                "answer" => "Kula saged kepanggih, mbenjang?",
                "is_learning" => true,
                "concept" => "Kula saged kepanggih, mbenjang? (Can I meet you tomorrow?)",
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'To politely ask "What time?", you say:',
                "module_id" => 7,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Jam pinten?",
                "is_learning" => true,
                "concept" => "Jam pinten? (What time?)",
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'How do you politely agree?',
                "module_id" => 7,
                "type_id" => 1, // Multiple Choice
                "answer" => "Inggih, saged.",
                "is_learning" => true,
                "concept" => "Inggih, saged. (Yes, I can.)",
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'To politely decline, you say:',
                "module_id" => 7,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Mboten saged.",
                "is_learning" => true,
                "concept" => "Mboten saged. (I cannot.)",
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'How do you say "I will wait"?',
                "module_id" => 7,
                "type_id" => 1, // Multiple Choice
                "answer" => "Kula tengga.",
                "is_learning" => true,
                "concept" => "Kula tengga. (I will wait.)",
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'To state you have a purpose for the meeting, you can say:',
                "module_id" => 7,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Wonten perlu.",
                "is_learning" => true,
                "concept" => "Wonten perlu. (There is a need/purpose.)",
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'A polite way to say "Thank you for your time" is:',
                "module_id" => 7,
                "type_id" => 1, // Multiple Choice
                "answer" => "Matur nuwun wekdalipun.",
                "is_learning" => true,
                "concept" => "Matur nuwun wekdalipun. (Thank you for your time.)",
                "javanese_type_id" => 2, // Krama Madya
            ],

            // Final Quiz - Krama Madya
            [
                "question" => 'Mboten saged means...',
                "module_id" => 7,
                "type_id" => 1, // Multiple Choice
                "answer" => "I cannot",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'To politely ask "What time?", you say:',
                "module_id" => 7,
                "type_id" => 1, // Multiple Choice
                "answer" => "Jam pinten?",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'The phrase Kula tengga means...',
                "module_id" => 7,
                "type_id" => 1, // Multiple Choice
                "answer" => "I will wait",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'How do you politely agree to a meeting?',
                "module_id" => 7,
                "type_id" => 1, // Multiple Choice
                "answer" => "Inggih, saged.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'To ask to meet tomorrow, you say:',
                "module_id" => 7,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Kula saged kepanggih, mbenjang?",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'To say "Thank you for your time," you say:',
                "module_id" => 7,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Matur nuwun wekdalipun.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'Which phrase means "There is a need/purpose"?',
                "module_id" => 7,
                "type_id" => 1, // Multiple Choice
                "answer" => "Wonten perlu.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'The polite way to say "I cannot" is:',
                "module_id" => 7,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Mboten saged.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 2, // Krama Madya
            ],

            // Lesson 7.3: Krama Inggil - Nyuwun Pamit (Asking for Permission to Leave)

            // Learning Phase - Krama Inggil
            [
                "question" => 'The most respectful way to signal you are leaving is:',
                "module_id" => 7,
                "type_id" => 1, // Multiple Choice
                "answer" => "Kula badhe nyuwun pamit.",
                "is_learning" => true,
                "concept" => "Kula badhe nyuwun pamit. (I am about to ask for permission to leave.)",
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'A respectful reason for leaving is:',
                "module_id" => 7,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Awit sampun dalu.",
                "is_learning" => true,
                "concept" => "Awit sampun dalu. (Because it is already late at night.)",
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'When leaving an elder\'s presence, you ask for their blessing by saying:',
                "module_id" => 7,
                "type_id" => 1, // Multiple Choice
                "answer" => "Nyuwun pangestu.",
                "is_learning" => true,
                "concept" => "Nyuwun pangestu. (I ask for your blessing.)",
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'An elder might reply to your departure with:',
                "module_id" => 7,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Nderekaken sugeng tindak.",
                "is_learning" => true,
                "concept" => "Nderekaken sugeng tindak. (Wishing you a safe journey.)",
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'A common wish for a safe journey is:',
                "module_id" => 7,
                "type_id" => 1, // Multiple Choice
                "answer" => "Mugi-mugi slamet.",
                "is_learning" => true,
                "concept" => "Mugi-mugi slamet. (I hope you are safe.)",
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'To invite an elder to visit again, you say:',
                "module_id" => 7,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Sowan malih.",
                "is_learning" => true,
                "concept" => "Sowan malih. (Visit again.)",
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'The best way to thank an elder for their time is:',
                "module_id" => 7,
                "type_id" => 1, // Multiple Choice
                "answer" => "Matur sembah nuwun.",
                "is_learning" => true,
                "concept" => "Matur sembah nuwun. (Thank you very much - highest form.)",
                "javanese_type_id" => 3, // Krama Inggil
            ],

            // Final Quiz - Krama Inggil
            [
                "question" => 'Nyuwun pangestu means...',
                "module_id" => 7,
                "type_id" => 1, // Multiple Choice
                "answer" => "I ask for your blessing",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'To wish an elder a safe journey, you say:',
                "module_id" => 7,
                "type_id" => 1, // Multiple Choice
                "answer" => "Nderekaken sugeng tindak.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'The phrase Awit sampun dalu means...',
                "module_id" => 7,
                "type_id" => 1, // Multiple Choice
                "answer" => "Because it is already late at night",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'How do you respectfully say you are about to leave?',
                "module_id" => 7,
                "type_id" => 1, // Multiple Choice
                "answer" => "Kula badhe nyuwun pamit.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'The highest form of "Thank you" is:',
                "module_id" => 7,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Matur sembah nuwun.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'To invite an elder to visit again, you say:',
                "module_id" => 7,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Sowan malih.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'Which phrase means "I hope you are safe"?',
                "module_id" => 7,
                "type_id" => 1, // Multiple Choice
                "answer" => "Mugi-mugi slamet.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'To ask for an elder\'s blessing upon leaving, you say:',
                "module_id" => 7,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Nyuwun pangestu.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 3, // Krama Inggil
            ],

            // Lesson 7.4: Gladhen Janjian (Appointments Practice)
            [
                "question" => 'You want to ask your friend to go to the movies tonight. You say:',
                "module_id" => 7,
                "type_id" => 1, // Multiple Choice
                "answer" => "Ayo nonton film mengko bengi.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 4, // Gladhen
            ],
            [
                "question" => 'You need to schedule a meeting with your lecturer. You politely ask:',
                "module_id" => 7,
                "type_id" => 1, // Multiple Choice
                "answer" => "Pak, kula saged kepanggih mbenjang?",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 4, // Gladhen
            ],
            [
                "question" => 'You are at your grandmother\'s house and it\'s getting late. What is the most respectful way to announce you are leaving?',
                "module_id" => 7,
                "type_id" => 1, // Multiple Choice
                "answer" => "Mbah, kula badhe nyuwun pamit.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 4, // Gladhen
            ],
            [
                "question" => 'Your friend asks, "Jam pira?" You want to say, "I can\'t." You reply:',
                "module_id" => 7,
                "type_id" => 1, // Multiple Choice
                "answer" => "Aku ora isa.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 4, // Gladhen
            ],
            [
                "question" => 'A student is asking their teacher for a meeting. They say: "Bu, ayo ketemu sesuk jam 10." Which word is too casual for a teacher?',
                "module_id" => 7,
                "type_id" => 1, // Multiple Choice
                "answer" => "ayo",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 4, // Gladhen
            ],
            [
                "question" => 'You are leaving your grandfather\'s house. He says, "Ati-ati." You reply: "Nggih, Mbah. Matur nuwun." Which phrase could be more respectful?',
                "module_id" => 7,
                "type_id" => 1, // Multiple Choice
                "answer" => "Matur nuwun.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 4, // Gladhen
            ],
            [
                "question" => 'To politely ask "What time?" for an appointment, you say: Jam ______',
                "module_id" => 7,
                "type_id" => 2, // Fill in the Blank
                "answer" => "pinten",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 4, // Gladhen
            ],
            [
                "question" => 'When leaving an elder\'s home, it is customary to ask for their blessing by saying: Nyuwun ______',
                "module_id" => 7,
                "type_id" => 2, // Fill in the Blank
                "answer" => "pangestu",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 4, // Gladhen
            ],
        ]);
    }
}
