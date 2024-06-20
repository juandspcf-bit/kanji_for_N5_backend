<?php

use App\Models\KanjiForN5;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kanjis_for_n5', function (Blueprint $table) {
            $table->id();
            $table->string('kanji');
            $table->timestamps();
        });



        $kanjisForN5 = ['山', '川', '天', '気', '田', '雨', '一', '二', '三', '四', '五', '六', '七', '八', '九', '十', '百', '千', '万', '円', '前', '後', '左', '右', '上', '下', '目', '口', '耳', '手', '足', '力', '父', '母', '男', '女', '子', '人', '名', '月', '火', '水', '木', '金', '土', '日', '先', '生', '学', '校', '本', '友', '年', '毎', '時', '分', '午', '間', '今', '半', '週', '朝', '昼', '夕', '夜', '高', '大', '中', '小', '長', '白', '安', '新', '古', '多', '少', '早', '言', '話', '語', '読', '書', '見', '聞', '行', '来', '出', '入', '食', '飲', '立', '休', '買', '電', '車', '門', '馬', '魚', '道', '会', '社', '店', '駅', '花', '家', '外', '国', '方', '英'];
    
        foreach ($kanjisForN5 as $kanji) {
            KanjiForN5::create([
                'kanji' => $kanji,
            ]);
        }
    

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kanjis_for_n5');
    }
};
