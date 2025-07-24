<?php

use App\Http\Controllers\AIController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get("/live-check", function () {
    return response()->json(["status" => "ok"]);
});

Route::post("/login", [AuthController::class, "login"]);
Route::post("/register", [AuthController::class, "register"]);
Route::post("/user-verification", [AuthController::class, "validateUser"]);
Route::post("/logout", [AuthController::class, "logout"])->middleware("auth:sanctum");

Route::post("/forgot-password", [AuthController::class, "forgotPassword"]);
Route::post("/check-otp", [AuthController::class, "checkOtp"]);
Route::post("/reset-password", [AuthController::class, "resetPassword"]);

// route with middleware for authenticated users
Route::middleware("auth:sanctum")->group(function () {
    Route::get("/auth-check", function () {
    return response()->json(["status" => "ok"]);
    });

    Route::get("/module", [ModuleController::class, "index"]);
    Route::get("/question/{module_id}/{javanese_type_id}", [ModuleController::class, "question"]);
    Route::post("/finish-module", [ModuleController::class, "finishModule"]);

    Route::post("/ask-ai-feedback", [AIController::class, "askFeedback"]);

    Route::get("/profile", [ProfileController::class, "index"]);
});
