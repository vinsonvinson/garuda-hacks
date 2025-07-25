<?php

namespace Database\Seeders;

use App\Models\Choice;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChoiceSeeder10 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Choice::insert([
            // Lesson 10.1: Ngoko - Crita (Telling a Story)
            // Learning Phase
            // Quiz ID 478: "How do you start a story about this morning?" (MC)
            [
                "quiz_id" => 478,
                "text" => "Mau isuk...",
            ],
            [
                "quiz_id" => 478,
                "text" => "Mau bengi...",
            ],
            // Quiz ID 479: (FIB - no choices)
            // Quiz ID 480: "Which phrase means 'After that...'?" (MC)
            [
                "quiz_id" => 480,
                "text" => "Sakdurunge",
            ],
            [
                "quiz_id" => 480,
                "text" => "Bar kuwi...",
            ],
            // Quiz ID 481: (FIB - no choices)
            // Quiz ID 482: "How do you say 'Suddenly...'?" (MC)
            [
                "quiz_id" => 482,
                "text" => "Dumadakan...",
            ],
            [
                "quiz_id" => 482,
                "text" => "Untunge...",
            ],
            // Quiz ID 483: (FIB - no choices)
            // Quiz ID 484: "The word to end your story is:" (MC)
            [
                "quiz_id" => 484,
                "text" => "Wiwitane",
            ],
            [
                "quiz_id" => 484,
                "text" => "Akhire...",
            ],

            // Final Quiz - Ngoko
            // Quiz ID 485: "Jebule... means..." (MC)
            [
                "quiz_id" => 485,
                "text" => "Suddenly...",
            ],
            [
                "quiz_id" => 485,
                "text" => "Turns out...",
            ],
            // Quiz ID 486: "How do you say 'Luckily...'?" (MC)
            [
                "quiz_id" => 486,
                "text" => "Dumadakan...",
            ],
            [
                "quiz_id" => 486,
                "text" => "Untunge...",
            ],
            // Quiz ID 487: "The phrase Bar kuwi... means..." (MC)
            [
                "quiz_id" => 487,
                "text" => "Before that...",
            ],
            [
                "quiz_id" => 487,
                "text" => "After that...",
            ],
            // Quiz ID 488: "How do you say 'This morning...'?" (MC)
            [
                "quiz_id" => 488,
                "text" => "Mau awan...",
            ],
            [
                "quiz_id" => 488,
                "text" => "Mau isuk...",
            ],
            // Quiz ID 489: (FIB - no choices)
            // Quiz ID 490: (FIB - no choices)
            // Quiz ID 491: "Which phrase means 'Suddenly...'?" (MC)
            [
                "quiz_id" => 491,
                "text" => "Dumadakan...",
            ],
            [
                "quiz_id" => 491,
                "text" => "Untunge...",
            ],
            // Quiz ID 492: (FIB - no choices)


            // Lesson 10.2: Krama Madya - Matur Wangsulan (Giving an Answer)
            // Learning Phase - Krama Madya
            // Quiz ID 493: "How do you politely agree?" (MC)
            [
                "quiz_id" => 493,
                "text" => "Ya, bener.",
            ],
            [
                "quiz_id" => 493,
                "text" => "Inggih, leres.",
            ],
            // Quiz ID 494: (FIB - no choices)
            // Quiz ID 495: "To politely express an assumption, you start with:" (MC)
            [
                "quiz_id" => 495,
                "text" => "Kadosipun...",
            ],
            [
                "quiz_id" => 495,
                "text" => "Sanes.",
            ],
            // Quiz ID 496: (FIB - no choices)
            // Quiz ID 497: "How do you politely say 'Not yet'?" (MC)
            [
                "quiz_id" => 497,
                "text" => "Durung.",
            ],
            [
                "quiz_id" => 497,
                "text" => "Dereng.",
            ],
            // Quiz ID 498: (FIB - no choices)
            // Quiz ID 499: "To politely give your opinion, you start with:" (MC)
            [
                "quiz_id" => 499,
                "text" => "Jareku...",
            ],
            [
                "quiz_id" => 499,
                "text" => "Miturut kula...",
            ],

            // Final Quiz - Krama Madya
            // Quiz ID 500: "Dereng means..." (MC)
            [
                "quiz_id" => 500,
                "text" => "Already",
            ],
            [
                "quiz_id" => 500,
                "text" => "Not yet",
            ],
            // Quiz ID 501: "To politely say 'No,' you say:" (MC)
            [
                "quiz_id" => 501,
                "text" => "Ora.",
            ],
            [
                "quiz_id" => 501,
                "text" => "Mboten.",
            ],
            // Quiz ID 502: "The phrase Kadosipun... means..." (MC)
            [
                "quiz_id" => 502,
                "text" => "It seems...",
            ],
            [
                "quiz_id" => 502,
                "text" => "In my opinion...",
            ],
            // Quiz ID 503: "How do you politely agree?" (MC)
            [
                "quiz_id" => 503,
                "text" => "Ya, bener.",
            ],
            [
                "quiz_id" => 503,
                "text" => "Inggih, leres.",
            ],
            // Quiz ID 504: (FIB - no choices)
            // Quiz ID 505: (FIB - no choices)
            // Quiz ID 506: "Which phrase means 'In my opinion...'?" (MC)
            [
                "quiz_id" => 506,
                "text" => "Miturut kula...",
            ],
            [
                "quiz_id" => 506,
                "text" => "Kadosipun...",
            ],
            // Quiz ID 507: (FIB - no choices)


            // Lesson 10.3: Krama Inggil - Ngendikakaken Simbah (Speaking About Elders)
            // Learning Phase - Krama Inggil
            // Quiz ID 508: "To respectfully quote an elder, you start with:" (MC)
            [
                "quiz_id" => 508,
                "text" => "Jarene...",
            ],
            [
                "quiz_id" => 508,
                "text" => "Ngendikanipun...",
            ],
            // Quiz ID 509: (FIB - no choices)
            // Quiz ID 510: "The respectful verb for 'to eat' is:" (MC)
            [
                "quiz_id" => 510,
                "text" => "nedha",
            ],
            [
                "quiz_id" => 510,
                "text" => "dhahar",
            ],
            // Quiz ID 511: (FIB - no choices)
            // Quiz ID 512: "The respectful word for 'sick' is:" (MC)
            [
                "quiz_id" => 512,
                "text" => "lara",
            ],
            [
                "quiz_id" => 512,
                "text" => "gerah",
            ],
            // Quiz ID 513: (FIB - no choices)
            // Quiz ID 514: "To say an elder was given something, you use:" (MC)
            [
                "quiz_id" => 514,
                "text" => "Diwenehi",
            ],
            [
                "quiz_id" => 514,
                "text" => "Dipun paringi",
            ],

            // Final Quiz - Krama Inggil
            // Quiz ID 515: "Gerah is the respectful word for..." (MC)
            [
                "quiz_id" => 515,
                "text" => "Healthy",
            ],
            [
                "quiz_id" => 515,
                "text" => "Sick",
            ],
            // Quiz ID 516: "The respectful verb for 'to go' is:" (MC)
            [
                "quiz_id" => 516,
                "text" => "lunga",
            ],
            [
                "quiz_id" => 516,
                "text" => "tindak",
            ],
            // Quiz ID 517: "The phrase Ngendikanipun... means..." (MC)
            [
                "quiz_id" => 517,
                "text" => "He/She thinks...",
            ],
            [
                "quiz_id" => 517,
                "text" => "He/She said...",
            ],
            // Quiz ID 518: "How do you respectfully say an elder is sleeping?" (MC)
            [
                "quiz_id" => 518,
                "text" => "Lagi turu.",
            ],
            [
                "quiz_id" => 518,
                "text" => "Nembe sare.",
            ],
            // Quiz ID 519: (FIB - no choices)
            // Quiz ID 520: (FIB - no choices)
            // Quiz ID 521: "Which phrase means 'to be given'?" (MC)
            [
                "quiz_id" => 521,
                "text" => "Dipun paringi",
            ],
            [
                "quiz_id" => 521,
                "text" => "Maringi",
            ],
            // Quiz ID 522: (FIB - no choices)


            // Lesson 10.4: Gladhen Crita (Narration Practice)
            // Quiz ID 523: "You are telling your friend a surprising story. You say:" (MC)
            [
                "quiz_id" => 523,
                "text" => "Jebule...",
            ],
            [
                "quiz_id" => 523,
                "text" => "Kadosipun...",
            ],
            [
                "quiz_id" => 523,
                "text" => "Miturut kula...",
            ],
            // Quiz ID 524: "Your manager asks if you have finished your report. You have. You politely reply:" (MC)
            [
                "quiz_id" => 524,
                "text" => "Inggih, wis.",
            ],
            [
                "quiz_id" => 524,
                "text" => "Sampun, Pak.",
            ],
            [
                "quiz_id" => 524,
                "text" => "Dereng, Pak.",
            ],
            // Quiz ID 525: "You are telling your teacher what your grandfather said." (MC)
            [
                "quiz_id" => 525,
                "text" => "Jarene simbah...",
            ],
            [
                "quiz_id" => 525,
                "text" => "Simbah ngomong...",
            ],
            [
                "quiz_id" => 525,
                "text" => "Ngendikanipun eyang...",
            ],
            // Quiz ID 526: "Your friend asks if you are coming to the party. You haven't decided yet. You say:" (MC)
            [
                "quiz_id" => 526,
                "text" => "Mboten.",
            ],
            [
                "quiz_id" => 526,
                "text" => "Durung ngerti.",
            ],
            [
                "quiz_id" => 526,
                "text" => "Dereng.",
            ],
            // Quiz ID 527: "A student is politely answering their teacher's question..." (MC)
            [
                "quiz_id" => 527,
                "text" => "Miturut kula",
            ],
            [
                "quiz_id" => 527,
                "text" => "jawabane",
            ],
            [
                "quiz_id" => 527,
                "text" => "salah",
            ],
            // Quiz ID 528: "You are telling your boss about your father..." (MC)
            [
                "quiz_id" => 528,
                "text" => "Bapak kula",
            ],
            [
                "quiz_id" => 528,
                "text" => "nembe",
            ],
            [
                "quiz_id" => 528,
                "text" => "lara",
            ],
            // Quiz ID 529: (FIB - no choices)
            // Quiz ID 530: (FIB - no choices)
        ]);
    }
}
