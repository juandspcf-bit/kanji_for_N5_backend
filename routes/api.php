<?php

use App\Http\Controllers\KanjiController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::post("auth/access", [UserController::class, "createAndLogin"]);
Route::group(["middleware"=>["auth:sanctum"]], function () {
    Route::post('searchKanjiByWord', [KanjiController::class, 'searchKanjiByWord']);
    Route::post('searchKanjisArray', [KanjiController::class, 'searchKanjisArray']);
    Route::post("auth/logout", [UserController::class, "destroy"]);
});

Route::fallback(function () {
    return response()->json([
        'meta' => [
            'message' => "resource not found"
        ],
        "data" => [],
    ], 404);
});
