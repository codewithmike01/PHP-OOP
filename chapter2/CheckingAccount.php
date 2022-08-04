<?php
require_once 'Account.php';

class CheckingAccount extends Account
{
  public function transfer($amount){
    echo 'transfering '.$amount  . '<br >';
  }
}

?>