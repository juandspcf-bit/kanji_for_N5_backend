<?php
declare(strict_types=1);

namespace App\Models;

class KunyomiApi
{
  // Properties
  public $romaji;
  public $hiragana;



  public function __construct(string $romaji, string $hiragana)
  {
    $this->romaji = $romaji;
    $this->hiragana = $hiragana;

  }

}