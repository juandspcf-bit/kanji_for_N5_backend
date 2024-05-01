<?php

namespace App\Http\Controllers;

use Kreait\Firebase\Factory;

use App\Models\Kanji;
use App\Models\KanjiApi;
use App\Models\ExampleApi;
use Illuminate\Http\Request;
use App\Models\AudioExampleApi;
use Illuminate\Support\Facades\Http;
use App\Http\Resources\KanjiDataResource;
use App\Models\KunyomiApi;
use App\Models\OnyomiApi;

class KanjiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Kanji $kanji)

    {

        $uuid='';
        if ($request->hasHeader('uuid')) {
            $uuid = $request->header('uuid');
        }else{
            return [
                'meta' => [
                    'message' => 'invalid credentials',
                ],
                "data" => [],
            ];
        }

        if ($kanji === null) {
            return [
                'meta' => [
                    'message' => 'no resurce found',
                ],
                "data" => [],
            ];
        }

        $firestore = app('firebase.firestore');
        $database = $firestore->database();
        $snapshot = $database
            ->collection('user_data')->document($uuid)->snapshot();
        if(!$snapshot->exists()){
            return [
                'meta' => [
                    'message' => 'invalid credentials',
                ],
                "data" => [],
            ];
        }

        var_dump('valid user');

        $kanjiCharacter = $kanji->kanji;

        try {
            $response = Http::withHeaders([
                'X-RapidAPI-Key' => env("API_KEY"),
                'X-RapidAPI-Host' => 'kanjialive-api.p.rapidapi.com'
            ])->get("https://kanjialive-api.p.rapidapi.com/api/public/kanji/$kanjiCharacter");

            $examplesData = $response->collect("examples");

            $examples = [];

            foreach ($examplesData as $exampleData) {
                $audioExampleApi = new AudioExampleApi(
                    $exampleData["audio"]["opus"],
                    $exampleData["audio"]["aac"],
                    $exampleData["audio"]["ogg"],
                    $exampleData["audio"]["mp3"]
                );

                $exampleApi = new ExampleApi(
                    $exampleData["japanese"],
                    $exampleData["meaning"]["english"],
                    $audioExampleApi
                );

                $examples[] = $exampleApi;
            }

            $kanjiData = $response->collect("kanji");

            $strokesData = $kanjiData["strokes"]["images"];

            $strokes = [];
            foreach ($strokesData as $stroke) {
                $strokes[] = $stroke;
            }

            $kanjiAPI = new KanjiApi(
                $kanjiData["character"],
                $kanjiData["meaning"]["english"],
                end($strokes),
                new OnyomiApi($kanjiData["onyomi"]["romaji"], $kanjiData["onyomi"]["katakana"]),
                new KunyomiApi($kanjiData["kunyomi"]["romaji"], $kanjiData["kunyomi"]["hiragana"]),
                $kanjiData["video"]["mp4"],
                $strokes,
                $examples,
            );

            //return $response->collect();
            return new KanjiDataResource($kanjiAPI);;
        } catch (\Throwable $th) {
            return [
                'meta' => [
                    'message' => 'error in the server',
                ],
                "data" => [],
            ];
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kanji $kanji)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kanji $kanji)
    {
        //
    }
}
