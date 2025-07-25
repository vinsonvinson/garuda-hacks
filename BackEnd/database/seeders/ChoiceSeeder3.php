<?php

namespace Database\Seeders;

use App\Models\Choice;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChoiceSeeder3 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Choice::insert([
            // Lesson 3.1: Ngoko - Jajan (Snacking/Eating Out)
            // Learning Phase
            // Quiz ID 107: "How do you say 'I'm hungry'?" (MC)
            [
                "quiz_id" => 107,
                "text" => "Aku luwe.",
            ],
            [
                "quiz_id" => 107,
                "text" => "Aku ngelak.",
            ],
            // Quiz ID 108: (FIB - no choices in this table)
            // Quiz ID 109: "How do you order one item?" (MC)
            [
                "quiz_id" => 109,
                "text" => "Pesen siji.",
            ],
            [
                "quiz_id" => 109,
                "text" => "Enak tenan.",
            ],
            // Quiz ID 110: (FIB - no choices)
            // Quiz ID 111: "How do you say you're full?" (MC)
            [
                "quiz_id" => 111,
                "text" => "Aku luwe.",
            ],
            [
                "quiz_id" => 111,
                "text" => "Wis wareg.",
            ],
            // Quiz ID 112: (FIB - no choices)
            // Quiz ID 113: "What is the word for 'to pay'?" (MC)
            [
                "quiz_id" => 113,
                "text" => "Pesen",
            ],
            [
                "quiz_id" => 113,
                "text" => "Mbayar",
            ],

            // Final Quiz - Ngoko
            // Quiz ID 114: "Aku ngelak. means..." (MC)
            [
                "quiz_id" => 114,
                "text" => "I\'m hungry",
            ],
            [
                "quiz_id" => 114,
                "text" => "I\'m thirsty",
            ],
            // Quiz ID 115: "How do you say 'Really delicious'?" (MC)
            [
                "quiz_id" => 115,
                "text" => "Wis wareg.",
            ],
            [
                "quiz_id" => 115,
                "text" => "Enak tenan.",
            ],
            // Quiz ID 116: "The word Pesen means..." (MC)
            [
                "quiz_id" => 116,
                "text" => "To order",
            ],
            [
                "quiz_id" => 116,
                "text" => "To pay",
            ],
            // Quiz ID 117: "How do you say 'I\'m full'?" (MC)
            [
                "quiz_id" => 117,
                "text" => "Aku luwe.",
            ],
            [
                "quiz_id" => 117,
                "text" => "Wis wareg.",
            ],
            // Quiz ID 118: (FIB - no choices)
            // Quiz ID 119: (FIB - no choices)
            // Quiz ID 120: "Which phrase means 'to pay'?" (MC)
            [
                "quiz_id" => 120,
                "text" => "Mbayar",
            ],
            [
                "quiz_id" => 120,
                "text" => "Pesen",
            ],
            // Quiz ID 121: (FIB - no choices)


            // Lesson 3.2: Krama Madya - Mertamu (Being a Guest)
            // Learning Phase - Krama Madya
            // Quiz ID 122: "When arriving at someone's house, you say:" (MC)
            [
                "quiz_id" => 122,
                "text" => "Kula nuwun.",
            ],
            [
                "quiz_id" => 122,
                "text" => "Nyuwun pamit.",
            ],
            // Quiz ID 123: (FIB - no choices)
            // Quiz ID 124: "To say 'Thank you very much,' you say:" (MC)
            [
                "quiz_id" => 124,
                "text" => "Matur nuwun.",
            ],
            [
                "quiz_id" => 124,
                "text" => "Matur nuwun sanget.",
            ],
            // Quiz ID 125: (FIB - no choices)
            // Quiz ID 126: "The polite word for 'delicious' is:" (MC)
            [
                "quiz_id" => 126,
                "text" => "Enak.",
            ],
            [
                "quiz_id" => 126,
                "text" => "Eco.",
            ],
            // Quiz ID 127: (FIB - no choices)
            // Quiz ID 128: "When you are about to leave, you say:" (MC)
            [
                "quiz_id" => 128,
                "text" => "Kula nuwun.",
            ],
            [
                "quiz_id" => 128,
                "text" => "Nyuwun pamit.",
            ],

            // Final Quiz - Krama Madya
            // Quiz ID 129: "Eco means..." (MC)
            [
                "quiz_id" => 129,
                "text" => "Delicious",
            ],
            [
                "quiz_id" => 129,
                "text" => "Enough",
            ],
            // Quiz ID 130: "To ask for permission to leave, you say:" (MC)
            [
                "quiz_id" => 130,
                "text" => "Kula nuwun.",
            ],
            [
                "quiz_id" => 130,
                "text" => "Nyuwun pamit.",
            ],
            // Quiz ID 131: "The phrase Monggo pinarak means..." (MC)
            [
                "quiz_id" => 131,
                "text" => "Please have a seat",
            ],
            [
                "quiz_id" => 131,
                "text" => "Don\'t trouble yourself",
            ],
            // Quiz ID 132: "How do you say 'Thank you very much'?" (MC)
            [
                "quiz_id" => 132,
                "text" => "Matur nuwun.",
            ],
            [
                "quiz_id" => 132,
                "text" => "Matur nuwun sanget.",
            ],
            // Quiz ID 133: (FIB - no choices)
            // Quiz ID 134: (FIB - no choices)
            // Quiz ID 135: "Which phrase means 'Don\'t trouble yourself'?" (MC)
            [
                "quiz_id" => 135,
                "text" => "Ampun repot-repot.",
            ],
            [
                "quiz_id" => 135,
                "text" => "Sampun cekap.",
            ],
            // Quiz ID 136: (FIB - no choices)


            // Lesson 3.3: Krama Inggil - Nyuguh Dhaharan (Serving Food)
            // Learning Phase - Krama Inggil
            // Quiz ID 137: "To respectfully offer food to an elder, you say:" (MC)
            [
                "quiz_id" => 137,
                "text" => "Monggo dipangan.",
            ],
            [
                "quiz_id" => 137,
                "text" => "Mangga dipun dhahar.",
            ],
            // Quiz ID 138: (FIB - no choices)
            // Quiz ID 139: "The respectful word for 'the taste' is:" (MC)
            [
                "quiz_id" => 139,
                "text" => "Raosipun",
            ],
            [
                "quiz_id" => 139,
                "text" => "Rasane",
            ],
            // Quiz ID 140: (FIB - no choices)
            // Quiz ID 141: "How do you offer more food to an elder?" (MC)
            [
                "quiz_id" => 141,
                "text" => "Nambah maneh.",
            ],
            [
                "quiz_id" => 141,
                "text" => "Tambah malih.",
            ],
            // Quiz ID 142: (FIB - no choices)
            // Quiz ID 143: "The respectful word for 'drink' is:" (MC)
            [
                "quiz_id" => 143,
                "text" => "Omben",
            ],
            [
                "quiz_id" => 143,
                "text" => "Unjukan",
            ],

            // Final Quiz - Krama Inggil
            // Quiz ID 144: "Dhaharan is the respectful word for..." (MC)
            [
                "quiz_id" => 144,
                "text" => "Food",
            ],
            [
                "quiz_id" => 144,
                "text" => "Drink",
            ],
            // Quiz ID 145: "How do you respectfully offer a drink?" (MC)
            [
                "quiz_id" => 145,
                "text" => "Monggo diombe.",
            ],
            [
                "quiz_id" => 145,
                "text" => "Mangga dipun unjuk.",
            ],
            // Quiz ID 146: "The phrase Tambah malih means..." (MC)
            [
                "quiz_id" => 146,
                "text" => "Have some more",
            ],
            [
                "quiz_id" => 146,
                "text" => "Already full",
            ],
            // Quiz ID 147: "The respectful word for 'the taste' is:" (MC)
            [
                "quiz_id" => 147,
                "text" => "Rasane",
            ],
            [
                "quiz_id" => 147,
                "text" => "Raosipun",
            ],
            // Quiz ID 148: (FIB - no choices)
            // Quiz ID 149: (FIB - no choices)
            // Quiz ID 150: "Which phrase means 'Already full'?" (MC)
            [
                "quiz_id" => 150,
                "text" => "Sampun wareg.",
            ],
            [
                "quiz_id" => 150,
                "text" => "Tambah malih.",
            ],
            // Quiz ID 151: (FIB - no choices)


            // Lesson 3.4: Gladhen Panganan (Food Etiquette Practice)
            // Quiz ID 152: "You are at your friend's house and their mom serves you snacks..." (MC)
            [
                "quiz_id" => 152,
                "text" => "Matur nuwun.",
            ],
            [
                "quiz_id" => 152,
                "text" => "Matur nuwun sanget.",
            ],
            [
                "quiz_id" => 152,
                "text" => "Matur sembah nuwun.",
            ],
            // Quiz ID 153: "You are eating with your friends at a street food stall..." (MC)
            [
                "quiz_id" => 153,
                "text" => "Enak tenan!",
            ],
            [
                "quiz_id" => 153,
                "text" => "Eco!",
            ],
            [
                "quiz_id" => 153,
                "text" => "Raosipun eco sanget!",
            ],
            // Quiz ID 154: "You are at a formal dinner and your host offers you more rice..." (MC)
            [
                "quiz_id" => 154,
                "text" => "Wis wareg.",
            ],
            [
                "quiz_id" => 154,
                "text" => "Matur nuwun, sampun cekap.",
            ],
            [
                "quiz_id" => 154,
                "text" => "Ampun, kula wareg.",
            ],
            // Quiz ID 155: "You are visiting your grandmother. To respectfully ask if she has eaten, you say:" (MC)
            [
                "quiz_id" => 155,
                "text" => "Simbah wis mangan?",
            ],
            [
                "quiz_id" => 155,
                "text" => "Simbah sampun nedha?",
            ],
            [
                "quiz_id" => 155,
                "text" => "Simbah sampun dhahar?",
            ],
            // Quiz ID 156: "A young person is serving tea to their grandfather..." (MC)
            [
                "quiz_id" => 156,
                "text" => "Mbah",
            ],
            [
                "quiz_id" => 156,
                "text" => "monggo",
            ],
            [
                "quiz_id" => 156,
                "text" => "diombe",
            ],
            // Quiz ID 157: "You are a guest at a friend's house..." (MC)
            [
                "quiz_id" => 157,
                "text" => "dhaharanipun",
            ],
            [
                "quiz_id" => 157,
                "text" => "eco",
            ],
            [
                "quiz_id" => 157,
                "text" => "sanget",
            ],
            // Quiz ID 158: (FIB - no choices)
            // Quiz ID 159: (FIB - no choices)
        ]);
    }
}
