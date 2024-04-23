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
            'kanjiCharacter'=>$this->kanjiCharacter,
            'englishMeaning'=>$this->englishMeaning,
            'kanjiImageLink'=>$this->kanjiImageLink,
            'onyomi'=>$this->onyomi,
            'kunyomi'=>$this->kunyomi,
            'videoLink'=>$this->videoLink,
            'strokes'=>$this->strokes,
            'examples'=>$this->examples,
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
