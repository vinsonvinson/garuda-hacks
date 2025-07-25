<?php

namespace Database\Seeders;

use App\Models\Choice;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChoiceSeeder6 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Choice::insert([
            // Lesson 6.1: Ngoko - Atiku... (My Feelings...)
            // Learning Phase
            // Quiz ID 266: "How do you say 'I'm very happy'?" (MC)
            [
                "quiz_id" => 266,
                "text" => "Aku seneng banget.",
            ],
            [
                "quiz_id" => 266,
                "text" => "Aku nesu.",
            ],
            // Quiz ID 267: (FIB - no choices)
            // Quiz ID 268: "Which phrase means 'I'm sad'?" (MC)
            [
                "quiz_id" => 268,
                "text" => "Aku kesel.",
            ],
            [
                "quiz_id" => 268,
                "text" => "Aku sedhih.",
            ],
            // Quiz ID 269: (FIB - no choices)
            // Quiz ID 270: "How do you tell a friend 'Don't worry'?" (MC)
            [
                "quiz_id" => 270,
                "text" => "Ojo kuwatir.",
            ],
            [
                "quiz_id" => 270,
                "text" => "Aku kangen.",
            ],
            // Quiz ID 271: (FIB - no choices)
            // Quiz ID 272: "The phrase for 'I'm scared' is:" (MC)
            [
                "quiz_id" => 272,
                "text" => "Aku nesu.",
            ],
            [
                "quiz_id" => 272,
                "text" => "Aku wedi.",
            ],

            // Final Quiz - Ngoko
            // Quiz ID 273: "Aku sedhih means..." (MC)
            [
                "quiz_id" => 273,
                "text" => "I\'m tired",
            ],
            [
                "quiz_id" => 273,
                "text" => "I\'m sad",
            ],
            // Quiz ID 274: "How do you say 'I'm angry'?" (MC)
            [
                "quiz_id" => 274,
                "text" => "Aku seneng.",
            ],
            [
                "quiz_id" => 274,
                "text" => "Aku nesu.",
            ],
            // Quiz ID 275: "The phrase Ojo kuwatir means..." (MC)
            [
                "quiz_id" => 275,
                "text" => "Don\'t worry",
            ],
            [
                "quiz_id" => 275,
                "text" => "I miss you",
            ],
            // Quiz ID 276: "How do you say 'I'm scared'?" (MC)
            [
                "quiz_id" => 276,
                "text" => "Aku kesel.",
            ],
            [
                "quiz_id" => 276,
                "text" => "Aku wedi.",
            ],
            // Quiz ID 277: (FIB - no choices)
            // Quiz ID 278: (FIB - no choices)
            // Quiz ID 279: "Which phrase means 'I miss you'?" (MC)
            [
                "quiz_id" => 279,
                "text" => "Aku kangen.",
            ],
            [
                "quiz_id" => 279,
                "text" => "Aku wedi.",
            ],
            // Quiz ID 280: (FIB - no choices)

            // Lesson 6.2: Krama Madya - Nawakake Bantuan (Offering Help)
            // Learning Phase - Krama Madya
            // Quiz ID 281: "How do you politely offer help?" (MC)
            [
                "quiz_id" => 281,
                "text" => "Saged kula bantu?",
            ],
            [
                "quiz_id" => 281,
                "text" => "Mboten usah.",
            ],
            // Quiz ID 282: (FIB - no choices)
            // Quiz ID 283: "How do you politely decline an offer of help?" (MC)
            [
                "quiz_id" => 283,
                "text" => "Ora usah.",
            ],
            [
                "quiz_id" => 283,
                "text" => "Mboten usah.",
            ],
            // Quiz ID 284: (FIB - no choices)
            // Quiz ID 285: "When you accept someone's offer to help, you can say:" (MC)
            [
                "quiz_id" => 285,
                "text" => "Nggih.",
            ],
            [
                "quiz_id" => 285,
                "text" => "Sumangga.",
            ],
            // Quiz ID 286: (FIB - no choices)
            // Quiz ID 287: "The polite word for 'How?' is:" (MC)
            [
                "quiz_id" => 287,
                "text" => "Piye?",
            ],
            [
                "quiz_id" => 287,
                "text" => "Pripun?",
            ],

            // Final Quiz - Krama Madya
            // Quiz ID 288: "Sumangga means..." (MC)
            [
                "quiz_id" => 288,
                "text" => "No need",
            ],
            [
                "quiz_id" => 288,
                "text" => "Please, go ahead",
            ],
            // Quiz ID 289: "To politely ask for help, you say:" (MC)
            [
                "quiz_id" => 289,
                "text" => "Tulungono aku.",
            ],
            [
                "quiz_id" => 289,
                "text" => "Nyuwun tulung.",
            ],
            // Quiz ID 290: "The phrase Mboten usah means..." (MC)
            [
                "quiz_id" => 290,
                "text" => "I can\'t",
            ],
            [
                "quiz_id" => 290,
                "text" => "No need",
            ],
            // Quiz ID 291: "How do you politely ask 'How?'?" (MC)
            [
                "quiz_id" => 291,
                "text" => "Piye?",
            ],
            [
                "quiz_id" => 291,
                "text" => "Pripun?",
            ],
            // Quiz ID 292: (FIB - no choices)
            // Quiz ID 293: (FIB - no choices)
            // Quiz ID 294: "Which phrase means 'Is there anything I can help with?'?" (MC)
            [
                "quiz_id" => 294,
                "text" => "Wonten sing saged dibantu?",
            ],
            [
                "quiz_id" => 294,
                "text" => "Saged kula bantu?",
            ],
            // Quiz ID 295: (FIB - no choices)

            // Lesson 6.3: Krama Inggil - Nyuwun Pangapunten (Respectfully Apologizing)
            // Learning Phase - Krama Inggil
            // Quiz ID 296: "The respectful way to say 'I'm sorry' is:" (MC)
            [
                "quiz_id" => 296,
                "text" => "Nyuwun sepuro.",
            ],
            [
                "quiz_id" => 296,
                "text" => "Nyuwun pangapunten.",
            ],
            // Quiz ID 297: (FIB - no choices)
            // Quiz ID 298: "You can start an apology with:" (MC)
            [
                "quiz_id" => 298,
                "text" => "Menawi wonten lepat.",
            ],
            [
                "quiz_id" => 298,
                "text" => "Mboten napa-napa.",
            ],
            // Quiz ID 299: (FIB - no choices)
            // Quiz ID 300: "To apologize for your actions, you mention:" (MC)
            [
                "quiz_id" => 300,
                "text" => "Kelakuan kula.",
            ],
            [
                "quiz_id" => 300,
                "text" => "Tindak-tanduk kula.",
            ],
            // Quiz ID 301: (FIB - no choices)
            // Quiz ID 302: "A respectful way to accept an apology is:" (MC)
            [
                "quiz_id" => 302,
                "text" => "Ora apa-apa.",
            ],
            [
                "quiz_id" => 302,
                "text" => "Mboten dados menapa.",
            ],

            // Final Quiz - Krama Inggil
            // Quiz ID 303: "Kula lepat means..." (MC)
            [
                "quiz_id" => 303,
                "text" => "I am right",
            ],
            [
                "quiz_id" => 303,
                "text" => "I was wrong",
            ],
            // Quiz ID 304: "The respectful way to accept an apology is:" (MC)
            [
                "quiz_id" => 304,
                "text" => "Ora masalah.",
            ],
            [
                "quiz_id" => 304,
                "text" => "Mboten dados menapa.",
            ],
            // Quiz ID 305: "The phrase Atur kula refers to your..." (MC)
            [
                "quiz_id" => 305,
                "text" => "Speech",
            ],
            [
                "quiz_id" => 305,
                "text" => "Actions",
            ],
            // Quiz ID 306: "How do you respectfully say 'I'm sorry'?" (MC)
            [
                "quiz_id" => 306,
                "text" => "Aku njaluk sepuro.",
            ],
            [
                "quiz_id" => 306,
                "text" => "Nyuwun pangapunten.",
            ],
            // Quiz ID 307: (FIB - no choices)
            // Quiz ID 308: (FIB - no choices)
            // Quiz ID 309: "Which phrase means 'If there are any mistakes'?" (MC)
            [
                "quiz_id" => 309,
                "text" => "Menawi wonten lepat.",
            ],
            [
                "quiz_id" => 309,
                "text" => "Kula lepat.",
            ],
            // Quiz ID 310: (FIB - no choices)

            // Lesson 6.4: Gladhen Raos (Feelings & Expressions Practice)
            // Quiz ID 311: "You see your close friend looking sad..." (MC)
            [
                "quiz_id" => 311,
                "text" => "Aku melu sedhih.",
            ],
            [
                "quiz_id" => 311,
                "text" => "Aku sedhih.",
            ],
            [
                "quiz_id" => 311,
                "text" => "Kula nderek sedhih.",
            ],
            // Quiz ID 312: "A colleague looks like they are struggling to carry a heavy box..." (MC)
            [
                "quiz_id" => 312,
                "text" => "Tak rewangi, ya?",
            ],
            [
                "quiz_id" => 312,
                "text" => "Saged kula bantu?",
            ],
            [
                "quiz_id" => 312,
                "text" => "Kula tulung.",
            ],
            // Quiz ID 313: "You accidentally bump into an elder at a formal event..." (MC)
            [
                "quiz_id" => 313,
                "text" => "Nyuwun sewu.",
            ],
            [
                "quiz_id" => 313,
                "text" => "Sepunten, Mbah.",
            ],
            [
                "quiz_id" => 313,
                "text" => "Nyuwun agunging pangapunten.",
            ],
            // Quiz ID 314: "Your friend is worried about an upcoming exam..." (MC)
            [
                "quiz_id" => 314,
                "text" => "Ojo kuwatir.",
            ],
            [
                "quiz_id" => 314,
                "text" => "Mboten usah.",
            ],
            [
                "quiz_id" => 314,
                "text" => "Ampun kuwatir.",
            ],
            // Quiz ID 315: "A student is apologizing to their teacher..." (MC)
            [
                "quiz_id" => 315,
                "text" => "Bu",
            ],
            [
                "quiz_id" => 315,
                "text" => "kula",
            ],
            [
                "quiz_id" => 315,
                "text" => "nyuwun sepuro",
            ],
            // Quiz ID 316: "You are offering to help your much older, respected boss..." (MC)
            [
                "quiz_id" => 316,
                "text" => "Pak",
            ],
            [
                "quiz_id" => 316,
                "text" => "tak bantu",
            ],
            [
                "quiz_id" => 316,
                "text" => "wonten sing saged",
            ],
            // Quiz ID 317: (FIB - no choices)
            // Quiz ID 318: (FIB - no choices)
        ]);
    }
}
