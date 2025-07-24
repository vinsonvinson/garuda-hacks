<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Choice extends Model
{
    use HasFactory;

    protected $table = "choice";

    protected $fillable = ["text", "quiz_id"];

    public function quiz()
    {
        return $this->belongsTo(Quiz::class, "quiz_id");
    }
}
