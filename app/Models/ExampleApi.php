<?php
declare(strict_types=1);

namespace App\Models;

class ExampleApi
{
  // Properties
  public $japanese;
  public $meaning;
  public $audio;



  public function __construct(string $japanese, string $meaning, AudioExampleApi $audio)
  {
    $this->japanese = $japanese;
    $this->meaning = $meaning;
    $this->audio = $audio;
  }

}