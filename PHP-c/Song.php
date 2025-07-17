<?php
class Song
{
    public $name;
    public $numberOfPlays;
    
    public function __construct( int $name, int $numberOfPlays)
    {
      $this->name=$name;
      $this->numberOfPlays= $numberOfPlays;
    }
}