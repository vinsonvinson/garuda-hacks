<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JavaneseType extends Model
{
    use HasFactory;

    protected $table = "javanese_type";

    protected $fillable = ["name"];

    public function completed()
    {
        return $this->hasMany(Completed::class, "javanese_type_id");
    }
}
