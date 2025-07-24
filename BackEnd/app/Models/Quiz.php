<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Quiz extends Model
{
    use HasFactory;

    protected $table = "quiz";

    protected $fillable = ["question", "type_id", "module_id", "answer"];

    public function module()
    {
        return $this->belongsTo(Module::class, "module_id");
    }

    public function type()
    {
        return $this->belongsTo(QuestionType::class, "type_id");
    }

    public function choices()
    {
        return $this->hasMany(Choice::class, "quiz_id");
    }
}
