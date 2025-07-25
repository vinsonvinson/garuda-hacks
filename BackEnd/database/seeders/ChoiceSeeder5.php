<?php

namespace Database\Seeders;

use App\Models\Choice;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChoiceSeeder5 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Choice::insert([
            // Lesson 5.1: Ngoko - Mlaku-mlaku (Going for a Walk/Stroll)
            // Learning Phase
            // Quiz ID 213: "How do you invite a friend for a walk?" (MC)
            [
                "quiz_id" => 213,
                "text" => "Ayo mlaku-mlaku.",
            ],
            [
                "quiz_id" => 213,
                "text" => "Ayo dolan.",
            ],
            // Quiz ID 214: (FIB - no choices)
            // Quiz ID 215: "How do you say 'Near here'?" (MC)
            [
                "quiz_id" => 215,
                "text" => "Adoh",
            ],
            [
                "quiz_id" => 215,
                "text" => "Cedhak kene.",
            ],
            // Quiz ID 216: (FIB - no choices)
            // Quiz ID 217: "How do you ask what vehicle to take?" (MC)
            [
                "quiz_id" => 217,
                "text" => "Numpak apa?",
            ],
            [
                "quiz_id" => 217,
                "text" => "Mlaku wae.",
            ],
            // Quiz ID 218: (FIB - no choices)
            // Quiz ID 219: "When you're ready to leave, you say:" (MC)
            [
                "quiz_id" => 219,
                "text" => "Ayo mulih.",
            ],
            [
                "quiz_id" => 219,
                "text" => "Ayo budhal.",
            ],

            // Final Quiz - Ngoko
            // Quiz ID 220: "Adoh means..." (MC)
            [
                "quiz_id" => 220,
                "text" => "Near",
            ],
            [
                "quiz_id" => 220,
                "text" => "Far",
            ],
            // Quiz ID 221: "How do you say 'Just walk'?" (MC)
            [
                "quiz_id" => 221,
                "text" => "Numpak apa?",
            ],
            [
                "quiz_id" => 221,
                "text" => "Mlaku wae.",
            ],
            // Quiz ID 222: "The phrase Ayo budhal means..." (MC)
            [
                "quiz_id" => 222,
                "text" => "Let\'s go home",
            ],
            [
                "quiz_id" => 222,
                "text" => "Let\'s go/depart",
            ],
            // Quiz ID 223: "How do you say 'Near here'?" (MC)
            [
                "quiz_id" => 223,
                "text" => "Adoh.",
            ],
            [
                "quiz_id" => 223,
                "text" => "Cedhak kene.",
            ],
            // Quiz ID 224: (FIB - no choices)
            // Quiz ID 225: (FIB - no choices)
            // Quiz ID 226: "Which phrase means 'Let\'s go for a walk'?" (MC)
            [
                "quiz_id" => 226,
                "text" => "Ayo mlaku-mlaku.",
            ],
            [
                "quiz_id" => 226,
                "text" => "Ayo budhal.",
            ],
            // Quiz ID 227: (FIB - no choices)


            // Lesson 5.2: Krama Madya - Numpak Bis (Riding the Bus)
            // Learning Phase - Krama Madya
            // Quiz ID 228: "To tell the driver you're getting off, you say:" (MC)
            [
                "quiz_id" => 228,
                "text" => "Mandhap ngajeng, nggih.",
            ],
            [
                "quiz_id" => 228,
                "text" => "Mlebet, nggih.",
            ],
            // Quiz ID 229: (FIB - no choices)
            // Quiz ID 230: "How do you say 'To the left'?" (MC)
            [
                "quiz_id" => 230,
                "text" => "Teng tengen.",
            ],
            [
                "quiz_id" => 230,
                "text" => "Teng kiwa.",
            ],
            // Quiz ID 231: (FIB - no choices)
            // Quiz ID 232: "The place to wait for a bus is called:" (MC)
            [
                "quiz_id" => 232,
                "text" => "Stasiun",
            ],
            [
                "quiz_id" => 232,
                "text" => "Halte bis",
            ],
            // Quiz ID 233: (FIB - no choices)
            // Quiz ID 234: "How do you ask if a place is far?" (MC)
            [
                "quiz_id" => 234,
                "text" => "Cedhak mboten?",
            ],
            [
                "quiz_id" => 234,
                "text" => "Tebih mboten?",
            ],

            // Final Quiz - Krama Madya
            // Quiz ID 235: "Tebih means..." (MC)
            [
                "quiz_id" => 235,
                "text" => "Near",
            ],
            [
                "quiz_id" => 235,
                "text" => "Far",
            ],
            // Quiz ID 236: "To ask for the fare, you say:" (MC)
            [
                "quiz_id" => 236,
                "text" => "Regine pinten?",
            ],
            [
                "quiz_id" => 236,
                "text" => "Ongkosipun pinten?",
            ],
            // Quiz ID 237: "The phrase Mandhap ngajeng means..." (MC)
            [
                "quiz_id" => 237,
                "text" => "Get off at the front",
            ],
            [
                "quiz_id" => 237,
                "text" => "Go straight",
            ],
            // Quiz ID 238: "The polite way to say 'To the left' is:" (MC)
            [
                "quiz_id" => 238,
                "text" => "Nang kiwa",
            ],
            [
                "quiz_id" => 238,
                "text" => "Teng kiwa",
            ],
            // Quiz ID 239: (FIB - no choices)
            // Quiz ID 240: (FIB - no choices)
            // Quiz ID 241: "Which phrase means 'Just go straight'?" (MC)
            [
                "quiz_id" => 241,
                "text" => "Lurus mawon.",
            ],
            [
                "quiz_id" => 241,
                "text" => "Teng tengen.",
            ],
            // Quiz ID 242: (FIB - no choices)


            // Lesson 5.3: Krama Inggil - Nyuwun Pirsa Dalan (Respectfully Asking for Directions)
            // Learning Phase - Krama Inggil
            // Quiz ID 243: "The most respectful way to start asking for directions is:" (MC)
            [
                "quiz_id" => 243,
                "text" => "Nyuwun sewu.",
            ],
            [
                "quiz_id" => 243,
                "text" => "Nyuwun pangapunten, badhe nyuwun pirsa.",
            ],
            // Quiz ID 244: (FIB - no choices)
            // Quiz ID 245: "How do you respectfully ask for the way to a place?" (MC)
            [
                "quiz_id" => 245,
                "text" => "Lek arep nang",
            ],
            [
                "quiz_id" => 245,
                "text" => "Menawi tindak dhateng",
            ],
            // Quiz ID 246: (FIB - no choices)
            // Quiz ID 247: "The respectful word for 'to ride' is:" (MC)
            [
                "quiz_id" => 247,
                "text" => "Numpak",
            ],
            [
                "quiz_id" => 247,
                "text" => "Nitih",
            ],
            // Quiz ID 248: (FIB - no choices)
            // Quiz ID 249: "After receiving directions from an elder, you say:" (MC)
            [
                "quiz_id" => 249,
                "text" => "Matur nuwun sanget.",
            ],
            [
                "quiz_id" => 249,
                "text" => "Matur sembah nuwun.",
            ],

            // Final Quiz - Krama Inggil
            // Quiz ID 250: "Dalemipun is the respectful word for..." (MC)
            [
                "quiz_id" => 250,
                "text" => "House",
            ],
            [
                "quiz_id" => 250,
                "text" => "Road",
            ],
            // Quiz ID 251: "The respectful word for 'to ride' a vehicle is:" (MC)
            [
                "quiz_id" => 251,
                "text" => "Numpak",
            ],
            [
                "quiz_id" => 251,
                "text" => "Nitih",
            ],
            // Quiz ID 252: "The phrase Mlampah kemawon means..." (MC)
            [
                "quiz_id" => 252,
                "text" => "Just by walking",
            ],
            [
                "quiz_id" => 252,
                "text" => "Must go straight",
            ],
            // Quiz ID 253: "How do you respectfully ask for the way to a place?" (MC)
            [
                "quiz_id" => 253,
                "text" => "Arep nang",
            ],
            [
                "quiz_id" => 253,
                "text" => "Menawi tindak dhateng",
            ],
            // Quiz ID 254: (FIB - no choices)
            // Quiz ID 255: (FIB - no choices)
            // Quiz ID 256: "Which phrase means 'One must just go straight'?" (MC)
            [
                "quiz_id" => 256,
                "text" => "Kedah lurus kemawon.",
            ],
            [
                "quiz_id" => 256,
                "text" => "Lurus mawon.",
            ],
            // Quiz ID 257: (FIB - no choices)


            // Lesson 5.4: Gladhen Papan (Location & Directions Practice)
            // Quiz ID 258: "You are lost and ask a friendly-looking person your age for directions. You start by saying:" (MC)
            [
                "quiz_id" => 258,
                "text" => "Nyuwun sewu.",
            ],
            [
                "quiz_id" => 258,
                "text" => "Mas, arep takon.",
            ],
            [
                "quiz_id" => 258,
                "text" => "Nyuwun pangapunten.",
            ],
            // Quiz ID 259: "You are on a bus and need to tell the driver you want to get off at the next stop. You say:" (MC)
            [
                "quiz_id" => 259,
                "text" => "Aku mudhun ngarep.",
            ],
            [
                "quiz_id" => 259,
                "text" => "Mandhap ngajeng, nggih.",
            ],
            [
                "quiz_id" => 259,
                "text" => "Kula mandhap.",
            ],
            // Quiz ID 260: "You are asking a respected elder for directions to the main mosque. You start your question with:" (MC)
            [
                "quiz_id" => 260,
                "text" => "Pak, arep takon",
            ],
            [
                "quiz_id" => 260,
                "text" => "Pak, badhe tanglet",
            ],
            [
                "quiz_id" => 260,
                "text" => "Pak, nyuwun pangapunten, badhe nyuwun pirsa",
            ],
            // Quiz ID 261: "An elder tells you that the place you are looking for is far. Which word would they most likely use?" (MC)
            [
                "quiz_id" => 261,
                "text" => "Adoh",
            ],
            [
                "quiz_id" => 261,
                "text" => "Tebih",
            ],
            [
                "quiz_id" => 261,
                "text" => "Doh",
            ],
            // Quiz ID 262: "A tourist is respectfully asking an elder for directions. They ask: 'Pak, omahipun Pak Lurah teng pundi?' Which word is polite, but could be more respectful?" (MC)
            [
                "quiz_id" => 262,
                "text" => "Pak",
            ],
            [
                "quiz_id" => 262,
                "text" => "omahipun",
            ],
            [
                "quiz_id" => 262,
                "text" => "teng pundi",
            ],
            // Quiz ID 263: "You are asking your friend what to ride to get to the city square. You ask: 'Kanggo nang alun-alun, nitih apa?' Which word is too formal for a friend?" (MC)
            [
                "quiz_id" => 263,
                "text" => "nang",
            ],
            [
                "quiz_id" => 263,
                "text" => "nitih",
            ],
            [
                "quiz_id" => 263,
                "text" => "apa",
            ],
            // Quiz ID 264: (FIB - no choices)
            // Quiz ID 265: (FIB - no choices)
        ]);
    }
}
