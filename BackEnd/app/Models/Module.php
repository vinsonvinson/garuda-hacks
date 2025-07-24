<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Auth;

class Module extends Model
{
    use HasFactory;

    protected $table = "module";

    protected $fillable = ["title"];

    public function quiz($javanese_type_id)
    {
        return $this->hasMany(Quiz::class, "module_id")
            ->where("javanese_type_id", $javanese_type_id)->with("choices");
    }

    public function title($javanese_type_id)
    {
        return $this->hasOne(ModuleTitle::class, "module_id")
            ->where("javanese_type_id", $javanese_type_id);
    }

    public function anyCompleted()
    {
        return $this->hasMany(Completed::class, "module_id")
            ->where("user_id", Auth::id());
    }

    public function completed($javanese_type_id)
    {
        return $this->hasMany(Completed::class, "module_id")
            ->where("user_id", Auth::id())
            ->where("javanese_type_id", $javanese_type_id);
    }

    public function isCompleted($javanese_type_id)
    {
        return $this->completed($javanese_type_id)->exists();
    }

    public function isUnlock($javanese_type_id)
    {
        if ($this->id == 1 && $javanese_type_id != 4) {
            return true; // First module is always unlocked
        }
        if ($javanese_type_id == 4) {
            return $this->anyCompleted()->count() >= 3; // Last type is unlocked if at least 3 types are completed
        }

        return Completed::where('module_id', $this->id - 1)
        ->where('user_id', Auth::id())
        ->where('javanese_type_id', $javanese_type_id)
        ->exists();
    }

    public function isUnlockModule()
    {
        if ($this->id == 1) {
            return true; // First module is always unlocked
        }

        $previousModule = Module::find($this->id - 1);
        if ($previousModule) {
            return $previousModule->anyCompleted()->exists();
        }

        return false; // If no previous module, it's locked
    }
}
