<?php




class Reservation
{

  private $host = 'this hostiger';

  private $guest = 'guest class';


  public function cancel(){
    $this->sendCancellationNotification();

    $this->refundGust();
  }

  private function sendCancellationNotification(){
    echo 'Sending notification to '. $this->host . '<br >';
  }

  private function refundGust(){
    echo 'You are getting a refund  '. $this->guest . '<br >';

  }
}

?>