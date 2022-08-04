<?php

class Song
{
  public $songId;
  public $title;
}

$octopusSong = new Song();

$octopusSong->songId = 1;
$octopusSong->title= "Octopus's Garden";

var_dump($octopusSong);


?>

