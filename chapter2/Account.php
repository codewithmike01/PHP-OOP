<?php
  class Account
  {
    public $accountNumber;
    public $balance;

    public function deposit($amount){
      echo 'Depositing amount '.$amount . '<br >'; 
    }

    public function withdraw($amount){
      echo 'Widthdrawing amount '. $amount  . '<br >';
    }
  }


  

?>