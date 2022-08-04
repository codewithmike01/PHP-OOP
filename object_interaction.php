<?php

class Song
{
  public $songId;
  public $title;
}

class PlayList
{
  public $name;
  public $songs = [];

  public function addSong($song){
    $this->songs[] = $song;
  }
}


$octopusSong = new Song();

$octopusSong->songId = 1;
$octopusSong->title= "Octopus's Garden";

$moonLight = new Song();

$moonLight->songId = 2;
$moonLight->title = 'Moon light shine'; 

// var_dump($octopusSong);

// Playlist

$playList = new PlayList();
$playList->name = 'Rocks';

$playList->addSong($octopusSong);
$playList->addSong($moonLight);

var_dump($playList->songs)
?>

