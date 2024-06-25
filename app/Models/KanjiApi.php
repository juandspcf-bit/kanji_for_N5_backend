<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Http\Client\Response;
use App\Http\Resources\KanjiDataResource;

class KanjiApi
{
    // Properties
    public $kanjiCharacter;
    public $englishMeaning;
    public $spanishMeaning;
    public $kanjiImageLink;
    public $onyomi;
    public $kunyomi;
    public $videoLink;
    public $strokes;
    public $examples;


    public function __construct(
        string $kanjiCharacter,
        string $englishMeaning,
        string $spanishMeaning,
        string $kanjiImageLink,
        OnyomiApi $onyomi,
        KunyomiApi $kunyomi,
        string $videoLink,
        array $strokes,
        array $examples,


    ) {
        $this->kanjiCharacter = $kanjiCharacter;
        $this->englishMeaning = $englishMeaning;
        $this->spanishMeaning = $spanishMeaning;
        $this->kanjiImageLink = $kanjiImageLink;
        $this->onyomi = $onyomi;
        $this->kunyomi = $kunyomi;
        $this->videoLink = $videoLink;
        $this->strokes = $strokes;
        $this->examples = $examples;
    }

    /**
     * @param Response $response
     * @return \App\Http\Resources\KanjiDataResource
     */

    public static function createKanjiResponse(Response $response): KanjiDataResource
    {
        $kanjiData = $response->collect("kanji");

        $kanjiDB =  Kanji::where("kanji", "=", $kanjiData["character"])->first();
        

        $examplesData = $response->collect("examples");
        $examplesDB = $kanjiDB->examples;
        $examples = [];

        

        for ($index = 0; $index < count($examplesData); $index++) {

            $exampleData = $examplesData[$index];

            $audioExampleApi = new AudioExampleApi(
                $exampleData["audio"]["opus"],
                $exampleData["audio"]["aac"],
                $exampleData["audio"]["ogg"],
                $exampleData["audio"]["mp3"]
            );

            $spanishTranslation = "";
            if (count($examplesDB)!=0) {
                $spanishTranslation = $examplesDB[$index]->spanish;
            }
            $exampleApi = new ExampleApi(
                $exampleData["japanese"],
                new MeaningExamplesApi(
                    $exampleData["meaning"]["english"],
                    $spanishTranslation,
                ),
                $audioExampleApi
            );

            $examples[] = $exampleApi;
        }

        

        $strokesData = $kanjiData["strokes"]["images"];

        $strokes = [];
        foreach ($strokesData as $stroke) {
            $strokes[] = $stroke;
        }

        $kanjiAPI = new KanjiApi(
            $kanjiData["character"],
            $kanjiData["meaning"]["english"],
            isset($kanjiDB->meaning->spanish)?$kanjiDB->meaning->spanish:"",
            end($strokes),
            new OnyomiApi($kanjiData["onyomi"]["romaji"], $kanjiData["onyomi"]["katakana"]),
            new KunyomiApi($kanjiData["kunyomi"]["romaji"], $kanjiData["kunyomi"]["hiragana"]),
            $kanjiData["video"]["mp4"],
            $strokes,
            $examples,
        );

        

        return new KanjiDataResource($kanjiAPI);;
    }
}
