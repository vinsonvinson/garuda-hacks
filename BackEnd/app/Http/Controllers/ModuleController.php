<?php

namespace App\Http\Controllers;

use App\Models\Completed;
use App\Models\JavaneseType;
use App\Models\Module;
use App\Models\Streak;
use App\Models\User;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ModuleController extends Controller
{
    public function index()
    {
        $javanese_type = JavaneseType::get();
        $module = Module::orderBy("id")->get();

        foreach ($module as $value) {
            $value->img_url = asset("module-icon/" . $value->id. ".png");
            $value->title = $value->id . '. ' . $value->title;

            $value->type = $javanese_type->map(fn($item) => clone $item);

            foreach ($value->type as $type) {
                $type->title = $value->title($type->id)->first()->title;

                $type->is_unlock = $value->isUnlock($type->id);

                $type->is_completed = $value->isCompleted($type->id);
            }

            $value->is_unlock = $value->isUnlockModule();
        }

        $current_streak = User::find(Auth::id())->streak;

        // Cari hari Minggu (awal minggu)
        $startOfWeek = Carbon::now()->startOfWeek(Carbon::SUNDAY); // atau use ->startOfWeek() untuk default Monday

        // Akhir minggu (Sabtu)
        $endOfWeek = $startOfWeek->copy()->addDays(6);

        // Buat periode seminggu
        $period = CarbonPeriod::create($startOfWeek, $endOfWeek);

        $streak = Streak::where("user_id", Auth::id())
            ->orderByDesc("date_time")
            ->take(7)
            ->get()
            ->map(function ($streak) {
                return \Carbon\Carbon::parse($streak->date_time)->format(
                    "Y-m-d"
                );
            })
            ->values()->toArray();

        // Hasil array
        $week = [];

        foreach ($period as $date) {
            $week[] = [
                "day_name" => $date->translatedFormat("l"), // e.g., 'Senin'
                "date" => $date->format("Y-m-d"), // e.g., '2025-07-20'
                "is_streak" => in_array($date->format("Y-m-d"), $streak),
            ];
        }

        return response()->json([
            "modules" => $module,
            "current_streak" => $current_streak,
            "week" => $week,
        ]);
    }

    public function question($module_id, $javanese_type_id)
    {
        $module = Module::findOrFail($module_id);
        $module->type_title = $module->title($javanese_type_id)->first()->title;
        $javanese_type = JavaneseType::findOrFail($javanese_type_id);

        if (!$module->isUnlock($javanese_type_id)) {
            return response()->json(
                [
                    "message" => "Module is locked",
                ],
                403
            );
        }
        $questions = $module->quiz($javanese_type_id)->get();

        return response()->json([
            "module" => $module,
            "javanese_type" => $javanese_type,
            "questions" => $questions,
        ]);
    }

    public function finishModule(Request $request)
    {
        $request->validate([
            "module_id" => "required|exists:module,id",
            "javanese_type_id" => "required|exists:javanese_type,id",
        ]);

        Completed::create([
            "user_id" => Auth::id(),
            "module_id" => $request->module_id,
            "javanese_type_id" => $request->javanese_type_id,
        ]);

        $user = User::findOrFail(Auth::id());

        $last_learn_at = $user->last_learn_at; // simpan dulu sebelum update
        $user->update([
            "last_learn_at" => now(),
        ]);

        // tambahkan streak jika belajar kemarin
        if (
            $last_learn_at &&
            Carbon::parse($last_learn_at)->diffInDays(now()) >= 1
        ) {
            $user->increment("streak");
        } else {
            $user->update(["streak" => 1]);
        }

        if ($user->streak > $user->highest_streak) {
            $user->update(["highest_streak" => $user->streak]);
        }

        Streak::create(["user_id" => Auth::id(), "date_time" => now()]);

        return response()->json([
            "message" => "Module completed successfully",
        ]);
    }
}
