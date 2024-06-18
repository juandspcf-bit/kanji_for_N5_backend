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
use Illuminate\Http\Client\Response;



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
        //http://127.0.0.1:8000/api/v1/kanjis/雨

        $uuid = '';
        if ($request->hasHeader('uuid')) {
            $uuid = $request->header('uuid');
        } else {

            return Messages::errorMessage('Invalid credentials', 400);
        }

        if ($kanji === null) {

            return Messages::errorMessage('Not resource found', 400);
        }



        $firestore = app('firebase.firestore');
        $database = $firestore->database();
        $snapshot = $database
            ->collection('user_data')->document($uuid)->snapshot();
        if (!$snapshot->exists()) {


            return Messages::errorMessage($request, 'Invalid credentials', 400);
        }


        $kanjiCharacter = $kanji->kanji;

        try {
            $response = Http::withHeaders([
                'X-RapidAPI-Key' => env("API_KEY"),
                'X-RapidAPI-Host' => 'kanjialive-api.p.rapidapi.com'
            ])->get("https://kanjialive-api.p.rapidapi.com/api/public/kanji/$kanjiCharacter");

            return $this->create($response);
        } catch (\Throwable $th) {


            return Messages::errorMessage('Error in the server', 500);
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

    private function create(Response $response): KanjiDataResource
    {
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
                new MeaningExamplesApi($exampleData["meaning"]["english"], "",),
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
            "",
            end($strokes),
            new OnyomiApi($kanjiData["onyomi"]["romaji"], $kanjiData["onyomi"]["katakana"]),
            new KunyomiApi($kanjiData["kunyomi"]["romaji"], $kanjiData["kunyomi"]["hiragana"]),
            $kanjiData["video"]["mp4"],
            $strokes,
            $examples,
        );

        //return $response->collect();
        return new KanjiDataResource($kanjiAPI);;
    }
}
