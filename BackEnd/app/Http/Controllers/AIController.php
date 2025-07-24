<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class AIController extends Controller
{
    public function askFeedback(Request $request)
    {
        $request->validate([
            'question_id' => 'required|exists:quiz,id',
            'wrong_answer' => 'required|string',
        ]);

        $name = User::findOrFail(Auth::id())->name;
        $quiz = Quiz::findOrFail($request->question_id);
        $question = $quiz->question;
        $right_answer = $quiz->answer;

        $prompt = "You are a javanese language tutor. Provide clear feedback in english to the student. There is a question in Javanese language: '$question'. The student answered '$request->wrong_answer', but the correct answer is '$right_answer'. Please provide feedback to the student, $name, on why their answer is incorrect.";
        
        $apiKey = env('TOGETHER_API_KEY'); // pastikan ini ada di .env

    $response = Http::withToken($apiKey)
        ->post('https://api.together.xyz/v1/chat/completions', [
            'model' => 'Qwen/Qwen2.5-VL-72B-Instruct',
            'messages' => [
                [
                    'role' => 'user',
                    'content' => $prompt
                ]
            ],
        ]);

    if ($response->successful()) {
        $data = $response->json();

        // Ambil hanya content dari response
        $content = $data['choices'][0]['message']['content'] ?? 'Tidak ada jawaban';

        return response()->json(['AI_response' => $content]);
    } else {
        return response()->json([
            'error' => 'Request failed',
            'status' => $response->status(),
            'body' => $response->body()
        ], $response->status());
    }
    }
}
