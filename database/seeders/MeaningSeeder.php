<?php

namespace Database\Seeders;

use App\Models\Kanji;
use App\Models\Meaning;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
                'examples' => [
                    "一年生 (いちねんせい)" => [
                        "english" => "first-year student",
                        "spanish" => "Alumno de primer año",
                    ],
                    "一番 (いちばん)" => [
                        "english" => "number one",
                        "spanish" => "numero uno",
                    ],
                    "一度 (いちど)" => [
                        "english" => "once",
                        "spanish" => "una vez",
                    ],
                    "一杯 (いっぱい)" => [
                        "english" => "one cup of, a lot of",
                        "spanish" => "una taza de, mucho de",
                    ],
                    "一緒 (いっしょ)" => [
                        "english" => "together",
                        "spanish" => "juntos",
                    ],
                    "一分 (いっぷん)" => [
                        "english" => "one minute",
                        "spanish" => "un minuto",
                    ],
                    "一枚 (いちまい)" => [
                        "english" => "one (flat object)",
                        "spanish" => "uno (para objetos planos)",
                    ],
                    "一つ (ひとつ)" => [
                        "english" => "one (object)",
                        "spanish" => "uno (un objeto en general)",
                    ],
                    "一人 (ひとり)" => [
                        "english" => "one person",
                        "spanish" => "una persona",
                    ],
                ]
            ],
            '二' =>

            [
                'english' => "two",
                'spanish' => "dos",
                'examples' => [
                    "二時間 (にじかん)" => [
                        "english" => "two hours",
                        "spanish" => "dos horas",
                    ],
                    "二月 (にがつ)" => [
                        "english" => "February",
                        "spanish" => "Febrero",
                    ],
                    "二枚目 (にまいめ)" => [
                        "english" => "second (flat object)",
                        "spanish" => "segundo (para objectos planos)",
                    ],
                    "二つ (ふたつ)" => [
                        "english" => "two (pieces)",
                        "spanish" => "dos (piezas)",
                    ],
                    "二人 (ふたり)" => [
                        "english" => "two people",
                        "spanish" => "dos personas",
                    ],
                ],



            ],
            '三' =>
            [
                'english' => "three",
                'spanish' => "tres",
                'examples' => [
                    "三人 (さんにん)" => [
                        "english" => "3 people",
                        "spanish" => "3 personas",
                    ],
                    "三時 (さんじ)" => [
                        "english" => "3 o'clock",
                        "spanish" => "3 en punto",
                    ],
                    "三枚 (さんまい)" => [
                        "english" => "3 (flat objects)",
                        "spanish" => "3 (para objetos planos)",
                    ],
                    "三月 (さんがつ)" => [
                        "english" => "March",
                        "spanish" => "Marzo",
                    ],
                    "三日 (みっか)" => [
                        "english" => "3 days, 3rd day of the month",
                        "spanish" => "3 días, 3er día del mes",
                    ],
                    "三つ (みっつ)" => [
                        "english" => "3 (pieces)",
                        "spanish" => "3 (piezas)",
                    ],
                ]
            ],
            '四' =>
            [
                'english' => "four",
                'spanish' => "cuatro",
                'examples' => [
                    "四月 (しがつ)" => [
                        "english" => "April",
                        "spanish" => "abril",
                    ],
                    "四角 (しかく)" => [
                        "english" => "square",
                        "spanish" => "cuadrado",
                    ],
                    "四国 (しこく)" => [
                        "english" => "Shikoku",
                        "spanish" => "Shikoku",
                    ],
                    "四季 (しき)" => [
                        "english" => "four seasons",
                        "spanish" => "cuatro estaciones",
                    ],
                    "四時 (よじ)" => [
                        "english" => "4 o'clock",
                        "spanish" => "4 en punto",
                    ],
                    "四つ角 (よつかど)" => [
                        "english" => "crossroads",
                        "spanish" => "cruce",
                    ],
                    "四つ (よっつ)" => [
                        "english" => "4 (objects)",
                        "spanish" => "4 (un objeto en general)",
                    ],
                    "四日 (よっか)" => [
                        "english" => "4 days, 4th of the month",
                        "spanish" => "4 días, 4 del mes",
                    ],
                    "四回 (よんかい)" => [
                        "english" => "4 times",
                        "spanish" => "4 veces",
                    ],
                ]
            ],
            '五' =>
            [
                'english' => "five",
                'spanish' => "cinco",
                'examples' => [
                    "五月 (ごがつ)" => [
                        "english" => "May",
                        "spanish" => "Mayo",
                    ],
                    "五時間 (ごじかん)" => [
                        "english" => "5 hours",
                        "spanish" => "5 horas",
                    ],
                    "五階 (ごかい)" => [
                        "english" => "5th floor",
                        "spanish" => "5to piso",
                    ],
                    "五人 (ごにん)" => [
                        "english" => "5 people",
                        "spanish" => "5 personas",
                    ],
                    "五つ (いつつ)" => [
                        "english" => "5 (objects)",
                        "spanish" => "5 (un objeto en general)",
                    ],
                    "五日 (いつか)" => [
                        "english" => "5 days, 5th of the month",
                        "spanish" => "5 días, 5 del mes",
                    ],
                ]
            ],
            '六' =>
            [
                'english' => "six",
                'spanish' => "seis",
                'examples' => [
                    "六時 (ろくじ)" => [
                        "english" => "六時（ろくじ）",
                        "spanish" => "6 en punto",
                    ],
                    "六才 (ろくさい)" => [
                        "english" => "六才（ろくさい）",
                        "spanish" => "6 años de edad",
                    ],
                    "六番目 (ろくばんめ)" => [
                        "english" => "6th",
                        "spanish" => "6to",
                    ],
                    "六月 (ろくがつ)" => [
                        "english" => "June",
                        "spanish" => "Junio",
                    ],
                    "六本 (ろっぽん)" => [
                        "english" => "6 (long cylindrical objects)",
                        "spanish" => "6 (para objetos cilíndricos largos)",
                    ],
                    "六百 (ろっぴゃく)" => [
                        "english" => "600",
                        "spanish" => "600",
                    ],
                    "六つ (むっつ)" => [
                        "english" => "6 (pieces)",
                        "spanish" => "6 (piezas)",
                    ],
                    "六日 (むいか)" => [
                        "english" => "6 days, 6th of the month",
                        "spanish" => "6 días, sexto dia del mes.",
                    ]
                ]
            ],

            '七' =>
            [
                'english' => "seven",
                'spanish' => "siete",
                'examples' => [
                    "七時 (しちじ)" => [
                        "english" => "7 o'clock",
                        "spanish" => "7:00",
                    ],
                    "十七 (じゅうしち/じゅうなな)" => [
                        "english" => "17",
                        "spanish" => "17",
                    ],
                    "七五三 (しちごさん)" => [
                        "english" => "festival for children aged 7, 5 & 3",
                        "spanish" => "festival para niños de 7, 5 y 3 años",
                    ],
                    "七回 (ななかい)" => [
                        "english" => "7 times",
                        "spanish" => "7 veces",
                    ],
                    "七週間 (ななしゅうかん)" => [
                        "english" => "7 weeks",
                        "spanish" => "7 semanas",
                    ],
                    "七才 (ななさい)" => [
                        "english" => "7 years old",
                        "spanish" => "7 años de edad",
                    ],
                    "七日 (なのか)" => [
                        "english" => "7 days, 7th of the month",
                        "spanish" => "7 días, 7mo del mes.",
                    ],
                    "七つ (ななつ)" => [
                        "english" => "7 (objects)",
                        "spanish" => "7 (un objeto en general)",
                    ],

                ]

            ],
            '八' =>
            [
                'english' => "eight",
                'spanish' => "ocho",
                'examples' => [
                    "八月 (はちがつ)" => [
                        "english" => "August",
                        "spanish" => "Agosto",
                    ],
                    "八時間 (はちじかん)" => [
                        "english" => "8 hours",
                        "spanish" => "8 horas",
                    ],
                    "尺八 (しゃくはち)" => [
                        "english" => "bamboo flute",
                        "spanish" => "flauta de bambú",
                    ],
                    "八回 (はっかい)" => [
                        "english" => "8 times",
                        "spanish" => "ocho veces",
                    ],
                    "八分 (はっぷん)" => [
                        "english" => "8 minutes",
                        "spanish" => "ocho minutos",
                    ],
                    "八百 (はっぴゃく)" => [
                        "english" => "800",
                        "spanish" => "800",
                    ],
                    "八つ (やっつ)" => [
                        "english" => "8 (objects)",
                        "spanish" => "8 (un objeto en general)",
                    ],
                    "八百屋 (やおや)" => [
                        "english" => "greengrocer",
                        "spanish" => "verdulería",
                    ],
                    "八重桜 (やえざくら)" => [
                        "english" => "double-flowered cherry-tree",
                        "spanish" => "cerezo de doble flor",
                    ],
                    "八日 (ようか)" => [
                        "english" => "8 days, 8th of the month",
                        "spanish" => "8 días, 8vo del mes",
                    ],
                ]
            ],
            '九' =>
            [
                'english' => "nine",
                'spanish' => "nueve",
                'examples' => [
                    "九州 (きゅうしゅう)" => [
                        "english" => "Kyuushuu",
                        "spanish" => "Kyuushuu",
                    ],
                    "九回 (きゅうかい)" => [
                        "english" => "9 times",
                        "spanish" => "9 veces",
                    ],
                    "九年 (きゅうねん)" => [
                        "english" => "9 years",
                        "spanish" => "9 años",
                    ],
                    "九月 (くがつ)" => [
                        "english" => "September",
                        "spanish" => "Septiembre",
                    ],
                    "九時 (くじ)" => [
                        "english" => "9 o'clock",
                        "spanish" => "9 en punto",
                    ],
                    "十九日 (じゅうくにち)" => [
                        "english" => "19 days, 19th of the month",
                        "spanish" => "19 días,  19.º del mes.",
                    ],
                    "九日 (ここのか)" => [
                        "english" => "9 days, 9th of the month",
                        "spanish" => "9 días, 9.º del mes.",
                    ],
                    "九つ (ここのつ)" => [
                        "english" => "9 (objects)",
                        "spanish" => "9 (un objeto en general)",
                    ],

                ]

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
