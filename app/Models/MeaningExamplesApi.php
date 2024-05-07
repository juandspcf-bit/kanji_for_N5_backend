<?php
declare(strict_types=1);

namespace App\Models;

class MeaningExamplesApi
{
  // Properties
  public $english;
  public $spanish;



  public function __construct(string $english, string $spanish)
  {
    $this->english = $english;
    $this->spanish = $spanish;

  }

}