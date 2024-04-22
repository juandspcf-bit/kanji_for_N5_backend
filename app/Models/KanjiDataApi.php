<?php

declare(strict_types=1);

namespace App\Models;

class AudioExampleApi
{
    // Properties
    public $kanjiCharacter;
    public $englishMeaning;
    public $kanjiImageLink;
    public $katakanaMeaning;
    public $hiraganaMeaning;
    public $videoLink;
    public $example;
    public $strokes;


    public function __construct(
        string $kanjiCharacter,
        string $englishMeaning,
        string $kanjiImageLink,
        string $katakanaMeaning,
        string $hiraganaMeaning,
        string $videoLink,
        array $strokes,
        ExampleApi $example,
    ) {
        $this->kanjiCharacter = $kanjiCharacter;
        $this->englishMeaning = $englishMeaning;
        $this->kanjiImageLink = $kanjiImageLink;
        $this->katakanaMeaning = $katakanaMeaning;
        $this->hiraganaMeaning = $hiraganaMeaning;
        $this->videoLink = $videoLink;
        $this->example = $example;
        $this->strokes = $strokes;
    }
}
