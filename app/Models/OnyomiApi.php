<?php
declare(strict_types=1);

namespace App\Models;

class OnyomiApi
{
  // Properties
  public $romaji;
  public $katakana;



  public function __construct(string $romaji, string $katakana)
  {
    $this->romaji = $romaji;
    $this->katakana = $katakana;

  }

}