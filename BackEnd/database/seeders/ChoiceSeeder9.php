<?php

namespace Database\Seeders;

use App\Models\Choice;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChoiceSeeder9 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Choice::insert([
            // Lesson 9.1: Ngoko - Kesenengan (Hobbies)
            // Learning Phase
            // Quiz ID 425: "How do you ask a friend about their hobby?" (MC)
            [
                "quiz_id" => 425,
                "text" => "Kesenenganmu apa?",
            ],
            [
                "quiz_id" => 425,
                "text" => "Pagaweanmu apa?",
            ],
            // Quiz ID 426: (FIB - no choices)
            // Quiz ID 427: "The phrase for 'watching movies' is:" (MC)
            [
                "quiz_id" => 427,
                "text" => "Maca buku.",
            ],
            [
                "quiz_id" => 427,
                "text" => "Nonton film.",
            ],
            // Quiz ID 428: (FIB - no choices)
            // Quiz ID 429: "How do you ask 'Since when?'" (MC)
            [
                "quiz_id" => 429,
                "text" => "Wiwit kapan?",
            ],
            [
                "quiz_id" => 429,
                "text" => "Neng endi?",
            ],
            // Quiz ID 430: (FIB - no choices)
            // Quiz ID 431: "A casual way to say something is fun is:" (MC)
            [
                "quiz_id" => 431,
                "text" => "Apik.",
            ],
            [
                "quiz_id" => 431,
                "text" => "Seru!",
            ],

            // Final Quiz - Ngoko
            // Quiz ID 432: "Wiwit kapan? means..." (MC)
            [
                "quiz_id" => 432,
                "text" => "How long?",
            ],
            [
                "quiz_id" => 432,
                "text" => "Since when?",
            ],
            // Quiz ID 433: "How do you say 'Awesome!' or 'Fun!'?" (MC)
            [
                "quiz_id" => 433,
                "text" => "Enak.",
            ],
            [
                "quiz_id" => 433,
                "text" => "Seru!",
            ],
            // Quiz ID 434: "The phrase Wis suwe means..." (MC)
            [
                "quiz_id" => 434,
                "text" => "Just now",
            ],
            [
                "quiz_id" => 434,
                "text" => "A long time",
            ],
            // Quiz ID 435: "How do you ask about a friend's hobby?" (MC)
            [
                "quiz_id" => 435,
                "text" => "Pagaweanmu apa?",
            ],
            [
                "quiz_id" => 435,
                "text" => "Kesenenganmu apa?",
            ],
            // Quiz ID 436: (FIB - no choices)
            // Quiz ID 437: (FIB - no choices)
            // Quiz ID 438: "Which phrase means 'A long time'?" (MC)
            [
                "quiz_id" => 438,
                "text" => "Wis suwe.",
            ],
            [
                "quiz_id" => 438,
                "text" => "Wiwit kapan?",
            ],
            // Quiz ID 439: (FIB - no choices)


            // Lesson 9.2: Krama Madya - Babagan Hawa (About the Weather)
            // Learning Phase - Krama Madya
            // Quiz ID 440: "How do you politely ask about the weather?" (MC)
            [
                "quiz_id" => 440,
                "text" => "Hawane pripun?",
            ],
            [
                "quiz_id" => 440,
                "text" => "Panas napa adem?",
            ],
            // Quiz ID 441: (FIB - no choices)
            // Quiz ID 442: "How do you say 'Very cold'?" (MC)
            [
                "quiz_id" => 442,
                "text" => "Anyep.",
            ],
            [
                "quiz_id" => 442,
                "text" => "Adem sanget.",
            ],
            // Quiz ID 443: (FIB - no choices)
            // Quiz ID 444: "How do you say 'It's windy'?" (MC)
            [
                "quiz_id" => 444,
                "text" => "Kathah angin.",
            ],
            [
                "quiz_id" => 444,
                "text" => "Panas sanget.",
            ],
            // Quiz ID 445: (FIB - no choices)
            // Quiz ID 446: "The opposite of Mendung is:" (MC)
            [
                "quiz_id" => 446,
                "text" => "Jawah",
            ],
            [
                "quiz_id" => 446,
                "text" => "Cerah.",
            ],

            // Final Quiz - Krama Madya
            // Quiz ID 447: "Badhe jawah means..." (MC)
            [
                "quiz_id" => 447,
                "text" => "It\'s sunny",
            ],
            [
                "quiz_id" => 447,
                "text" => "It\'s going to rain",
            ],
            // Quiz ID 448: "To say 'It\'s very cold,' you say:" (MC)
            [
                "quiz_id" => 448,
                "text" => "Panas sanget.",
            ],
            [
                "quiz_id" => 448,
                "text" => "Adem sanget.",
            ],
            // Quiz ID 449: "The word Cerah means..." (MC)
            [
                "quiz_id" => 449,
                "text" => "Cloudy",
            ],
            [
                "quiz_id" => 449,
                "text" => "Clear/Sunny",
            ],
            // Quiz ID 450: "How do you politely ask about the weather?" (MC)
            [
                "quiz_id" => 450,
                "text" => "Hawane piye?",
            ],
            [
                "quiz_id" => 450,
                "text" => "Hawane pripun?",
            ],
            // Quiz ID 451: (FIB - no choices)
            // Quiz ID 452: (FIB - no choices)
            // Quiz ID 453: "Which phrase means 'It\'s windy'?" (MC)
            [
                "quiz_id" => 453,
                "text" => "Kathah angin.",
            ],
            [
                "quiz_id" => 453,
                "text" => "Badhe jawah.",
            ],
            // Quiz ID 454: (FIB - no choices)


            // Lesson 9.3: Krama Inggil - Ndhawuh Timbalan (Listening to Advice)
            // Learning Phase - Krama Inggil
            // Quiz ID 455: "To respectfully ask for an elder's opinion, you say:" (MC)
            [
                "quiz_id" => 455,
                "text" => "Nyuwun tulung.",
            ],
            [
                "quiz_id" => 455,
                "text" => "Nyuwun priksa.",
            ],
            // Quiz ID 456: (FIB - no choices)
            // Quiz ID 457: "After receiving advice, you show your intent to follow it by saying:" (MC)
            [
                "quiz_id" => 457,
                "text" => "Nggih, kula manut.",
            ],
            [
                "quiz_id" => 457,
                "text" => "Kula estokaken.",
            ],
            // Quiz ID 458: (FIB - no choices)
            // Quiz ID 459: "How do you say the advice will be a lesson for you?" (MC)
            [
                "quiz_id" => 459,
                "text" => "Dadosaken piwulang.",
            ],
            [
                "quiz_id" => 459,
                "text" => "Kula sinau.",
            ],
            // Quiz ID 460: (FIB - no choices)
            // Quiz ID 461: "The best way to thank an elder for their advice is:" (MC)
            [
                "quiz_id" => 461,
                "text" => "Matur nuwun sanget.",
            ],
            [
                "quiz_id" => 461,
                "text" => "Matur sembah nuwun.",
            ],

            // Final Quiz - Krama Inggil
            // Quiz ID 462: "Kula estokaken means..." (MC)
            [
                "quiz_id" => 462,
                "text" => "I don\'t agree",
            ],
            [
                "quiz_id" => 462,
                "text" => "I will obey/follow it",
            ],
            // Quiz ID 463: "To respectfully ask for an opinion, you say:" (MC)
            [
                "quiz_id" => 463,
                "text" => "Nyuwun tulung.",
            ],
            [
                "quiz_id" => 463,
                "text" => "Nyuwun priksa.",
            ],
            // Quiz ID 464: "The phrase Pitutur luhur means..." (MC)
            [
                "quiz_id" => 464,
                "text" => "A difficult question",
            ],
            [
                "quiz_id" => 464,
                "text" => "Noble advice",
            ],
            // Quiz ID 465: "How do you respectfully quote what an elder said?" (MC)
            [
                "quiz_id" => 465,
                "text" => "Jarene...",
            ],
            [
                "quiz_id" => 465,
                "text" => "Ngendikanipun...",
            ],
            // Quiz ID 466: (FIB - no choices)
            // Quiz ID 467: (FIB - no choices)
            // Quiz ID 468: "Which phrase means 'Noble advice'?" (MC)
            [
                "quiz_id" => 468,
                "text" => "Pitutur luhur.",
            ],
            [
                "quiz_id" => 468,
                "text" => "Nyuwun priksa.",
            ],
            // Quiz ID 469: (FIB - no choices)


            // Lesson 9.4: Gladhen Wicara (Conversation Practice)
            // Quiz ID 470: "You are chatting with a new friend and want to ask about their hobbies." (MC)
            [
                "quiz_id" => 470,
                "text" => "Kesenenganmu apa?",
            ],
            [
                "quiz_id" => 470,
                "text" => "Padamelanmu napa?",
            ],
            [
                "quiz_id" => 470,
                "text" => "Nyuwun priksa.",
            ],
            // Quiz ID 471: "You are making small talk with a colleague while waiting for a meeting..." (MC)
            [
                "quiz_id" => 471,
                "text" => "Panas banget, ya.",
            ],
            [
                "quiz_id" => 471,
                "text" => "Hawane panas sanget, nggih.",
            ],
            [
                "quiz_id" => 471,
                "text" => "Panase pol.",
            ],
            // Quiz ID 472: "You have asked your grandfather for life advice..." (MC)
            [
                "quiz_id" => 472,
                "text" => "Nggih, matur nuwun.",
            ],
            [
                "quiz_id" => 472,
                "text" => "Kula ngertos.",
            ],
            [
                "quiz_id" => 472,
                "text" => "Matur sembah nuwun, kula estokaken.",
            ],
            // Quiz ID 473: "Your friend says they've been learning to play the guitar for a long time." (MC)
            [
                "quiz_id" => 473,
                "text" => "Wis suwe.",
            ],
            [
                "quiz_id" => 473,
                "text" => "Lami sanget.",
            ],
            [
                "quiz_id" => 473,
                "text" => "Sampun dangu.",
            ],
            // Quiz ID 474: "A student is respectfully asking their professor for an opinion..." (MC)
            [
                "quiz_id" => 474,
                "text" => "Pak",
            ],
            [
                "quiz_id" => 474,
                "text" => "pikiranmu",
            ],
            [
                "quiz_id" => 474,
                "text" => "pripun",
            ],
            // Quiz ID 475: "You are talking to your boss about the weather..." (MC)
            [
                "quiz_id" => 475,
                "text" => "Bu",
            ],
            [
                "quiz_id" => 475,
                "text" => "hawane",
            ],
            [
                "quiz_id" => 475,
                "text" => "adem banget",
            ],
            // Quiz ID 476: (FIB - no choices)
            // Quiz ID 477: (FIB - no choices)
        ]);
    }
}
