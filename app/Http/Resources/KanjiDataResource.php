<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class KanjiDataResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'kanji' => [
                "character" => $this->kanjiCharacter,
                "meaning" => [
                    'english' => $this->englishMeaning,
                    'spanish' => $this->spanishMeaning,
                ],
                "strokes" => [
                    "images" => $this->strokes,
                ],
                'onyomi' => $this->onyomi,
                'kunyomi' => $this->kunyomi,
                'video' => $this->videoLink
            ],

            'kanjiImageLink' => $this->kanjiImageLink,
            'examples' => $this->examples,
        ];
    }

    public function with(Request $request): array
    {
        return [
            'meta' => [
                'message' => 'success',
            ],
        ];
    }
}
