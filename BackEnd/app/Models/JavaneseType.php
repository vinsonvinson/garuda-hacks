<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JavaneseType extends Model
{
    use HasFactory;

    protected $table = "javanese_type";

    protected $fillable = ["name"];

    public function modules()
    {
        return $this->hasMany(Module::class, "javanese_type_id");
    }
}
