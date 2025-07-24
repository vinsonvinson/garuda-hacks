<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ModuleTitle extends Model
{
    use HasFactory;

    protected $table = "module_title";

    protected $fillable = ["title", "module_id", "javanese_type_id"];

    public function module()
    {
        return $this->belongsTo(Module::class, "module_id");
    }

    public function javaneseType()
    {
        return $this->belongsTo(JavaneseType::class, "javanese_type_id");
    }
}
