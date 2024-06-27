<?php

namespace App\Http\Controllers;


use App\Utils\Messages;
use App\Models\KanjiApi;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

use App\Models\KanjiForN5;
use Illuminate\Http\Client\Pool;


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


            return Messages::errorMessage($th->getMessage(), 500);
        }
    }


    public function searchKanjiWithEnglishMeaning(Request $request)

    {
        //http://127.0.0.1:8000/api/v1/kanjis/雨

        $englishMeaning = $request->meaning;

        try {


            $response = Http::withHeaders([
                'X-RapidAPI-Key' => env("API_KEY"),
                'X-RapidAPI-Host' => 'kanjialive-api.p.rapidapi.com'
            ])->withQueryParameters([
                'kem' => $englishMeaning,
            ])->get('https://kanjialive-api.p.rapidapi.com/api/public/search/advanced/');

            if ($response->failed()) {
                return Messages::errorMessage("no corresponding kanji found for english word", 500);
            }

            if (!$response->collect()->isNotEmpty()) {
                
                return Messages::errorMessage("no corresponding kanji found for english word", 500);
            }

            $arrayKanji = $response->collect()->first();

            $response = Http::withHeaders([
                'X-RapidAPI-Key' => env("API_KEY"),
                'X-RapidAPI-Host' => 'kanjialive-api.p.rapidapi.com'
            ])->get("https://kanjialive-api.p.rapidapi.com/api/public/kanji/" . $arrayKanji["kanji"]["character"]);

            if ($response->failed()) {
                return Messages::errorMessage("error in fetching kanji data", 500);
            }

            return KanjiApi::createKanjiResponse($response);
        } catch (\Throwable $th) {


            return Messages::errorMessage($th->getMessage(), 500);
        }
    }



    public function searchKanjiAlsoWithSpanishMeaning(Request $request)

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

            if ($response->failed()) {
                return Messages::errorMessage("error in translation", 500);
            }

            $data = $response->collect("data");
            $textTranslated = $data["translations"]["translatedText"];

           



            $response = Http::withHeaders([
                'X-RapidAPI-Key' => env("API_KEY"),
                'X-RapidAPI-Host' => 'kanjialive-api.p.rapidapi.com'
            ])->withQueryParameters([
                'kem' => $textTranslated,
            ])->get('https://kanjialive-api.p.rapidapi.com/api/public/search/advanced/');

            if ($response->failed()) {
                return Messages::errorMessage("no corresponding kanji found for english word", 500);
            }

            if (!$response->collect()->isNotEmpty()) {
                
                return Messages::errorMessage("no corresponding kanji found for english word", 500);
            }

            $arrayKanji = $response->collect()->first();

            $response = Http::withHeaders([
                'X-RapidAPI-Key' => env("API_KEY"),
                'X-RapidAPI-Host' => 'kanjialive-api.p.rapidapi.com'
            ])->get("https://kanjialive-api.p.rapidapi.com/api/public/kanji/" . $arrayKanji["kanji"]["character"]);

            if ($response->failed()) {
                return Messages::errorMessage("error in fetching kanji data", 500);
            }

            $kanjiForN5 = KanjiForN5::where('kanji', $arrayKanji["kanji"]["character"])->get();;          
            $isInKanjiForN5 = $kanjiForN5->isNotEmpty();
            
        
            return KanjiApi::createKanjiResponse($response);
        } catch (\Throwable $th) {


            return Messages::errorMessage($th->getMessage(), 500);
        }
    }


    public function searchKanjisArray(Request $request)
    {

        $kanjis = $request->kanjis;


        try {
            $responses = Http::pool(fn (Pool $pool) => $this->generateRequests($pool, $kanjis));

            foreach ($responses as $response) {
                if ($response->failed()) {
                    return Messages::errorMessage("failed one of the kanji request", 500);;
                }
            }

            $data = [];
            foreach ($responses as $response) {
                $data[] = KanjiApi::createKanjiResponse($response);
            }

            return response()->json(
                [
                    'meta' => [
                        'message' => "success",
                    ],
                    "data" => $data
                ],
                200
            );
        } catch (\Throwable $th) {
            return Messages::errorMessage($th->getMessage(), 500);
        }
    }

    private function generateRequests(Pool $pool, array $kanjis): array
    {
        $headers = [
            'X-RapidAPI-Key' => env("API_KEY"),
            'X-RapidAPI-Host' => 'kanjialive-api.p.rapidapi.com'
        ];
        $requests = [];
        foreach ($kanjis as $kanji) {
            $requests[] = $pool->withHeaders($headers)->get("https://kanjialive-api.p.rapidapi.com/api/public/kanji/" . $kanji);
        }

        return $requests;
    }
}
