<?php

use App\Http\Controllers\KanjiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::group(['prefix'=>'v1', 'namespace'=>'App\Http\Controllers'], function(){

    Route::get('kanji/{kanjiCharacter}', [KanjiController::class, 'show']);

 
});