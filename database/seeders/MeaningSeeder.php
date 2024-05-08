<?php

namespace Database\Seeders;

use App\Models\Kanji;
use App\Models\Meaning;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MeaningSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kanji = Kanji::firstWhere('kanji', '山');
        Meaning::create(
            [
                'english' => "mountain",
                'spanish' => "montaña",
                'kanji_id'=> $kanji->id,
            ]
        );
        $kanji = Kanji::firstWhere('kanji', '川');
        Meaning::create(
            [
                'english' => "river",
                'spanish' => "río",
                'kanji_id'=> $kanji->id,
            ]
        );
        $kanji = Kanji::firstWhere('kanji', '天');
        Meaning::create(
            [
                'english' => "heaven",
                'spanish' => "el paraíso",
                'kanji_id'=> $kanji->id,
            ]
        );
        $kanji = Kanji::firstWhere('kanji', '気');
        Meaning::create(
            [
                'english' => "gas, spirit",
                'spanish' => "gas, espíritu",
                'kanji_id'=> $kanji->id,
            ]
        );
        $kanji = Kanji::firstWhere('kanji', '田');
        Meaning::create(
            [
                'english' => "rice field",
                'spanish' => "campo de arroz",
                'kanji_id'=> $kanji->id,
            ]
        );
        $kanji = Kanji::firstWhere('kanji', '雨');
        Meaning::create(
            [
                'english' => "rain",
                'spanish' => "lluvia",
                'kanji_id'=> $kanji->id,
            ]
        );

    }
}
