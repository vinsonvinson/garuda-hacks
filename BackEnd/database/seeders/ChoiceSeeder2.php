<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Quiz; // Included for good practice, though not used for fetching IDs
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChoiceSeeder2 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Choice::insert([
            // Lesson 2.1: Ngoko - "Jenengku..." (Casual Introductions)
            // Learning Phase
            // Quiz ID 54: "To say 'My name is Budi,' you say:" (FIB - no choices)

            // Quiz ID 55: "How do you ask 'What is your name?'" (MC)
            [
                "quiz_id" => 55,
                "text" => "Sapa jenengmu?",
            ],
            [
                "quiz_id" => 55,
                "text" => "Omahmu ngendi?",
            ],
            // Quiz ID 56: "To say 'I am from Jakarta,' you say:" (FIB - no choices)

            // Quiz ID 57: "How do you ask 'Where is your house?'" (MC)
            [
                "quiz_id" => 57,
                "text" => "Umurmu pira?",
            ],
            [
                "quiz_id" => 57,
                "text" => "Omahmu ngendi?",
            ],
            // Quiz ID 58: "To ask 'How old are you?', you say:" (FIB - no choices)

            // Quiz ID 59: "Which phrase asks 'What is your job?'" (MC)
            [
                "quiz_id" => 59,
                "text" => "Pagaweanmu apa?",
            ],
            [
                "quiz_id" => 59,
                "text" => "Seneng kenalan.",
            ],
            // Quiz ID 60: "To say 'Nice to meet you,' you say:" (FIB - no choices)


            // Final Quiz - Ngoko
            // Quiz ID 61: "Sapa jenengmu? means..." (MC)
            [
                "quiz_id" => 61,
                "text" => "What is your name?",
            ],
            [
                "quiz_id" => 61,
                "text" => "Where is your house?",
            ],
            // Quiz ID 62: "How do you say 'I am from...'" (MC)
            [
                "quiz_id" => 62,
                "text" => "Aku saka",
            ],
            [
                "quiz_id" => 62,
                "text" => "Jenengku",
            ],
            // Quiz ID 63: "The phrase Omahmu ngendi? asks about..." (MC)
            [
                "quiz_id" => 63,
                "text" => "House location",
            ],
            [
                "quiz_id" => 63,
                "text" => "Age",
            ],
            // Quiz ID 64: "The word for 'Nice to meet you' is..." (MC)
            [
                "quiz_id" => 64,
                "text" => "Pagaweanmu apa?",
            ],
            [
                "quiz_id" => 64,
                "text" => "Seneng kenalan.",
            ],
            // Quiz ID 65: (FIB - no choices)
            // Quiz ID 66: (FIB - no choices)
            // Quiz ID 67: "Which phrase means 'What is your job?'" (MC)
            [
                "quiz_id" => 67,
                "text" => "Pagaweanmu apa?",
            ],
            [
                "quiz_id" => 67,
                "text" => "Umurmu pira?",
            ],
            // Quiz ID 68: (FIB - no choices)


            // Lesson 2.2: Krama Madya - "Nepangaken" (Polite Introductions)
            // Learning Phase - Krama Madya
            // Quiz ID 69: "To introduce yourself politely, you say:" (FIB - no choices)

            // Quiz ID 70: "How do you politely ask for someone's name?" (MC)
            [
                "quiz_id" => 70,
                "text" => "Sinten naminipun?",
            ],
            [
                "quiz_id" => 70,
                "text" => "Panggenan kula ing",
            ],
            // Quiz ID 71: "To say 'I am from Surabaya,' you say:" (FIB - no choices)

            // Quiz ID 72: "How do you say 'I live at...'?" (MC)
            [
                "quiz_id" => 72,
                "text" => "Panggenan kula ing",
            ],
            [
                "quiz_id" => 72,
                "text" => "Nyambut damel",
            ],
            // Quiz ID 73: "To state your job, you say:" (FIB - no choices)

            // Quiz ID 74: "How do you politely state your age?" (MC)
            [
                "quiz_id" => 74,
                "text" => "Yuswa kula",
            ],
            [
                "quiz_id" => 74,
                "text" => "Umurmu pira?",
            ],
            // Quiz ID 75: "The polite phrase for 'Nice to meet you' is:" (FIB - no choices)


            // Final Quiz - Krama Madya
            // Quiz ID 76: "Sinten naminipun? is used to ask..." (MC)
            [
                "quiz_id" => 76,
                "text" => "Name",
            ],
            [
                "quiz_id" => 76,
                "text" => "Age",
            ],
            // Quiz ID 77: "How do you politely say 'I am from...'?" (MC)
            [
                "quiz_id" => 77,
                "text" => "Aku saka",
            ],
            [
                "quiz_id" => 77,
                "text" => "Kula saking",
            ],
            // Quiz ID 78: "The phrase Panggenan kula ing... refers to your..." (MC)
            [
                "quiz_id" => 78,
                "text" => "Address",
            ],
            [
                "quiz_id" => 78,
                "text" => "Job",
            ],
            // Quiz ID 79: "The polite way to say 'My age is...' is..." (MC)
            [
                "quiz_id" => 79,
                "text" => "Umurku",
            ],
            [
                "quiz_id" => 79,
                "text" => "Yuswa kula",
            ],
            // Quiz ID 80: (FIB - no choices)
            // Quiz ID 81: (FIB - no choices)
            // Quiz ID 82: "Which phrase means 'Let me introduce myself, my name is...'?" (MC)
            [
                "quiz_id" => 82,
                "text" => "Nepangaken, nami kula",
            ],
            [
                "quiz_id" => 82,
                "text" => "Sinten naminipun?",
            ],
            // Quiz ID 83: (FIB - no choices)


            // Lesson 2.3: Krama Inggil - "Kulawarga" (Describing Family)
            // Learning Phase - Krama Inggil
            // Quiz ID 84: "To ask for an elder's name, you say:" (MC)
            [
                "quiz_id" => 84,
                "text" => "Sapa jenengmu?",
            ],
            [
                "quiz_id" => 84,
                "text" => "Asmanipun sinten?",
            ],
            // Quiz ID 85: (FIB - no choices)
            // Quiz ID 86: "The respectful term for 'My mother' is..." (MC)
            [
                "quiz_id" => 86,
                "text" => "Ibu kula",
            ],
            [
                "quiz_id" => 86,
                "text" => "Emakku",
            ],
            // Quiz ID 87: "How do you refer to an elder's child?" (MC)
            [
                "quiz_id" => 87,
                "text" => "Putra panjenengan",
            ],
            [
                "quiz_id" => 87,
                "text" => "Anakmu",
            ],
            // Quiz ID 88: (FIB - no choices)
            // Quiz ID 89: (FIB - no choices)
            // Quiz ID 90: "The general term for 'relative' is:" (MC)
            [
                "quiz_id" => 90,
                "text" => "Sedherek kula",
            ],
            [
                "quiz_id" => 90,
                "text" => "Konco kula",
            ],

            // Final Quiz - Krama Inggil
            // Quiz ID 91: "Rama kula refers to..." (MC)
            [
                "quiz_id" => 91,
                "text" => "My father",
            ],
            [
                "quiz_id" => 91,
                "text" => "My mother",
            ],
            // Quiz ID 92: "How do you respectfully refer to an elder's spouse?" (MC)
            [
                "quiz_id" => 92,
                "text" => "Bojomu",
            ],
            [
                "quiz_id" => 92,
                "text" => "Garwa panjenengan",
            ],
            // Quiz ID 93: "The respectful term for 'My mother' is..." (MC)
            [
                "quiz_id" => 93,
                "text" => "Ibu kula",
            ],
            [
                "quiz_id" => 93,
                "text" => "Simbokku",
            ],
            // Quiz ID 94: "The term Eyang kakung refers to..." (MC)
            [
                "quiz_id" => 94,
                "text" => "Grandfather",
            ],
            [
                "quiz_id" => 94,
                "text" => "Grandmother",
            ],
            // Quiz ID 95: (FIB - no choices)
            // Quiz ID 96: (FIB - no choices)
            // Quiz ID 97: "Which phrase means 'Your son/daughter...'?" (MC)
            [
                "quiz_id" => 97,
                "text" => "Putra panjenengan",
            ],
            [
                "quiz_id" => 97,
                "text" => "Anakmu",
            ],
            // Quiz ID 98: (FIB - no choices)


            // Lesson 2.4: Gladhen Tepangaken (Introductions Practice)
            // Quiz ID 99: "The question Asmanipun sinten? is used when asking for the name of..." (MC)
            [
                "quiz_id" => 99,
                "text" => "A close friend",
            ],
            [
                "quiz_id" => 99,
                "text" => "A new colleague",
            ],
            [
                "quiz_id" => 99,
                "text" => "A respected elder",
            ],
            // Quiz ID 100: "You're at a casual community event and start chatting with someone who looks about your age." (MC)
            [
                "quiz_id" => 100,
                "text" => "Sapa jenengmu?",
            ],
            [
                "quiz_id" => 100,
                "text" => "Sinten naminipun?",
            ],
            [
                "quiz_id" => 100,
                "text" => "Asmanipun sinten?",
            ],
            // Quiz ID 101: "You are in a job interview..." (MC)
            [
                "quiz_id" => 101,
                "text" => "Umurku",
            ],
            [
                "quiz_id" => 101,
                "text" => "Yuswa kula",
            ],
            [
                "quiz_id" => 101,
                "text" => "Pagaweanmu",
            ],
            // Quiz ID 102: "You're talking to your friend about their family..." (MC)
            [
                "quiz_id" => 102,
                "text" => "Simbahmu",
            ],
            [
                "quiz_id" => 102,
                "text" => "Eyang kakungipun",
            ],
            [
                "quiz_id" => 102,
                "text" => "Bapakmu",
            ],
            // Quiz ID 103: "A new student, Andi, introduces himself to his teacher..." (MC)
            [
                "quiz_id" => 103,
                "text" => "Nepangaken",
            ],
            [
                "quiz_id" => 103,
                "text" => "Jenengku",
            ],
            [
                "quiz_id" => 103,
                "text" => "Andi",
            ],
            // Quiz ID 104: "You are asking your manager, Pak Hartono, about his wife..." (MC)
            [
                "quiz_id" => 104,
                "text" => "Pak",
            ],
            [
                "quiz_id" => 104,
                "text" => "bojomu",
            ],
            [
                "quiz_id" => 104,
                "text" => "pripun kabare",
            ],
            // Quiz ID 105: (FIB - no choices)
            // Quiz ID 106: (FIB - no choices)
        ]);
    }
}