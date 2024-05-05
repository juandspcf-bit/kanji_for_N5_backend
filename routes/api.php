<?php

use App\Http\Controllers\KanjiController;
use App\Utils\IniStorage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers'], function () {

    Route::get('kanjis/{kanji:kanji}', [KanjiController::class, 'show']);
    Route::get('iniStorage', [IniStorage::class, 'startFilling']);
});

Route::fallback(function () {
    return [
        'meta' => [
            'message' => 'no resurce found',
        ],
        "data" => [],
    ];
});
