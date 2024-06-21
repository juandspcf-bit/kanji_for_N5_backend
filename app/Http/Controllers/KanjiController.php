<?php

namespace App\Http\Controllers;

use App\Models\Kanji;
use App\Utils\Messages;
use App\Models\KanjiApi;
use App\Models\OnyomiApi;
use App\Models\ExampleApi;
use App\Models\KunyomiApi;
use Illuminate\Http\Request;
use App\Models\AudioExampleApi;
use App\Models\MeaningExamplesApi;
use Illuminate\Support\Facades\Http;
use App\Http\Resources\KanjiDataResource;
use App\Models\KanjiForN5;
use Illuminate\Http\Client\Response;



class KanjiController extends Controller
{
    public function showSingleKanjiN5(KanjiForN5 $kanji)

    {
        //http://127.0.0.1:8000/api/v1/kanjis/雨


        if ($kanji === null) {

            return Messages::errorMessage('Not resource found', 400);
        }


        $kanjiCharacter = $kanji->kanji;

        try {
            $response = Http::withHeaders([
                'X-RapidAPI-Key' => env("API_KEY"),
                'X-RapidAPI-Host' => 'kanjialive-api.p.rapidapi.com'
            ])->get("https://kanjialive-api.p.rapidapi.com/api/public/kanji/$kanjiCharacter");

            return KanjiApi::createKanjiResponse($response);
        } catch (\Throwable $th) {


            return Messages::errorMessage($th, 500);
        }
    }

    public function searchKanjiWithSpanishMeaning(Request $request)

    {
        //http://127.0.0.1:8000/api/v1/kanjis/雨

        $spanishMeaning = $request->meaning;

        try {
            $response = Http::withHeaders([
                'X-RapidAPI-Key' => env("API_KEY"),
                'X-RapidAPI-Host' => 'deep-translate1.p.rapidapi.com',
                'Content-Type' => 'application/json',
            ])->post("https://deep-translate1.p.rapidapi.com/language/translate/v2", [
                "q" => $spanishMeaning,
                "source" => 'es',
                "target" => 'en'
            ]);

            $data = $response->collect("data");
            $textTranslated = $data["translations"]["translatedText"];

            return response()->json(
                [
                    "status" => true,
                    "data" => $textTranslated,
                ],
                200
            );
        } catch (\Throwable $th) {


            return Messages::errorMessage($th, 500);
        }



        /* if ($kanji === null) {

            return Messages::errorMessage('Not resource found', 400);
        }


        $kanjiCharacter = $kanji->kanji;

        try {
            $response = Http::withHeaders([
                'X-RapidAPI-Key' => env("API_KEY"),
                'X-RapidAPI-Host' => 'kanjialive-api.p.rapidapi.com'
            ])->get("https://kanjialive-api.p.rapidapi.com/api/public/kanji/$kanjiCharacter");

            return KanjiApi::createKanjiResponse($response);
        } catch (\Throwable $th) {


            return Messages::errorMessage($th, 500);
        } */
    }
}
