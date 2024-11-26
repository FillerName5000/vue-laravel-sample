<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieApiController;
use App\Http\Controllers\JwtAuthController;
use App\Http\Controllers\MovieAdminApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('language')->group(function () {
    Route::get("/movies/popular", [MovieApiController::class, "popular"]);
    Route::get("/movies/search", [MovieApiController::class, "search"])->where('searchTerm', '[a-zA-Z]+');
    Route::get("/movies/{id}", [MovieApiController::class, "find"])->where('id', '[0-9]+');

    Route::post("register", [JwtAuthController::class, "register"]);
    Route::post("login", [JwtAuthController::class, "login"]);

    Route::prefix('admin')->group(function () {
        Route::group(['middleware' => 'auth:api',  "auth.csrf.jwt"], function () {
            Route::get("profile", [JwtAuthController::class, "profile"]);
            Route::get("refresh", [JwtAuthController::class, "refreshToken"]);
            Route::get("logout", [JwtAuthController::class, "logout"]);

            Route::get("/movies", [MovieAdminApiController::class, "all"]);

            Route::post("/movies", [MovieAdminApiController::class, "create"]);
        });
    });
});



