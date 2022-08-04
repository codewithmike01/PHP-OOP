<?php

require_once 'CheckingAccount.php';

class PremiumCheckingAccount extends CheckingAccount
{
  public function minimumCheckingAccount($amount){
    echo 'The minimum is '.$amount;
  }
}

?>