<?php
declare(strict_types=1);

namespace App\Models;

class AudioExampleApi
{
  // Properties
  public $opus;
  public $aac;
  public $ogg;
  public $mp3;


  public function __construct(string $opus, string $aac, string $ogg, string $mp3)
  {
    $this->opus = $opus;
    $this->aac = $aac;
    $this->ogg = $ogg;
    $this->mp3 = $mp3;
  }

}