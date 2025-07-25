<?php

namespace Database\Seeders;

use App\Models\Choice;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChoiceSeeder7 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Choice::insert([
            // Lesson 7.1: Ngoko - Ayo Dolan (Let's Hang Out)
            // Learning Phase
            // Quiz ID 319: "How do you invite a friend to hang out?" (MC)
            [
                "quiz_id" => 319,
                "text" => "Ayo dolan.",
            ],
            [
                "quiz_id" => 319,
                "text" => "Ayo mulih.",
            ],
            // Quiz ID 320: (FIB - no choices)
            // Quiz ID 321: "How do you say 'Tonight'?" (MC)
            [
                "quiz_id" => 321,
                "text" => "Sesuk",
            ],
            [
                "quiz_id" => 321,
                "text" => "Mengko bengi.",
            ],
            // Quiz ID 322: (FIB - no choices)
            // Quiz ID 323: "How do you ask 'What time?'" (MC)
            [
                "quiz_id" => 323,
                "text" => "Jam pira?",
            ],
            [
                "quiz_id" => 323,
                "text" => "Kapan?",
            ],
            // Quiz ID 324: (FIB - no choices)
            // Quiz ID 325: "How do you agree to a plan?" (MC)
            [
                "quiz_id" => 325,
                "text" => "Ora.",
            ],
            [
                "quiz_id" => 325,
                "text" => "Oke, siyap.",
            ],

            // Final Quiz - Ngoko
            // Quiz ID 326: "Mengko bengi means..." (MC)
            [
                "quiz_id" => 326,
                "text" => "Tomorrow",
            ],
            [
                "quiz_id" => 326,
                "text" => "Tonight",
            ],
            // Quiz ID 327: "How do you say 'I can't'?" (MC)
            [
                "quiz_id" => 327,
                "text" => "Oke, siyap.",
            ],
            [
                "quiz_id" => 327,
                "text" => "Aku ora isa.",
            ],
            // Quiz ID 328: "The phrase Jam pira? is used to ask..." (MC)
            [
                "quiz_id" => 328,
                "text" => "What time?",
            ],
            [
                "quiz_id" => 328,
                "text" => "Where?",
            ],
            // Quiz ID 329: "How do you say 'Let's hang out'?" (MC)
            [
                "quiz_id" => 329,
                "text" => "Ayo sinau.",
            ],
            [
                "quiz_id" => 329,
                "text" => "Ayo dolan.",
            ],
            // Quiz ID 330: (FIB - no choices)
            // Quiz ID 331: (FIB - no choices)
            // Quiz ID 332: "Which phrase means 'When?'?" (MC)
            [
                "quiz_id" => 332,
                "text" => "Kapan?",
            ],
            [
                "quiz_id" => 332,
                "text" => "Jam pira?",
            ],
            // Quiz ID 333: (FIB - no choices)


            // Lesson 7.2: Krama Madya - Gawe Janji (Making an Appointment)
            // Learning Phase - Krama Madya
            // Quiz ID 334: "How do you ask to meet someone tomorrow?" (MC)
            [
                "quiz_id" => 334,
                "text" => "Kula saged kepanggih, mbenjang?",
            ],
            [
                "quiz_id" => 334,
                "text" => "Kula badhe sowan.",
            ],
            // Quiz ID 335: (FIB - no choices)
            // Quiz ID 336: "How do you politely agree?" (MC)
            [
                "quiz_id" => 336,
                "text" => "Ya, isa.",
            ],
            [
                "quiz_id" => 336,
                "text" => "Inggih, saged.",
            ],
            // Quiz ID 337: (FIB - no choices)
            // Quiz ID 338: "How do you say 'I will wait'?" (MC)
            [
                "quiz_id" => 338,
                "text" => "Kula tengga.",
            ],
            [
                "quiz_id" => 338,
                "text" => "Kula mangkat.",
            ],
            // Quiz ID 339: (FIB - no choices)
            // Quiz ID 340: "A polite way to say 'Thank you for your time' is:" (MC)
            [
                "quiz_id" => 340,
                "text" => "Matur nuwun sanget.",
            ],
            [
                "quiz_id" => 340,
                "text" => "Matur nuwun wekdalipun.",
            ],

            // Final Quiz - Krama Madya
            // Quiz ID 341: "Mboten saged means..." (MC)
            [
                "quiz_id" => 341,
                "text" => "I can",
            ],
            [
                "quiz_id" => 341,
                "text" => "I cannot",
            ],
            // Quiz ID 342: "To politely ask 'What time?', you say:" (MC)
            [
                "quiz_id" => 342,
                "text" => "Jam pira?",
            ],
            [
                "quiz_id" => 342,
                "text" => "Jam pinten?",
            ],
            // Quiz ID 343: "The phrase Kula tengga means..." (MC)
            [
                "quiz_id" => 343,
                "text" => "I will wait",
            ],
            [
                "quiz_id" => 343,
                "text" => "I will go",
            ],
            // Quiz ID 344: "How do you politely agree to a meeting?" (MC)
            [
                "quiz_id" => 344,
                "text" => "Oke, siyap.",
            ],
            [
                "quiz_id" => 344,
                "text" => "Inggih, saged.",
            ],
            // Quiz ID 345: (FIB - no choices)
            // Quiz ID 346: (FIB - no choices)
            // Quiz ID 347: "Which phrase means 'There is a need/purpose'?" (MC)
            [
                "quiz_id" => 347,
                "text" => "Wonten perlu.",
            ],
            [
                "quiz_id" => 347,
                "text" => "Kula tengga.",
            ],
            // Quiz ID 348: (FIB - no choices)


            // Lesson 7.3: Krama Inggil - Nyuwun Pamit (Asking for Permission to Leave)
            // Learning Phase - Krama Inggil
            // Quiz ID 349: "The most respectful way to signal you are leaving is:" (MC)
            [
                "quiz_id" => 349,
                "text" => "Kula badhe wangsul.",
            ],
            [
                "quiz_id" => 349,
                "text" => "Kula badhe nyuwun pamit.",
            ],
            // Quiz ID 350: (FIB - no choices)
            // Quiz ID 351: "When leaving an elder's presence, you ask for their blessing by saying:" (MC)
            [
                "quiz_id" => 351,
                "text" => "Nyuwun pangestu.",
            ],
            [
                "quiz_id" => 351,
                "text" => "Nyuwun pamit.",
            ],
            // Quiz ID 352: (FIB - no choices)
            // Quiz ID 353: "A common wish for a safe journey is:" (MC)
            [
                "quiz_id" => 353,
                "text" => "Ati-ati.",
            ],
            [
                "quiz_id" => 353,
                "text" => "Mugi-mugi slamet.",
            ],
            // Quiz ID 354: (FIB - no choices)
            // Quiz ID 355: "The best way to thank an elder for their time is:" (MC)
            [
                "quiz_id" => 355,
                "text" => "Matur nuwun sanget.",
            ],
            [
                "quiz_id" => 355,
                "text" => "Matur sembah nuwun.",
            ],

            // Final Quiz - Krama Inggil
            // Quiz ID 356: "Nyuwun pangestu means..." (MC)
            [
                "quiz_id" => 356,
                "text" => "I ask for permission",
            ],
            [
                "quiz_id" => 356,
                "text" => "I ask for your blessing",
            ],
            // Quiz ID 357: "To wish an elder a safe journey, you say:" (MC)
            [
                "quiz_id" => 357,
                "text" => "Ati-ati.",
            ],
            [
                "quiz_id" => 357,
                "text" => "Nderekaken sugeng tindak.",
            ],
            // Quiz ID 358: "The phrase Awit sampun dalu means..." (MC)
            [
                "quiz_id" => 358,
                "text" => "Because it is morning",
            ],
            [
                "quiz_id" => 358,
                "text" => "Because it is already late at night",
            ],
            // Quiz ID 359: "How do you respectfully say you are about to leave?" (MC)
            [
                "quiz_id" => 359,
                "text" => "Kula badhe mantuk.",
            ],
            [
                "quiz_id" => 359,
                "text" => "Kula badhe nyuwun pamit.",
            ],
            // Quiz ID 360: (FIB - no choices)
            // Quiz ID 361: (FIB - no choices)
            // Quiz ID 362: "Which phrase means 'I hope you are safe'?" (MC)
            [
                "quiz_id" => 362,
                "text" => "Mugi-mugi slamet.",
            ],
            [
                "quiz_id" => 362,
                "text" => "Nderekaken sugeng tindak.",
            ],
            // Quiz ID 363: (FIB - no choices)


            // Lesson 7.4: Gladhen Janjian (Appointments Practice)
            // Quiz ID 364: "You want to ask your friend to go to the movies tonight." (MC)
            [
                "quiz_id" => 364,
                "text" => "Ayo nonton film mengko bengi.",
            ],
            [
                "quiz_id" => 364,
                "text" => "Saged nonton film dalu niki?",
            ],
            [
                "quiz_id" => 364,
                "text" => "Badhe nonton film dalu niki.",
            ],
            // Quiz ID 365: "You need to schedule a meeting with your lecturer." (MC)
            [
                "quiz_id" => 365,
                "text" => "Pak, saged ketemu sesuk?",
            ],
            [
                "quiz_id" => 365,
                "text" => "Pak, kula saged kepanggih mbenjang?",
            ],
            [
                "quiz_id" => 365,
                "text" => "Pak, ayo ketemu mbenjang.",
            ],
            // Quiz ID 366: "You are at your grandmother's house and it's getting late." (MC)
            [
                "quiz_id" => 366,
                "text" => "Mbah, kula wangsul riyin.",
            ],
            [
                "quiz_id" => 366,
                "text" => "Mbah, kula pamit.",
            ],
            [
                "quiz_id" => 366,
                "text" => "Mbah, kula badhe nyuwun pamit.",
            ],
            // Quiz ID 367: "Your friend asks, "Jam pira?" You want to say, "I can't." You reply:" (MC)
            [
                "quiz_id" => 367,
                "text" => "Aku ora isa.",
            ],
            [
                "quiz_id" => 367,
                "text" => "Mboten saged.",
            ],
            [
                "quiz_id" => 367,
                "text" => "Kula mboten saged.",
            ],
            // Quiz ID 368: "A student is asking their teacher for a meeting..." (MC)
            [
                "quiz_id" => 368,
                "text" => "ayo",
            ],
            [
                "quiz_id" => 368,
                "text" => "ketemu",
            ],
            [
                "quiz_id" => 368,
                "text" => "sesuk",
            ],
            // Quiz ID 369: "You are leaving your grandfather's house. He says, "Ati-ati." You reply: "Nggih, Mbah. Matur nuwun." Which phrase could be more respectful?" (MC)
            [
                "quiz_id" => 369,
                "text" => "Nggih, Mbah.",
            ],
            [
                "quiz_id" => 369,
                "text" => "Matur nuwun.",
            ],
            // Quiz ID 370: (FIB - no choices)
            // Quiz ID 371: (FIB - no choices)
        ]);
    }
}
