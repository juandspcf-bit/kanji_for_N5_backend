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
    public function showSingleKanji(KanjiForN5 $kanji)

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



}
