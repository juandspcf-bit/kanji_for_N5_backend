<?php

use App\Http\Controllers\KanjiController;
use App\Http\Controllers\UserController;
use App\Utils\IniStorage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post("auth/access", [UserController::class, "createAndLogin"]);
Route::group(["middleware"=>["auth:sanctum"]], function () {

    Route::get('kanjis/{kanji:kanji}', [KanjiController::class, 'show']);
    
});

Route::fallback(function () {
    return [
        'meta' => [
            'message' => 'no resource found',
        ],
        "data" => [],
    ];
});
