<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Completed extends Model
{
    use HasFactory;

    protected $table = "completed";

    protected $fillable = ["user_id", "module_id", "javanese_type_id"];

    public function user()
    {
        return $this->belongsTo(User::class, "user_id");
    }

    public function module()
    {
        return $this->belongsTo(Module::class, "module_id");
    }

    public function javaneseType()
    {
        return $this->belongsTo(JavaneseType::class, "javanese_type_id");
    }
}
