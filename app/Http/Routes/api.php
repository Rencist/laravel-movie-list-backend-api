<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MovieController;

Route::get('hello', function () {
    return response()->json();
});

Route::post('/create_user', [UserController::class, 'createUser']);
Route::post('/login_user', [UserController::class, 'loginUser']);
Route::get('/get_movies', [MovieController::class, 'movies']);
Route::get('/detail_movie', [MovieController::class, 'detailMovie']);

Route::middleware(['iam'])->group(
    function () {
        Route::get('test', function(){
            return response()->json([
                "success" => true
            ]);
        });
    }
);
    
Route::middleware(['iam', 'admin'])->group(
    function () {
    }
);