<?php

namespace Database\Seeders;

use App\Models\Quiz;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuizSeeder2 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Module 2: Introductions
        // Lesson 2.1: Ngoko - "Jenengku..." (Casual Introductions)

        Quiz::insert([
            // Learning Phase - Ngoko
            // Concept: Jenengku... (My name is...)
            [
                "question" => 'To say "My name is Budi," you say:',
                "module_id" => 2,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Jenengku Budi",
                "is_learning" => true,
                "concept" => "Jenengku... (My name is...)",
                "javanese_type_id" => 1, // Ngoko
            ],
            // Concept: Sapa jenengmu? (What is your name?)
            [
                "question" => 'How do you ask "What is your name?"',
                "module_id" => 2,
                "type_id" => 1, // Multiple Choice
                "answer" => "Sapa jenengmu?",
                "is_learning" => true,
                "concept" => "Sapa jenengmu? (What is your name?)",
                "javanese_type_id" => 1, // Ngoko
            ],
            // Concept: Aku saka... (I am from...)
            [
                "question" => 'To say "I am from Jakarta," you say:',
                "module_id" => 2,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Aku saka Jakarta",
                "is_learning" => true,
                "concept" => "Aku saka... (I am from...)",
                "javanese_type_id" => 1, // Ngoko
            ],
            // Concept: Omahmu ngendi? (Where is your house?)
            [
                "question" => 'How do you ask "Where is your house?"',
                "module_id" => 2,
                "type_id" => 1, // Multiple Choice
                "answer" => "Omahmu ngendi?",
                "is_learning" => true,
                "concept" => "Omahmu ngendi? (Where is your house?)",
                "javanese_type_id" => 1, // Ngoko
            ],
            // Concept: Umurmu pira? (How old are you?)
            [
                "question" => 'To ask "How old are you?", you say:',
                "module_id" => 2,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Umurmu pira",
                "is_learning" => true,
                "concept" => "Umurmu pira? (How old are you?)",
                "javanese_type_id" => 1, // Ngoko
            ],
            // Concept: Pagaweanmu apa? (What is your job?)
            [
                "question" => 'Which phrase asks "What is your job?"',
                "module_id" => 2,
                "type_id" => 1, // Multiple Choice
                "answer" => "Pagaweanmu apa?",
                "is_learning" => true,
                "concept" => "Pagaweanmu apa? (What is your job?)",
                "javanese_type_id" => 1, // Ngoko
            ],
            // Concept: Seneng kenalan. (Nice to meet you.)
            [
                "question" => 'To say "Nice to meet you," you say:',
                "module_id" => 2,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Seneng kenalan",
                "is_learning" => true,
                "concept" => "Seneng kenalan. (Nice to meet you.)",
                "javanese_type_id" => 1, // Ngoko
            ],

            // Final Quiz - Ngoko
            [
                "question" => 'Sapa jenengmu? means...',
                "module_id" => 2,
                "type_id" => 1, // Multiple Choice
                "answer" => "What is your name?",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 1, // Ngoko
            ],
            [
                "question" => 'How do you say "I am from..."',
                "module_id" => 2,
                "type_id" => 1, // Multiple Choice
                "answer" => "Aku saka",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 1, // Ngoko
            ],
            [
                "question" => 'The phrase Omahmu ngendi? asks about...',
                "module_id" => 2,
                "type_id" => 1, // Multiple Choice
                "answer" => "House location",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 1, // Ngoko
            ],
            [
                "question" => 'The word for "Nice to meet you" is...',
                "module_id" => 2,
                "type_id" => 1, // Multiple Choice
                "answer" => "Seneng kenalan.",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 1, // Ngoko
            ],
            [
                "question" => 'To say "My name is", you say:',
                "module_id" => 2,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Jenengku",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 1, // Ngoko
            ],
            [
                "question" => 'To ask "How old are you?", you say:',
                "module_id" => 2,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Umurmu pira",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 1, // Ngoko
            ],
            [
                "question" => 'Which phrase means "What is your job?"',
                "module_id" => 2,
                "type_id" => 1, // Multiple Choice
                "answer" => "Pagaweanmu apa?",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 1, // Ngoko
            ],
            [
                "question" => 'To say "I am from", you say:',
                "module_id" => 2,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Aku saka",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 1, // Ngoko
            ],

            // Lesson 2.2: Krama Madya - "Nepangaken" (Polite Introductions)

            // Learning Phase - Krama Madya
            [
                "question" => 'To introduce yourself politely, you say:',
                "module_id" => 2,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Nepangaken, nami kula",
                "is_learning" => true,
                "concept" => "Nepangaken, nami kula... (Let me introduce myself, my name is...)",
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'How do you politely ask for someone\'s name?',
                "module_id" => 2,
                "type_id" => 1, // Multiple Choice
                "answer" => "Sinten naminipun?",
                "is_learning" => true,
                "concept" => "Sinten naminipun? (What is your name?)",
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'To say "I am from Surabaya," you say:',
                "module_id" => 2,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Kula saking Surabaya",
                "is_learning" => true,
                "concept" => "Kula saking... (I am from...)",
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'How do you say "I live at..."?',
                "module_id" => 2,
                "type_id" => 1, // Multiple Choice
                "answer" => "Panggenan kula ing",
                "is_learning" => true,
                "concept" => "Panggenan kula ing... (I live at...)",
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'To state your job, you say:',
                "module_id" => 2,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Kula nyambut damel dados",
                "is_learning" => true,
                "concept" => "Nyambut damel... (I work as...)",
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'How do you politely state your age?',
                "module_id" => 2,
                "type_id" => 1, // Multiple Choice
                "answer" => "Yuswa kula",
                "is_learning" => true,
                "concept" => "Yuswa kula... (My age is...)",
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'The polite phrase for "Nice to meet you" is:',
                "module_id" => 2,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Seneng kepanggih panjenengan",
                "is_learning" => true,
                "concept" => "Seneng kepanggih panjenengan. (Nice to meet you.)",
                "javanese_type_id" => 2, // Krama Madya
            ],

            // Final Quiz - Krama Madya
            [
                "question" => 'Sinten naminipun? is used to ask...',
                "module_id" => 2,
                "type_id" => 1, // Multiple Choice
                "answer" => "Name",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'How do you politely say "I am from..."?',
                "module_id" => 2,
                "type_id" => 1, // Multiple Choice
                "answer" => "Kula saking",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'The phrase Panggenan kula ing... refers to your...',
                "module_id" => 2,
                "type_id" => 1, // Multiple Choice
                "answer" => "Address",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'The polite way to say "My age is..." is...',
                "module_id" => 2,
                "type_id" => 1, // Multiple Choice
                "answer" => "Yuswa kula",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'To say "My age is", you say:',
                "module_id" => 2,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Yuswa kula",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'To say "I work as", you say:',
                "module_id" => 2,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Nyambut damel",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'Which phrase means "Let me introduce myself, my name is..."?',
                "module_id" => 2,
                "type_id" => 1, // Multiple Choice
                "answer" => "Nepangaken, nami kula",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 2, // Krama Madya
            ],
            [
                "question" => 'To politely say "Nice to meet you", you say:',
                "module_id" => 2,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Seneng kepanggih panjenengan",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 2, // Krama Madya
            ],

            // Lesson 2.3: Krama Inggil - "Kulawarga" (Describing Family)

            // Learning Phase - Krama Inggil
            [
                "question" => 'To ask for an elder\'s name, you say:',
                "module_id" => 2,
                "type_id" => 1, // Multiple Choice
                "answer" => "Asmanipun sinten?",
                "is_learning" => true,
                "concept" => "Asmanipun sinten? (What is their name? - respectful)",
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'To talk about your father, you say:',
                "module_id" => 2,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Rama kula",
                "is_learning" => true,
                "concept" => "Rama kula... (My father...)",
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'The respectful term for "My mother" is...',
                "module_id" => 2,
                "type_id" => 1, // Multiple Choice
                "answer" => "Ibu kula",
                "is_learning" => true,
                "concept" => "Ibu kula... (My mother...)",
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'How do you refer to an elder\'s child?',
                "module_id" => 2,
                "type_id" => 1, // Multiple Choice
                "answer" => "Putra panjenengan",
                "is_learning" => true,
                "concept" => "Putra panjenengan... (Your son/daughter...)",
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'The respectful term for "Your spouse" is:',
                "module_id" => 2,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Garwa panjenengan",
                "is_learning" => true,
                "concept" => "Garwa panjenengan... (Your spouse...)",
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'To refer to your grandmother, you say:',
                "module_id" => 2,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Eyang putri",
                "is_learning" => true,
                "concept" => "Eyang kakung/putri. (Grandfather/Grandmother.)",
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'The general term for "relative" is:',
                "module_id" => 2,
                "type_id" => 1, // Multiple Choice
                "answer" => "Sedherek kula",
                "is_learning" => true,
                "concept" => "Sedherek kula... (My relative...)",
                "javanese_type_id" => 3, // Krama Inggil
            ],

            // Final Quiz - Krama Inggil
            [
                "question" => 'Rama kula refers to...',
                "module_id" => 2,
                "type_id" => 1, // Multiple Choice
                "answer" => "My father",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'How do you respectfully refer to an elder\'s spouse?',
                "module_id" => 2,
                "type_id" => 1, // Multiple Choice
                "answer" => "Garwa panjenengan",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'The respectful term for "My mother" is...',
                "module_id" => 2,
                "type_id" => 1, // Multiple Choice
                "answer" => "Ibu kula",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'The term Eyang kakung refers to...',
                "module_id" => 2,
                "type_id" => 1, // Multiple Choice
                "answer" => "Grandfather",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'To ask for a respected person\'s name, you say:',
                "module_id" => 2,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Asmanipun sinten",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'To refer to your grandfather, you say:',
                "module_id" => 2,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Eyang kakung",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'Which phrase means "Your son/daughter..."?',
                "module_id" => 2,
                "type_id" => 1, // Multiple Choice
                "answer" => "Putra panjenengan",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 3, // Krama Inggil
            ],
            [
                "question" => 'The respectful term for "My relative" is:',
                "module_id" => 2,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Sedherek kula",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 3, // Krama Inggil
            ],

            // Lesson 2.4: Gladhen Tepangaken (Introductions Practice)
            [
                "question" => 'The question Asmanipun sinten? is used when asking for the name of...',
                "module_id" => 2,
                "type_id" => 1, // Multiple Choice
                "answer" => "A respected elder",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 4, // Gladhen
            ],
            [
                "question" => 'You\'re at a casual community event and start chatting with someone who looks about your age. How do you ask for their name?',
                "module_id" => 2,
                "type_id" => 1, // Multiple Choice
                "answer" => "Sapa jenengmu?",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 4, // Gladhen
            ],
            [
                "question" => 'You are in a job interview. When the interviewer asks about your age, which is the most professional way to answer?',
                "module_id" => 2,
                "type_id" => 1, // Multiple Choice
                "answer" => "Yuswa kula",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 4, // Gladhen
            ],
            [
                "question" => 'You\'re talking to your friend about their family. How do you respectfully refer to their grandfather?',
                "module_id" => 2,
                "type_id" => 1, // Multiple Choice
                "answer" => "Eyang kakungipun",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 4, // Gladhen
            ],
            [
                "question" => 'A new student, Andi, introduces himself to his teacher, Ibu Dewi. He says: "Nepangaken, Bu. Jenengku Andi." Which word should Andi change to be more polite?',
                "module_id" => 2,
                "type_id" => 1, // Multiple Choice
                "answer" => "Jenengku",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 4, // Gladhen
            ],
            [
                "question" => 'You are asking your manager, Pak Hartono, about his wife. You ask: "Pak, bojomu pripun kabare?" Which word is too informal and should be changed?',
                "module_id" => 2,
                "type_id" => 1, // Multiple Choice
                "answer" => "bojomu",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 4, // Gladhen
            ],
            [
                "question" => 'To politely say "Nice to meet you" to a new colleague, you say: Seneng ________ panjenengan.',
                "module_id" => 2,
                "type_id" => 2, // Fill in the Blank
                "answer" => "kepanggih",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 4, // Gladhen
            ],
            [
                "question" => 'You are telling your teacher about your mother. You respectfully say: ____ kula nembe tindak dhateng pasar.',
                "module_id" => 2,
                "type_id" => 2, // Fill in the Blank
                "answer" => "Ibu",
                "is_learning" => false,
                "concept" => null,
                "javanese_type_id" => 4, // Gladhen
            ],
        ]);

        
    }
}
