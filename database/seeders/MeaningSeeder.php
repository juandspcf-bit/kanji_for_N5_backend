<?php

namespace Database\Seeders;

use App\Data\Data;
use App\Models\Kanji;
use App\Models\Example;

use App\Models\Meaning;
use Illuminate\Database\Seeder;

class MeaningSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $recordsMeanings = [];
        $recordsExamples = [];
        foreach (Data::$meanings as $kanji => $meanings) {
            $kanjiModel = Kanji::firstWhere('kanji', $kanji);
            $recordsMeanings[] = [
                'english' => $meanings["english"],
                'spanish' => $meanings["spanish"],
                'kanji_id' => $kanjiModel->id,
            ];

            if (isset($meanings["examples"])) {
                foreach ($meanings["examples"] as $word => $translations) {
                    $recordsExamples[] = [
                        "word" => $word,
                        "english" => $translations["english"],
                        "spanish" => $translations["spanish"],
                        'kanji_id' => $kanjiModel->id,
                    ];

                }
            }
        }

        Meaning::insert($recordsMeanings);
        Example::insert($recordsExamples);
    }
}
