<?php

namespace Database\Seeders;

use App\Models\Quiz;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuizSeeder8 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Module 8 Theme: Daily Life Scenarios
        // Lesson 8.1: Ngoko - Ing Sekolah (At School)

        Quiz::insert([
            // Learning Phase - Ngoko
            // Concept: Sinau bareng. (Study together.)
            [
                "question" => "How do you invite friends to study together?",
                "module_id" => 8,
                "type_id" => 1, // Multiple Choice
                "answer" => "Ayo sinau bareng.",
                "is_learning" => true,
                "concept" => "Sinau bareng. (Study together.)",
                "javanese_type_id" => 1, // Ngoko
            ],
            // Concept: PR-e angel. (The homework is difficult.)
            [
                "question" => "When the homework is hard, you say:",
                "module_id" => 8,
                "type_id" => 2, // Fill in the Blank
                "answer" => "PR-e angel.",
                "is_learning" => true,
                "concept" => "PR-e angel. (The homework is difficult.)",
                "javanese_type_id" => 1, // Ngoko
            ],
            // Concept: Aku entuk biji apik. (I got a good grade.)
            [
                "question" => 'How do you say "I got a good grade"?',
                "module_id" => 8,
                "type_id" => 1, // Multiple Choice
                "answer" => "Aku entuk biji apik.",
                "is_learning" => true,
                "concept" => "Aku entuk biji apik. (I got a good grade.)",
                "javanese_type_id" => 1, // Ngoko
            ],
            // Concept: Mbolos. (To skip class.)
            [
                "question" => "The casual term for skipping class is:",
                "module_id" => 8,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Mbolos.",
                "is_learning" => true,
                "concept" => "Mbolos. (To skip class.)",
                "javanese_type_id" => 1, // Ngoko
            ],
            // Concept: Gurune galak. (The teacher is fierce.)
            [
                "question" => "If the teacher is strict, you might say:",
                "module_id" => 8,
                "type_id" => 1, // Multiple Choice
                "answer" => "Gurune galak.",
                "is_learning" => true,
                "concept" => "Gurune galak. (The teacher is fierce.)",
                "javanese_type_id" => 1, // Ngoko
            ],
            // Concept: Sesuk prei. (Tomorrow is a holiday.)
            [
                "question" => 'To say "Tomorrow is a holiday," you say:',
                "module_id" => 8,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Sesuk prei.",
                "is_learning" => true,
                "concept" => "Sesuk prei. (Tomorrow is a holiday.)",
                "javanese_type_id" => 1, // Ngoko
            ],
            // Concept: Kantin, yuk! (Let's go to the canteen!)
            [
                "question" => "How do you invite a friend to the canteen?",
                "module_id" => 8,
                "type_id" => 1, // Multiple Choice
                "answer" => "Kantin, yuk!",
                "is_learning" => true,
                "concept" => "Kantin, yuk! (Let\'s go to the canteen!)",
                "javanese_type_id" => 1, // Ngoko
            ],

            // Final Quiz - Ngoko
            [
                "question" => "PR-e angel means...",
                "module_id" => 8,
                "type_id" => 1, // Multiple Choice
                "answer" => "The homework is difficult",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 1, // Ngoko
            ],
            [
                "question" => 'How do you say "The teacher is fierce"?',
                "module_id" => 8,
                "type_id" => 1, // Multiple Choice
                "answer" => "Gurune galak.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 1, // Ngoko
            ],
            [
                "question" => "The word Mbolos means...",
                "module_id" => 8,
                "type_id" => 1, // Multiple Choice
                "answer" => "To skip class",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 1, // Ngoko
            ],
            [
                "question" => 'How do you say "I got a good grade"?',
                "module_id" => 8,
                "type_id" => 1, // Multiple Choice
                "answer" => "Aku entuk biji apik.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 1, // Ngoko
            ],
            [
                "question" => "To invite friends to study together, you say:",
                "module_id" => 8,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Ayo sinau bareng.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 1, // Ngoko
            ],
            [
                "question" => 'To say "Tomorrow is a holiday," you say:',
                "module_id" => 8,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Sesuk prei.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 1, // Ngoko
            ],
            [
                "question" => 'Which phrase means "Let\'s go to the canteen!"?',
                "module_id" => 8,
                "type_id" => 1, // Multiple Choice
                "answer" => "Kantin, yuk!",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 1, // Ngoko
            ],
            [
                "question" => "The casual term for skipping class is:",
                "module_id" => 8,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Mbolos.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 1, // Ngoko
            ],

            // Lesson 8.2: Krama Madya - Ing Kantor (At the Office)

            // Learning Phase - Krama Madya
            [
                "question" => "How do you inform a colleague about a meeting?",
                "module_id" => 8,
                "type_id" => 1, // Multiple Choice
                "answer" => "Wonten rapat.",
                "is_learning" => true,
                "concept" => "Wonten rapat. (There is a meeting.)",
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'When you\'ve finished a task, you report:',
                "module_id" => 8,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Sampun kula kerjakaken.",
                "is_learning" => true,
                "concept" =>
                    "Sampun kula kerjakaken. (I have already done it.)",
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => "If you are going to be late, you should say:",
                "module_id" => 8,
                "type_id" => 1, // Multiple Choice
                "answer" => "Nyuwun ijin telat.",
                "is_learning" => true,
                "concept" =>
                    "Nyuwun ijin telat. (Asking for permission to be late.)",
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => "The term for working overtime is:",
                "module_id" => 8,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Lembur.",
                "is_learning" => true,
                "concept" => "Lembur. (Overtime.)",
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'How do you say "Send an email"?',
                "module_id" => 8,
                "type_id" => 1, // Multiple Choice
                "answer" => "Kirim email.",
                "is_learning" => true,
                "concept" => "Kirim email. (Send an email.)",
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => "If your schedule is full, you say:",
                "module_id" => 8,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Jadwalipun padhet.",
                "is_learning" => true,
                "concept" => "Jadwalipun padhet. (The schedule is tight.)",
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => "A polite way to end a work discussion is:",
                "module_id" => 8,
                "type_id" => 1, // Multiple Choice
                "answer" => "Matur nuwun kerjasamanipun.",
                "is_learning" => true,
                "concept" =>
                    "Matur nuwun kerjasamanipun. (Thank you for your cooperation.)",
                "javanese_type_id" => 2, // Krama Madya
            ],

            // Final Quiz - Krama Madya
            [
                "question" => "Lembur means...",
                "module_id" => 8,
                "type_id" => 1, // Multiple Choice
                "answer" => "Overtime",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'To say "The schedule is tight," you say:',
                "module_id" => 8,
                "type_id" => 1, // Multiple Choice
                "answer" => "Jadwalipun padhet.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => "The phrase Sampun kula kerjakaken means...",
                "module_id" => 8,
                "type_id" => 1, // Multiple Choice
                "answer" => "I have already done it",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => "How do you ask for permission to be late?",
                "module_id" => 8,
                "type_id" => 1, // Multiple Choice
                "answer" => "Nyuwun ijin telat.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => "To inform about a meeting, you say:",
                "module_id" => 8,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Wonten rapat.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'To say "Send an email," you say:',
                "module_id" => 8,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Kirim email.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" =>
                    'Which phrase means "Thank you for your cooperation"?',
                "module_id" => 8,
                "type_id" => 1, // Multiple Choice
                "answer" => "Matur nuwun kerjasamanipun.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => "The term for working overtime is:",
                "module_id" => 8,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Lembur.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 2, // Krama Madya
            ],

            // Lesson 8.3: Krama Inggil - Ing Pawiwahan (At a Formal Ceremony)

            // Learning Phase - Krama Inggil
            [
                "question" =>
                    "How do you welcome a respected guest to a ceremony?",
                "module_id" => 8,
                "type_id" => 1, // Multiple Choice
                "answer" => "Sugeng rawuh.",
                "is_learning" => true,
                "concept" => "Sugeng rawuh. (Welcome.)",
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" =>
                    "To congratulate the hosts of a wedding, you say:",
                "module_id" => 8,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Nderek mangayubagya.",
                "is_learning" => true,
                "concept" =>
                    "Nderek mangayubagya. (I join in celebrating your happiness.)",
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => "To start a hopeful wish or prayer, you say:",
                "module_id" => 8,
                "type_id" => 1, // Multiple Choice
                "answer" => "Mugi-mugi",
                "is_learning" => true,
                "concept" => "Mugi-mugi... (I hope that...)",
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => "When walking behind an elder, you say:",
                "module_id" => 8,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Nderekaken.",
                "is_learning" => true,
                "concept" => "Nderekaken. (Following you / showing respect.)",
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" =>
                    "An elder gives their blessing. This action is called:",
                "module_id" => 8,
                "type_id" => 1, // Multiple Choice
                "answer" => "Paring pangestu.",
                "is_learning" => true,
                "concept" => "Paring pangestu. (To give a blessing.)",
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" =>
                    "To say you were invited, you say: Kula ________.",
                "module_id" => 8,
                "type_id" => 2, // Fill in the Blank
                "answer" => "dipun aturi.",
                "is_learning" => true,
                "concept" => "Dipun aturi. (To be invited/offered.)",
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'The highest form of "Thank you" to the host is:',
                "module_id" => 8,
                "type_id" => 1, // Multiple Choice
                "answer" => "Matur sembah nuwun.",
                "is_learning" => true,
                "concept" =>
                    "Matur sembah nuwun. (Thank you very much - highest form.)",
                "javanese_type_id" => 3, // Krama Inggil
            ],

            // Final Quiz - Krama Inggil
            [
                "question" => "Nderek mangayubagya is a phrase for...",
                "module_id" => 8,
                "type_id" => 1, // Multiple Choice
                "answer" => "Congratulating",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => "The phrase Paring pangestu means:",
                "module_id" => 8,
                "type_id" => 1, // Multiple Choice
                "answer" => "To give a blessing",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'The highest form of "Welcome" is:',
                "module_id" => 8,
                "type_id" => 1, // Multiple Choice
                "answer" => "Sugeng rawuh.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" =>
                    "How do you respectfully say you are walking behind an elder?",
                "module_id" => 8,
                "type_id" => 1, // Multiple Choice
                "answer" => "Nderekaken.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => "To start a hopeful wish, you say:",
                "module_id" => 8,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Mugi-mugi",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'The highest form of "Thank you" is:',
                "module_id" => 8,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Matur sembah nuwun.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'Which phrase means "to be invited"?',
                "module_id" => 8,
                "type_id" => 1, // Multiple Choice
                "answer" => "Dipun aturi",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" =>
                    "To congratulate the hosts of a wedding, you say:",
                "module_id" => 8,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Nderek mangayubagya.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 3, // Krama Inggil
            ],

            // Lesson 8.4: Gladhen Kahanan (Situational Practice)
            [
                "question" =>
                    "You did well on an exam and want to tell your friend. You say:",
                "module_id" => 8,
                "type_id" => 1, // Multiple Choice
                "answer" => "Aku entuk biji apik!",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 4, // Gladhen
            ],
            [
                "question" =>
                    "You need to inform your manager that you will be working overtime tonight. You say:",
                "module_id" => 8,
                "type_id" => 1, // Multiple Choice
                "answer" => "Pak, kula badhe lembur dalu niki.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 4, // Gladhen
            ],
            [
                "question" =>
                    'You are at a wedding and want to congratulate the bride\'s parents, who are respected community figures. You say:',
                "module_id" => 8,
                "type_id" => 1, // Multiple Choice
                "answer" => "Nderek mangayubagya, Pak.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 4, // Gladhen
            ],
            [
                "question" =>
                    "Your friend complains that the teacher is fierce. They say:",
                "module_id" => 8,
                "type_id" => 1, // Multiple Choice
                "answer" => "Gurune galak.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 4, // Gladhen
            ],
            [
                "question" =>
                    'A new employee is telling their boss they have finished a task. They say: "Pak, tugase wis tak garap." Which part of the phrase is too casual for a boss?',
                "module_id" => 8,
                "type_id" => 1, // Multiple Choice
                "answer" => "wis tak garap",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 4, // Gladhen
            ],
            [
                "question" =>
                    'You are at a formal ceremony and an elder offers you a seat. You reply: "Nggih, matur nuwun." Which phrase, while polite, could be more respectful for the situation?',
                "module_id" => 8,
                "type_id" => 1, // Multiple Choice
                "answer" => "matur nuwun",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 4, // Gladhen
            ],
            [
                "question" =>
                    'To politely say "The schedule is tight" to a colleague, you say: Jadwalipun ______',
                "module_id" => 8,
                "type_id" => 2, // Fill in the Blank
                "answer" => "padhet",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 4, // Gladhen
            ],
            [
                "question" =>
                    'A respectful way to say "Welcome" to guests at a formal event is: Sugeng ______',
                "module_id" => 8,
                "type_id" => 2, // Fill in the Blank
                "answer" => "rawuh",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 4, // Gladhen
            ],
        ]);
    }
}
