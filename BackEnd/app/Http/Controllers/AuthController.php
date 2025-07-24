<?php

namespace App\Http\Controllers;

use App\Models\Otp;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            "email" => ["required", "email"],
            "password" => ["required"],
        ]);

        $user = User::where("email", $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json(["message" => "Login gagal"], 401);
        }

        if (!$user->is_validated) {
            return response()->json(
                ["message" => "Akun belum diverifikasi"],
                403
            );
        }

        // reset streak if last learn was more than 1 day ago
        if ($user->last_learn_at && Carbon::parse($user->last_learn_at)->diffInDays(now()) > 1) {
            $user->update(["streak" => 0]);
        }

        $token = $user->createToken("api-token")->plainTextToken;

        return response()->json([
            "access_token" => $token,
            "token_type" => "Bearer",
            "user" => $user,
        ]);
    }

    public function register(Request $request)
    {
        $request->validate([
            "name" => "required|string|max:255",
            "email" => "required|string|email|max:255|unique:users",
            "password" => "required|string|min:8",
        ]);

        $user = User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => Hash::make($request->password),
        ]);

        // send email with OTP
        $otp = rand(100000, 999999);
        Otp::create([
            "email" => $user->email,
            "otp" => $otp,
        ]);

        $email = $user->email;

        Mail::send("send_otp", ["otp" => $otp], function ($message) use (
            $email
        ) {
            $message->to($email)->subject("Kode OTP Verifikasi Akun Anda");
        });

        return response()->json(
            [
                "message" => "User registered successfully",
                "user" => $user,
            ],
            201
        );
    }

    public function validateUser(Request $request)
    {
        $request->validate([
            "otp" => "required",
            "email" => "required|email",
        ]);

        $user = User::where("email", $request->email)->first();

        if (!$user) {
            return response()->json(["message" => "User not found"], 404);
        }

        $otp = Otp::where("email", $request->email)
            ->where("otp", $request->otp)
            ->first();

        if (!$otp) {
            return response()->json(["message" => "Invalid OTP"], 401);
        }

        $user->is_validated = true;
        $user->save();

        $otp->delete();

        return response()->json([
            "message" => "User is validated",
            "user" => $user,
        ]);
    }

    public function logout(Request $request)
    {
        $request
            ->user()
            ->currentAccessToken()
            ->delete();

        return response()->json([
            "message" => "Logged out successfully",
        ]);
    }

    public function forgotPassword(Request $request)
    {
        $request->validate([
            "email" => "required|email",
        ]);

        $user = User::where("email", $request->email)->first();

        if (!$user) {
            return response()->json(["message" => "User not found"], 404);
        }

        $otp = rand(100000, 999999);
        Otp::create([
            "email" => $user->email,
            "otp" => $otp,
        ]);

        $email = $user->email;

        // send email with reset link
        Mail::send("send_otp_reset_password", ["otp" => $otp], function (
            $message
        ) use ($email) {
            $message->to($email)->subject("Reset Password");
        });

        return response()->json(["message" => "Reset link sent"]);
    }

    public function checkOtp(Request $request)
    {
        $request->validate([
            "email" => "required|email",
            "otp" => "required",
        ]);

        $otp = Otp::where("email", $request->email)
            ->where("otp", $request->otp)
            ->first();

        if (!$otp) {
            return response()->json(["message" => "Invalid OTP", "validity" => false], 401);
        }

        return response()->json(["message" => "OTP is valid", "validity" => true]);
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            "email" => "required|email",
            "otp" => "required",
            "password" => "required|string|min:8",
        ]);

        $user = User::where("email", $request->email)->first();

        if (!$user) {
            return response()->json(["message" => "User not found"], 404);
        }

        $otp = Otp::where("email", $request->email)
            ->where("otp", $request->otp)
            ->first();

        if (!$otp) {
            return response()->json(["message" => "Invalid OTP"], 401);
        }

        $user->password = Hash::make($request->password);
        $user->save();

        $otp->delete();

        return response()->json(["message" => "Password reset successfully"]);
    }
}
