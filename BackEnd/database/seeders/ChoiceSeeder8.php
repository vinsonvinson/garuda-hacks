<?php

namespace Database\Seeders;

use App\Models\Choice;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChoiceSeeder8 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Choice::insert([
            // Lesson 8.1: Ngoko - Ing Sekolah (At School)
            // Learning Phase
            // Quiz ID 372: "How do you invite friends to study together?" (MC)
            [
                "quiz_id" => 372,
                "text" => "Ayo sinau bareng.",
            ],
            [
                "quiz_id" => 372,
                "text" => "Ayo ujian.",
            ],
            // Quiz ID 373: (FIB - no choices)
            // Quiz ID 374: "How do you say 'I got a good grade'?" (MC)
            [
                "quiz_id" => 374,
                "text" => "Bijiku elek.",
            ],
            [
                "quiz_id" => 374,
                "text" => "Aku entuk biji apik.",
            ],
            // Quiz ID 375: (FIB - no choices)
            // Quiz ID 376: "If the teacher is strict, you might say:" (MC)
            [
                "quiz_id" => 376,
                "text" => "Gurune galak.",
            ],
            [
                "quiz_id" => 376,
                "text" => "Gurune apikan.",
            ],
            // Quiz ID 377: (FIB - no choices)
            // Quiz ID 378: "How do you invite a friend to the canteen?" (MC)
            [
                "quiz_id" => 378,
                "text" => "Kelas, yuk!",
            ],
            [
                "quiz_id" => 378,
                "text" => "Kantin, yuk!",
            ],

            // Final Quiz - Ngoko
            // Quiz ID 379: "PR-e angel means..." (MC)
            [
                "quiz_id" => 379,
                "text" => "The homework is easy",
            ],
            [
                "quiz_id" => 379,
                "text" => "The homework is difficult",
            ],
            // Quiz ID 380: "How do you say 'The teacher is fierce'?" (MC)
            [
                "quiz_id" => 380,
                "text" => "Gurune apikan.",
            ],
            [
                "quiz_id" => 380,
                "text" => "Gurune galak.",
            ],
            // Quiz ID 381: "The word Mbolos means..." (MC)
            [
                "quiz_id" => 381,
                "text" => "To study",
            ],
            [
                "quiz_id" => 381,
                "text" => "To skip class",
            ],
            // Quiz ID 382: "How do you say 'I got a good grade'?" (MC)
            [
                "quiz_id" => 382,
                "text" => "Bijiku elek.",
            ],
            [
                "quiz_id" => 382,
                "text" => "Aku entuk biji apik.",
            ],
            // Quiz ID 383: (FIB - no choices)
            // Quiz ID 384: (FIB - no choices)
            // Quiz ID 385: "Which phrase means 'Let\'s go to the canteen!'?" (MC)
            [
                "quiz_id" => 385,
                "text" => "Kantin, yuk!",
            ],
            [
                "quiz_id" => 385,
                "text" => "Sinau bareng.",
            ],
            // Quiz ID 386: (FIB - no choices)


            // Lesson 8.2: Krama Madya - Ing Kantor (At the Office)
            // Learning Phase - Krama Madya
            // Quiz ID 387: "How do you inform a colleague about a meeting?" (MC)
            [
                "quiz_id" => 387,
                "text" => "Wonten rapat.",
            ],
            [
                "quiz_id" => 387,
                "text" => "Wonten tugas.",
            ],
            // Quiz ID 388: (FIB - no choices)
            // Quiz ID 389: "If you are going to be late, you should say:" (MC)
            [
                "quiz_id" => 389,
                "text" => "Kula telat.",
            ],
            [
                "quiz_id" => 389,
                "text" => "Nyuwun ijin telat.",
            ],
            // Quiz ID 390: (FIB - no choices)
            // Quiz ID 391: "How do you say 'Send an email'?" (MC)
            [
                "quiz_id" => 391,
                "text" => "Kirim email.",
            ],
            [
                "quiz_id" => 391,
                "text" => "Nampi email.",
            ],
            // Quiz ID 392: (FIB - no choices)
            // Quiz ID 393: "A polite way to end a work discussion is:" (MC)
            [
                "quiz_id" => 393,
                "text" => "Matur nuwun sanget.",
            ],
            [
                "quiz_id" => 393,
                "text" => "Matur nuwun kerjasamanipun.",
            ],

            // Final Quiz - Krama Madya
            // Quiz ID 394: "Lembur means..." (MC)
            [
                "quiz_id" => 394,
                "text" => "Meeting",
            ],
            [
                "quiz_id" => 394,
                "text" => "Overtime",
            ],
            // Quiz ID 395: "To say 'The schedule is tight,' you say:" (MC)
            [
                "quiz_id" => 395,
                "text" => "Wonten rapat.",
            ],
            [
                "quiz_id" => 395,
                "text" => "Jadwalipun padhet.",
            ],
            // Quiz ID 396: "The phrase Sampun kula kerjakaken means..." (MC)
            [
                "quiz_id" => 396,
                "text" => "I will do it",
            ],
            [
                "quiz_id" => 396,
                "text" => "I have already done it",
            ],
            // Quiz ID 397: "How do you ask for permission to be late?" (MC)
            [
                "quiz_id" => 397,
                "text" => "Aku telat.",
            ],
            [
                "quiz_id" => 397,
                "text" => "Nyuwun ijin telat.",
            ],
            // Quiz ID 398: (FIB - no choices)
            // Quiz ID 399: (FIB - no choices)
            // Quiz ID 400: "Which phrase means 'Thank you for your cooperation'?" (MC)
            [
                "quiz_id" => 400,
                "text" => "Matur nuwun kerjasamanipun.",
            ],
            [
                "quiz_id" => 400,
                "text" => "Matur nuwun wekdalipun.",
            ],
            // Quiz ID 401: (FIB - no choices)


            // Lesson 8.3: Krama Inggil - Ing Pawiwahan (At a Formal Ceremony)
            // Learning Phase - Krama Inggil
            // Quiz ID 402: "How do you welcome a respected guest to a ceremony?" (MC)
            [
                "quiz_id" => 402,
                "text" => "Sugeng dugi.",
            ],
            [
                "quiz_id" => 402,
                "text" => "Sugeng rawuh.",
            ],
            // Quiz ID 403: (FIB - no choices)
            // Quiz ID 404: "To start a hopeful wish or prayer, you say:" (MC)
            [
                "quiz_id" => 404,
                "text" => "Mugi-mugi...",
            ],
            [
                "quiz_id" => 404,
                "text" => "Menawi...",
            ],
            // Quiz ID 405: (FIB - no choices)
            // Quiz ID 406: "An elder gives their blessing. This action is called:" (MC)
            [
                "quiz_id" => 406,
                "text" => "Nyuwun pangestu.",
            ],
            [
                "quiz_id" => 406,
                "text" => "Paring pangestu.",
            ],
            // Quiz ID 407: (FIB - no choices)
            // Quiz ID 408: "The highest form of 'Thank you' to the host is:" (MC)
            [
                "quiz_id" => 408,
                "text" => "Matur nuwun sanget.",
            ],
            [
                "quiz_id" => 408,
                "text" => "Matur sembah nuwun.",
            ],

            // Final Quiz - Krama Inggil
            // Quiz ID 409: "Nderek mangayubagya is a phrase for..." (MC)
            [
                "quiz_id" => 409,
                "text" => "Apologizing",
            ],
            [
                "quiz_id" => 409,
                "text" => "Congratulating",
            ],
            // Quiz ID 410: "The phrase Paring pangestu means:" (MC)
            [
                "quiz_id" => 410,
                "text" => "To ask for a blessing",
            ],
            [
                "quiz_id" => 410,
                "text" => "To give a blessing",
            ],
            // Quiz ID 411: "The highest form of 'Welcome' is:" (MC)
            [
                "quiz_id" => 411,
                "text" => "Sugeng dugi.",
            ],
            [
                "quiz_id" => 411,
                "text" => "Sugeng rawuh.",
            ],
            // Quiz ID 412: "How do you respectfully say you are walking behind an elder?" (MC)
            [
                "quiz_id" => 412,
                "text" => "Aku neng mburimu.",
            ],
            [
                "quiz_id" => 412,
                "text" => "Nderekaken.",
            ],
            // Quiz ID 413: (FIB - no choices)
            // Quiz ID 414: (FIB - no choices)
            // Quiz ID 415: "Which phrase means 'to be invited'?" (MC)
            [
                "quiz_id" => 415,
                "text" => "Dipun aturi",
            ],
            [
                "quiz_id" => 415,
                "text" => "Ngaturi",
            ],
            // Quiz ID 416: (FIB - no choices)


            // Lesson 8.4: Gladhen Kahanan (Situational Practice)
            // Quiz ID 417: "You did well on an exam and want to tell your friend." (MC)
            [
                "quiz_id" => 417,
                "text" => "Aku entuk biji apik!",
            ],
            [
                "quiz_id" => 417,
                "text" => "Kula angsal biji sae.",
            ],
            [
                "quiz_id" => 417,
                "text" => "Kula pikantuk biji sae.",
            ],
            // Quiz ID 418: "You need to inform your manager that you will be working overtime tonight." (MC)
            [
                "quiz_id" => 418,
                "text" => "Pak, aku lembur ya.",
            ],
            [
                "quiz_id" => 418,
                "text" => "Pak, kula badhe lembur dalu niki.",
            ],
            [
                "quiz_id" => 418,
                "text" => "Pak, kula ajeng lembur.",
            ],
            // Quiz ID 419: "You are at a wedding and want to congratulate the bride's parents..." (MC)
            [
                "quiz_id" => 419,
                "text" => "Selamat nggih, Pak.",
            ],
            [
                "quiz_id" => 419,
                "text" => "Nderek bingah, Pak.",
            ],
            [
                "quiz_id" => 419,
                "text" => "Nderek mangayubagya, Pak.",
            ],
            // Quiz ID 420: "Your friend complains that the teacher is fierce." (MC)
            [
                "quiz_id" => 420,
                "text" => "Gurune galak.",
            ],
            [
                "quiz_id" => 420,
                "text" => "Gurune sae.",
            ],
            [
                "quiz_id" => 420,
                "text" => "Gurune kirang sae.",
            ],
            // Quiz ID 421: "A new employee is telling their boss they have finished a task..." (MC)
            [
                "quiz_id" => 421,
                "text" => "Pak",
            ],
            [
                "quiz_id" => 421,
                "text" => "tugase",
            ],
            [
                "quiz_id" => 421,
                "text" => "wis tak garap",
            ],
            // Quiz ID 422: "You are at a formal ceremony and an elder offers you a seat..." (MC)
            [
                "quiz_id" => 422,
                "text" => "Nggih",
            ],
            [
                "quiz_id" => 422,
                "text" => "matur nuwun",
            ],
            // Quiz ID 423: (FIB - no choices)
            // Quiz ID 424: (FIB - no choices)
        ]);
    }
}
