<?php

declare(strict_types=1);

namespace App\Models;

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
}
