<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kanji extends Model
{
    use HasFactory;

    protected $fillable = [
        'kanji'
    ];
    
    public function meaning(): HasOne
    {
        return $this->hasOne(Meaning::class);
    }

    public function examples(): HasMany
    {
        return $this->hasMany(Example::class);
    }
}
