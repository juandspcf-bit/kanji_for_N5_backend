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
                'examples' => [
                    '富士山 (ふじさん)' => [
                        'english' => "Mt Fuji",
                        'spanish' => "Monte Fuji",
                    ],
                    '山脈 (さんみゃく)' => [
                        'english' => "mountain range",
                        'spanish' => "cordillera",
                    ],
                    '火山 (かざん)' => [
                        'english' => "volcano",
                        'spanish' => "volcán",
                    ],
                    '登山 (とざん)' => [
                        'english' => "mountain-climbing",
                        'spanish' => "Montañismo",
                    ],
                    '山 (やま)' => [
                        'english' => "mountain, pile, climax",
                        'spanish' => "montaña, pila, clímax",
                    ],
                    '岩山 (いわやま)' => [
                        'english' => "rocky mountain",
                        'spanish' => "montaña rocosa",
                    ],
                    '山火事 (やまかじ)' => [
                        'english' => "bushfire",
                        'spanish' => "incendio forestal",
                    ]

                ],
            ],
            '川' =>
            [
                'english' => "river",
                'spanish' => "río",
                'examples' => [
                    '河川 (かせん)' => [
                        'english' => "rivers",
                        'spanish' => "ríos",
                    ],
                    '川 (かわ)' => [
                        'english' => "river",
                        'spanish' => "río",
                    ],
                    '川上 (かわかみ)' => [
                        'english' => "upper reaches of a river",
                        'spanish' => "tramos superiores de un río",
                    ],
                    '川下 (かわしも)' => [
                        'english' => "downstream",
                        'spanish' => "río abajo",
                    ],
                    '江戸川 (えどがわ)' => [
                        'english' => "Edo river",
                        'spanish' => "río Edo",
                    ],
                    '小川 (おがわ)' => [
                        'english' => "small stream, brook",
                        'spanish' => "pequeño arroyo, arroyo",
                    ],
                ]
            ],
            '天' =>
            [
                'english' => "heaven",
                'spanish' => "el paraíso",
                'examples' => [
                    '天気 (てんき)' => [
                        'english' => "weather, fine weather",
                        'spanish' => "clima, buen tiempo",
                    ],
                    '天候 (てんこう)' => [
                        'english' => "weather",
                        'spanish' => "clima",
                    ],
                    '天皇 (てんのう)' => [
                        'english' => "emperor",
                        'spanish' => "emperador",
                    ],
                    '天才 (てんさい)' => [
                        'english' => "genius",
                        'spanish' => "genio",
                    ],
                    '晴天 (せいてん)' => [
                        'english' => "fine weather",
                        'spanish' => "buen tiempo",
                    ],
                    '雨天 (うてん)' => [
                        'english' => "rainy weather",
                        'spanish' => "clima lluvioso",
                    ],
                    '先天的な (せんてんてきな)' => [
                        'english' => "innate",
                        'spanish' => "innato",
                    ],
                    '天 (あめ)' => [
                        'english' => "heaven, sky",
                        'spanish' => "cielo",
                    ],
                    '天の川 (あまのがわ)' => [
                        'english' => "Milky Way",
                        'spanish' => "Vía Láctea",
                    ],
                ]
            ],
            '気' =>
            [
                'english' => "gas, spirit",
                'spanish' => "gas, espíritu",
                'examples' => [
                    '気候 (きこう)' => [
                        'english' => "climate",
                        'spanish' => "clima",
                    ],
                    '気持ち (きもち)' => [
                        'english' => "feeling",
                        'spanish' => "sentimiento",
                    ],
                    '天気 (てんき)' => [
                        'english' => "weather",
                        'spanish' => "clima",
                    ],
                    '人気 (にんき)' => [
                        'english' => "popularity",
                        'spanish' => "popularidad",
                    ],
                    '病気 (びょうき)' => [
                        'english' => "illness",
                        'spanish' => "enfermedad",
                    ],
                    '元気な (げんきな)' => [
                        'english' => "energetic",
                        'spanish' => "energético",
                    ],
                    '気を付ける (きをつける)' => [
                        'english' => "be careful",
                        'spanish' => "tener cuidado",
                    ],
                    '気に入る (きにいる)' => [
                        'english' => "come to like, be pleased with",
                        'spanish' => "estar contento con algo",
                    ],
                    '気が狂う (きがくるう)' => [
                        'english' => "go mad, go crazy",
                        'spanish' => "volverse loco",
                    ],
                    '眠気 (ねむけ)' => [
                        'english' => "sleepiness",
                        'spanish' => "somnolencia",
                    ],
                    '湿気（しっけ）' => [
                        'english' => "humidity",
                        'spanish' => "humedad",
                    ],
                ]
            ],
            '田' =>
            [
                'english' => "rice field",
                'spanish' => "campo de arroz",
                'examples' => [
                    "水田 (すいでん)" => [
                        'english' => "rice field",
                        'spanish' => "campo de arroz",
                    ],
                    "田園 (でんえん)" => [
                        'english' => "rural area",
                        'spanish' => "área rural",
                    ],
                    "田んぼ (たんぼ)" => [
                        'english' => "rice field",
                        'spanish' => "campo de arroz",
                    ],
                    "田植え (たうえ)" => [
                        'english' => "rice planting",
                        'spanish' => "plantación de arroz",
                    ],
                    "松田 (まつだ)" => [
                        'english' => "Matsuda (surname)",
                        'spanish' => "Matsuda (apellido)",
                    ],
                ]
            ],
            '雨' =>

            [
                'english' => "rain",
                'spanish' => "lluvia",
                'examples' => [
                    "降雨量 (こううりょう)" => [
                        "english" => "amount of rainfall",
                        "spanish" => "cantidad de lluvia",
                    ],
                    "梅雨前線 (ばいうぜんせん)" => [
                        "english" => "seasonal rain front",
                        "spanish" => "frente de lluvia estacional",
                    ],
                    "雨期 (うき)" => [
                        "english" => "rainy season",
                        "spanish" => "temporada de lluvias",
                    ],
                    "雷雨 (らいう)" => [
                        "english" => "thunderstorm",
                        "spanish" => "tormenta",
                    ],
                    "雨 (あめ)" => [
                        "english" => "rain",
                        "spanish" => "lluvia",
                    ],
                    "大雨 (おおあめ)" => [
                        "english" => "heavy rain",
                        "spanish" => "chubasco",
                    ],
                    "雨上がり（あめあがり" => [
                        "english" => "after the rain",
                        "spanish" => "después de la lluvia",
                    ],
                    "雨蛙 (あまがえる)" => [
                        "english" => "tree frog",
                        "spanish" => "rana de árbol",
                    ],
                    "雨雲 (あまぐも)" => [
                        "english" => "rain cloud",
                        "spanish" => "nube de lluvia",
                    ],
                    "*小雨 (こさめ)" => [
                        "english" => "light rain",
                        "spanish" => "llovizna",
                    ],
                ]
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