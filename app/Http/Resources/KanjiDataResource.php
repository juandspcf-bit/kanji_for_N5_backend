<?php

namespace App\Http\Resources;

use App\Models\KanjiForN5;
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
                "meaning" => $this->meaning,
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
        $kanjiForN5 = KanjiForN5::where('kanji', $this->kanjiCharacter)->get();;          
        $isInKanjiForN5 = $kanjiForN5->isNotEmpty();
        return [
            'meta' => [
                'message' => 'success',
                "isInKanjiForN5"=>$isInKanjiForN5,
            ],
        ];
    }
}
