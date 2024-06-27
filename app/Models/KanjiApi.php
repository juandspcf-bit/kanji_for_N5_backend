<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Http\Client\Response;
use App\Http\Resources\KanjiDataResource;

class KanjiApi
{
    // Properties
    public $kanjiCharacter;
    public $meaning;
    public $kanjiImageLink;
    public $onyomi;
    public $kunyomi;
    public $videoLink;
    public $strokes;
    public $examples;


    public function __construct(
        string $kanjiCharacter,
        string $meaning,

        string $kanjiImageLink,
        OnyomiApi $onyomi,
        KunyomiApi $kunyomi,
        string $videoLink,
        array $strokes,
        array $examples,


    ) {
        $this->kanjiCharacter = $kanjiCharacter;
        $this->meaning = $meaning;

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

    public static function createKanjiResponse(Response $response, string $code): KanjiDataResource
    {
        $kanjiData = $response->collect("kanji");

        $kanjiDB =  Kanji::where("kanji", "=", $kanjiData["character"])->first();
        $languageCodeDB = LanguageCode::where("code", "=", $code)->first();

        $examplesData = $response->collect("examples");
        $examplesDB = $kanjiDB->examples->select($languageCodeDB["language"]);
        $examples = [];

        for ($index = 0; $index < count($examplesData); $index++) {

            $exampleData = $examplesData[$index];

            $audioExampleApi = new AudioExampleApi(
                $exampleData["audio"]["opus"],
                $exampleData["audio"]["aac"],
                $exampleData["audio"]["ogg"],
                $exampleData["audio"]["mp3"]
            );

            $meaningExample = "";
            if (count($examplesDB) != 0) {
                $meaningExample = $examplesDB[$index][$languageCodeDB["language"]];
            } else {
                $meaningExample = $exampleData["meaning"]["english"];
            }

            $exampleApi = new ExampleApi(
                $exampleData["japanese"],
                $meaningExample, //$exampleData["meaning"]["english"],
                $audioExampleApi
            );

            $examples[] = $exampleApi;
        }



        $strokesData = $kanjiData["strokes"]["images"];

        $strokes = [];
        foreach ($strokesData as $stroke) {
            $strokes[] = $stroke;
        }



        $kanjiMeaning = "";

        if (isset($kanjiDB->meaning[$languageCodeDB["language"]])) {
            $kanjiMeaning = $kanjiDB->meaning[$languageCodeDB["language"]];
        } else {
            $kanjiMeaning = $kanjiData["meaning"]["english"];
        }
        

        $kanjiAPI = new KanjiApi(
            $kanjiData["character"],
            $kanjiMeaning,
            end($strokes),
            new OnyomiApi($kanjiData["onyomi"]["romaji"], $kanjiData["onyomi"]["katakana"]),
            new KunyomiApi($kanjiData["kunyomi"]["romaji"], $kanjiData["kunyomi"]["hiragana"]),
            $kanjiData["video"]["mp4"],
            $strokes,
            $examples,
        );



        return new KanjiDataResource($kanjiAPI);
    }
}
