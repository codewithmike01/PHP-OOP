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

// var_dump($octopusSong);

// Playlist

$playList = new PlayList();

$playList->addSong($octopusSong);

var_dump($playList->songs)
?>

