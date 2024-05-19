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

        $meanings = [
            //1
            //
            '山' =>
            [
                'english' => "mountain",
                'spanish' => "montaña",
                'examples'=>[
                    '富士山 (ふじさん)'=>[
                        'english' => "Mt Fuji",
                        'spanish' => "Monte Fuji",
                    ],
                    '山脈 (さんみゃく)'=>[
                        'english' => "mountain range",
                        'spanish' => "cordillera",
                    ],
                    '火山(かざん)'=>[
                        'english' => "volcano",
                        'spanish' => "volcán",
                    ],

                ],
            ],
            '川' =>
            [
                'english' => "river",
                'spanish' => "río",
            ],
            '天' =>
            [
                'english' => "heaven",
                'spanish' => "el paraíso",
            ],
            '気' =>
            [
                'english' => "gas, spirit",
                'spanish' => "gas, espíritu",
            ],
            '田' =>
            [
                'english' => "rice field",
                'spanish' => "campo de arroz",
            ],
            '雨' =>

            [
                'english' => "rain",
                'spanish' => "lluvia"
            ],
            //2
            //
            '一' =>
            [
                'english' => "one",
                'spanish' => "uno",
            ],
            '二' =>

            [
                'english' => "two",
                'spanish' => "dos",

            ],
            '三' =>
            [
                'english' => "three",
                'spanish' => "tres",
            ],
            '四' =>
            [
                'english' => "four",
                'spanish' => "cuatro",
            ],
            '五' =>
            [
                'english' => "five",
                'spanish' => "cinco",
            ],
            '六' =>

            [
                'english' => "six",
                'spanish' => "seis",
            ],

            '七' =>

            [
                'english' => "seven",
                'spanish' => "siete",

            ],
            '八' =>
            [
                'english' => "eight",
                'spanish' => "ocho",

            ],
            '九' =>
            [
                'english' => "nine",
                'spanish' => "nueve",

            ],
            '十' =>
            [
                'english' => "ten",
                'spanish' => "diez",
            ],
            //3
            //
            '百' =>
            [
                'english' => "hundred",
                'spanish' => "cien",
            ],
            '千' =>
            [
                'english' => "thousand",
                'spanish' => "mil",
            ],
            '万' =>
            [
                'english' => "ten thousand",
                'spanish' => "diez mil",

            ],
            '円' =>
            [
                'english' => "circle, yen",
                'spanish' => "círculo, yen",
            ],
            '前' =>
            [
                'english' => "before, front",
                'spanish' => "antes, frente",

            ],
            '後' =>
            [
                'english' => "after, back",
                'spanish' => "después, atrás",
            ],
            '左' =>
            [
                'english' => "left",
                'spanish' => "izquierda",
            ],
            '右' =>
            [
                'english' => "right",
                'spanish' => "derecha",
            ],
            '上' =>
            [
                'english' => "up",
                'spanish' => "arriba",
            ],
            '下' =>
            [
                'english' => "down",
                'spanish' => "abajo",

            ],
            //4
            //
            '目' =>
            [
                'english' => "eye, item",
                'spanish' => "ojo, artículo",

            ],
            '口' =>
            [
                'english' => "mouth",
                'spanish' => "boca",

            ],
            '耳' =>
            [
                'english' => "ear",
                'spanish' => "oreja",

            ],
            '手' =>
            [
                'english' => "hand",
                'spanish' => "mano",

            ],
            '足' =>
            [
                'english' => "foot, suffice, add",
                'spanish' => "pie, suficiente, agregar",

            ],
            '力' =>
            [
                'english' => "power, force",
                'spanish' => "poder, fuerza",
            ],
            '父' =>
            [
                'english' => "father",
                'spanish' => "padre",
            ],
            '母' =>
            [
                'english' => "mother",
                'spanish' => "madre",
            ],
            '男' =>
            [
                'english' => "man",
                'spanish' => "hombre",
            ],
            '女' =>
            [
                'english' => "woman",
                'spanish' => "mujer",
            ],
            '子' =>
            [
                'english' => "child, noun suffix",
                'spanish' => "niño o niña, sufijo sustantivo",
            ],
            '人' =>
            [
                'english' => "human being, person",
                'spanish' => "ser humano, persona",
            ],
            '名' =>
            [
                'english' => "name",
                'spanish' => "nombre",
            ],
            //5
            //
            '月' =>
            [
                'english' => "moon, month",
                'spanish' => "luna, mes",
            ],
            '火' =>
            [
                'english' => "fire",
                'spanish' => "fuego",
            ],
            '水' =>
            [
                'english' => "water",
                'spanish' => "agua",
            ],
            '木' =>
            [
                'english' => "tree, wood",
                'spanish' => "árbol, madera",
            ],
            '金' =>
            [
                'english' => "metal, gold, money",
                'spanish' => "metal, oro, dinero",
            ],
            '土' =>
            [
                'english' => "soil, earth, ground",
                'spanish' => "suelo, tierra, suelo",
            ],
            '日' =>
            [
                'english' => "day, sun, Japan",
                'spanish' => "día, sol, Japón",
            ],
            '先' =>
            [
                'english' => "ahead",
                'spanish' => "adelante",
            ],
            '生' =>
            [
                'english' => "life, be born, student",
                'spanish' => "vida, nacer, estudiante",
            ],
            '学' =>
            [
                'english' => "study, educational, institution",
                'spanish' => "estudio, educativo, institución",
            ],
            '校' =>
            [
                'english' => "school",
                'spanish' => "escuela",
            ],
            '本' =>
            [
                'english' => "basis, book, this",
                'spanish' => "base, libro, esto",
            ],
            '友' =>
            [
                'english' => "friend",
                'spanish' => "amigo, amiga",
            ],
            //6
            //
            '年' =>
            [
                'english' => "year",
                'spanish' => "año",
            ],
            '毎' =>
            [
                'english' => "every",
                'spanish' => "cada",
            ],
            '時' =>
            [
                'english' => "time",
                'spanish' => "tiempo",
            ],
            '分' =>
            [
                'english' => "divide, part, minute",
                'spanish' => "dividir, parte, minuto",
            ],
            '午' =>
            [
                'english' => "noon",
                'spanish' => "mediodía",
            ],
            '間' =>
            [
                'english' => "interval, between",
                'spanish' => "intervalo, entre",
            ],
            '今' =>
            [
                'english' => "present, this",
                'spanish' => "presente, este",
            ],
            '半' =>
            [
                'english' => "half",
                'spanish' => "medio",
            ],
            '週' =>
            [
                'english' => "week",
                'spanish' => "semana",
            ],
            '朝' =>
            [
                'english' => "morning, dynasty",
                'spanish' => "mañana, dinastía",
            ],
            '昼' =>
            [
                'english' => "daytime",
                'spanish' => "en el día",
            ],
            '夕' =>
            [
                'english' => "evening",
                'spanish' => "tarde, noche",
            ],
            '夜' =>
            [
                'english' => "night",
                'spanish' => "noche",
            ],
            //7
            //
            '高' =>
            [
                'english' => "high",
                'spanish' => "alto",
            ],
            '大' =>
            [
                'english' => "big",
                'spanish' => "grande",
            ],
            '中' =>
            [
                'english' => "middle, in",
                'spanish' => "medio, dentro",
            ],
            '小' =>
            [
                'english' => "small",
                'spanish' => "pequeño",
            ],
            '長' =>
            [
                'english' => "long, chief",
                'spanish' => "largo, jefe",
            ],
            '白' =>
            [
                'english' => "white",
                'spanish' => "blanco",
            ],
            '安' =>
            [
                'english' => "peaceful, inexpensive",
                'spanish' => "pacífico, barato",
            ],
            '新' =>
            [
                'english' => "new",
                'spanish' => "nuevo",
            ],
            '古' =>
            [
                'english' => "old",
                'spanish' => "viejo",
            ],
            '多' =>
            [
                'english' => "many",
                'spanish' => "muchos",
            ],
            '少' =>
            [
                'english' => "little",
                'spanish' => "poco",
            ],
            '早' =>
            [
                'english' => "early, quick",
                'spanish' => "temprano, rápido",
            ],
            //8
            //
            '言' =>
            [
                'english' => "say, speech",
                'spanish' => "decir, discurso",
            ],
            '話' =>
            [
                'english' => "speak",
                'spanish' => "hablar",
            ],
            '語' =>
            [
                'english' => "language, word, tell",
                'spanish' => "lenguaje, palabra, decir",
            ],
            '書' =>
            [
                'english' => "write, book",
                'spanish' => "escribir, libro",
            ],
            '見' =>
            [
                'english' => "see",
                'spanish' => "mirar",
            ],
            '聞' =>
            [
                'english' => "hear, listen, ask",
                'spanish' => "escuchar, preguntar",
            ],
            '行' =>
            [
                'english' => "go, act, line",
                'spanish' => "ir, actuar, línea",
            ],
            '来' =>
            [
                'english' => "come",
                'spanish' => "venir",
            ],
            '出' =>
            [
                'english' => "go out, put out",
                'spanish' => "salir, enviar",
            ],
            '入' =>
            [
                'english' => "enter, put in",
                'spanish' => "entrar, insertar",
            ],
            '食' =>
            [
                'english' => "eat, food",
                'spanish' => "comer, comida",
            ],
            '飲' =>
            [
                'english' => "drink",
                'spanish' => "beber",
            ],
            '立' =>
            [
                'english' => "stand, establish",
                'spanish' => "pararse, establecer",
            ],
            '休' =>
            [
                'english' => "rest",
                'spanish' => "descansar",
            ],
            '買' =>
            [
                'english' => "buy",
                'spanish' => "comprar",
            ],
            //9
            //
            '電' =>
            [
                'english' => "electricity",
                'spanish' => "electricidad",
            ],
            '車' =>
            [
                'english' => "vehicle, wheel, car",
                'spanish' => "vehículo, rueda, coche",
            ],
            '門' =>
            [
                'english' => "gate",
                'spanish' => "puerta",
            ],
            '馬' =>
            [
                'english' => "horse",
                'spanish' => "caballo",
            ],
            '魚' =>
            [
                'english' => "fish",
                'spanish' => "pez",
            ],
            '道' =>
            [
                'english' => "way, street, road",
                'spanish' => "camino, calle, camino",
            ],
            '会' =>
            [
                'english' => "meet, society",
                'spanish' => "reunirse, sociedad",
            ],
            '社' =>
            [
                'english' => "company, society",
                'spanish' => "empresa, sociedad",
            ],
            '店' =>
            [
                'english' => "shop, store",
                'spanish' => "tienda",
            ],
            '駅' =>
            [
                'english' => "station",
                'spanish' => "estación",
            ],
            '花' =>
            [
                'english' => "flower",
                'spanish' => "flor",
            ],
            '家' =>
            [
                'english' => "house, family",
                'spanish' => "casa, familia",
            ],
            '外' =>
            [
                'english' => "outside",
                'spanish' => "afuera",
            ],
            '国' =>
            [
                'english' => "country",
                'spanish' => "país",
            ],
            '方' =>
            [
                'english' => "direction, way, square",
                'spanish' => "dirección, camino, cuadrado",
            ],
            '英' =>
            [
                'english' => "distinguished, England",
                'spanish' => "distinguido, Inglaterra",
            ],

        ];

        $records = [];
        foreach ($meanings as $kanji => $meanings) {
            $kanjiModel = Kanji::firstWhere('kanji', $kanji);
            $records[] = [
                'english' => $meanings["english"],
                'spanish' => $meanings["spanish"],
                'kanji_id' => $kanjiModel->id,
            ];
        }

        Meaning::insert($records);
    }
}
