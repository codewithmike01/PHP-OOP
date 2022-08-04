<?php

class User
{
  public $name;
  public $username;
  public $followers;

  // function userDetails($name, $username, $follwers){
 
  // }
}

$mikeObject = new User();


$mikeObject->name = 'Mike';
$mikeObject->username = '@michotall';
$mikeObject->followers = 67;



var_dump($mikeObject);

?>


