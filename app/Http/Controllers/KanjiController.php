<?php

namespace App\Http\Controllers;

use App\Models\AudioExampleApi;
use App\Models\ExampleApi;
use App\Models\Kanji;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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
    public function show(string $kanjiCharacter)
    {



        try {
            $response = Http::withHeaders([
                'X-RapidAPI-Key' => "6e8768aba0mshd012d160ea864d6p18a6ccjsn40b2889eeaf9",
                'X-RapidAPI-Host' => 'kanjialive-api.p.rapidapi.com'
            ])->get("https://kanjialive-api.p.rapidapi.com/api/public/kanji/$kanjiCharacter");

            $examplesData = $response->collect("examples");

            /*             echo '<pre>';
            var_dump($examples);
            echo '</pre>'; */

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

            return $response->collect();
        } catch (\Throwable $th) {
            //throw $th;
            return 'error';
        }


        //$json = $response->json();


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
