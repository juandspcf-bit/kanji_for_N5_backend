<?php

declare(strict_types=1);

namespace App\Models;

use App\Utils\Messages;
use Illuminate\Support\Collection;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;
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


        $examples = KanjiApi::getExamples($examplesData, $examplesDB, $code, $languageCodeDB);
        $strokes = KanjiApi::getStrokes($kanjiData);
        $kanjiMeaning = KanjiApi::getStaticMeaning($kanjiDB, $languageCodeDB, $kanjiData, $code);


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


    private static function translateExamples(Collection $examplesData, string $code): array
    {
        $chain = "";

        for ($index = 0; $index < count($examplesData); $index++) {
            $exampleData = $examplesData[$index];
            $data = $exampleData["meaning"]["english"];
            if ($index < count($examplesData) - 1) {
                $chain = $chain . $data . ";";
            } else {
                $chain = $chain . $data;
            }
        }

        $response = Http::withHeaders([
            'X-RapidAPI-Key' => env("API_KEY"),
            'X-RapidAPI-Host' => 'deep-translate1.p.rapidapi.com',
            'Content-Type' => 'application/json',
        ])->post("https://deep-translate1.p.rapidapi.com/language/translate/v2", [
            "q" => $chain,
            "source" => "en",
            "target" => $code
        ]);

        if ($response->failed()) {
            return Messages::errorMessage("error in translation", 500);
        }

        $data = $response->collect("data");
        $textTranslated = $data["translations"]["translatedText"];

        $arrayTextTranslated = explode(";", $textTranslated);

        return $arrayTextTranslated;
    }

    private static function translateMeaning(Collection $kanjiData, string $code): string
    {
        $kanjiMeaningEn = $kanjiData["meaning"]["english"];
        $response = Http::withHeaders([
            'X-RapidAPI-Key' => env("API_KEY"),
            'X-RapidAPI-Host' => 'deep-translate1.p.rapidapi.com',
            'Content-Type' => 'application/json',
        ])->post("https://deep-translate1.p.rapidapi.com/language/translate/v2", [
            "q" => $kanjiMeaningEn,
            "source" => "en",
            "target" => $code
        ]);

        if ($response->failed()) {
            return Messages::errorMessage("error in translation", 500);
        }

        $data = $response->collect("data");
        $kanjiMeaningTranslated = $data["translations"]["translatedText"];

        return $kanjiMeaningTranslated;
    }

    private static function getExamples(Collection $examplesData, $examplesDB, string $code, $languageCodeDB): array
    {
        $arrayTextTranslated = [];
        if (count($examplesDB) == 0 && $code !== "en") {
            $arrayTextTranslated = KanjiApi::translateExamples($examplesData, $code);
        }

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
            } elseif (count($arrayTextTranslated) != 0) {
                $meaningExample = $arrayTextTranslated[$index];
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
        return $examples;
    }

    private static function getStaticMeaning($kanjiDB, $languageCodeDB, $kanjiData, string $code,): string
    {
        $kanjiMeaning = "";

        if (isset($kanjiDB->meaning[$languageCodeDB["language"]])) {
            $kanjiMeaning = $kanjiDB->meaning[$languageCodeDB["language"]];
        } elseif (!isset($kanjiDB->meaning[$languageCodeDB["language"]]) && $code !== "en") {
            $kanjiMeaning = KanjiApi::translateMeaning($kanjiData, $code);
        } else {
            $kanjiMeaning = $kanjiData["meaning"]["english"];
        }

        return $kanjiMeaning;
    }

    private static function getStrokes($kanjiData): array
    {
        $strokesData = $kanjiData["strokes"]["images"];

        $strokes = [];
        foreach ($strokesData as $stroke) {
            $strokes[] = $stroke;
        }

        return $strokesData;
    }
}
