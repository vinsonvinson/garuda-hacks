<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Module extends Model
{
    use HasFactory;

    protected $table = "module";

    protected $fillable = ["text", "javanese_type_id"];

    public function javaneseType()
    {
        return $this->belongsTo(JavaneseType::class, "javanese_type_id");
    }

    public function quizzes()
    {
        return $this->hasMany(Quiz::class, "module_id");
    }
}
