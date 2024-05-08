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


        $kanji = Kanji::firstWhere('kanji', '一');
        Meaning::create(
            [
                'english' => "one",
                'spanish' => "uno",
                'kanji_id'=> $kanji->id,
            ]
        );
        $kanji = Kanji::firstWhere('kanji', '二');
        Meaning::create(
            [
                'english' => "two",
                'spanish' => "dos",
                'kanji_id'=> $kanji->id,
            ]
        );
        $kanji = Kanji::firstWhere('kanji', '三');
        Meaning::create(
            [
                'english' => "three",
                'spanish' => "tres",
                'kanji_id'=> $kanji->id,
            ]
        );
        $kanji = Kanji::firstWhere('kanji', '四');
        Meaning::create(
            [
                'english' => "four",
                'spanish' => "cuatro",
                'kanji_id'=> $kanji->id,
            ]
        );
        $kanji = Kanji::firstWhere('kanji', '五');
        Meaning::create(
            [
                'english' => "five",
                'spanish' => "cinco",
                'kanji_id'=> $kanji->id,
            ]
        );
        $kanji = Kanji::firstWhere('kanji', '六');
        Meaning::create(
            [
                'english' => "six",
                'spanish' => "seis",
                'kanji_id'=> $kanji->id,
            ]
        );
        $kanji = Kanji::firstWhere('kanji', '七');
        Meaning::create(
            [
                'english' => "seven",
                'spanish' => "siete",
                'kanji_id'=> $kanji->id,
            ]
        );
        $kanji = Kanji::firstWhere('kanji', '八');
        Meaning::create(
            [
                'english' => "eight",
                'spanish' => "ocho",
                'kanji_id'=> $kanji->id,
            ]
        );
        $kanji = Kanji::firstWhere('kanji', '九');
        Meaning::create(
            [
                'english' => "nine",
                'spanish' => "nueve",
                'kanji_id'=> $kanji->id,
            ]
        );
        $kanji = Kanji::firstWhere('kanji', '十');
        Meaning::create(
            [
                'english' => "ten",
                'spanish' => "diez",
                'kanji_id'=> $kanji->id,
            ]
        );


        $kanji = Kanji::firstWhere('kanji', '百');
        Meaning::create(
            [
                'english' => "hundred",
                'spanish' => "cien",
                'kanji_id'=> $kanji->id,
            ]
        );
        $kanji = Kanji::firstWhere('kanji', '千');
        Meaning::create(
            [
                'english' => "thousand",
                'spanish' => "mil",
                'kanji_id'=> $kanji->id,
            ]
        );
        $kanji = Kanji::firstWhere('kanji', '万');
        Meaning::create(
            [
                'english' => "ten thousand",
                'spanish' => "diez mil",
                'kanji_id'=> $kanji->id,
            ]
        );
        $kanji = Kanji::firstWhere('kanji', '円');
        Meaning::create(
            [
                'english' => "circle, yen",
                'spanish' => "círculo, yen",
                'kanji_id'=> $kanji->id,
            ]
        );
        $kanji = Kanji::firstWhere('kanji', '前');
        Meaning::create(
            [
                'english' => "before, front",
                'spanish' => "antes, frente",
                'kanji_id'=> $kanji->id,
            ]
        );
        $kanji = Kanji::firstWhere('kanji', '後');
        Meaning::create(
            [
                'english' => "after, back",
                'spanish' => "después, atrás",
                'kanji_id'=> $kanji->id,
            ]
        );
        $kanji = Kanji::firstWhere('kanji', '左');
        Meaning::create(
            [
                'english' => "left",
                'spanish' => "izquierda",
                'kanji_id'=> $kanji->id,
            ]
        );
        $kanji = Kanji::firstWhere('kanji', '右');
        Meaning::create(
            [
                'english' => "right",
                'spanish' => "derecha",
                'kanji_id'=> $kanji->id,
            ]
        );
        $kanji = Kanji::firstWhere('kanji', '上');
        Meaning::create(
            [
                'english' => "up",
                'spanish' => "arriba",
                'kanji_id'=> $kanji->id,
            ]
        );
        $kanji = Kanji::firstWhere('kanji', '下');
        Meaning::create(
            [
                'english' => "down",
                'spanish' => "abajo",
                'kanji_id'=> $kanji->id,
            ]
        );

    }
}
