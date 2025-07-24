<?php

namespace App\Http\Controllers;

use App\Models\Completed;
use App\Models\JavaneseType;
use App\Models\Module;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $data = User::find(Auth::id());

        $fullname = $data->name;

        $total_lesson = Module::count() * JavaneseType::count();
        $completed = Completed::where("user_id", Auth::id())->count();
        $progress = $completed / $total_lesson;

        $current_streak = $data->streak;
        $highest_streak = $data->highest_streak;

        $profile_pict =
            "https://ui-avatars.com/api/?bold=true&background=random&size=512&name=" .
            $fullname;

        return response()->json([
            "fullname" => $fullname,
            "completed" => $completed,
            "progress" => $progress,
            "current_streak" => $current_streak,
            "highest_streak" => $highest_streak,
            "profile_pict" => $profile_pict,
        ]);
    }
}
