<?php

namespace Database\Seeders;

use App\Models\Choice;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChoiceSeeder4 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Choice::insert([
            // Lesson 4.1: Ngoko - Tuku-tuku (Casual Shopping)
            // Learning Phase
            // Quiz ID 160: "How do you ask 'How much is this?'" (MC)
            [
                "quiz_id" => 160,
                "text" => "Iki pira?",
            ],
            [
                "quiz_id" => 160,
                "text" => "Larane...",
            ],
            // Quiz ID 161: (FIB - no choices)
            // Quiz ID 162: "How do you ask for a discount?" (MC)
            [
                "quiz_id" => 162,
                "text" => "Isa kurang?",
            ],
            [
                "quiz_id" => 162,
                "text" => "Ora ana diskon?",
            ],
            // Quiz ID 163: (FIB - no choices)
            // Quiz ID 164: "What is the term for 'exact change'?" (MC)
            [
                "quiz_id" => 164,
                "text" => "Susuk",
            ],
            [
                "quiz_id" => 164,
                "text" => "Dhuwit pas",
            ],
            // Quiz ID 165: (FIB - no choices)
            // Quiz ID 166: "After a successful bargain, you can say:" (MC)
            [
                "quiz_id" => 166,
                "text" => "Larane...",
            ],
            [
                "quiz_id" => 166,
                "text" => "Entuk.",
            ],

            // Final Quiz - Ngoko
            // Quiz ID 167: "Larane... means..." (MC)
            [
                "quiz_id" => 167,
                "text" => "It's cheap",
            ],
            [
                "quiz_id" => 167,
                "text" => "So expensive...",
            ],
            // Quiz ID 168: "How do you say 'I'll buy this'?" (MC)
            [
                "quiz_id" => 168,
                "text" => "Iki pira?",
            ],
            [
                "quiz_id" => 168,
                "text" => "Aku tuku iki.",
            ],
            // Quiz ID 169: "The word Susuk means..." (MC)
            [
                "quiz_id" => 169,
                "text" => "Change (money)",
            ],
            [
                "quiz_id" => 169,
                "text" => "Exact change",
            ],
            // Quiz ID 170: "How do you ask for a discount?" (MC)
            [
                "quiz_id" => 170,
                "text" => "Iki pira?",
            ],
            [
                "quiz_id" => 170,
                "text" => "Isa kurang?",
            ],
            // Quiz ID 171: (FIB - no choices)
            // Quiz ID 172: (FIB - no choices)
            // Quiz ID 173: "Which phrase means 'Deal'?" (MC)
            [
                "quiz_id" => 173,
                "text" => "Entuk.",
            ],
            [
                "quiz_id" => 173,
                "text" => "Susuk.",
            ],
            // Quiz ID 174: (FIB - no choices)


            // Lesson 4.2: Krama Madya - Ing Pasar (At the Market)
            // Learning Phase - Krama Madya
            // Quiz ID 175: "How do you politely ask for a price?" (MC)
            [
                "quiz_id" => 175,
                "text" => "Iki pira?",
            ],
            [
                "quiz_id" => 175,
                "text" => "Niki regine pinten?",
            ],
            // Quiz ID 176: (FIB - no choices)
            // Quiz ID 177: "How do you politely say 'I will buy this'?" (MC)
            [
                "quiz_id" => 177,
                "text" => "Aku tuku iki.",
            ],
            [
                "quiz_id" => 177,
                "text" => "Kula tumbas niki.",
            ],
            // Quiz ID 178: (FIB - no choices)
            // Quiz ID 179: "To praise the quality of an item, you say:" (MC)
            [
                "quiz_id" => 179,
                "text" => "Apik tenan.",
            ],
            [
                "quiz_id" => 179,
                "text" => "Sae sanget.",
            ],
            // Quiz ID 180: (FIB - no choices)
            // Quiz ID 181: "The polite term for money change is:" (MC)
            [
                "quiz_id" => 181,
                "text" => "Susuk",
            ],
            [
                "quiz_id" => 181,
                "text" => "Wangsulan",
            ],

            // Final Quiz - Krama Madya
            // Quiz ID 182: "Sae sanget means..." (MC)
            [
                "quiz_id" => 182,
                "text" => "Very expensive",
            ],
            [
                "quiz_id" => 182,
                "text" => "Very good quality",
            ],
            // Quiz ID 183: "To ask 'Where do I pay?', you say:" (MC)
            [
                "quiz_id" => 183,
                "text" => "Pinten sedanten?",
            ],
            [
                "quiz_id" => 183,
                "text" => "Mbayaripun teng pundi?",
            ],
            // Quiz ID 184: "The polite way to say 'I will buy this' is:" (MC)
            [
                "quiz_id" => 184,
                "text" => "Aku tuku iki.",
            ],
            [
                "quiz_id" => 184,
                "text" => "Kula tumbas niki.",
            ],
            // Quiz ID 185: "How do you politely ask for a discount?" (MC)
            [
                "quiz_id" => 185,
                "text" => "Isa kurang?",
            ],
            [
                "quiz_id" => 185,
                "text" => "Angsal kirang, mboten?",
            ],
            // Quiz ID 186: (FIB - no choices)
            // Quiz ID 187: (FIB - no choices)
            // Quiz ID 188: "Which phrase means 'How much for everything'?" (MC)
            [
                "quiz_id" => 188,
                "text" => "Pinten sedanten?",
            ],
            [
                "quiz_id" => 188,
                "text" => "Mbayaripun teng pundi?",
            ],
            // Quiz ID 189: (FIB - no choices)


            // Lesson 4.3: Krama Inggil - Nyuwun Pirsa Regi (Respectfully Asking for a Price)
            // Learning Phase - Krama Inggil
            // Quiz ID 190: "A very respectful way to start a question is:" (MC)
            [
                "quiz_id" => 190,
                "text" => "Badhe tanglet.",
            ],
            [
                "quiz_id" => 190,
                "text" => "Nyuwun pirsa.",
            ],
            // Quiz ID 191: (FIB - no choices)
            // Quiz ID 192: "The most respectful way to say 'I want to buy' is:" (MC)
            [
                "quiz_id" => 192,
                "text" => "Kula tumbas.",
            ],
            [
                "quiz_id" => 192,
                "text" => "Kula badhe mundhut.",
            ],
            // Quiz ID 193: (FIB - no choices)
            // Quiz ID 194: "The respectful term for handing over money is:" (MC)
            [
                "quiz_id" => 194,
                "text" => "Mbayar",
            ],
            [
                "quiz_id" => 194,
                "text" => "Marasakeun.",
            ],
            // Quiz ID 195: (FIB - no choices)
            // Quiz ID 196: "The highest form of 'Thank you' after a transaction is:" (MC)
            [
                "quiz_id" => 196,
                "text" => "Matur nuwun sanget.",
            ],
            [
                "quiz_id" => 196,
                "text" => "Matur sembah nuwun.",
            ],

            // Final Quiz - Krama Inggil
            // Quiz ID 197: "Kula badhe mundhut means..." (MC)
            [
                "quiz_id" => 197,
                "text" => "I want to ask",
            ],
            [
                "quiz_id" => 197,
                "text" => "I would like to purchase",
            ],
            // Quiz ID 198: "To respectfully ask for a price, you say:" (MC)
            [
                "quiz_id" => 198,
                "text" => "Niki regine pinten?",
            ],
            [
                "quiz_id" => 198,
                "text" => "Regipun pinten?",
            ],
            // Quiz ID 199: "The respectful term for handing over payment is:" (MC)
            [
                "quiz_id" => 199,
                "text" => "Mbayar",
            ],
            [
                "quiz_id" => 199,
                "text" => "Marasakeun",
            ],
            // Quiz ID 200: "Nyuwun pirsa is a very respectful way to say..." (MC)
            [
                "quiz_id" => 200,
                "text" => "Thank you",
            ],
            [
                "quiz_id" => 200,
                "text" => "May I inquire",
            ],
            // Quiz ID 201: (FIB - no choices)
            // Quiz ID 202: (FIB - no choices)
            // Quiz ID 203: "Which word means 'to wish/want' when referring to an elder?" (MC)
            [
                "quiz_id" => 203,
                "text" => "Kersa",
            ],
            [
                "quiz_id" => 203,
                "text" => "Pengin",
            ],
            // Quiz ID 204: (FIB - no choices)


            // Lesson 4.4: Gladhen Tumbas (Purchase Practice)
            // Quiz ID 205: "You are buying snacks from a street vendor your age. How do you ask for the price?" (MC)
            [
                "quiz_id" => 205,
                "text" => "Iki pira?",
            ],
            [
                "quiz_id" => 205,
                "text" => "Niki regine pinten?",
            ],
            [
                "quiz_id" => 205,
                "text" => "Regipun pinten?",
            ],
            // Quiz ID 206: "You are at a traditional market buying batik from a middle-aged shop owner. How do you politely ask for a discount?" (MC)
            [
                "quiz_id" => 206,
                "text" => "Isa kurang?",
            ],
            [
                "quiz_id" => 206,
                "text" => "Angsal kirang, mboten?",
            ],
            [
                "quiz_id" => 206,
                "text" => "Mboten saged kirang?",
            ],
            // Quiz ID 207: "You are helping your grandmother buy a gift for her friend from a respected artisan..." (MC)
            [
                "quiz_id" => 207,
                "text" => "Kula tumbas niki.",
            ],
            [
                "quiz_id" => 207,
                "text" => "Kula badhe mundhut niki.",
            ],
            [
                "quiz_id" => 207,
                "text" => "Aku tuku iki.",
            ],
            // Quiz ID 208: "After buying from a friendly shopkeeper at the market, you receive your change..." (MC)
            [
                "quiz_id" => 208,
                "text" => "Susuk",
            ],
            [
                "quiz_id" => 208,
                "text" => "Wangsulan",
            ],
            [
                "quiz_id" => 208,
                "text" => "Dhuwit",
            ],
            // Quiz ID 209: "A student is buying a book from a polite bookstore clerk..." (MC)
            [
                "quiz_id" => 209,
                "text" => "Mbak",
            ],
            [
                "quiz_id" => 209,
                "text" => "iki pira",
            ],
            // Quiz ID 210: "You are at a formal gallery. You respectfully ask the curator..." (MC)
            [
                "quiz_id" => 210,
                "text" => "Pak",
            ],
            [
                "quiz_id" => 210,
                "text" => "kula tumbas",
            ],
            [
                "quiz_id" => 210,
                "text" => "lukisan niki",
            ],
            // Quiz ID 211: (FIB - no choices)
            // Quiz ID 212: (FIB - no choices)
        ]);
    }
}
