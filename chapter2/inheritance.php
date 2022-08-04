<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inheritance</title>
</head>
<body>
  
  <?php

    require 'PremiumCheckingAccount.php';

    $PremiumCheckingAccount= new PremiumCheckingAccount();

    $PremiumCheckingAccount->deposit(60);
    
    $PremiumCheckingAccount->withdraw(10);

    $PremiumCheckingAccount->transfer(100);

    $PremiumCheckingAccount-> minimumCheckingAccount(50);
  ?>


</body>
</html>