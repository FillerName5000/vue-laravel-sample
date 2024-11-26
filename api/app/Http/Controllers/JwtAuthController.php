<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Facades\JWTAuth;
use Nette\Utils\Random;

class JwtAuthController extends Controller
{
    public function register(Request $request){

        $request->validate([
            "name" => "required",
            "email" => "required|email|unique:users",
            "password" => "required|confirmed"
        ]);

        User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => Hash::make($request->password)
        ]);

        return response()->json([
            "status" => true,
            "message" => "User registered successfully",
            "additionalMessage" => "Not like a non-admin can do much but have fun"
        ]);
    }

    public function login(Request $request){

        $request->validate([
            "email" => "required|email",
            "password" => "required"
        ]);

        if (!$this->isAdmin($request->only('email'))) {
            return response()->json([
                "status" => false,
                "message" => "Invalid login details"
            ]);
        } else {
            $csrfLength = env("CSRF_TOKEN_LENGTH");
            $csrfToken = Random::generate($csrfLength);

            $token = JWTAuth::claims(['X-XSRF-TOKEN' => $csrfToken])->attempt([
                "email" => $request->email,
                "password" => $request->password
            ]);

            if(empty($token)){
                return response()->json([
                    "status" => false,
                    "message" => "Invalid login details"
                ]);
            }

            $ttl = env("JWT_COOKIE_TTL");
            $tokenCookie = cookie("token", $token, $ttl);
            $csrfCookie = cookie("X-XSRF-TOKEN", $csrfToken, $ttl);

            return response(["message" => "User logged in succcessfully"])
            ->withCookie($tokenCookie)
            ->withCookie($csrfCookie);
        }
    }

    public function profile(){

        $userdata = auth()->user();

        return response()->json([
            "status" => true,
            "message" => "Profile data",
            "data" => $userdata
        ]);
    }

    public function refreshToken(){

        $csrfLength = env("CSRF_TOKEN_LENGTH");
        $csrfToken = Random::generate($csrfLength);

        $refreshedToken = JWTAuth::claims(['X-XSRF-TOKEN' => $csrfToken])->refresh();

        $ttl = env("JWT_COOKIE_TTL");
        $tokenCookie = cookie("token", $refreshedToken, $ttl);
        $csrfCookie = cookie("X-XSRF-TOKEN", $csrfToken, $ttl);

        return response(["message" => "Token refresh successfully"])
        ->withCookie($tokenCookie)
        ->withCookie($csrfCookie);

    }

    public function logout(){

        auth()->logout();

        return response()->json([
            "status" => true,
            "message" => "User logged out successfully"
        ]);
    }

    private function isAdmin($credentials): bool
    {
        $user = User::where('email', $credentials["email"])->first();

        if (!$user || !$user->is_admin) { //password check happens in the login method
            return false;
        }
        return true;
    }
}
/*
{
   "name": "test1",
   "email": "test1@gmail.com",
   "password": "pwd1",
   "password_confirmation": "pwd1"
}
*/
