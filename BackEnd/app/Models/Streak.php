<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Streak extends Model
{
    use HasFactory;

    protected $table = "streak";

    protected $fillable = ["user_id", "date_time"];

    public function user()
    {
        return $this->belongsTo(User::class, "user_id");
    }
}
