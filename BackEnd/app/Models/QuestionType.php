<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class QuestionType extends Model
{
    use HasFactory;

    protected $table = "question_type";

    protected $fillable = ["name"];

    public function quizzes()
    {
        return $this->hasMany(Quiz::class, "type_id");
    }
}
