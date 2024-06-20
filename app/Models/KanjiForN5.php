<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KanjiForN5 extends Model
{
    use HasFactory;

    protected $fillable = [
        'kanji'
    ];

    protected $table="kanjis_for_n5";
}
